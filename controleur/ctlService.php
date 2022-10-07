<?php
include './model/DbService.php';

$action =$_GET['action'];

switch($action){
		case 'lister':
		        //appel à la base de donnée le modele
			 $listeService = DbService::getListeService();
			 
			 //appel à la vue
			 include 'vue/vueService/v_listeServices.php';
			 
			 break;
			 case 'supprimer':
                         $id =$_GET['id'];

                        //requete de suppression
                        DbService::SuppService($id);

                        //appel à la base de donnée le modele
                        $listeService = DbService::getListeService();
                
                        //appel à la vue
                        include 'vue/vueService/v_listeServices.php';
                
                break;
                case 'formAjout':
                        //appel à la base de donnée le modele
                        
                        //appel à la vue
                        include 'vue/vueService/FormAjoutService.php';
                        
                        break;
                case 'ValiderAjout':
                        //appel à la base de donnée le modele
                        $nom = $_POST["nom"];
                        DbService::AjouterService($nom);
                                
                        //appel à la vue
                        include 'vue/vueService/FormAjoutService.php';
                                
                        break;
                        case 'formEdit':
                        $id = $_GET["id"];
                        $unService = DbService::getservice($id);
                        //appel à la base de donnée le modele
                                
                                //appel à la vue
                                include 'vue/vueService/FormEditService.php';
                                
                                break;
			case 'ValiderEdit':
                                $num = $_POST["num"];
                                $nom = $_POST["nom"];
                        //appel à la base de donnée le modele
                        DbService::ModifierService($num, $nom);
                        $listeService = DbService::getListeService();
                        //appel à la vue
                        include 'vue/vueService/v_listeServices.php';
                                
                        break;

		}

?>