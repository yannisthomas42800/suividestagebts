<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php
$bdd = new PDO('mysql:host=localhost;dbname=suivi_stage;charset=utf8', 'alexis_yannis', 'azertyuiop');
echo $donnees['idEnt'];

$idEnt=$_POST['idEnt'];
$nomEnt=$_POST['nomEnt'];
$requete='INSERT INTO Entreprise (idEnt, nomEnt) VALUES (?,?,?,?)';
$query=$bdd->prepare($requete);
$query->execute(array($idEnt,$nomEnt));
?>
	<?php $reponse = $bdd->query('SELECT * FROM Entreprise');
?>
<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8"/>
<h1>Entreprise</h1>


<table class="table">
	<thead class="thead-dark"></thead>
	  <tr>
	  	<th scope="col">idEnt</th>
	  	<th scope="col">nomEnt</th>
	  </tr>
	</thead>
	<tbody>  
<?php
while ($donnees = $reponse->fetch())
{
?>
	<tr>
		<td><?php echo $donnees['idEnt']; ?></td>
		<td><?php echo $donnees['nomEnt']; ?></td>
	</tr>
<?php
}
?>
   </tbody>
</table>

