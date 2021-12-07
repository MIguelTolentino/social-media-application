<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function validationDefault(Validator $validator): Validator
    {
        return $validator
            ->notEmpty('email', 'An email address is required')
            ->notEmpty('password', 'A password is required');
    }

}