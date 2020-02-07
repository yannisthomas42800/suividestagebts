<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php
$bdd = new PDO('mysql:host=localhost;dbname=suivi_stage;charset=utf8', 'alexis_yannis', 'azertyuiop');
echo $donnees['idEtudiant'];

$idEtudiant=$_POST['idEtudiant'];
$nomEtu=$_POST['nomEtu'];
$prenEtu=$_POST['prenEtu'];
$mailEtu=$_POST['mailEtu'];
$requete='INSERT INTO Etudiant (idEtudiant, nomEtu, prenEtu, mailEtu) VALUES (?,?,?,?)';
$query=$bdd->prepare($requete);
$query->execute(array($idEtudiant,$nomEtu,$prenEtu,$mailEtu));
?>
	<?php $reponse = $bdd->query('SELECT * FROM Etudiant');
?>
<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8"/>
<h1>Etudiant</h1>


<table class="table">
	<thead class="thead-dark"></thead>
	  <tr>
	  	<th scope="col">idEtudiant</th>
	  	<th scope="col">nomEtu</th>
	    <th scope="col">prenEtu</th>
	    <th scope="col">mailEtu</th>
	  </tr>
	</thead>
	<tbody>  
<?php
while ($donnees = $reponse->fetch())
{
?>
	<tr>
		<td><?php echo $donnees['idEtudiant']; ?></td>
		<td><?php echo $donnees['nomEtu']; ?></td>
		<td><?php echo $donnees['prenEtu']; ?></td>
		<td><?php echo $donnees['mailEtu']; ?></td>
	</tr>
<?php
}
?>
   </tbody>
</table>

