<?php
// task 4 Q5
function findDuplicateEmails(array $emails): array
{
    $emailCounts = array_count_values($emails);
    $duplicateEmails = [];

    foreach ($emailCounts as $email => $count) {
        if ($count > 1) {
            $duplicateEmails[] = $email;
        }
    }

    return $duplicateEmails;
}
$emailList = [
    "sam123@mail.com",
    "jaysmith@mail.com",
    "sam123@mail.com",
    "mikejohnson@mail.com",
    "rajsmith@mail.com"
];

$duplicateEmails = findDuplicateEmails($emailList);

if (count($duplicateEmails) > 0) {
    echo "Duplicate email is found:\n";
    foreach ($duplicateEmails as $email) {
        echo " - " . $email . "\n";
    }
} else {
    echo "No duplicate email is found.\n";
}
?>