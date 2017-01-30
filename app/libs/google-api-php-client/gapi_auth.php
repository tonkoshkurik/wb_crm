<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.01.2017
 * Time: 19:54
 */
class Controller_Index
{
    public $redirect_uri;
    public $authUrl;
    public $client;

    public function __construct($access_token){
        $autoload = __DIR__ . '/vendor/autoload.php';

        include_once $autoload;
        include_once __DIR__ ."/examples/templates/base.php";
        $this->client = new Google_Client();
        /*************************************************
         * Ensure you've downloaded your oauth credentials
         ************************************************/
        if (!$oauth_credentials = getOAuthCredentialsFile()) {
    //echo missingOAuth2CredentialsWarning();
    //        return;
        }
        /************************************************
         * The redirect URI is to the current page, e.g:
         * http://localhost:8080/multi-api.php
         ************************************************/
        $this->redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/agency/gapi_auth';
        if($access_token){
//            $isExpired = $this->client->isAccessTokenExpired(); // true (bool Returns True if the access_token is expired.)
//            $refresh = $this->client->getRefreshToken();
            $this->client->setAccessToken($access_token);
        } else {
            $this->auth();
        }
    }


    public function auth(){

        $this->client->setAuthConfig(__DIR__ . '/client_secret_201890636942-vr0pgotfrschlt1p8o5q9v3u9bqhnmdu.apps.googleusercontent.com.json');

        $this->client->setRedirectUri($this->redirect_uri);

        $this->client->addScope(Google_Service_Analytics::ANALYTICS_READONLY);
    // add "?logout" to the URL to remove a token from the session


        /************************************************
         * If we have a code back from the OAuth 2.0 flow,
         * we need to exchange that with the
         * Google_Client::fetchAccessTokenWithAuthCode()
         * function. We store the resultant access token
         * bundle in the session, and redirect to ourself.
         ************************************************/
        if (isset($_GET['code'])) {

            $token = $this->client->fetchAccessTokenWithAuthCode($_GET['code']);
            $this->client->setAccessToken($token);

            // store in the session also
            $_SESSION['multi-api-token'] = $token;
            // redirect back to the example
            header('Location: ' . filter_var($this->redirect_uri, FILTER_SANITIZE_URL));
        }


    // set the access token as part of the client
        if (!empty($_SESSION['multi-api-token'])) {

            $this->client->setAccessToken($_SESSION['multi-api-token']);
            if ($this->client->isAccessTokenExpired()) {
                unset($_SESSION['multi-api-token']);
    //        $refresh = $client->getRefreshToken();
            }
        } else {
            $this->authUrl = $this->client->createAuthUrl();
        }
    }

    public function logout(){
        if (isset($_REQUEST['logout'])) {
            unset($_SESSION['multi-api-token']);
        }
    }

}