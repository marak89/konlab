<?php

namespace App\Controller\Admin;

use App\Entity\ObrCieplna;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ObrCieplnaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ObrCieplna::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
