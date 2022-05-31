<?php

namespace App\Controller\Admin;

use App\Entity\Norm;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NormCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Norm::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name','Nazwa'),
            TextField::new('type','Typ'),
            TextField::new('norm','Norma'),
            AssociationField::new('language','Język'),
            TextEditorField::new('content','Treść'),
            TextEditorField::new('confirms','Potwierdza'),
        ];
    }

}
