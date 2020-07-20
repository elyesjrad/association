<?php
namespace AppBundle\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends Controller
{
/**
* @Route("/looogin", name="login")
*/
public function loginAction(AuthenticationUtils $authenticationUtils)
{

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('@App/security/login.html.twig', [
        'last_username' => $lastUsername,
        'error'         => $error,
    ]);

}
}