<?php
session_start();
$username = $_GET['username'];
if (isset($username) && !empty($username)) {
$command = "du -hs /home/$username";   
$command = "echo Hello $username";   
}
?>
<html>
<head>

</head>
<body>
<?php
if (isset($username)) {            
echo "The command you ran was:<br /><pre>$command</pre><br />";
echo "The output was:<br /><pre>";
passthru($command);
echo "</pre>";
}
?>
<form name="check_size_form" method="get" action="cmdinject.php">
<p>Enter a username.</p>			
Username:<input type="text" name="username" size="40" /><br />
<input type="submit">
</form>
</body>
</html>
