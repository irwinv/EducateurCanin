<?php

namespace Patrick\ElevageBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware,
       Symfony\Component\HttpFoundation\RedirectResponse;


class DefaultController extends ContainerAware
{

    public function indexAction()
    {

		$message = "Meh";

        return $this->container->get('templating')->renderResponse('PatrickElevageBundle:Default:index.html.twig',
			array('message' => $message)
		);
    }

	public function contactAction(){
        return $this->container->get('templating')->renderResponse('PatrickElevageBundle:Default:contact.html.twig');
	}
}
