import React from 'react';
import User from './User';

export default function UserList({ users }) {

    return (
        <div>
            {users.map(user => {
                return <User{...user} />
            })}
        </div>
    )
}
