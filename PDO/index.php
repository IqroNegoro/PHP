<?php 

$server = "localhost";
$user = "root";
$pass = "";
$db = "PDO";
try {
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    //set error mode ke exception
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS pdo";
    $conn->exec($sql);
    echo "Succesfully create database";
    echo "<br>";
    echo "Succes Connected";
    echo "<br>";
} catch (PDOException $e) {
    echo $sql . "Message :" . $e->getMessage();
}

try {
    $sql = "CREATE TABLE IF NOT EXISTS MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

    $conn->exec($sql);
    echo "Succes Create Table";
} catch (PDOException $e) {
    echo $e->getMessage();
}

// try {
//     $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (
//             'John', 'Doe', 'john@example.com'
//         );";
//     $conn->exec($sql);
//     echo "Succesfully Insert records";
//     // GET last records id;
//     $lastid = $conn->lastInsertId();
//     echo "Last id is $lastid";
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }

// try {

//     //buka transaksi
//     // transaksi dikumpulkan dlu query ya baru di exec 1x jalan
//     $conn->beginTransaction();
//     $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
//     VALUES ('John', 'Doe', 'john@example.com')");
  
//     $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
//     VALUES ('Mary', 'Moe', 'mary@example.com')");
  
//     $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
//     VALUES ('Julie', 'Dooley', 'julie@example.com')");
//     //commit
//     $conn->commit();
//     echo "<br>";
//     echo "Succesfully insert 3 records";
// } catch (PDOException $e) {
//     //Gagalkan multiple query jika ada yang fail
//     $conn->rollBack();
//     echo $e->getMessage();
// }

// // Bind and Execute;
// try {
//     $go = $conn->prepare("INSERT INTO myGuests (firstname, lastname, email) 
//         VALUES (:firstname, :lastname, :email);
//     ");
//     $go->bindParam(":firstname", $firstname);
//     $go->bindParam(":lastname", $lastname);
//     $go->bindParam(":email", $email);
//     $firstname = "Iqro";
//     $lastname = "Negoro";
//     $email = "iqronegoro0@gmail.com";
//     $go->execute();
//     echo "New records succesfully";
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

try {
  $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
echo "</table>";

//delete
try {
    $sql = "DELETE FROM myguests WHERE id = 13";
    $conn->exec($sql);
    echo "Succesfully delete Records";
    echo "<br>";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

//Update;
try {
    $sql = "UPDATE myguests SET firstname = 'John' WHERE id = 40";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED";
} catch(PDOException $e) {
    echo $sql . "Message : " . $e->getMessage();
}


























// Tutup koneksi;
$conn = null;
?>