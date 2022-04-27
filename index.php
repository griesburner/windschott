<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
<title>Windschott Design</title>
</head>
<body>



<a href="index.html"><img id="logo" src="../img/logo.svg" /></a>

  <div class="menu-bg"></div>
  <div class="menu-burger">☰</div>
  <div class="menu-items">
    <a href="index.php"><div>Windschott Design</div></a>
    <a href="index.php"><div>Unsere Windschotts</div></a>
    <a href="index.php"><div>Service</div></a>
    <a href="index.php"><div>TÜV-Gutachten</div></a>
    <a href="index.php"><div>Kontakt</div></a>
  </div>


  <div id="teaser">
    <div id="rec">
        <p id="titel">Der Windschott Shop<br /> mit großer Auswahl</p>
        <div id="desktopteaser">
        <p>
        Unser Unternehmen steht seit 1997 für die Entwicklung und den Vertrieb von edlen Echtglas Windschotts für fast alle führenden Automarken.
        </p>
        </div>
        <a href="index.php" class="button">-> Unsere Windschotts</a>
    </div>
  </div>  

<div id="section1">
<h3>
  Qualitätswindschotts seit 1997
</h3>
<p class="mobileinhalt">
Unsere besondere Kompetenz bezüglich Windblocker liegt im Bereich Windschott Sonderanfertigungen und ständigen Neuentwicklungen für die aktuellen Modelle mit TÜV-Gutachten. Langjährige Kunden schätzen besonders die hohe Qualität …
</p>
<p class="desktopinhalt">
Unsere besondere Kompetenz bezüglich Windblocker liegt im Bereich Windschott Sonderanfertigungen und ständigen Neuentwicklungen für die aktuellen Modelle mit TÜV Gutachten. Langjährige Kunden schätzen besonders die hohe Qualität unserer Produkte, unsere Zuverlässigkeit sowie die Flexibilität mit der wir unser Unternehmen führen. Die mehr als 15, beim deutschen Patent-und Markenamt angemeldeten, Geschmacksmuster zeugen von unserer Innovations- und Fachkompetenz im Bereich Glaswindschotts. 
Auch viele namhafte Tuner und renommierte Autohäuser gehören zu unserem Kundenkreis.  
</p>
<a href="index.html" class="buttondark">-> Mehr über uns erfahren</a>
</div>


<div class="single-item">
<div class="slide">
<h3>
Individuelle Ausführungen von Ihrem Windschott möglich
</h3>
<img src="../img/box1.png" />
<center><a href="index.php">-> Windschotts „Clean“</a></center>
<div class="buttonreihe">
<button class="circleblue"></button>
<button class="circlewhite"></button>
<button class="circlewhite"></button>
</div>  
</div>
<div class="slide">
  <h3>
  Individuelle Ausführungen von Ihrem Windschott möglich
  </h3>
  <img src="../img/box2.png" />
  <center><a href="index.php">-> Windschotts mit Herstellerlogo</a></center>
  <div class="buttonreihe">
  <button class="circlewhite"></button>
  <button class="circleblue"></button>
  <button class="circlewhite"></button>
  </div>  
  </div>
  <div class="slide">
    <h3>
    Individuelle Ausführungen von Ihrem Windschott möglich
    </h3>
    <img src="../img/box3.png" />
    <center><a href="index.php">-> Windschotts mit individuellem Artwork</a></center>
    <div class="buttonreihe">
    <button class="circlewhite"></button>
    <button class="circlewhite"></button>
    <button class="circleblue"></button>
    </div>  
    </div>
</div>

<div id="section2">
  <h3>
    Das sagen unsere Kunden
  </h3>

<div id="zitatbox">
  <div id="kommata">"</div>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=windschott', 'root', '');


if (isset($_POST['aktion']) and $_POST['aktion']=='speichern') {
  $vorname = "";
  if (isset($_POST['vorname'])) {
      $vorname = trim($_POST['vorname']);
  }
  $nachname = "";
  if (isset($_POST['nachname'])) {
      $nachname = trim($_POST['nachname']);
  }
  $email = "";
  if (isset($_POST['email'])) {
      $email = $_POST['email'];
  }
  $bewertungstext = "";
  if (isset($_POST['bewertungstext'])) {
      $bewertungstext = $_POST['bewertungstext'];
  }
  if ( $vorname != '' or $nachname != '' or $email != '' or $bewertungstext != "")
  {
      // speichern
      $einfuegen = $pdo->prepare("
               INSERT INTO kommentarfunktion (vorname, nachname, email, text) 
               VALUES (?, ?, ?, ?)
               ");
      $einfuegen->bind_param('ssss', $vorname, $nachname, $email, $bewertungstext);
      if ($einfuegen->execute()) {
          header('Location: index.php?aktion=feedbackgespeichert');
          die();
      }
    }
  }

if (isset($_POST['aktion']) and $_POST['aktion']=='feedbackgespeichert') {
  echo '<p class="feedbackerfolg">Datensatz wurde gespeichert</p>';
}









$statement = $pdo->prepare("SELECT COUNT(*) AS anzahl FROM kommentarfunktion");
$statement->execute();  
$anzahl_reihen = $statement->fetch();


$id = isset($_POST["oldid"])?intval($_POST["oldid"]):1;

if(isset($_POST['button1'])) {
  if ($id > 1) {
    $id --;
  } else
  $id = 2;
}

if(isset($_POST['button2'])) {
  if ($id < $anzahl_reihen['anzahl']) {
    $id ++;
  } else
  $id = 1;
}





$sql = "SELECT vorname, nachname, text FROM kommentarfunktion WHERE id = $id";

foreach ($pdo->query($sql) as $row) {
    echo $row['text']."<br /><br />";  
    echo $row['vorname']." ".$row['nachname']."<br />"; 
}




?>
</div>

<div id="kommentarslider">
<form action="" method="post">
        <input type="submit" name="button1"
                id="kommentarsliderbuttonleft" value="<--" />
        <input type="submit" name="button2"
                id="kommentarsliderbuttonright" value="-->" />
        <input type="hidden" value="<?php echo $id; ?>" name="oldid" />    
</form>
</div>

<center><button class="buttondark">-> Bewertung verfassen</button></center>
</div>

<hr />

<div id="bewertung">

<p>
Bewertung verfassen<br /><br />
Gerne können Sie uns mit dem folgenden Formular eine Bewertung zukommen lassen.
</p>

<form action="" method="post">

  <label for="vorname">Vorname:</label><br>
  <input type="text" id="vorname" name="vorname"><br>
  <label for="nachname">Nachname:</label><br>
  <input type="text" id="nachname" name="nachname">
  <br>
  <label for="email">E-Mail:</label><br>
  <input type="email" id="email" name="email">
  <br>
  <label for="bewertungstext">Bewertung:</label><br>
  <textarea id="bewertungstext" name="bewertungstext"></textarea>
  <br><br>




    <input type="hidden" name="aktion" value="speichern">
    <input type="submit" value="speichern" class="buttondark">


</form>
</div>










<script type="text/javascript" src="script.js"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.single-item').slick();
  });
</script>
</body>
</html>