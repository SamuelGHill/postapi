<?php

$info="";
$data="";

if(isset($_POST))
{
    $info="Data is fetched successfully";
    $data=$_POST;
}
else {
    $info="Data is fetch successfully";
    $data="No Data Found";
}
$result-> data=$data;
$result-> info=$info;
echo json_encode([$result]);
?>

/* pulling the data from a postman application ex) [{"data":{"name"="sam", "email"="sam@yahoo"}, "info":"Data is fetched successfully"}] */