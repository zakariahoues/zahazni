<?PHP
include "C:/xampp/htdocs/zahazni/Core/souscategorieC.php";
$sous_categorieC=new sous_categorieC();
if (isset($_POST["reference_sous_categorie"])){
	$sous_categorieC->supprimersouscategorie($_POST["reference_sous_categorie"]);
	header('Location: affichersouscategorie.php');
}

?>