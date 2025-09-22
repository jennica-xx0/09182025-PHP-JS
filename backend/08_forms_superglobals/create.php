<?php

echo '<pre>';
var_dump($_FILES);
echo '>/pre>';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);

    if ($name && $email && $phone){
        echo "contact added:  $name ($email, $phone)";
    }else{
        echo "Invalid input";
    }
}
?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "" method="POST" enctype ="multipart/form-data">
        <label>Name: </label>
        <input type ="text" name="name">
        <br>

        <label>Email: </label>
        <input type ="emial" name="email">
        <br>
        
        <label>Phone: </label>
        <input type ="text" name="phone">
        <br>

        <label>Contact Image: </label>
        <input type ="file" name="image" accept="image/*">
        <br>

        <button type="submit"> Add Contact</button>
    </form>
</body>
</html>