<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
　<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
　<title>INDEX</title>
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
</head>

<body >
<div id='whole'>
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
    <div id='container'>
        這是首頁
		<br>
    </div></div>
	<div id="info">
	最新情報
	</div>
</body>
</html>
