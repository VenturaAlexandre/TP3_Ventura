<?php
$link = mysqli_connect("localhost","ventura","ventura","ventura");
if (!$link)
{
	die("<p>connexion impossible</p>");
}

$resultat = mysqli_query($link,"SELECT * FROM listeDeCourse");

echo "<table>";
foreach($resultat as $v)
{
	echo "<tr>";
	echo "<td>".$v['id']."</td>";
	echo "<td>".$v['nomArticle']."</td>";
	echo "<td>".$v['quantite']."</td>";
	echo "</tr>"
}
echo "</table>";

mysqli_close($link);

?>
<!DOCTYPE HTML>
<html lang="fr">
<body>
</body>
</html>