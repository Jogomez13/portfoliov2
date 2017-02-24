<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

class SecurityController extends Controller
{
  public function loginAction(Request $request)
  {
    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('admin');
    }

    // Le service authentication_utils permet de récupérer le nom d'utilisateur
    // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
    // (mauvais mot de passe par exemple)
    $authenticationUtils = $this->get('security.authentication_utils');

    return $this->render('UserBundle:Security:login.html.twig', array(
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));
  }
  
  /**
     * @Route("/createadmin", name="createadmin")
     */
    //En tapant l'url createadmin je créer un admin
    public function createAdmin() {
        $em = $this->getDoctrine()->getManager();

        $user_admin = new User();
        //Nouvel user et ci-dessous tous les réglages
        $user_admin->setRoles(array('ROLE_ADMIN'));
        $user_admin->setUsername("jogomez");
        $user_admin->setPassword("jogomez");
        $user_admin->setSalt("");

        $em->persist($user_admin);

        $em->flush();
        return $this->redirectToRoute("login");
    }
}
