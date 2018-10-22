[![GitHub license](https://img.shields.io/github/license/Naereen/StrapDown.js.svg)](https://github.com/kenlog/Moon/blob/master/LICENSE)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/kenlog/Moon/graphs/contributors)
[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?v=103)]()

# Moon plugin (modern theme for kanboard)

This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.

# Screenshot
![dashboard](https://user-images.githubusercontent.com/11728231/43528768-086359ca-95aa-11e8-99d6-e2315400a3ab.png)
![board](https://user-images.githubusercontent.com/11728231/43528782-135aa9c8-95aa-11e8-8819-c9f05c8dd397.png)
![task1](https://user-images.githubusercontent.com/11728231/43528785-14f3b54a-95aa-11e8-9b7f-8e8b75c5eb73.png)
![task2](https://user-images.githubusercontent.com/11728231/43528786-16500646-95aa-11e8-9896-3fc1a3704153.png)
![task3](https://user-images.githubusercontent.com/11728231/43528795-17b2c88e-95aa-11e8-8f76-d1f723b036ad.png)

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
### Supports loading the logo using the [Customizer](https://github.com/creecros/Customizer) plugin

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
