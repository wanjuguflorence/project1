<?php
if (isset($_POST['submitvalues'])) {

    $Name=$_POST['name'];
    $Subject1=$_POST['Subject1'];
    $Subject2=$_POST['Subject2'];
    $Subject3=$_POST['Subject3'];
    $Subject4=$_POST['Subject4'];
    $Subject5=$_POST['Subject5'];

    echo "Student Name: ".$Name."<br>";
    echo "Subject1 Marks: ".$Subject1."<br>";
    echo "Subject2 Marks: ".$Subject2."<br>";
    echo "Subject3 Marks: ".$Subject3."<br>";
    echo "Subject4 Marks: ".$Subject4."<br>";
    echo "Subject5 Marks: ".$Subject5."<br>";

}else{ ?>
<html>
<body>
<!--Form-->
<form action="exercise6ii.php" method="post" > 

    <input type="hidden"  name="action" value="submit"> 
    Student Name:<br> 
    <input name="name"    type="text" value="" size="30"/><br> 
    Subject1:<br> 
    <input name="Subject1" type="text" value="" size="30"/><br> 
    Subject2:<br> 
    <input name="Subject2" type="text" value "" size="30"/><br>

   Subject3:<br> 
    <input name="Subject3" type="text" value "" size="30"/><br>

     Subject4:<br> 
    <input name="Subject4" type="text" value "" size="30"/><br>

     Subject5:<br> 
    <input name="Subject5" type="text" value "" size="30"/><br>

   
    <input name="submitvalues" type="submit" value ="submit"  size="30" /><br> 

    </form>

</body>
</html>
 <?php } ?>