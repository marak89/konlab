<?php

namespace App\Controller\Admin;

use App\Entity\Gatunek;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class GatunekCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Gatunek::class;
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
