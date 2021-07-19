import { useState } from "react";
import UserList from "./components/UserList";
import { users } from './components/UsersData';

function App() {
  const [user, setUser] = useState(users);
  const deleteUser = (id) => {
    const data = user.filter((user) => user.id !== id);
    setUser(data);
  }

  return (
    <div className="App">
      <UserList users={user} deleteCallback={deleteUser} />
    </div>
  );
}

export default App;
