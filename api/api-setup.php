<?php
/**
* Template Name: A
*
* @package WordPress
* @subpackage Divi

*/

global $token;
global $data;

// Function to retreive the token
function get_api_token(){
  global $token;
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://middleware-production.easy2pilot-v8.com/api/b2d45b8f-b9dc-11e9-8858-a4bf0128f2ba/token',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
    "login": "OMBRI",
    "password": "Mj86Yft-Zd"
  }',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json;charset=UTF-8'
    ),
  ));

  $response = curl_exec($curl);
  curl_close($curl);

  if($response){
    // Convert Json String to array
    $response_arr = json_decode($response, true);
    //create Variables from associative array
    extract($response_arr);
    //Create variables for associative array (nested arrays)
    extract($data);
  } elseif(!$response){
    echo '<h3 class="error-message">Sorry something went wrong. Could not retreive verification token</h3>';
  }
}
get_api_token();

//Function to retreive all listings
function get_all_listings($token){
  global $listings;

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://middleware-production.easy2pilot-v8.com/api/b2d45b8f-b9dc-11e9-8858-a4bf0128f2ba/annonces',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_POSTFIELDS =>'{
      "token": "'.$token.'",
      "urlphotos":true
  }  ',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json;charset=UTF-8'
    ),
  ));

  $response = curl_exec($curl);
  curl_close($curl);

  if($response){
    // Convert Json String to array
    $response_arr = json_decode($response, true);
    //create Variables from associative array
    extract($response_arr);
    //Assigning data to a global variable
    $listings = $data;
  } elseif(!$response){
    echo '<h3 class="error-message">Sorry something went wrong. Could not retreive listing informations</h3>';
  }
}
get_all_listings($token);




