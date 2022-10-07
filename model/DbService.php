<?php
include 'connectPdo.php';

class DbService{
	
	public static function getListeService()
	{
		$sql = "select * from service ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}
	public static function SuppService($id)
	{
		$sql = "DELETE FROM service WHERE service.id = $id";		
		$objResultat = connectPdo::getObjPdo()->exec($sql);	
	}
	public static function AjouterService($nom)
	{
		$sql = "INSERT INTO service (id, nom) VALUES (0, '$nom')";		
		 connectPdo::getObjPdo()->exec($sql);	
	}
	public static function getservice($id)
	{
		$sql ="select * from service where id = $id";
		$objResultat = connectPdo::getObjPdo()->query($sql);
		$result = $objResultat->fetch();
		return $result;
	}
	public static function ModifierService($num, $nom)
	{
		$sql ="UPDATE service SET nom = '$nom' WHERE service.id = $num";
		connectPdo::getObjPdo()->exec($sql);
	}
	
}

?>