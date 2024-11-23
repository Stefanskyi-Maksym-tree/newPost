<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $problem = $_POST['problem'];
    $modal = $_POST['modal'];

    $to = "topservispraha@gmail.com";
    $date = date ("d.m.Y");
    $time = date ("h:i");
    $from = $email;
    $subject = "заявка с сайта";

    $msg="
    Имя: $name /n
    телефон: $phone /n
    проблема: $problem /n
    модель: $modal";
    mail($to, $subject, $msg, "From: $from ")

?>