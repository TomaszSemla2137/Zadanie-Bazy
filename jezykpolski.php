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
        <h2>Polski</h2>
        <div class="tabela">
      <?php
       $conn = mysqli_connect('localhost', 'root', '', 'Szkoła');
       $sql = "select * from uczniowie";
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_assoc($result)){
        echo "<div class='dane'>ID: " . $row['id'] . "<br>
        Imię:" . $row['Imie'] . "<br>
        nazwisko: ". $row ['Nazwisko'] . "<br>
        Ocena:". $row['Ocena']."</div>";
    }
    ?>
    </div>
    
        
    </main>

    <aside>
<ul>
    <li>Polski</a></li>
    <li><a href="index.php">Matematyka</a></li>
    <li>J. Angielski</li>
</ul>
    </aside>

    <footer>
<h2>ZSZ Bobowa</h2>
    </footer>

</body>
</html>
