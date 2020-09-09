<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
#$state = $_POST['search-box-state'];
#$state = "Virginia";
echo $_POST["select="];
#error_reporting(E_ALL); ini_set('display_errors', 1);

#$sender = $_POST['state'];
#$receiver = $_POST['receiver'];
#$message = $_POST['message'];

echo $state ; /* here, you can only echo $message for instance, 
then use response to append message to chat window */



if(!empty($_POST["keyword"])) {
	#$query ="SELECT City FROM ZIPCodes WHERE (State = '$state' and City like '" . $_POST["keyword"] . "%') Group BY City LIMIT 0,6";
	$query ="SELECT City FROM ZIPCodes WHERE ( City like '" . $_POST["keyword"] . "%') Group BY City LIMIT 0,6";

$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="city-list">
<?php
foreach($result as $city) {
?>
<li onClick="selectCity('<?php echo $city["City"]; ?>');"><?php echo $city["City"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>