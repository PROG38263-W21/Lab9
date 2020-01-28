<!DOCTYPE html>
<html>
<head>
<meta name="description" content="A sweet xss example">
<meta name="author" content="PROG36263 Class">
<title>Stored XSS Example</title>
<?php
	if (isset($_GET['post_reply'])) {
		$post_reply = $_GET['post_reply'];
		$redis = new Redis();
		$redis->connect('redis', 6379);
		$redis->set('post_reply', "$post_reply");
		$output = "You replied to a message board post. Go to <a href='read.php'>read.php</a> to see it!";
	}
?>
</head>
<body>
<h1>Welcome To The Best Message Board Ever!!11</h1>
<form action="write.php" method="get">
Post Reply: <textarea name='post_reply'></textarea>
<input type="submit">
<?php echo $output ?>
</form>
</body>
</html>
