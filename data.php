<?php

$conn = mysqli_connect("localhost","root","","ai_form");
if($_POST['operation'] == "view")
{$view = "select * from suggest_scheme";
$result = mysqli_query($conn,$view);
$scheme_names = mysqli_fetch_all($result);
echo json_encode($scheme_names,JSON_PRETTY_PRINT);}
if($_POST['operation'] == "insert")
{
    $insert = "insert into "
}
?>