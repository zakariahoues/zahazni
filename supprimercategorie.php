<?PHP
include "C:/xampp/htdocs/zahazni/Core/categorieC.php";
$categorieC=new categorieC();
if (isset($_POST["reference_categorie"])){
	$categorieC->supprimercategorie($_POST["reference_categorie"]);
	header('Location: affichercategorie.php');
}

?>