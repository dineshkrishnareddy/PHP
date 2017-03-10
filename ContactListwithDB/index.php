<!DOCTYPE HTML>  
<html>
<head>
    <title>PHP Demo</title>
    <style>
    .error {color: #FF0000;}
    .tableColumn {
        width: 150px;
        border: 1px solid black;
    }
    </style>
</head>
<body>  


<?php include 'validators.php';?>

<h3>Contact List Application</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Address: <input type="text" name="address" value="<?php echo $address;?>">
  <span class="error">*<?php echo $addressErr;?></span>herok
  <br><br>
  City: <input type="text" name="city" value="<?php echo $city;?>">
  <span class="error">*<?php echo $cityErr;?></span>
  <br><br>
  Phone: <input type="text" name="phone" value="<?php echo $phone;?>">
  <span class="error">*<?php echo $phoneErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php include 'displayContent.php';?>
</body>
</html>
