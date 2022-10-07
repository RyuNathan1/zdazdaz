<?php
include './model/DbEmploye.php';

$action =$_GET['action'];

switch($action){
             case 'supprimer':
                $id = $_GET['id'];

                //requete de suppression
                DbEmploye::SuppEmploye($id);

                //appel à la base de donnée le modele
                $listeEmploye = DbEmploye::getListeEmploye();
                
                //appel à la vue
                include 'vue/vueService/v_listeEmploye.php';
                
                break;
                
                case 'lister':
                    //appel à la base de donnée le modele
                    $listeEmploye = DbEmploye::getListeEmploye();
                    
                    //appel à la vue
                    include 'vue/vueService/v_listeEmploye.php';
                    
                break;
				
		}

?>