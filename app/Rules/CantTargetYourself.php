<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CantTargetYourself implements Rule
{
    protected $attribute;

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $this->attribute = $attribute;
        if($value == auth()->id()) {
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "The $this->attribute can not be yourself.";
    }
}
