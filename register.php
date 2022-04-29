<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background-image: url('01.jpg');
            background-size:cover;
        }
        form{
            margin-top: 6em;
            margin-right:20em;
            margin-left:20em;
            padding:30px;
            box-shadow: 5px 5px 5px 5px #888888;
            background:white;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST"  action="config.php">
        <div class="mb-3">
            <label for="exampleFullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="exampleFullname" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="email">
        </div>
        <div class="mb-3">
            <label for="examplephonenumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="examplephonenumber"name="phone_no">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1"name="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">submit</button>
            <p style="text-align:center;">Already Registered? <a href="Login.php">Login</a></p>
        </form>
    </div>
    
</body>
</html>