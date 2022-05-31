<?php

namespace App\Controller\Admin;

use App\Entity\Cert;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class CertCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cert::class;
    }


    public function configureFields(string $pageName): iterable
    {
        yield BooleanField::new('readyToPrint');
        yield AssociationField::new('WlasnCHEM');
        yield AssociationField::new('WlasnMECH');
        yield AssociationField::new('Customer');
    }

}
