<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/main.php';
if (is_int((int)$_GET["id"]) && isset($_GET['id']))
  {
    $FindUser = $pdo->prepare('select * from users where userid = :uID');
	$FindUser->bindParam("uID", $_GET['id'], PDO::PARAM_INT);
    $FindUser->execute();
    $row = $FindUser->fetch(PDO::FETCH_ASSOC);
}elseif(!isset($_GET['id']) && isset($_SESSION['user'])){
	header("Location: /User.aspx?id=".$_SESSION['user']['id']);
}else{
	exit("error");
}
if(!$row)
{
  exit("user doesnt exist");
}
?>
<!DOCTYPE html>
<html xmlns:fb="https://www.facebook.com/2008/fbml">
<!-- MachineID: WEB300 -->
<head id="ctl00_Head1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/><title>
	<?php echo $row['username']; ?> - ROBLOX
</title>
<link rel="stylesheet" href="https://www.rb14.us.to/CSS/Base/CSS/main___1cacbba05e42ebf55ef7a6de7f5dd3f0_m.css"/>

<link rel="stylesheet" href="https://www.rb14.us.to/CSS/Base/CSS/page___6d7bcbdfd9dfa4d697c4e627e71f4fc1_m.css"/>
<link rel="icon" type="image/vnd.microsoft.icon" href="https://www.rb14.us.to/favicon.ico"/><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><meta http-equiv="Content-Language" content="en-us"/><meta name="author" content="ROBLOX Corporation"/><meta id="ctl00_metadescription" name="description" content="View ROBLOX's profile on ROBLOX.  ROBLOX is the place for free games online, where people like ROBLOX imagine, build, and share their creations with their friends in a kid-safe environment.  There are millions of free games on ROBLOX.  3 of them are ROBLOX's pics on ROBLOX for best free games.  ROBLOX is the creator of 27 free games.  Visit ROBLOX now to play ROBLOX's free games and discover thousands of others!"/><meta id="ctl00_metakeywords" name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    	<script type="text/javascript">

        var _gaq = _gaq || [];

		    _gaq.push(['_setAccount', 'UA-11419793-1']);
		    _gaq.push(['_setCampSourceKey', 'rbx_source']);
		    _gaq.push(['_setCampMediumKey', 'rbx_medium']);
		    _gaq.push(['_setCampContentKey', 'rbx_campaign']);
		        _gaq.push(['_setDomainName', 'rb14.us.to']);
		_gaq.push(['b._setAccount', 'UA-486632-1']);
		_gaq.push(['b._setCampSourceKey', 'rbx_source']);
		_gaq.push(['b._setCampMediumKey', 'rbx_medium']);
		_gaq.push(['b._setCampContentKey', 'rbx_campaign']);

		_gaq.push(['b._setDomainName', 'rb14.us.to']);
        
            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
            _gaq.push(['b._trackPageview']);    
        
        
        

		_gaq.push(['c._setAccount', 'UA-26810151-2']);
		_gaq.push(['c._setDomainName', 'rb14.us.to']);

		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();

	</script>
<div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer)\.roblox\.com|robloxlabs\.com)((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm"></div><script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/4.0/1/MicrosoftAjax.js"></script>
<script type="text/javascript">window.Sys || document.write("<script type='text/javascript' src='/js/Microsoft/MicrosoftAjax.js'><\/script>")</script>
<script type="text/javascript" src="https://rb14.us.to/rbxcdn_js/4c42bda98e20213d2da09f4953dc9332.js"></script>
<script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://rb14.us.to/rbxcdn_js/a2ff3787d1fd8d3c2492b5f5c5ec70b6.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://rb14.us.to/rbxcdn_js/4eb48eec34ca711d5a7b08a4291ac753.js';Roblox.config.paths['Pages.Messages'] = 'https://rb14.us.to/rbxcdn_js/e8cbac58ab4f0d8d4c707700c9f97630.js';Roblox.config.paths['Resources.Messages'] = 'https://rb14.us.to/rbxcdn_js/fb9cb43a34372a004b06425a1c69c9c4.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://rb14.us.to/rbxcdn_js/bbaeb48f3312bad4626e00c90746ffc0.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://rb14.us.to/rbxcdn_js/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = 'https://rb14.us.to/rbxcdn_js/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://rb14.us.to/rbxcdn_js/fbb86cf0752d23f389f983419d3085b4.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://rb14.us.to/rbxcdn_js/838ec9c8067ba6fd6793a8bdbdb48a5c.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://rb14.us.to/rbxcdn_js/f2697119678d0851cfaa6c2270a727ed.js';Roblox.config.paths['Widgets.SurveyModal'] = 'https://rb14.us.to/rbxcdn_js/d6e979598c460090eafb6d38231159f6.js';</script><script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script><script type="text/javascript" src="https://rb14.us.to/rbxcdn_js/a2144683b28c827b54bffdcff692386a.js"></script>

    <script type="text/javascript">
function Roblox_User_Top_728x90_RTP(estimate){rtp['/1015347/Roblox_User_Top_728x90'] = rp_valuation.estimate;}
var rtp = rtp || {};
oz_api="valuation";oz_site="9874/18868";oz_zone="58960";oz_ad_slot_size="728x90";oz_callback=Roblox_User_Top_728x90_RTP;
</script><script type="text/javascript" src="https://tap-cdn.rubiconproject.com/partner/scripts/rubicon/dorothy.js?pc=9874/18868"></script><script>

function Roblox_User_Middle_300x250_RTP(estimate){rtp['/1015347/Roblox_User_Middle_300x250'] = rp_valuation.estimate;}
var rtp = rtp || {};
oz_api="valuation";oz_site="9874/18868";oz_zone="58960";oz_ad_slot_size="300x250";oz_callback=Roblox_User_Middle_300x250_RTP;
</script><script type="text/javascript" src="https://tap-cdn.rubiconproject.com/partner/scripts/rubicon/dorothy.js?pc=9874/18868"></script><script>

    googletag.cmd.push(function() {
        Roblox = Roblox || {};
        Roblox.AdsHelper = Roblox.AdsHelper || {};
        Roblox.AdsHelper.slots = [];
        Roblox.AdsHelper.slots = Roblox.AdsHelper.slots || []; Roblox.AdsHelper.slots.push({slot:googletag.defineSlot("/1015347/Roblox_User_Top_728x90", [728, 90], "3136343132333530").addService(googletag.pubads()), id: "3136343132333530", path: "/1015347/Roblox_User_Top_728x90"});
Roblox.AdsHelper.slots = Roblox.AdsHelper.slots || []; Roblox.AdsHelper.slots.push({slot:googletag.defineSlot("/1015347/Roblox_User_Middle_300x250", [300, 250], "3531353939333530").addService(googletag.pubads()), id: "3531353939333530", path: "/1015347/Roblox_User_Middle_300x250"});

        for (var key in Roblox.AdsHelper.slots) {
            var slot = Roblox.AdsHelper.slots[key].slot;
            var id = Roblox.AdsHelper.slots[key].id;
            var path = Roblox.AdsHelper.slots[key].path;

                     slot.setTargeting('pos', path);
                                             slot.setTargeting('tier', rtp[path].tier);
            if (slot.renderEnded != "undefined") {
                (function(slot, id)
                {
                    slot.renderEndedOld = slot.renderEnded;
                    slot.renderEnded = function() {
                        slot.renderEndedOld();
                        if ($('#' + id + '.gutter').css('display') == "none") {
                            $(document).trigger("GuttersHidden");
                        }
                        if ($('#' + id + '.filmstrip').css('display') == "none") {
                            $(document).trigger("FilmStripHidden");
                        }
                    };
                }(slot, id));
            }
        }

        googletag.pubads().setTargeting("Age", "Unknown");
                    googletag.pubads().setTargeting("Env",  "Production");
                                                googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
    });
    </script>  
</head>
<body class="">

    <script type="text/javascript">Roblox.XsrfToken.setToken('SXwtL7rmnLT5');</script>
 
    <script type="text/javascript">
        if (top.location != self.location) {
            top.location = self.location.href;
        }
    </script>
  
<style type="text/css">
    
</style>
<form name="aspnetForm" method="post" action="https://www.rb14.us.to/user.aspx?ID=1" id="aspnetForm" class="nav-container no-gutter-ads">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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"/>
</div>


<script src="https://www.rb14.us.to/ScriptResource.axd?d=9m0YvDyK5Zjy8u9fetfcFPnckfsYXv8oXxQat_uhbJHr8w8yA4unksFVcxm0Gzk4CgjQDgJU60gJ4hk1mfqa5beSwiaZtDvlUyQ9TsN3D0aGcEpzVc9ufpHTyn9KGe55sAKCo_jB0ROVw08zmtfO9-IuKJFmK-wKJt6TnIz1pymgCoeWX5KBrNIz8ooT3wa23o9JW1FEyphoVdKX76mZEqjRdG2ac-mgb1vDEqzVnP2asEHP0kRDolVjAScOxLQfsL2MLbNMJek28-9UE1bAvWaP_FWdvnh_fBj7it5KhG4RcwpytikjyVKvnjkfgtEVyQpWp5OsSyZdzui6doge7VEPTcKZpf-FmJ_AAGTO5TGigSdF-4W7025W7N3AXlo8mm2Z56-XMjAgfDZKsvHRKe2ePZyr6z49Y2TsN9ZTwd_bMJDI0" type="text/javascript"></script>
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="38D9001F"/>
	<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value=""/>
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="ZNgOpb+DggtJzWoa5YD7XI71HOUn67I2UbxA6hYZV7CFyxONnNZ4mlJwcivo3n2qo5/Fqf5sSIj+xWNti98KtQFpl3VsPZmnhytuowqi7HqVDzhW6ZShEj6riiYQOcu+WJnFrGEtZHZtBt/zbDlDeJnSfmt0GM4NpoJTELfcBa97LoPkf+VBdQ5V8OeY57o990/PBvoc9U+8SXjUhdG9WUq6/2TDUCOm6NT3US5bJUzFMT4Dqq5TFaj+Zml4R9EGuAUg11OLICa6ZmNYpC7xTosQtYX+iWhfvhCq2G5q+gG8ovaao+wb5tv6rEzHEupOMx8zPYVCO6iUbtDOkmEjO5qoRirMEghXKJq3mvlns8tvndP2xtH+Zho8rsGtYWGmtz87v0HaT1uY8mkAbvza9tOCeajeqmwgd6BdU2Hdvog9wbDZTcZg6S9U9cFkWCq0h81z5Q=="/>
</div>
    <div id="fb-root">
    </div>
    
    
         
    
    
    
<?php
  pageBuilder::buildHeader();
?>

        <div id="navContent" class="nav-content"><div class="nav-content-inner">
    <div id="MasterContainer">
        

<script type="text/javascript">
$(function(){
    function trackReturns() {
	    function dayDiff(d1, d2) {
		    return Math.floor((d1-d2)/86400000);
	    }
        if (!localStorage) return; 

	    var cookieName = 'RBXReturn';
	    var cookieOptions = {expires:9001};
        var cookie = localStorage.getItem(cookieName) || {};

	    if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
	        localStorage.setItem(cookieName, { ts: new Date().toDateString() });
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
	
	    localStorage.setItem(cookieName, cookie);
    }
    
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



        <script type="text/javascript">Roblox.FixedUI.gutterAdsEnabled=false;</script>

        

        <div id="Container">
            
            
        </div>

		
    <div id="AdvertisingLeaderboard">
        
<div style="width: 728px; " class="adp-gpt-container">
    <span id="3136343132333530" class="GPTAd banner" data-js-adtype="gptAd">
    </span>
        <div class="ad-annotations " style="width: 728px">
            <span class="ad-identification">
                Advertisement
                    <span> - </span>
                    <a href="" class="UpsellAdButton" title="Click to learn how to remove ads!">Why am I seeing ads?</a>
            </span>
                <a class="BadAdButton" href="https://www.rb14.us.to/Ads/ReportAd.aspx" title="click to report an offensive ad">Report</a>
        </div>
    <script type="text/javascript">
        googletag.cmd.push(function () {
            if (typeof RobloxAds == "undefined" || typeof RobloxAds.showAdCallback == "undefined" || RobloxAds.showAdCallback("Roblox_User_Top_728x90")) {
                googletag.display("3136343132333530");
            }
        });
    </script>
</div>
    </div>

        
        
        <noscript><div class="SystemAlert"><div class="SystemAlertText">Please enable Javascript to use all the features on this site.</div></div></noscript>
        
        
        
        
        <div id="BodyWrapper">
            
            <div id="RepositionBody">
                <div id="Body" style="width:970px;">
                    
    <style type="text/css">
        #Body {
            padding: 10px;
        }
    </style>
    <div>
        
<div style="width:900px;height:30px;clear:both; display:none;">
    <span id="ctl00_cphRoblox_rbxHeaderPane_nameRegion" style="font-size:20px; font-weight:bold;">ROBLOX</span>
</div>




        
        <div style="clear: both; margin: 0; padding: 0;"></div>
        <div class="divider-right" style="width: 484px; float: left">
            

<h2 class="title">
    <span id="ctl00_cphRoblox_rbxUserPane_lUserRobloxURL"><?php echo $row['username']; ?>'s Profile</span></h2>
<div class="divider-bottom" style="position: relative;z-index:3;padding-bottom: 20px">
    <div style="width: 100%">
        <div id="ctl00_cphRoblox_rbxUserPane_onlineStatusRow">
            <div style="text-align: center;">
                
                <span id="ctl00_cphRoblox_rbxUserPane_lUserOnlineStatus" class="UserOfflineMessage">[ Offline ]</span>
                
            </div>
        </div>
        <div>
            <div>
                <div class="UserPaneContainer">
                    <div style="margin-bottom: 10px;">
                        
                    </div>
                        

<div id="UserAvatar" class="thumbnail-holder" data-3d-thumbs-enabled data-url="https://www.rb14.us.to/thumbnail/user-avatar?userId=1&amp;thumbnailFormatId=124&amp;width=352&amp;height=352" style="width:352px; height:352px;">
    <span class="thumbnail-span" data-3d-url="/avatar-thumbnail-3d/json?userId=1" data-js-files="https://rb14.us.to/rbxcdn_js/2cdabe2b5b7eb87399a8e9f18dd7ea05.js"><img alt="<?php echo $row['username']; ?>" class="" src="/Render.png"/></span>
        <img class="user-avatar-overlay-image" src="https://rb14.us.to/rbxcdn_img/bf448d2ee7f7c482b345427936c128a3.png" alt=""/>
    <span class="enable-three-dee btn-control btn-control-small"></span>
</div>


                    <br/>
                    
                    

<div class="UserBlurb linkify" style="margin-top: 10px; overflow-y: auto; max-height: 450px; ">
    Looking to talk directly to ROBLOX? Send a tweet @DavidBaszucki our CEO.
</div>
<div id="ProfileButtons" style="margin:10px auto;">
    
            <a id="FriendButton" class="btn-control btn-control-large disabled">Send Friend Request</a>
        
    <div class="SendMessageProfileBtnDiv">
        <a id="MessageButton" style="margin:0 5px" class="btn-control btn-control-large " href="https://www.rb14.us.to/My/NewMessage.aspx?RecipientID=1">Send Message</a>
    </div>
    
    <div class="clear"></div>
    <div style="display:none" class="status-error"></div>
    <script type="text/javascript">
        function hideDropdowns() {
            $('.GrayDropdown .Button.Active').removeClass('Active').siblings('.Menu').hide();
        }
        function setProfileButtonsWidth() {
            $('#ProfileButtons').width($('#FriendButton').outerWidth() + $('#MessageButton').outerWidth() + $('#MoreButton').outerWidth() + $('#FollowButton').outerWidth() + 22);
        }

        setProfileButtonsWidth();
        $('.GrayDropdown .Button').click(function () {
            var show = !$(this).hasClass('Active');
            hideDropdowns();
            if (show) {
                $(this).addClass('Active').siblings('.Menu').show();
            }

            return false;
        });
        $(document).click(function () {
            hideDropdowns();
        });
        $('#MoreButton [original-title]').tipsy();
        var friendRequestButton = $(".friend-request-button");
        
            friendRequestButton.click(function () { window.location = "/Login/Signup.aspx"; });
        
    </script>
</div>

                    <div class="ProfileAlertPanel" style="display: none; margin: 15px auto 0px auto; width: 205px;">
                        
                        <br/>
                    </div>
                    <div style="margin-right: 20px">
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

            



<style>
.statsLabel { font-weight:bold; width:200px; text-align:right; padding-right:10px;}
.statsValue { font-weight:normal; width:200px; text-align:left;}
.statsTable { width:400px; }
</style>
<h2 class="title"><span>Statistics</span></h2>

<div class="divider-bottom" style="padding-bottom: 20px">
<table class="statsTable">
    <tr>
        <td class="statsLabel"><acronym title="How many friends this user has.">Friends</acronym>:</td>
        <td class="statsValue"><span id="ctl00_cphRoblox_rbxUserStatisticsPane_lFriendsStatistics">0</span></td>
                
        <td class="statsLabel"><acronym title="The number of times this user's place has been visited.">Place Visits</acronym>:</td>
        <td class="statsValue"><span id="ctl00_cphRoblox_rbxUserStatisticsPane_lPlaceVisitsStatistics" class="notranslate">25,420,222</span></td>
    </tr>
    <tr>
        <td class="statsLabel"><acronym title="The number of times this user's character has destroyed another user's character in-game.">Knockouts</acronym>:</td>
        <td class="statsValue"><span id="ctl00_cphRoblox_rbxUserStatisticsPane_lKillsStatistics" class="notranslate"><?php echo $row['KOs']; ?></span></td>

        <td class="statsLabel"><acronym title="The number of posts this user has made to the ROBLOX forum.">Forum Posts</acronym>:</td>
        <td class="statsValue"><span id="ctl00_cphRoblox_rbxUserStatisticsPane_lForumPostsStatistics" class="notranslate">289</span></td>
    </tr>
    <tr>
    </tr>
    <tr>
        <td class="statsLabel"><acronym title="How many followers this user has.">Followers</acronym>:</td>
        <td class="statsValue"><span id="ctl00_cphRoblox_rbxUserStatisticsPane_lFollowersStatistics">32,591</span></td>
        
    </tr>
</table>    
</div>
            

<div style="padding-bottom: 20px">
    <div>
        <h2 class="title" style="display:block;float: left;">
            <span class="notranslate">ROBLOX</span>'s Sets
        </h2>
        <a data-js-my-button href class="btn-small btn-neutral" id="ToggleBetweenOwnedSubscribedSets" style="float: right; margin-right: 20px; margin-top: 25px" onclick="Roblox.SetsPaneObject.toggleBetweenSetsOwnedSubscribed();return false;">View Subscribed<span class="btn-text" id="SetsToggleSpan">View Subscribed</span></a>
        <div class="clear"></div>
    </div>
    <div id="OwnedSetsContainerDiv" style="padding-bottom:0;">
        <div id="SetsItemContainer" style="margin-bottom: 30px; margin-left: 15px"></div>
        <div style="clear:both;"></div>
        <div class="SetsPager_Container" style="position: relative">
            <div id="SetsPagerContainer"></div>
        </div>
    </div>
    <div id="SubscribedSetsContainerDiv" style="display:none; padding-bottom: 0px">
        <div id="SubscribedSetsItemContainer" style="margin-bottom: 30px; margin-left: 15px"></div>
        <div style="clear:both;"></div>
        <div class="SetsPager_Container" style="position: relative">
            <div id="SubscribedSetsPagerContainer"></div>
        </div>
    </div>
    
    <div id="SetsPaneItemTemplate" style="display:none;">
        <div class="AssetThumbnail">
            <img class="$ImageAssetID"></img>
        </div>
        <div class="AssetDetails">
            <div class="AssetName notranslate">
                <a href="https://www.rb14.us.to/My/Sets.aspx?id=$ID">$Name</a>
            </div>
            <div class="AssetCreator">
                <span class="Label">Creator:&nbsp;</span>
                <span class="Detail">
                    <a href="https://www.rb14.us.to/User.aspx?id=$CreatorUserID" class="notranslate">$CreatorName</a>
                </span>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    if (typeof Roblox === "undefined") {
        Roblox = {};
    }

    $(function () {
        Roblox.SetsPaneObject = Roblox.SetsPane('https://www.rb14.us.to/', 1);

        var options = { Paging_PageNumbers_AreLinks: false };
        Roblox.OwnedSetsJSDataPager = new DataPager(5, 9, 'SetsItemContainer', 'SetsPagerContainer',
            Roblox.SetsPaneObject.getSetsPaged, Roblox.SetsPaneObject.ownedItemFormatter, Roblox.SetsPaneObject.getSetAssetImageThumbnail, options
        );
        Roblox.SubscribedSetsJSDataPager = new DataPager(0, 9, 'SubscribedSetsItemContainer', 'SubscribedSetsPagerContainer',
            Roblox.SetsPaneObject.getSubscribedSetsPaged, Roblox.SetsPaneObject.subscribedItemFormatter, Roblox.SetsPaneObject.getSetAssetImageThumbnail, options
        );
    });
</script>

            
        </div>
        <div class="divider-left" style="width: 484px; float: left; position: relative; left: -1px">
            <div class="divider-bottom" style="padding-bottom: 20px; padding-left: 20px">
                <h2 class="title" style="float: left">
                    <span>Active Places</span>
                </h2>
                
                <div id="UserPlacesPane">
                    <div id="ctl00_cphRoblox_rbxUserPlacesPane_pnlUserPlaces">
	
<div id="UserPlaces" style="overflow: hidden">

    <div id="accordion" class="accordion">
    
        <div class="accord-section accord-section-open">
            <div class="accord-header notranslate">
                <div class="accord-arrow">&#x25b6;</div>
			    Welcome to ROBLOX Building
            </div>
            <div class="accord-content notranslate">
			    

<div class="Place">
    
    <div class="PlayStatus">
        
<span class="PlaceAccessIndicator">
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl00_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyLocked" style="display: none">
        <a class="iLocked tooltip" title="Friends Only"></a><span class="invisible">&nbsp;Friends-only</span>
	</span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl00_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyUnlocked" style="display: none">
        <a class="iUnlocked tooltip" title="Friends Only - You are friends"></a><span class="invisible">&nbsp;Friends-only: You are friends</span>
	</span>
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl00_rbxPlatform_rbxPlaceAccessIndicator_ExpiredSelf" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">&nbsp;Your Outrageous Builders Club, Turbo Builders Club, or Builders Club membership has expired, so you can
        only have one open place. Your places will not be deleted, and you can <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl00_rbxPlatform_rbxPlaceAccessIndicator_RBXLDownloadLink">download the RBXL here.</a> To unlock all of your places,
        please <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">re-order Outrageous Builders Club, Turbo Builders Club, or Builders
            Club </a>.<br/></span>
    </span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl00_rbxPlatform_rbxPlaceAccessIndicator_ExpiredOther" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">This place is locked because the creator's <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">Builders
            Club / Turbo Builders Club / Outrageous Builders Club </a>has expired.
		</span>
	</span>	
</span>
	
    </div>
    <br>
    <div class="Statistics" style="color: #999; font-size: 14px; letter-spacing: normal">
        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl00_rbxPlatform_lStatistics">Visited 18,063,212 times (33,315 last week)</span></div>
    <div class="Thumbnail" style="width:414px;overflow:hidden;position: relative;">
        <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl00_rbxPlatform_rbxPlaceThumbnail" title="Welcome to ROBLOX Building" href="https://www.rb14.us.to/games/refer?PlaceId=41324860&amp;PageType=Profile&amp;Position=1" style="display:inline-block;height:230px;width:420px;cursor:pointer;"><img src="https://t5.rbxcdn.com/46ebcb87aa98987b1c3f86458e853096" height="230" width="420" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Welcome to ROBLOX Building"/></a>
        
    </div>
    <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl00_rbxPlatform_pDescription">
		
        <div class="Description linkify" style="overflow-y: auto; max-height: 160px; font-family: arial; color: #666; font-size: 12px;">
            <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl00_rbxPlatform_lDescription">What will you build?</span>
        </div>
    
	</div>
    <div class="PlayOptions" style="display:block">
        
        <div class="VisitButtonContainer" data-item-id="41324860">
            
        <div class="VisitButtonsLeft VisitButtonPlayAnyBCLevel Centered">
            
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl00_rbxPlatform_rbxVisitButtons_MultiplayerVisitButton" data-action="play" class="VisitButton VisitButtonPlay" placeid="41324860" data-is-membership-level-ok="true">
                <a class="btn-medium btn-primary">Play</a>
            </div>  
            
            
            
        </div>
    

<script type="text/javascript">
    var play_placeId = 41324860;
    function redirectPlaceLauncherToLogin() {
        location.href = "/login/default.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function redirectPlaceLauncherToRegister() {
        location.href = "/login/NewAge.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function fireEventAction(action) {
        RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
    }
</script>


<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
 	<div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://rb14.us.to/rbxcdn_img/ae345c0d59b00329758518edc104d573.png"/>
            <div id="BCMessageDiv" class="BCMessage Message">
                Builders Club membership is required to play in this place.
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="https://www.rb14.us.to/Upgrades/BuildersClubMemberships.aspx" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>
 

<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>  
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a> 
        </div>  
    </div>
</div>



        </div>
    </div>
</div>

			    
            </div>
        </div>
		
        <div class="accord-section ">
            <div class="accord-header notranslate">
                <div class="accord-arrow">&#x25b6;</div>
			    Building With Friends
            </div>
            <div class="accord-content notranslate">
			    

<div class="Place">
    
    <div class="PlayStatus">
        
<span class="PlaceAccessIndicator">
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl01_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyLocked" style="display: none">
        <a class="iLocked tooltip" title="Friends Only"></a><span class="invisible">&nbsp;Friends-only</span>
	</span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl01_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyUnlocked" style="display: none">
        <a class="iUnlocked tooltip" title="Friends Only - You are friends"></a><span class="invisible">&nbsp;Friends-only: You are friends</span>
	</span>
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl01_rbxPlatform_rbxPlaceAccessIndicator_ExpiredSelf" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">&nbsp;Your Outrageous Builders Club, Turbo Builders Club, or Builders Club membership has expired, so you can
        only have one open place. Your places will not be deleted, and you can <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl01_rbxPlatform_rbxPlaceAccessIndicator_RBXLDownloadLink">download the RBXL here.</a> To unlock all of your places,
        please <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">re-order Outrageous Builders Club, Turbo Builders Club, or Builders
            Club </a>.<br/></span>
    </span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl01_rbxPlatform_rbxPlaceAccessIndicator_ExpiredOther" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">This place is locked because the creator's <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">Builders
            Club / Turbo Builders Club / Outrageous Builders Club </a>has expired.
		</span>
	</span>	
</span>
	
    </div>
    <br>
    <div class="Statistics" style="color: #999; font-size: 14px; letter-spacing: normal">
        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl01_rbxPlatform_lStatistics">Visited 121,610 times (99 last week)</span></div>
    <div class="Thumbnail" style="width:414px;overflow:hidden;position: relative;">
        <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl01_rbxPlatform_rbxPlaceThumbnail" title="Building With Friends" href="https://www.rb14.us.to/games/refer?PlaceId=16184658&amp;PageType=Profile&amp;Position=2" style="display:inline-block;height:230px;width:420px;cursor:pointer;"><img src="https://t4.rbxcdn.com/41ad675f778e85df1b309d3b3341d69a" height="230" width="420" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Building With Friends"/></a>
        
    </div>
    
    <div class="PlayOptions" style="display:block">
        
        <div class="VisitButtonContainer" data-item-id="16184658">
            
        <div class="VisitButtonsLeft VisitButtonPlayAnyBCLevel ">
            
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl01_rbxPlatform_rbxVisitButtons_MultiplayerVisitButton" data-action="play" class="VisitButton VisitButtonPlay" placeid="16184658" data-is-membership-level-ok="true">
                <a class="btn-medium btn-primary">Play</a>
            </div>  
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl01_rbxPlatform_rbxVisitButtons_EditButton" class="VisitButton VisitButtonEdit" placeid="16184658" data-allowupload="False" data-universeid="0">
                <a title="Open in Studio Mode" class="btn-medium btn-primary tooltip">Edit</a>
            </div>
            
        </div>
    

<script type="text/javascript">
    var play_placeId = 16184658;
    function redirectPlaceLauncherToLogin() {
        location.href = "/login/default.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function redirectPlaceLauncherToRegister() {
        location.href = "/login/NewAge.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function fireEventAction(action) {
        RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
    }
</script>


<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
 	<div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://rb14.us.to/rbxcdn_img/ae345c0d59b00329758518edc104d573.png"/>
            <div id="BCMessageDiv" class="BCMessage Message">
                Builders Club membership is required to play in this place.
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="https://www.rb14.us.to/Upgrades/BuildersClubMemberships.aspx" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>
 

<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>  
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a> 
        </div>  
    </div>
</div>



        </div>
    </div>
</div>

			    
            </div>
        </div>
		
        <div class="accord-section ">
            <div class="accord-header notranslate">
                <div class="accord-arrow">&#x25b6;</div>
			    Happy Home in Robloxia
            </div>
            <div class="accord-content notranslate">
			    

<div class="Place">
    
    <div class="PlayStatus">
        
<span class="PlaceAccessIndicator">
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl02_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyLocked" style="display: none">
        <a class="iLocked tooltip" title="Friends Only"></a><span class="invisible">&nbsp;Friends-only</span>
	</span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl02_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyUnlocked" style="display: none">
        <a class="iUnlocked tooltip" title="Friends Only - You are friends"></a><span class="invisible">&nbsp;Friends-only: You are friends</span>
	</span>
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl02_rbxPlatform_rbxPlaceAccessIndicator_ExpiredSelf" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">&nbsp;Your Outrageous Builders Club, Turbo Builders Club, or Builders Club membership has expired, so you can
        only have one open place. Your places will not be deleted, and you can <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl02_rbxPlatform_rbxPlaceAccessIndicator_RBXLDownloadLink">download the RBXL here.</a> To unlock all of your places,
        please <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">re-order Outrageous Builders Club, Turbo Builders Club, or Builders
            Club </a>.<br/></span>
    </span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl02_rbxPlatform_rbxPlaceAccessIndicator_ExpiredOther" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">This place is locked because the creator's <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">Builders
            Club / Turbo Builders Club / Outrageous Builders Club </a>has expired.
		</span>
	</span>	
</span>
	
    </div>
    <br>
    <div class="Statistics" style="color: #999; font-size: 14px; letter-spacing: normal">
        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl02_rbxPlatform_lStatistics">Visited 300,423 times (646 last week)</span></div>
    <div class="Thumbnail" style="width:414px;overflow:hidden;position: relative;">
        <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl02_rbxPlatform_rbxPlaceThumbnail" title="Happy Home in Robloxia" href="https://www.rb14.us.to/games/refer?PlaceId=65033&amp;PageType=Profile&amp;Position=3" style="display:inline-block;height:230px;width:420px;cursor:pointer;"><img src="https://t6.rbxcdn.com/b7f32ca28dbec932acd8e7f4473fc0d4" height="230" width="420" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Happy Home in Robloxia"/></a>
        
    </div>
    <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl02_rbxPlatform_pDescription">
		
        <div class="Description linkify" style="overflow-y: auto; max-height: 160px; font-family: arial; color: #666; font-size: 12px;">
            <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl02_rbxPlatform_lDescription">A nice peaceful level with a starting house and a car. Hop in your car and explore the world! Insert furniture into your house! Start a garden! Add houses for friends! Grow your starting level into a huge city! Spice your game up with some hilarious weapons! A police station! A bank! A mountain lair for a criminal mastermind! Your imagination is the limit! Welcome to ROBLOX!</span>
        </div>
    
	</div>
    <div class="PlayOptions" style="display:block">
        
        <div class="VisitButtonContainer" data-item-id="65033">
            
        <div class="VisitButtonsLeft VisitButtonPlayAnyBCLevel ">
            
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl02_rbxPlatform_rbxVisitButtons_MultiplayerVisitButton" data-action="play" class="VisitButton VisitButtonPlay" placeid="65033" data-is-membership-level-ok="true">
                <a class="btn-medium btn-primary">Play</a>
            </div>  
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl02_rbxPlatform_rbxVisitButtons_EditButton" class="VisitButton VisitButtonEdit" placeid="65033" data-allowupload="False" data-universeid="0">
                <a title="Open in Studio Mode" class="btn-medium btn-primary tooltip">Edit</a>
            </div>
            
        </div>
    

<script type="text/javascript">
    var play_placeId = 65033;
    function redirectPlaceLauncherToLogin() {
        location.href = "/login/default.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function redirectPlaceLauncherToRegister() {
        location.href = "/login/NewAge.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function fireEventAction(action) {
        RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
    }
</script>


<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
 	<div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://rb14.us.to/rbxcdn_img/ae345c0d59b00329758518edc104d573.png"/>
            <div id="BCMessageDiv" class="BCMessage Message">
                Builders Club membership is required to play in this place.
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="https://www.rb14.us.to/Upgrades/BuildersClubMemberships.aspx" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>
 

<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>  
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a> 
        </div>  
    </div>
</div>



        </div>
    </div>
</div>

			    
            </div>
        </div>
		
        <div class="accord-section ">
            <div class="accord-header notranslate">
                <div class="accord-arrow">&#x25b6;</div>
			    Glass Houses
            </div>
            <div class="accord-content notranslate">
			    

<div class="Place">
    
    <div class="PlayStatus">
        
<span class="PlaceAccessIndicator">
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl03_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyLocked" style="display: none">
        <a class="iLocked tooltip" title="Friends Only"></a><span class="invisible">&nbsp;Friends-only</span>
	</span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl03_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyUnlocked" style="display: none">
        <a class="iUnlocked tooltip" title="Friends Only - You are friends"></a><span class="invisible">&nbsp;Friends-only: You are friends</span>
	</span>
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl03_rbxPlatform_rbxPlaceAccessIndicator_ExpiredSelf" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">&nbsp;Your Outrageous Builders Club, Turbo Builders Club, or Builders Club membership has expired, so you can
        only have one open place. Your places will not be deleted, and you can <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl03_rbxPlatform_rbxPlaceAccessIndicator_RBXLDownloadLink">download the RBXL here.</a> To unlock all of your places,
        please <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">re-order Outrageous Builders Club, Turbo Builders Club, or Builders
            Club </a>.<br/></span>
    </span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl03_rbxPlatform_rbxPlaceAccessIndicator_ExpiredOther" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">This place is locked because the creator's <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">Builders
            Club / Turbo Builders Club / Outrageous Builders Club </a>has expired.
		</span>
	</span>	
</span>
	
    </div>
    <br>
    <div class="Statistics" style="color: #999; font-size: 14px; letter-spacing: normal">
        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl03_rbxPlatform_lStatistics">Visited 339,377 times (98 last week)</span></div>
    <div class="Thumbnail" style="width:414px;overflow:hidden;position: relative;">
        <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl03_rbxPlatform_rbxPlaceThumbnail" title="Glass Houses" href="https://www.rb14.us.to/games/refer?PlaceId=33913&amp;PageType=Profile&amp;Position=4" style="display:inline-block;height:230px;width:420px;cursor:pointer;"><img src="https://t2.rbxcdn.com/49aa7a83313613f1b8c88dc84015d9b6" height="230" width="420" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Glass Houses"/></a>
        
    </div>
    
    <div class="PlayOptions" style="display:block">
        
        <div class="VisitButtonContainer" data-item-id="33913">
            
        <div class="VisitButtonsLeft VisitButtonPlayAnyBCLevel ">
            
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl03_rbxPlatform_rbxVisitButtons_MultiplayerVisitButton" data-action="play" class="VisitButton VisitButtonPlay" placeid="33913" data-is-membership-level-ok="true">
                <a class="btn-medium btn-primary">Play</a>
            </div>  
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl03_rbxPlatform_rbxVisitButtons_EditButton" class="VisitButton VisitButtonEdit" placeid="33913" data-allowupload="False" data-universeid="0">
                <a title="Open in Studio Mode" class="btn-medium btn-primary tooltip">Edit</a>
            </div>
            
        </div>
    

<script type="text/javascript">
    var play_placeId = 33913;
    function redirectPlaceLauncherToLogin() {
        location.href = "/login/default.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function redirectPlaceLauncherToRegister() {
        location.href = "/login/NewAge.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function fireEventAction(action) {
        RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
    }
</script>


<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
 	<div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://rb14.us.to/rbxcdn_img/ae345c0d59b00329758518edc104d573.png"/>
            <div id="BCMessageDiv" class="BCMessage Message">
                Builders Club membership is required to play in this place.
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="https://www.rb14.us.to/Upgrades/BuildersClubMemberships.aspx" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>
 

<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>  
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a> 
        </div>  
    </div>
</div>



        </div>
    </div>
</div>

			    
            </div>
        </div>
		
        <div class="accord-section ">
            <div class="accord-header notranslate">
                <div class="accord-arrow">&#x25b6;</div>
			    Rocket Arena
            </div>
            <div class="accord-content notranslate">
			    

<div class="Place">
    
    <div class="PlayStatus">
        
<span class="PlaceAccessIndicator">
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl04_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyLocked" style="display: none">
        <a class="iLocked tooltip" title="Friends Only"></a><span class="invisible">&nbsp;Friends-only</span>
	</span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl04_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyUnlocked" style="display: none">
        <a class="iUnlocked tooltip" title="Friends Only - You are friends"></a><span class="invisible">&nbsp;Friends-only: You are friends</span>
	</span>
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl04_rbxPlatform_rbxPlaceAccessIndicator_ExpiredSelf" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">&nbsp;Your Outrageous Builders Club, Turbo Builders Club, or Builders Club membership has expired, so you can
        only have one open place. Your places will not be deleted, and you can <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl04_rbxPlatform_rbxPlaceAccessIndicator_RBXLDownloadLink">download the RBXL here.</a> To unlock all of your places,
        please <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">re-order Outrageous Builders Club, Turbo Builders Club, or Builders
            Club </a>.<br/></span>
    </span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl04_rbxPlatform_rbxPlaceAccessIndicator_ExpiredOther" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">This place is locked because the creator's <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">Builders
            Club / Turbo Builders Club / Outrageous Builders Club </a>has expired.
		</span>
	</span>	
</span>
	
    </div>
    <br>
    <div class="Statistics" style="color: #999; font-size: 14px; letter-spacing: normal">
        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl04_rbxPlatform_lStatistics">Visited 1,972,197 times (464 last week)</span></div>
    <div class="Thumbnail" style="width:414px;overflow:hidden;position: relative;">
        <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl04_rbxPlatform_rbxPlaceThumbnail" title="Rocket Arena" href="https://www.rb14.us.to/games/refer?PlaceId=25415&amp;PageType=Profile&amp;Position=5" style="display:inline-block;height:230px;width:420px;cursor:pointer;"><img src="https://t3.rbxcdn.com/5f8b387b0c59f41fcdd168cfc2c3abb8" height="230" width="420" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Rocket Arena"/></a>
        
    </div>
    <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl04_rbxPlatform_pDescription">
		
        <div class="Description linkify" style="overflow-y: auto; max-height: 160px; font-family: arial; color: #666; font-size: 12px;">
            <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl04_rbxPlatform_lDescription">This map goes back to the basics: rockets, jetboots, and blowing up bridges. Out-maneuver your foes using your jetboots, cut off their escape by nuking the bridges, and rain doom down upon them using a rapid-fire rocket launcher. But don&#39;t fall in the lava - ouch!</span>
        </div>
    
	</div>
    <div class="PlayOptions" style="display:block">
        
        <div class="VisitButtonContainer" data-item-id="25415">
            
        <div class="VisitButtonsLeft VisitButtonPlayAnyBCLevel ">
            
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl04_rbxPlatform_rbxVisitButtons_MultiplayerVisitButton" data-action="play" class="VisitButton VisitButtonPlay" placeid="25415" data-is-membership-level-ok="true">
                <a class="btn-medium btn-primary">Play</a>
            </div>  
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl04_rbxPlatform_rbxVisitButtons_EditButton" class="VisitButton VisitButtonEdit" placeid="25415" data-allowupload="False" data-universeid="0">
                <a title="Open in Studio Mode" class="btn-medium btn-primary tooltip">Edit</a>
            </div>
            
        </div>
    

<script type="text/javascript">
    var play_placeId = 25415;
    function redirectPlaceLauncherToLogin() {
        location.href = "/login/default.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function redirectPlaceLauncherToRegister() {
        location.href = "/login/NewAge.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function fireEventAction(action) {
        RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
    }
</script>


<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
 	<div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://rb14.us.to/rbxcdn_img/ae345c0d59b00329758518edc104d573.png"/>
            <div id="BCMessageDiv" class="BCMessage Message">
                Builders Club membership is required to play in this place.
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="https://www.rb14.us.to/Upgrades/BuildersClubMemberships.aspx" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>
 

<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>  
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a> 
        </div>  
    </div>
</div>



        </div>
    </div>
</div>

			    
            </div>
        </div>
		
        <div class="accord-section ">
            <div class="accord-header notranslate">
                <div class="accord-arrow">&#x25b6;</div>
			    Community Construction
            </div>
            <div class="accord-content notranslate">
			    

<div class="Place">
    
    <div class="PlayStatus">
        
<span class="PlaceAccessIndicator">
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl05_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyLocked" style="display: none">
        <a class="iLocked tooltip" title="Friends Only"></a><span class="invisible">&nbsp;Friends-only</span>
	</span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl05_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyUnlocked" style="display: none">
        <a class="iUnlocked tooltip" title="Friends Only - You are friends"></a><span class="invisible">&nbsp;Friends-only: You are friends</span>
	</span>
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl05_rbxPlatform_rbxPlaceAccessIndicator_ExpiredSelf" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">&nbsp;Your Outrageous Builders Club, Turbo Builders Club, or Builders Club membership has expired, so you can
        only have one open place. Your places will not be deleted, and you can <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl05_rbxPlatform_rbxPlaceAccessIndicator_RBXLDownloadLink">download the RBXL here.</a> To unlock all of your places,
        please <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">re-order Outrageous Builders Club, Turbo Builders Club, or Builders
            Club </a>.<br/></span>
    </span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl05_rbxPlatform_rbxPlaceAccessIndicator_ExpiredOther" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">This place is locked because the creator's <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">Builders
            Club / Turbo Builders Club / Outrageous Builders Club </a>has expired.
		</span>
	</span>	
</span>
	
    </div>
    <br>
    <div class="Statistics" style="color: #999; font-size: 14px; letter-spacing: normal">
        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl05_rbxPlatform_lStatistics">Visited 95,233 times (42 last week)</span></div>
    <div class="Thumbnail" style="width:414px;overflow:hidden;position: relative;">
        <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl05_rbxPlatform_rbxPlaceThumbnail" title="Community Construction" href="https://www.rb14.us.to/games/refer?PlaceId=3271&amp;PageType=Profile&amp;Position=6" style="display:inline-block;height:230px;width:420px;cursor:pointer;"><img src="https://t7.rbxcdn.com/b7ae27753bc56fb8c3cf4c588be7d998" height="230" width="420" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Community Construction"/></a>
        
    </div>
    
    <div class="PlayOptions" style="display:block">
        
        <div class="VisitButtonContainer" data-item-id="3271">
            
        <div class="VisitButtonsLeft VisitButtonPlayAnyBCLevel ">
            
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl05_rbxPlatform_rbxVisitButtons_MultiplayerVisitButton" data-action="play" class="VisitButton VisitButtonPlay" placeid="3271" data-is-membership-level-ok="true">
                <a class="btn-medium btn-primary">Play</a>
            </div>  
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl05_rbxPlatform_rbxVisitButtons_EditButton" class="VisitButton VisitButtonEdit" placeid="3271" data-allowupload="False" data-universeid="0">
                <a title="Open in Studio Mode" class="btn-medium btn-primary tooltip">Edit</a>
            </div>
            
        </div>
    

<script type="text/javascript">
    var play_placeId = 3271;
    function redirectPlaceLauncherToLogin() {
        location.href = "/login/default.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function redirectPlaceLauncherToRegister() {
        location.href = "/login/NewAge.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function fireEventAction(action) {
        RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
    }
</script>


<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
 	<div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://rb14.us.to/rbxcdn_img/ae345c0d59b00329758518edc104d573.png"/>
            <div id="BCMessageDiv" class="BCMessage Message">
                Builders Club membership is required to play in this place.
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="https://www.rb14.us.to/Upgrades/BuildersClubMemberships.aspx" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>
 

<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>  
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a> 
        </div>  
    </div>
</div>



        </div>
    </div>
</div>

			    
            </div>
        </div>
		
        <div class="accord-section ">
            <div class="accord-header notranslate">
                <div class="accord-arrow">&#x25b6;</div>
			    Temple of the Ninja Masters!
            </div>
            <div class="accord-content notranslate">
			    

<div class="Place">
    
    <div class="PlayStatus">
        
<span class="PlaceAccessIndicator">
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl06_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyLocked" style="display: none">
        <a class="iLocked tooltip" title="Friends Only"></a><span class="invisible">&nbsp;Friends-only</span>
	</span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl06_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyUnlocked" style="display: none">
        <a class="iUnlocked tooltip" title="Friends Only - You are friends"></a><span class="invisible">&nbsp;Friends-only: You are friends</span>
	</span>
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl06_rbxPlatform_rbxPlaceAccessIndicator_ExpiredSelf" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">&nbsp;Your Outrageous Builders Club, Turbo Builders Club, or Builders Club membership has expired, so you can
        only have one open place. Your places will not be deleted, and you can <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl06_rbxPlatform_rbxPlaceAccessIndicator_RBXLDownloadLink">download the RBXL here.</a> To unlock all of your places,
        please <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">re-order Outrageous Builders Club, Turbo Builders Club, or Builders
            Club </a>.<br/></span>
    </span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl06_rbxPlatform_rbxPlaceAccessIndicator_ExpiredOther" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">This place is locked because the creator's <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">Builders
            Club / Turbo Builders Club / Outrageous Builders Club </a>has expired.
		</span>
	</span>	
</span>
	
    </div>
    <br>
    <div class="Statistics" style="color: #999; font-size: 14px; letter-spacing: normal">
        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl06_rbxPlatform_lStatistics">Visited 430,178 times (711 last week)</span></div>
    <div class="Thumbnail" style="width:414px;overflow:hidden;position: relative;">
        <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl06_rbxPlatform_rbxPlaceThumbnail" title="Temple of the Ninja Masters!" href="https://www.rb14.us.to/games/refer?PlaceId=45778683&amp;PageType=Profile&amp;Position=7" style="display:inline-block;height:230px;width:420px;cursor:pointer;"><img src="https://t1.rbxcdn.com/b0e1bcbd006c6233b6bf6bdb4815034c" height="230" width="420" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Temple of the Ninja Masters!"/></a>
        
    </div>
    <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl06_rbxPlatform_pDescription">
		
        <div class="Description linkify" style="overflow-y: auto; max-height: 160px; font-family: arial; color: #666; font-size: 12px;">
            <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl06_rbxPlatform_lDescription">[Challenge Mode: https://www.rb14.us.to/Temple-of-the-Ninja-Masters-Challenge-Mode-item?id=45778718]

Alone at the edge of the world sits a sacred temple, guarded by 4 powerful Ninja Masters, each given control of one of the elements.  Many brave and powerful warriors have attempted to plunder the treasures of this temple, but all who have attempted it have failed.  Until nao.  Can you and your crew of the world&#39;s most resourceful pirates stand against the might of the Ninja Masters?  Only time will tell.</span>
        </div>
    
	</div>
    <div class="PlayOptions" style="display:block">
        
        <div class="VisitButtonContainer" data-item-id="45778683">
            
        <div class="VisitButtonsLeft VisitButtonPlayAnyBCLevel Centered">
            
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl06_rbxPlatform_rbxVisitButtons_MultiplayerVisitButton" data-action="play" class="VisitButton VisitButtonPlay" placeid="45778683" data-is-membership-level-ok="true">
                <a class="btn-medium btn-primary">Play</a>
            </div>  
            
            
            
        </div>
    

<script type="text/javascript">
    var play_placeId = 45778683;
    function redirectPlaceLauncherToLogin() {
        location.href = "/login/default.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function redirectPlaceLauncherToRegister() {
        location.href = "/login/NewAge.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function fireEventAction(action) {
        RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
    }
</script>


<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
 	<div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://rb14.us.to/rbxcdn_img/ae345c0d59b00329758518edc104d573.png"/>
            <div id="BCMessageDiv" class="BCMessage Message">
                Builders Club membership is required to play in this place.
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="https://www.rb14.us.to/Upgrades/BuildersClubMemberships.aspx" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>
 

<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>  
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a> 
        </div>  
    </div>
</div>



        </div>
    </div>
</div>

			    
            </div>
        </div>
		
        <div class="accord-section ">
            <div class="accord-header notranslate">
                <div class="accord-arrow">&#x25b6;</div>
			    Temple of the Ninja Masters!  [Challenge Mode]
            </div>
            <div class="accord-content notranslate">
			    

<div class="Place">
    
    <div class="PlayStatus">
        
<span class="PlaceAccessIndicator">
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl07_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyLocked" style="display: none">
        <a class="iLocked tooltip" title="Friends Only"></a><span class="invisible">&nbsp;Friends-only</span>
	</span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl07_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyUnlocked" style="display: none">
        <a class="iUnlocked tooltip" title="Friends Only - You are friends"></a><span class="invisible">&nbsp;Friends-only: You are friends</span>
	</span>
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl07_rbxPlatform_rbxPlaceAccessIndicator_ExpiredSelf" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">&nbsp;Your Outrageous Builders Club, Turbo Builders Club, or Builders Club membership has expired, so you can
        only have one open place. Your places will not be deleted, and you can <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl07_rbxPlatform_rbxPlaceAccessIndicator_RBXLDownloadLink">download the RBXL here.</a> To unlock all of your places,
        please <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">re-order Outrageous Builders Club, Turbo Builders Club, or Builders
            Club </a>.<br/></span>
    </span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl07_rbxPlatform_rbxPlaceAccessIndicator_ExpiredOther" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">This place is locked because the creator's <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">Builders
            Club / Turbo Builders Club / Outrageous Builders Club </a>has expired.
		</span>
	</span>	
</span>
	
    </div>
    <br>
    <div class="Statistics" style="color: #999; font-size: 14px; letter-spacing: normal">
        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl07_rbxPlatform_lStatistics">Visited 239,098 times (329 last week)</span></div>
    <div class="Thumbnail" style="width:414px;overflow:hidden;position: relative;">
        <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl07_rbxPlatform_rbxPlaceThumbnail" title="Temple of the Ninja Masters!  [Challenge Mode]" href="https://www.rb14.us.to/games/refer?PlaceId=45778718&amp;PageType=Profile&amp;Position=8" style="display:inline-block;height:230px;width:420px;cursor:pointer;"><img src="https://t5.rbxcdn.com/43d042a0dd5ca32d9af864aaae0dae84" height="230" width="420" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Temple of the Ninja Masters!  [Challenge Mode]"/></a>
        
    </div>
    <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl07_rbxPlatform_pDescription">
		
        <div class="Description linkify" style="overflow-y: auto; max-height: 160px; font-family: arial; color: #666; font-size: 12px;">
            <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl07_rbxPlatform_lDescription">[Normal Mode:  https://www.rb14.us.to/Temple-of-the-Ninja-Masters-item?id=45778683]
Alone at the edge of the world sits a sacred temple, guarded by 4 powerful Ninja Masters, each given control of one of the elements.  Many brave and powerful warriors have attempted to plunder the treasures of this temple, but all who have attempted it have failed.  Until nao.  Can you and your crew of the world&#39;s most resourceful pirates stand against the might of the Ninja Masters at their strongest?  Only time will tell.</span>
        </div>
    
	</div>
    <div class="PlayOptions" style="display:block">
        
        <div class="VisitButtonContainer" data-item-id="45778718">
            
        <div class="VisitButtonsLeft VisitButtonPlayAnyBCLevel Centered">
            
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl07_rbxPlatform_rbxVisitButtons_MultiplayerVisitButton" data-action="play" class="VisitButton VisitButtonPlay" placeid="45778718" data-is-membership-level-ok="true">
                <a class="btn-medium btn-primary">Play</a>
            </div>  
            
            
            
        </div>
    

<script type="text/javascript">
    var play_placeId = 45778718;
    function redirectPlaceLauncherToLogin() {
        location.href = "/login/default.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function redirectPlaceLauncherToRegister() {
        location.href = "/login/NewAge.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function fireEventAction(action) {
        RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
    }
</script>


<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
 	<div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://rb14.us.to/rbxcdn_img/ae345c0d59b00329758518edc104d573.png"/>
            <div id="BCMessageDiv" class="BCMessage Message">
                Builders Club membership is required to play in this place.
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="https://www.rb14.us.to/Upgrades/BuildersClubMemberships.aspx" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>
 

<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>  
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a> 
        </div>  
    </div>
</div>



        </div>
    </div>
</div>

			    
            </div>
        </div>
		
        <div class="accord-section ">
            <div class="accord-header notranslate">
                <div class="accord-arrow">&#x25b6;</div>
			    Crossroads
            </div>
            <div class="accord-content notranslate">
			    

<div class="Place">
    
    <div class="PlayStatus">
        
<span class="PlaceAccessIndicator">
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl08_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyLocked" style="display: none">
        <a class="iLocked tooltip" title="Friends Only"></a><span class="invisible">&nbsp;Friends-only</span>
	</span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl08_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyUnlocked" style="display: none">
        <a class="iUnlocked tooltip" title="Friends Only - You are friends"></a><span class="invisible">&nbsp;Friends-only: You are friends</span>
	</span>
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl08_rbxPlatform_rbxPlaceAccessIndicator_ExpiredSelf" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">&nbsp;Your Outrageous Builders Club, Turbo Builders Club, or Builders Club membership has expired, so you can
        only have one open place. Your places will not be deleted, and you can <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl08_rbxPlatform_rbxPlaceAccessIndicator_RBXLDownloadLink">download the RBXL here.</a> To unlock all of your places,
        please <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">re-order Outrageous Builders Club, Turbo Builders Club, or Builders
            Club </a>.<br/></span>
    </span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl08_rbxPlatform_rbxPlaceAccessIndicator_ExpiredOther" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">This place is locked because the creator's <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">Builders
            Club / Turbo Builders Club / Outrageous Builders Club </a>has expired.
		</span>
	</span>	
</span>
	
    </div>
    <br>
    <div class="Statistics" style="color: #999; font-size: 14px; letter-spacing: normal">
        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl08_rbxPlatform_lStatistics">Visited 2,852,513 times (4,947 last week)</span></div>
    <div class="Thumbnail" style="width:414px;overflow:hidden;position: relative;">
        <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl08_rbxPlatform_rbxPlaceThumbnail" title="Crossroads" href="https://www.rb14.us.to/games/refer?PlaceId=1818&amp;PageType=Profile&amp;Position=9" style="display:inline-block;height:230px;width:420px;cursor:pointer;"><img src="https://t2.rbxcdn.com/05fa2f120aef0f497f4fa4120bd59b51" height="230" width="420" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Crossroads"/></a>
        
    </div>
    <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl08_rbxPlatform_pDescription">
		
        <div class="Description linkify" style="overflow-y: auto; max-height: 160px; font-family: arial; color: #666; font-size: 12px;">
            <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl08_rbxPlatform_lDescription">The classic ROBLOX level is back!</span>
        </div>
    
	</div>
    <div class="PlayOptions" style="display:block">
        
        <div class="VisitButtonContainer" data-item-id="1818">
            
        <div class="VisitButtonsLeft VisitButtonPlayAnyBCLevel ">
            
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl08_rbxPlatform_rbxVisitButtons_MultiplayerVisitButton" data-action="play" class="VisitButton VisitButtonPlay" placeid="1818" data-is-membership-level-ok="true">
                <a class="btn-medium btn-primary">Play</a>
            </div>  
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl08_rbxPlatform_rbxVisitButtons_EditButton" class="VisitButton VisitButtonEdit" placeid="1818" data-allowupload="False" data-universeid="0">
                <a title="Open in Studio Mode" class="btn-medium btn-primary tooltip">Edit</a>
            </div>
            
        </div>
    

<script type="text/javascript">
    var play_placeId = 1818;
    function redirectPlaceLauncherToLogin() {
        location.href = "/login/default.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function redirectPlaceLauncherToRegister() {
        location.href = "/login/NewAge.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function fireEventAction(action) {
        RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
    }
</script>


<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
 	<div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://rb14.us.to/rbxcdn_img/ae345c0d59b00329758518edc104d573.png"/>
            <div id="BCMessageDiv" class="BCMessage Message">
                Builders Club membership is required to play in this place.
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="https://www.rb14.us.to/Upgrades/BuildersClubMemberships.aspx" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>
 

<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>  
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a> 
        </div>  
    </div>
</div>



        </div>
    </div>
</div>

			    
            </div>
        </div>
		
        <div class="accord-section ">
            <div class="accord-header notranslate">
                <div class="accord-arrow">&#x25b6;</div>
			    Chaos Canyon
            </div>
            <div class="accord-content notranslate">
			    

<div class="Place">
    
    <div class="PlayStatus">
        
<span class="PlaceAccessIndicator">
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl09_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyLocked" style="display: none">
        <a class="iLocked tooltip" title="Friends Only"></a><span class="invisible">&nbsp;Friends-only</span>
	</span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl09_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyUnlocked" style="display: none">
        <a class="iUnlocked tooltip" title="Friends Only - You are friends"></a><span class="invisible">&nbsp;Friends-only: You are friends</span>
	</span>
	<span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl09_rbxPlatform_rbxPlaceAccessIndicator_ExpiredSelf" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">&nbsp;Your Outrageous Builders Club, Turbo Builders Club, or Builders Club membership has expired, so you can
        only have one open place. Your places will not be deleted, and you can <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl09_rbxPlatform_rbxPlaceAccessIndicator_RBXLDownloadLink">download the RBXL here.</a> To unlock all of your places,
        please <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">re-order Outrageous Builders Club, Turbo Builders Club, or Builders
            Club </a>.<br/></span>
    </span>
    <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl09_rbxPlatform_rbxPlaceAccessIndicator_ExpiredOther" style="display: none">
        <a class="iLocked tooltip" title="Locked"></a>
        <span class="invisible">This place is locked because the creator's <a href="https://www.rb14.us.to/upgrades/BuildersClubMemberships.aspx">Builders
            Club / Turbo Builders Club / Outrageous Builders Club </a>has expired.
		</span>
	</span>	
</span>
	
    </div>
    <br>
    <div class="Statistics" style="color: #999; font-size: 14px; letter-spacing: normal">
        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl09_rbxPlatform_lStatistics">Visited 900,959 times (692 last week)</span></div>
    <div class="Thumbnail" style="width:414px;overflow:hidden;position: relative;">
        <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl09_rbxPlatform_rbxPlaceThumbnail" title="Chaos Canyon" href="https://www.rb14.us.to/games/refer?PlaceId=14403&amp;PageType=Profile&amp;Position=10" style="display:inline-block;height:230px;width:420px;cursor:pointer;"><img src="https://t0.rbxcdn.com/918133d9d39f1bee24dce572d8cb2920" height="230" width="420" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Chaos Canyon"/></a>
        
    </div>
    <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl09_rbxPlatform_pDescription">
		
        <div class="Description linkify" style="overflow-y: auto; max-height: 160px; font-family: arial; color: #666; font-size: 12px;">
            <span id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl09_rbxPlatform_lDescription">Experience Chaos Canyon - Escape from Desolation Valley, explore the ruins on the cliffs, walk on the Sky Bridge and hold the Battle Cube from invaders! This map features models created by the community, including: PilotLuke, tingc222, and Yahoo. </span>
        </div>
    
	</div>
    <div class="PlayOptions" style="display:block">
        
        <div class="VisitButtonContainer" data-item-id="14403">
            
        <div class="VisitButtonsLeft VisitButtonPlayAnyBCLevel ">
            
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl09_rbxPlatform_rbxVisitButtons_MultiplayerVisitButton" data-action="play" class="VisitButton VisitButtonPlay" placeid="14403" data-is-membership-level-ok="true">
                <a class="btn-medium btn-primary">Play</a>
            </div>  
            
            <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePlaces_ctl09_rbxPlatform_rbxVisitButtons_EditButton" class="VisitButton VisitButtonEdit" placeid="14403" data-allowupload="False" data-universeid="0">
                <a title="Open in Studio Mode" class="btn-medium btn-primary tooltip">Edit</a>
            </div>
            
        </div>
    

<script type="text/javascript">
    var play_placeId = 14403;
    function redirectPlaceLauncherToLogin() {
        location.href = "/login/default.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function redirectPlaceLauncherToRegister() {
        location.href = "/login/NewAge.aspx?ReturnUrl=" + encodeURIComponent("/user.aspx?ID=1");
    }
    function fireEventAction(action) {
        RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
    }
</script>


<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
 	<div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://rb14.us.to/rbxcdn_img/ae345c0d59b00329758518edc104d573.png"/>
            <div id="BCMessageDiv" class="BCMessage Message">
                Builders Club membership is required to play in this place.
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="https://www.rb14.us.to/Upgrades/BuildersClubMemberships.aspx" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>
 

<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>  
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a> 
        </div>  
    </div>
</div>



        </div>
    </div>
</div>

			    
            </div>
        </div>
		
    </div>
    



	<div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcaseFooter" class="PanelFooter" style="margin-top:5px;margin-left:20px;padding:3px;">
		
	    <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePager_PanelPages" style="text-align:center;">
			
     <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePager_LinkButtonFirst" class="pager previous disabled"></a>
     
    <span class="PageNumbers" style="vertical-align: top; display: inline-block; padding: 5px; padding-top: 6px">Page 1 of 2</span>
    <a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePager_LinkButtonNext" class="pager next" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserPlacesPane$ShowcasePager$LinkButtonNext&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"></a>
    

		</div>
	    
	
	</div>
 </div>
 
</div>
 
 <div class="ItemPurchaseAjaxContainer">
    

<div id="ItemPurchaseAjaxData" data-authenticateduser-isnull="True" data-user-balance-robux="0" data-user-balance-tickets="0" data-user-bc="0" data-continueshopping-url="" data-imageurl="" data-alerturl="https://rb14.us.to/rbxcdn_img/cbb24e0c0f1fb97381a065bd1e056fcb.png" data-builderscluburl="https://rb14.us.to/rbxcdn_img/ae345c0d59b00329758518edc104d573.png"></div>

    <div id="ProcessingView" style="display:none">
        <div class="ProcessingModalBody">
            <p style="margin:0px"><img src="https://rb14.us.to/rbxcdn_img/ec4e85b0c4396cf753a06fade0a8d8af.gif" alt="Processing..."/></p>
            <p style="margin:7px 0px">Processing Transaction</p>
        </div>
    </div>
    
    <script type="text/javascript">
        //<sl:translate>
        Roblox.ItemPurchase.strings = {
            insufficientFundsTitle : "Insufficient Funds",
            insufficientFundsText : "You need {0} more to purchase this item.",
            cancelText : "Cancel",
            okText : "OK",
            buyText : "Buy",
            buyTextLower : "buy",
            tradeCurrencyText : "Trade Currency",
            priceChangeTitle : "Item Price Has Changed",
            priceChangeText : "While you were shopping, the price of this item changed from {0} to {1}.",
            buyNowText : "Buy Now",
            buyAccessText: "Buy Access",
            buildersClubOnlyTitle : "{0} Only",
            buildersClubOnlyText : "You need {0} to buy this item!",
            buyItemTitle : "Buy Item",
            buyItemText : "Would you like to {0} {5}the {1} {2} from {3} for {4}?",
            balanceText : "Your balance after this transaction will be {0}",
            freeText : "Free",
            purchaseCompleteTitle : "Purchase Complete!",
            purchaseCompleteText : "You have successfully {0} {5}the {1} {2} from {3} for {4}.",
            continueShoppingText : "Return to Profile",
            customizeCharacterText : "Customize Character",
            orText : "or",
            rentText : "rent",
            accessText: "access to "
        }
    //</sl:translate>
    </script>

</div>
 <script type="text/javascript">
     Roblox.require('Widgets.DropdownMenu', function (dropdown) {
         dropdown.InitializeDropdown();
     });
</script>

                </div>
            </div>
            <div style="padding-left: 20px" class="divider-bottom">
                

<div style="margin: 12px 0 20px; overflow:visible">
    <h2 style="float: left">ROBLOX's Friends</h2>
    
    <a data-js-my-button style="float: right" href="Friends.aspx?UserID=1" class="btn-small btn-neutral" id="HeaderButton">See All 0<span class="btn-text">See All 0</span></a>
    
</div>
<div style="padding-top: 50px">
    
	
	<div id="ctl00_cphRoblox_rbxFriendsPane_pNoResults">
	
		<p><span id="ctl00_cphRoblox_rbxFriendsPane_lNoResults">ROBLOX does not have any Roblox friends.</span></p>
	
</div>
</div>

            </div>
            

<div class="divider-bottom" style="padding-left: 20px; padding-bottom: 20px">
    <div id="ctl00_cphRoblox_rbxFavoritesPane_FavoritesPane">
	
	        <div style="overflow: auto">
                <h2 class="title" style="float: left">Favorites</h2>
                <div class="PanelFooter" style="float: right;">
			        Category:&nbsp;
			        <select name="ctl00$cphRoblox$rbxFavoritesPane$AssetCategoryDropDownList" id="ctl00_cphRoblox_rbxFavoritesPane_AssetCategoryDropDownList">
		<option value="24">Animations</option>
		<option value="3">Audio</option>
		<option value="13">Decals</option>
		<option value="18">Faces</option>
		<option value="19">Gear</option>
		<option value="8">Hats</option>
		<option value="17">Heads</option>
		<option value="10">Models</option>
		<option value="12">Pants</option>
		<option selected="selected" value="9">Places</option>
		<option value="38">Plugins</option>
		<option value="11">Shirts</option>
		<option value="2">T-Shirts</option>

	</select>
		        </div>
            </div>
		    <div>
			
			    <div id="FavoritesContent">
				    <table id="ctl00_cphRoblox_rbxFavoritesPane_FavoritesDataList" cellspacing="0" border="0" style="border-collapse:collapse;">
		<tr>
			<td class="Asset" valign="top">
					        <div style="padding:5px; margin-right: 30px; margin-left: 10px">
						        <div class="AssetThumbnail notranslate">
							        <a id="ctl00_cphRoblox_rbxFavoritesPane_FavoritesDataList_ctl00_AssetThumbnailHyperLink" class=" notranslate" title="Apocalypse Rising" class=" notranslate" href="https://www.rb14.us.to/Apocalypse-Rising-place?id=1600503" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://t7.rbxcdn.com/33bb5580b467200193ba0361200a6859" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Apocalypse Rising" class=" notranslate"/></a>
							    
						        </div>
						        <div class="AssetDetails notranslate" style="clear:both;">
							        <div class="AssetName"><a id="ctl00_cphRoblox_rbxFavoritesPane_FavoritesDataList_ctl00_AssetNameHyperLink" href="https://www.rb14.us.to/Apocalypse-Rising-place?id=1600503">Apocalypse Rising</a></div>
							        <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxFavoritesPane_FavoritesDataList_ctl00_AssetCreatorHyperLink" href="User.aspx?ID=281519">Gusmanak</a></span></div>
						            
						        </div>
						    </div>
					    </td><td class="Asset" valign="top">
					        <div style="padding:5px; margin-right: 30px; margin-left: 10px">
						        <div class="AssetThumbnail notranslate">
							        <a id="ctl00_cphRoblox_rbxFavoritesPane_FavoritesDataList_ctl01_AssetThumbnailHyperLink" class=" notranslate" title="ROBLOX Base Wars FPS" class=" notranslate" href="https://www.rb14.us.to/ROBLOX-Base-Wars-FPS-place?id=50430" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://t0.rbxcdn.com/456354bfb30ced7acb2ba401a0bc33ce" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="ROBLOX Base Wars FPS" class=" notranslate"/></a>
							    
						        </div>
						        <div class="AssetDetails notranslate" style="clear:both;">
							        <div class="AssetName"><a id="ctl00_cphRoblox_rbxFavoritesPane_FavoritesDataList_ctl01_AssetNameHyperLink" href="https://www.rb14.us.to/ROBLOX-Base-Wars-FPS-place?id=50430">ROBLOX Base Wars FPS</a></div>
							        <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxFavoritesPane_FavoritesDataList_ctl01_AssetCreatorHyperLink" href="User.aspx?ID=21557">Games</a></span></div>
						            
						        </div>
						    </div>
					    </td><td class="Asset" valign="top">
					        <div style="padding:5px; margin-right: 30px; margin-left: 10px">
						        <div class="AssetThumbnail notranslate">
							        <a id="ctl00_cphRoblox_rbxFavoritesPane_FavoritesDataList_ctl02_AssetThumbnailHyperLink" class=" notranslate" title="Sword Fights on the Heights IV" class=" notranslate" href="https://www.rb14.us.to/Sword-Fights-on-the-Heights-IV-place?id=47324" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://t4.rbxcdn.com/f5494c4ba5a9462697b1b913d96bdf89" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Sword Fights on the Heights IV" class=" notranslate"/></a>
							    
						        </div>
						        <div class="AssetDetails notranslate" style="clear:both;">
							        <div class="AssetName"><a id="ctl00_cphRoblox_rbxFavoritesPane_FavoritesDataList_ctl02_AssetNameHyperLink" href="https://www.rb14.us.to/Sword-Fights-on-the-Heights-IV-place?id=47324">Sword Fights on the Heights IV</a></div>
							        <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxFavoritesPane_FavoritesDataList_ctl02_AssetCreatorHyperLink" href="User.aspx?ID=261">Shedletsky</a></span></div>
						            
						        </div>
						    </div>
					    </td>
		</tr>
	</table>
				    
				    
			    </div>
		    </div>
	    
</div>
</div>

            <div style="clear: both; margin: 20px;width:300px;">
                
<div style="width: 300px; " class="adp-gpt-container">
    <span id="3531353939333530" class="GPTAd rectangle" data-js-adtype="gptAd">
    </span>
        <div class="ad-annotations " style="width: 300px">
            <span class="ad-identification">
                Advertisement
                    <span> - </span>
                    <a href="" class="UpsellAdButton" title="Click to learn how to remove ads!">Why am I seeing ads?</a>
            </span>
                <a class="BadAdButton" href="https://www.rb14.us.to/Ads/ReportAd.aspx" title="click to report an offensive ad">Report</a>
        </div>
    <script type="text/javascript">
        googletag.cmd.push(function () {
            if (typeof RobloxAds == "undefined" || typeof RobloxAds.showAdCallback == "undefined" || RobloxAds.showAdCallback("Roblox_User_Middle_300x250")) {
                googletag.display("3531353939333530");
            }
        });
    </script>
</div>
            </div>
        </div>
        <br clear="all"/>
    </div>
    <div id="UserContainer">
        <div id="UserAssetsPane" style="border-top: 1px solid #ccc;">
            
        </div>
    </div>
    

                    <div style="clear:both"></div>
                </div>
            </div>
        </div> 
        </div>
        
            <div id="Footer" class="footer-container">
    <div class="FooterNav">
        <a href="https://www.rb14.us.to/info/Privacy.aspx">Privacy Policy</a>
        &nbsp;|&nbsp;
        <a href="https://corp.rb14.us.to/advertise-on-roblox" class="roblox-interstitial">Advertise with Us</a>
        &nbsp;|&nbsp;
        <a href="https://corp.rb14.us.to/press" class="roblox-interstitial">Press</a>
        &nbsp;|&nbsp;
        <a href="https://corp.rb14.us.to/contact-us" class="roblox-interstitial">Contact Us</a>
        &nbsp;|&nbsp;
        <a href="https://corp.rb14.us.to/about" class="roblox-interstitial">About Us</a>
        &nbsp;|&nbsp;
        <a href="https://blog.rb14.us.to/" class="roblox-interstitial">Blog</a>
        &nbsp;|&nbsp;
        <a href="https://corp.rb14.us.to/careers" class="roblox-interstitial">Jobs</a>
        &nbsp;|&nbsp;
        <a href="https://corp.rb14.us.to/parents" class="roblox-interstitial">Parents</a>
    </div>
    <div class="legal">
        <div class="left">
            <div id="a15b1695-1a5a-49a9-94f0-9cd25ae6c3b2">
    <a href="//web.archive.orghttps://privacy.truste.com/privacy-seal/Roblox-Corporation/validation?rid=2428aa2a-f278-4b6d-9095-98c4a2954215" title="TRUSTe Children privacy certification" target="_blank">
        <img style="border: none" src="//web.archive.orghttps://privacy-policy.truste.com/privacy-seal/Roblox-Corporation/seal?rid=2428aa2a-f278-4b6d-9095-98c4a2954215" width="133" height="45" alt="TRUSTe Children privacy certification"/>
    </a>
</div>
        </div>
        <div class="right">
            <p class="Legalese">
    ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a href="https://corp.rb14.us.to/" ref="footer-smallabout" class="roblox-interstitial">ROBLOX Corporation</a>, ©2015. Patents pending.
    ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex, and no resemblance to the products of these companies is intended. Use of this site signifies your acceptance of the <a href="https://www.rb14.us.to/info/terms-of-service" ref="footer-terms">Terms and Conditions</a>.
</p>
        </div>
        <div class="clear"></div>
    </div>

</div>
        
        </div></div>
    </div>
    <div id="ChatContainer" style="position: fixed; bottom: 0; right: 0; z-index: 10020">
        

    </div>

        
        <script type="text/javascript">
            function urchinTracker() { };
            GoogleAnalyticsReplaceUrchinWithGAJS = true;
        </script>
    

    

<script type="text/javascript">
//<![CDATA[
Roblox.Controls.Image.ErrorUrl = "https://www.rb14.us.to/Analytics/BadHtmlImage.ashx";$(function () { $('.VisitButtonPlayAnyBCLevel .VisitButtonPlay').click(function () {play_placeId=$(this).attr('placeid');Roblox.CharacterSelect.placeid = play_placeId;Roblox.CharacterSelect.show();});$('.VisitButtonPersonalServer').click(function () {play_placeId=$(this).attr('placeid');Roblox.CharacterSelect.placeid = play_placeId;Roblox.CharacterSelect.show();});$('.VisitButtonBuild').click(function () {RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Build']);EventTracker.fireEvent('GameLaunchAttempt_Unknown', 'GameLaunchAttempt_Unknown_Plugin');  }; play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); Roblox.Client.WaitForRoblox(function() { window.location = '/Login/Default.aspx?ReturnUrl=http%3a%2f%2fwww.rb14.us.to%2fuser.aspx%3fID%3d1' }); return false;});$('.VisitButtonEdit').click(function () {RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Edit']);EventTracker.fireEvent('GameLaunchAttempt_Unknown', 'GameLaunchAttempt_Unknown_Plugin');  }; play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); Roblox.Client.WaitForRoblox(function() { RobloxLaunch.StartGame('https://www.rb14.us.to//Game/edit.ashx?PlaceID='+play_placeId+'&upload=', 'edit.ashx', 'https://www.rb14.us.to//Login/Negotiate.ashx', 'FETCH', true) }); return false;});Roblox.CharacterSelect.robloxLaunchFunction = function (genderTypeID) { if (genderTypeID == 3) { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent("GameLaunchAttempt_Unknown", "GameLaunchAttempt_Unknown_Plugin"); } else { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent("GameLaunchAttempt_Unknown", "GameLaunchAttempt_Unknown_Plugin"); }play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); Roblox.Client.WaitForRoblox(function() { RobloxLaunch.RequestGame('PlaceLauncherStatusPanel', play_placeId, genderTypeID); }); return false;};$('.VisitButtonPlayBCOnlyModal .VisitButtonPlay a').click(function () {showBCOnlyModal('BCOnlyModal'); return false;});});//]]>
</script>
</form>
    
    
    

<style>
    #win_firefox_install_img .activation {
    }

    #win_firefox_install_img .installation {
        width: 869px;
        height: 331px;
    }

    #mac_firefox_install_img .activation {
    }

    #mac_firefox_install_img .installation {
        width: 250px;
    }

    #win_chrome_install_img .activation {
    }

    #win_chrome_install_img .installation {
    }

    #mac_chrome_install_img .activation {
        width: 250px;
    }

    #mac_chrome_install_img .installation {
    }
</style>
<div id="InstallationInstructions" class="modalPopup blueAndWhite" style="display:none;overflow:hidden">
    <a id="CancelButton2" onclick="return Roblox.Client._onCancel();" class="ImageButton closeBtnCircle_35h ABCloseCircle"></a>
    <div style="padding-bottom:10px;text-align:center">
        <br/><br/>
    </div>
</div>



<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<script type="text/javascript" src="https://rb14.us.to/rbxcdn_js/4726cb4f73131ee2d1c2694e87e9d495.js"></script>

<script type="text/javascript">
    Roblox.Client._skip = '/install/unsupported.aspx';
    Roblox.Client._CLSID = '';
    Roblox.Client._installHost = '';
    Roblox.Client.ImplementsProxy = false;
    Roblox.Client._silentModeEnabled = false;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';

        
    Roblox.Client._installSuccess = function() {
        if(GoogleAnalyticsEvents){
            GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
            GoogleAnalyticsEvents.FireEvent(['Plugin','Install Success']);
        }
    }
    
    </script>


<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-is-protocol-handler-launch-enabled="False" data-is-user-logged-in="False" data-os-name="Unknown" data-protocol-name-for-client="roblox-player" data-protocol-name-for-studio="roblox-studio">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="margin:0 1em 1em 0; padding:20px 0;">
            <img src="https://rb14.us.to/rbxcdn_img/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress"/>
        </div>
        <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
            </div>
            <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to Players...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
        <div style="text-align:center;margin-top:1em">
            <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel"/>
        </div>
    </div>
</div>
<div id="ProtocolHandlerStartingDialog" style="display:none;">
    <div class="modalPopup ph-modal-popup">
        <div class="ph-modal-header">

        </div>
        <div class="ph-logo-row">
            <img src="https://www.rb14.us.to/images/Logo/logo_meatball.svg" width="90" height="90" alt="R"/>
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                ROBLOX is now loading. Get ready to play!
            </p>
            <div class="ph-startingdialog-spinner-row">
                <img src="https://rb14.us.to/rbxcdn_img/4bed93c91f909002b1f17f05c0ce13d1.gif" width="82" height="24"/>
            </div>
        </div>
    </div>
</div>
<div id="ProtocolHandlerAreYouInstalled" style="display:none;">
    <div class="modalPopup ph-modal-popup">
        <div class="ph-modal-header">
            <span class="rbx-icon-close simplemodal-close"></span>
        </div>
        <div class="ph-logo-row">
            <img src="https://www.rb14.us.to/images/Logo/logo_meatball.svg" width="90" height="90" alt="R"/>
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                You're moments away from getting into the game!
            </p>
            <div>
                <button type="button" class="btn rbx-btn-primary-sm" id="ProtocolHandlerInstallButton">
                    Download and Install ROBLOX
                </button>
            </div>
            <div class="rbx-small rbx-text-notes">
                <a href="https://en.help.rb14.us.to/hc/en-us/articles/204473560" class="rbx-link" target="_blank">Click here for help</a>
            </div>

        </div>
    </div>
</div>
<div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;">
    <p class="larger-font-size">
        <span class="rbx-icon-moreinfo"></span>
        Check <b>Remember my choice</b> and click <img src="https://rb14.us.to/rbxcdn_img/7c8d7a39b4335931221857cca2b5430b.png" alt="Launch Application"/>  in the dialog box above to join games faster in the future!
    </p>
</div>


<script type="text/javascript" src="https://rb14.us.to/rbxcdn_js/e59cc9c921c25a5cd61d18f0a7fd5ac8.js"></script>
 
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
            <a href="https://www.rb14.us.to/Upgrades/BuildersClubMemberships.aspx?ref=vpr" target="_blank" class="btn-medium btn-primary" id="videoPrerollJoinBCButton">Join Builders Club</a>
        </div>
    </div>
    <script type="text/javascript">
        Roblox.VideoPreRoll.showVideoPreRoll = false;
        Roblox.VideoPreRoll.isPrerollShownEveryXMinutesEnabled = true;
        Roblox.VideoPreRoll.loadingBarMaxTime = 33000;
        Roblox.VideoPreRoll.videoOptions.key = "robloxcorporation"; 
            Roblox.VideoPreRoll.videoOptions.categories = "AgeUnknown,GenderUnknown";
                     Roblox.VideoPreRoll.videoOptions.id = "games";
        Roblox.VideoPreRoll.videoLoadingTimeout = 11000;
        Roblox.VideoPreRoll.videoPlayingTimeout = 41000;
        Roblox.VideoPreRoll.videoLogNote = "NotWindows";
        Roblox.VideoPreRoll.logsEnabled = true;
        Roblox.VideoPreRoll.excludedPlaceIds = "32373412";
        Roblox.VideoPreRoll.adTime = 15;
            
                Roblox.VideoPreRoll.specificAdOnPlacePageEnabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePageId = 192800;
                Roblox.VideoPreRoll.specificAdOnPlacePageCategory = "stooges";
            
                    
                Roblox.VideoPreRoll.specificAdOnPlacePage2Enabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Id = 2370766;
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
                <a href="#" onclick="redirectPlaceLauncherToRegister(); return false;"><div class="RevisedCharacterSelectSignup"></div></a>
                <a class="HaveAccount" href="#" onclick="redirectPlaceLauncherToLogin();return false;">I have an account</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkRobloxInstall() {
                 window.location = '/install/unsupported.aspx'; return false;
    }

</script>

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

    Roblox.UpsellAdModal.Resources = {
        //<sl:translate>
        title: "Remove Ads Like This",
        body: "Builders Club members do not see external ads like these.",
        accept: "Upgrade Now",
        decline: "No, thanks"
        //</sl:translate>
    };
</script>  

<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer">
            <a href id="roblox-confirm-btn"><span></span></a>
            <a href id="roblox-decline-btn"><span></span></a>
        </div>
        <div class="ConfirmationModalFooter">
        
        </div>  
    </div>   
    <script type="text/javascript">
        Roblox = Roblox || {};
        Roblox.Resources = Roblox.Resources || {};

        //<sl:translate>
        Roblox.Resources.GenericConfirmation = {
            yes: "Yes",
            No: "No",
            Confirm: "Confirm",
            Cancel: "Cancel"
        };
        //</sl:translate>
    </script>
</div>


        <img src="https://secure.adnxs.com/seg?add=550800&amp;t=2" width="1" height="1" style="display:none;"/>

        <script type="text/javascript">
            $(function() {
                if (Roblox.EventStream) {
                    Roblox.EventStream.InitializeEventStream("null", "8", "https://public.ecs.rb14.us.to/www/e.png");
                }
            });
        </script>
    
</body>                
</html>
<!--
     FILE ARCHIVED ON 00:34:33 Apr 07, 2015 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:29:42 Apr 26, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 0.688
  exclusion.robots: 0.179
  exclusion.robots.policy: 0.169
  cdx.remote: 0.064
  esindex: 0.01
  LoadShardBlock: 47.211 (3)
  PetaboxLoader3.datanode: 80.757 (4)
  load_resource: 258.401
  PetaboxLoader3.resolve: 220.585
-->