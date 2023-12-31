<?php
include("config.php");
$name=$_REQUEST['t1'];
$phone=$_REQUEST['t2'];
$email=$_REQUEST['t3'];
$subj=$_REQUEST['t4'];
$mesg=$_REQUEST['t5'];

if($_REQUEST['sub'])
 {
 if(mysql_query("insert into fdbk values('$name','$phone','$email','$subj','$mesg')"))
    {
	  echo "<font face='verdana' color='#CC99FF' size='+1'>Message sent successfully</font>";
     }
 
  }
?>
<html>
<head>
<script>
function name()
{
  var name=/^[a-zA-Z]{4,15}$/;
   if(document.f1.t1.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.t1.focus();
	 return false;
	 }
	} 
		 function phone()
{
  var phone=/^[0-9]{10,15}$/;
   if(document.f1.t2.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.t2.focus();
	 return false;
	 }
	} 
	function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.f1.t3.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.t3.focus();
	 return false;
	 }
	} 
		function subj()
{
 	var subj=/^[a-zA_Z0-9]{5,100}$/;
   if(document.f1.t4.value.search(subj)==-1)
    {
	 alert("enter correct subject");
	 document.f1.t4.focus();
	 return false;
	 }
	} 

	
	
function vali()
{

	var name=/^[a-zA-Z]{4,15}$/;
	var phone=/^[0-9]{10,15}$/;
	 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
	 var subj=/^[a-zA_Z0-9]{5,100}$/;
	 var mesg=/^[a-zA_Z0-9]{10,300}$/;
   if(document.f1.t1.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.t1.focus();
	 return false;
	 }
	 
 
  else if(document.f1.t2.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.t2.focus();
	 return false;
	 }
	 


   else if(document.f1.t3.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.t3.focus();
	 return false;
	 }
	 
	
   else if(document.f1.t4.value.search(subj)==-1)
    {
	 alert("enter correct subject");
	 document.f1.t4.focus();
	 return false;
	 }
	

 	
   
	 else
	 {
	 return true;
	 }
	}
</script>
</head>
<div><br/><center><h2><font face="verdana" size="+1" color="black">CONTACT US</font></h2></center></div>
<div style="width:100%;float:left" >
<div>
  <p><br/>
      <font face="verdana" size="+1" color="red">E-mail:</font><font face="verdana" size="+1" color="black"> kushwaha123@gmail.com
      </font><font face="Lucida Handwriting" size="+1" color="black"><br>
      </font>
	   <br>
    <font color="red" size="+1" face="verdana">Address:    <font color="yellow">Public Distribution System</font></font></p>
  <p> <font color="red" size="+1" face="verdana">Talk to us:</font><font color="yellow" size="+1" face="verdana"> 044 - 42189294 / 5</font><font size="+1"><br>
    <font color="red" face="verdana">Fax us at:</font></font> <font color="yellow" size="+1" face="verdana">044 - 26258843 </font></p>
  <p>&nbsp;</p>
</div>



<div>
<div style="width:25%;float:left"><br><br><center><fieldset style="width:25%;background-color:blue"><p><font size="+1" face="verdana">        PDS evolved as a major instrument of the Government’s economic policy for ensuring availability of foodgrains to the public at affordable prices as well as for enhancing the food security for the poor. It is an important constituent of the strategy for poverty eradication and is intended to serve as a safety net for the poor whose number is more than 330 million and are nutritionally at risk. PDS with a network of about 4.99 lakh Fair Price Shops (FPS) is perhaps the largest distribution network of its type in the world. you.</font></p>
</fieldset>
</center></div>&nbsp;&nbsp;

</div>
</body>
</html>