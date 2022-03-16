<?php

namespace AdminGuests;

use App\Entity\Guests;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class GuestsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Guests::class;
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
