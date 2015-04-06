<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<style>
	.cuadro
	{
		margin-left:auto;
		margin-right:auto;
		height:50px;
		line-height: 50px;
		width:50px;
		background-color:#03F;
		text-align:center;
		transition: height 0.5s, width 0.5s,line-height 0.5s, font-size 0.5s;
		float:left;
		margin:8px;
		font-size:14px;
		font-weight:bold;
		color:#FFF;
		border-radius:5px;
		
		
	}
	 
	.cuadro:hover
	{
		height:70px;
		line-height: 70px;
		width:70px;
		background-color:#03F;
		transition: height 0.5s, width 0.5s, line-height 0.5s,font-size 0.5s;
		font-size:16px;
		font-weight:bold;
	}
</style>

<body>

<div class="cuadro" onClick="window.location='www.google.com'">Test</div>
<div class="cuadro">Test</div>
<div class="cuadro">Test</div>
<div class="cuadro">Test</div>
</body>
</html>