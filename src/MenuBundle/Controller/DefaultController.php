<?php

namespace MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
       // return new Response("Hello world!");
		return $this->render('MenuBundle:Default:index.html.twig');
    }
	
	public function menuAction(){
		$accessToken = 'CAACEdEose0cBAPYKcGcissBUa2UgEWOdhG0Vfp30BvMldEeYIXEKvtEaH7rLG456FMe1Ey26nnBwrpNVuOhnFCeygq6GVMGXEb9gj4vvMAKyH98TeRTYolmCSjpNXiKM9yLY17ZARynpTJAqVuZAMkU6SjdTClzBGGRdY3OH3qVYZBfGGG6t6ZCprlJ6rd9RpkI6x4ZC5AUqQckbEWEg9';
		$data1  = file_get_contents("https://graph.facebook.com/515562508539711/posts?access_token=$accessToken");
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
		$data2 = file_get_contents("https://graph.facebook.com/649823778452363/posts?access_token=$accessToken");
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