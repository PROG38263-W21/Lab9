# Command Injection Example - PHP

## Building the example

* Clone this git repository
* Navigate to Lab9 and run <code>docker-compose build && docker-compose up</code> Note this may take a couple minutes the first time. It will be faster on subsequent executions since docker will cache the packages that the php container uses.
* Open a browser and navigate to cmdinject.php on your virtual server. 

## Exploit strings to try

* Type your  name in the input and click the button, you should see the greeting and the actual command executed on your Shell.

* Now try injecting malicious command and see if you can run them on Shell through the user input.

* Some example commands: 
* <Your name>; cat /etc/passwd
* <Your name>; echo "Command injected" > newfile
