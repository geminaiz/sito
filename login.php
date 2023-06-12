<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
 <!-- MENU' IN ALTO-->
 h.<header class="header">
    <div class="header__content">
      <a class="header__logo" href="index.html">
        <h3><strong>EchoVerse Productions</strong></h3>
      </a>
      <ul class="header__menu">
        <li><a href="chisiamo.html">Chi siamo</a></li>
        <li><a href="artisti.html">Artisti</a></li>
        <li><a href="rilasci.html">Rilasci</a></li>
        <li><a href="contatti.html">Contatti</a></li>
      </ul>
      <div class="header__quick">
        <strong><a href="login.php">Login</a></strong>
        <div class="icon-hamburger"> 
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </header>
<!-- MENU' IN ALTO-->


<!-- CONTENUTO PAGINA-->
<div class="cover" style="background-image:linear-gradient(to bottom, rgba(238, 49, 238, 0.39), rgba(0,0,0,0.6)), url('sfondisecondari/sfondosecondario2.jpg');">
    <div class="cover__content">
      <div class="section watch fade-in">
        <strong><h1>Area riservata</h1></strong> <br><br>
<center>
<div class="container">
        <div class="login-box">
          <h2>Accedi</h2>
          <form action="" method="POST">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" id="username" placeholder="Inserisci il tuo username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" placeholder="Inserisci la tua password" required>
            </div>
            <div class="form-group">
              <button type="submit">Accedi</button>
            </div>
          </form>
        </div>
      </div>
</center>
    </div>
</div>
</div>     
 <!-- CONTENUTO PAGINA-->


 <?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "echoverse_db"; 

  if($_SERVER['REQUEST_METHOD'] === 'POST') {  
          
     $conn = mysqli_connect($servername, $username, $password, $dbname);

      if(!$conn) {
        
        die("connection failed: ". mysqli_connect_error());
        
      }
        
        echo "connection succeded <br><br>";

    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        $usernameP = $_POST['username'];
        $passwordP = $_POST['password'];
      

     
        $sql = "SELECT nickname FROM utenti WHERE firstname = '$usernameP' AND lastname = '$passwordP'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) == 1) {
            // Login avvenuto con successo, stampa il record associato
          $row = mysqli_fetch_assoc($result);
          echo "Bentornato/a " . $row['nickname'];
        } else {
            // Credenziali errate
            echo "Credenziali errate, riprova";
        }
      }
  }         
?> 


 <!--FOOTER-->
 <div class="section watch fade-in">
    <footer class="footer">
      <div class="container">
        <p>© 2023 EchoVerse Productions. Tutti i diritti sono riservati.</p>
        <ul>
          <li><a href="termini.html">Termini di servizio</a></li>
          <li><a href="privacy.html">Privacy Policy</a></li>
        </ul>
      </div>
    </footer>
  </div>
    <!--FOOTER-->

    
  <!--JAVASCRIPT = SCORRIMENTO PAGINE-->
  <script type="text/javascript" src="animazioni.js"></script>
  <!--JAVASCRIPT-->

</body>
</html>