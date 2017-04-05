
<?php
include "db.php";

$comment= "trial";

$comment = $_POST['flag1'];

echo $comment;

$query = "INSERT into commentdb (author, comment) values ('Anonymous','$comment')";
mysqli_query($con, $query);


?>