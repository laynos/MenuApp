<?php

namespace MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Facebook\FacebookRequest;
use Facebook\Facebook;
use Facebook\FacebookApp;

class DefaultController extends Controller
{
    public function indexAction()
    {
       // return new Response("Hello world!");
		return $this->render('MenuBundle:Default:index.html.twig');
    }
	
	public function menuAction(){
		/*GET /me/accounts HTTP/1.1
		Host: graph.facebook.com
		*/
		/*$access = file_get_contents("graph.facebook.com/me");
		var_dump(access);
		*/
		$data1  = file_get_contents("https://graph.facebook.com/515562508539711/feed?access_token=CAACEdEose0cBAAB3h1fFpgRnXNPEZBSWW5EeNKc1oKitJFZAqjI0etLZBUc1LPZBhZBJyu8BBxkQy0zegq3Yrk3bQNSSZAjtcK9kmURPYjib8998h448KArvcxYdtWKH0ZAJwOAoqnGZCGDqM37bqFyNjxbCGZAXnnTvnQtZB5wu4t0Ub5LTnkvAjA6snEz41QxQgrBEhWSbfb09znvoXMxFNH");
		$data1 = json_decode($data1);
		//var_dump($data1);
		$flag = 0;
		$i = 0;
		$ilot;
		
		while($flag < 3){
			if(isset($data1->{'data'}[$i]->{'message'})){
				$message = $data1->{'data'}[$i]->{'message'};
				
				//if(($msg = strstr($message, 'Menu', false)) !== null ){
				if(strpos($message,"Menu") !== false){
				//	echo $flag;
					$ilot[$flag] = $message;
				//	echo $ilot[$flag];
				//	echo "\n";
					$flag++;
				//	echo $flag;
				}
			}
			$i++;
		}
		$data2 = file_get_contents("https://graph.facebook.com/649823778452363/feed?access_token=CAACEdEose0cBAAB3h1fFpgRnXNPEZBSWW5EeNKc1oKitJFZAqjI0etLZBUc1LPZBhZBJyu8BBxkQy0zegq3Yrk3bQNSSZAjtcK9kmURPYjib8998h448KArvcxYdtWKH0ZAJwOAoqnGZCGDqM37bqFyNjxbCGZAXnnTvnQtZB5wu4t0Ub5LTnkvAjA6snEz41QxQgrBEhWSbfb09znvoXMxFNH");
		$data2 = json_decode($data2);
		$i = 0;
		$flag = 0;
		$regal;
		//var_dump($data2);
		while($flag < 3){
			if(isset($data2->{'data'}[$i]->{'message'})){
				$message = $data2->{'data'}[$i]->{'message'};
				
				//if(($msg = strstr($message, 'Menu', false)) !== null ){
				if(strpos($message,"Menu du jour") !== false  ||  strpos($message,"Repas du jour") !== false){
					//echo $flag;
					$regal[$flag] = $message;
					//echo $regal[$flag];
				//	echo "\n";
					$flag++;
					//echo $flag;
				}
			}
			$i++;
		}
		
		 return $this->render('MenuBundle:Site:menu.html.twig', array(
      'ilot' => $ilot,
	  'regal' => $regal
    ));
	}
}