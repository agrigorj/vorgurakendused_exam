<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Kommentaarium</title>

</head>
<body>
<h2>Lisa uus kommentaar</h2>
<form action="reload.php" method="POST" enctype="multipart/form-data">
<table cellspacing="10">
   <tr>
     <td>Sinu nimi<span style="color:red"> *</span>  <br /><br /></td>
		<td><input type="text" name="name" placeholder="Sinu nimi"><br/><br /></td>
		
	</tr>
	<tr>
		<td> Sinu kommentaar<span style="color:red"> *</span><br /><br /></td>	
		<td><textarea cols="50" rows="5"  name="comment" placeholder="Sinu kommentaar"></textarea><br/><br /></td>
	</tr>	
	
  	 	</table>
		<input type="submit" value="Lisa kommentaar"/> 
</form>
<p>
<?php

	$myfile = fopen("komments.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
	
	
?>


</p>
<p> 
 <a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
</p>
</body>
</html>


