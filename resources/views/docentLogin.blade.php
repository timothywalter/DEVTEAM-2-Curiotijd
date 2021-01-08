<link rel="stylesheet" href="css\loginStyle.css">
      
<style>
      body {
          font-family: 'Nunito';
      }
  </style>
</head>
<body>
  
  <div class="header">    
  <h1>Docenten login</h1>
</div>

<form action="{{url('login')}}"  method="post" enctype="multipart/form-data">
  @csrf
 
  <div class="inputGroup">
      <label>Docenten gebruikersnaam: </label>
      <input type="text" name="username" required>
  </div>
  <div class="inputGroup">
      <label>Wachtwoord: </label>
      <input type="password" name="password" required>
  </div>
  <div class="inputGroup">
  <button type="submit" name="login" class="btn">Login</button>
</div>
<p>
  Nog geen account? <a href="register">Meld je hier aan</a>
</p>

</form>

</body>
</html>
