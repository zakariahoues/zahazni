<?php

  include "C:/xampp/htdocs/zahazni/Core/produitC.php";
include "C:/xampp/htdocs/zahazni/Core/categorieC.php";
 include "C:/xampp/htdocs/zahazni/Core/souscategorieC.php";
    
include "C:/xampp/htdocs/zahazni/Entities/produit.php";
include "C:/xampp/htdocs/zahazni/Entities/categorie.php";
include "C:/xampp/htdocs/zahazni/Entities/souscategorie.php";

    if(isset($_POST['reference_p']) and      )

  {
         echo "ajouter";
     echo $_POST['reference_sous_categorie'];
   $produit1=new produit($_POST['reference_p'],$_POST['nom_p'],$_POST['description_p'],$_POST['couleur_p'],$_POST['quantite_p'],$_POST['quantite_minimale_p'],$_POST['prix_p'],$_POST['prix_de_vente_p'],$_POST['date_p'],$_POST['reference_sous_categorie'],$_POST['nom_marque'],$_POST['image_p'],$_POST['matiere'],$_POST['etat']);
   $produit1C=new produitC();
   $produit1C->ajouterproduit($produit1);
  header('Location: afficherproduit.php');
     
}
else
{
     echo $_POST['reference_categorie'];
     echo $_POST['nom_categorie'];
     echo 'erreur';

   
}
?>