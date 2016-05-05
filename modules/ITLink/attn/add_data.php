<?php
include_once '../dbconfig.php';
if(isset($_POST['btn-save']))
{
 
 $employename = $_POST['employename'];
 $attndate = $_POST['attndate'];
 $timestatus = $_POST['timestatus'];
 $outtime = $_POST['outtime'];
 $shift = $_POST['shift'];
 
 $sql_query = "INSERT INTO attendance(employename,attndate,timestatus,outtime,shift) VALUES('$employename','$attndate','$timestatus','$outtime','$shift')";
 
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>IT Link Corp.</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="employename" placeholder="employename" required /></td>
    </tr>
    <tr>
    <td><input type="date" name="attndate" placeholder="attndate" required /></td>
    </tr>
    <!-- <tr>
    <td><input type="text" name="timestatus" placeholder="timestatus" required /></td>
    </tr> -->
     <tr>
    <td>
      <select type="text" name="timestatus" placeholder="timestatus" required />      
            <option value='In'>In</option>
            <option value='Out'>Out</option>
      </select>
    </td>
    </tr>
    <tr>
    <td><input type="time" name="outtime" placeholder="outtime" required /></td>
    </tr>
    <tr>
    <td>
      <select type="text" name="shift" placeholder="shift" required />
          <option value='DAY'>DAY</option>
          <option value='NIGHT'>NIGHT</option>
      </select>
    </td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button>
   </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>