<!DOCTYPE html>
<html lang="en" data-ng-app="Wagnaria">
<head>
  <title>Wagnaria!/KN - Staff</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/pure-min.css" rel="stylesheet" media="screen">
  <link href="css/glyphs.min.css" rel="stylesheet" media="screen">
  <link href="css/main.css" rel="stylesheet" media="screen">
  <link rel="shortcut icon" href="http://puu.sh/kjiKX/97d5bb4118.png"/>
  <style type="text/css">
<!--
.style1 {color: #2f7ab9}
.style2 {color: #CC6666}
.style3 {color: #000000; }
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
	margin-top: -40px;
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
		<tr>
			<th width="27%">Name</th>
			<th width="48%">Position</th>
			<th width="25%">Twitter</th>
		</tr>
	</thead>
	<tbody><!-- ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">rakaosd</td>
			<td class="ng-binding">Dictator</td>
			<td><a class="ng-binding" href="https://twitter.com/rakapriadika">@rakapriadika</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">cacaJuwita</td>
			<td class="ng-binding">Translator</td>
			<td><a class="ng-binding" href="https://twitter.com/sarahgartika">@sarahgartika</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">calutak</td>
			<td class="ng-binding">Translator</td>
			<td><a class="ng-binding" href="https://twitter.com/hanifhilmy">@hanifhilmy</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">OmBobby</td>
			<td class="ng-binding">Translator, Timer, Editor, Typesetter </td>
			<td><a class="ng-binding" href="https://twitter.com/Irfanarya55">@irfanarya55</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">Invidia</td>
			<td class="ng-binding">Encoder</td>
			<td><a class="ng-binding" href="https://twitter.com/fridtzz">@fridtzz</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">Hariri</td>
			<td class="ng-binding">Encoder</td>
			<td><a class="ng-binding" href="https://twitter.com/">@</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">Panji</td>
			<td class="ng-binding">Encoder, Mirror-man </td>
			<td><a class="ng-binding" href="http://twitter.com/jul14n_tk">@jul14n_tk</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">Nezumikyun</td>
			<td class="ng-binding">Encoder</td>
			<td><a class="ng-binding" href="https://twitter.com/">@</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">A.J</td>
			<td class="ng-binding">Encoder</td>
			<td><a class="ng-binding" href="https://twitter.com/CherilynMoses68">@CherilynMoses68</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">titidus</td>
			<td class="ng-binding">Translator</td>
			<td><a class="ng-binding" href="https://twitter.com/titidus">@titidus</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">NandoL</td>
			<td class="ng-binding">Translator, Editor </td>
			<td><a class="ng-binding" href="https://twitter.com/ScrNando007">@ScrNando007</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">Yupina</td>
			<td class="ng-binding">Excalibur Fansub spy </td>
			<td><a class="ng-binding" href="https://twitter.com/Fitri_Lupph">@Fitri_Lupph</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">Dani</td>
			<td class="ng-binding">QC</td>
			<td><a class="ng-binding" href="https://twitter.com/">@</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">Nelly</td>
			<td class="ng-binding">Translator</td>
			<td><a class="ng-binding" href="https://twitter.com/yvonneamigo945">@nelly</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">Amaburi</td>
			<td class="ng-binding">Translator, QC </td>
			<td><a class="ng-binding" href="https://twitter.com/">@</a></td>
		</tr>
		<!-- end ngRepeat: member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name'] -->
		<tr class="ng-scope" ng-repeat="member in staff | filter:{status:'active'}:true | orderBy:['-level', 'name']"><!-- ng-click="$state.go('staff.detail', {'memberId': member._id.$oid})">-->
			<td class="ng-binding">Yuchan98</td>
			<td class="ng-binding">Translator</td>
			<td><a class="ng-binding" href="https://twitter.com/">@</a></td>
		</tr><hr align="center" width="1090"/>
		
</div>
</body>
</html>
