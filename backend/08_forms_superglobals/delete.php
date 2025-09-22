<?php
if (isset($_GET['id'])) {
    $contactsFile = 'contacts.json';
    $contacts = file_exists($contactsFile) ? json_decode(file_get_contents($contactsFile), true) : [];

    // Remove the contact by id
    $contacts = array_filter($contacts, fn($c) => $c["id"] !== (int)$_GET["id"]);

    file_put_contents($contactsFile
    , json_encode($contacts, JSON_PRETTY_PRINT));
    echo "Contact Deleted";

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <a href="index.php">Back</a>

</body>
</html>