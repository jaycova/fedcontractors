<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT ZipCode FROM ZIPCodes WHERE ZipCode like '" . $_POST["keyword"] . "%' Group BY ZipCode LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="zipcode-list">
<?php
foreach($result as $zipcode) {
?>
<li onClick="selectZip('<?php echo $zipcode["ZipCode"]; ?>');"><?php echo $zipcode["ZipCode"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>