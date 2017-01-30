<?php
class Model_Searchconsole extends Model {

	public function searchconsole() {

    if (!$oauth_credentials = $this->getOAuthCredentialsFile()) {
      echo $this->missingOAuth2CredentialsWarning();
      return;
    }
    if (!headers_sent()) {
      session_start();
    }

    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/searchconsole/index';

    $client = new Google_Client();
    $client->setAuthConfig($oauth_credentials);
    $client->setRedirectUri($redirect_uri);
    $client->addScope("https://www.googleapis.com/auth/webmasters");

    // add "?logout" to the URL to remove a token from the session
    if (isset($_REQUEST['logout'])) {
      unset($_SESSION['search-console-token']);
    }

    if (isset($_GET['code'])) {
      $client->authenticate($_GET['code']);
//      $access_token = $client->getAccessToken();
      $access_token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

//      $client->setAccessToken($access_token);

      // store in the session also
      $_SESSION['search-console-token'] = $access_token;

      // redirect back to the example
      header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
    }

    $_SESSION['search-console-token'] = '{"access_token":"ya29.GmDjA-wpjosuE16_53WXfnWomwkAH5ed-_ltlTHAi6ssgjbfD7QbaQ7uKt1-wVZnEJOV892WdAw3W2fPBl0dNF53e2kydJkO2DZ9C-mM97Ku7FiZ55gyPTXfwcgelk-zUjA","token_type":"Bearer","expires_in":3600,"created":1485738154}';


    // set the access token as part of the client
    if (!empty($_SESSION['search-console-token'])) {
      $client->setAccessToken($_SESSION['search-console-token']);
      if ($client->isAccessTokenExpired()) {
        unset($_SESSION['search-console-token']);
        $client->refreshToken($client->getRefreshToken());
        $token = $client->getAccessToken(); // This token has no refresh token.
        $_SESSION['search-console-token'] = $token;
      }
    } else {
      $data["authUrl"] = $client->createAuthUrl();
    }

    /************************************************
    We are going to create Search Console Service.
     ************************************************/

    $search_service = new Google_Service_Webmasters($client);


    /************************************************
    If we're signed in, retrieve list if websites from Search Console
     ************************************************/
    if ($client->getAccessToken()) {
      $_SESSION['search-console-token'] = $client->getAccessToken();
      $sitesResp = $search_service->sites->listSites();
      foreach ($sitesResp as $site){
        if($site['permissionLevel'] == 'siteOwner'){
          $sites[] = $site['siteUrl'];
        }
      }
      $data["sites"] = $sites;
      $sitemaps = $search_service->sitemaps->listSitemaps('http://futureprocurement.net/');
      $data["sitemaps"] = $sitemaps->getSitemap();


//      $sitemapset = $search_service->sitemaps->submit('http://futureprocurement.net/', 'http://futureprocurement.net/sitemap_index.xml');
//      echo "hi there";
//      echo "<pre>";
//      var_dump($sites);
//      echo "</pre>";
//      exit();
    //  echo "Errors";
    //  echo "<pre>";
    //  var_dump($crawlerrors);
    //  echo "</pre>";
    //  exit;
    }
    return $data;



	}


  private function missingOAuth2CredentialsWarning()
  {
    $ret = "
    <h3 class='warn'>
      Warning: You need to set the location of your OAuth2 Client Credentials from the
      <a href='http://developers.google.com/console'>Google API console</a>.
    </h3>
    <p>
      Once downloaded, move them into the credentials directory of this appclication and
      rename them 'oauth-credentials.json'.
    </p>";

    return $ret;
  }

  private function getOAuthCredentialsFile()
  {
    // oauth2 creds
    $oauth_creds = __DIR__ . '/../../credentials/oauth-credentials.json';

    if (file_exists($oauth_creds)) {
      return $oauth_creds;
    }

    return false;
  }
}