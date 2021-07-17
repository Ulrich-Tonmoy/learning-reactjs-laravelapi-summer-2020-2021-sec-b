import UserList from "./components/UserList";

function App() {
  const users = [
    { id: 1, name: 'Tonmoy', dept: 'CSE' },
    { id: 2, name: 'Ulrich', dept: 'SE' },
    { id: 3, name: 'Ulrich', dept: 'CS' },
    { id: 4, name: 'Abc', dept: 'EEE' },
    { id: 5, name: 'Xyz', dept: 'CIS' }
  ];

  return (
    <div className="App">
      <UserList users={users} />
    </div>
  );
}

export default App;
