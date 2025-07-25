<?php
include_once("controleurs/controleur_classe_abstraite.php");
include_once("modele/DAO/UserDAO.class.php");
include_once("modele/DAO/RestaurantDao.class.php");

class voirMesRestos extends Controleur
{
    private $tabMesRestos;

    public function __construct(){
        parent::__construct();
        $this->tabMesRestos = array();
    }
    public function executerAction():string
		{
            $this->tabMesRestos = RestaurantDAO::findAllByProprietaire($_SESSION['idUtilisateur']);
				
			return "mesRestaurants.php";
		}
    public function getMesRestos():array
        {
            return $this->tabMesRestos;
    }
} 
?>