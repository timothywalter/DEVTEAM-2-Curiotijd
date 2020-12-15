<link rel="stylesheet" href="css\register.css">
      
<style>
      body {
          font-family: 'Nunito';
      }
  </style>
</head>
<body>
  
  <div class="header">    
  <h1>Register</h1>
</div>

<form action="{{url('register')}}"  method="post" enctype="multipart/form-data">
  @csrf
 
  <div class="inputGroup">
      <label>Username: </label>
      <input type="text" name="Username" required>
  </div>
  <div class="inputGroup">
      <label>Password: </label>
      <input type="password" name="Password" required>
  </div>
  <div class="inputGroup">
    <select id="class" name="class">
      <option value="AMO2A">AMO2A</option>
      <option value="AMO2B">AMO2B</option>
      <option value="AMO2C">AMO2C</option>
      <option value="AMO2D">AMO2D</option>
    </select>
  </div>
  <div class="inputGroup">
  <button type="submit" name="registerBtn" class="btn">Register</button>
</div>
<p>
  Already a member? <a href="/">Login</a>
</p>

</form>

</body>
</html>

