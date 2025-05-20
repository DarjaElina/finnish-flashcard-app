import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import App from "./components/App.jsx";
import { WordProvider } from "./context/WordContext.jsx";

createRoot(document.getElementById("root")).render(
    <StrictMode>
        <WordProvider>
            <App />
        </WordProvider>
    </StrictMode>
);
