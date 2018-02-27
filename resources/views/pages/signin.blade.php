<html>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}
    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;

        border: none;
        background: #f1f1f1;
    }


    /* Add padding to container elements */
    .container {
        padding: 16px;
    }

    /

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }


    }
</style>
<body>


<form action="/succesful" method="get">
    <div class="container">
        <h1>Sign In</h1>

        <hr>


        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="Username" required>
        <br>
        <br>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <br>
        <br>

        <div class="clearfix">
            <button  type="submit" class="signinpbtn">Sign in</button>
        </div>
    </div>
</form>