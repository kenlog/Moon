<?php

namespace Kanboard\Plugin\Moon;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{

    public function initialize()
    {
        global $themeMoonConfig;

        if (file_exists('plugins/Moon/config.php')) 
        {
            require_once('plugins/Moon/config.php');
        }

        if (isset($themeMoonConfig['logo'])) 
        {
            $this->template->setTemplateOverride('header/title', 'Moon:layout/header/title');
            $this->template->setTemplateOverride('header', 'Moon:header');
        }
		
        $this->hook->on("template:layout:css", array("template" => "plugins/Moon/Assets/css/moon.css"));

        $this->hook->on("template:layout:css", array("template" => "plugins/Moon/Assets/css/prism.css"));

        $this->hook->on('template:layout:js', array('template' => 'plugins/Moon/Assets/js/clipboard.min.js'));

        $this->hook->on('template:layout:js', array('template' => 'plugins/Moon/Assets/js/prism.js'));
    }

    public function getPluginName()
    {
        return 'Moon';
    }

    public function getPluginDescription()
    {
        return t('This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.');
    }

    public function getPluginAuthor()
    {
        return 'Valentino Pesce';
    }

    public function getPluginVersion()
    {
        return '1.1.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.5';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/kenlog/Moon';
    }

}
