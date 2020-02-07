<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php
  $bdd = new PDO('mysql:host=localhost;dbname=suivi_stage;charset=utf8', 'alexis_yannis', 'azertyuiop');
  echo $donnees['ref Etudiant'];

  $ref_etu=$_POST['ref étudiant'];
  $datedeb=$_POST['Date Début'];
  $datefin=$_POST['Date Fin'];
  $refTut=$_POST['ref tuteur'];
  $refEnt=$_POST['ref entreprise'];
  $des=$_POST['Description'];
  $requete='INSERT INTO STAGE (ref Etudiant, DateDébut, DateFin, refTut, refEnt, Description) VALUES (?,?,?,?)';
  $query=$bdd->prepare($requete);
  $query->execute(array($ref_etu,$datedeb,$datefin,$refTut));
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
  <th scope="col">ref étudiant</th>
  <th scope="col">Date Début</th>
  <th scope="col">Date Fin</th>
  <th scope="col">ref tuteur</th>
  <th scope="col">ref entreprise</th>
  <th scope="col">Description</th>
 </tr>
</thead>
<tbody>  
<?php
while ($donnees = $reponse->fetch())
{
?>
<tr>
<td><?php echo $donnees['ref étudiant']; ?></td>
<td><?php echo $donnees['ref étudiant']; ?></td>
<td><?php echo $donnees['ref étudiant']; ?></td>
<td><?php echo $donnees['ref étudiant']; ?></td>
<td><?php echo $donnees['ref étudiant']; ?></td>
<td><?php echo $donnees['ref étudiant']; ?></td>
    </tr>
<?php
}
?>
   </tbody>
</table>

