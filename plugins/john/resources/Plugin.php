<?php namespace John\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'John',
            'description' => 'Provides company resources',
            'author' => 'Payel das',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            '\John\Resources\Components\Links' => 'resourcesLinks'
        ];
    }
}