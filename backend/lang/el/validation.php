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

    'accepted' => 'Το :attribute πρέπει να γίνει αποδεκτό.',
    'active_url' => 'Το :attribute δεν είναι έγκυρο URL.',
    'after' => 'Το :attribute πρέπει να είναι ημερομηνία μετά το :date.',
    'after_or_equal' => 'Το :attribute πρέπει να είναι μια ημερομηνία μετά ή ίση με την :date.',
    'alpha' => 'Το :attribute μπορεί να περιέχει μόνο γράμματα.',
    'alpha_dash' => 'Το :attribute μπορεί να περιέχει μόνο γράμματα, αριθμούς και παύλες.',
    'alpha_num' => 'Το :attribute μπορεί να περιέχει μόνο γράμματα και αριθμούς.',
    'array' => 'Το :attribute πρέπει να είναι πίνακας.',
    'before' => 'Το :attribute πρέπει να είναι ημερομηνία πριν από το :date.',
    'before_or_equal' => 'Το :attribute πρέπει να είναι μια ημερομηνία πριν ή ίση με την :date.',
    'between' => [
        'numeric' => 'Το :attribute πρέπει να είναι μεταξύ :min και :max.',
        'file' => 'Το :attribute πρέπει να είναι μεταξύ :min και :max kilobyte.',
        'string' => 'Το :attribute πρέπει να είναι μεταξύ :min και :max χαρακτήρων.',
        'array' => 'Το :attribute πρέπει να έχει μεταξύ των στοιχείων :min και :max.',
    ],
    'boolean' => 'Το πεδίο :attribute πρέπει να είναι αληθές ή ψευδές.',
    'confirmed' => 'Η επιβεβαίωση :attribute δεν ταιριάζει.',
    'date' => 'Το :attribute δεν είναι έγκυρη ημερομηνία.',
    'date_format' => 'Το :attribute δεν ταιριάζει με τη μορφή :format.',
    'different' => 'Το :attribute και το :other πρέπει να είναι διαφορετικά.',
    'digits' => 'Το :attribute πρέπει να είναι ψηφία :digits.',
    'digits_between' => 'Το :attribute πρέπει να είναι μεταξύ ψηφίων :min και :max.',
    'dimensions' => 'Το :attribute έχει μη έγκυρες διαστάσεις εικόνας.',
    'distinct' => 'Το πεδίο :attribute έχει διπλότυπη τιμή.',
    'email' => 'Το :attribute πρέπει να είναι έγκυρη διεύθυνση email.',
    'exists' => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'file' => 'Το :attribute πρέπει να είναι αρχείο.',
    'filled' => 'Το πεδίο :attribute πρέπει να έχει μια τιμή.',
    'gt' => [
        'numeric' => 'Το :attribute πρέπει να είναι μεγαλύτερο από το :value.',
        'file' => 'Το :attribute πρέπει να είναι μεγαλύτερο από :value kilobyte.',
        'string' => 'Οι χαρακτήρες :attribute πρέπει να είναι μεγαλύτεροι από τους χαρακτήρες :value.',
        'array' => 'Το :attribute πρέπει να έχει περισσότερα από :value στοιχεία.',
    ],
    'gte' => [
        'numeric' => 'Το :attribute πρέπει να είναι μεγαλύτερο ή ίσο του :value.',
        'file' => 'Το :attribute πρέπει να είναι μεγαλύτερο ή ίσο με :value kilobyte.',
        'string' => 'Ο :attribute πρέπει να είναι μεγαλύτερος ή ίσος με χαρακτήρες :value.',
        'array' => 'Το :attribute πρέπει να έχει αντικείμενα :value ή περισσότερα.',
    ],
    'image' => 'Το :attribute πρέπει να είναι εικόνα.',
    'in' => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'in_array' => 'Το πεδίο :attribute δεν υπάρχει στο :other.',
    'integer' => 'Το :attribute πρέπει να είναι ακέραιος.',
    'ip' => 'Η :attribute πρέπει να είναι μια έγκυρη διεύθυνση IP.',
    'ipv4' => 'Το :attribute πρέπει να είναι έγκυρη διεύθυνση IPv4.',
    'ipv6' => 'Το :attribute πρέπει να είναι έγκυρη διεύθυνση IPv6.',
    'json' => 'Το :attribute πρέπει να είναι έγκυρη συμβολοσειρά JSON.',
    'lt' => [
        'numeric' => 'Το :attribute πρέπει να είναι μικρότερο από το :value.',
        'file' => 'Το :attribute πρέπει να είναι μικρότερο από :value kilobyte.',
        'string' => 'Ο :attribute πρέπει να είναι μικρότερος από χαρακτήρες :value.',
        'array' => 'Το :attribute πρέπει να έχει λιγότερα από :value στοιχεία.',
    ],
    'lte' => [
        'numeric' => 'Το :attribute πρέπει να είναι μικρότερο ή ίσο του :value.',
        'file' => 'Το :attribute πρέπει να είναι μικρότερο ή ίσο από :value kilobyte.',
        'string' => 'Ο :attribute πρέπει να είναι μικρότερος ή ίσος με χαρακτήρες :value.',
        'array' => 'Το :attribute δεν πρέπει να έχει περισσότερα από :value στοιχεία.',
    ],
    'max' => [
        'numeric' => 'Το :attribute δεν μπορεί να είναι μεγαλύτερο από το :max.',
        'file' => 'Το :attribute μπορεί να μην είναι μεγαλύτερο από :max kilobyte.',
        'string' => 'Ο :attribute δεν μπορεί να είναι μεγαλύτερος από τους χαρακτήρες :max.',
        'array' => 'Το :attribute δεν μπορεί να έχει περισσότερα από :max στοιχεία.',
    ],
    'mimes' => 'Το :attribute πρέπει να είναι αρχείο τύπου: :values.',
    'mimetypes' => 'Το :attribute πρέπει να είναι αρχείο τύπου: :values.',
    'min' => [
        'numeric' => 'Το :attribute πρέπει να είναι τουλάχιστον :min.',
        'file' => 'Το :attribute πρέπει να είναι τουλάχιστον :min kilobyte.',
        'string' => 'Το :attribute πρέπει να είναι τουλάχιστον :min χαρακτήρες.',
        'array' => 'Το :attribute πρέπει να έχει τουλάχιστον στοιχεία :min.',
    ],
    'not_in' => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'not_regex' => 'Η μορφή :attribute δεν είναι έγκυρη.',
    'numeric' => 'Το :attribute πρέπει να είναι αριθμός.',
    'present' => 'Πρέπει να υπάρχει το πεδίο :attribute.',
    'regex' => 'Η μορφή :attribute δεν είναι έγκυρη.',
    'required' => 'Απαιτείται το πεδίο :attribute.',
    'required_if' => 'Το πεδίο :attribute απαιτείται όταν το :other είναι :value.',
    'required_unless' => 'Το πεδίο :attribute απαιτείται εκτός εάν το :other είναι στο :values.',
    'required_with' => 'Το πεδίο :attribute απαιτείται όταν υπάρχει :values.',
    'required_with_all' => 'Το πεδίο :attribute απαιτείται όταν υπάρχει :values.',
    'required_without' => 'Το πεδίο :attribute απαιτείται όταν δεν υπάρχει :values.',
    'required_without_all' => 'Το πεδίο :attribute απαιτείται όταν δεν υπάρχει κανένα από τα :values.',
    'same' => 'Τα :attribute και :other πρέπει να ταιριάζουν.',
    'size' => [
        'numeric' => 'Το :attribute πρέπει να είναι :size.',
        'file' => 'Το :attribute πρέπει να είναι :size kilobyte.',
        'string' => 'Ο :attribute πρέπει να είναι χαρακτήρες :size.',
        'array' => 'Το :attribute πρέπει να περιέχει στοιχεία :size.',
    ],
    'string' => 'Το :attribute πρέπει να είναι μια συμβολοσειρά.',
    'timezone' => 'Το :attribute πρέπει να είναι έγκυρη ζώνη.',
    'unique' => 'Το :attribute έχει ήδη ληφθεί.',
    'uploaded' => 'Η μεταφόρτωση του :attribute απέτυχε.',
    'url' => 'Η μορφή :attribute δεν είναι έγκυρη.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'προσαρμοσμένο μήνυμα',
        ],
        'g-recaptcha-response' => [
            'required' => 'Επαληθεύστε ότι δεν είστε ρομπότ.',
            'captcha' => 'Σφάλμα Captcha! δοκιμάστε ξανά αργότερα ή επικοινωνήστε με τον διαχειριστή του ιστότοπου.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],



    'accepted_if' => 'Το πεδίο :χαρακτηριστικό πρέπει να γίνει αποδεκτό όταν το :other είναι :value.',
    'ascii' => 'Το πεδίο :χαρακτηριστικό πρέπει να περιέχει μόνο αλφαριθμητικούς χαρακτήρες και σύμβολα ενός byte.',
    'can' => 'Το πεδίο :χαρακτηριστικό περιέχει μια μη εξουσιοδοτημένη τιμή.',
    'contains' => 'Από το πεδίο :χαρακτηριστικό λείπει μια απαιτούμενη τιμή.',
    'current_password' => 'Ο κωδικός πρόσβασης είναι λανθασμένος.',
    'date_equals' => 'Το πεδίο :χαρακτηριστικό πρέπει να είναι ημερομηνία ίση με :date.',
    'decimal' => 'Το πεδίο :χαρακτηριστικό πρέπει να έχει :δεκαδικά δεκαδικά ψηφία.',
    'declined' => 'Το πεδίο :χαρακτηριστικό πρέπει να απορριφθεί.',
    'declined_if' => 'Το πεδίο :χαρακτηριστικό πρέπει να απορριφθεί όταν το :other είναι :value.',
    'doesnt_end_with' => 'Το πεδίο :χαρακτηριστικό δεν πρέπει να τελειώνει με ένα από τα ακόλουθα: :τιμές.',
    'doesnt_start_with' => 'Το πεδίο :χαρακτηριστικό δεν πρέπει να ξεκινά με ένα από τα ακόλουθα: :τιμές.',
    'ends_with' => 'Το πεδίο :χαρακτηριστικό πρέπει να τελειώνει με ένα από τα ακόλουθα: :τιμές.',
    'enum' => 'Το επιλεγμένο χαρακτηριστικό : δεν είναι έγκυρο.',
    'extensions' => 'Το πεδίο :χαρακτηριστικό πρέπει να έχει μία από τις ακόλουθες επεκτάσεις: :values.',
    'hex_color' => 'Το πεδίο :χαρακτηριστικό πρέπει να είναι έγκυρο δεκαεξαδικό χρώμα.',
    'list' => 'Το πεδίο :χαρακτηριστικό πρέπει να είναι μια λίστα.',
    'lowercase' => 'Το πεδίο :χαρακτηριστικό πρέπει να είναι πεζό.',
    'mac_address' => 'Το πεδίο :χαρακτηριστικό πρέπει να είναι έγκυρη διεύθυνση MAC.',
    'max_digits' => 'Το πεδίο :χαρακτηριστικό δεν πρέπει να έχει περισσότερα από :max ψηφία.',
    'min_digits' => 'Το πεδίο :χαρακτηριστικό πρέπει να έχει τουλάχιστον ψηφία :min.',
    'missing' => 'Το πεδίο :χαρακτηριστικό πρέπει να λείπει.',
    'missing_if' => 'Το πεδίο :χαρακτηριστικό πρέπει να λείπει όταν το :other είναι :value.',
    'missing_unless' => 'Το πεδίο :χαρακτηριστικό πρέπει να λείπει εκτός εάν το :other είναι :value.',
    'missing_with' => 'Το πεδίο :χαρακτηριστικό πρέπει να λείπει όταν υπάρχει το :values.',
    'missing_with_all' => 'Το πεδίο :χαρακτηριστικό πρέπει να λείπει όταν υπάρχουν :τιμές.',
    'multiple_of' => 'Το πεδίο :χαρακτηριστικό πρέπει να είναι πολλαπλάσιο του :value.',
    'password' => [
        'letters' => 'Το πεδίο :χαρακτηριστικό πρέπει να περιέχει τουλάχιστον ένα γράμμα.',
        'mixed' => 'Το πεδίο :χαρακτηριστικό πρέπει να περιέχει τουλάχιστον ένα κεφαλαίο και ένα πεζό γράμμα.',
        'numbers' => 'Το πεδίο :χαρακτηριστικό πρέπει να περιέχει τουλάχιστον έναν αριθμό.',
        'symbols' => 'Το πεδίο :χαρακτηριστικό πρέπει να περιέχει τουλάχιστον ένα σύμβολο.',
        'uncompromised' => 'Το δεδομένο χαρακτηριστικό : εμφανίστηκε σε μια διαρροή δεδομένων. Επιλέξτε ένα διαφορετικό :χαρακτηριστικό.',
    ],
    'present_if' => 'Το πεδίο :χαρακτηριστικό πρέπει να υπάρχει όταν το :other είναι :value.',
    'present_unless' => 'Το πεδίο :χαρακτηριστικό πρέπει να υπάρχει εκτός εάν το :other είναι :value.',
    'present_with' => 'Το πεδίο :χαρακτηριστικό πρέπει να υπάρχει όταν υπάρχει το :values.',
    'present_with_all' => 'Το πεδίο :χαρακτηριστικό πρέπει να υπάρχει όταν υπάρχουν :τιμές.',
    'prohibited' => 'Το πεδίο :χαρακτηριστικό απαγορεύεται.',
    'prohibited_if' => 'Το πεδίο :χαρακτηριστικό απαγορεύεται όταν το :other είναι :value.',
    'prohibited_unless' => 'Το πεδίο :χαρακτηριστικό απαγορεύεται εκτός εάν το :other είναι σε :τιμές.',
    'prohibits' => 'Το πεδίο :χαρακτηριστικό απαγορεύει την παρουσία του :other.',
    'required_array_keys' => 'Το πεδίο :χαρακτηριστικό πρέπει να περιέχει καταχωρήσεις για: :τιμές.',
    'required_if_accepted' => 'Το πεδίο :χαρακτηριστικό απαιτείται όταν γίνει αποδεκτό το :other.',
    'required_if_declined' => 'Το πεδίο :χαρακτηριστικό απαιτείται όταν απορρίπτεται το :other.',
    'starts_with' => 'Το πεδίο :χαρακτηριστικό πρέπει να ξεκινά με ένα από τα ακόλουθα: :τιμές.',
    'uppercase' => 'Το πεδίο :χαρακτηριστικό πρέπει να είναι κεφαλαίο.',
    'ulid' => 'Το πεδίο :χαρακτηριστικό πρέπει να είναι έγκυρο ULID.',
    'uuid' => 'Το πεδίο :χαρακτηριστικό πρέπει να είναι έγκυρο UUID.',
];
