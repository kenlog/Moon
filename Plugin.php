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
		
		if (file_exists('plugins/Customizer'))
        {
            $this->template->setTemplateOverride('header/title', 'Moon:layout/header/customizerTitle');
            $this->template->setTemplateOverride('header', 'Moon:header');
            $this->template->setTemplateOverride('layout', 'Moon:layout');
        } 
			elseif (isset($themeMoonConfig['logo'])) 
        {
            $this->template->setTemplateOverride('header/title', 'Moon:layout/header/title');
            $this->template->setTemplateOverride('header', 'Moon:header');
            $this->template->setTemplateOverride('layout', 'Moon:layout');
        }
		
        $this->hook->on("template:layout:css", array("template" => "plugins/Moon/Assets/css/moon.css"));

        $this->hook->on("template:layout:css", array("template" => "plugins/Moon/Assets/css/prism.css"));

        $this->hook->on('template:layout:js', array('template' => 'plugins/Moon/Assets/js/clipboard.min.js'));

        $this->hook->on('template:layout:js', array('template' => 'plugins/Moon/Assets/js/prism.js'));
    
        $this->hook->on('template:layout:js', array('template' => 'plugins/Moon/Assets/js/moon.js'));
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
        return '1.3.7';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.48';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/kenlog/Moon';
    }

}
