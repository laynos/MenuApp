<?php

namespace MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
   /* public function indexAction()
    {
       // return new Response("Hello world!");
		return $this->render('MenuBundle:Default:index.html.twig');
    }
	*/
	public function ilotAction(){
		$accessToken = 'CAACEdEose0cBACa1XUBbImeZBl8LpHFOCzUwg0ZBx5ZAns7oT4urWIhyObHzJWJG1nMewPTu66cCkN4RRgB2FLYRNmkTKnGz3LPaMcZC76DDgUbXv6pmg0oHZA31ayFZAwEAJMP1MoLOaMeJm5hHZCIH2ixITwEgq1R8Wbd41ZB802B57K83qVXkaUiMwbO2gOneZBPx95PiM5wZAuyTg6JLyT';
		$data1  = file_get_contents("https://graph.facebook.com/515562508539711/posts?access_token=$accessToken");
		$data1 = json_decode($data1);
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
		return $this->render('MenuBundle:Site:ilot.html.twig', array(
			'ilot' => $ilot
		));
	}
	
		public function regalAction(){
		$accessToken = 'CAACEdEose0cBACa1XUBbImeZBl8LpHFOCzUwg0ZBx5ZAns7oT4urWIhyObHzJWJG1nMewPTu66cCkN4RRgB2FLYRNmkTKnGz3LPaMcZC76DDgUbXv6pmg0oHZA31ayFZAwEAJMP1MoLOaMeJm5hHZCIH2ixITwEgq1R8Wbd41ZB802B57K83qVXkaUiMwbO2gOneZBPx95PiM5wZAuyTg6JLyT';
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
		
		 return $this->render('MenuBundle:Site:regal.html.twig', array(
			'regal' => $regal
		));
	}
	
	public function menuAction(){
		$accessToken = 'CAACEdEose0cBACa1XUBbImeZBl8LpHFOCzUwg0ZBx5ZAns7oT4urWIhyObHzJWJG1nMewPTu66cCkN4RRgB2FLYRNmkTKnGz3LPaMcZC76DDgUbXv6pmg0oHZA31ayFZAwEAJMP1MoLOaMeJm5hHZCIH2ixITwEgq1R8Wbd41ZB802B57K83qVXkaUiMwbO2gOneZBPx95PiM5wZAuyTg6JLyT';
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