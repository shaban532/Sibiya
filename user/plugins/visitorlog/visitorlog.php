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
	$referer ="\nSource: ";
	$user_agent= $_SERVER['HTTP_USER_AGENT'];
	if ( array_key_exists('HTTP_REFERER', $_SERVER )){
		$referer = $referer . $_SERVER['HTTP_REFERER'];
		/*
		$log ='log/source/' .  $_SERVER['HTTP_REFERER'] . '.log';
		$old = '';
		if ( file_exists($log)){
			$old = file_get_contents($log);
		}		
		$file = fopen($log, 'w+');
		fwrite($file,$ip ."\n" . $time . "\n" . $address . $referer . "\n" . $user_agent . "\n\n" . $old);
		fclose($file);
		*/
	}

	$log = 'log/' . $day . '.log';	
	$old = '';
	if ( file_exists($log)){
		$old = file_get_contents($log);
	}		
		$file = fopen($log, 'w+');
		fwrite($file,$ip ."\n" . $time . "\n" . $address . $referer . "\n" . $user_agent . "\n\n" . $old);
		fclose($file);
	
	$log ='log/ip/' . $_SERVER['REMOTE_ADDR'] . '.log';
	$old = '';
	if ( file_exists($log)){
		$old = file_get_contents($log);
	}		
		$file = fopen($log, 'w+');
		fwrite($file,$ip ."\n" . $time . "\n" . $address . $referer . "\n" . $user_agent . "\n\n" . $old);
		fclose($file);

    }

}
