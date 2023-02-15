<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <!-- custome css -->
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="container">
        <header>Registration</header>
        <form action="signupchecking.php" method="post" autocomplete="on">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter Full Name" name="fullname" required> 
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter Date of Birth" name="dob" required> 
                        </div>

                        <div class="input-field">
                            <label>Enter Email</label>
                            <input type="email" placeholder="Enter Your Email " name="email" required> 
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter Mobile Number" name="mob" > 
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <input type="text" placeholder="Enter Your Gender" name="gender" required> 
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" placeholder="Enter Your Password" name="password" required> 
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Identity Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>ID Type</label>
                            <input type="text" placeholder="Enter ID Type" name="idtype" required> 
                        </div>

                        <div class="input-field">
                            <label>ID Number</label>
                            <input type="number" placeholder="Enter ID Number" name="idnumber" > 
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Enter Address " name="address" required> 
                        </div>

                        <div class="input-field">
                            <label>Pincode</label>
                            <input type="number" placeholder="Enter Your Pincode" name="pincode" required> 
                        </div>
                        
                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="Enter Your District" name="district" required> 
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" placeholder="Enter Your State" name="St" required> 
                        </div>
                    </div>
                </div>

                <button class="nextbtn" type="submit">
                    <span class="btn-submit">Sign Up</span>
                </button>
                <p>Have an account ? <a href="login.php">login</a></p>
            </div>
        </form>
    </div>
</body>
</html>