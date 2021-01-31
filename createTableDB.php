<?php

include_once 'dbconnection.php';

$itemName = "";
$selectItem = "";

if (isset($_POST["submit_cf"]) AND ( !empty($_POST["product_Name"]))) {
    $selectItem = $_POST["productSelect"];

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $itemName = test_input($_POST["product_Name"]);
    }
    $itemName = str_replace(" ", "_", $itemName);
    //all item insert in one table
    if ($selectItem == 0) {
        echo $selectItem;
        $sqlSecondTable = "INSERT INTO country (CountryName) VALUES ('$itemName')";
        $sql = "INSERT INTO allitem (itemName) VALUES ('$itemName')";
    } else {
        $selectitemName = strtolower($selectItem);

        $newName = $selectitemName . "_" . $itemName; //new name Bangladesh --> Electronics

        $searchTable = "SELECT * FROM $selectitemName";
        $result = $conn->query($searchTable);
        if (!$result) {
//          Create a MySQL table if No table exists 
            $tableCreate = "CREATE TABLE $selectitemName(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            productCatagory VARCHAR(250) UNIQUE NOT NULL)";
            if ($conn->query($tableCreate) === TRUE) {
                $sqlSecondTable = "INSERT INTO $selectitemName (productCatagory) VALUES ('$itemName')";
                $sql = "INSERT INTO allitem (itemName) VALUES ('$newName')";
            } else {
                echo "Error: " . $tableCreate . "<br>" . $conn->error;
                exit();
            }
        } else {
//            echo "Already Created";
            $sqlSecondTable = "INSERT INTO $selectitemName (productCatagory) VALUES ('$itemName')";
            $sql = "INSERT INTO allitem (itemName) VALUES ('$newName')";
        }
    } //else end



    if (($conn->query($sql) === TRUE) AND ( $conn->query($sqlSecondTable) === TRUE)) {
//      echo "New record created successfully";
        $conn->close();
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $conn->close();
        exit();
    }
}



