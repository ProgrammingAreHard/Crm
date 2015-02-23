<?php

namespace AppBundle\Controller;

use ProgrammingAreHard\Crm\Model\Exception\DomainException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\FlattenException;

class ExceptionController
{
    public function showAction(FlattenException $exception)
    {
        $message = "Internal server error.";
        $code = Response::HTTP_INTERNAL_SERVER_ERROR;

        $class = $exception->getClass();
        if (is_subclass_of($class, DomainException::CLASS) || $class === DomainException::CLASS) {
            $message = $exception->getMessage();
            $code = $exception->getCode();
        }

        return new JsonResponse(['errors' => [$message]], $code);
    }
}