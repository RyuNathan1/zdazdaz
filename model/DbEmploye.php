<?php
include 'connectPdo.php';

class DbEmploye{
	
	public static function getListeEmploye()
	{
		$sql = "select * from employe ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}
    public static function SuppEmploye($id)
	{
		$sql = "DELETE FROM employe WHERE employe.id = $id";		
		$objResultat = connectPdo::getObjPdo()->exec($sql);	
	}
	
}

?>