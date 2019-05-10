<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'artem_pn_09');
$query = mysqli_query($con, "UPDATE example SET status= 1, color = 'red' WHERE id='" . $_POST['id'] . "'");
header('Location: http://artemf/62/');
?>