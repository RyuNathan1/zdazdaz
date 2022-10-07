<?php
include 'connectPdo.php';

class DbMetier{
	
	public static function getListeMetier()
	{
		$sql = "select * from metier ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}
    public static function SuppMetier($id)
	{
		$sql = "DELETE FROM metier WHERE metier.id = $id";		
		$objResultat = connectPdo::getObjPdo()->exec($sql);	
	}
	
}

?>