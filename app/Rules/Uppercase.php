<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule

{
public function passes($attribute,$value)
{
    return mb_strtoupper($value) ===$value;
}
public function message()
{
    return 'タイトルの英字は、全て大文字にしてください'
}
}
