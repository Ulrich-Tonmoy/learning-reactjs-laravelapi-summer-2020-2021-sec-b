import React from 'react';
import User from './User';

export default function UserList({ users, deleteCallback }) {

    return (
        <div>
            {users.map(user => {
                return <User {...user} callback={deleteCallback} key={user.id} />
            })}
        </div>
    )
}
