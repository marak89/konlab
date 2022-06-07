<?php

namespace App\Controller\Admin;

use App\Entity\CheckNorm;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CheckNormCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CheckNorm::class;
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
