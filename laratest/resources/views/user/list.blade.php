<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
</head>

<body>
    <h3>User List</h3>
    <a href="/user/create"> Create New </a>
    <br> <br>

    <table border="1">
        <tr>
            <td> ID </td>
            <td> Name </td>
            <td> Type </td>
            <td> Department </td>
            <td> Action </td>
        </tr>

        @foreach ($userList as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->type}}</td>
            <td>{{$user->dept}}</td>
            <td>
                <a href="/user/details/{{$user->id}}"> Details </a> |
                <a href="/user/edit/{{$user->id}}"> Edit </a> |
                <a href="/user/delete/{{$user->id}}"> Delete </a> |
            </td>
        </tr>
        @endforeach

    </table>
</body>

</html>