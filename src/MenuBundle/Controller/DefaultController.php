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
		$data  = file_get_contents("https://graph.facebook.com/515562508539711/feed?access_token=CAACEdEose0cBAIwZCQ5zFGR8shEmZBEEPdxU6nIvoNNqrAzpqgACFJcEBZCzTUhnpmDkGtGnfQ7GsRy3qfglRj57yXHBW2m3ygZBKzoCPI7FuSAoRUERugmNOcxZB5M9AQViB6LSs2KrrzaduAZCnihL4m5ZCaHqmRyapHmYtZBKI2etRF9ksfKSXcKLhYRVyfWfbnBSGzTeixAjMVHl7Dze");
		$data = json_decode($data);
		var_dump($data);
		$flag = 0;
		$i = 0;
		$array;
		
		/*while($flag < 3){
			if(isset($data->{'data'}[$i]->{'message'})){
				$message = $data->{'data'}[$i]->{'message'};
				
				//if(($msg = strstr($message, 'Menu', false)) !== null ){
				if(strpos($message,'Menu')){
					echo $flag;
					$array[$flag] = $msg;
					echo $array[$flag];
					$flag++;
					echo $flag;
				}
			}
			$i++;
		}*/
	
		/*for ($i = 0; $i <= 100; $i++) {
			$message = $data->{'data'}[$i]->{'message'};
			echo $message;
		}*/
		//return $this->render('MenuBundle:Site:menu.html.twig');
		 return $this->render('MenuBundle:Site:menu.html.twig', array(
      'data' => $data
    ));
	}
}