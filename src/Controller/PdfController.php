<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\PDFService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PdfController extends AbstractController
{
    private PDFService $PDFService;

    /**
     * @param PDFService $PDFService
     * @return Response
     * @Route("/pdf")
     */
    public function print(PDFService $PDFService): Response
    {
        $this->PDFService = $PDFService;
        ;
        return new Response($this->PDFService->print());
    }
}