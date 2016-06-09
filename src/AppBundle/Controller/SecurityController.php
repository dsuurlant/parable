<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $authUtils = $this->get('security.authentication_utils');
        $error = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();
        
        return $this->render(
            'security/login.html.twig',
            array(
                'last_username' => $lastUsername,
                'error' => $error
            )
        );
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>admin page</body></html>');
    }

    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $password = $this->get('security.password_encoder')->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('registration_success');
        }

        return $this->render(
            'security/register.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/registration_success", name="registration_success");
     */
    public function registrationSuccessAction(Request $request)
    {
        return $this->render(
            'security/registration_success.html.twig'
        );
    }

    /**
     * @Route("/reset_password", name="reset_password");
     */
    public function resetPasswordAction(Request $request)
    {
        // reset password form
        return $this->render(
            'security/reset_password.html.twig'
        );
    }

    /**
     * @Route("/forgot_username", name="forgot_username");
     */
    public function forgotUsernameAction(Request $request)
    {
        // forgot username form
        return $this->render(
            'security/forgot_username.html.twig'
        );
    }

    /**
     * @Route("/logout", name="logout");
     */
    public function logoutAction(Request $request)
    {
        return $this->render(
            'security/logout.html.twig'
        );
    }
}
