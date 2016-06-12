
<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){	
 if($_POST["name"] == '' ||  $_POST["comment"] == ''){
				$errors =array();
				?>
				<script>
   				alert("Sisesta nimi ja kommentaar!");
				</script>
				<?php
				}else{
$myfile = fopen("komments.txt", "a+") or die("Unable to open file!");
$name = htmlspecialchars($_POST["name"].": ");
fwrite($myfile, $name);
$comment= htmlspecialchars($_POST["comment"]."\n");
fwrite($myfile, $comment);
fclose($myfile);
}
}
?> 


<script>

  document.location = "kommentvorm.php";

</script>