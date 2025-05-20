import { useState, useEffect } from "react";
import axios from "axios";
import Card from "./Card";
import { useWords } from "../context/WordContext";

const Cards = () => {
  const [words, setWords] = useState([]);
  const [error, setError] = useState(null);
  const { addWord } = useWords();

  useEffect(() => {
    axios.get("/api/words/external")
      .then((res) => setWords(res.data.words ?? res.data))
      .catch(() => setError("Failed to fetch words"));
  }, []);

  const handleSave = async (word) => {
    try {
      await addWord({
        finnish: word.finnish,
        english: word.english,
        example: word.example,
      });
    } catch (e) {
      console.log(error);
    }
  };

  if (error) return <p className="error-msg">{error}</p>;

  if (words.length === 0) {
    return <p className="error-msg">Something went wrong...</p>
  }

  return (
    <div className="cards-container">
      <h2 className="cards-title">Flashcards</h2>
      <div className="cards">
        {words.map((w) => (
          <Card key={w.id} word={w} onSave={handleSave} />
        ))}
      </div>
    </div>
  );
};

export default Cards;

