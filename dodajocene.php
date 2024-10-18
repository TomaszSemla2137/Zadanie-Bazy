<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
<h1>Dziennik</h1>
    </header>
    <main>
        <h2>Matematyka</h2>
     <form  action="dodajocene.php" method="post">
<label for="imie">Imię: </label>
<input type="text" name="Imie" id="imie">
<br>
<label for="nazwisko">Nazwisko: </label>
<input type="text" name="Nazwisko" id="nazwisko">
<br>
<label for="ocena">Ocena: </label>
<input type="number" name="Ocena" id="ocena">
<br>
<input type="submit" value="wyślij">
</form>
   <?php
   if(isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['ocena'])){
$conn = mysqli_connect('localhost', 'root', '', 'szkoła');
$imie = $_POST['Imie'];
$nazwisko = $_POST['Nazwisko'];
$ocena = $_POST['Ocena'];  
$sql = "INSERT INTO `matematyka` (`Imie`, `Nazwisko`, `Ocena`) values ('$imie', '$nazwisko', '$ocena')";
mysqli_query($conn, $sql);
echo "dodano ucznia";   }
else{
    echo "wypełnij wszystkie pola";
}
?>        
    </main>

    <aside>
<ul>
    <li><a href="jezykpolski.php">Polski</a></li>
    <li><a href="index.php">Matematyka</a></li>
    <li>J. Angielski</li>
    <li>Dodaj oceny</a></li>
</ul>
    </aside>

    <footer>
<h2>ZSZ Bobowa</h2>
    </footer>

</body>
</html>
