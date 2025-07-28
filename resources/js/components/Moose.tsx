const Moose = ({ text }) => {
    return (
        <div className={"moose-helper"}>
            <img src="/moose.png" alt="moose" className="moose-img" />
            <p className="moose-text">{text}</p>
        </div>
    );
};

export default Moose;
