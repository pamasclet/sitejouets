<HTML>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<HEAD>
	<link href="jouets.css" rel="stylesheet" media="all" type="text/css">
</HEAD>

<BODY>
<?php
include ("connexion.php");
$listecategorie = $connexion->query("SELECT * FROM categorie" ); 

echo'<table><tr><th classe="id">identifiant</th><th classe="des">designation</th><th classe="photo">photo</th></tr>';

//pour chaque enregistrement
foreach ($listecategorie as $categorie)
{
    echo '<tr>';
    echo '<td>'.$categorie["id_cat"].'</td>';
    echo '<td>'.$categorie["lib_cat"].'</td>';
    $chemin = "Imagescat/".$categorie["photo_cat"];
    echo "<td><img src= $chemin width='100' height='75'></td>";
    echo '</tr>'; 
}
  echo '</table>';    
  ?>
    </BODY>
</HTML>