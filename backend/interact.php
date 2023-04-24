<?php

include_once 'dbaccess.php';

function getAppointments(){
    $sql = "SELECT * FROM appointment;";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    echo $row;
    //return data
}

