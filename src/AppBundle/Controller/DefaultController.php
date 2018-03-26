<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/cv/{error}", name="homepage")
     * @Template()
     */
    public function indexAction($error = false)
    {
        $forms = $this->getDoctrine()->getRepository("AppBundle:Formation")->findAll();
        $exps = $this->getDoctrine()->getRepository("AppBundle:Experience")->findAll();
        $lois = $this->getDoctrine()->getRepository("AppBundle:Loisir")->findAll();
        // // replace this example code with whatever you need
        return array('name' => 'Dietsch', 'firstname' => "Laura", 'formations' => $forms, 'experiences' => $exps, 'loisirs' => $lois, 'error' => $error);
    }
    /**
     * @Route("/admin", name="admin")
     * @Template()
     */
    public function adminAction()
    {
        return array();
    }
}
