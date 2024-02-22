<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class LicensePlate implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pattern = '/^[A-Z]{1,2}\s\d{1,4}\s[A-Z]{1,3}$/';
        $pattern2 = '/^[A-Z]{1,2}\s\d{1,4}$/';
        if (preg_match($pattern, $value) === 0) {
            if (preg_match($pattern2, $value) === 0) {
                $fail('Nomor polisi tidak valid.');
            }
        }
    }
}
