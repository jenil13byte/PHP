<?php
$emailAddresses = [
    'john@example.com',
    'mary@example.com',
    'jane@example.com',
    'john@example.com', // Duplicate
    'peter@example.com',
    'mary@example.com', // Duplicate
];

$nonUniqueAddresses = [];

foreach ($emailAddresses as $email) {
    if (in_array($email, $nonUniqueAddresses)) {
        // Mark as non-unique
        echo "Non-unique email: $email\n";
    } else {

        // Add to the list of seen addresses
        $nonUniqueAddresses[] = $email;
    }
}
