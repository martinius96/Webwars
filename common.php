<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];

// register the session and set the cookie
$_SESSION['lang'] = $lang;

setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'en';
}

switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  break;

  case 'de':
  $lang_file = 'lang.de.php';
  break;

  case 'ru':
  $lang_file = 'lang.ru.php';
  break;
  
  case 'sk':
  $lang_file = 'lang.sk.php';
  break;
  
  case 'cz':
  $lang_file = 'lang.cz.php';
  break;
  case 'it':
  $lang_file = 'lang.it.php';
  break;

  default:
  $lang_file = 'lang.sk.php';

}

include_once 'languages/'.$lang_file;
?>