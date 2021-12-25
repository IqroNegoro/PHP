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
    <?php
    function a() {
        echo "<br>";
    }
//     echo "Yaha hayyuk \n";
//     $text = "KOAWKOWAKOWA";
//     echo $text;

//     //functions
//     $x = 10;
//     $y = 10;

//     function plus() {
//         //kalo mau ambil global variable harus di deklarasiin
//         global $x, $y;
//         echo $x + $y;
//     }

//     plus();
//     echo "<br>";
//     //static keyword karena func variable hanya sekali jalan maka harus dikasih static agar value ya tetap
//     //contoh make global value
//     $z = 0;
//     function incr() {
//         global $z;
//         $z++;
//     }

//     incr();
//     incr();
//     incr();

//     echo $z . "<br>";

//     //pakai static
//     function increment() {
//         static $a = 0;
//         $a++;
//         echo $a . " <br> ";
//     }
//     //karena local scope jadi gk bisa echo
//     increment();

//     //return strlen alias str.length;
//     $myText = "KOWAKOAWKOWAOWAKOAWKO A B C D E F";
//     echo strlen($myText) . "<br>";
//     //return word str
//     echo str_word_count($myText);
//     echo "<br>";
//     //reverse string. kalo di js ngotak dlu
//     echo strrev($myText);
//     echo "<br>";
    
//     //cari string
//     echo strpos($myText, "A B");

//     //replace ada 3 param. ke-1 yg mau diganti, ke-2 yang pengganti, ke 3 textnya
//     echo "<br>";
//     $repl = "Aku sayang kamu";
//     echo str_replace("kamu", "dunia", $repl);
//     echo "<br>";
//     //return pi
//     echo pi();
//     echo "<br>";
//     //max and min
//     echo(min(1,2,10,20,5,6,4,100));
//     echo "<br>";
//     echo(max(1,2,10,20,5,6,4,100));
//     echo "<br>";
//     //return positive dari negative
//     echo abs(-60);
//     echo "<br>";
//     //generate random numb
//     echo rand();
//     echo "<br>";
//     //ngontrol random 
//     echo rand(10, 100);

//     //buat const variables
//     define("Aku", 123);
//     echo Aku; //gk perlu variable lagi dan value ya constant
//     echo "<br>";
//     //buat const arr
//     define("cars", [
//         "BMW",
//         "Supra",
//         "Toyotah"
//     ]);

//     echo cars[0];
//     echo "<br>";
//     echo date("H");
//     echo "<br>";
//     //for each php
//     $myArr = array(1,2,3,4,5);
//     foreach ($myArr as $x => $i) {
//         echo $x . $i . "<br>";
//     }

//     //foreach dengan pairs value
//     $pairsArr = array("Peter"=>35, "Bento"=>13);
//     foreach ($pairsArr as $nama => $umur) {
//         echo " Nama : " . $nama . ", Umur : " . $umur;
//     }

//     //functions
//     function name($val) {
//         echo $val;
//     }

//     name("Sasuke");
//     name("Madara");
//     name("Naruto");
//     a();
//     //default value
//     function setHeight($height = 100) {
//         echo $height;
//     }

//     setHeight();
//     a();
//     setHeight(50);

//     //spesifik return value type
//     function addNumbers(float $a, float $b) : float {
//         return $a + $b;
//     }
//     a();
//     echo addNumbers(1.5,1.4);

//     a();
//     function addNum(float $a, float $b) {
//         return $a + $b;
//     }

//     echo addNum(1.3,2.2);
// a();
//     //php array
//     $myFirstArray = array(1,2,3,4,5);
//     foreach ($myFirstArray as $x) {
//         echo $x;
//     }
//     a();
//     //return length
//     echo count($myFirstArray);
//     a();
//     for ($i = 0; $i < count($myFirstArray); $i++) {
//         echo $i;
//     }

//     //assoc array;
//     $myArr1 = array("Peterpan"=>"31", "Sasuke"=>"20", "Naruto"=>"21");
//     a();
//     echo "Naruto berumur " . $myArr1["Naruto"] . " Tahun";

//     //multidimensi array
//     /* kalo Javascript 
//     let myArr = [
//         [1,2],
//         [3,4],
//         [5,6]
//     ]
//     */

//     $myMultiArr = array(
//         array("Volvo", 12, 13),
//         array("BMW",12,43)
//     );

//     for ($i = 0; $i < count($myMultiArr); $i++) {
//         echo "<p> Row : $i </p>";
//         echo "<ul>";
//         for ($j = 0; $j < 3; $j++) {
//             echo "<li>" . $myMultiArr[$i][$j] . "</li>";
//         }
//         echo "</ul>";
//     }

//     //sorting array php
//     $mySortArr = array("A", "b", "B", "C", "Z", "AS", "GDF");
//     $mySortNumb = array(1,3,5,6,3,5,685,24,58247581347,235,245,2348564);
    
//     //dari kecil
//     sort($mySortArr);
//     foreach ($mySortArr as $x) {
//         echo $x;
//     }
    
//     rsort($mySortArr);
//     foreach ($mySortArr as $x) {
//         echo $x;
//     }
//     //dari besar
//     a();
//     //sort assoc array
//     //sort() asc rsort() desc
//     //asort dari value ksort dari key; aksort dan krsort
//     $myPairsArr = array("Iqro"=>"JUZ 30", "Sasuke"=>"Juz 29", "Naruto"=>"JUZ 1");
//     ksort($myPairsArr);
//     foreach ($myPairsArr as $key => $val) {
//         echo $key . $val . "<br>";
//     }

    
//     //Superglobals
//     //$GLOBALS;
//     $c = 5;
//     $d = 30;
//     function mult() {
//         global $c, $d;
//         $GLOBALS['z'] = $c + $d; 
//     }

//     mult();
//     echo $z;

//     //server
//     echo $_SERVER['PHP_SELF'];
//     echo "<br>";
//     echo $_SERVER['SERVER_NAME'];
//     echo "<br>";
//     echo $_SERVER['HTTP_HOST'];
//     echo "<br>";
//     echo $_SERVER['HTTP_USER_AGENT'];
//     echo "<br>";
//     echo $_SERVER['SCRIPT_NAME'];
//     a();

//     //regexp php
//     $texts = "Ore no yabou";
//     $regexp = "/yabou/i";
//     //return 1 jika ada return 0 jika tak ada
//     echo preg_match($regexp, $texts);

    //ADVANCED
    //date
    //param 1 format param 2 timestamp
    /*
        d - Represents the day of the month (01 to 31)
        m - Represents a month (01 to 12)
        Y - Represents a year (in four digits)
        l (lowercase 'L') - Represents the day of the week
    */
    echo date("l, d-m-y"); //return dari 1 januri 1970
    a();
    echo date("L, D-M-Y");
    a();
    //date
    /*
    H - 24-hour format of an hour (00 to 23)
    h - 12-hour format of an hour with leading zeros (01 to 12)
    i - Minutes with leading zeros (00 to 59)
    s - Seconds with leading zeros (00 to 59)
    a - Lowercase Ante meridiem and Post meridiem (am or pm) */
    date_default_timezone_set("Asia/Jakarta");
    echo date("H:i:s");
    //get a time

    //mktime
    //hour minte sec d m y
    a();
    $d = mktime(12, 0, 0, 14, 02, 2005);
    echo date("d-m-y, H:s:a", $d);
    a();
    //strtotime
    $e=strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("Y-m-d h:i:sa", $e);
    a();
    $tomorrow = strtotime("tomorrow");
    echo date("y-m-d h:i:s", $tomorrow);

    //next weeks
    $startdate = strtotime("tomorrow");
    $endday = strtotime("+6 weeks", $startdate);

    while ($startdate < $endday) {
        echo date("d M", $startdate);
        $startdate = strtotime("+1 weeks", $startdate);
    }

    include "req.php";

    //readfile
    echo readfile("webdict.txt");
a();
    //fopen fwrite fread fclose
    // r read w write a write dari recent x newfile, dan r+ w+ a+ x+
    $myFile = fopen("webdict.txt", "r") or die("ERROR!");
    echo fread($myFile, filesize("webdict.txt"));
    fclose($myFile);

    // for ($i = 0; $i < 3; $i++) {
    //     $myF = fopen("ABC$i.txt", "a") or die("error!");
    //     fwrite($myF, "ABC");
    //     fclose($myF);
    // }
        a();
    //cookies
    // / untuk work di semua website kita
    $cookiename = "name";
    $cookievalue = "Iqro Negoro";
    setcookie($cookiename, $cookievalue, time() + 60 * 60 * 24 * 30);
    echo $_COOKIE["name"];
    

















































    ?>
</body>
</html>


      
