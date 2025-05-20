import Header from "./Header";
import { Outlet } from "react-router";

const Root = () => {
  return (
    <>
      <Header />
      <main>
        <div className="container">
          <Outlet />
        </div>
      </main>
    </>
  );
};

export default Root;