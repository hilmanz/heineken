<?php

require_once('twitteroauth/twitteroauth.php'); //Path to twitteroauth library
require_once('db.php'); //just DB
error_reporting(E_ALL);
class twitterfeeds extends db{

var $connection=false;
function init(){ 
	
	$consumerkey = "CeAeKQ6W2flJaiR7m5D3uQ";
	$consumersecret = "QS7jBlukxkXhN1bUqFAh5K3Z1pz84Z9fGjgoeJ5mxu8";
	$accesstoken = "93589542-FbXesZ56nnPapVmIsx7JYeI3WkRiA0VHt4GnUZzS4";
	$accesstokensecret = "bo1dytuXsD8nxFnZrbCwnkQoUcCA8ZIcKDfExW2ko";
	
	if(!$this->connection) $this->connection = $this->getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
	 
}

function getSearchtwitter($maxid=false){
	$search = "#heineken";
	$notweets = 50;
		// print_r($maxid);exit;
	if(!$maxid){
		$resulttype = "recent";		
		$qTwits = "&result_type=".$resulttype;
	}else{
		$qTwits = "&since_id=".$maxid;
	}
	$search = str_replace("#", "%23", $search);
	$twitsurl = "https://api.twitter.com/1.1/search/tweets.json?q=".$search.$qTwits."&count=".$notweets;
	// print $twitsurl;exit;
	if($this->connection)	{
		
		$jsontwitts = $this->connection->get($twitsurl);
		  
		 
		
		return $jsontwitts;
	}else return false;
}

function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
function getMaxidTwits(){

		$sql ="SELECT feedsid FROM `heineken_web_2014`.`tbl_twitter_feed` ORDER BY feedsid DESC ";
		$maxid =  $this->fetch($sql); 
	
		if($maxid) return $maxid->feedsid;
		else return false;
}
function addtotwitterfeeds($jsontwitts=false){  
		if($jsontwitts){
		// print_r($jsontwitts);
				$datas['feeds list'] =  array();
				foreach($jsontwitts->statuses as $twits){
					$feedsid = $twits->id;
					$text = htmlentities($twits->text);
					$created_at = date("Y-m-d H:i:s",strtotime($twits->created_at));
					$fullname = htmlentities($twits->user->name);
					$images = htmlentities($twits->user->profile_image_url_https);
					$sql = "
					INSERT INTO `heineken_web_2014`.`tbl_twitter_feed` 
					(`id`, `feedsid`, `message`, `fullname`, `profileimages`, `createddate`, `n_status`) 
					VALUES 
					(NULL, \"{$feedsid}\", \"{$text}\", \"{$fullname}\", \"{$images}\", \"{$created_at}\", '1') 				 
					";
					print $sql;
					$datas['feeds list'][] =  $this->query($sql); 
				}	
			 
			print_r($datas);
		}else{
			echo 'no twit';
		}
	}
	
}


$twits = new twitterfeeds();

$twits->init();
$maxid = $twits->getMaxidTwits();
$jsontwitts = $twits->getSearchtwitter($maxid);
$twits->addtotwitterfeeds($jsontwitts);
?>