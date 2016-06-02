<?php

namespace AppBundle\Controller;

use AppBundle\Form\GenusFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenusAdminController extends Controller
{
    /**
     * @Route("/genus/new", name="admin_genus_new")
     */
    public function newAction()
    {
        $form = $this->createForm(GenusFormType::class);
        
        return $this->render('admin/genus/new.html.twig', [
            'genusForm' => $form->createView()
        ]);
    }
}
