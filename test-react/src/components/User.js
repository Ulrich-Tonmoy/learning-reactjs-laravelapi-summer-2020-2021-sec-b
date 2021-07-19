import './User.css';

export default function User({ id, name, dept, callback }) {
    return (
        <div className="user">
            <h3>Name:{name}</h3>
            <p>Id:{id}</p>
            <p>Dept:{dept}</p>
            <button id="delete" onClick={() => { callback(id) }}>Delete</button>
            <button id="edit" onClick={() => { }}>Edit</button>
            {/* <a href={"/edit/" + id}>Edit</a> */}
        </div>
    )
}
