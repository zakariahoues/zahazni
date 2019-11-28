<?PHP
include "C:/xampp/htdocs/zahazni/entities/rayon.php";
include "C:/xampp/htdocs/zahazni/Core/rayonC.php";

 
if(isset($_POST['reference_r']) && isset($_POST['nom_r']))
{
         echo "ajouter";
   $rayon1=new rayon($_POST['reference_r'],$_POST['nom_r'],$_POST['logo_r']);
   $rayon1C=new rayonC();
   $rayon1C->ajouter_rayon($rayon1);
   header('Location: afficherrayon.php');
     
}
else
{
     echo $_POST['reference_r'];
     echo $_POST['nom_r'];
     echo 'erreur';

   
}
?>

