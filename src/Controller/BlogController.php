<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/home.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
   #[Route("/loisir", name:"loisir")]
   public function loisirs()
   {
       return $this->render('blog/loisir.html.twig');
   }
   #[Route("/cv", name:"cv")]
   public function cv()
   {
       return $this->render('blog/cv.html.twig');
   }
   #[Route("/portfolio", name:"E-portfolio")]
   public function portfolio()
   {
       return $this->render('blog/portfolio.html.twig');
   }
   #[Route("/RT1", name:"RT1")]
   public function RT1()
   {
       return $this->render('blog/RT1.html.twig');
   }
   #[Route("/RT2", name:"RT2")]
   public function RT2()
   {
       return $this->render('blog/RT2.html.twig');
   }
   #[Route("/RT3", name:"RT3")]
   public function RT3()
   {
       return $this->render('blog/RT3.html.twig');
   }
    #[Route("/mention-legales", name:"mention_legales")]
    public function mentionsLegales(): Response
    {
        return $this->render('blog/mention_legales.html.twig');
     }
    #[Route("/politique-de-confidentialite", name:"politique_confidentialite")]
    public function politiqueConfidentialite(): Response
    {
      return $this->render('blog/polconf.html.twig');
    }
    #[Route("/vos-avis", name:"vos_avis")]
    public function Vosavis(): Response
    {
      return $this->render('blog/avis.html.twig');
    }
}
