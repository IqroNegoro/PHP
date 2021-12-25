<?php 
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
        Nama : <input type="text" name="nama">
        Umur : <input type="text" name="umur">
        email: <input type="text" name="email">
        gender : <input type="radio" name="gender" value="L"> L
                <input type="radio" name="gender" value="P"> P 
                <input type="submit">
    </form>
    <?php
    $nama = $umur = $email = $gender = "";
    function clearing($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    };
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = clearing($_POST["nama"]);
        $umur = clearing($_POST["umur"]);
        $email = clearing($_POST["email"]);
        $gender = clearing($_POST["gender"]);
        echo "
        Your Name : $nama
        Your Age : $umur
        Your Email : $email
        Your Gender : $gender
        ";
    }












    ?>
</body>
</html>