<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\File\File;
use Symfony\Component\Yaml\Yaml;

class VisitorlogPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onPageInitialized' => ['onPageInitialized', 1],
        ];
    }
    public function onPageInitialized()
    {
        $this->save();
    }
    protected function save()
    {
	date_default_timezone_set("Asia/Tehran");
	$ip = "IP: "  . $_SERVER['REMOTE_ADDR'];
	$time= "Time: " . date("Y/m/d h:i:sa");
	$day=  date("Ymd");
	$address =  $_SERVER['REQUEST_URI'];
	$log = 'log/' . $day;
	if ( file_exists($log)){
		$old = file_get_contents($log);	
		$file = fopen($log, 'w+');
		fwrite($file,$ip ."\n" . $time . "\n" . $address . "\n\n" . $old);
		fclose($file);
	}
	else {	
		$file = fopen($log, 'w+');
		fwrite($file,$ip ."\n" . $time . "\n" . $address . "\n\n");
		fclose($file);
	}
    }

}
