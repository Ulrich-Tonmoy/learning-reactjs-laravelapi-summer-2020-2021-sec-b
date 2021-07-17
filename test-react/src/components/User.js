import './User.css';

export default function User({ id, name, dept }) {
    return (
        <div className="user">
            <h3>Name:{name}</h3>
            <p>Id:{id}</p>
            <p>Dept:{dept}</p>
        </div>
    )
}
