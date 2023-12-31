<html lang="en">
    @yield('style')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eflyer</title>
    <link rel="stylesheet" href="{{ asset('css/access.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body id="body">
    <div class="wrapper">
        <span class="bg-animate"></span>
        <div class="form-box login">
            <h2>Register</h2>
            <form action="">
                <div class="input-box">
                    <input type="text" required>
                    <label for="">Username</label>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="email" required>
                    <label for="">Email</label>
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" required>
                    <label for="">Password</label>
                    <i class="fa-solid fa-lock"></i>
                </div>

                <button class="btn">Register</button>
                <div class="logreg-link">
                    <p>Already have an Account? <a href="login" class="register-link"> Sign In</a> </p>
                </div>
            </form>
        </div>
        <div class="info-text login">
            <h2>Please Register</h2>
            <p>
                Create an account with us
            </p>
        </div>
    </div>

</body>
</html>
