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
        <div class="tabela">
      <?php
       $conn = mysqli_connect('localhost', 'root', '', 'Szkoła');
       $sql = "select * from uczniowie";
       $result = mysqli_query($conn, $sql);
       echo "<table border=1> <tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>Ocena</th></tr>";
       while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>" .$row['id'] . "</td><td>" .$row['Imie'] . "</td><td>" .$row['Nazwisko'] . "</td><td>" .$row['Ocena'] . "</td></tr>";
    }
    echo "</table>";
    ?>
    </div>
    
        
    </main>

    <aside>
<ul>
    <li><a href="jezykpolski.php">Polski</a></li>
    <li>Matematyka</li>
    <li>J. Angielski</li>
</ul>
    </aside>

    <footer>
<h2>ZSZ Bobowa</h2>
    </footer>

</body>
</html>
