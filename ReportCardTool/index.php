<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report Card Generation Tool</title>
<?php /*?> ***************************************************
Developed By:Umesh Kumhar

https://UmeshKumhar.xyz




********************************************************** <?php */?>
<script language="javascript">
function fun(msg)
{
	alert(msg);
}

</script>

</head>

<body>
<?php 

	include("connect.php");

?>


 
<h1 align="center"> XYZ Engineering College </h1>
<p align="center">****************************************************************************************************************</p>

<h2 align="center"> Report Card Generation Tool </h2>

<?php
	if(isset($_GET['msg']))
	{
	
	echo $_REQUEST['msg'];

	}
?>
<br/><br/>
<ul style="margin-left:450px">

<li>--- <a href="insert.php">Insert</a></li>
<li>---<a href="select.php"> Display</a></li>
<li>---<a href="select.php"> Modify / Delete</a></li>

<li>---<a href="search.php"> Search</a></li>
 

</ul>

<div align="right"><br/> 
  <br/>
  <a href="https://UmeshKumhar.xyz">Developed By Umesh Kumhar</a></div>
  <br/>
</body>
</html>
<?php /*?> ***************************************************
Developed By:Umesh Kumhar

https://UmeshKumhar.xyz




********************************************************** <?php */?>