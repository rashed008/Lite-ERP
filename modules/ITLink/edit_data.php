<?php
include_once 'dbconfig.php';
// echo $_GET['edit_id'];
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM employee WHERE eid=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row= mysql_fetch_array($result_set);
  //var_dump($fetched_row);

  
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $name = $_POST['name'];
 $depart = $_POST['depart'];
 $gen = $_POST['gen'];
 
 $sql_query = "UPDATE employee SET name='$name',depart='$depart', gen='$gen' WHERE eid=".$_GET['edit_id'];
 
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IT Link Corp.</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>PROFILE UPDATE</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="name" placeholder="Employee Name" value="<?php echo $fetched_row['name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="depart" placeholder="Department Name" value="<?php echo $fetched_row['depart']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="gen" placeholder="Gender" value="<?php echo $fetched_row['gen']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>