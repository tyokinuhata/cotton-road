<?php

namespace App\Http\Validators;

use Illuminate\Validation\Validator;
use App\Models\User;
use Hash;

class ExtensionValidator extends Validator
{
    public function validatePasswordCheck($attribute, $value, $parameters)
    {
        $id = $this->getValue('id');
        $password = User::where('id', $id)->first()->password;
        return Hash::check($value, $password);
    }
}