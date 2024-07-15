<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/main.php';
if (!isset($_GET["placeId"])){
exit('Place id not set');
}
if(!(int)$_GET["placeId"]){
exit('DO NOT TRY EVER TO MAKE SQL INJECTION KIDS, THIS MUST BE A LESSION');
}

if (isset($_GET["placeId"]))
  {
    /* define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'rblx15');
    define('DB_PASSWORD', 'A*yBH]mXYNC14]ed');
    define('DB_NAME', 'rblx15');
    $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $query = mysqli_query($con,'select gameName,gameDesc,port,gameIp,owner from games where gameId="'.$_GET['placeId'].'"');
    $row = mysqli_fetch_array($query); */

    $FindGames = $pdo->prepare('select * from games where gameId="'.(int)$_GET['placeId'].'"');
    $FindGames->execute();
    $row = $FindGames->fetch(PDO::FETCH_ASSOC);
	 $Find1 = $pdo->prepare('select * from users where userid="'.$row['ownerid'].'"');
    $Find1->execute();
    $creator = $Find1->fetch(PDO::FETCH_ASSOC);
}
if(!$row)
{
  exit("place doesnt exist");
}
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head>

    <!-- MachineID: WEB219 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/>
    <meta name="author" content="ROBLOX Corporation"/>
    <meta name="description" content="User-generated MMO gaming site for kids, teens, and adults. Players architect their own worlds. Builders create free online games that simulate the real world. Create and play amazing 3D games. An online gaming cloud and distributed physics engine."/>
    <meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
    <meta name="apple-itunes-app" content="app-id=431946152"/>

    <title><?php echo $row['gameName']; ?>, a Free Game by <?php echo $creator['username']; ?> - ROBLOX</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico"/>

    
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,600,700" rel="stylesheet" type="text/css">

    
    
<link rel="stylesheet" href="/CSS/Base/CSS/leanbase___e457f3b30a24742f0b81021a7cb26907_m.css"/>

    
<link rel="stylesheet" href="/CSS/Base/CSS/page___f301aaa420b42e171ae803bef66c4307_m.css"/>

    
    
    
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/4.0/1/MicrosoftAjax.js"></script>
<script type="text/javascript">window.Sys || document.write("<script type='text/javascript' src='/js/Microsoft/MicrosoftAjax.js'><\/script>")</script>
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>


    
    <script type="text/javascript" src="/rbxcdn_js/35442da4b07e6a0ed6b085424d1a52cb.js"></script>


    
    

<script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script>
            <script src="https://cdn.gigya.com/js/gigya.js?apiKey=3_OsvmtBbTg6S_EUbwTPtbbmoihFY5ON6v6hbVrTbuqpBs7SyF_LQaJwtwKJ60sY1p"></script>

        <meta property="al:ios:url" content="robloxmobile://placeID=1818"/>
        <meta property="al:ios:app_store_id" content="431946152"/>
        <meta property="al:ios:app_name" content="Roblox Mobile"/>
        <meta property="al:web:should_fallback" content="false"/>        
          <meta property="og:type" content="game"/>
  <meta property="og:site_name" content="ROBLOX"/>
  <meta property="og:url" content="https://www.rb14.us.to/games/1818/<?php echo $row['gameName']; ?>"/>
  <meta property="og:title" content="<?php echo $row['gameName']; ?>"/>
  <meta property="og:description" content="The classic ROBLOX level is back!"/>
  <meta property="og:image" content="/Render.png"/>
  <meta property="og:image:width" content="500"/>
  <meta property="og:image:height" content="280"/>
  <meta property="fb:app_id" content="190191627665278"/>
  <meta property="twitter:card" content="summary_large_image"/>
  <meta property="twitter:site" content="@ROBLOX"/>
  <meta property="twitter:app:country" content="US"/>
  <meta property="twitter:app:name:iphone" content="ROBLOX Mobile"/>
  <meta property="twitter:app:id:iphone" content="431946152"/>
  <meta property="twitter:app:url:iphone" content="robloxmobile://placeID=1818"/>
  <meta property="twitter:app:name:ipad" content="ROBLOX Mobile"/>
  <meta property="twitter:app:id:ipad" content="431946152"/>
  <meta property="twitter:app:url:ipad" content="robloxmobile://placeID=1818"/>
  <meta property="twitter:app:name:googleplay" content="ROBLOX"/>
  <meta property="twitter:app:id:googleplay" content="com.roblox.client"/>


        <script>
            // TODO: we will refactor Ads refresh code and get rid of this hack code next sprint
            RobloxAds = {};
            RobloxAds.showAdCallback = function (slotId) {
                var gutterAdsEnabled = false;
                if (gutterAdsEnabled) {
                    return true;
                }
                var defaultWidth = 970;
                var skyscraperWidth = 160;
                var leaderboardWidth = 728;
                var minWidthIncludeOneAd = defaultWidth + skyscraperWidth + 12 * 2;
                var minWidthIncludeLeaderboard = leaderboardWidth;
                var currentWidth = $(window).width();

                if (currentWidth < minWidthIncludeLeaderboard) {
                    return false;
                } else if (slotId.indexOf("_Left_160x600") > 0 && currentWidth < minWidthIncludeOneAd) {
                    return false;
                }
                return true;
            }
        </script>
    


    
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
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

    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer)\.roblox\.com|robloxlabs\.com)((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm"></div>
   
    
    
        <script type="text/javascript">
        $(function() {
            if (Roblox.EventStream) {
                Roblox.EventStream.InitializeEventStream(null, 8, "https://public.ecs.rb14.us.to/www/e.png");
            }
        });
    </script>

</head>
<body>
    
    



<div id="fb-root"></div>

<div class="wrap no-gutter-ads">


<?php
  pageBuilder::buildHeader();
?>  



        <div class="content">
                                        <div id="Leaderboard-Abp" class="abp leaderboard-abp">
                    
<iframe allowtransparency="true" frameborder="0" height="110" scrolling="no" src="https://www.rb14.us.to/userads/1" width="728" data-js-adtype="iframead"></iframe>
                </div>
            
<div class="row page-content ">
    <div class="col-xs-12 section game-main-content">
        <div class="game-thumb-container">
            <script>
    var Roblox = Roblox || {};
    Roblox.Carousel = function () {
        var carouselId = "#rbx-carousel";
        var checkedForVideo = false;

        var initialize = function () {
            // set up carousel
            $(carouselId).carousel({
                interval: 5000,
                pause: "hover"
            });

            // bindings
            $(carouselId).on("slide.bs.carousel", function () {
                // pause ALL the videos
                if(rbxplayer && rbxplayer.length > 0) {
                    var rbxplayerlen = rbxplayer.length;
                    for(var i = 0; i < rbxplayerlen; i++) {
                        Roblox.Carousel.pauseVideoAtIndex(i);
                    }
                }
                $(carouselId).carousel('cycle');
            });

            // hide controls when there's only one slide
            if ($(carouselId+ " .carousel-indicators li").length < 2) {
                $(carouselId).find(".carousel-control, .carousel-indicators").css("display", "none");
            }

            Roblox.Carousel.setUpYouTubeAPI();

            // retry thumbnails in carousel
            $(function () {
                $("#rbx-carousel .item span").loadRobloxThumbnails();
            });
        }

        var setUpYouTubeAPI = function () {
            var tag = document.createElement('script');

            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


        }

        var toggleVideo = function (state) {
            var div = $('.flex-video');
            if(div.length > 0){
                var iframe = div.find('iframe')[0].contentWindow;
                var func = state == 'hide' ? 'pauseVideo' : 'playVideo';
                iframe.postMessage('{"event":"command","func":"' + func + '","args":""}', '*');
            }
        }

        var pauseVideoAtIndex = function (idx) {
            if (rbxplayer && rbxplayer.length > 0) {
                try {
                    rbxplayer[idx].pauseVideo();
                } catch (e) {
                    // tried to pause before player was ready
                }
                
            } else {
                return false;
            }
        }

        var playVideoAtIndex = function (idx) {
            if(rbxplayer && rbxplayer.length > 0) {
                rbxplayer[idx].playVideo();
            } else {
                return false;
            }
        }

        var checkForVideo = function () {

            if(checkedForVideo) {
                return false;
            }
            var carousel = $(carouselId);
            carousel.find('.item').each(function (idx, val) {
                if ($(val).find('.flex-video').length > 0) {
                    carousel.carousel(idx);
                    carousel.carousel("pause");
                    Roblox.Carousel.playVideoAtIndex(0);
                    checkedForVideo = true;
                    return false; // stop
                } else {
                    return true; // keep going
                }
            });
        }
        var onPlayerReady = function () {
            // This first moment get the video and auto-play it
            Roblox.Carousel.checkForVideo();
        }
        var onPlayerPlaying = function () {
            // We are playing the video. Stop the carousel.
            var carousel = $(carouselId);
            carousel.carousel("pause");
        }


        return {
            initialize: initialize,
            toggleVideo: toggleVideo,
            checkForVideo: checkForVideo,
            setUpYouTubeAPI: setUpYouTubeAPI,
            onPlayerReady: onPlayerReady,
            onPlayerPlaying: onPlayerPlaying,
            pauseVideoAtIndex: pauseVideoAtIndex,
            playVideoAtIndex: playVideoAtIndex
        }

    }();

    // For YouTube API. Must be global.

    var rbxplayer = [];
    function onYouTubeIframeAPIReady() {
        var carouselId = "#rbx-carousel";
        $(carouselId).find(".flex-video").each(function (idx, el) {
            youTubeId = $(el).find("iframe").attr("id");
            rbxplayer[rbxplayer.length] = new YT.Player(youTubeId, {});
        });

        // listen for postMessage from YouTube
        $(window).on("message", function (e) {
            var originalData = e.originalEvent.data;

            // data is not JSON
            if (originalData.charAt(0) != "{") {
               return ; 
            }
            var data = $.parseJSON(originalData);
            
            if (data.event == "onReady") {
                Roblox.Carousel.onPlayerReady();
            }
            if(data.event == "infoDelivery" && data.info.playerState && data.info.playerState == 1) {
                Roblox.Carousel.onPlayerPlaying();
            }
        });
    }

 
    $(document).ready(function () {
        Roblox.Carousel.initialize();
    });
</script>



<div id="rbx-carousel" class="rbx-carousel carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">

            <li data-target="#rbx-carousel" data-slide-to="0" class="active"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">


            <div class="item active">
<span><img class="CarouselThumb" src="/rbxcdn_img/04baeb33ef66ef1395cd5464309fece6.jpg"/></span>                    <div class="carousel-caption">
                    </div>


            </div>


    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#rbx-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left rbx-icon-carousel-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#rbx-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right rbx-icon-carousel-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

        </div>
        <div class="game-calls-to-action">


<div id="game-context-menu">
    <a class="rbx-menu-item" data-toggle="popover" data-bind="game-context-menu" data-original-title="" title="" data-viewport=".game-calls-to-action">
        <i class="rbx-icon-more"></i>
    </a>
    <div class="rbx-popover-content" data-toggle="game-context-menu">
        <ul class="rbx-dropdown-menu" role="menu">
                <li>
                    <div class="VisitButton VisitButtonEdit" placeid="1818" data-universeid="0" data-allowupload="true">
                        <a>Edit</a>
                    </div>
                </li>
        </ul>
    </div>
</div>

<script>
    $(function() {
        $("#game-context-menu ").on("click", ".rbx-context-menu-shutdown-all", function (evt) {
            evt.preventDefault();
            var placeId = $(this).data("place-id");
            $("#game-context-menu").find(".rbx-menu-item").popover('hide'); 

            Roblox.GenericConfirmation.open({
                titleText: "Shut Down Game",
                bodyContent: "Are you sure you want to shut down this game?",
                onAccept: function () {
                    $.post("/Games/shutdown-all-instances?placeId=", {
                        placeId:placeId
                    }, function(data) {
                        //alert(data);
                    });
                },
                acceptColor: Roblox.GenericConfirmation.blue,
                acceptText: "Yes",
                declineText: "No",
                allowHtmlContentInBody: true
            });
        });        
        $("#game-context-menu").on("click", ".VisitButtonBuildPH", function (evt) {
            $("#game-context-menu").find(".rbx-menu-item").popover('hide'); 
            var el = $(this);
            var placeId = el.attr("placeid");
            var universeId = el.data("universeid");
            var allowUpload = el.data("allowupload") ? true : false;
            Roblox.GameLauncher.buildGameInStudio(placeId, universeId, allowUpload);
        });
        $("#game-context-menu").on("click", ".VisitButtonEditPH", function (evt) {
            $("#game-context-menu").find(".rbx-menu-item").popover('hide'); 
            var el = $(this);
            var placeId = el.attr("placeid");
            var universeId = el.data("universeid");
            var allowUpload = el.data("allowupload") ? true : false;
            Roblox.GameLauncher.editGameInStudio(placeId, universeId, allowUpload);
        });
    });
</script>


            <h1 class="game-name" title="<?php echo $row['gameName']; ?>"><?php echo $row['gameName']; ?></h1>
            <h4 class="game-creator"><a class="rbx-link" href="https://www.rb14.us.to/User.aspx?ID=<?php echo $row['ownerid']; ?>"><?php echo $creator['username']; ?></a></h4>
            <div class="game-play-buttons" data-autoplay="false">




    <div id="MultiplayerVisitButton" class="VisitButton VisitButtonPlay" placeid="1818" data-action="play" data-is-membership-level-ok="true">
	<a class="rbx-btn-primary-lg" href="<?php echo 'trsblx-player-rb14:1+launchmode:play+gameinfo:'; if(isset($_COOKIE['_ROBLOSECURITY'])){ echo $_COOKIE['_ROBLOSECURITY']; }else{ echo '0'; } echo '+launchtime:17020401369379+placelauncherurl:http%3A%2F%2Fwww.rb14.us.to%2FGame%2FPlaceLauncher.ashx%3FplaceId%3D'.(int)$_GET['placeId'].'+browsertrackerid:197870394468' ?>">Play</a>
    </div>


<script type="text/javascript">
    Roblox = Roblox || {};

    Roblox.BCUpsellModal = function () {
        var resources = {
            //<sl:translate>
            title: "Builders Club Only",
            body: "This is a premium feature only available to our Builders Club members.",
            accept: "Upgrade Now"
            //</sl:translate>
        };

        var open = function () {
            var options = {
                titleText: Roblox.BCUpsellModal.Resources.title,
                bodyContent: Roblox.BCUpsellModal.Resources.body,
                footerText: "",
                acceptText: Roblox.BCUpsellModal.Resources.accept,
                declineText: Roblox.Resources.GenericConfirmation.No,
                acceptColor: Roblox.GenericConfirmation.green,
                onAccept: function () { window.location.href = '/Upgrades/BuildersClubMemberships.aspx'; },
                imageUrl: 'https://images.rbxcdn.com/43ac54175f3f3cd403536fedd9170c10.png'
            };

            Roblox.GenericConfirmation.open(
                options
            );
        };

        return {
            open: open,
            Resources:resources
        };
    } ();
</script>
<script type="text/javascript">
    var play_placeId = 1818;

    function redirectPlaceLauncherToLogin() {
        location.href = "/login/default.aspx?ReturnUrl=" + encodeURIComponent("/games/1818/<?php echo $row['gameName']; ?>");
    }
    function redirectPlaceLauncherToRegister() {
        location.href = "/login/NewAge.aspx?ReturnUrl=" + encodeURIComponent("/games/1818/<?php echo $row['gameName']; ?>");
    }
    function fireEventAction(action) {
        RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
    }
	

    $(function () { $('.VisitButtonPlay').click(function () {play_placeId=$(this).attr('placeid');Roblox.CharacterSelect.placeid = play_placeId;Roblox.CharacterSelect.show();});$('#game-context-menu').on('click touchstart','.VisitButtonBuild', function () {RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Build']);EventTracker.fireEvent('GameLaunchAttempt_Unknown', 'GameLaunchAttempt_Unknown_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  }; play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); Roblox.Client.WaitForRoblox(function() { window.location = '/Login/Default.aspx?ReturnUrl=http%3a%2f%2fwww.rb14.us.to%2fgames%2f1818%2f<?php echo $row['gameName']; ?>' }); return false;});$('#game-context-menu').on('click touchstart','.VisitButtonEdit', function () {RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Edit']);EventTracker.fireEvent('GameLaunchAttempt_Unknown', 'GameLaunchAttempt_Unknown_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  }; play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); Roblox.Client.WaitForRoblox(function() { RobloxLaunch.StartGame('https://www.rb14.us.to//Game/edit.ashx?PlaceID='+play_placeId+'&upload=', 'edit.ashx', 'https://www.rb14.us.to//Login/Negotiate.ashx', 'FETCH', true) }); return false;});$('.VisitButtonPersonalServer').click(function () {play_placeId=$(this).attr('placeid');Roblox.CharacterSelect.placeid = play_placeId;Roblox.CharacterSelect.show();});$(document).on('CharacterSelectLaunch', function (event, genderTypeID) { if (genderTypeID == 3) { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent("GameLaunchAttempt_Unknown", "GameLaunchAttempt_Unknown_Plugin"); } else { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent("GameLaunchAttempt_Unknown", "GameLaunchAttempt_Unknown_Plugin"); }play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); Roblox.Client.WaitForRoblox(function() { RobloxLaunch.RequestGame('PlaceLauncherStatusPanel', play_placeId, genderTypeID); }); return false;});}());;

    



</script>
<script type="text/javascript">
    $(function() {
        Roblox.PlaceItemPurchase = new Roblox.ItemPurchase(function (obj) {
            $(".PurchaseButton[data-item-id="+ obj.AssetID +"]").each(function (index, htmlElem) {
                $("#rbx-place-purchase-required").hide();
                $("#MultiplayerVisitButton").show();
            });
        });

        if("False".toLowerCase() == "true") {
            $(function () {
                $("#rbx-place-purchase-required").on("click", function(e) {
                    Roblox.PlaceItemPurchase.openPurchaseVerificationView(this);
                    return false;
                });
            });
        }
    });
</script>
            </div>


            <ul class="share-rate-favorite">
                

        <li class="favorite-button-container rbx-tooltip" data-toggle="tooltip" title="" data-original-title="Add this game to favorites">
            <a>
                
                <span class="rbx-icon-favorite " data-toggle-url="/favorite/toggle" data-assetid="1818" data-isguest="False">
                    
                </span>
                <span title="53,728">53K+</span>
            </a>

        </li>



<script type="text/javascript">
    //<sl:translate>
    Roblox = Roblox || {};
    Roblox.Resources = Roblox.Resources || {};

    Roblox.Resources.FavoriteButton = {
        AddToFavorites: "Add to favorites",
        RemoveFromFavorites: "Remove from favorites"
    };
    //</sl:translate>

    Roblox.FavoriteButton = Roblox.FavoriteButton || {};
    var isCurrentlyFavorited = false;
    Roblox.FavoriteButton.initialTooltip = isCurrentlyFavorited ? Roblox.Resources.FavoriteButton.RemoveFromFavorites : Roblox.Resources.FavoriteButton.AddToFavorites;
</script>
                
        <li class="voting-panel body" data-asset-id="1818" data-total-up-votes="1284" data-total-down-votes="110" data-vote-modal="" data-user-authenticated="False">
            <div class="loading"></div>
                <div class="vote-summary">
                    <div class="voting-details">
                        <div class="users-vote ">
                            <div class="upvote">
                                <span class="rbx-icon-like "></span>
                                <span id="vote-up-text" class="vote-text">1,284</span>
                            </div>
                            <div class="downvote">
                                <span id="vote-down-text" class="vote-text">110</span>
                                <span class="rbx-icon-dislike "></span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="visual-container">
                        <div class="background"></div>
                        <div class="percent"></div>
                    </div>
                </div>
        </li>




<script>
    $(function () {
        Roblox.Voting.Initialize();

        Roblox.Voting.Resources = {
            //<sl:translate>
            emailVerifiedTitle: "Verify Your Email",
            emailVerifiedMessage: "You must verify your email before you can vote. You can verify your email on the <a href='/my/account?confirmemail=1'>Account</a> page.",

            playGameTitle: "Play Game",
            playGameMessage: "You must play the game before you can vote on it.",

            useModelTitle: "Use Model",
            useModelMessage: "You must use this model before you can vote on it.",

            installPluginTitle: "Install Plugin",
            installPluginMessage: "You must install this plugin before you can vote on it.",

            buyGamePassTitle: "Buy Game Pass",
            buyGamePassMessage: "You must own this game pass before you can vote on it.",

            floodCheckThresholdMetTitle: "Slow Down",
            floodCheckThresholdMetMessage: "You're voting too quickly. Come back later and try again.",

            unknownProblemTitle: "Something Broke",
            unknownProblemMessage: "There was an unknown problem voting. Please try again.",

            guestUserTitle: "Login to Vote",
            guestUserMessage: "<div>You must login to vote.</div> <div>Please <a href='/'>login or register</a> to continue.</div>",

            accept: "Verify",
            decline: "Cancel",
            login: "Login"
            //<sl:translate>
        };
    });
</script>

                
                <li class="social-media-share">
                            <i class="rbx-icon-share" id="rbx-share-btn" data-viewport=".page-content" data-bind="rbx-share-btn-regular-size-content"></i>

<div id="rbx-share-container" data-toggle="rbx-share-btn-regular-size-content">
    <div class="share-container-inner">
        <p class="catchy-title">
            Share with your friends
            <span class="rbx-icon-moreinfo"></span>
        </p>
        <div id="gigya-target"></div>
        <input class="copy-to-clipboard form-control rbx-input-field" type="text" value="https://www.rb14.us.to/games/1818/view" readonly="true"/>
        <div class="catchy-title-tooltip-hover">Share ROBLOX with your friends and earn ROBUX every time they make a purchase.</div>
    </div>
</div>
                            <script>
                                //TODO we will get rid of this when Facebook fixes their problem
                                var facebookScraped = false;
                                function facebookScrapeBugWorkaround(url) {
                                    if (!facebookScraped) {
                                        $.getJSON("https://graph.facebook.com/",
                                        {
                                            id: url,
                                            scrape: true
                                        }, function (data) { facebookScraped = true; });
                                    }
                                        }
                                $("#rbx-share-btn").on("click", function () {
                                    facebookScrapeBugWorkaround("https://www.rb14.us.to/games/1818/view");
                                    socialShareButtons = [
                                        {
                                            'provider': "Facebook",
                                            'enableCount': "true",
                                            'iconImgUp': "https://images.rbxcdn.com/4799659a1367d6c6e235b5986cb9b6b9.png"
                                        },
                                        {
                                            'provider': "Twitter",
                                            'enableCount': "true",
                                            'iconImgUp': "https://images.rbxcdn.com/d75e7a07fd4db793d79060cc5976cb29.png"
                                        },
                                        {
                                            'provider': "Googleplus",
                                            'enableCount': "true",
                                            'iconImgUp': "https://images.rbxcdn.com/ee4b20b19bbaac5eb7c5e2c46a750c5c.png"
                                        }];
                                    Roblox.Social.presentShareDialog("ROBLOX: " + "<?php echo $row['gameName']; ?>", "https://www.rb14.us.to/games/1818/view", "https://t0.rbxcdn.com/60c04edf493a550af2759df941101bbf");
                                });
                            </script>

                </li><!-- .social-media-share -->
            </ul><!-- .share-rate-favorite-->
        </div>
    </div>

    <div class="col-xs-12 rbx-tabs-horizontal">
        <ul id="horizontal-tabs" class="nav nav-tabs" role="tablist">
            <li id="tab-about" class="rbx-tab active">
                <a class="rbx-tab-heading" href="#about">
                    <span class="rbx-lead">About</span>
                </a>
            </li>
            <li id="tab-developer-store" class="rbx-tab">
                <a class="rbx-tab-heading" href="#developer-store">
                    <span class="rbx-lead">Developer Store</span>
                </a>
            </li>
                <li id="tab-leaderboards" class="rbx-tab">
                    <a class="rbx-tab-heading" href="#leaderboards">
                        <span class="rbx-lead">Leaderboards</span>
                    </a>
                </li>

            <li id="tab-game-instances" class="rbx-tab">
                <a class="rbx-tab-heading" href="#game-instances">
                    <span class="rbx-lead">Game Instances</span>
                </a>
            </li>
        </ul>
        <div class="tab-content rbx-tab-content">
            <div class="tab-pane active" id="about">
                <div class="section game-about-container">
                    <h3>Description</h3>
                    <p class="game-description linkify">The classic ROBLOX level is back!</p>

                    <ul class="game-stats-container">
                        <li class="game-stat">
                            <p class="stat-title">Visits</p>
                            <p class="rbx-lead" title="2,856,734">2M+</p>
                        </li>
                        <li class="game-stat">
                            <p class="stat-title">Created</p>
                            <p class="rbx-lead">4/30/2007</p>
                        </li>
                        <li class="game-stat">
                            <p class="stat-title">Updated</p>
                            <p class="rbx-lead">7/1/2013</p>
                        </li>
                        <li class="game-stat">
                            <p class="stat-title">Max Players</p>
                            <p class="rbx-lead">8</p>
                        </li>
                        <li class="game-stat">
                            <p class="stat-title">Genre</p>
                                <p><a class="rbx-lead rbx-link" href="https://www.rb14.us.to/games?GenreFilter=1">All</a></p>
                        </li>
                        <li class="game-stat">
                            <p class="stat-title">Allowed Gear types</p>
                            <p class="rbx-lead stat-gears">
        <span class="rbx-icon-nogear" data-toggle="tooltip" data-original-title="No Gear Allowed"></span>


                            </p>
                        </li>
                    </ul>
                    <div class="game-stat-footer">

                        <span class="game-report-abuse"><a class="rbx-text-danger" href="https://www.rb14.us.to/abusereport/asset?id=1818&amp;RedirectUrl=%2fgames%2f1818%2f<?php echo $row['gameName']; ?>">Report Abuse</a></span>
                    </div>
                </div>



                
<div class="section">
    <div id="AjaxCommentsContainer" class="comments-container" data-asset-id="1818" data-total-collection-size="" data-is-user-authenticated="False">
        <h3>Comments</h3>
        <div class="AddAComment">
            <div class="comment-form">
                <div class="Avatar roblox-avatar-image" data-user-id="-1" data-image-size="small"></div>

                <form class="rbx-form-horizontal ng-pristine ng-valid" role="form">
                    <div class="rbx-form-group">
                        <textarea class="form-control rbx-input-field rbx-comment-input blur" placeholder="Write a comment!" rows="1"></textarea>
                        <div class="rbx-comment-msgs">
                            <span class="rbx-comment-error rbx-text-danger"></span>
                            <span class="rbx-comment-count rbx-text-notes"></span>
                        </div>
                    </div>
                    <button type="button" class="rbx-btn-secondary-sm rbx-post-comment">Post Comment</button>
                </form>
            </div>
            <div class="comments vlist">

            </div>
            <div class="comments-item-template">
                <div class="comment-item list-item">
                    <div class="comment-user list-header">
                        <div class="Avatar" data-user-id="comment-author-id" data-image-size="small"></div>
                    </div>
                    <div class="comment-body list-body">
                        <strong>username</strong>
                        <p class="comment-content list-content"> text </p>
                        <span class="rbx-text-notes">4 hours ago</span>
                    </div>
                    <div class="comment-controls">
                        <a class="rbx-comment-report-link" href="https://www.rb14.us.to/abusereport/comment?id=%CommentID&amp;redirectUrl=%PageURL" title="Report Abuse"><span class="rbx-icon-flag"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="AjaxCommentsMoreButtonContainer">
        <button type="button" class="rbx-btn-control-sm rbx-comments-see-more hidden">See More</button>
    </div>
</div>
<script>
    $(document).ready(function () {
        rb14.us.toments.Resources = {
            //<sl:translate>
            defaultMessage: 'Write a comment!',
            noCommentsFound: 'No comments found.',
            moreComments: 'More comments',
            sorrySomethingWentWrong: 'Sorry, something went wrong.',
            charactersRemaining: ' characters remaining',
            emailVerifiedABTitle: 'Verify Your Email',
            emailVerifiedABMessage: "You must verify your email before you can comment. You can verify your email on the <a href='/my/account?confirmemail=1'>Account</a> page.",
            linksNotAllowedTitle: 'Links Not Allowed',
            linksNotAllowedMessage: 'Comments should be about the item or place on which you are commenting. Links are not permitted.',
            accept: 'Verify',
            decline: 'Cancel',
            tooManyCharacters: 'Too many characters!',
            tooManyNewlines: 'Too many newlines!'
            //</sl:translate>
        };
    
        rb14.us.toments.Limits =
        [
            {
                limit: '10',
                character: "\n",
                message: rb14.us.toments.Resources.tooManyNewlines
            },
            {
                limit: '200',
                character: undefined,
                message: rb14.us.toments.Resources.tooManyCharacters
            }
        ];

        rb14.us.toments.FilterIsEnabled = true;
        rb14.us.toments.FilterRegex = "(([a-zA-Z0-9-]+\\.[a-zA-Z]{2,4}[:\\#/\?]+)|([a-zA-Z0-9]\\.[a-zA-Z0-9-]+\\.[a-zA-Z]{2,4}))";
        rb14.us.toments.FilterCleanExistingComments = false ;


    
    rb14.us.toments.initialize();
    });
</script>

                
                    <div id="my-recommended-games" class="col-xs-12 container-list games-detail">
                        <div class="container-header">
                            <h3>Recommended Games</h3>
                        </div>
                        
                        

<ul class="hlist game-list">
        <li class="list-item game">
            <a href="https://www.rb14.us.to/games/refer?RecommendationType=1&amp;RecommendationSourceId=1818&amp;PlaceId=19549795&amp;Position=1&amp;PageType=Recommendation&amp;Autoplay=False" class="game-item">
                <span class="game-thumb"><img class="" src="https://t6.rbxcdn.com/f3dbff423995cb7574414a58ffb0308f"/></span>
                <span class="rbx-title rbx-text-overflow">Call of Robloxia 5 - Roblox at War</span>
                    <span class="rbx-text-notes rbx-font-sm">518 Online</span>
            </a>
        </li>
        <li class="list-item game">
            <a href="https://www.rb14.us.to/games/refer?RecommendationType=1&amp;RecommendationSourceId=1818&amp;PlaceId=11235413&amp;Position=2&amp;PageType=Recommendation&amp;Autoplay=False" class="game-item">
                <span class="game-thumb"><img class="" src="https://t1.rbxcdn.com/16b3adfebccf6bbdbf26094170da64c7"/></span>
                <span class="rbx-title rbx-text-overflow">What am I Drawing? (NEW!) [GRAND OPENING]</span>
                    <span class="rbx-text-notes rbx-font-sm">54 Online</span>
            </a>
        </li>
        <li class="list-item game">
            <a href="https://www.rb14.us.to/games/refer?RecommendationType=1&amp;RecommendationSourceId=1818&amp;PlaceId=153850&amp;Position=3&amp;PageType=Recommendation&amp;Autoplay=False" class="game-item">
                <span class="game-thumb"><img class="" src="https://t7.rbxcdn.com/60403de8925cdc960857dfe6478b72c9"/></span>
                <span class="rbx-title rbx-text-overflow">WWII: Battle For Carentan</span>
                    <span class="rbx-text-notes rbx-font-sm">3 Online</span>
            </a>
        </li>
        <li class="list-item game">
            <a href="https://www.rb14.us.to/games/refer?RecommendationType=1&amp;RecommendationSourceId=1818&amp;PlaceId=85697719&amp;Position=4&amp;PageType=Recommendation&amp;Autoplay=False" class="game-item">
                <span class="game-thumb"><img class="" src="https://t3.rbxcdn.com/5ce538e52e85c3451a754b79b2ec940c"/></span>
                <span class="rbx-title rbx-text-overflow">Kingdom Life™ II [Textured Hats!]</span>
                    <span class="rbx-text-notes rbx-font-sm">156 Online</span>
            </a>
        </li>
</ul>
                    </div>
            </div>
            <div class="tab-pane developer-store" id="developer-store">
                        <p><strong>This game does not sell any virtual items or power-ups.</strong></p>


                


<script>
    $(function () {
        Roblox.GamePassJSData = { };
        Roblox.GamePassJSData.PlaceID = 1818;

        var purchaseConfirmationCallback = function (obj) {
            var originalContainer = $('.PurchaseButton[data-item-id=' + obj.AssetID + ']').parent('.rbx-caption');
            originalContainer.find('.rbx-purchased').hide();
            originalContainer.find('.rbx-item-buy').show();

        };
        Roblox.GamePassItemPurchase = new Roblox.ItemPurchase(purchaseConfirmationCallback);

        $("#developer-store #rbx-game-passes").on("click", ".PurchaseButton", function (e) {
            Roblox.PlaceProductPromotionItemPurchase.openPurchaseVerificationView($(this));
        });

        $("#developer-store #rbx-game-passes .btn-more").on("click", function (e) {
            $("#rbx-game-passes #rbx-passes-container").toggleClass("collapsed");
        });
    });
</script>


                


<input name="__RequestVerificationToken" type="hidden" value="AjLhQN1df71rMUIz0ewQWOA5hM-vOl1QqXqcEcYbN7qgKVaLjzqOot-pFkd-1ACXVzsfZWHI6DcU76zCBRCC7yS5iaQ1"/>

<script>
    // From DisplayProductPromotions
    $(function() {
        Roblox.PlaceProductPromotion.Resources = {
            //<sl:translate>
            anErrorOccurred: 'An error occurred, please try again.'
            , youhaveAdded: "You have added "
            , toYourGame: " to your game, "
            , youhaveRemoved: "You have removed "
            , fromYourGame: " from your game."
            , ok: "OK"
            , success: "Success!"
            , error: "Error"
            , sorryWeCouldnt: "Sorry, we couldn't remove the item from your game. Please try again."
            , notForSale: "This item is not for sale."
            , rent: "Rent"
            //<sl:translate>
        };

        var purchaseConfirmationCallback = function (obj) {
            var originalContainer = $('.PurchaseButton[data-item-id=' + obj.AssetID + ']').parent('.rbx-caption');
            originalContainer.find('.rbx-purchased').hide();
            originalContainer.find('.rbx-item-buy').show();
            
        };
        Roblox.PlaceProductPromotionItemPurchase = new Roblox.ItemPurchase(purchaseConfirmationCallback);
        Roblox.PlaceProductPromotion.PlaceID = 1818;

        $("#developer-store").on("click", ".rbx-icon-delete", function(e) {
            var promoId = $(this).data('delete-promotion-id');
            Roblox.PlaceProductPromotion.DeleteGear(promoId);
        });

        $("#developer-store #rbx-game-gear").on("click", ".PurchaseButton", function (e) {
            Roblox.PlaceProductPromotionItemPurchase.openPurchaseVerificationView($(this));
        });

        $("#developer-store #rbx-game-gear .btn-more").on("click", function (e) {
            $("#rbx-game-gear .rbx-gear-container").toggleClass("collapsed");
        });

    });

</script>

<div id="DeleteProductPromotionModal" class="PurchaseModal">
    <div id="simplemodal-close" class="simplemodal-close">
        <a></a>
    </div>
    <div class="titleBar" style="text-align: center">
    </div>
    <div class="PurchaseModalBody">
        <div class="PurchaseModalMessage">
            <div class="PurchaseModalMessageImage">
                <div class="thumbs-up-green">
                </div>
            </div>
            <div class="PurchaseModalMessageText">
            </div>
        </div>
        <div class="PurchaseModalButtonContainer">
            <div class="ImageButton btn-blue-ok-sharp simplemodal-close"></div>
        </div>
        <div class="PurchaseModalFooter"></div>
    </div>
</div>




            </div>

            <div class="tab-pane" id="leaderboards">
                
                    <div class="col-md-6">
                        

<div id="rbx-leaderboard-container-player" class="section rbx-leaderboard-container rbx-leaderboard-btn-player" data-associated-leaderboard-more="rbx-leaderboard-player">
    <div class="rbx-leaderboard-data" data-distributor-target-id="13058" data-max="20" data-rank-max="4" data-target-type="0" data-time-filter="3" data-player-id="-1" data-clan-id="-1"></div>
    <div class="rbx-leaderboard-item-template hidden">
        <div class="rbx-leaderboard-item">
            <div class="rank"></div>
            <div class="avatar"></div>
            <div class="name-and-group"></div>
            <div class="points"></div>
        </div>
    </div>
    <div class="rbx-popover-content" data-toggle="popover-leaderboard-player">
        <ul class="rbx-dropdown-menu" role="menu">
            <li>
                <a data-time-filter="0">Today</a>
            </li>
            <li>
                <a data-time-filter="1">Past Week</a>
            </li>
            <li>
                <a data-time-filter="2">Past Month</a>
            </li>
            <li>
                <a data-time-filter="3">All Time</a>
            </li>
        </ul>
    </div>
    <div class="rbx-leaderboard-header">
        <h3>Players</h3>
        <div class="rbx-leaderboard-controls">
            <div class="rbx-leaderboard-filter">
                <span class="rbx-leaderboard-filtername">All Time</span>
                <a class="rbx-menu-item" data-toggle="popover" data-bind="popover-leaderboard-player" data-original-title="" title="" data-viewport=".rbx-leaderboard-btn-player" data-placement="left"><span class="rbx-icon-sorting" id="rbx-leaderboard-popover-player"></span></a>
            </div>
        </div>

    </div>
    <div class="rbx-leaderboard-my"></div>
    <div class="rbx-leaderboard-items"></div>

</div>

<div class="rbx-leaderboard-more-container rbx-leaderboard-player" data-associated-leaderboard="rbx-leaderboard-btn-player">
    <button type=" button" class="rbx-btn-control-sm rbx-leaderboard-see-more hidden">
    See More</button>
</div>
    <script>
        var Roblox = Roblox || {};
        Roblox.Leaderboard = Roblox.Leaderboard || {};
        Roblox.Leaderboard.Resources = {};
        //<sl:translate>
        Roblox.Leaderboard.Resources.ErrorLoading = "Error loading rows.";
        Roblox.Leaderboard.Resources.Loading = "Loading...";
        Roblox.Leaderboard.Resources.GoGetPoints = "You are not yet ranked for this time period. Go earn some Points!";
        //</sl:translate>
    </script>

                    </div>
                    <div class="col-md-6">
                        

<div id="rbx-leaderboard-container-clan" class="section rbx-leaderboard-container rbx-leaderboard-clan" data-associated-leaderboard-more="rbx-leaderboard-btn-clan">
    <div class="rbx-leaderboard-data" data-distributor-target-id="13058" data-max="20" data-rank-max="4" data-target-type="1" data-time-filter="3" data-player-id="-1" data-clan-id="-1"></div>
    <div class="rbx-leaderboard-item-template hidden">
        <div class="rbx-leaderboard-item">
            <div class="rank"></div>
            <div class="avatar"></div>
            <div class="name-and-group"></div>
            <div class="points"></div>
        </div>
    </div>
    <div class="rbx-popover-content" data-toggle="popover-leaderboard-clan">
        <ul class="rbx-dropdown-menu" role="menu">
            <li>
                <a data-time-filter="0">Today</a>
            </li>
            <li>
                <a data-time-filter="1">Past Week</a>
            </li>
            <li>
                <a data-time-filter="2">Past Month</a>
            </li>
            <li>
                <a data-time-filter="3">All Time</a>
            </li>
        </ul>
    </div>
    <div class="rbx-leaderboard-header">
        <h3>Clans</h3>
        <div class="rbx-leaderboard-controls">
            <div class="rbx-leaderboard-filter">
                <span class="rbx-leaderboard-filtername">All Time</span>
                <a class="rbx-menu-item" data-toggle="popover" data-bind="popover-leaderboard-clan" data-original-title="" title="" data-viewport=".rbx-leaderboard-clan" data-placement="left"><span class="rbx-icon-sorting" id="rbx-leaderboard-popover-clan"></span></a>
            </div>
        </div>

    </div>
    <div class="rbx-leaderboard-my"></div>
    <div class="rbx-leaderboard-items"></div>

</div>

<div class="rbx-leaderboard-more-container rbx-leaderboard-btn-clan" data-associated-leaderboard="rbx-leaderboard-clan">
    <button type=" button" class="rbx-btn-control-sm rbx-leaderboard-see-more hidden">
    See More</button>
</div>
    <script>
        var Roblox = Roblox || {};
        Roblox.Leaderboard = Roblox.Leaderboard || {};
        Roblox.Leaderboard.Resources = {};
        //<sl:translate>
        Roblox.Leaderboard.Resources.ErrorLoading = "Error loading rows.";
        Roblox.Leaderboard.Resources.Loading = "Loading...";
        Roblox.Leaderboard.Resources.GoGetPoints = "You are not yet ranked for this time period. Go earn some Points!";
        //</sl:translate>
    </script>

                    </div>

                <script>

                    // lazy load 
                    $(".rbx-tab a[href='#leaderboards']").on('shown.bs.tab', function (e) {
                        // e.target newly activated tab
                        // e.relatedTarget previous active tab
                        Roblox.Leaderboard.init();
                    });
                </script>
            </div>

            <div class="tab-pane game-instances" id="game-instances">
                


    
    <div id="rbx-running-games" class="container-list" data-placeid="1818" data-showshutdown>
        <div class="container-header">
            <h3>Running Games</h3>
            <span class="rbx-btn-secondary-xs btn-more rbx-running-games-refresh">Refresh</span>
        </div>
        <ul id="rbx-game-server-item-container" class="rbx-game-server-item-container">
            
        </ul>
        <div class="rbx-running-games-footer">
                <button type="button" class="rbx-btn-control-xs btn-full-width rbx-running-games-load-more hidden">Load More</button>

        </div>
        <div class="rbx-game-server-template">
            <li class="section rbx-game-server-item">
                <div class="section-header">
                    <div class="link-menu rbx-game-server-menu"></div>
                </div>
                <div class="section-left rbx-game-server-details">
                    <div class="rbx-game-status rbx-game-server-status">x of y players max</div>
                    <div class="rbx-game-server-alert">
                        <span class="rbx-icon-remove"></span>Slow Game
                    </div>
                    <a class="btn-full-width rbx-btn-control-xs rbx-game-server-join" href="#" data-placeid>Join</a>

                </div>
                <div class="section-right rbx-game-server-players">
                </div>
            </li>
        </div>
    </div>



            </div>
        </div>
    </div>

</div>


<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer">
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>
        </div>
        <div class="clear"></div>
        <div id="GenericModalButtonContainer" class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a>
        </div>  
    </div>
</div>



<div id="ItemPurchaseAjaxData" data-authenticateduser-isnull="True" data-user-balance-robux="0" data-user-balance-tickets="0" data-user-bc="0" data-continueshopping-url="https://www.rb14.us.to/games/1818/view" data-imageurl="https://t2.rbxcdn.com/6893a74f94ec60b4d8f5318ead65faeb" data-alerturl="https://images.rbxcdn.com/cbb24e0c0f1fb97381a065bd1e056fcb.png" data-builderscluburl="https://images.rbxcdn.com/ae345c0d59b00329758518edc104d573.png">
    
</div>


<div id="ProcessingView" style="display:none">
    <div class="ProcessingModalBody">
        <p style="margin:0px"><img src="https://images.rbxcdn.com/116db03ed7027c242f773e70a4ed2e68.png" alt="Processing..."/></p>
        <p style="margin:7px 0px">Processing Transaction</p>
    </div>
</div>




<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
    <div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://images.rbxcdn.com/ae345c0d59b00329758518edc104d573.png"/>
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

                <div id="Skyscraper-Adp-Right" class="abp abp-container right-abp">
                    
<iframe allowtransparency="true" frameborder="0" height="612" scrolling="no" src="https://www.rb14.us.to/userads/2" width="160" data-js-adtype="iframead"></iframe>
                </div>
        </div>
            </div> 

<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//web.archive.orghttps://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<footer class="container-footer">
    <div class="footer">
        <ul class="row footer-links">
            <li class="col-xs-4 col-sm-2 footer-link"><a href="//web.archive.orghttps://corp.rb14.us.to/" class="roblox-interstitial" target="_blank"><h2>About Us</h2></a></li>
            <li class="col-xs-4 col-sm-2 footer-link"><a href="//web.archive.orghttps://corp.rb14.us.to/jobs" class="roblox-interstitial" target="_blank"><h2>Jobs</h2></a></li>
            <li class="col-xs-4 col-sm-2 footer-link"><a href="//web.archive.orghttps://blog.rb14.us.to/" class="roblox-interstitial" target="_blank"><h2>Blog</h2></a></li>
            <li class="col-xs-4 col-sm-2 footer-link"><a href="https://www.rb14.us.to/Info/Privacy.aspx" target="_blank"><h2>Privacy</h2></a></li>
            <li class="col-xs-4 col-sm-2 footer-link"><a href="//web.archive.orghttps://corp.rb14.us.to/parents" class="roblox-interstitial" target="_blank"><h2>Parents</h2></a></li>
            <li class="col-xs-4 col-sm-2 footer-link"><a href="//web.archive.orghttps://en.help.rb14.us.to/" class="roblox-interstitial" target="_blank"><h2>Help</h2></a></li>
        </ul>
        <p class="footer-note">
            ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a target="_blank" href="//web.archive.orghttps://corp.rb14.us.to/" class="rbx-link roblox-interstitial">ROBLOX Corporation</a>, ©2015. Patents pending. ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex, and no resemblance to the products of these companies is intended. Use of this site signifies your acceptance of the <a href="https://www.rb14.us.to/info/terms-of-service" target="_blank" class="rbx-link">Terms and Conditions</a>.
        </p>
        
    </div>
</footer>


<script src="https://apis.google.com/js/platform.js"></script></div> 


<div id="ChatContainer" style="position:fixed; bottom:0; right:0; z-index:10020;">

</div>




    <script type="text/javascript">function urchinTracker() {}</script>


<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-protocol-handler-launch-enabled="False" data-is-user-logged-in="False" data-os-name="Unknown" data-protocol-name-for-client="roblox-player" data-protocol-name-for-studio="roblox-studio">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="padding:20px 0;">
            <img src="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress"/>
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
                <img src="https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" width="82" height="24"/>
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
            <img src="/web/20150413165517im_/https://www.rb14.us.to/images/Logo/logo_meatball.svg" width="90" height="90" alt="R"/>
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
        Check <b>Remember my choice</b> and click <img src="https://images.rbxcdn.com/7c8d7a39b4335931221857cca2b5430b.png" alt="Launch Application"/>  in the dialog box above to join games faster in the future!
    </p>
</div>


<script type="text/javascript" src="/rbxcdn_js/e59cc9c921c25a5cd61d18f0a7fd5ac8.js"></script>
 
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
            Roblox.VideoPreRoll.videoOptions.categories = "AgeUnknown,GenderUnknown,All";
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


<div id="GuestModePrompt_BoyGirl" style="display:none;">
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
                <img src="https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" width="82" height="24"/>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkRobloxInstall() {
                 window.location = '/install/unsupported.aspx'; return false;
    }

</script>

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

<script type="text/javascript" src="/rbxcdn_js/545d0803eb2d37df6ff8c9457a43bb79.js"></script>

<script type="text/javascript">
    Roblox.Client._skip = '/install/unsupported.aspx';
    Roblox.Client._CLSID = '';
    Roblox.Client._installHost = '';
    Roblox.Client.ImplementsProxy = false;
    Roblox.Client._silentModeEnabled = false;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';
    Roblox.Client._eventStreamLoggingEnabled = false;

        
    Roblox.Client._installSuccess = function() {
        if(GoogleAnalyticsEvents){
            GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
            GoogleAnalyticsEvents.FireEvent(['Plugin','Install Success']);
            if (Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
                Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
            }
        }
    }
    
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
        <div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
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
    var Roblox = Roblox || {};
    Roblox.jsConsoleEnabled = false;
</script>

    
    <script type="text/javascript" src="/rbxcdn_js/855adda3946fa24570ea056c16462437.js"></script>


    
    <script type="text/javascript" src="/rbxcdn_js/822491cace41a2d39fd76db6cfd17800.js"></script>

    
    
    <script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = '/rbxcdn_js/a2ff3787d1fd8d3c2492b5f5c5ec70b6.js';Roblox.config.paths['Pages.CatalogShared'] = '/rbxcdn_js/4eb48eec34ca711d5a7b08a4291ac753.js';Roblox.config.paths['Pages.Messages'] = '/rbxcdn_js/e8cbac58ab4f0d8d4c707700c9f97630.js';Roblox.config.paths['Resources.Messages'] = '/rbxcdn_js/fb9cb43a34372a004b06425a1c69c9c4.js';Roblox.config.paths['Widgets.AvatarImage'] = '/rbxcdn_js/bbaeb48f3312bad4626e00c90746ffc0.js';Roblox.config.paths['Widgets.DropdownMenu'] = '/rbxcdn_js/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = '/rbxcdn_js/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = '/rbxcdn_js/fbb86cf0752d23f389f983419d3085b4.js';Roblox.config.paths['Widgets.ItemImage'] = '/rbxcdn_js/838ec9c8067ba6fd6793a8bdbdb48a5c.js';Roblox.config.paths['Widgets.PlaceImage'] = '/rbxcdn_js/f2697119678d0851cfaa6c2270a727ed.js';Roblox.config.paths['Widgets.SurveyModal'] = '/rbxcdn_js/d6e979598c460090eafb6d38231159f6.js';</script>

    
    <script>
        Roblox.XsrfToken.setToken('IyVvGyBWHobf');
    </script>
    
        <script>
            $(function () {
                Roblox.DeveloperConsoleWarning.showWarning();
            });
        </script>
    <script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script>
    

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

    
    <script type="text/javascript" src="/rbxcdn_js/d337b70d85c5a77cec7b4b4314c42939.js"></script>

</body>
</html><!--
     FILE ARCHIVED ON 16:55:17 Apr 13, 2015 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 20:26:49 Jul 06, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 0.673
  exclusion.robots: 0.171
  exclusion.robots.policy: 0.16
  esindex: 0.01
  cdx.remote: 10.664
  LoadShardBlock: 122.481 (3)
  PetaboxLoader3.datanode: 121.937 (4)
  load_resource: 154.149
  PetaboxLoader3.resolve: 105.772
-->