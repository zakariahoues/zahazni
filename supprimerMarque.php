<?PHP
include_once "C:/xampp/htdocs/zahazni/Core/marqueC.php";
$marC=new marqueC();
if (isset($_POST["reference_marque"])){
	$marC->supprimerMarque($_POST["reference_marque"]);
	header('Location: affichermarque.php');
}

?>