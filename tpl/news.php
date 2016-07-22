<?php
include '../class/UserData.php';
include("../header.php");

$posts = array();

$model = new UserData();
$posts = $model->read(8);

foreach($posts as $i)
{

}

?>
<?php include("../footer.php"); ?>
