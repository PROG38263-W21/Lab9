<!DOCTYPE html>
<html>
<head>
<meta name="description" content="A sweet xss example">
<meta name="author" content="PROG36263 Class">
<title>Stored XSS Example</title>
<?php
	$redis = new Redis();
	$redis->connect('redis', 6379);
	$output = $redis->get('post_reply');
?>
</head>
<body>
<h1>Welcome To The Best Message Board Ever!!11</h1>
<?php echo $output; ?>
</body>
</html>
