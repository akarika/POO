<h1>Home</h1>
<a href="index.php?p=single">Single</a>

<?php
$pdo = new PDO('mysql:host=localhost:8889;dbname=blog;charset=utf8', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//$count = $pdo->exec("INSERT INTO articles( titre, date) VALUES ('Mon titre',NOW())");
$resultat=$pdo->query('SELECT * FROM articles');
$datas = $resultat->fetchAll(PDO::FETCH_OBJ);
var_dump($datas[0]->date);

?>