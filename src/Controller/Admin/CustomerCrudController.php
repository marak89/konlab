<?php

namespace App\Controller\Admin;

use App\Entity\Customer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CustomerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Customer::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('short'),
            TextField::new('name'),
            TextField::new('address'),
            AssociationField::new('language')

        ];
    }

}
