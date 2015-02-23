<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request, $name)
    {
        $authenticated = $this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY');

        $request->setLocale('en');
        $translated = $this->get('translator')->trans('hello');
        $response = new JsonResponse(
            [
                'authenticated' => $authenticated,
                "message" => $translated
            ]
        );

        return $response;
    }

    public function clearCacheAction()
    {
        opcache_reset();

        return new JsonResponse(["message" => "Cache cleared."]);
    }
}
