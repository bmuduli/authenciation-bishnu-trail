<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <!-- custome css -->
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <header>Log in</header>
        <form action="signinsucessful.php" method="post" autocomplete="on">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Login Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Enter Email</label>
                            <input type="email" placeholder="Enter Your Email " name="email" required> 
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" placeholder="Enter Your Password" name="password" required> 
                        </div>
                    </div>
                </div>

              

                <button class="nextbtn" type="submit">
                    <span class="btn-submit">Log In</span>
                </button>
                <p>Create account ? <a href="index.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>