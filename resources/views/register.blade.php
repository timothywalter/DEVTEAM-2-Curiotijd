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

<form action="{{url('register')}}"  method="post" enctype="multipart/form-data">
  @csrf
 
  <div class="inputGroup">
      <label>Username: </label>
      <input type="text" name="username" required>
  </div>
  <div class="inputGroup">
      <label>Password: </label>
      <input type="password" name="password" required>
  </div>
  <div class="inputGroup">
  <button type="submit" name="registerBtn" class="btn">Register</button>
</div>
<p>
  Already a member? <a href="login">Login</a>
</p>

</form>

</body>
</html>

