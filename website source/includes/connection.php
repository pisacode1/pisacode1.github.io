<?php

error_reporting(0);

$link = mysqli_connect("localhost", "databaseUsernameHere", "databasePasswordHere", "databaseNameHere");

if ($link === false) {
    die("Error with db...");
}

// Discord Bot
$client_id = "1253301299391496283";
$client_secret = "7MMPKZ3CESzVwBxkcrtCebR6GdgrAhtC";
$BotToken = "MTI1MzMwMTI5OTM5MTQ5NjI4Mw.GWPPpr.rpk9E71S6XNxeOFZF0KbwhzO8Z5B62WARuiOdM";

$redirect_uri = "https://restorecord.com/auth/"; // AUTH
$verify_uri = "https://restorecord.com/verify/";
$ShoppySecret = ""; // replace with your webhook secret
$shoppyApiKey = "";

// Webhooks
$AdminLogs = "";
$Logs = "";

?>
