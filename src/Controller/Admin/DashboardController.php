<?php

namespace App\Controller\Admin;

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
        yield MenuItem::linkToCrud('Cert','fas fa-file-alt',Cert::class);
    }
}
