<?php
if(isset($_GET['key']) && $_GET['key'] == "test"){
    header("Content-Disposition: attachment; filename=test.png");
    readfile(__DIR__ . "/files/Screenshot 2023-04-07 220533.png");

    exit();
} else {
    echo "Invalid Key";
}
?>