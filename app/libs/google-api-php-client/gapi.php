<?php
/*
 * Copyright 2011 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
//unset($_SESSION['multi-api-token']);
//var_dump($_SESSION['multi-api-token']);
$autoload = __DIR__ . '/vendor/autoload.php';

include_once $autoload;
include_once __DIR__ ."/examples/templates/base.php";
echo pageHeader("User Query - Multiple APIs");

/*************************************************
 * Ensure you've downloaded your oauth credentials
 ************************************************/
if (!$oauth_credentials = getOAuthCredentialsFile()) {
    echo missingOAuth2CredentialsWarning();
    return;
}

/************************************************
 * The redirect URI is to the current page, e.g:
 * http://localhost:8080/multi-api.php
 ************************************************/
$redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/agency/gapi_auth';

$client = new Google_Client();
$client->setAuthConfig(__DIR__ . '/client_secret_201890636942-vr0pgotfrschlt1p8o5q9v3u9bqhnmdu.apps.googleusercontent.com.json');

$client->setRedirectUri($redirect_uri);

$client->addScope(Google_Service_Analytics::ANALYTICS_READONLY);
// add "?logout" to the URL to remove a token from the session
if (isset($_REQUEST['logout'])) {
    unset($_SESSION['multi-api-token']);
}

/************************************************
 * If we have a code back from the OAuth 2.0 flow,
 * we need to exchange that with the
 * Google_Client::fetchAccessTokenWithAuthCode()
 * function. We store the resultant access token
 * bundle in the session, and redirect to ourself.
 ************************************************/
if (isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // store in the session also
    $_SESSION['multi-api-token'] = $token;
    // redirect back to the example
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}

//$refresh = $client->getRefreshToken();
// set the access token as part of the client
if (!empty($_SESSION['multi-api-token'])) {
//    echo '<pre>';
//    var_dump($_SESSION);
    $client->setAccessToken($_SESSION['multi-api-token']);
    if ($client->isAccessTokenExpired()) {
        unset($_SESSION['multi-api-token']);
//        $refresh = $client->getRefreshToken();
    }
} else {
    $authUrl = $client->createAuthUrl();
}

/************************************************
We are going to create both YouTube and Drive
services, and query both.
 ************************************************/

$analytics = new Google_Service_Analytics($client);
/************************************************
If we're signed in, retrieve channels from YouTube
and a list of files from Drive.
 ************************************************/

if ($client->getAccessToken()) {
    $_SESSION['multi-api-token'] = $client->getAccessToken();
    $profiles = $analytics->management_accounts->listManagementAccounts();
    echo json_encode($client->getAccessToken());
//    foreach ($profiles->getItems() as $item){
//
////        $sessions[]= $item->getId();
////        $sessions[]=getResults($analytics, $item->getId());
//    }
}

function getResults($analytics, $profileId) {
    // Вызов Core Reporting API и отправка запроса о количестве сессий
    // за последние семь дней.
    return $analytics->data_ga->get(
        'ga:' . $profileId,
        '7daysAgo',
        'today',
        'ga:sessions');
}


function getAllResults(&$analytics, $profileId,$data) {

    $optParams = array(

        'dimensions' => 'ga:visitCount,ga:browser,ga:fullReferrer,ga:searchKeyword,ga:country,ga:campaign,ga:medium'
    );

    return $analytics->data_ga->get(
        'ga:' . $profileId,
        $data['start_date'],
        $data['end_date'],
        'ga:visits',
        $optParams);
}


function getFirstProfileId($analytics) {
    // Получение идентификатора первого представления (профиля) пользователя.
$user=array();
    // Получение списка аккаунтов авторизованного пользователя.
    $accounts = $analytics->management_accounts->listManagementAccounts();

    if (count($accounts->getItems()) > 0) {
        $items = $accounts->getItems();
        $firstAccountId = $items[0]->getId();

        // Получение списка ресурсов авторизованного пользователя.
        $properties = $analytics->management_webproperties
            ->listManagementWebproperties($firstAccountId);

        if (count($properties->getItems()) > 0) {
            $items = $properties->getItems();
            $firstPropertyId = $items[0]->getId();

            // Получение списка представлений (профилей) авторизованного пользователя.
            $profiles = $analytics->management_profiles
                ->listManagementProfiles($firstAccountId, $firstPropertyId);

            if (count($profiles->getItems()) > 0) {
                $items = $profiles->getItems();

                // Возврат идентификатора первого представления (профиля).
//                return $items[0]->getId();
                foreach ($items as $item){
                    $user[]=$item->getId();
                }
//                if($user){
//
//                }


            } else {
                throw new Exception('Для этого пользователя не найдены представления (профили).');
            }
        } else {
            throw new Exception('Для этого пользователя не найдены представления.');
        }
    } else {
        throw new Exception('Для этого пользователя не найдены аккаунты.');
    }
    return $user;
}



function printResults($results) {
    // Синтаксический анализ ответа Core Reporting API с выводом
    // имени профиля и общего количества сессий.
    if (count($results->getRows()) > 0) {

        // Получение имени профиля.
        $profileName = $results->getProfileInfo()->getProfileName();

        // Получение значения первой записи в первом ряду.
        $rows = $results->getRows();
        $sessions = $rows[0][0];

        // Вывод результатов.
        print "<p>First view (profile) found: $profileName</p>";
        print "<p>Total sessions: $sessions</p>";
    } else {
        print "<p>No results found.</p>";
    }
}

?>

    <div class="box">
        <div class="request">
            <?php if (isset($authUrl)): ?>
                <a class="login" href="<?= $authUrl ?>">Connect Me!</a>
            <?php else: ?>


                <h3>Results Of Google Analitics Data:</h3>
                <pre>
<!--                --><?php //var_dump($profiles)?>
                    <?foreach ($profiles as $prof):?>
                    <?echo $prof['kind'].' : '.$prof['name'].' id: '.$prof['id'];?>
                        <br>
                    <?php endforeach;?>
                </pre>

                <h3>Results Of Google Analitics sessions:</h3>
                <pre>
<!--                --><?php //var_dump($sessions)?>
                </pre>
            <?php endif ?>
        </div>
    </div>

<?= pageFooter() ?>
<?php

$data['start_date']='7daysAgo';
$data['end_date']='today';

// Получение и вывод результатов из Core Reporting API.
$profile = getFirstProfileId($analytics);
foreach ($profile as $pr){
    $results = getResults($analytics, $pr);
    echo '<pre>';
    var_dump($results);
    echo '</pre>';
    printResults($results);
    echo '<hr>';
    $all_data[] = getAllResults($analytics, $pr,$data);
}

echo '<pre>';
var_dump($all_data);
echo '</pre>';

foreach ($all_data as $val){
    ?>
    <h3>profileInfo</h3>
    <p>accountId: <?php echo $val->profileInfo['accountId']?></p>
    <p>webPropertyId: <?php echo $val->profileInfo['webPropertyId']?></p>
<!--    <p>webPropertyId: --><?php //echo $val->profileInfo['webPropertyId']?><!--</p>-->
<?php foreach ($val->columnHeaders as $ressult):?>
        <pre>
        <?php var_dump($ressult)?>
        </pre>
        <?php endforeach;?>
    <hr>
<?php
}
/*-----------------------********------------------*/

//$client->setUseObjects(true);
//
//$analytics = new apiAnalyticsService($client);
