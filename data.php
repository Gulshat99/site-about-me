<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title> Персональная страничка студента </title>
  <meta charset="utf-8">
  <meta name="author" content="Фаизова" />
  <meta name="keywords" content="Лабораторный практикум" />
  <meta name="description" content="Лабораторный практикум по дисциплине ССОИ в ОТС" />
</head>
<style>
   .btn {
    display: inline-block;
    background: #7b1fa2;
    color: #fff;
    padding: 1rem 1.5rem;
    text-decoration: none;
    border-radius: 3px;
}
body {
background-position: top right;
 background-image: url(img/ss.jpg);
background-size: 13%;
background-repeat: no-repeat;
}
</style>
<body>
<?php
include("data.inc");
echo('<body align=center>');
echo('<center><font size="6" face="Corbel" color="#311532" ><i>Самолеты Cessna</i></font></center>');
echo('<p>'.'</p>');
echo('<table border="1" align = center>');
foreach($class as $s)
{
	echo('<th align=center>'.'<font size="4" face="Corbel" color="#311532">'.$s.'</font>');
};
foreach($cessna as $cs)
{
echo('<tr>'.'<td width=180>'.'<font size="4" color="#311532" >'.$cs['model'].'</font>'.'</td>');
echo('<td width=150>'.'<font size="3" color="#311532" >'.$cs['crew'].'</font>'.'</td>');
echo('<td width=100>'.'<font size="3" color="#311532" >'.$cs['passenger'].'</font>'.'</td>');
echo('<td width=130>'.'<font size="3" color="#311532" >'.$cs['length'].'</font>'.'</td>');
echo('<td width=150>'.'<font size="3" color="#311532" >'.$cs['weight'].'</font>'.'</td>');
echo('<td width=150>'.'<font size="3" color="#311532" >'.$cs['height'].'</font>'.'</td>');
echo('</tr>');
}
echo('</table>');
echo('<p>'.'</p>');
echo('<table align=center border=0>');
echo('<tr>'.'<td colspan=3>'.'<center>'.
			'<a href="sort.php"class="btn"><font size="4"  face="Corbel">Сортировка</a>
      <a href="sample.php"class="btn"><font size="4"  face="Corbel">Выборка</a>
      <a href="sortsample.php"class="btn"><font size="4"  face="Corbel">Сортировка по выборке</a>
      <br><br>
      <a href="index.htm"class="btn"><font size="4"  face="Corbel">Главная</a>
      <a href="reports.htm"class="btn"><font size="4"  face="Corbel">Отчеты по ССОИ в ОТС</a>
      <a href="reports1.htm"class="btn"><font size="4"  face="Corbel">Отчеты по ОКО ОТС</a>
				<br><br>
		</center>
	</td>
</tr>');
?>
<tr valign=center>
	<td colspan=3>
		<center>
			&copy; Иванова Виктория Сергеевна, 2021.
		</center>
	</td>
</tr>
</table>
</body>
</html>
