<?php 
/* przy kliknięciu serduszka dodaje 1 like do bazy obrazków, 
przy drugim odbiera ten lajk jeżeli jest już w bazie.
wyświetlanie liczby lików z bazy poniżej */
    require("db.php");
    $res = mysqli_query($conn, "select id_obrazka, count(id_obrazka) from polubienia") or die(mysqli_error($conn));
    foreach($res as $result)
    {
        foreach($result as $value)
        {
            echo "$value </br>";
        }
    }
?>