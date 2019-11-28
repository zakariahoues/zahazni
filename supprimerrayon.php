<?PHP
include_once "C:/xampp/htdocs/zahazni/Core/rayonC.php";
$rayonC=new rayonC();
if (isset($_POST["reference_r"])){
	$rayonC->supprimerRayon($_POST["reference_r"]);
	header('Location: afficherrayon.php');
}

?>