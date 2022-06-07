<?php

namespace App\Controller\Admin;

use App\Entity\IndNazRys;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class IndNazRysCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return IndNazRys::class;
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
