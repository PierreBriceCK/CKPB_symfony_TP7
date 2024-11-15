<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Absence;
use App\Form\SaisirAbsenceType;
use App\Repository\AbsenceRepository;


class AbsenceController extends AbstractController
{
    #[Route('/absence', name: 'app_absence')]
    public function index(): Response
    {
        return $this->render('absence/index.html.twig', [
            'controller_name' => 'AbsenceController',
        ]);
    }
    #[Route('/absence/ajouter', name: 'absence_ajouter')]
    public function ajouterAbsence(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Créer une nouvelle absence
        $absence = new Absence();

        // Créer le formulaire d'absence en associant l'objet $absence
       
        $form = $this->createForm(SaisirAbsenceType::class, $absence);

        // Si le formulaire est soumis et valide
        
        if ($form->isSubmitted() && $form->isValid()) {
            $formSubmitted = true; 

            // Récupérer les données du formulaire (l'objet Absence)
            
            $data = $form->getData();
            // Persister et sauvegarder dans la base de données
            $entityManager->persist($absence);
            $entityManager->flush();
            
            // Rediriger vers la liste des absences
            return $this->redirectToRoute('liste_absences');
        }

        // Si le formulaire n'a pas été soumis ou n'est pas valide, on l'affiche
        return $this->render('absence/ajouter.html.twig', [
            'form' => $form->createView(),
        
        ]);

    }
        
    #[Route('/absences/afficher', name: 'absences_afficher')]
    public function AfficherAvecRepository(EntityManagerInterface $entityManager,AbsenceRepository $absenceRepository): Response 
        
        {

        // Récupèration de tous les absences
        $absences = $absenceRepository->findAll(); 

        return $this->render('absence/ajouter.html.twig', [
            'absence' => $absences,
        ]);
    }


}
 