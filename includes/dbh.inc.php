<?php


try{
    $db = parse_url(getenv("postgres://yxlicoyvhurguv:e2e8a068e4a705e7ba186fa6b1690cdf0a571da153bd867a88ef8f319e25eeb3@ec2-52-86-116-94.compute-1.amazonaws.com:5432/d8o099bsst9clv"));
    $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));
}
catch{
    echo $e->getMessage();
}

?>
// $servername="d8o099bsst9clv";
// $dBUsername="yxlicoyvhurguv"; 
// $dBPassword=""; 
// $dBName="loginsystem";


// $conn= mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

// if(!$conn){
//     die("Connection failed: ".mysqli_connect_error());
// }
