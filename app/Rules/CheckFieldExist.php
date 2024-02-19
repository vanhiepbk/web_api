<?php

namespace App\Rules;

use App\Entities\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckFieldExist implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $condition = User::where($attribute, $value)->get('email')->first();
        if (!$condition) {
            $fail('Account not register');
        }
    }
}
