<?php
include './model/DbMetier.php';

$action =$_GET['action'];

switch($action){
		
			case 'lister':
			 //appel à la base de donnée le modele
			 $listeMetier = DbMetier::getListeMetier();
			 
			 //appel à la vue
			 include 'vue/vueService/v_listeMetier.php';
			 
			 break;
            case 'supprimer':
                $id = $_GET['id'];

                //requete de suppression
                DbMetier::SuppMetier($id);

                //appel à la base de donnée le modele
                $listeMetier = DbMetier::getListeMetier();
                
                //appel à la vue
                include 'vue/vueService/v_listeMetier.php';
                
            break;
				
		}

?>