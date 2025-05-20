import { NavLink } from "react-router";

const Header = () => {
  return (
    <header className="app-header">
      <h1>Welcome to Finnish Vocabulary Flashcards App! 🇫🇮</h1>
      <nav>
        <ul className="nav-list">
          <li>
            <NavLink to="/cards" className="nav-link" >Cards</NavLink>
          </li>
          <li>
            <NavLink to="/saved" className="nav-link" >Saved cards</NavLink>
          </li>
          <li>
            <NavLink to="/create" className="nav-link" >Create card</NavLink>
          </li>
        </ul>
      </nav>
    </header>
  );
};

export default Header;
