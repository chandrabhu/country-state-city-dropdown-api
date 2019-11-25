<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();

if (! empty($_POST["state_id"])) {

    $query = "SELECT * FROM cities WHERE state_id = '" . $_POST["state_id"] . "' order by name asc";
    $results = $db_handle->runQuery($query);
    ?>
<option value disabled selected>Select City</option>
<?php
    foreach ($results as $city) {
 ?>
<option value="<?php echo $city["id"]; ?>" name="<?php echo $city["name"]; ?>"><?php echo $city["name"];?></option>
<?php
    }
}
?>