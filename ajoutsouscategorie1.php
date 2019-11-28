<?PHP
include "C:/xampp/htdocs/zahazni/entities/categorie.php";
include "C:/xampp/htdocs/zahazni/Core/categorieC.php";

include "C:/xampp/htdocs/zahazni/entities/souscategorie.php";
include "C:/xampp/htdocs/zahazni/Core/souscategorieC.php";
 
if(isset($_POST['reference_sous_categorie']) && isset($_POST['nom_sous_categorie']))
{
         echo "ajouter";
     echo $_POST['reference_sous_categorie'];
   $sous_categorie1=new sous_categorie($_POST['reference_sous_categorie'],$_POST['nom_sous_categorie'],$_POST['image_sous_categorie'],$_POST['reference_categorie']);
   $sous_categorie1C=new sous_categorieC();
   $sous_categorie1C->ajouter_sous_categorie($sous_categorie1);
   header('Location: affichersouscategorie.php');
     
}
else
{
     echo $_POST['reference_categorie'];
     echo $_POST['nom_categorie'];
     echo 'erreur';

   
}
?>

