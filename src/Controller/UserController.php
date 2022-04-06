<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Education;
use App\Form\EducationFormType;
use App\Form\ModifierCvType;
use App\Form\ModifierProfilType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

    /** @var \App\Entity\User $user */
        return $this->render('user/profile.html.twig');
    }

    /**
     * @Route("/user", name="user")
     */
    public function indexEmp(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var \App\Entity\User $user */
        return $this->render('employeur/profile.html.twig');
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/user/cv", name="cv")
     */
    public function cv(Request $request){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var \App\Entity\User $user */
        return $this->render('user/cv.html.twig');
    }

    /**
     * @IsGranted("ROLE_EMPLOYEUR")
     * @Route("/user/societe", name="societe")
     */
    public function societe(Request $request){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var \App\Entity\User $user */
        return $this->render('user/society.html.twig');
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/user/modifier", name="modifier_user")
     */
    public function modifierProfil(Request $request){

        $user = $this->getUser();
        $form = $this->createForm(ModifierProfilType::class,$user );
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
           
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->persist($user);
            $doctrine->flush();
        }

        return $this->render('user/modifierProfil.html.twig', [
            'modifierProfilForm' => $form->createView()
        ]);
    }
    /**
     * @IsGranted("ROLE_USER")
     * @Route("/user/modifierCV", name="modifier_CV")
     */
    public function modifierCV(Request $request){

        $user = $this->getUser();
        $form = $this->createForm(ModifierCvType::class,$user );
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->persist($user);
            $doctrine->flush();
        }

        return $this->render('user/editcv.html.twig' , [
            'modifierCVForm' => $form->createView()
        ]);
    }



}
