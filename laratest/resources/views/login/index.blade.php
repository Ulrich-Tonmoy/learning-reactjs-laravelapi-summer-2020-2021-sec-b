<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
</head>

<body>
    <form method="post">
        <table>
            {{csrf_field()}}
            <tr>
                <td>Name</td>
                <td><input type="text" name="uname" value="{{old('uname')}}"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="{{old('password')}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="submit"></td>
            </tr>
        </table>
    </form>
    
    {{session('msg')}}
		<br>

		@foreach ($errors->all() as $err)
			{{$err}} <br>
		@endforeach

    <a href="/register"> Signup</a>
</body>

</html>