<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['numbers'])) {
        $num = $_POST['numbers'];
	    if ($num == '55') {
	        $output = ("<h3>55 is correct! gigem{TraingleNumSeqNotSoSecret}</p>");
	    } else {
	        $output = ("<h3>$num is not the number you're looking for</h3>");
	    }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Secret Number</title>
</head>
<body>

<div style="text-align:center;margin-top:100px;">
    <h1>Secret Number</h1>
</div>

<div style="text-align:center;">
    <h3>Find the secret number</h3>
</div>

<div style="text-align:center;margin-top:0px;">
    <form action="index.php" method="post">
       <select name="numbers">
	       <option <?php if ($num == '1') echo "selected"?> value="1">1</option>
           <option <?php if ($num == '3') echo "selected"?> value="3">3</option>
           <option <?php if ($num == '6') echo "selected"?> value="6">6</option>
           <option <?php if ($num == '10') echo "selected"?> value="10" >10</option>
           <option <?php if ($num == '15') echo "selected"?> value="15" >15</option>
           <option <?php if ($num == '21') echo "selected"?> value="21" >21</option>
           <option <?php if ($num == '28') echo "selected"?> value="28" >28</option>
           <option <?php if ($num == '36') echo "selected"?> value="36" >36</option>
           <option <?php if ($num == '45') echo "selected"?> value="45" >45</option>
       </select>
       <input type="submit" name="submit" value="Submit" />
   </form>
   <?php echo($output); ?>
</div>
</body>
</html>
