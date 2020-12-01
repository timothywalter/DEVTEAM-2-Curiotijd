<link rel="stylesheet" href="css\register.css">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
        <div class="header">
            <h1>Register!</h1>
        </div>
        <form method="post" action="">
            <!--display validation errors here -->
            <div class="inputGroup">
                <label>Username: </label>
                <input type="text" name="username" required>
            </div>
            <div class="inputGroup">
                <label>Password: </label>
                <input type="password" name="password" required>
            </div>
            <div class="inputGroup">
            <button type="submit" name="resgisterBtn" class="btn">Register</button>
        </div>
        <p>
            Already a member? <a href="/">Login</a>
        </p>
        </form>
</html>
