<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 w-25">
        <div class="card">
            <form method="POST" action="cobacoba.php">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                    Login
                </button>
            </form>
        </div>
    </div>

</body>

</html>