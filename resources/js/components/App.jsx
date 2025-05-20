import { createBrowserRouter, RouterProvider } from "react-router-dom";
import Cards from "./Cards";
import Saved from "./Saved";
import CreateCard from "./CreateCard";
import Root from "./Root";

function App() {
  const router = createBrowserRouter([
      {
        path: '/',
        element: <Root />,
        children: [
          {
            path: '/cards',
            element: <Cards />
          },
          {
            path: '/saved',
            element: <Saved />
          },
          {
            path: '/create',
            element: <CreateCard />
          }
        ]
      }
  ])
  return <RouterProvider router={router} />;
}

export default App;