<!DOCTYPE html>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="GoogleOAuth.js"></script>

<html>
  <head>
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>SolidCore Consulting</title>
    <meta charset='utf-8' />
	<meta name="google-signin-client_id" content="554678577110-6e38f6as8jdfch6poamt5ephouhbnrvh.apps.googleusercontent.com">
  </head>
  <body>
  <!--
  	<h1>This page is currently in construction...</h1>
	<p>Stay tuned...</p> -->
	<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
	<button onclick="signOut();">Sign Out</button>
	<button onclick="print();">Print</button>






    <p>Drive API Quickstart</p>
    <!--Add buttons to initiate auth sequence and sign out-->
    <button id="authorize-button" style="display: none;">Authorize</button>
    <button id="signout-button" style="display: none;">Sign Out</button>

    <pre id="content"></pre>

    <script type="text/javascript">
      // Client ID and API key from the Developer Console
      var CLIENT_ID = '554678577110-6e38f6as8jdfch6poamt5ephouhbnrvh.apps.googleusercontent.com';
      var API_KEY = 'AIzaSyDfY5Llum6DSGIXJ_I7VgrRDzQQYXov_L8';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/drive/v3/rest"];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      var SCOPES = 'https://www.googleapis.com/auth/drive.metadata.readonly';

      var authorizeButton = document.getElementById('authorize-button');
      var signoutButton = document.getElementById('signout-button');
	  handleClientLoad();
    </script>



    <!-- <script async defer src="https://apis.google.com/js/api.js"
      onload="this.onload=function(){};handleClientLoad()"
      onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script> -->
  </body>
</html>
