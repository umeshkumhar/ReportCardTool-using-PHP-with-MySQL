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
<?php include("connect.php");  
?>





<h1 align="center"> XYZ Engineering College </h1>
<p align="center">****************************************************************************************************************</p>

<h2 align="center" ><u> Report Card Generation Tool</u> </h2>
<h3 align="right"><a href="index.php">Go back to Home :--></a></h3>


<br/><h4 align="center">Search Form</h4><br/>
<form action="?" method="POST">
<table align="center" width="870" border="0">
  <tr>
    <th colspan="2" scope="col"><div align="center">By Enrollment No.</div></th>
    <th colspan="2" scope="col"><div align="center">By Student Name</div></th>
    <th colspan="2" scope="col"><div align="center">By Branch</div></th>
    </tr>
  <tr>
    <td width="102"><label for="s1"/>    
      <div align="center">Enroll No.</div></td>
    <td width="176">
      <div align="center">
        <input type="text" name="s1" id="s1" />
      </div></td>
    <td width="137"><label for="s2"/>    
      <div align="center">Student Name</div></td>
    <td width="168">
      <div align="center">
        <input type="text" name="s2" id="s2" />
      </div></td>
    <td width="78"><label for="s3"/>    
      <div align="center">Branch</div></td>
    <td width="183">
      <div align="center">
        <select name="s3" id="s3">
          <option selected="selected">-- Select Branch --</strong></option>
          <option>CSE</option>
          <option>IT</option>
          <option>Civil</option>
          <option>EE</option>
          <option>ECE</option>
          <option>ME</option>
        </select>
      </div></td>
  </tr>
  <tr>
    <td height="55"><div align="center"></div></td>
    <td><div align="center">
      <input type="submit" name="b1" id="b1" value="Submit" />
    </div></td>
    <td><div align="center"></div></td>
    <td><div align="center">
      <input type="submit" name="b2" id="b2" value="Submit" />
    </div></td>
    <td><div align="center"></div></td>
    <td><div align="center">
      <input type="submit" name="b3" id="b3" value="Submit" />
    </div></td>
  </tr>
</table>


</form>

<?php
if(isset($_REQUEST['b1']) || isset($_REQUEST['b2'])|| isset($_REQUEST['b3']))
{
?>

<br/><p align="center">Search Results:</p>
<table align="center" width="1174" height="137" border="1">


  <tr>
    <th width="35" scope="col"><div align="center">S. No.</div></th>
    <th width="45" height="60" scope="col"><div align="center">Roll No.</div></th>
    <th width="59" scope="col"><div align="center">Name</div></th>
    <th width="70" scope="col"><div align="center">Fname</div></th>
    <th width="78" scope="col"><div align="center">Mname</div></th>
    <th width="75" scope="col"><div align="center">Branch</div></th>
    <th width="92" scope="col"><div align="center">Semester</div></th>
     <th width="75" scope="col"><div align="center">Session</div></th>
    <th width="75" scope="col"><div align="center">Contact</div></th>

    <th width="58" scope="col"><div align="center">Subj1</div></th>
    <th width="58" scope="col"><div align="center">Subj2</div></th>
    <th width="58" scope="col"><div align="center">Subj3</div></th>
    <th width="58" scope="col"><div align="center">Subj4</div></th>
    <th width="58" scope="col"><div align="center">Subj5</div></th>
    <th width="58" scope="col"><div align="center">Subj6</div></th>
    <th width="52" scope="col"><div align="center">Total</div></th>
    <th width="114" scope="col"><div align="center">Percentage</div></th>
    <th width="35" scope="col"><div align="center">Delete</div></th>
    <th width="37" scope="col"><div align="center">Edit</div></th>
    <th width="35" scope="col"><div align="center">Report Card</div></th>

  </tr>


<?php
	if(isset($_REQUEST['b1']))
	{
		$sql= "SELECT * from stu_info where enrollno='".$_POST['s1']."' ";
	}
	if(isset($_REQUEST['b2']))
	{
		$sql= "SELECT * from stu_info where sname LIKE '%".$_REQUEST['s2']."%' or '".$_REQUEST['s2']."%' or '%".$_REQUEST['s2']."'   ";	
	}
	if(isset($_REQUEST['b3']))
	{
		$sql= "Select  * from stu_info where branch='".$_POST['s3']."'  ";	
	}
	
		$q= mysql_query($sql) or die(mysql_error());
	$i=1;
		$num=mysql_num_rows($q);
		if($num>0)
		{
			
		while($row=mysql_fetch_array($q))
		{
		

?>

<br/><br/>


  
  <tr>
    <td><div align="center">
      <?php  echo $i++; ?>
    </div></td>
    <td height="55"><div align="center"><?php echo $row['enrollno'];?></div></td>
    <td><div align="center"><?php echo $row[2];?></div></td>
    <td><div align="center"><?php echo $row[3]?></div></td>
    <td><div align="center"><?php echo $row[4]?></div></td>
    <td><div align="center"><?php echo $row[5]?></div></td>
    <td><div align="center"><?php echo $row[6]?></div></td>
     <td><div align="center"><?php echo $row[7]?></div></td>
    <td><div align="center"><?php echo $row[8]?></div></td>
    
    <td><div align="center"><?php echo $row['sub1_mids']."+".$row['sub1_univ'] ?></div></td>
    <td><div align="center"><?php echo $row['sub2_mids']."+".$row['sub2_univ'] ?></div></td>
    <td><div align="center"><?php echo $row['sub3_mids']."+".$row['sub3_univ'] ?></div></td>
    <td><div align="center"><?php echo $row['sub4_mids']."+".$row['sub4_univ'] ?></div></td>
    <td><div align="center"><?php echo $row['sub5_mids']."+".$row['sub5_univ'] ?></div></td>
    <td><div align="center"><?php echo $row['sub6_mids']."+".$row['sub6_univ'] ?></div></td>
   <td><div align="center"><?php echo $row['total_mids']+$row['total_ob'] ?></div></td>
    <td><div align="center"><?php echo $row['perc'] ;?></div></td>
     <td>
      <div align="center"><a href="select.php?action=del&did=<?php echo $row['id'];?>"><img src="del.png" /></a>
    </div></td>
       <td>
         <div align="center"><a href="update.php?action=edit&eid=<?php echo $row['id'];?>"><img src="edit.png"/></a>
    </div></td>
    <td>
         <div align="center"><a href="reportcard.php?pid=<?php echo $row['id'];?>"><img src="report.png"/></a>
    </div></td>
  </tr>
	

 <?php
		}
}// end of rows
else{
	
?>

  <tr>
    <td height="55" colspan="15"><div align="center">No Record Found !!!</div></td>
</tr>

<?php
}

}// end of search b1
?>    

</table>
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