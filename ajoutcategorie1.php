<?PHP
include "C:/xampp/htdocs/zahazni/entities/categorie.php";
include "C:/xampp/htdocs/zahazni/Core/categorieC.php";

include "C:/xampp/htdocs/zahazni/entities/rayon.php";
include "C:/xampp/htdocs/zahazni/Core/rayonC.php";

 
if(isset($_POST['reference_categorie']) && isset($_POST['nom_categorie']))
{
         echo "ajouter";
     echo $_POST['reference_categorie'];
   $categorie1=new categorie($_POST['reference_categorie'],$_POST['nom_categorie'],$_POST['image_categorie'],$_POST['reference_r']);
   $categorie1C=new categorieC();
   $categorie1C->ajouter_categorie($categorie1);
   header('Location: affichercategorie.php');
     
}
else
{
     echo $_POST['reference_categorie'];
     echo $_POST['nom_categorie'];
     echo 'erreur';

   
}
?>

