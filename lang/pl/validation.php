<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute musi zostać zaakceptowany.',
    'active_url' => ':attribute nie jest prawidłowym adresem URL.',
    'after' => ':attribute musi być datą po :date.',
    'after_or_equal' => ':attribute musi być datą późniejszą lub równą :date.',
    'alpha' => ':attribute może zawierać tylko litery.',
    'alpha_dash' => ':attribute może zawierać tylko litery, cyfry, myślniki i podkreślenia.',
    'alpha_num' => ':attribute może zawierać tylko litery i cyfry.',
    'array' => ':attribute musi być tablicą.',
    'before' => ':attribute musi być datą wcześniejszą niż :date.',
    'before_or_equal' => ':attribute musi być datą wcześniejszą lub równą :date.',

    'between' => [
        'numeric' => ':attribute musi mieścić się w przedziale od :min do :max.',
        'file' => ':attribute musi znajdować się w przedziale od :min do :max kilobajtów.',
        'string' => ':attribute musi mieć od :min do :max znaków.',
        'array' => ':attribute musi zawierać elementy od :min do :max.',
    ],
    'boolean' => 'Pole :attribute musi mieć wartość prawda lub fałsz.',
    'confirmed' => 'Potwierdzenie :attribute nie pasuje.',
    'date' => ':attribute nie jest prawidłową datą.',
    'date_equals' => ':attribute musi być datą równą :date.',
    'date_format' => ':attribute nie pasuje do formatu :format.',
    'different' => ' :attribute i :other muszą być różne.',
    'digits' => ':attribute musi być :digits cyfry.',
    'digits_between' => ':attribute musi zawierać się między :min a :max cyfr.',
    'dimensions' => ':attribute ma nieprawidłowe wymiary obrazu.',
    'distinct' => 'Pole :attribute ma zduplikowaną wartość.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => ':attribute musi być prawidłowym adresem e-mail.',
    'exists' => 'Zaznaczony :attribute jest nieprawidłowy.',
    'file' => ':attribute musi być plikiem.',
    'filled' => 'Pole :attribute musi mieć wartość.',
    'gt' => [
        'numeric' => ':attribute musi być większy niż :value.',
        'file' => ':attribute musi być większy niż :value kilobajtów.',
        'string' => ':attribute musi być większy niż :value znaków.',
        'array' => ':attribute musi mieć więcej niż :value elementów.',
    ],
    'gte' => [
        'numeric' => ':attribute musi być większy lub równy :value.',
        'file' => ':attribute musi być większy lub równy :value w kilobajtach.',
        'string' => ':attribute musi być większy lub równy :value znaków.',
        'array' => ':attribute musi mieć :value wartości lub więcej.',
    ],
    'image' => ':attribute musi być obrazem.',
    'in' => 'Zaznaczony :attribute jest nieprawidłowy.',
    'in_array' => 'Pole :attribute nie istnieje w :other.',
    'integer' => ':attribute musi być liczbą całkowitą.',
    'ip' => ':attribute musi być prawidłowym adresem IP.',
    'ipv4' => ':attribute musi być prawidłowym adresem IPv4.',
    'ipv6' => ':attribute musi być prawidłowym adresem IPv6.',
    'json' => ':attribute musi być prawidłowym ciągiem JSON.',
    'lt' => [
        'numeric' => ':attribute musi być mniejszy niż :value.',
        'file' => ':attribute musi być mniejszy niż :value kilobajtów.',
        'string' => ':attribute musi mieć mniej niż :value znaków.',
        'array' => ':attribute musi mieć mniej niż :value elementów.',
    ],
    'lte' => [
        'numeric' => ':attribute musi być mniejszy lub równy :value.',
        'file' => ':attribute musi być mniejszy lub równy :value w kilobajtach.',
        'string' => ':attribute musi być mniejszy lub równy :value znaków.',
        'array' => ':attribute nie może zawierać więcej niż: value elementów.',
    ],
    'max' => [
        'numeric' => ':attribute nie może być większa niż :max.',
        'file' => ':attribute nie może być większa niż :max kilobajtów.',
        'string' => ':attribute nie może być większa niż :max znaków.',
        'array' => ':attribute nie może mieć więcej elementów niż :max.',
    ],
    'mimes' => ':attribute musi być plikiem typu: :values.',
    'mimetypes' => ':attribute musi być plikiem typu: :values.',
    'min' => [
        'numeric' => ':attribute musi wynosić co najmniej :min.',
        'file' => ':attribute musi mieć co najmniej :min kilobajtów.',
        'string' => ':attribute musi mieć co najmniej :min znaków.',
        'array' => ':attribute musi mieć co najmniej :min elementów.',
    ],
    'multiple_of' => ':attribute musi być wielokrotnością :value.',
    'not_in' => 'Zaznaczony :attribute jest nieprawidłowy.',
    'not_regex' => 'Format :attribute jest nieprawidłowy.',
    'numeric' => ':attribute musi być liczbą.',
    'password' => 'Hasło jest nieprawidłowe.',
    'present' => 'Pole :attribute musi być obecne.',
    'regex' => 'Format :attribute jest nieprawidłowy.',
    'required' => 'Pole :attribute jest wymagane.',
    'required_if' => 'Pole :attribute jest wymagane, gdy :other to :value.',
    'required_unless' => 'Pole :attribute jest wymagane, chyba że :other znajduje się w :values.',
    'required_with' => 'Pole :attribute jest wymagane, gdy występuje :values.',
    'required_with_all' => 'Pole :attribute jest wymagane, gdy obecne są wartości:.',
    'required_without' => 'Pole :attribute jest wymagane, gdy nie ma :values.',
    'required_without_all' => 'Pole :attribute jest wymagane, gdy nie ma żadnej z :values.',
    'same' => ':attribute i :other muszą być zgodne.',
    'size' => [
        'numeric' => ':attribute musi mieć wartość :size.',
        'file' => ':attribute musi mieć :size w kilobajtach.',
        'string' => ':attribute musi zawierać :size znaków.',
        'array' => ':attribute musi zawierać pozycje :size.',
    ],
    'starts_with' => ':attribute musi zaczynać się od jednej z następujących wartości:: values.',
    'string' => ':attribute musi być łańcuchem.',
    'timezone' => ':attribute musi być prawidłową strefą.',
    'unique' => ':attribute został już zajęty.',
    'uploaded' => 'Nie udało się przesłać :attributeu.',
    'url' => 'Format :attribute jest nieprawidłowy.',
    'uuid' => ':attribute musi być prawidłowym identyfikatorem UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for :attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given :attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation :attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our :attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
