<?php
    $con = mysql_connect('localhost','id17425108_yadaklinis','V>CV]Sm@e2P[0(<W');
    if (!$con){
        die("fail to connect to datadase" .mysql_error());
    }
    mysql_select_db('id17425108_yadak',$con);

    $first = $_POST['Firstname'];
    $last = $_POST['Lastname'];
    $phone = $_POST['Phonenumber'];
    $email = $_POST['Emailaddress'];
    $mail = $_POST['mail'];

    $sql = "INSERT INTO messages (Firstname,Lastname,Phonenumber,Emailaddress,mail)
    VALUES ('$first','$last','$phone','$email','$mail')";
        $qury = mysql_query($sql);
        if(!$qury)
        echo"failed to insert to database" .mysql_error();
            else
            header('location:contact.html');
            mysql_close($con);   
?>