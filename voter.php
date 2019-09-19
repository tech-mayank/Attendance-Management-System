<?php
 
session_start();

include "auth.php";
include "dbcon.php"; 
$idd=$_GET['id'];
?>
<h4> Welcome <?php echo $_SESSION['firstname']; ?> </h4>
<h3>Cast Your Attendence</h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> What is your today's status <BR>
<input type="text" name="id" value="<?php echo $idd;?>" style="display:none"><BR>
<input type="radio" name="lan" value="present">present<BR>
<input type="radio" name="lan" value="absent">absent<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>

