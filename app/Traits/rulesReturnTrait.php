<?php

namespace App\Traits;

use PhpParser\Builder\Trait_;

trait rulesReturnTrait
{


    public function customerRegisterRules()
    {

        return [

            'fname' => 'required|string|max:50',
            'lname' => 'required|string|max:50',
            'email' => 'required|string|unique:customars,email',
            'password' => 'required|string|confirmed',
        ];
    }
    public function customerLoginRules()
    {

        return [
            'email' => 'required|string',
            'password' => 'required|string'

        ];
    }



    public function bookCarRules()
    {
        return [
            'start_book' =>'required',
            'end_book' =>'required',
        ];
    }

    public function reviewCarRules()
    {
        return [
            'review' =>'required',
        ];
    }

}
