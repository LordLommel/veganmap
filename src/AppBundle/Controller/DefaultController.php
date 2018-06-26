<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Location;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $locations = $this->getDoctrine()->getRepository(Location::class)->findAll();

        return $this->render('default/index.html.twig', [
            'locations' => $locations,
        ]);
    }
}
