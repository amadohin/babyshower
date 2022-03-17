<?php

namespace App\Controller\Admin;

use App\Entity\Guests;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class GuestsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Guests::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('firstname'),
            TextField::new('lastname'),
            TextField::new('link')->hideOnForm(),
            BooleanField::new('isconfirmed'),
        ];
    }
    
}
