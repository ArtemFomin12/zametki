<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'artem_pn_09');
$query = mysqli_query($con, "INSERT INTO example (img, text, data) VALUES ( '" . $_FILES['img']['name'] . "', '" . $_POST['text'] . "', '" . $_POST['data'] . "')");
header('Location: http://artemf/62/');
?>