<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "stack";

    $conn = new mysqli($servername,$username,$password,$db);
    if($conn->connect_error)
    {
        die("Połączenie nie powiodło się: ".$conn->connect_error);
    }

    function add_logs($client, $mysqli)
    {
        $res = $mysqli->query("SELECT id_uzytkownika FROM uzytkownicy WHERE login='$client'");
        if($res->num_rows == 1){
            while ($row = $res->fetch_assoc()) {
                $id = $row["id_uzytkownika"];
            }

            $stmt=$mysqli->prepare("INSERT INTO logi(id_uzytkownika) VALUES(?)");
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $stmt->close();
        }
        else
        {
            echo "Nie znaleziono użytkownika: $client";
        }
    }
?>