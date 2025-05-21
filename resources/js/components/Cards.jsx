import { useState, useEffect } from "react";
import axios from "axios";
import Card from "./Card";
import { ThreeDot } from "react-loading-indicators";

const Cards = () => {
  const [words, setWords] = useState([]);
  const [error, setError] = useState(null);
  const [loading, setLoading] = useState(false);

  useEffect(() => {
    setLoading(true)
    axios.get("/api/words/external")
      .then((res) => {
        setWords(res.data.words ?? res.data)
      })
      .catch(() => setError("Failed to fetch words"))
      .finally(() => setLoading(false));
  }, []);


  if (loading) {
    return (
      <div style={{display: 'flex', justifyContent: 'center', alignItems: 'center', width: '100%', height: '100vh', position: 'fixed', top: 0, left: 0}}>
        <ThreeDot color="#ce93d8" size="medium" text="" textColor="" />
      </div>
    )
  }

  if (error) {
    return (
        <p style={{marginTop: '10rem'}} className="error-msg">Something went wrong: {error}</p>
    )
  }

  if (words.length === 0) {
    return <p className="error-msg">Something went wrong...</p>
  }

  return (
    <div className="cards-container">
      <h2 className="cards-title">Flashcards</h2>
      <div className="cards">
        {words.map((w) => (
          <Card key={w.id} word={w} />
        ))}
      </div>
    </div>
  );
};

export default Cards;

