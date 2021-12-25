<?php 
declare(strict_types=1); 
$server = "localhost";
$user = "root";
$pass = "";
$db = "";

$connect = mysqli_connect("$server", "$user", "$pass", "$db"); 

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
    <style>
    </style>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" enctype="multipart/form-data">
        Select image to upload :
        <input type="file" name="file" id="file">
        <input type="submit" name="submit">
    </form>
    <?php 
    if (isset($_POST["submit"])) {
    $target_dir = "C:/xampp/htdocs/PHP2022/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $ok = 1;
    $type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image : " . $check["mime"];
            $ok = 1;
        } else {
            echo "File is not an image";
            $ok = 0;
        }

        if  (file_exists($target_file)) {
            echo "File already exist";
            $ok = 0;
        }

        if ($_FILES["file"]["size"] > 50000) {
            echo "File to big";
            $ok = 0;
        }

        if ($type != "jpg" && $type != "png" && $type != "jpeg" && $type != "gif") {
            echo "Not allowed ext";
            $ok = 0;
        }

        if ($ok == 1) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                echo "succes uploading file!";
            } else {
                echo "error!";
            }
        } else {
            echo "Error!";
        }
    }

    ?>

    <script>

    </script>

</body>
</html>