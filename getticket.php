<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/main.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/config/classes/auth.php';

?>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/main.php';
  if(!isset($_COOKIE['_ROBLOSECURITY'])){
	header("Location: /");
  }
?>
<link rel="stylesheet" href="/CSS/2013css/Base/CSS/css1.css">
<link rel="stylesheet" href="/CSS/2013css/Base/CSS/css2.css">
<body><div id="Container">

                                                            
<div class="site-header">
    <div id="navigation-container">
        <a href="/" class="btn-logo" data-se="nav-logo"></a>
        <div id="navigation-menu">
          
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </div>
                
    </div>



        

        
            

        <div class="forceSpace">&nbsp;</div>
    <div id="ctl00_cphBannerAd_topAdPanel">
  
    
</div>


        <noscript><div class="SystemAlert"><div class="SystemAlertText">Please enable Javascript to use all the features on this site.</div></div></noscript>
        
        <div id="BodyWrapper">
            <div id="RepositionBody">
               <div id="Body" style="width:970px;">
                 
                 <div id="ErrorPage">
  <div class="divideTitleAndBackButtons" style="margin:20px auto; height:100px; width:100%; border-top:1px solid #fff;">&nbsp;</div>   
    
    <h1>Your ticket</h1>
	Do not share this to anyone, this is a temporary page
    <p><?php echo $_SESSION['user']['token']; ?></p>
    <pre><span id="ctl00_cphRoblox_errorMsgLbl"></span></pre>

    <div class="divideTitleAndBackButtons">&nbsp;</div>

       <div class="CenterNavigationButtonsForFloat">
        <a class="btn-small btn-neutral" title="Go to Previous Page Button" onclick="history.back();return false;" href="#">Go to Previous Page <span class="btn-text"> Go to Previous Page</span></a>
        <a class="btn-neutral btn-small" title="Return Home" href="../Home.php">Return Home <span class="btn-text">Return Home</span></a>
         
    </div>
  <div class="divideTitleAndBackButtons" style="margin:20px auto; height:100px; width:100%; border-top:1px solid #fff;">&nbsp;</div>
</div>
        <script type="text/javascript" async="" src="http://akatracking/.esearchvision.com/esi/esearchvisiontracking.js"></script><script src="https://www.google-analytics.com/urchin.js" type="text/javascript"></script>
        <script type="text/javascript">
            _uacct = "UA-486632-1";
            _udn = "roblox.com";
            _uccn = "rbx_campaign";
            _ucmd = "rbx_medium";
            _ucsr = "rbx_source";
            urchinTracker();
            __utmSetVar('Visitor/Spider');
        </script>
    

    


    <script type="text/javascript">
        // Deferred loading a la google to prevent blocking during download and execution
        (function () {
            var protocol = 'https:' == document.location.protocol ? "https://ssltracking/" : "http://akatracking/";
            var scriptFile = 'esearchvisiontracking.js';
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = protocol + ".esearchvision.com/esi/" + scriptFile;
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>


<script type="text/javascript">
$(function(){
    function trackReturns() {
      function dayDiff(d1, d2) {
        return Math.floor((d1-d2)/86400000);
      }

      var cookieName = 'RBXReturn';
      var cookieOptions = {expires:9001};
        var cookie = $.getJSONCookie(cookieName);

      if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
        $.setJSONCookie(cookieName, {ts:new Date().toDateString()}, cookieOptions)
        return;
      }

      var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
      if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
        RobloxEventManager.triggerEvent('rbx_evt_generic', { type:'OneDayReturn'});
        cookie.odr = 1;
      }
      if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
        RobloxEventManager.triggerEvent('rbx_evt_generic', {type: 'SevenDayReturn'});
        cookie.sdr = 1;
      }
  
      $.setJSONCookie(cookieName, cookie, cookieOptions);
    }

    
    KontagentListener.restUrl = window.location.protocol + "//" + "api.geo.kontagent.net/api/v1/";
    KontagentListener.APIKey = "920472a959b042f782bd267c5567b480";
    KontagentListener.StagingAPIKey = "c3ec679ac27b4f4fb393b5ccd94e7f67";
    try {
        KontagentListener.StagingEvents = eval("([{'rbx_evt_ftp':'Install%20Success%20Place'},{'rbx_evt_fmp':'Five%20Minute%20Play%20Place'}])");
    }
    catch(ex) {
        KontagentListener.StagingEvents = [];
    }
    KontagentListener.init();
    
    RobloxListener.restUrl = window.location.protocol + "//" + "roblox.com/Game/EventTracker.ashx";
    RobloxListener.init();
    
    GoogleListener.init();
    
    SearchVisionListener.init();
    
    RobloxEventManager.initialize(true);
    RobloxEventManager.triggerEvent('rbx_evt_pageview');
    trackReturns();
    
    RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
    RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
    RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
    RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
    RobloxEventManager.monitorCookieStore();
    setInterval(RobloxEventManager.monitorCookieStore, 5000);
    

});
</script>




</div></div></div></body>