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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0034)http://www.roblox.com/home?nl=true -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- MachineID: WEB1 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true">
    
    <meta http-equiv="Content-Language" content="en-us">
    <meta name="author" content="ROBLOX Corporation">
    <meta name="description" content="User-generated MMO gaming site for kids, teens, and adults. Players architect their own worlds. Builders create free online games that simulate the real world. Create and play amazing 3D games. An online gaming cloud and distributed physics engine.">
    <meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine">
    
    

    <title>ROBLOX.com</title>
<link rel="stylesheet" href="/CSS/2013css/Base/CSS/css1.css">
<link rel="stylesheet" href="/CSS/2013css/Base/CSS/css2.css">
<script type="text/javascript" src="js/tabs.js" charset="utf-8"></script>
    <link rel="icon" type="image/vnd.microsoft.icon" href="http://www.roblox.com/favicon.ico">
    
    
<link rel="stylesheet" href="https://www.roblox.com/CSS/Base/CSS/FetchCSS?path=main___9f842fd9a1a7173bd52d5de5563566b8_m.css">

<script type="text/javascript" src="http://js.rbxcdn.com/d017022a31a650699f61d8c412593da7.js"></script>

    
<link rel="stylesheet" href="https://www.roblox.com/CSS/Base/CSS/FetchCSS?path=page___bd540dc4bbc3cb88bfd00f03ec91d022_m.css">


<script type="text/javascript" src="js.roblox.com/37c53694fb68cc0859da211e34b7ecbb.js"></script>
<script type="text/javascript" src="js.roblox.com/c92c15f1a12c1b9be9d9f18a9a4f2c43.js"></script>
<script type="text/javascript" src="../js/iFrameLogin.js"></script>
<script type="text/javascript" src="http://js.rbxcdn.com/00f237f7555f4d81bb773c270aade51e.js.gzip"></script>
    
<script type="text/javascript" src="https://web.archive.org/web/20131228010856js_/http://js.rbxcdn.com/0292041aea19bd7b049a08e28cf88ca7.js"></script>
	<script async="" type="text/javascript" src="./ROBLOX.com_files/gpt.js"></script><script type="text/javascript" src="https://js.rbxcdn.com/9db05af88b1dc737664247f24a0120e0.js.gzip"></script><link href="./ROBLOX.com_files/BestFriends.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="https://js.rbxcdn.com/e96b59fba745a37cdd847ff394b79aac.js.gzip"></script><script type="text/javascript" src="https://js.rbxcdn.com/9f4404fc11d8b8958d09f6316719cef9.js.gzip"></script><script type="text/javascript" async="" src="./ROBLOX.com_files/ga.js"></script><script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-11419793-1']);
		_gaq.push(['_setCampSourceKey', 'rbx_source']);
		_gaq.push(['_setCampMediumKey', 'rbx_medium']);
		_gaq.push(['_setCampContentKey', 'rbx_campaign']);
		_gaq.push(['_setDomainName', 'roblox.com']);

		_gaq.push(['b._setAccount', 'UA-486632-1']);
		_gaq.push(['b._setCampSourceKey', 'rbx_source']);
		_gaq.push(['b._setCampMediumKey', 'rbx_medium']);
		_gaq.push(['b._setCampContentKey', 'rbx_campaign']);
		_gaq.push(['b._setDomainName', 'roblox.com']);
		_gaq.push(['c._setAccount', 'UA-26810151-2']);
		_gaq.push(['c._setDomainName', 'roblox.com']);

		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();

	</script>
    <script type="text/javascript" src="./ROBLOX.com_files/jquery-1.7.2.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='https://www.roblox.com/js/jquery/jquery-1.7.2.min.js'><\/script>")</script>
<script type="text/javascript" src="./ROBLOX.com_files/MicrosoftAjax.js"></script>
<script type="text/javascript">window.Sys || document.write("<script type='text/javascript' src='https://www.roblox.com/js/Microsoft/MicrosoftAjax.js'><\/script>")</script>

    
<script type="text/javascript" src="https://js.rbxcdn.com/c57cc32d0db0d462c64bb8ace02fdf13.js.gzip"></script>

    <script type="text/javascript">Roblox.config.externalResources = ['https://www.roblox.com/js/jquery/jquery-1.7.2.min.js','/js/json2.min.js'];Roblox.config.paths['jQuery'] = 'http://js.rbxcdn.com/e96b59fba745a37cdd847ff394b79aac.js.gzip';Roblox.config.paths['Pagelets.BestFriends'] = 'http://js.rbxcdn.com/9db05af88b1dc737664247f24a0120e0.js.gzip';Roblox.config.paths['Pages.Catalog'] = 'http://js.rbxcdn.com/10a6b22225379eaa8d41dd1c0ffb6dc3.js.gzip';Roblox.config.paths['Pages.Messages'] = 'http://js.rbxcdn.com/f266eeedec9548a94baf73ccb09e4a5d.js.gzip';Roblox.config.paths['Resources.Messages'] = 'http://js.rbxcdn.com/6307f9bd9c09fa9d88c76291f3b68fda.js.gzip';Roblox.config.paths['Widgets.AvatarImage'] = 'http://js.rbxcdn.com/9f4404fc11d8b8958d09f6316719cef9.js.gzip';Roblox.config.paths['Widgets.DropdownMenu'] = 'http://js.rbxcdn.com/88a3e1afed9aa3b21670a59ddb7775c3.js.gzip';Roblox.config.paths['Widgets.GroupImage'] = 'http://js.rbxcdn.com/c98baf27bc7feda3206342566db92696.js.gzip';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'http://js.rbxcdn.com/3f95857727df4739b29a8385501752fa.js.gzip';Roblox.config.paths['Widgets.ItemImage'] = 'http://js.rbxcdn.com/152201bc9a4e721fe8c326c78b35e364.js.gzip';Roblox.config.paths['Widgets.PlaceImage'] = 'http://js.rbxcdn.com/4426a131abb3e214ed89338154f6e78a.js.gzip';Roblox.config.paths['Widgets.Suggestions'] = 'http://js.rbxcdn.com/63f96a694a0eedd389b573a5859b8974.js.gzip';Roblox.config.paths['Widgets.SurveyModal'] = 'http://js.rbxcdn.com/56ad7af86ee4f8bc82af94269ed50148.js.gzip';</script>
    
<script type="text/javascript" src="https://js.rbxcdn.com/f6ebdcdab40c43bb18d29009ce0880be.js.gzip"></script>

    
<script type="text/javascript" src="https://js.rbxcdn.com/32159205207304027c7e0aa4dd329d32.js.gzip"></script>

    <script type="text/javascript">   
        googletag.cmd.push(function() {
            Roblox = Roblox || {};
            Roblox.AdsHelper = Roblox.AdsHelper || {};
            Roblox.AdsHelper.slots = [];
	        Roblox.AdsHelper.slots = Roblox.AdsHelper.slots || []; Roblox.AdsHelper.slots.push({slot:googletag.defineSlot("/1015347/Roblox_MyHome_Right_160x600", [160, 600], "3439303639313930").addService(googletag.pubads()), id: "3439303639313930"});
 
            for (var key in Roblox.AdsHelper.slots) {
                var slot = Roblox.AdsHelper.slots[key].slot;
                var id = Roblox.AdsHelper.slots[key].id;
                if (slot.renderEnded != "undefined") {
                    (function(slot, id)
                    {
                        slot.renderEndedOld = slot.renderEnded;
                        slot.renderEnded = function() {
                            slot.renderEndedOld();
                            if ($('#' + id + '.gutter').css('display') == "none") {
                                $(document).trigger("GuttersHidden");
                            }
                        };    
                    }(slot, id));
                }
            }

        googletag.pubads().setTargeting("Age", ["13", "13to14" ]);	
            googletag.pubads().setTargeting("Env",  "Production");
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
	    });
    </script>  
<script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({'internalEventListenerPixelEnabled': true});
    });
</script>        <script type="text/javascript">
            Roblox.XsrfToken.setToken('y5zY3quEFHjD');
        </script>
    <script type="text/javascript">
        Roblox.FixedUI.gutterAdsEnabled = false;
    </script>   
    
<script async="" type="text/javascript" src="./ROBLOX.com_files/pubads_impl_30.js"></script><script type="text/javascript" src="./ROBLOX.com_files/osd.js"></script></head>
<body>
    
<div id="fb-root"></div>
<div id="MasterContainer">
           


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
	        $.setJSONCookie(cookieName, { ts: new Date().toDateString() }, cookieOptions);
		    return;
	    }

	    var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
	    if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
		    RobloxEventManager.triggerEvent('rbx_evt_odr', {});
		    cookie.odr = 1;
	    }
	    if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
		    RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
		    cookie.sdr = 1;
	    }
	
	    $.setJSONCookie(cookieName, cookie, cookieOptions);
    }

    
        RobloxListener.restUrl = window.location.protocol + "//" + "roblox.com/Game/EventTracker.ashx";
        RobloxListener.init();
    
    
        GoogleListener.init();
    
    
    
    
        RobloxEventManager.initialize(true);
        RobloxEventManager.triggerEvent('rbx_evt_pageview');
        trackReturns();
    
    
    
        RobloxEventManager._idleInterval = 450000;
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
        RobloxEventManager.startMonitor();
    

});

</script>

    <div>

                                                            
<?php
  include('navbar2013.php');
  ?>

    <script type="text/javascript">
        ;$(function () {
            $('#over13icon').tipsy({ gravity: 'n' });

            $("#lsLoginStatus").click(
                    function () {
                        var form = $(this).closest('form');
                        if (form.length == 0) {
                            form = $("<form></form>").appendTo("body");
                        }
                        form.attr('action', '/authentication/logout');
                        form.attr('method', 'post');
                        form.submit();
                    }
                );
        });

    </script> 
</div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $('.more-list-item').bind('showDropDown', function () {
            var maxWidth = $('#navigation-menu .dropdownnavcontainer').width();
            $('a.dropdownoption span').each(function (index, elem) {
                elem = $(elem);
                if (elem.outerWidth() > maxWidth) {
                    maxWidth = elem.outerWidth();
                }
            });
            maxWidth = maxWidth + 5;
            $('#navigation-menu .dropdownoption').each(function (index, elem) {
                elem = $(elem);
                if (elem.width() < maxWidth) {
                    elem.width(maxWidth);
                }
            });
        });
    });
    
    
</script>

<div id="BodyWrapper">
            <div id="RepositionBody">
                <div id="Body" style="width:970px">
<div id="HomeContainer" class="home-container" data-facebook-share="/facebook/share-character" data-update-status-url="/home/updatestatus" data-get-feed-url="https://www.roblox.com/feeds/getuserfeed">
	<div>
		<h1>Hello, <span class="notranslate"><?php
		echo $_SESSION['user']['username'];
		?></span>!</h1>
	</div>
	<div class="left-column">
	    <div class="left-column-boxes user-avatar-container">
<div id="UserAvatar" class="user-avatar-holder">
    <span class="user-avatar"><img alt="<?php echo $_SESSION['user']['username']; ?>" class="user-avatar-image" src="./ROBLOX.com_files/07487bc51b2c69df705e34a6e238f08c"></span>
</div>
<div id="UserInfo" class="text">
	<div>
		<b><a class="text-link" href="http://www.roblox.com/my/messages?111">0 System Notification(s)</a></b>
	</div>
</div>	    </div>
		<div class="left-column-boxes">
			<h3>Roblox News</h3>
			<div class="notranslate text news-container">
				<div id="RobloxNews">
    <div class="roblox-news-feed">
                <div class="roblox-news-feed-item">
                    <a href="http://blog.roblox.com/2013/11/racetothebottom-races-to-the-top-with-space-knights/?utm_source=rss&utm_medium=rss&utm_campaign=racetothebottom-races-to-the-top-with-space-knights" ref="news-article" class="roblox-interstitial">RaceToTheBottom Races to the Top with Space Knights</a>
                </div>
                <div class="roblox-news-feed-item">
                    <a href="http://blog.roblox.com/2013/11/developers-share-their-devex-success-stories/?utm_source=rss&utm_medium=rss&utm_campaign=developers-share-their-devex-success-stories" ref="news-article" class="roblox-interstitial">Developers Share Their DevEx Success Stories</a>
                </div>
    </div>
    <a href="http://blog.roblox.com/" class="SeeMore roblox-interstitial">See More</a>
    <img alt="See more! " src="./ROBLOX.com_files/efe86a4cae90d4c37a5d73480dea4cb1.png" class="see-more-img">
</div>
			</div>
		</div>
	    <div class="left-column-boxes">
	        <div>
	            <h3 class="best-friends-title">My Best Friends</h3>
	            <div class="edit-friends-button">
	                <a href="http://www.roblox.com/my/EditFriends.aspx" class="btn-small btn-neutral">Edit</a>
	            </div>
	            <div class="clear"></div>
	        </div>
	        <div id="bestFriendsContainer" class="best-friends-container">
<div class="best-friends">
    <div class="user">
        <div class="roblox-avatar-image" data-user-id="20658082" data-image-size="tiny"><div style="position: relative;"><a href="http://www.roblox.com/user.aspx?id=20658082"><img title="acraw" alt="acraw" border="0" src="./ROBLOX.com_files/045d304a6d5dc78e3bcfa6f64b2c780d"></a></div></div>
        <div class="info">
                <img src="./ROBLOX.com_files/3a3aa21b169be06d20de7586e56e3739.png" title="Offline">
            <a class="name" href="http://www.roblox.com/User.aspx?ID=20658082">acraw</a>
                <div class="status">"minecraft is better"</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="user">
        <div class="roblox-avatar-image" data-user-id="6570505" data-image-size="tiny"><div style="position: relative;"><a href="http://www.roblox.com/user.aspx?id=6570505"><img title="bibman4000" alt="bibman4000" border="0" src="./ROBLOX.com_files/f9d6953aebf90492ba912e4e62a860ed"></a></div></div>
        <div class="info">
                <img src="./ROBLOX.com_files/3a3aa21b169be06d20de7586e56e3739.png" title="Offline">
            <a class="name" href="http://www.roblox.com/User.aspx?ID=6570505">bibman4000</a>
                <div class="status">"no more training???"</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="user">
        <div class="roblox-avatar-image" data-user-id="1394055" data-image-size="tiny"><div style="position: relative;"><a href="http://www.roblox.com/user.aspx?id=1394055"><img title="bigboy100" alt="bigboy100" border="0" src="./ROBLOX.com_files/ff153e9e7c36ff977858edc942083051"></a></div></div>
        <div class="info">
                <img src="./ROBLOX.com_files/3a3aa21b169be06d20de7586e56e3739.png" title="Offline">
            <a class="name" href="http://www.roblox.com/User.aspx?ID=1394055">bigboy100</a>
                <div class="status">"bc gone.:["</div>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
	        <div style="clear:both;"></div>
	    </div>
            <div class="left-column-boxes text">
                	
	<div id="fbNotLoggedIn">
			<img border="0" alt="Facebook Connect" src="./ROBLOX.com_files/4ec0c6c40a454f2f6537946d00f09b56.png">
			<div style="text-align: left; margin: 5px">
				Link your ROBLOX account with your Facebook account to let your Facebook friends see what you're doing on ROBLOX!<br>
			</div>
		<a class="facebook-login" href="http://www.roblox.com/facebook/authorize?ReturnTo=%2Fmy%2Fhome.aspx">
			<span class="left"></span>
			<span class="middle">Connect with Facebook<span>Connect with Facebook</span></span>
			<span class="right"></span>
		</a>
			<div class="facepile">
				<iframe src="./ROBLOX.com_files/facepile.htm" scrolling="yes" frameborder="0" style="border: none; overflow: hidden; width: 210px;"></iframe>
				<p style="color: Gray; font-size: smaller">Only your Facebook friends can see this.</p>
			</div>
	</div>

            </div>
	</div>

	<div class="middle-column">
		<div id="statusUpdateBox" class="middle-column-box status-update">
		    <div>
                    <input name="txtStatusMessage" type="text" id="txtStatusMessage" maxlength="254" class="translate text-box text-box-large status-textbox" placeholder="What are you up to?" value="">
<span class="btn-control btn-control-large share-button" id="shareButton">Share</span>		        
		        <img id="loadingImage" class="status-update-image" style="display: none" alt="Sharing..." src="./ROBLOX.com_files/ec4e85b0c4396cf753a06fade0a8d8af.gif">
		        <div class="clear"></div>
		    </div>
		</div>

        <div id="FeedificationsContainer" class="">

</div>

		<div id="FeedContainer" class="middle-column-box feed-container">
			<h2>My Feed</h2>
			<div id="FeedPanel">
				<div id="AjaxFeed" class="text"><div class="text">
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
<a href="http://www.roblox.com/TEAM-EPIK-item?id=59605209" class="feed-asset"><img class="feed-asset-image" src="./ROBLOX.com_files/d8d05001369d0bceef38a07ebd2dda1c"></a>			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/My/Groups.aspx?gid=358594">TEAM EPIK</a><br><div class="Feedtext">"If BATBOY222 makes me admin, I will make this group really active and make ads!"</div> (posted by <a href="http://www.roblox.com/User.aspx?ID=20471214">DaVe87545</a>)</span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">10/26/2013 at 3:35 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=66872670&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
<a href="http://www.roblox.com/Roblox-Trade-System-Group-item?id=119718787" class="feed-asset"><img class="feed-asset-image" src="./ROBLOX.com_files/7be0fc39343608e796de90d97186f72c"></a>			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/My/Groups.aspx?gid=653079">Roblox Trade System Group</a><br><div class="Feedtext">"Downgrading my items, send me trades!"</div> (posted by <a href="http://www.roblox.com/User.aspx?ID=23641053">SimpleStar</a>)</span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">10/17/2013 at 4:34 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=66390401&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
<a href="http://www.roblox.com/Roblox-Trade-System-Group-item?id=119718787" class="feed-asset"><img class="feed-asset-image" src="./ROBLOX.com_files/7be0fc39343608e796de90d97186f72c"></a>			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/My/Groups.aspx?gid=653079">Roblox Trade System Group</a><br><div class="Feedtext">"Send me (SimpleStar) Trades on my items!"</div> (posted by <a href="http://www.roblox.com/User.aspx?ID=23641053">SimpleStar</a>)</span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">9/29/2013 at 2:54 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=65488391&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
<a href="http://www.roblox.com/Roblox-Trade-System-Group-item?id=119718787" class="feed-asset"><img class="feed-asset-image" src="./ROBLOX.com_files/7be0fc39343608e796de90d97186f72c"></a>			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/My/Groups.aspx?gid=653079">Roblox Trade System Group</a><br><div class="Feedtext">"What's the best trade you've gotten all week?"</div> (posted by <a href="http://www.roblox.com/User.aspx?ID=23641053">SimpleStar</a>)</span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">9/28/2013 at 4:52 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=65424635&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
                    <a href="http://www.roblox.com/user.aspx?id=20471214">
					    <span class="feed-user-avatar"><img alt="DaVe87545" class="feed-user-avatar-image" src="./ROBLOX.com_files/0184aa2e2c447c5b6211374e1ba2a90a"></span>
                    </a>
			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/User.aspx?ID=20471214">DaVe87545</a> created a new place: <a href="http://www.roblox.com/item.aspx?id=129931823">Capture The Flag(READ DESCRIPTION)</a></span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">9/16/2013 at 10:57 PM</span> 
			</div>
			<div class="feed-report-abuse" style="display:none">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=0&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
<a href="http://www.roblox.com/Bricksmiths-item?id=126212757" class="feed-asset"><img class="feed-asset-image" src="./ROBLOX.com_files/c4dab426a4c2108f1d9f88e3204889e6"></a>			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/My/Groups.aspx?gid=931225">[Bricksmiths]</a><br><div class="Feedtext">"Using advertisements is the only way that we can spread the word about this group. The advertisement we currently have up, is seen quite often; but doesn't attract the eye. I will pay for a professional advertisement for this group. Thank you."</div> (posted by <a href="http://www.roblox.com/User.aspx?ID=8187127">dudeofalldudes1234</a>)</span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">9/14/2013 at 3:20 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=64689298&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
<a href="http://www.roblox.com/Roblox-Trade-System-Group-item?id=119718787" class="feed-asset"><img class="feed-asset-image" src="./ROBLOX.com_files/7be0fc39343608e796de90d97186f72c"></a>			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/My/Groups.aspx?gid=653079">Roblox Trade System Group</a><br><div class="Feedtext">"What's your favorite limited? Post on the wall!"</div> (posted by <a href="http://www.roblox.com/User.aspx?ID=23641053">SimpleStar</a>)</span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">9/10/2013 at 5:54 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=64491476&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
                    <a href="http://www.roblox.com/user.aspx?id=6570505">
					    <span class="feed-user-avatar"><img alt="bibman4000" class="feed-user-avatar-image" src="./ROBLOX.com_files/bed87dced341d944b093b1f9c9b148d7"></span>
                    </a>
			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/User.aspx?ID=6570505">bibman4000</a><br><div class="Feedtext">"no more training???"</div></span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">9/2/2013 at 2:36 AM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=64045715&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
                    <a href="http://www.roblox.com/user.aspx?id=20471214">
					    <span class="feed-user-avatar"><img alt="DaVe87545" class="feed-user-avatar-image" src="./ROBLOX.com_files/0184aa2e2c447c5b6211374e1ba2a90a"></span>
                    </a>
			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/User.aspx?ID=20471214">DaVe87545</a><br><div class="Feedtext">"T_T"</div></span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">8/27/2013 at 5:15 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=63664097&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
<a href="http://www.roblox.com/speed-Studio-item?id=70281449" class="feed-asset"><img class="feed-asset-image" src="./ROBLOX.com_files/f0443c9bf1dd79661fce85ecec129d0d"></a>			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/My/Groups.aspx?gid=337030">speed-Studio</a><br><div class="Feedtext">"I'm going to host a poll series on YouTube, where you can vote for your favorite features to be added to chair racing! The first video should come in a couple of weeks/days. ~Nick"</div> (posted by <a href="http://www.roblox.com/User.aspx?ID=17957733">SpeedySeat</a>)</span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">8/15/2013 at 11:41 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=62855217&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
<a href="http://www.roblox.com/Roblox-Trade-System-Group-item?id=119718787" class="feed-asset"><img class="feed-asset-image" src="./ROBLOX.com_files/7be0fc39343608e796de90d97186f72c"></a>			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/My/Groups.aspx?gid=653079">Roblox Trade System Group</a><br><div class="Feedtext">"Whats the best trade you've ever done? Post it on the wall!"</div> (posted by <a href="http://www.roblox.com/User.aspx?ID=23641053">SimpleStar</a>)</span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">8/15/2013 at 9:20 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=62849010&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
<a href="http://www.roblox.com/speed-Studio-item?id=70281449" class="feed-asset"><img class="feed-asset-image" src="./ROBLOX.com_files/f0443c9bf1dd79661fce85ecec129d0d"></a>			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/My/Groups.aspx?gid=337030">speed-Studio</a><br><div class="Feedtext">"Alright. The map reviewer is back up, so if you need to submit a map, submit it ASAP. ~Nick"</div> (posted by <a href="http://www.roblox.com/User.aspx?ID=17957733">SpeedySeat</a>)</span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">8/5/2013 at 7:51 AM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=62010995&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
                    <a href="http://www.roblox.com/user.aspx?id=20471214">
					    <span class="feed-user-avatar"><img alt="DaVe87545" class="feed-user-avatar-image" src="./ROBLOX.com_files/0184aa2e2c447c5b6211374e1ba2a90a"></span>
                    </a>
			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/User.aspx?ID=20471214">DaVe87545</a><br><div class="Feedtext">"People at the NYPD work hard!!!"</div></span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">7/31/2013 at 7:59 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=62034971&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
<a href="http://www.roblox.com/speed-Studio-item?id=70281449" class="feed-asset"><img class="feed-asset-image" src="./ROBLOX.com_files/f0443c9bf1dd79661fce85ecec129d0d"></a>			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/My/Groups.aspx?gid=337030">speed-Studio</a><br><div class="Feedtext">"[Current Game version: 8.4; BETA edition: 9a; BETA update date: August 1st, 2013] ANNCMENT: Doing a hunt for anybody who can retexture the new chair mesh... ~SS"</div> (posted by <a href="http://www.roblox.com/User.aspx?ID=17957733">SpeedySeat</a>)</span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">7/20/2013 at 9:14 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=60825103&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
                    <a href="http://www.roblox.com/user.aspx?id=20471214">
					    <span class="feed-user-avatar"><img alt="DaVe87545" class="feed-user-avatar-image" src="./ROBLOX.com_files/0184aa2e2c447c5b6211374e1ba2a90a"></span>
                    </a>
			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/User.aspx?ID=20471214">DaVe87545</a><br><div class="Feedtext">"Going SUPER"</div></span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">6/26/2013 at 12:42 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=59179429&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
<a href="http://www.roblox.com/speed-Studio-item?id=70281449" class="feed-asset"><img class="feed-asset-image" src="./ROBLOX.com_files/f0443c9bf1dd79661fce85ecec129d0d"></a>			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/My/Groups.aspx?gid=337030">speed-Studio</a><br><div class="Feedtext">"[Current Game version: 8.4; BETA edition: 8.4; BETA update date: ∞ until issue resolved.] ANNOUNCEMENT: If chair racing gets enough ratings within the next week, I'll come back and give the game a big update. Unfortunately, I am not BC and cannot add ads."</div> (posted by <a href="http://www.roblox.com/User.aspx?ID=17957733">SpeedySeat</a>)</span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">6/23/2013 at 9:45 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=58890802&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
                    <a href="http://www.roblox.com/user.aspx?id=41260932">
					    <span class="feed-user-avatar"><img alt="DaVe875453" class="feed-user-avatar-image" src="./ROBLOX.com_files/4111f0f738c237c65ed4047aece12d6c"></span>
                    </a>
			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/User.aspx?ID=41260932">DaVe875453</a><br><div class="Feedtext">"SOME GUY WAS ON MY ACCOUNT LAST NIGHT &gt;:O"</div></span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">4/24/2013 at 3:37 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=55404223&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
                    <a href="http://www.roblox.com/user.aspx?id=41260932">
					    <span class="feed-user-avatar"><img alt="DaVe875453" class="feed-user-avatar-image" src="./ROBLOX.com_files/4111f0f738c237c65ed4047aece12d6c"></span>
                    </a>
			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/User.aspx?ID=41260932">DaVe875453</a><br><div class="Feedtext">"Im JUST CHILLIN"</div></span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">4/22/2013 at 5:57 PM</span> 
			</div>
			<div class="feed-report-abuse">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=55382412&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider-top feed-container">
			<div class="feed-image-container notranslate">
                    <a href="http://www.roblox.com/user.aspx?id=41260932">
					    <span class="feed-user-avatar"><img alt="DaVe875453" class="feed-user-avatar-image" src="./ROBLOX.com_files/4111f0f738c237c65ed4047aece12d6c"></span>
                    </a>
			</div>
			<div class="feed-text-container text">
				<span class="notranslate"><a href="http://www.roblox.com/User.aspx?ID=41260932">DaVe875453</a> created a new place: <a href="http://www.roblox.com/item.aspx?id=113225466">DaVe875453's Place</a></span>
				<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">4/18/2013 at 3:19 PM</span> 
			</div>
			<div class="feed-report-abuse" style="display:none">
				<a href="http://www.roblox.com/AbuseReport/Feed.aspx?ID=0&RedirectUrl=/home">
					<img src="./ROBLOX.com_files/1ea8de3b0f71a67b032b67ddc1770c78.png" alt="Report abuse" id="reportAbuseButton">
				</a>
			</div>
			<div class="clear"></div>
		</div>
</div>
</div>
				<div id="AjaxFeedError" style="display: none" class="error-message">An error occurred while fetching your feed.</div>
			</div>
		</div>
	</div>

    <div class="right-column">
            <div id="RecentlyVisitedPlacesContainer" class="right-column-box">
                <h3 style="padding-bottom: 6px;">Recently Played Games</h3>
                
<div id="RecentlyVisitedPlaces">
	<div id="RecentlyVisitedPlaceTemplate" class="recent-place-container">
		<div class="recent-place-thumb"></div>
		<div class="recent-place-Info">
			<div class="recent-place-name"></div>
			<div class="recent-place-players-online text"></div>
		</div>
	</div>
<div class="recent-place-container" style="display: block;">
		<div class="recent-place-thumb"><img src="./ROBLOX.com_files/316a6dffaa1158bc97f90a204eb130b7" alt="Summer 2009" class="recent-place-thumb-img"></div>
		<div class="recent-place-Info">
			<div class="recent-place-name"><a href="http://www.roblox.com/Summer-2009-place?id=40960945">Summer 2009 </a></div>
			<div class="recent-place-players-online text">0 players online</div>
		</div>
	</div><div class="recent-place-container" style="display: block;">
		<div class="recent-place-thumb"><img src="./ROBLOX.com_files/8739c638360017bc222dc7e54641a4f7" alt="Stagecoach and first bus simulator 20..." class="recent-place-thumb-img"></div>
		<div class="recent-place-Info">
			<div class="recent-place-name"><a href="http://www.roblox.com/Stagecoach-and-first-bus-simulator-2013-more-roads-place?id=48727518">Stagecoach and first bus simulat… </a></div>
			<div class="recent-place-players-online text">0 players online</div>
		</div>
	</div><div class="recent-place-container" style="display: block;">
		<div class="recent-place-thumb"><img src="./ROBLOX.com_files/17055d26d12f1f3113b95498478142ce" alt="Space Afflictionâ„¢ 1: V3(New Ship/star..." class="recent-place-thumb-img"></div>
		<div class="recent-place-Info">
			<div class="recent-place-name"><a href="http://www.roblox.com/Space-Affliction-1-V3-New-Ship-starsystems-place?id=22782575">Space Afflictionâ„¢ 1: V3(New Sh… </a></div>
			<div class="recent-place-players-online text">61 players online</div>
		</div>
	</div><div class="recent-place-container" style="display: block;">
		<div class="recent-place-thumb"><img src="./ROBLOX.com_files/1736a3b6a65aba70d74e80cdbba532de" alt="Sinking Ship [Now working on 1.8]" class="recent-place-thumb-img"></div>
		<div class="recent-place-Info">
			<div class="recent-place-name"><a href="http://www.roblox.com/Sinking-Ship-Now-working-on-1-8-place?id=72193303">Sinking Ship [Now working on 1.8] </a></div>
			<div class="recent-place-players-online text">579 players online</div>
		</div>
	</div><div class="recent-place-container" style="display: block;">
		<div class="recent-place-thumb"><img src="./ROBLOX.com_files/5c0ab8090c02bb29581b8849c8bfa642" alt="Base wars:The Land(since 2009) [Read ..." class="recent-place-thumb-img"></div>
		<div class="recent-place-Info">
			<div class="recent-place-name"><a href="http://www.roblox.com/Base-wars-The-Land-since-2009-Read-description-place?id=18164449">Base wars:The Land(since 2009)… </a></div>
			<div class="recent-place-players-online text">530 players online</div>
		</div>
	</div></div>
<div id="SeeMore">
        <a href="http://www.roblox.com/games?sortFilter=6" class="text-link">See More  <img alt="See more! " src="./ROBLOX.com_files/efe86a4cae90d4c37a5d73480dea4cb1.png" class="see-more-img"></a>
</div>
<div id="PlayGames" style="display: none">
	You haven't played any games recently.
	<a href="http://www.roblox.com/Games.aspx" class="text-link">Play Now  <img alt="See more! " src="./ROBLOX.com_files/efe86a4cae90d4c37a5d73480dea4cb1.png" class="see-more-img"></a>
</div>
            </div>
        <div id="Skyscraper-Ad" class="right-column-box">
<div style="width: 160px">
    <span id="3439303639313930" class="GPTAd skyscraper" data-js-adtype="gptAd">
        <script type="text/javascript">
            googletag.cmd.push(function () {
                googletag.display("3439303639313930");
            });
        </script>
    <div id="google_ads_iframe_/1015347/Roblox_MyHome_Right_160x600_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/1015347/Roblox_MyHome_Right_160x600_0" name="google_ads_iframe_/1015347/Roblox_MyHome_Right_160x600_0" width="160" height="600" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" src="javascript:"<html><body style='background:transparent'></body></html>"" style="border: 0px; vertical-align: bottom;"></iframe></div><iframe id="google_ads_iframe_/1015347/Roblox_MyHome_Right_160x600_0__hidden__" name="google_ads_iframe_/1015347/Roblox_MyHome_Right_160x600_0__hidden__" width="0" height="0" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" src="javascript:"<html><body style='background:transparent'></body></html>"" style="border: 0px; vertical-align: bottom; visibility: hidden; display: none;"></iframe></span>
    <div class="ad-annotations " style="width: 160px">
        <span class="ad-identification">Advertisement</span>
            <a class="BadAdButton" href="http://www.roblox.com/Ads/ReportAd.aspx" title="click to report an offensive ad">Report</a>
    </div>
</div>        </div>
    </div>
	<div class="clear"></div>
	<div id="UserScreenContainer">

	</div>
</div>


                    <div style="clear:both"></div>
                </div>
            </div>
        </div>

<div id="Footer" class="footer-container">
    <div class="FooterNav">
        <a href="http://www.roblox.com/info/Privacy.aspx"><b>Privacy Policy</b></a>
        &nbsp;|&nbsp; 
        <a href="http://corp.roblox.com/advertise-on-roblox" class="roblox-interstitial">Advertise with Us</a>
        &nbsp;|&nbsp; 
        <a href="http://corp.roblox.com/roblox-press" class="roblox-interstitial">Press</a>
        &nbsp;|&nbsp; 
        <a href="http://corp.roblox.com/contact-us" class="roblox-interstitial">Contact Us</a>
        &nbsp;|&nbsp;
        <a href="http://corp.roblox.com/" class="roblox-interstitial">About Us</a>
        &nbsp;|&nbsp;
        <a href="http://blog.roblox.com/" class="roblox-interstitial">Blog</a>
        &nbsp;|&nbsp;
        <a href="http://corp.roblox.com/jobs" class="roblox-interstitial">Jobs</a>
        &nbsp;|&nbsp;
        <a href="http://www.roblox.com/Parents.aspx">Parents</a>
        &nbsp;|&nbsp;
        <a href="http://shop.roblox.com/" class="roblox-interstitial">Shop</a>
            <span class="LanguageOptionElement">&nbsp;|&nbsp;</span> 
            <span runat="server" navigateurl="/Parents.aspx" ref="footer-parents" class="LanguageOptionElement LanguageTrigger" drop-down-nav-button="LanguageTrigger">English&nbsp;<span class="FooterArrow">▼</span>
                    <div class="dropuplanguagecontainer" style="display:none;" drop-down-nav-container="LanguageTrigger">
                        <div class="dropdownmainnav" style="z-index:1023">
                                <a href="http://www.roblox.com/UserLanguage/LanguageRedirect?languageCode=de&relativePath=%2fhome%3fnl%3dtrue" class="LanguageOption js-lang" data-js-langcode="de"><span class="notranslate">Deutsch</span>&nbsp;(German) </a>
                            </div>  
                    </div>
            </span> 
    </div>
    <div class="FooterNav">
        <div id="SEOGenreLinks" class="SEOGenreLinks">
                  <a href="http://www.roblox.com/all-games">All Games</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/building-games">Building</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/horror-games">Horror</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/town-and-city-games">Town and City</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/military-games">Military</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/comedy-games">Comedy</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/medieval-games">Medieval</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/adventure-games">Adventure</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/sci-fi-games">Sci-Fi</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/naval-games">Naval</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/fps-games">FPS</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/rpg-games">RPG</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/sports-games">Sports</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/fighting-games">Fighting</a> 
                      <span>|</span>
                  <a href="http://www.roblox.com/western-games">Western</a> 
        </div>
    </div>
    <div class="legal">
        <div class="left">
            <div id="a15b1695-1a5a-49a9-94f0-9cd25ae6c3b2">
    <a href="http://privacy.truste.com/privacy-seal/Roblox-Corporation/validation?rid=2428aa2a-f278-4b6d-9095-98c4a2954215" title="TRUSTe Children privacy certification" target="_blank">
        <img style="border: none" src="./ROBLOX.com_files/seal" alt="TRUSTe Children privacy certification">
    </a>
</div>
        </div>
        <div class="right">
            <p class="Legalese">
    ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a href="http://corp.roblox.com/" ref="footer-smallabout" class="roblox-interstitial">ROBLOX Corporation</a>, ©2013. Patents pending.
    ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex, and no resemblance to the products of these companies is intended. Use of this site signifies your acceptance of the <a href="http://www.roblox.com/info/terms-of-service" ref="footer-terms">Terms and Conditions</a>.
</p>
        </div>
        <div class="clear"></div>
    </div>
</div>

    </div>
    
</div>
<div id="ChatContainer" style="right: 0px; bottom: 0px; position: fixed; z-index: 10020;">
            
                                            <div style="position:relative">

      

            <div id="partycontainer" style="display:none;margin-left:10px;float:right;">
                
    <div id="partyMemberTemplate" style="display:none;height:32px">
     <div id="party_pendinguserid_UID">
       
         <dt style="position:relative">
                <span id="UID_status" class="friend_dock_offlinestatus"></span>
                [PARTY_MEMBER_THUMBNAIL]
            </dt> 
         <dd> 
         <span>[PARTY_MEMBER_NAME]</span>&nbsp;&nbsp;&nbsp;[PARTY_MEMBER_REPORT][PARTY_KICK_MEMBER]
         <br> 
         <span class="grey9">&nbsp;</span> 
         </dd> 
     </div>
    </div>
        <script language="javascript" type="text/javascript">
            Party.CurrentUserID = 63161106;
            Party.CurrentUserName = "HEadPHonEReaPEr";
            Party.ActiveView = "";
            Party.PollThreadAvailable = true;
            Party.FirstLoad = true;
            Party.PollIntervalTimer = null;
            Party.MaxPartySize = 6;
            Party.PlayEnabled = true;
            
            /*<sl:translate_json>*/
            Party.Resources = {'areYouSureReport':'Are you sure you would like to report ','report':"Report",'kick':"Kick from party",'pending':"Pending...",'partyInvite':"Party Invite!",'partyGameBlurb':"When the party leader joins a game, the rest of the party will be invited to follow",'inviteInstructions':"Please type the name of the user you wish to invite",'partyFull':"Your party is already full!",'joinConfirm1':"The party leader has joined ",'joinConfirm2':".  Would you like to join?",'joinConfirm3':"You will be removed from any game you might be playing.",'enterUserName':'Enter username'};
            /*</sl:translate_json>*/
        </script>
        <script language="javascript" type="text/javascript">
            try
            {
                $(function()
                {
                    Party.ProcessPolledData(eval(({"Error" : "User not found in party"})));
                    Party.OnPageLoad();
                });
            }
            catch (ex) {}
        </script>
        <div class="partyWindow" id="party_none" style="display: block;"> 
     <div id="party_none_title" class="title" onclick="Party.ToggleTab(false)">
            <span>Party</span> 
     <div class="closeparty">-</div>
     </div> 
     <div class="main"> 
     <div id="new_party"> 
     <p>You are not in a party.  To create a party, just invite someone:</p>
     <p><input type="text" id="new_party_invite_name" class="party_invite_box" onkeydown="return Party.ProcessKey('new_party_invite_name',event)" style="color: rgb(136, 136, 136);"><input type="button" class="translate" onclick="Party.DoInvite('new_party_invite_name')" value="Invite"></p>
     </div> 
     <div class="clear" id="new_party_clear"> 
     </div> 
     </div> 
    </div>
    <div class="partyWindow" id="party_loading" style="display: none;"> 
     <div id="party_loading_title" class="title" onclick="Party.ToggleTab(false)">
     <span>Party</span>  
     <div class="closeparty">-</div> 
     </div> 
     <div class="main"> 
     <div> 
     <p>Invitation sent.</p>
     <p>Creating party...</p>
     </div> 
     </div> 
    </div>
    <div class="partyWindow" id="party_pending" style="display: none;">
     <div id="party_pending_title" class="title" onclick="Party.ToggleTab(false)"> 
     <span>Party</span>
                <div class="closeparty">-</div> 
     </div>
     <div class="main"> 
     <div id="invite_header" style="font-weight: bold; padding: 10px; color:Green;">ihatebttz wants to KILL you!</div> 
     <div class="members"> 
     <dl id="party_invite_list"> 
     </dl> 
     </div>
 
     <div id="invite_status"> 
     <p><span class="grey9">Invitations by Leader only</span></p> 
     <p><span class="grey9">Waiting for Leader to play a game</span></p> 
     </div> 
 
     <div class="btn_green21h"> 
     <a href="#" onclick="Party.AcceptInvite();return false;">Join Party</a> 
     </div> 
 
     <div class="btn_red21h"> 
     <a href="#" onclick="Party.DeclineInvite();return false;">Ignore</a> 
     </div> 
 
     <div class="clear" id="invite_clear"> 
     </div> 
     </div>
    </div> 
    <div class="partyWindow" id="party_my" style="display: none;"> 
     <div id="party_my_title" class="title" onclick="Party.ToggleTab(false)"> 
            <span>Party</span> 
     <div class="closeparty">-</div> 
     </div> 
     <div class="main" style="max-height: 517px;"> 
     <div class="members"> 
     <dl id="party_member_list"> 
 
     </dl> 
     </div>
 
     <p id="party_invite_instructions"><span class="grey9"><input type="text" id="party_my_invite_name" class="party_invite_box" onkeydown="return Party.ProcessKey('party_my_invite_name',event)" style="color: rgb(136, 136, 136);"><input type="button" class="translate" onclick="Party.DoInvite('party_my_invite_name')" value="Invite"></span></p> 
 
     <div id="chat_messages"> 

     </div> 
 
     <div id="chat_input">
     <textarea name="comments" rows="2" cols="27" id="comments" tabindex="4" title="comments"></textarea>
     </div> 
 
                <div id="party-auto-follow-setting" style="padding: 5px; text-align: center">
                 <input id="auto-follow-party-leader" type="checkbox">
                 <label for="auto-follow-party-leader">Automatically follow party leader</label>
                 <script type="text/javascript">
                     $("#auto-follow-party-leader").prop('checked', $.cookie('AutoFollowPartyLeader') == 'true');
                     $("#auto-follow-party-leader").on("click", function () {
                         // every time I join a party in the future, this cookie will determine whether or not I automatically follow the party leader
                         $.cookie('AutoFollowPartyLeader', this.checked, { path: '/', expires: 365 });
                         $.get("/chat/party.ashx", { reqtype: "autoFollowPartyLeader" });
                     });
                 </script>
             </div>

         <div id="party_current_game">
                    <table border="0" style="padding: 0px; margin: 0px; border: 0px;">
                        <tbody><tr style="padding: 0px; margin: 0px; border: 0px;">
                            <td style="padding: 0px; margin: 0px; border: 0px;">
                         <div id="party_game_thumb">
                         </div>
                            </td>
                            <td style="padding: 0px; margin: 0px; border: 0px;">
                         <div id="party_game_name" style="float: right;">
                         </div>
                         <span id="party_game_follow_me" class="followme_green19h" onclick="Party.JoinGameWithParty(); return false;"></span>
                         <span class="btn_red21h">
                         <a href="#" onclick="Party.DeclineInvite();return false;">Leave Party</a>
                         </span>
                            </td>
                        </tr>
                    </tbody></table>
         </div>
 
     <div class="clear" id="leader_clear"> 
     </div> 
 
     </div>
    </div>

            </div>
            <div class="clear"></div>
        </div>
    <div id="friend_dock_minimized_container" style="display: block;">
            <div style="float:right">
                <a id="minChatsTab" href="#" class="tab_white19h">
                    <span onclick="ChatBar.ShowFriends();return false;">
                        <img src="https://images.rbxcdn.com/164e80229d83c8b6e55b1eb671887e54.png" style="border: none">
                        Online
                    </span>
                </a>
            </div>
        </div>
        <div id="friend_dock_container" style="display: none;">
           <div id="friend_dock_titlebar">
               <div style="float:left;">
                   
                        <a id="bestFriendsTab" style="text-decoration: none" class="tab_white19h" href="#" onclick="ChatBar.TogglePanel('bestFriendsTab_dock_thumbnails');return false;"><span>Best Friends</span></a>
                        <a id="friendsTab" style="text-decoration: none" class="tab_white19hselected" href="#" onclick="ChatBar.TogglePanel('friendsTab_dock_thumbnails');return false;"><span>Online Friends</span></a>
                    <a id="recentsTab" style="text-decoration: none" class="tab_white19h" href="#" onclick="ChatBar.TogglePanel('recentsTab_dock_thumbnails');return false;"><span>Recent</span></a>
                        <a id="chatsTab" style="text-decoration: none" class="tab_white19h" href="#" onclick="ChatBar.TogglePanel('chatsTab_dock_thumbnails_chat');return false;"><span>Chats</span></a>
                </div>
                <div style="float:right;">
                        <div class="tab_white19h" id="partyTab" onclick=" Party.ToggleTab(null); return false; ">
                            <span>
                                <b><a href="#">Party</a></b>&nbsp;&nbsp;&nbsp;&nbsp;
                            </span>
                        </div>
                    <div class="friend_dock_chatsettings" style="display:none">
                        <div style="padding:10px 10px 10px 10px">
                            <div class="chat_settings_group_header">Who can chat with me:</div>
                            <input type="radio" id="chat_settings_all" name="rdoOnline"> <b>All Users</b><br>
                            <input type="radio" id="chat_settings_friends" name="rdoOnline" checked="checked"> <b>Friends</b><br>
                            <input type="radio" id="chat_settings_bestfriends" name="rdoOnline"> <b>Best Friends</b><br>
                            <input type="radio" id="chat_settings_noone" name="rdoOnline"> <b>No One</b><br>
                                    <hr>
                                <div class="chat_settings_group_header">Who can party with me:</div>
                                <input type="radio" id="party_settings_all" name="rdoOnline2" checked="checked"> <b>All Users</b><br>
                                <input type="radio" id="party_settings_friends" name="rdoOnline2"> <b>Friends</b><br>
                                <input type="radio" id="party_settings_bestfriends" name="rdoOnline2"> <b>Best Friends</b><br>
                                <input type="radio" id="party_settings_noone" name="rdoOnline2"> <b>No One</b><br>
                                <hr>
                                <div class="chat_settings_group_header">Chat Notifications:</div>
                                <input type="radio" id="chat_settings_soundon" name="rdoNotifications" checked="checked"> <b>All</b><br>
                                <input type="radio" id="chat_settings_soundoff" name="rdoNotifications"> <b>None</b><br>
                            <div style="text-align:center; margin-top: 5px;">
                                <input type="button" onclick="ChatBar.ApplySettings();$('.friend_dock_chatsettings').hide();" value="Save">
                            </div>
                        </div>
                    </div>
                    <div class="tab_white19h">
                        <span>
                            <b><a onclick="$('.friend_dock_chatsettings').toggle(); return false" href="#">Settings</a></b>&nbsp;&nbsp;&nbsp;
                            <img src="https://images.rbxcdn.com/8a762994af1e122de8ac427005ac3d9b.png" onclick="ChatBar.HideFriends();return false;" style="border: none; cursor: pointer" alt="Close chat">
                        </span>
                    </div>
               </div>
           </div>
           <div id="friend_dock_thumb_container">
                <!-- Container for the dynamically generated thumbs for friends -->
                <div id="friendsTab_dock_thumbnails" style="display: block;">
            <div id="friend_dock_chatholder" style="display: none;">
                <div id="friend_dock_friendtemplate">
        <div id="UID_CURRTAB_friend" userid="UID" username="الكتكوت" class="friend_dock_friend">
            <div id="UID_CURRTAB_onlinestatus" class="friend_dock_onlinestatus"></div>
            <div id="UID_CURRTAB_offlinestatus" class="friend_dock_offlinestatus"></div>
            <div id="UID_CURRTAB_dropdown" class="friendBarDropDown" userid="UID" username="الكتكوت">
                
                <div id="UID_CURRTAB_dropdownlist" class="friendBarDropDownList">
                    <ul>
                            <li onclick=" Party.InviteUser('USERNAME'); " startpartydisplay=""><div>Invite To Party</div></li>
                            <li class="StartChat" onclick=" ChatBar.ToggleChat('UID', 'USERNAME'); " startchattingdisplay="" userid="UID" style="display: block;"><div>Start Chatting</div></li>
                        <li onclick=" window.location.href = '/user.aspx?id=UID'; "><div>View Profile</div></li>
                            <li class="EndChat" onclick=" ChatBar.RemoveActiveChat(this); " userid="UID" style="display: none;"><div>End Chat</div></li>
                    </ul>
                </div>    
            </div>
            <img alt="" onclick=" ChatBar.ToggleChat('UID', 'USERNAME'); return false; " width="48" height="48" class="ActiveChatThumb" src="https://www.svgrepo.com/show/508699/landscape-placeholder.svg">
            <div class="friend_dock_username"><span class="friend_dock_username_href">Placeholder</span></div>
        </div>
    </div>
            
            <div id="UID_friend_dock_chatbox" userid="UID" class="friend_dock_chatbox" style="position: relative; display: none;">
                <div class="friend_dock_chatbox_titlebar blinkoffheader" userid="UID">
                    <div class="friend_dock_chatbox_username">
                        <a style="color: #fff" class="friend_dock_chatbox_username_display" href="/user.aspx?id=UID">Placeholder</a>
                        <a class="friend_dock_chatbox_username_abuse" style="color: #fff; font-size: 9px; line-height: 14px; cursor: pointer" alt="Report Abuse" href="#" onclick=" ReportAbuse(UID); return false; ">(Report)</a>
                    </div>
                    <div class="friend_dock_chatbox_closebutton">
                        <a href="#" style="color: #fff" onclick=" ChatBar.CloseChat($(this).parents('.friend_dock_chatbox').filter(':first'));return false; ">-</a>
                    </div>
                </div>
                <div class="friend_dock_chatbox_currentlocation" style="margin: 10px; font-size: 12px; height: 18px">
                </div>
                <div id="UID_friend_dock_chatbox_chat" class="friend_dock_chatbox_chat">
                </div>
                <textarea class="friend_dock_chatbox_entry" maxlength="255"></textarea>
            <div class="blockUI" style="display:none"></div><div class="blockUI blockOverlay" style="z-index: 1000; border: medium; margin: 0px; padding: 0px; width: 100%; height: 100%; top: 0px; left: 0px; background-color: rgb(0, 0, 0); opacity: 0.6; cursor: wait; position: absolute;"></div><div class="blockUI blockMsg blockElement" style="z-index: 1001; position: absolute; padding: 0px; margin: 0px; width: 30%; top: 137px; left: 67px; text-align: center; color: rgb(0, 0, 0); border: 3px solid rgb(170, 0, 0); background-color: rgb(255, 255, 255); cursor: wait;"><b>Loading Chat</b></div></div>
        </div>
                                   <div id="friendsTab_dock_thumbnails_empty" style="display:none; font-size:12px; margin-top:40px;">No results found.  Find some friends <a href="/Browse.aspx">here</a>.</div>
                </div>
                
                <!-- Container for the dynamically generated thumbs for best friends -->
                <div id="bestFriendsTab_dock_thumbnails" style="float: left; display: none;">
                    <div id="bestFriendsTab_dock_thumbnails_empty" style="display:none; font-size:12px; margin-top:40px;">No results? Start off by <a href="/my/editfriends.aspx">adding some Best Friends.</a></div>
                </div>
                
                <!-- Container for the dynamically generated thumbs for recents -->
                <div id="recentsTab_dock_thumbnails" style="float: left; display: none;">
                    <div id="recentsTab_dock_thumbnails_empty" style="display:none; font-size:12px; margin-top:40px;">You have not had any recent interactions.</div>
                </div>
                
                <!-- Container for the dynamically generated thumbs for chats -->
                <div id="chatsTab_dock_thumbnails_chat" style="float: left; display: none;">
                    <div id="chatsTab_dock_thumbnails_chat_empty" style="display:none; font-size:12px; margin-top:40px;">You are not currently chatting with anyone.</div>
                </div>
           </div>
        </div>
       
            
          
    
               
        
    
    </div>
        <div id="jPlayerDiv" style="position: absolute; top: 0px; left: -9999px;"><audio id="jqjp_audio_0" preload="none"></audio><div id="jqjp_force_0" style="text-indent: -9999px;">0.7583572196308523</div></div>
    <script type="text/javascript" language="javascript">
            if (typeof Roblox === "undefined") {
        Roblox = {};
        }
        if (typeof Roblox.Chat_v1 === "undefined") {
            Roblox.Chat_v1 = {};
        }
        Roblox.Chat_v1.Resources = {
            //<sl:translate>
            reportConfirm: 'Are you sure you would like to report this user?'
            , sendPersonalMessage1: 'This user cannot receive chat messages.  Send them a '
            , sendPersonalMessage2: 'Personal Message'
            , loadingChat: 'Loading Chat'
            , offline: 'Offline'
            , online: 'Online'
            , newMessage: 'New Message!'
            , newMessages: 'New Messages!'
            //</sl:translate>
        };
            
        ChatBar.FriendsEnabled = 'True';
        ChatBar.BestFriendsEnabled = 'True';
        ChatBar.PartyEnabled = 'True';
        ChatBar.MyUserName = "fatboy122";
        ChatBar.MaxChatWindows = 4;
        ChatBar.ChatPollInterval = 4000;
        ChatBar.IdleChatPollInterval = ChatBar.ChatPollInterval * ChatBar.PollIntervalFactorForIdle;
        ChatBar.FriendsPollInterval = 40000;
        ChatBar.BestFriendsPollInterval = 30000;
        ChatBar.RecentsPollInterval = 32000;
        ChatBar.ChatReceivedSoundFile = "/chat/sound/chatsound.mp3";
        ChatBar.ChatNotificationsSetting = 'All';
        ChatBar.DiagnosticsEnabled = false;

        $(function()
        {
            try
            {
                ChatBar.OnPageLoad();
            }
            catch (x) { }
        });
    </script>
</div>

        <script src="./ROBLOX.com_files/urchin.js" type="text/javascript"></script>
        <script type="text/javascript">
            _uacct = "UA-486632-1";
            _udn = "roblox.com";
            _uccn = "rbx_campaign";
            _ucmd = "rbx_medium";
            _ucsr = "rbx_source";
            urchinTracker();
            __utmSetVar('Visitor/Member');
        </script>

<div id="PlaceLauncherStatusPanel" style="display:none;width:300px">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="margin:0 1em 1em 0; padding:20px 0;">
            <img src="./ROBLOX.com_files/e998fb4c03e8c2e30792f2f3436e9416.gif" alt="Progress">
        </div>
        <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
            </div>
            <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to Players...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
        <div style="text-align:center;margin-top:1em">
            <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel">
        </div>
    </div>
</div>


<script type="text/javascript" src="https://js.rbxcdn.com/a007748692ad04a5c959493de9211f63.js.gzip"></script>

    <div id="videoPrerollPanel" style="display:none">
        <div id="videoPrerollTitleDiv">
            Gameplay sponsored by:
        </div>
        <div id="videoPrerollMainDiv"></div>
        <div id="videoPrerollCompanionAd"></div>
        <div id="videoPrerollLoadingDiv">
            Loading <span id="videoPrerollLoadingPercent">0%</span> - <span id="videoPrerollMadStatus" class="MadStatusField">Starting game...</span><span id="videoPrerollMadStatusBackBuffer" class="MadStatusBackBuffer"></span>
            <div id="videoPrerollLoadingBar">
                <div id="videoPrerollLoadingBarCompleted">
                </div>
            </div>
        </div>
        <div id="videoPrerollJoinBC">
            <span>Get more with Builders Club!</span>
            <a href="http://www.roblox.com/Upgrades/BuildersClubMemberships.aspx?ref=vpr" target="_blank" id="videoPrerollJoinBCButton"></a>
        </div>
    </div>
    <script type="text/javascript">
        Roblox.VideoPreRoll.showVideoPreRoll = false;
        Roblox.VideoPreRoll.loadingBarMaxTime = 30000;
        Roblox.VideoPreRoll.videoOptions.key = "robloxcorporation";
        Roblox.VideoPreRoll.videoOptions.categories = "NonBC,IsLoggedIn,Age13to14,Male";
             Roblox.VideoPreRoll.videoOptions.id = "games";
        Roblox.VideoPreRoll.videoLoadingTimeout = 11000;
        Roblox.VideoPreRoll.videoPlayingTimeout = 23000;
        Roblox.VideoPreRoll.videoLogNote = "";
        Roblox.VideoPreRoll.logsEnabled = true;
        Roblox.VideoPreRoll.excludedPlaceIds = "32373412";
            
                Roblox.VideoPreRoll.specificAdOnPlacePageEnabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePageId = 157382;
                Roblox.VideoPreRoll.specificAdOnPlacePageCategory = "stooges";
            
            
                Roblox.VideoPreRoll.specificAdOnPlacePage2Enabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Id = 88419564;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Category = "lego";
            
        $(Roblox.VideoPreRoll.checkEligibility);
    </script>

<div id="GuestModePrompt_BoyGirl" class="Revised GuestModePromptModal" style="display:none;">
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="cursor: pointer; margin-left:455px;top:7px; position:absolute;"></a>
    </div>
    <div class="Title">
        Choose Your Character
    </div>
    <div style="min-height: 275px; background-color: white;">
        <div style="clear:both; height:25px;"></div>

        <div style="text-align: center;">
            <div class="VisitButtonsGuestCharacter VisitButtonBoyGuest" style="float:left; margin-left:45px;"></div>
            <div class="VisitButtonsGuestCharacter VisitButtonGirlGuest" style="float:right; margin-right:45px;"></div>
        </div>
        <div style="clear:both; height:25px;"></div>
        <div class="RevisedFooter">
            <div style="width:200px;margin:10px auto 0 auto;">
                <a href="http://www.roblox.com/home?nl=true#" onclick="redirectPlaceLauncherToRegister(); return false;"><div class="RevisedCharacterSelectSignup"></div></a>
                <a class="HaveAccount" href="http://www.roblox.com/home?nl=true#" onclick="redirectPlaceLauncherToLogin();return false;">I have an account</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function checkRobloxInstall() {
             return RobloxLaunch.CheckRobloxInstall('/install/download.aspx');
    }
        if (typeof MadStatus === "undefined") {
            MadStatus = {};
        }

        MadStatus.Resources = {
            //<sl:translate>
            accelerating: "Accelerating",
			aggregating: "Aggregating",
			allocating: "Allocating",
            acquiring: "Acquiring",
			automating: "Automating",
			backtracing: "Backtracing",
			bloxxing: "Bloxxing",
			bootstrapping: "Bootstrapping",
			calibrating: "Calibrating",
			correlating: "Correlating",
			denoobing: "De-noobing",
			deionizing: "De-ionizing",
			deriving: "Deriving",
            energizing: "Energizing",
			filtering: "Filtering",
			generating: "Generating",
			indexing: "Indexing",
			loading: "Loading",
			noobing: "Noobing",
			optimizing: "Optimizing",
			oxidizing: "Oxidizing",
			queueing: "Queueing",
			parsing: "Parsing",
			processing: "Processing",
			rasterizing: "Rasterizing",
			reading: "Reading",
			registering: "Registering",
			rerouting: "Re-routing",
			resolving: "Resolving",
			sampling: "Sampling",
			updating: "Updating",
			writing: "Writing",
            blox: "Blox",
			countzero: "Count Zero",
			cylon: "Cylon",
			data: "Data",
			ectoplasm: "Ectoplasm",
			encryption: "Encryption",
			event: "Event",
			farnsworth: "Farnsworth",
			bebop: "Bebop",
			fluxcapacitor: "Flux Capacitor",
			fusion: "Fusion",
			game: "Game",
			gibson: "Gibson",
			host: "Host",
			mainframe: "Mainframe",
			metaverse: "Metaverse",
			nerfherder: "Nerf Herder",
			neutron: "Neutron",
			noob: "Noob",
			photon: "Photon",
			profile: "Profile",
			script: "Script",
			skynet: "Skynet",
			tardis: "TARDIS",
			virtual: "Virtual",
            analogs: "Analogs",
			blocks: "Blocks",
			cannon: "Cannon",
			channels: "Channels",
			core: "Core",
			database: "Database",
			dimensions: "Dimensions",
			directives: "Directives",
			engine: "Engine",
			files: "Files",
			gear: "Gear",
			index: "Index",
			layer: "Layer",
			matrix: "Matrix",
			paradox: "Paradox",
			parameters: "Parameters",
			parsecs: "Parsecs",
			pipeline: "Pipeline",
			players: "Players",
			ports: "Ports",
			protocols: "Protocols",
			reactors: "Reactors",
			sphere: "Sphere",
			spooler: "Spooler",
			stream: "Stream",
			switches: "Switches",
			table: "Table",
			targets: "Targets",
			throttle: "Throttle",
			tokens: "Tokens",
			torpedoes: "Torpedoes",
			tubes: "Tubes"
            //</sl:translate>
        };
</script>

<script type="text/javascript" src="https://js.rbxcdn.com/97bbdd6b901e1c791015f9c39e786455.js.gzip"></script>

<div id="InstallationInstructions" class="modalPopup blueAndWhite" style="display:none;overflow:hidden">
    <a id="CancelButton2" onclick="return Roblox.Client._onCancel();" class="ImageButton closeBtnCircle_35h ABCloseCircle"></a>
    <div style="padding-bottom:10px;text-align:center">
                            <img class="InstallInstructionsImage" modalwidth="597" delaysrc="http://images.rbxcdn.com/ed0d14e6d52d6aebb75371710c7e21c9.jpg" alt="Installation Instructions">
        <br><br>
    </div>
</div>


<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"><object id="robloxpluginobj" type="application/x-vnd-roblox-launcher"><p>You need Our Plugin for this.  Get the latest version from <a href="http://www.roblox.com/setup.roblox.com">here</a>.</p></object></div>
<iframe id="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>


<script type="text/javascript" src="https://js.rbxcdn.com/f01d0704a52a96a5c198c5097b6c70bc.js.gzip"></script>

<script type="text/javascript">
    Roblox.Client._skip = null;
    Roblox.Client._CLSID = '76D50904-6780-4c8b-8986-1A7EE0B1716D';
    Roblox.Client._installHost = 'setup.roblox.com';
    Roblox.Client.ImplementsProxy = true;
    Roblox.Client._silentModeEnabled = true;
    Roblox.Client._bringAppToFrontEnabled = false;

         Roblox.Client._installSuccess = function() { urchinTracker('InstallSuccess'); };
        
            if (window.chrome && window.location.hash == '#chromeInstall') {
                window.location.hash = '';
                var continuation = '(' + $.cookie('chromeInstall') + ')';
                $.cookie('chromeInstall', null);
                RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Play Location', 'User', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Play', 'User', 'Over13', 1]);$(function(){ RobloxEventManager.triggerEvent('rbx_evt_play_user', {age:'Over13',gender:'Male'});}); }; 
                Roblox.Client.ResumeTimer(eval(continuation));
            }
        

    $(function () {
        Roblox.Client.Resources = {
            //<sl:translate>
            here: "here",
            youNeedTheLatest: "You need Our Plugin for this.  Get the latest version from ",
            plugInInstallationFailed: "Plugin installation failed!",
            errorUpdating: "Error updating: "
            //</sl:translate>
        };
    });

</script>

<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer">
            <a href="" roblox-confirm-btn=""><span></span></a>
            <a href="" roblox-decline-btn=""><span></span></a>
        </div>
        <div class="ConfirmationModalFooter">
        
        </div>  
    </div>  
    <script type="text/javascript">
        var Roblox = Roblox || {};
        Roblox.GenericConfirmation = Roblox.GenericConfirmation || {};
        
        //<sl:translate>
        Roblox.GenericConfirmation.Resources = { yes: "Yes", No: "No" };
        //</sl:translate>
    </script>
</div>

    <img src="./ROBLOX.com_files/seg" width="1" height="1" style="display:none;">
<link rel="stylesheet" type="text/css" href="party.css">
<link rel="stylesheet" type="text/css" href="party_invite.css">
<link rel="stylesheet" type="text/css" href="party_leader.css">
<script type="text/javascript" src="js/Chat.js"></script>
<script type="text/javascript" src="js/party.js"></script>
<script type="text/javascript" src="js/blockUI.js"></script>
<script type="text/javascript" src="js/jquery.cookies.2.2.0.1.js"></script>
<script type="text/javascript" src="js/jquery-extensions.js"></script>




<span class="recent-place-name" style="display: inline; visibility: hidden; padding: 0px;">Base wars:The Land(since 2009) …</span><link rel="stylesheet" type="text/css" media="screen" href="chrome-extension://fcdjadjbdihbaodagojiomdljhjhjfho/css/atd.css"><iframe id="google_osd_static_frame_1860978028271" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe></body></html>