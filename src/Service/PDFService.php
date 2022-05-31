<?php

namespace App\Service;

use Qipsius\TCPDFBundle\Controller\TCPDFController;

class PDFService
{
    protected TCPDFController $tcpdf;

    public function __construct(TCPDFController $tcpdf)
    {
        $this->tcpdf = $tcpdf;
    }

    public function print():string{
        $pdf = $this->tcpdf->create();
        $pdf->Output('example_001.pdf', 'I');
    }
}