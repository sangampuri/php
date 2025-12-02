<?php
// Always handle the POST request here — if the radio wasn't selected
// there will be no 'contact' key in POST, so use null-coalesce.
$contact = trim($_POST['contact'] ?? '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($contact && array_key_exists($contact, $contacts)) {
        $contact = htmlspecialchars($contact);
    } else {
        $errors['contact'] = 'Please select at least an option.';
    }

    if (count($errors)) {
        require __DIR__ . '/get.php';
        exit;
    }

    echo <<<html
        You selected to be contacted via <strong>$contact</strong>.
        <a href="index.php">Back to the form</a>
        html;

}
