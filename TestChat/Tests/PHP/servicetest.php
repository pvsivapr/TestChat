<?php
//header("Content-Type: application/json; charset=UTF-8");
//$obj = json_decode($_POST["x"], false);

//try
//{
//$conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
//$conn = new mysqli("myServer", "myUser", "myPassword", "Northwind");
//$result = $conn->query("SELECT name FROM ".$obj->table." LIMIT ".$obj->limit);
//$outp = array();
//$outp = $result->fetch_all(MYSQLI_ASSOC);
//echo json_encode($outp);
//    echo $conn;
//}
//catch (PDOException $e) {
//    echo "unsuccessful";
//    echo 'Connection failed: ' . $e->getMessage();
//}

$servername = "mysql4.gear.host";
$username = "mmplayerdb";
$password = "\$iva02071992mmplayer";
$dbName = "mmplayerdb";
$host = 3306;
$id="5";
$mId="movTelMjn";
$mName="Majnu";
$mNoSongs="6";
$mLogo="fdhrhnrerger";
try
{
//    echo "sccessful1";
//    $conn = new PDO("mysql:host=mysql4.gear.host;dbname=mmplayerdb", "mmplayerdb", "\$iva02071992mmplayer");
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $sql = "INSERT INTO mmplayerdb.mmplayermovies (id, movieId, movieName, movieLogoURL, noOfSongs) VALUES ('$obj->id', '$obj->movie_id', '$obj->movie_name', '$obj->no_of_songs', '$obj->movie_logo_url')";
    $sql = "INSERT INTO mmplayerdb.mmplayermovies (id, movieId, movieName, movieLogoURL, noOfSongs) VALUES ('$id', '$mId', '$mName', '$mLogo', '$mNoSongs')";
    $conn->exec($sql);
    $result = array("message"=>"User Registration is successful","code"=>"1","Result"=>$sql);
//$conn = new mysqli("myServer", "myUser", "myPassword", "Northwind");
//$result = $conn->query("SELECT name FROM ".$obj->table." LIMIT ".$obj->limit);
//$outp = array();
//$outp = $result->fetch_all(MYSQLI_ASSOC);
//echo json_encode($outp);
//    echo "sccessful2";
    echo json_encode($result);
}
catch (PDOException $e) {
//    echo "unsuccessful";
//    $error = $e->getMessage;
    $conn = null;
    $result = array("message"=>"User Registration is not successful","code"=>"1","Result"=>"error");
    echo json_encode($result);
//    echo 'Connection failed: ' . $e->getMessage();.toString()
}

//try
//{
//     header("Content-Type: application/json; charset=UTF-8");
//    // $obj = json_decode($_POST["x"], false);
//    // echo "successful1";
//    // $sql = "INSERT INTO mmplayerdb.mmplayermovies (id, movieId, movieName, movieLogoURL, noOfSongs) VALUES ('$obj->id', '$obj->movie_id', '$obj->movie_name', '$obj->no_of_songs', '$obj->movie_logo_url')";
//    // echo "successful2";
//    echo $password;
//    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
//    echo "successful3";
//    echo $conn;
//    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "successful4";
//    // $conn->exec($sql);
//    echo "successful5";
//    $conn = null;
//}
//catch (PDOException $e) {
//    echo "unsuccessful";
//    echo 'Connection failed: ' . $e->getMessage();
//}
?>