import Card from "./Card";
import { useWords } from "../context/WordContext";

const Cards = () => {
  const { words, error } = useWords();

  if (error) return <p className="error-msg">{error}</p>;

  return (
    <div className="cards-container">
      <h2 className="cards-title">Your Flashcards</h2>
      <div className="cards">
        {words.map((w) => (
          <Card key={w.id} word={w} isSaved/>
        ))}
      </div>
    </div>
  );
};

export default Cards;
