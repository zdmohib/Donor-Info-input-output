<!DOCTYPE html>
<html>
<body>

<?php
 
 echo "Welcome ",$_POST["firstname*"],"<br>";
 echo "Your company name is ",$_POST["company"],"<br>";
 echo "You are from ",$_POST["Adress1"]," ",$_POST["City"]," ",$_POST["State"],",",$_POST["ZipCode"],"<br>";
echo "Your Donation Ammount is ",$_POST["ammount"],"<br>";


?>

</body>
</html>