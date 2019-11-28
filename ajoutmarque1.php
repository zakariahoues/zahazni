<?PHP
include "C:/xampp/htdocs/zahazni/entities/marque.php";
include "C:/xampp/htdocs/zahazni/Core/marqueC.php";

 
if(isset($_POST['reference_marque']) && isset($_POST['nom_marque']))
{
         echo "ajouter";
     echo $_POST['reference_marque'];
   $marque1=new marque($_POST['reference_marque'],$_POST['nom_marque'],$_POST['image_marque']);
   $marque1C=new marqueC();
   $marque1C->ajouter_marque($marque1);
   header('Location: affichermarque.php');
     
}
else
{
     echo $_POST['reference_marque'];
     echo $_POST['nom_marque'];
     echo 'erreur';

   
}
?>

