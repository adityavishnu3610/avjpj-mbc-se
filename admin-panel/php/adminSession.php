<?php 
    include '../../dbConnect.php';

    session_start();

    $user_id = $_SESSION['user_id'];
    $ses_sql = mysql_query("SELECT user_id FROM admin_details WHERE user_id='$user_id'");

    if(!($row = mysql_fetch_array($ses_sql))) {
        header('Location: ../');
        echo "0";
    }
?>