<?php
 
require_once('db.php'); //just DB
error_reporting(E_ALL);
class feederdatajson extends db{
	  
	function getFeederJson(){

			$sql ="SELECT * FROM `heineken_web_2014`.`tbl_twitter_feed` WHERE n_status = 1 ORDER BY feedsid ASC LIMIT 1 ";
			
			$feeder =  $this->fetch($sql,1); 
			
		
			if($feeder) {
				$arrstrid = false;
				foreach($feeder as $key => $val){
						$arrstrid[$val->id] = $val->id;
						$feeder[$key]->message = html_entity_decode($val->message);
						$feeder[$key]->fullname = html_entity_decode($val->fullname);
				}
				
				$strid = implode(',',$arrstrid);
				$sql = "UPDATE `heineken_web_2014`.`tbl_twitter_feed` SET n_status = 2 WHERE id IN ({$strid}) ";
				$qData =  $this->query($sql); 
			
				return $feeder[0];
			}else return false;
			
	} 
	
}


$twits = new feederdatajson();

$jsondata = json_encode($twits->getFeederJson());  

print $jsondata;exit;
?>

