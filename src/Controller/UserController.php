<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;

class UserController extends AbstractController
{
    /**
     * @Route("/users", name="push_user", methods={"GET"})
     */
    public function push(HubInterface $hub)
    {
        $update = new Update(
            'https://example.com/users/kern',
            json_encode(['status' => 'active'])
        );

        $hub->publish($update);

        return new Response('published!');
    }
}