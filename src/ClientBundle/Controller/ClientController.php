<?php

namespace ClientBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Method("GET")
     */
    public function indexAction()
    {
       $em = $this->getDoctrine()->getManager();

        $projets = $em->getRepository('AdminBundle:Projet')->findAll();

        return $this->render('ClientBundle:Default:index.html.twig', array(
            'projets' => $projets,
        ));
    }
    

    
     /**
     * @Route("/about", name ="about")
     */
    public function getAbout()
    {
        return $this->render('ClientBundle:Default:about.html.twig');
    }
    
     /**
     * @Route("/blog", name ="blog")
     */
    public function getBlog()
    {
        return $this->render('ClientBundle:Default:blog.html.twig');
    }
    
      /**
     * @Route("/post", name ="post")
     */
    public function getPost()
    {
        return $this->render('ClientBundle:Default:post.html.twig');
    }
}
