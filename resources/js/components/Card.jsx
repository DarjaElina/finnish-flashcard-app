import { useState } from "react";
import { useWords } from "../context/WordContext";
import Swal from "sweetalert2";

const Card = ({ word, onSave, isSaved }) => {
  const [flipped, setFlipped] = useState(false);
  const [isEditing, setIsEditing] = useState(false);
  const { updateWord, deleteWord, addWord } = useWords();
  const [updatedWord, setUpdatedWord] = useState({
    english: word.english,
    finnish: word.finnish,
    example: word.example,
  });

  const openEditMode = (e) => {
    e.stopPropagation();
    setIsEditing(true);
  };

  const handleChange = (e) => {
    const { name, value } = e.target;
    setUpdatedWord((prev) => ({ ...prev, [name]: value }));
  };

  const handleUpdate = async (e) => {
    e.stopPropagation();
    try {
      await updateWord(word.id, updatedWord);
      setIsEditing(false);
      Swal.fire({
        title: "Saved!",
        icon: "success",
        background: "#2e003e",
        color: "#f5e8ff",
        confirmButtonColor: "#a14cc6",
      });
    } catch (e) {
      setUpdatedWord({
        english: word.english,
        finnish: word.finnish,
        example: word.example,
      })
      Swal.fire({
        title: "Error saving",
        text: e?.response?.data?.error || e.message || "Something went wrong",
        icon: "error",
        background: "#2e003e",
        color: "#f5e8ff",
        confirmButtonColor: "#a14cc6",
      });
    }
  };

  const handleDelete = async (e) => {
    e.stopPropagation();
    const result = await Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to recover this word!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#a14cc6",
      cancelButtonColor: "#888",
      confirmButtonText: "Yes, delete it!",
      background: "#2e003e",
      color: "#f5e8ff",
    });

    if (result.isConfirmed) {
      try {
        await deleteWord(word.id);
        Swal.fire({
          title: "Deleted!",
          text: "The word has been deleted.",
          icon: "success",
          background: "#2e003e",
          color: "#f5e8ff",
          confirmButtonColor: "#a14cc6",
        });
      } catch (e) {
        Swal.fire({
          title: "Error deleting",
          text: e?.response?.data?.error || e.message || "Something went wrong",
          icon: "error",
          background: "#2e003e",
          color: "#f5e8ff",
          confirmButtonColor: "#a14cc6",
        });
      }
    }
  };

  const handleCancel = (e) => {
    e.stopPropagation();
    setIsEditing(false);
  };

  const handleSave = async (e) => {
    e.stopPropagation();
    try {
      await addWord({
          finnish: word.finnish,
          english: word.english,
          example: word.example,
      });
      Swal.fire({
        title: "Saved!",
        text: "The word has been saved.",
        icon: "success",
        background: "#2e003e",
        color: "#f5e8ff",
        confirmButtonColor: "#a14cc6",
      });
    } catch (e) {
      Swal.fire({
        title: "Error saving",
        text: e?.response?.data?.error || e.message || "Something went wrong",
        icon: "error",
        background: "#2e003e",
        color: "#f5e8ff",
        confirmButtonColor: "#a14cc6",
      });
    }
  }

  return (
    <div
      className={`card ${flipped ? "flipped" : ""}`}
      onClick={() => !isEditing && setFlipped(!flipped)}
    >
      <div className="card-inner">
        <div className="card-front">
          <h2>{word.finnish}</h2>
        </div>
        <div className="card-back">
          {isEditing ? (
            <div className="edit-form">
              <input
                onChange={handleChange}
                value={updatedWord.finnish}
                name="finnish"
                id="finnish"
                type="text"
                className="form-input edit-input"
              />
              <input
                onChange={handleChange}
                value={updatedWord.english}
                name="english"
                id="english"
                type="text"
                className="form-input edit-input"
              />
              <textarea
                onChange={handleChange}
                value={updatedWord.example}
                name="example"
                id="example"
                type="text"
                className="form-input edit-input"
              />
              <div className="edit-btns">
                <button
                  onClick={handleUpdate}
                  className="form-button"
                >
                  Save
                </button>
                <button
                  onClick={handleCancel}
                  className="form-button"
                >
                  Cancel
                </button>
              </div>
            </div>
          ) : (
            <>
              <h2>{word.english}</h2>
              <p>
                <em>{word.example}</em>
              </p>
            </>
          )}

          {!isSaved && !isEditing && (
            <button
              onClick={handleSave}
              className="form-button"
            >
              Save
            </button>
          )}

          {isSaved && !isEditing && (
            <div className="card-btns">
              <button
                onClick={handleDelete}
                className="form-button danger-button"
              >
                Delete
              </button>
              <button
                onClick={openEditMode}
                className="form-button secondary-button"
              >
                Edit
              </button>
            </div>
          )}
        </div>
      </div>
    </div>
  );
};

export default Card;


