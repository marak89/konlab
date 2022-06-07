<?php

namespace App\Controller\Admin;

use App\Entity\CheckNorm;
use App\Entity\Customer;
use App\Entity\Gatunek;
use App\Entity\IndNazRys;
use App\Entity\Language;
use App\Entity\Norm;
use App\Entity\ObrCieplna;
use App\Entity\Order;
use App\Entity\WlasnCHEM;
use App\Entity\WlasnMECH;
use App\Entity\Cert;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Konlab');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('WlasnCHEM', 'fas fa-atom', WlasnCHEM::class);
        yield MenuItem::linkToCrud('WlasnMECH', 'fas fa-wrench', WlasnMECH::class);
        yield MenuItem::linkToCrud('Certyfikaty','fas fa-certificate',Cert::class);
        yield MenuItem::linkToCrud('Klienci','fas fa-people-arrows',Customer::class);
        yield MenuItem::linkToCrud('Language','fas fa-language',Language::class);
        yield MenuItem::linkToCrud('Normy dokumentu','fas fa-file-alt',Norm::class);
        yield MenuItem::linkToCrud('Zamówienia', 'fas fa-folder', Order::class);
        yield MenuItem::linkToCrud('indeks rysunek','fas fas fa-ruler-combined',IndNazRys::class);
        yield MenuItem::linkToCrud('Gatunek','fas fa-clipboard-check',Gatunek::class);
        yield MenuItem::linkToCrud('Obróbka cieplna','fas fa-burn',ObrCieplna::class);
        yield MenuItem::linkToCrud('Normy weryfikacji','fas fa-clipboard-list',CheckNorm::class);
    }
}
