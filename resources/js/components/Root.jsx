import Header from "./Header";
import { Outlet } from "react-router";
import Moose from "./Moose";

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
