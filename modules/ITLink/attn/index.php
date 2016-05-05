<?php
include_once '../dbconfig.php';


if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM attendance WHERE aid=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>It LInk Corp.</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edit_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>IT Link Corp</label>
    <br><br>

    </div>
</div>
<a href ="http://localhost/frontaccounting/index.php?application=payroll"><button type="button" class="btn btn-info"><b>Back</b></button></a>
<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="8"><a href="add_data.php">Attendence of employee</a></th>
    </tr>
    <th>EID</th>
    <th>IN/OUT</th>
    <th>Date Time</th>
    <!-- <th>In Time</th>
    <th>Out Time</th> -->
    <th>Shift</th>
    <th>Nozzle</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM attendance";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <!-- <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td> -->

        <td><?php echo $row[6]; ?></td>
        <td></td>
  <td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><img src="edit.png" align="EDIT" /></a></td>
        <!-- <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="delete.png" align="DELETE" /></a></td> -->
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>
