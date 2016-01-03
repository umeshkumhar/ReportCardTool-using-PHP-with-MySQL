<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php /*?> ***************************************************
Developed By:Umesh Kumhar

https://UmeshKumhar.xyz
********************************************************** <?php */?>
<body>
<?php
include("connect.php");

if(isset($_REQUEST['pid']))
{
$sql="SELECT * from stu_info where id='".$_REQUEST['pid']."'  ";

$q=mysql_query($sql) or die(mysql_error());

	$num = mysql_num_rows($q);
	if($num>0)
	{
		$row=mysql_fetch_array($q);

?>
<h3 align="right"><a href="index.php">Go back to Home :--></a></h3><br/>
 <table align="center" width="350" border="1">
  <tr>
    <th height="73" colspan="4" scope="col"><p>XYZ Engineering College</p>
      <p>Estd. 1998</p></th>
    </tr>
  <tr>
    <td width="77">&nbsp;</td>
    <td colspan="2"><p align="center"><u>Progress Card </u></p></td>
    <td width="119">&nbsp;</td>
  </tr>
  <tr>
    <td>Student Name</td>
    <td width="17"><?php echo $row[2];?></td>
    <td width="109">Enrollment No.</td>
    <td><?php echo $row[1];?></td>
  </tr>
  <tr>
    <td>Father Name</td>
    <td><?php echo $row[3];?></td>
    <td>Mother Name</td>
    <td><?php echo $row[4];?></td>
  </tr>
  <tr>
    <td>Branch</td>
    <td><?php echo $row[5];?></td>
    <td>Semester/Yr.</td>
    <td><?php echo $row[6];?></td>
  </tr>
  <tr>
    <td>Session</td>
    <td><?php echo $row[7];?></td>
    <td>Contact</td>
    <td><?php echo $row[8];?></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center"><u>Subject Details:</u></div></td>
   </tr>
  <tr>
    <td>Subjects</td>
    <td>Maximum Marks</td>
    <td>Mids Marks</td>
    <td>Obtained Marks</td>
  </tr>
  <tr>
    <td>Subject1</td>
    <td>100</td>
    <td><?php echo $row['sub1_mids']; ?></td>
    <td><?php echo $row['sub1_univ']; ?></td>
  </tr>
  <tr>
    <td>Subject2</td>
    <td>100</td>
   <td><?php echo $row['sub2_mids']; ?></td>
    <td><?php echo $row['sub2_univ']; ?></td>
  </tr>
  <tr>
    <td>Subject3</td>
    <td>100</td>
    <td><?php echo $row['sub3_mids']; ?></td>
    <td><?php echo $row['sub3_univ']; ?></td>
  </tr>
  <tr>
    <td>Subject4</td>
    <td>100</td>
   <td><?php echo $row['sub4_mids']; ?></td>
   <td><?php echo $row['sub4_univ']; ?></td> </tr>
  <tr>
    <td>Subject5</td>
    <td>100</td>
    <td><?php echo $row['sub5_mids']; ?></td>
    <td><?php echo $row['sub5_univ']; ?></td>
  </tr>
  <tr>
    <td>Subject6</td>
    <td>100</td>
    <td><?php echo $row['sub6_mids']; ?></td>
    <td><?php echo $row['sub6_univ']; ?></td>
   </tr>
  <tr>
    <td>Total</td>
    <td>500</td>
    <td><?php echo $row['sub1_mids']; ?></td>
    <td><?php echo $row['sub1_univ']; ?></td>
  </tr>
  
  <tr>
    <td>Percentage</td>
    <td><?php echo $row['perc']; ?></td>
    <td>Result</td>
    <td><?php echo $row['pf']; ?></td>
  </tr>
  <tr align="center">
    <td colspan="4"><form id="form1" name="form1" method="post" action="">
      <input type="submit" name="button" id="button" value="Print" onclick="window.print()" />
    </form></td>
   </tr>
</table>

<?php
	}
}
else
{
	header("location:index.php?msg=ERROR!! TRY AGAIN...");
		exit();
	
	
}
?>
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
