<HTML> 
    <meta http-equiv=""Content-Type" content="text/html;charset=utf-8"/> 
    <?php
            include('connexion.php');
    ?>
    <p>Choix d'une catégorie<BR/>
    <?php
            $listeCategories=$connexion->query("SELECT*FROM categorie order by 1");
            echo'<table><th classe="id">identifiant</th><th classe="des">Libelle</th></tr>';
            foreach($listeCategories as $categorie)
            {
                echo'<tr>';
                echo'<tr>'.$categorie["id_cat"].'</td';
                echo'<tr>'.$categorie["lid_cat"].'</td';
                echo'</tr>';
                
            }
            echo '</table>'
            
   ?>
                
<!-Saisie du code catégorie souhaité et envoi à la page AfficheProduits1Categ-->
<!-Mise en place d'un formulaire avec une zone de saisie pour le code -->

    <FORM action='AffichePrduits1Categorie.php'method= 'get'>
        </p> <inout type ="text" NAME="TldCat" SIZE="2"> 
        <input type='submit' value='Voir les produits associés'> 
        </FORM>
    <p><H><A href="index.php"> Retour PAge d'acceuil</A></H3></P>
    </HTML>
             