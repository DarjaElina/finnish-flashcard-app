import { createBrowserRouter, RouterProvider } from "react-router-dom";
import Cards from "./Cards";
import Saved from "./Saved";
import CreateCard from "./CreateCard";
import Home from "./Home";
import Root from "./Root";

function App() {
    const router = createBrowserRouter([
        {
            path: "/",
            element: <Root />,
            children: [
                {
                    index: true,
                    element: <Home />,
                },
                {
                    path: "/cards",
                    element: <Cards />,
                },
                {
                    path: "/saved",
                    element: <Saved />,
                },
                {
                    path: "/create",
                    element: <CreateCard />,
                },
            ],
        },
    ]);
    return <RouterProvider router={router} />;
}

export default App;
