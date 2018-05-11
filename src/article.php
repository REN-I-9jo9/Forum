<?  ?>
<?if($_GET[no]==''){header("Location: index.php");exit;}?>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
　<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
　<title>No.&nbsp;<?echo $_GET[no];?>--<?echo "test";?></title>
  <link rel="stylesheet" type="text/css" href="maincss.css">
  <link rel="stylesheet" type="text/css" href="button.css">

  <script>
  function reverse()
	{
		if(document.getElementById("re").style.display=="none")
		{
			document.getElementById("re").style.display="block";
			document.getElementById("buttom").innerHTML="收起表單";
		}
		else if(document.getElementById("re").style.display=="block")
		{
			document.getElementById("re").style.display="none";
			document.getElementById("buttom").innerHTML="我要回覆";
		}
	}
  
  </script>
</head>

<body >
	
    <div id='whole'><div style="height:<? echo 30*105+750; ?>px;" id='articlecontainer' >
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
        <div id="buttom" onclick="reverse();">我要回覆</div>
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
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
		<div style="width:850; height:1; background-color:#666666; margin-left: 25px;"></div>
		<br>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
		<div style="width:840; height:190; background-color:#FFDDAA; margin-left:30px; border:1px solid #666666;">
		<div class='infocontainer'>
		<div class='subinfocontainer'>No.<? echo $_GET[no]; ?></div>
		<div class='subinfocontainer'><? echo "標題"; ?></div>
		<div class='subinfocontainer'><? echo "作者"; ?></div>
		<div class='subinfocontainer'><? echo "時間";?></div>
		<div class='subinfocontainer'>IP:<? echo "ip位置"; ?></div>
		</div>
		<? echo "文章內容"; ?>
		</div><!--                                                                                     首篇 -->
		<div style="width:840; height:190; margin-left: 30px;">
		
		<? for($no=1;$no<=30;$no++){?>
		<div style="width:500; height:100; margin-top:5; background-color:#FFDDAA; border:1px solid #666666;">
		<div class='infocontainer'>
		<div class='subinfocontainer'>No.<? echo $no; ?></div>
		<div class='subinfocontainer'><? echo "標題"; ?></div>
		<div class='subinfocontainer'><? echo "作者"; ?></div>
		<div class='subinfocontainer'><? echo "時間";?></div>
		<div class='subinfocontainer'>IP:<? echo "ip位置"; ?></div>
		</div>
		<? echo "文章內容"; ?>
		</div>
		<?}?>
		</div>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
    </div></div>
	<div id="articletopbar">
		<div class='subinfocontainer'>回到</div>
		<a href="index.php"><div class='subinfocontainer'>首頁</div></a>
		<a href="list.php?id=<? echo "";?>"><div class='subinfocontainer'>版面</div></a>
	</div>
</body>
</html>
