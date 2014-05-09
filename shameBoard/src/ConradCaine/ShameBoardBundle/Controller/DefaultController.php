<?php

namespace ConradCaine\ShameBoardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use ConradCaine\ShameBoardBundle\Form\ShameType;
use ConradCaine\ShameBoardBundle\Entity\Shame;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {	
    	$shame = new Shame();
    	$form = $this->createForm(new ShameType(), $shame);

    	return array(
        	'form' =>$form->createView()
    	);
    }
}
