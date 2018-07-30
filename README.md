# Moon plugin for Kanboard

This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.

# Screenshot
![board](https://user-images.githubusercontent.com/11728231/43127744-8049ba72-8f30-11e8-80ee-75130e4a7bf6.jpg)
![task1](https://user-images.githubusercontent.com/11728231/43127757-8cddcec2-8f30-11e8-9f8d-70c243f40dd8.jpg)
![task2](https://user-images.githubusercontent.com/11728231/43127767-906f55a6-8f30-11e8-9a60-ae589f734d32.jpg)
![task3](https://user-images.githubusercontent.com/11728231/43127794-9b097136-8f30-11e8-8139-3fc2495c96a7.jpg)
![chart](https://user-images.githubusercontent.com/11728231/43127800-9fc1e370-8f30-11e8-92d8-f4129b642349.jpg)

Author
------------
- Valentino Pesce
- License MIT

Requirements
------------
Kanboard >= v1.2.5  
Kanboard installed at a web server.
You can find the download at [kanboard.org](https://kanboard.org/)

Installation
------------
You have the choice between 3 methods:

1. Install the plugin from the Kanboard plugin manager in one click
2. Download the zip file and decompress everything under the directory `plugins/Moon`
3. Clone this repository into the folder `plugins/Moon`

Note: Plugin folder is case-sensitive.  
**Important: remove all unused themes**

Add options for the theme
------------
- Replace the KB logo with your own logo  
For more information have a look in the config.php

Syntax highlighting for Markdown code
------------
151 languages currently supported by Prism, with their corresponding alias, to use in place of xxxx
 
```diff
-```xxxx
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}
-```
+```php
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}
+```
```
Contributing or modifying the theme
------------
Clone the repository: 
```console 
git clone https://github.com/kenlog/Moon.git
```
Reporting Issues
------------
Please [create an issue](https://github.com/kenlog/Moon/issues) for any bugs you've found.
