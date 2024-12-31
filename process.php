

<?php
    $servername = "localhost";
    $username = 'root';
    $password = '';

  $conn = new PDO("mysql:host=$servername;dbname=situation", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

require_once "conn.php";

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["done"])){
    $name = $_POST["username"];
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];
    $q = "INSERT INTO useer(username,fullname,password,role_id) VALUES(?,?,?,2)";
    $ins = $conn->prepare($q);
    $ins->execute(["$name","$fullname","$password"]);
    header("Location: signin.php");
    
}else{
    // echo "cc";
}

if(($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["login"]))){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $t = "SELECT role_id,username,password AS role FROM useer WHERE username = ? AND password=?";
    $trait = $conn->prepare($t);
    $trait->execute(["$username","$password"]);
    $results = $trait->fetch(PDO::FETCH_ASSOC);
    // var_dump($result);
    // $role = $result["role"];
    if($results){
        foreach ($results as $result) {
            if($result ==1){
                header("Location: admin.php");
            }else{
                echo "welcome, but you are just a user";
            }
        }
    }else{
        header("Location: signin.php");
    }
    echo "cf";
}
    ?>