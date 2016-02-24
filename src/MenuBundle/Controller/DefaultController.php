<?php

namespace MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Facebook\FacebookRequest;
use Facebook\Facebook;
use Facebook\Authentication\AccessToken;


class DefaultController extends Controller
{
    public function indexAction()
    {
       // return new Response("Hello world!");
		return $this->render('MenuBundle:Default:index.html.twig');
    }
	
	public function menuAction(){
	$request = new FacebookRequest(
			$session,
			'GET',
			'/515562508539711/posts'
		);

		$response = $request->execute();
		$graphObject = $response->getGraphObject();
	/* handle the result */
		return $this->render('MenuBundle:Site:menu.html.twig');
	}
}