      <link rel="stylesheet" href="css\loginStyle.css">
      
      <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
        
        <div class="header">    
        <h1>Login</h1>
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
        <button type="submit" name="login" class="btn">Login</button>
    </div>
    <p>
        Not yet a member? <a href="register">Sign up</a>
    </p>
    </form>
    </body>
</html>
