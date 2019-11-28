<?PHP
include_once "C:/xampp/htdocs/zahazni/Core/produitC.php";
$produitC=new produitC();
if (isset($_POST["reference_p"])){
	$produitC->supprimerproduit($_POST["reference_p"]);
	header('Location: afficherproduit.php');
}

?>