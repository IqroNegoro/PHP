<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- set method post dlu trus action ya balik ke sini lagi -->
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
    <!-- set name alias request name ya -->
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php 
    //cek dlu make psot apa engga make request_method
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        //kalo ada dapetin parameter request dan nama req ya
        $name = $_REQUEST["fname"];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
</body>
</html>