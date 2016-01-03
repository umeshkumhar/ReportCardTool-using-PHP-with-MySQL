<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php /*?> ***************************************************
Developed By:Umesh Kumhar

https://UmeshKumhar.xyz




********************************************************** <?php */?>
<title>Update- ReportCardTool</title>

<script language="javascript" >
function fun(msg){
	alert(msg);
 }
function focuson()
{
	document.report.q1.focus();	
}


</script>


</head>




<body onload="focuson()">

<?php

include("connect.php");
// select the information to be display n the form for the updation....


if(isset($_GET['eid']))
{
$q= mysql_query(" SELECT * from stu_info where id = ".$_GET['eid']) or die(mysql_error());	
	$n=mysql_num_rows($q);
	if($n>0)
	{
		$row=mysql_fetch_array($q);
	}
}

// update the form tothe database at eid

if(isset($_REQUEST['b2']) && !empty($_REQUEST['q2']))
{

	$sql= "UPDATE stu_info SET enrollno='".$_POST['q2']."',sname='".$_POST['q1']."',fname='".$_POST['q3']."',mname='".$_POST['q4']."',branch='".$_POST['q5']."',
							semester='".$_POST['q6']."',session='".$_POST['q7']."',contact='".$_POST['q8']."',
			sub1_mids='".$_POST['q9']."',sub2_mids='".$_POST['q10']."',sub3_mids='".$_POST['q11']."',
					sub4_mids='".$_POST['q12']."',sub5_mids='".$_POST['q13']."',sub6_mids='".$_POST['q14']."',
			sub1_univ='".$_POST['q15']."',sub2_univ='".$_POST['q16']."',sub3_univ='".$_POST['q17']."',
					sub4_univ='".$_POST['q18']."',sub5_univ='".$_POST['q19']."',sub6_univ='".$_POST['q20']."'
					where id='".$_REQUEST['h1']."'  ";
				

	mysql_query($sql);

	 $r = mysql_insert_id();
	if( isset($r))
	{
 		header("location:index.php?msg=Record Successfully Updated !");
		exit();

	}
	else
	{
 		
		header("location:index.php?msg=Record NOT Successfully Updated------> '".mysql_error()."' ------> TRY AGAIN !!!");
		exit();
 	}


}// end of issetbutton
?>

<h1 align="center"> Updation of Student Details</h1>
<h3 align="right"><a href="index.php">Go back to Home :--></a></h3>
<form name="report" action="?" method="POST" >
  <table align="center" width="757" height="635" border="1">
  <tr>
    <td><div align="center">
      <table width="757" height="635" border="1">
        <tr>
          <th colspan="4" scope="col"><div align="center"><strong><u>XYZ Engineering College</u></strong></div></th>
        </tr>
        <tr>
          <th colspan="4" scope="col"><div align="center"><code>Personal details:</code></div></th>
        </tr>
        <tr>
          <td><div align="center"><label for="q1"/>Student Name</div></td>
          <td>
            <div align="center">
              <input type="text" name="q1" id="q1" value="<?php echo $row[2]; ?>" />
            </div></td>
          <td><div align="center"><label for="q2"/>Enroll No.</div></td>
          <td><div align="center">
            <input type="text" name="q2" id="q2" value="<?php echo $row[1]; ?>"/>
          </div></td>
        </tr>
        <tr>
          <td><div align="center"><label for="q3"/>Father's Name</div></td>
          <td><label for="q3"></label>
            <div align="center">
              <input type="text" name="q3" id="q3" value="<?php echo $row[3]; ?>"/>
            </div></td>
          <td><div align="center"><label for="q4"/>Mother's Name</div></td>
          <td><label for="q4"></label>
            <div align="center">
              <input type="text" name="q4" id="q4" value="<?php echo $row[4]; ?>"/>
            </div></td>
        </tr>
        <tr>
          <td><div align="center"><label for="q5"/>Branch</div></td>
          <td> 
            <div align="center">
              <select name="q5" id="q5" >
                <option selected="selected" >----Select Branch----</option>
                <option>CSE</option>
                <option>IT</option>
                <option>Civil</option>
                <option>EE</option>
                <option>ECE</option>
                <option>Mechanical</option>
              </select>
            </div></td>
          <td><div align="center"><label for="q6"/>Semester/Year</div></td>
          <td>
            <div align="center">
              <select name="q6" id="q6" >
                <option>----Select Semester/Yr.----</option>
                <option>1st Sem / I year</option>
                <option>2nd sem / I year</option>
                <option>3rd Sem / II year</option>
                <option>4th Sem / II year</option>
                <option>5th Sem / III Year</option>
                <option>6th Sem / III Year</option>
                <option>7th Sem / IV Year</option>
                <option>8th Sem / IVYear</option>
              </select>
            </div></td>
        </tr>
        <tr>
          <td><div align="center" ><label for="q7"/>Session</div></td>
          <td>
            <div align="center">
              <select name="q7" id="q7">
                <option selected="selected">----Select Session----</option>
                <?php for($i=2000;$i<2050;$i++){?>
                <option>
                  <?php $y=$i++;echo $y."-".$i ?>
                  </option>
                <?php } ?>
              </select>
            </div></td>
          <td><div align="center" ><label for="q8"/>Contact</div></td>
          <td>
            <div align="center">
              <input type="tel" name="q8" id="q8" value="<?php echo $row[8]; ?>" />
            </div></td>
        </tr>
        <tr>
          <td height="31" colspan="4"><div align="center"><strong><code>Subject details:</code></strong></div></td>
        </tr>
        <tr>
          <td><div align="center"></div></td>
          <td><div align="center">Maximum Marks</div></td>
          <td><div align="center">Midterm Marks (20)</div></td>
          <td><div align="center">Obtained Marks (80)</div></td>
        </tr>
        <tr>
          <td><div align="center"><label for="q9"/>Subject 1</div></td>
          <td> 
            <div align="center">
              100
            </div></td>
          <td><div align="center">
            <input type="number" name="q9" id="q9" value="<?php echo $row[9]; ?>" />
          </div></td>
          <td><div align="center">
            <input type="number" name="q10" id="q10" value="<?php echo $row[10]; ?>" />
          </div></td>
        </tr>
        <tr>
          <td><div align="center"><label for="q11"/>Subject 2</div></td>
          <td> 
            <div align="center">
              100
            </div></td>
          <td><div align="center">
            <input type="number" name="q11" id="q11" value="<?php echo $row[11]; ?>"/>
          </div></td>
          <td><div align="center">
            <input type="number" name="q12" id="q12" value="<?php echo $row[12]; ?>" />
          </div></td>
        </tr>
        <tr>
          <td><div align="center"><label for="q13"/>Subject 3</div></td>
          <td> 
            <div align="center">
              100
            </div></td>
          <td><div align="center">
            <input type="number" name="q13" id="q13" value="<?php echo $row[13]; ?>"/>
          </div></td>
          <td><div align="center">
            <input type="number" name="q14" id="q14" value="<?php echo $row[14]; ?>"/>
          </div></td>
        </tr>
        <tr>
          <td><div align="center"><label for="q15"/>Subject 4</div></td>
          <td><div align="center">
            100
          </div></td>
          <td><div align="center">
            <input type="number" name="q15" id="q15" value="<?php echo $row[15]; ?>"/>
          </div></td>
          <td><div align="center">
            <input type="number" name="q16" id="q16" value="<?php echo $row[16]; ?>"/>
          </div></td>
        </tr>
        <tr>
          <td><div align="center"><label for="q17"/>Subject 5</div></td>
          <td><div align="center">
            100
          </div></td>
          <td><div align="center">
            <input type="number" name="q17" id="q17" value="<?php echo $row[17]; ?>"/>
          </div></td>
          <td><div align="center">
            <input type="number" name="q18" id="q18" value="<?php echo $row[18]; ?>"/>
          </div></td>
        </tr>
        <tr>
          <td><div align="center"><label for="q19"/>Subject 6</div></td>
          <td><div align="center">
            100
          </div></td>
          <td><div align="center">
            <input type="number" name="q19" id="q19" value="<?php echo $row[19]; ?>"/>
          </div></td>
          <td><div align="center">
            <input type="number" name="q20" id="q20" value="<?php echo $row[20]; ?>"/>
          </div></td>
        </tr>
        <tr></tr>
        <tr>
          <td><div align="center"></div></td>
          <td><div align="center">
            <input type="reset" name="b1" id="b1" value="Reset" />
          </div></td>
          <td> <input type="hidden"  name="h1" id="h1" value="<?php echo $row[0]; ?>" /></td>
          <td><div align="center">
            <input type="submit" name="b2" id="b2" value="Submit" />
          </div></td>
        </tr>
      </table>
      
      
    </div></td>
  </tr>
  </table>
  
  
</form>
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