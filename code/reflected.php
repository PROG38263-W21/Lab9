<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>XSS Example - PHP</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="//bootswatch.com/4/flatly/bootstrap.min.css">

<style>
				h2 {
						color: rgba(0, 0, 0, .75);
				}

				pre {
						padding: 15px;
						-webkit-border-radius: 5px;
						-moz-border-radius: 5px;
						border-radius: 5px;
						background-color: #ECF0F1;
				}

				.container {
						width: 950px;
				}
</style>

<?php

//The content to be printed on the page.
$output = "";

//How did we get to this page?
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
				//GET Request
case 'GET':
				//First visit? (If so, there should be no GET parameters)
				if (empty($_GET)) {
								$output = "";
				} else {
								if (isset($_GET['username'])) {
												$output = $_GET['username']; // <-- THIS IS THE VULNERABILITY
								}
				}
				break;
				//POST Request
case 'POST':
				break;
				//Other HTTP Method (PUT, DELETE, CONNECT, OPTIONS, HEAD, TRACE, etc)
default:
				break;
}

?>
	</head>
	<body>
		<div class="container">
			<div class="pb-2 mt-2 mb-2">
				<h1>Cross-Site Scripting (XSS) PHP Example</h1>
		</div>
<div class="pb-2 mt-2 mb-2">
				<h2>Reflected XSS</h2>
			</div>
		<div class="pb-2 mt-2 mb-2">
				<form action='#' method='get'>
				<div class='form-group'>
						<label for='username'>Enter your username: </label>
						<input type='text' name='username' id='username'>
				</div>
						<input type='submit' value='submit'>
				</form>
</div>
				<div class="pb-2 mt-4 mb-2">
						<h2>Output</h2>
				</div>
				<pre>
<?php echo $output ?>
</pre>
		</div>
	</body>
</html>
