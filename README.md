# Moon plugin for Kanboard

This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.

# Screenshot
![board](https://user-images.githubusercontent.com/11728231/43379466-e347c34e-93cc-11e8-90c7-bb13a5738834.png)
![task1](https://user-images.githubusercontent.com/11728231/43379467-e4b4d622-93cc-11e8-81e4-90f63b4fdba8.png)
![task2](https://user-images.githubusercontent.com/11728231/43379470-e6880ec4-93cc-11e8-850c-37ae838a5ba7.png)

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
