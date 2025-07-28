import { useState, useEffect } from "react";
import axios from "axios";
import Card from "./Card";
import Moose from "./Moose";

const Cards = () => {
    const [words, setWords] = useState([]);
    const [error, setError] = useState(null);
    const [loading, setLoading] = useState(false);

    useEffect(() => {
        setLoading(true);
        axios
            .get("/api/words/external")
            .then((res) => {
                setWords(res.data.words ?? res.data);
            })
            .catch(() => setError("Failed to fetch words"))
            .finally(() => setLoading(false));
    }, []);

    if (loading) {
        return (
            <div className="cards-container">
                <Moose text="Loading your words..." />
            </div>
        );
    }

    if (error) {
        return (
            <div className="cards-container">
                <Moose text="Oops! Something went wrong! 😢" />
            </div>
        );
    }

    if (words.length === 0) {
        return (
            <div className="cards-container">
                <Moose text="Oops! I tried fetching words from the cloud, but something went wrong. Maybe the internet moose got tangled? 🫎💻" />
            </div>
        );
    }

    return (
        <div className="cards-container">
            <Moose text="These are words from the outside world! Tap a card to flip it. Save the ones you like!" />
            <div className="cards">
                {words.map((w) => (
                    <Card key={w.id} word={w} />
                ))}
            </div>
        </div>
    );
};

export default Cards;
