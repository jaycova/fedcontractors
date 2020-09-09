<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM setaside WHERE   description like '" . $_POST["keyword"] . "%'  Group BY code LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="setaside-list">
<?php
foreach($result as $setaside) {
?>
<li onClick="selectSetaside('<?php echo $setaside["code"]; ?>');"><?php echo $setaside["description"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>