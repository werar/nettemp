<span class="belka">&nbsp Update<span class="okno">
<?php
$update=isset($_POST['update']) ? $_POST['update'] : '';
if ($update == "Update") { 
//putenv('PATH='. getenv('PATH') .':var/www/nettemp');

exec("/usr/bin/git reset --hard");
passthru("/usr/bin/git pull 2>&1");
$dir=getcwd();
exec('modules/reset/update_db');


//header("location: " . $_SERVER['REQUEST_URI']);
//	exit();	
	}
	?>
	<form action="index.php?id=tools&type=update" method="post">
	  <input type="hidden" name="update" value="Update">
     <input  type="submit" value="Update"  />
     </form>   

     </span></span>