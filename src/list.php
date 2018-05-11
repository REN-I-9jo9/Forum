<?if($_GET[id]==''){header("Location: index.php");exit;}?>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
　<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
　<title>lister</title>
  <link rel="stylesheet" type="text/css" href="maincss.css">
  <link rel="stylesheet" type="text/css" href="button.css">
  <script type="text/javascript" language="JavaScript">
  function ReverseDisplay(d)
  {
	var i;
	for(i=1;i<=12;i++)
	  {
		document.getElementById(i).style.display = "none";
	  }
	document.getElementById(d).style.display = "block";
  }

  </script>
  <script>
  function reverse()
	{
		if(document.getElementById("re").style.display=="none")
		{
			document.getElementById("re").style.display="block";
			document.getElementById("buttom").innerHTML="收起表單";
			document.getElementById("listcontainer").style.height="1500px";
		}
		else if(document.getElementById("re").style.display=="block")
		{
			document.getElementById("re").style.display="none";
			document.getElementById("buttom").innerHTML="我要回覆";
			document.getElementById("listcontainer").style.height="1100px";
		}
	}
  
  </script>
</head>

<body >
    <div id='left'>
	  <? 
	  for($i=1;$i<=12;$i++)
	  {                   ?>
	    <a href="javascript:ReverseDisplay('<? echo $i; ?>')">
	      <div id='button'><? echo $i; ?></div>
	    </a>
	    <div id="<? echo $i; ?>" style="float:left; height:300px; width:200px; background-color:#CCEEFF; display:none;">
	    <? 
		for($a=1;$a<=7;$a++)
		{
		  $link=$i*10+$a;  ?>
		  <a href="list.php?id=<? echo $link; ?>&page=<? echo 1; ?>" style="line-height:30px;"><? echo $link."<br>"; ?></a>
	    <?
		}?>
	    </div>
	  <?
	  }?>
	  
	  <br>
	 </div> 
	  
	  
	<a href="index.php"><div id="banner">網站logo</div></a>
    <div id='whole'><div id='listcontainer'>
        <div id="buttom" onclick="reverse();">我要發文</div>
		<div id="re" style="display:none;">
			<form name="input" action="" method="get">
			<table border="1" style="text-align:center; margin:auto; margin-top:20;">
			<tr>
			<td>用戶:</td>
			<td style="text-align:left;"><? echo "";?></td>
			</tr>
			<tr>
			<td>標題:</td>
			<td style="text-align:left;"><input type="text" name="title"></td>
			</tr>
			<tr>
			<td style="text-align:left;">內文:</td>
			<td><textarea rows="9" cols="60"></textarea></td>
			</tr>
			</table>
			</form>
			
		</div>
		<div style="width:850; height:1; background-color:#666666; margin-left: 25px;"></div>
		<div>
		<br><!-- -------------------------------------------------------------------====------------------------------------------------------------------ -->
		<div class="pageselecter_" style="top: 225px;">
		<?
		for($page=1;$page<=5;$page++){?>
		<a href="list.php?id=<? echo $_GET[id]; ?>&page=<? echo $page; ?>">
		<div class="pageselecter"><? echo $page; ?></div>
		</a><?}?>
		</div>
		<br><br><!-- ------------------------------------------------------------------------------------------------------------------------------------- -->
		
		
		<table width="800" height="900" border="0" style="margin-left: 50px;">
        <tr bgcolor="#FFA488">
        <td width="25">0</td><td width="80">No.</td><td width="80">作者</td><td>標題</td><td width="80">發文日期</td><td width="80">最後更新</td>
		</tr>
		<?for($article=1;$article<=20;$article++){?>
		<? $no=$_GET[id]*1000+($_GET[page]-1)*20+$article; ?>
		<tr  class="tr">
		<td width="25"><? echo $article; ?></td><!-- 0 -->
		<td width="80">No.<? echo $no; ?></td><!-- No. -->
		<? $user="test";?>
		<td width="80">&nbsp;</td><!-- 作者 -->
		<td class="td" onclick="location.href='article.php?no=<? echo $no; ?>'"><? echo $article; ?></td><!-- 標題 -->
		<td width="80">&nbsp;</td><!-- 發文日期 -->
		<td width="80">&nbsp;</td><!-- 最後更新 -->
        </tr>
		<?}?>
        </table>
        
		
		<br><!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->
		<div class="pageselecter_" style="bottom: 25px;">
		<?
		for($page=1;$page<=5;$page++){?>
		<a href="list.php?id=<? echo $_GET[id]; ?>&page=<? echo $page; ?>">
		<div class="pageselecter"><? echo $page; ?></div>
		</a><?}?>
		</div>
		
		<!-- ----------------------------------------------------========--------------------------------------------------------------------------------- -->
        </div>
    </div></div>
	
	<div id="info">
	<div>歡迎!&nbsp; <a style="background-color:#000;"><? echo "&nbsp;"; ?></a></div>
	你在&nbsp;<? echo $_GET[id];?>&nbsp;版&nbsp;&nbsp;&nbsp;第&nbsp;<?echo $_GET[page];?>&nbsp;頁
	</div>
</body>
</html>
