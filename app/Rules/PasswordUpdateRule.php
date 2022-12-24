<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class PasswordUpdateRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(private $old_pwd, private $pwd)
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Hash::check($this->old_pwd, $this->pwd);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "l'ancien mot de passe est incorrecte";
    }
}
