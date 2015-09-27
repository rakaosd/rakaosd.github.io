<!DOCTYPE html>
<html lang="en" data-ng-app="Wagnaria">
<head>
  <title>Wagnaria!/KN - Completed</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/pure-min.css" rel="stylesheet" media="screen">
  <link href="css/glyphs.min.css" rel="stylesheet" media="screen">
  <link href="css/main.css" rel="stylesheet" media="screen">
  <link rel="shortcut icon" href="http://puu.sh/kjiKX/97d5bb4118.png"/>
  <style type="text/css">
<!--
.style4 {color: #FFFFFF}
-->
  </style>
</head>
<body>
<div id="basket" class="pure-g-r">
  <div id="parasol" class="pure-u">
    <div class="pure-menu pure-menu-open">
      <a class="pure-menu-heading" href="http://www.kentutneraka.org">Kentutneraka</a>
      <ul ng-controller="StatusCtrl">
        <li id="nav_airing" ng-if="counts.airing > 0"><a href="http://wagnaria-kn.zz.mu/">Airing (9) </a></li>
        <li id="nav_incomplete" ng-if="counts.incomplete > 0"><a href="http://wagnaria-kn.zz.mu/incomplete.php">Incomplete (10)</a></li>
        <li id="nav_complete" ng-if="counts.complete > 0"><a href="http://wagnaria-kn.zz.mu/completed.php">Completed (30)</a></li>
        <li id="nav_staff" class="menu-item-divided"><a href="http://wagnaria-kn.zz.mu/staff.php">Staff</a></li>
		<li id="nav_complete" ng-if="counts.complete > 0"><a href="http://wagnaria-kn.zz.mu/recruitment.html">Recruitment?</a></li>
		  <li id="nav_staff" class="menu-item-divided"><a href="http://wagnaria-kn.zz.mu/showtimes">Ruang Staff KN</a></li>
      </ul>
    </div>
  </div>
  <div id="???" class="pure-u" data-ui-view></div>
</div>  
  <!-- JavaScript -->
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.0-rc.3/angular.min.js"></script>
  <script src="lib/angular-ui-router.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.0-rc.3/angular-resource.min.js"></script>
  <script src="lib/angular-piwik.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/moment.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/ja.js"></script>
  <script src="js/main.js"></script>

    <!-- Templates -->
  <style type="text/css">
<!--
.style31 {color: 0000}
-->
</style>
</head>
<style type="text/css">
<!--
body {
	margin-top: -20px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	background-color: #fffff;
}

-->
</style>
<link href="favicon.png" rel="shortcut icon" type="image/x-icon">
</head>
<body hola-ext-player="1">
<div class="pure-g-r" id="basket"><span class="pure-menu-toggle" id="toggle" pbzloc="66">?</span>
<div class="pure-u" data-ui-view="" id="?H???">
<div class="ng-scope" data-ui-view="" id="muffinbox">
<table class="pure-table pure-table-horizontal ng-scope">
<thead>
<tr><th width="25%">Series</th>
<th width="9%">Episode</th>
<th width="10%">Last Aired</th>
<th width="12%">Translator</th>
<th width="12%">Timer</th>
<th width="12%">Editor</th>
<th width="12%">Typesetter</th>
</tr></thead>
  <!-- tanda -->

    <tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Furi Kuri">FLCL</a></div></td>
      <td><div align="left">6</div></td>
      <td><div align="left">Mar 16, 2001</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">AnaF</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">\an8</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/2014/06/full-metal-panic-batch.html">Full Metal Panic!</a></div></td>
      <td><div align="left">24</div></td>
      <td><div align="left">Jun 18, 2002</div></td>
      <td><div align="left">Aeul</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">cacaJuwita</div></td>
      <td><div align="left">\an8</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/2013/08/full-metal-panic-fumoffu-subtitle.html">Full Metal Panic! Fumoffu</a></div></td>
      <td><div align="left">13</div></td>
      <td><div align="left">Oct 18, 2003</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">\an8</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/2014/02/kumo-no-mukou-yakusoku-no-basho-movie.html">Kumo no Mukou, Yakusoku no Basho</a></div></td>
      <td><div align="left">1</div></td>
      <td><div align="left">Nov 20, 2004</div></td>
      <td><div align="left">rakaJuwita</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">\an8</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/2013/06/full-metal-panic-second-raid-subtitle.html">Full Metal Panic! TSR</a></div></td>
      <td><div align="left">13</div></td>
      <td><div align="left">Oct 20, 2005</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">\an8</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/2013/07/full-metal-panic-second-raid-ova.html">Full Metal Panic! TSR OVA</a></div></td>
      <td><div align="left">1</div></td>
      <td><div align="left">May 26, 2006</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">\an8</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Claymore%20BD">Claymore</a></div></td>
      <td><div align="left">26</div></td>
      <td><div align="left">Sep 26, 2007</div></td>
      <td><div align="left">Zhara</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">\an8</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/2015/06/working-bd-batch.html">Working!!</a></div></td>
      <td><div align="left">13</div></td>
      <td><div align="left">Jun 27, 2010</div></td>
      <td><div align="left">Aleki</div></td>
      <td><div align="left">OmBobby</div></td>
      <td><div align="left">OmBobby</div></td>
      <td><div align="left">rakaosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/2014/02/yojouhan-shinwa-taikei-tatami-galaxy-bd.html">Yojouhan Shinwa Taikei</a></div></td>
      <td><div align="left">11</div></td>
      <td><div align="left">Jul 2, 2010</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">Elysium</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">\an8</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/2015/07/working-season-2-bd-batch.html">Working'!!</a></div></td>
      <td><div align="left">11</div></td>
      <td><div align="left">Dec 24, 2011</div></td>
      <td><div align="left">Lulubobby</div></td>
      <td><div align="left">OmBobby</div></td>
      <td><div align="left">Bobosd</div></td>
      <td><div align="left">rakaosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Chihayafuru">Chihayafuru</a></div></td>
      <td><div align="left">25</div></td>
      <td><div align="left">Mar 28, 2012</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">HSedit</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">commieosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/2014/07/kids-on-slope-bd-batches.html">Kids on the Slope</a></div></td>
      <td><div align="left">12</div></td>
      <td><div align="left">Jun 29, 2012</div></td>
      <td><div align="left">melow</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">\an8</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Ghost%20in%20the%20Shell%3A%20Arise">Ghost in the Shell Arise 1</a></div></td>
      <td><div align="left">1</div></td>
      <td><div align="left">Jun 22, 2013</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">commie</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">commieosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Chihayafuru%20S2">Chihayafuru 2</a></div></td>
      <td><div align="left">25</div></td>
      <td><div align="left">Jun 29, 2013</div></td>
      <td><div align="left">calutakosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">commieosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Chihayafuru%20OVA">Chihayafuru OVA</a></div></td>
      <td><div align="left">1</div></td>
      <td><div align="left">Sep 13, 2013</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">commie</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">commieosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Ghost%20in%20the%20Shell%3A%20Arise">Ghost in the Shell Arise 2</a></div></td>
      <td><div align="left">1</div></td>
      <td><div align="left">Nov 30, 2013</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">commie</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">commieosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/2014/09/giovanni-no-shima-pulau-giovanni-bd.html">Giovanni no Shima</a></div></td>
      <td><div align="left">1</div></td>
      <td><div align="left">Feb 22, 2014</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">\an8</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Mahou%20Sensou">Mahou Sensou</a></div></td>
      <td><div align="left">12</div></td>
      <td><div align="left">Mar 28, 2014</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">HS</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">IX</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Ping%20Pong">Pong Pong</a></div></td>
      <td><div align="left">11</div></td>
      <td><div align="left">Jun 20, 2014</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">WhyNot</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">comwhyosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Ghost%20in%20the%20Shell%3A%20Arise">Ghost in the Shell Arise 3</a></div></td>
      <td><div align="left">1</div></td>
      <td><div align="left">Jun 28, 2014</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">commie</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">commieosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Ghost%20in%20the%20Shell%3A%20Arise">Ghost in the Shell Arise 4</a></div></td>
      <td><div align="left">1</div></td>
      <td><div align="left">Sep 6, 2014</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">commie</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left">commieosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Baby%20Steps">Baby Steps</a></div></td>
      <td><div align="left">25</div></td>
      <td><div align="left">Sep 21, 2014</div></td>
      <td><div align="left">Elex</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/2015/03/yamada-kun-to-7-nin-no-majo-ova-01.html">Yamada-kun to 7-nin no Majo OVA 1</a></div></td>
      <td><div align="left">1</div></td>
      <td><div align="left">Dec 17, 2014</div></td>
      <td><div align="left">NandoL</div></td>
      <td><div align="left">Mahou-X</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">Mahou-X</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Wolf Girl and Black Prince">Wolf Girl and Black Prince</a></div></td>
      <td><div align="left">12</div></td>
      <td><div align="left">Dec 21, 2014</div></td>
      <td><div align="left">Yupina</div></td>
      <td><div align="left">HSedit</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">commieosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td class="title"></b> <a id="show_1" onclick="document.getElementById('spoiler_1').style.display=''; document.getElementById('show_1').style.display='none';" class="link">Shinmai Maou no Testament</a><span id="spoiler_1" style="display: none"><a onclick="document.getElementById('spoiler_1').style.display='none'; document.getElementById('show_1').style.display='';" class="link">Shinmai Maou no Testament</a><br> 
<a href="http://www.kentutneraka.org/search/label/Shinmai%20Maou%20no%20Testament%20">[TV]</a><a href="http://www.kentutneraka.org/search/label/Shinmai%20Maou%20no%20Testament%20BD">[BD]<br></a></div></td>
      <td><div align="left">12</div></td>
      <td><div align="left">Mar 26, 2015</div></td>
      <td><div align="left">Calutakburi</div></td>
      <td><div align="left">HSedit</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">FFFyuuosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td class="title"></b> <a id="show_rokka" onclick="document.getElementById('spoiler_rokka').style.display=''; document.getElementById('show_rokka').style.display='none';" class="link">The Seven Deadly Sins</a><span id="spoiler_rokka" style="display: none"><a onclick="document.getElementById('spoiler_rokka').style.display='none'; document.getElementById('show_rokka').style.display='';" class="link">The Seven Deadly Sins</a><br> 
<a href="http://www.kentutneraka.org/search/label/The%20Seven%20Deadly%20Sins">[TV]</a><a href="http://www.kentutneraka.org/search/label/The%20Seven%20Deadly%20Sins%20BD">[BD]<br></a></div></td>
      <td><div align="left">24</div></td>
      <td><div align="left">Mar 29, 2015
</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">osdraka</div></td>
      <td><div align="left"><s>chyuu</s>rakaosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Yoru%20no%20Yatterman">Yoru no Yatterman</a></div></td>
      <td><div align="left">12</div></td>
      <td><div align="left">Mar 29, 2015</td>
      <td><div align="left">OmBobby</div></td>
      <td><div align="left">OmBobby</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">commieosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/2015/09/taifuu-no-noruda-topan-noruda-bd.html">Taifuu no Noruda</a></div></td>
      <td><div align="left">1</div></td>
      <td><div align="left">Jun 5, 2015</div></td>
      <td><div align="left">calutak</div></td>
      <td><div align="left">Ichwan</div></td>
      <td><div align="left">OmBobby</div></td>
      <td><div align="left">rakaosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/2015/06/shinmai-maou-no-testament-ova-13.html">Shinmai Maou no Testament OVA</a></div></td>
      <td><div align="left">1</div></td>
      <td><div align="left">Jun 22, 2015</div></td>
      <td><div align="left">OmBobby</div></td>
      <td><div align="left">OmBobby</div></td>
      <td><div align="left">BobbyOm</div></td>
      <td><div align="left">OmBobby</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td><div align="left"><a href="http://www.kentutneraka.org/search/label/Prison%20School">Prison School</a></div></td>
      <td><div align="left">12</div></td>
      <td><div align="left">Sep 26, 2015</div></td>
      <td><div align="left">NandoL</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
    </tr>
    
    </tr>