<?php

namespace App\Controller;
use App\Entity\Annonce;
use App\Form\AnnonceFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonce", name="annonce")
     */
    public function index(): Response
    {
        //appelle la liste des annonces;
        $annonce = $this->getDoctrine()->getRepository(Annonce::class)->findAll();



        return $this->render('annonce/index.html.twig', [
            'annonce' => $annonce
        ]);
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/annonce/add", name="add_annonce")
     */
    public function ajoutAnnonce(Request $request){
    $annonce = new Annonce();
    $form = $this->createForm(AnnonceFormType::class,$annonce);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
        $annonce->setUser($this->getUser());
        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($annonce);
        $doctrine->flush();
    }

    return $this->render('annonce/ajout.html.twig', [
        'annonceForm' => $form->createView()
    ]);
}
}
