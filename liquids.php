<?php

include_once('includes/functions.php');


$fromValue = '';
$fromUnit = '';
$toUnit = '';
$toValue = '';

if (!isset($_POST['submit'])) {
  $_POST['submit'] = '';
}

if($_POST['submit']) {
  $fromValue = $_POST['fromValue'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];
  $toValue = convert_measurement($fromValue, $fromUnit, $toUnit);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Convert Length</title>
  <link href="../css/styles.css" rel="stylesheet">
</head>

<body>

  <div id="main-content">

    <h1>Convert Length</h1>

    <form action="" method="post">

      <div class="entry">
        <label>From:</label>&nbsp;
        <input type="text" name="fromValue" value="<?php echo $fromValue; ?>">&nbsp;
        <select name="fromUnit">
          <option value="bucket" <?php if($fromUnit == 'bucket') { echo " selected"; } ?>>Bucket</option>
          <option value="butt" <?php if($fromUnit == 'butt') { echo " selected"; } ?>>Butt</option>
          <option value="firkin" <?php if($fromUnit == 'firkin') { echo " selected"; } ?>>Firkin</option>
          <option value="hogshead" <?php if($fromUnit == 'hogshead') { echo " selected"; } ?>>Hogshead</option>
          <option value="pint" <?php if($fromUnit == 'pint') { echo " selected"; } ?>>Pint</option>
          <option value="gallons" <?php if($fromUnit == 'gallons') { echo " selected"; } ?>>Gallons</option>
        </select>
      </div>
      
      
      <div class="entry">
        <label>To:</label>&nbsp;
        <input type="text" name="toValue" value="<?php echo $toValue; ?>">&nbsp;
        <select name="toUnit">
          <option value="bucket" <?php if($toUnit == 'bucket') { echo " selected"; } ?>>Buckets</option>
          <option value="butt" <?php if($toUnit == 'butt') { echo " selected"; } ?>>Butts</option>
          <option value="firkin" <?php if($toUnit == 'firkin') { echo " selected"; } ?>>Firkins</option>
          <option value="hogshead" <?php if($toUnit == 'hogshead') { echo " selected"; } ?>>Hogshead</option>
          <option value="pint" <?php if($toUnit == 'pint') { echo " selected"; } ?>>Pints</option>
          <option value="gallons" <?php if($toUnit == 'gallons') { echo " selected"; } ?>>Gallons</option>
        </select>
      </div>

      <input type="submit" name="submit" value="Submit">
    </form>

    <br>
    <a href="index.php">Return to menu</a>

  </div>
</body>

</html>
