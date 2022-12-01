<?php

$connection = mysqli_connect('localhost', 'root', '', 'reservation-form');

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$address = strip_tags(htmlspecialchars($_POST['adress']));
$location = strip_tags(htmlspecialchars($_POST['location']));
$guests = strip_tags(htmlspecialchars($_POST['guests']));
$arrivals = strip_tags(htmlspecialchars($_POST['arrivals']));
$leaving = strip_tags(htmlspecialchars($_POST['leaving']));

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = " insert into reservation(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
    mysqli_query($connection, $request);

    // header('location:reservation.php');
    echo "votre message est envoyé avec succés";
} else {
    echo 'something went wrong please try again!';
}
