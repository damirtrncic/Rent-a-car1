<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <div class="header">
    <h2>Login</h2>
    <link rel="stylesheet" type="text/css" href="style41.css">
  </div>
  
  <form method="POST" action="proces.php">

    

    <div class="input-group">
          <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <label>Korisnicko ime</label>
      <input type="text" name="ime" placeholder="Name">

    </div>
    <div class="input-group">
      <label> Sifra</label>
      <input type="Password" name="pass" placeholder="Password">
    
    </div>
    
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Login</button>
    </div>
   
  </form>

</body>
</html>

</head>