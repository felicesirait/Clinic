<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: url('https://st4.depositphotos.com/15601592/21008/i/1600/depositphotos_210082484-stock-photo-background-image-empty-doctors-office.jpg') repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 400px;
        }
        .login-container h2 {
            margin-bottom: 30px;
            font-size: 2rem;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            padding-left: 50px;
            height: 50px;
            font-size: 1.2rem;
        }
        .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            pointer-events: none;
            color: #aaa;
            font-size: 1.5rem;
        }
        .btn {
            font-size: 1.2rem;
            padding: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center">Login</h2>
        <form>
            <div class="form-group position-relative">
                <label for="username">Username</label>
                <span class="form-control-feedback"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="form-group position-relative">
                <label for="password">Password</label>
                <span class="form-control-feedback"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>