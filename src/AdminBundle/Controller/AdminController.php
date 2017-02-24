<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * Admin controller.
 * @Security("has_role('ROLE_ADMIN')")
 * 
 * @author jonathan-gomez
 */
class AdminController extends Controller
{
    /**
     * @Route("/", name = "admin")
     */
    public function indexAction()
    {
        return $this->render('base.html.twig');
    }
}
