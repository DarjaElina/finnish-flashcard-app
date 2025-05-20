import { createContext, useContext, useState, useEffect } from "react";
import axios from "axios";

const WordContext = createContext();

export const useWords = () => useContext(WordContext);

export const WordProvider = ({ children }) => {
  const [words, setWords] = useState([]);
  const [error, setError] = useState(null);

  useEffect(() => {
    axios.get("/api/words")
      .then((res) => setWords(res.data.words ?? res.data))
      .catch(() => setError("Failed to fetch words"));
  }, []);

  const addWord = async (newWord) => {
    try {
      const { data } = await axios.post("/api/words", newWord);
      setWords((prev) => [...prev, data]);
    } catch (err) {
      throw new Error("Failed to save word");
    }
  };

  const updateWord = async (id, updatedWord) => {
    try {
      const {data} = await axios.patch(`/api/words/${id}`, updatedWord);
      setWords((prev) => 
        prev.map((w) => w.id === id ? data : w)
    );
    } catch (e) {
      throw new Error("Failed to update word")
    }
  }

  const deleteWord = async (id) => {
    try {
      await axios.delete(`/api/words/${id}`);
      setWords((prev) => 
        prev.filter((w) => w.id !== id)
      );
    } catch (e) {
      throw new Error("Failed to delete word!")
    }
  } 

  return (
    <WordContext.Provider value={{ words, addWord, error, updateWord, deleteWord }}>
      {children}
    </WordContext.Provider>
  );
};
