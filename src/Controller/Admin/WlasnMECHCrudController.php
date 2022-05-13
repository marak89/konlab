<?php

namespace App\Controller\Admin;

use App\Entity\WlasnMECH;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class WlasnMECHCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return WlasnMECH::class;
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
