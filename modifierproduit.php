<?php
  
  include_once "C:/xampp/htdocs/zahazni/Core/categorieC.php";
include "C:/xampp/htdocs/zahazni/entities/produit.php";
  include_once "C:/xampp/htdocs/zahazni/Core/souscategorieC.php";

include "C:/xampp/htdocs/zahazni/Core/produitC.php";
  


if (isset($_GET['reference_p'])){
    $produitC=new produitC();
    $result=$produitC->recupererproduit($_GET['reference_p']);
    foreach($result as $row){
 $reference_p=$row['reference_p'];
        $nom_p=$row['nom_p'];
        $description_p_r=$row['couleur_p'];
         $nom_p=$row['quantite_p'];
        $description_p_r=$row['quantite_minimale_p'];
         $nom_p=$row['prix_p'];
        $description_p_r=$row['prix_de_vente_p'];
        
         $nom_p=$row['date_p'];
        $description_p_r=$row['reference_sous_categorie'];
        
         $nom_p=$row['nom_marque'];
        $description_p_r=$row['image_p'];
         $nom_p=$row['matiere'];
        $description_p_r=$row['etat'];
        
       
?>
<?php
$sous_categoriec = new sous_categorieC();
$resultc = $sous_categoriec->affichersouscategorie();


?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">


    <link rel="stylesheet" href="vendors/chosen/chosen.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Acceuil </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
               
                    
                    
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Rayon</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="ajoutrayon.php">Nouveau Rayon</a></li>
                            <li><i class="fa fa-table"></i><a href="afficherrayon.php">Consulter Vos Rayons</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>categorie</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="ajoutcategorie.php">Nouvelle Categorie</a></li>
                            <li><i class="fa fa-table"></i><a href="affichercategorie.php">liste categorie</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Sous Categorie</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="ajoutsouscategorie.php">Nouvelle sous Categorie</a></li>
                            <li><i class="fa fa-table"></i><a href="affichersouscategorie.php">Liste Sous Categorie</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Marque</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="ajoutproduit.php">Nouvelle Marque</a></li>
                            <li><i class="fa fa-table"></i><a href="afficherproduit.php">liste Marques</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Produits</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="ajoutproduit.php">Nouveau Produit</a></li>
                            <li><i class="fa fa-table"></i><a href="afficherproduit.php">liste produit</a></li>
                        </ul>
                    </li>
                    
                    
                    
                    
                    
                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Produit</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="Acceuil.html">Acceuil</a></li>
                            <li><a href="#">Produit</a></li>
                            <li class="active">Nouveau Produit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
<form method="POST" action="ajoutproduit1.php">
                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Formulaire</strong> <small> </small>
                            </div>
                           
                            <div class="card-body card-block">
                                
                                <div class="form-group">
                                    <label class=" form-control-label">Ref</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-plus-square"></i></div>
                                        <input id="reference_p" name="reference_p" type="number" required="required" class="form-control" value="<?PhP echo $reference_p ?>">
                                    </div>
                                    <small class="form-text text-muted"> </small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nom</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-plus-square"></i></div>
                                        <input id="nom_p" name="nom_p" required="required" type="text" class="form-control" value="<?PhP echo $nom_p ?>">
                                    </div>
                                    <small class="form-text text-muted"> </small>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                    <div class="col-12 col-md-9"><textarea value="<?PhP echo $despcriprion_p ?>"  id="description_p" name="description_p" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">couleur</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-plus-square"></i></div>
                                        <input value="<?PhP echo $couleur_p?>" id="couleur_p" type="text" name="couleur_p" required="required" class="form-control">
                                    </div>
                                    <small class="form-text text-muted"> </small>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Quantite</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-plus-square"></i></div>
                                        <input  id="quantite_p" value="<?PhP echo $quantite_p?>" name="quantite_p" type="number" required="required" class="form-control">
                                    </div>
                                    <small class="form-text text-muted"> </small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Quantite Minimale</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-plus-square"></i></div>
                                        <input  id="quantite_minimale_p" value="<?PhP echo $quantite_minimale_p?>" type="number" name="quantite_minimale_p" required="required" class="form-control">
                                    </div>
                                    <small class="form-text text-muted"> </small>
                                </div>


                                <div class="form-group">
                                    <label class=" form-control-label">Prix</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                        <input id="prix_p" value="<?PhP echo $prix_p?>" name="prix_p" required="required" type="number" class="form-control">
                                    </div>
                                    <small class="form-text text-muted"> </small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Prix De Vente</label>
                                    <div class="input-group">
                                        <div  class="input-group-addon"><i class="fa fa-usd"></i></div>
                                        <input id="prix_de_vente_p" name="prix_de_vente_p" value="<?PhP echo $prix_de_vente_p?>" type="number" required="required" class="form-control">
                                    </div>
                                    <small class="form-text text-muted"> </small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Date input</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input id="date_p" value="<?PhP echo $date_p?>" name="date_p" required="required" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. 99/99/9999</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">marque</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input id="nom_marque" value="<?PhP echo $nom_marque?>" name="nom_marque" required="required" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. 99/99/9999</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Matiere</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input id="matiere" name="matiere" value="<?PhP echo $matiere?>" required="required" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. 99/99/9999</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6">
                       
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Reference sous categorie</strong>
                            </div>
                            <div class="card-body">

                                 <select value="<?PhP echo $reference_sous_categorie?>" name="reference_sous_categorie" data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                                                <option value="undefined">non affecte</option>
                                                <?php 
foreach($resultc as $row)
{
  ?>
                                                <option value="<?php echo $row['reference_sous_categorie']; ?>"><?php echo $row['nom_sous_categorie']; ?></option>


                                                <?php 
    
}
?>
                                            </select>
                            </div>
                        </div>
                       
                        
                        
                         <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Etat</strong>
                            </div>
                            <div class="card-body">

                               <select name="etat" value="<?PhP echo $etat?>"  data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                                                <option value="undefined">non affecte</option>
                                   
                                                <option value="1">disponible</option>
                                   
                                                <option value="0">non disponible</option>



  
                                            </select>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"></strong>
                            </div>
                            <div class="card-body">



                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Images</label></div>
                                    <div class="col-12 col-md-9"><input  value="<?PhP echo $image_p?>"id="image_p" name="image_p" type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                                </div>
                            </div>
                        </div>






                    </div>
    <input type="hidden" name="reference_ini" value="<?PHP echo $_GET['reference_p'];?>">
                
                
                
           <button type="RESET" class="btn btn-primary">RESET</button>
                      <button name="modifier" value="modifier" type="submit"  class="btn btn-success">Modifier</button>
                    </form>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    </div><!-- /#right-panel -->

    <!-- Right Panel -->
<?PHP
    }
}
if (isset($_POST['modifier'])){
    $produit=new produit($_POST['reference_p'],$_POST['nom_p'],$_POST['description_p'],$_POST['couleur_p'],$_POST['quantite_p'],$_POST['quantite_minimale_p'],$_POST['prix_p'],$_POST['prix_de_vente_p'],$_POST['date_p'],$_POST['reference_sous_categorie'],$_POST['nom_marque'],$_POST['image_p'],$_POST['matiere']);
    $produitC->modifierproduit($produit,$_POST['reference_ini']);
    echo $_POST['reference_ini'];
    //header('Location: afficherFournisseur.php');
    echo '<script language="Javascript">
           <!--
                 document.location.replace(" afficherrayon.php");
           // -->
     </script>';
}
?>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="vendors/chosen/chosen.jquery.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });

    </script>

</body>

</html>