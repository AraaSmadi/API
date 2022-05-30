<?php
$dbServerName = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'testapi';
$dsn = "mysql:host=$dbServerName;dbname=$dbName";
$pdo = new PDO($dsn,$dbUserName,$dbPassword);
$id= $_POST['id'];
$age= $_POST['age'];
    try {
        $sql="UPDATE `test1` SET `age` = $age  WHERE ID = $id";
        $stat=$pdo->query($sql);
        $resultData = array('status' => true, 'message' => 'Post Update Successfully...');
    }
    catch (PDOException $e){
        $resultData = array('status' => false, 'message' => 'Can\'t able to Update  a post details...');
    }
    echo json_encode($resultData);

?>