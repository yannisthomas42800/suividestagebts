<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php
$bdd = new PDO('mysql:host=localhost;dbname=suivi_stage;charset=utf8', 'alexis_yannis', 'azertyuiop');
echo $donnees['idTut'];

$idTut=$_POST['idTut'];
$nomTut=$_POST['nomTut'];
$prenTut=$_POST['prenTut'];
$mailTut=$_POST['mailTut'];
$requete='INSERT INTO STAGE (idTut, nomTut, prenTut, mailTut) VALUES (?,?,?,?)';
$query=$bdd->prepare($requete);
$query->execute(array($ref_etu,$nomTut,$prenTut,$mailTut));
?>
	<?php $reponse = $bdd->query('SELECT * FROM STAGE');
?>
<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8"/>
<h1>Stage</h1>


<table class="table">
	<thead class="thead-dark"></thead>
	  <tr>
	  	<th scope="col">id Tut</th>
	  	<th scope="col">nomTut</th>
	  	<th scope="col">prenTut</th>
	  	<th scope="col">mailTut</th>
	  </tr>
	</thead>
	<tbody>  
<?php
while ($donnees = $reponse->fetch())
{
?>
	<tr>
		<td><?php echo $donnees['idTut']; ?></td>
		<td><?php echo $donnees['nomTut']; ?></td>
		<td><?php echo $donnees['prenTut']; ?></td>
		<td><?php echo $donnees['mailTut']; ?></td>
	</tr>
<?php
}
?>
   </tbody>
</table>

