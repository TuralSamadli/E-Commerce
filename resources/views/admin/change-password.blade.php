<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <form id="password-reset-form">
        <div id="alert"></div>
      
        <label for="oldpassword"> Old Password</label>
        <input type="password" id="oldpassword" />
      
        <label for="newpassword">New password</label>
        <input type="password" id="newpassword" />
      
        <a href="{{ route('updatepassword') }}" type="button" class="btn waves-effect waves-light btn-success">Reset Password</a>
    </form>
</body>
</html>