
<?php

include "C:/xampp/htdocs/zahazni/entities/promotion.php";
include "C:/xampp/htdocs/zahazni/Core/promotionC.php";

 echo $_POST['idProduit'];
 echo $_POST['pourcentage'];
 echo $_POST['dateD'];
 echo $_POST['dateF'];
if(isset($_POST["idProduit"]) and isset($_POST["pourcentage"]) and isset($_POST["dateD"]) and isset($_POST["dateF"]) )
{
    $P1=new promotion(NULL,$_POST["idProduit"],$_POST["pourcentage"],$_POST["dateD"],$_POST["dateF"] );
    $ajouC=new promotionC();
    $ajouC->ajoutPromotion($P1);

   // header('location:afficherpromotion.php');
}
?>