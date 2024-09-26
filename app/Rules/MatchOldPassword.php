<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class MatchOldPassword implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function passes ( $attribute, $value)
    {
       return Hash::check($value, auth()->user()->password );
    }

    public function message(){
        return 'The attribute must match with old password';
    }
}
