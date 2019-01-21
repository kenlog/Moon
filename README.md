[![Latest release](https://img.shields.io/github/release/kenlog/Moon.svg)](https://github.com/kenlog/Moon/releases)
[![GitHub license](https://img.shields.io/github/license/Naereen/StrapDown.js.svg)](https://github.com/kenlog/Moon/blob/master/LICENSE)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/kenlog/Moon/graphs/contributors)
[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?v=103)]()
[![Downloads](https://img.shields.io/github/downloads/kenlog/Moon/total.svg)](https://github.com/kenlog/Moon/releases)

# Moon plugin (modern theme for kanboard)

This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.

# Screenshot
![dashboard](https://user-images.githubusercontent.com/11728231/47354997-877d4980-d6c0-11e8-9cd5-205d28e04b42.png)
![board](https://user-images.githubusercontent.com/11728231/47355000-89dfa380-d6c0-11e8-80df-41387c603ceb.png)
![task1](https://user-images.githubusercontent.com/11728231/47355004-8ba96700-d6c0-11e8-8f20-9a4f1e3c3038.png)
![task2](https://user-images.githubusercontent.com/11728231/47355009-8cda9400-d6c0-11e8-8b4b-bf1e222c8c89.png)
![task3](https://user-images.githubusercontent.com/11728231/47355014-8ea45780-d6c0-11e8-8293-061ba548783b.png)

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
### Supports the [Customizer](https://github.com/creecros/Customizer) plugin

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

### :star: If you like it, do not forget to give a star on GitHub!

:construction_worker: Any contribution will be highly appreciated
------------
Clone the repository: 
```console 
git clone https://github.com/kenlog/Moon.git
```
:bug: Reporting Issues
------------
Please [create an issue](https://github.com/kenlog/Moon/issues) for any bugs you've found.
