<?php

namespace ProgrammingAreHard\Crm\Infrastructure\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $authenticated = $this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY');

        return new JsonResponse(['hello' => $name]);
    }
}
