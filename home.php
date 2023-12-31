<head>
<script>
function abc()
{
var arr=new Array("usepics/a.jpg","usepics/b.jpg","usepics/c.jpg","usepics/e.jpg");
var ind=eval(document.f1.h1.value);
document.img.src=arr[ind];
document.f1.h1.value=ind+1;
if(document.f1.h1.value==4)
{
document.f1.h1.value=0;
}
}
setInterval("abc()",3000);
</script>
</head>
<body>
<div id="RightPart">
  <div id="Page"><img src="usepics/12.jpg" alt="" width="669" height="210" name="img"/>
  <form name="f1">
  <input type="hidden" name="h1" value="0" />
  </form>
  <!-- <div><br/><center><h2><font face="Lucida Handwriting"  color="#00CCFF">Latest Fashion News</font></h2></center></div> -->
 <table border="0">
 <tr><td> 
<!-- <img src="usepics/news1.jpg" width="150" height="180"/> -->
<img src="usepics/hqdefault.jpg" width="150" height="180"/>
</td>
<td colspan="2">
<font face="verdana" size="+1" color="#CC99FF">
Basketful of Cheer!</font><br>
<font face="Comic Sans MS"><strong>        PDS evolved as a major instrument of the Government’s economic policy for ensuring availability of foodgrains to the public at affordable prices as well as for enhancing the food security for the poor. It is an important constituent of the strategy for poverty eradication and is intended to serve as a safety net for the poor whose number is more than 330 million and are nutritionally at risk. PDS with a network of about 4.99 lakh Fair Price Shops (FPS) is perhaps the largest distribution network of its type in the world. 
</strong></font></td>
</tr>
</table>
  </div>
  </div>
  </body>