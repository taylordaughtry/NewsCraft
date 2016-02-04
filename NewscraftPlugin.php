<?php
namespace Craft;

class NewscraftPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Newscraft');
    }

    function getVersion()
    {
        return '0.1.0';
    }

    function getDeveloper()
    {
        return 'Taylor Daughtry';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/taylordaughtry';
    }
}