import Card from "./Card";
import { useWords } from "../context/WordContext";
import Moose from "./Moose";

const Cards = () => {
    const { words, error } = useWords();

    if (error) return <p className="error-msg">{error}</p>;

    return (
        <div className="cards-container">
            <Moose text="Here are your saved flashcards! You can edit or delete them anytime." />
            <div className="cards">
                {words.map((w) => (
                    <Card key={w.id} word={w} isSaved />
                ))}
            </div>
        </div>
    );
};

export default Cards;
