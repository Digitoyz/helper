<?php
/**
 * Created by PhpStorm.
 * User: saika
 * Date: 11/01/2016
 * Time: 15:01
 */

namespace ComposerScript;

use Composer\Script\Event;

class Installer
{
    public static function postUpdate(Event $event)
    {
        $composer = $event->getComposer();
        // do stuff
    }

    public static function postPackageUpdate(Event $event)
    {
//        $packageName = $event->getOperation()
//            ->getPackage()
//            ->getName();
//        echo "$packageName\n";

        $vendorDir = $event->getComposer()->getConfig()->get('vendor-dir');
        mkdir($vendorDir . '/config');
        copy('default.php', $vendorDir . '/config/helperConfig.php');
        // do stuff
    }

    public static function warmCache(Event $event)
    {
        // make cache toasty
    }
}