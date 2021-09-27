<h3>User Login Form</h3>

<form action="login" method="post">
    @csrf
    <input type="text" name="username" id="" placeholder="Enter name here">
    <br>
    <span style = "color:red">@error('username') {{$message}} @enderror </span>
    <br>
    <input type="password" name="password" id="" placeholder="Enter password here">
    <br>
    <span style="color:red">
        @error('password') {{$message}}  @enderror
    </span>
    <br>
    <button type="submit">Submit</button>
</form>