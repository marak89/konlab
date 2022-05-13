<?php

namespace App\Controller\Admin;

use App\Entity\WlasnCHEM;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class WlasnCHEMCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return WlasnCHEM::class;
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
