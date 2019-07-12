<?php
   require_once 'vendor/autoload.php';

   use BotMan\BotMan\BotMan;
   use BotMan\BotMan\BotManFactory;
   use BotMan\BotMan\Drivers\DriverManager;
   
   $config = [
    // Your driver-specific configuration
    // "telegram" => [
    //    "token" => "TOKEN"
    // ]
];

   DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

   $botman = BotManFactory::create($config);

  // Give the bot something to listen for.
$botman->hears('Hello', function (BotMan $bot) {
    $bot->reply('Welcome to the Train reservation System');
    $bot->ask('Whats your name?', function($answer, $bot) {
        $bot->say('Welcome '.$answer->getText());
});
$botman->hears('what is the time in {city} located in {continent}' , function (BotMan $bot,$city,$continent) {
     date_default_timezone_set("$continent/$city");
      $reply = "The time in ".$city." ".$continent." is ".date("h:i:sa");
    $bot->reply($reply);
});

$botman->hears('this is {name}' , function (BotMan $bot,$name) {
      $reply = "Hello ".$name; 
    $bot->reply($reply);
});

$botman->hears('what train is 12671' , function (BotMan $bot,$name) {
      $reply = "It is Nilgiri Express from MAS to CBE"
    $bot->reply($reply);
});

$botman->fallback(function($bot) {
    $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
});

// Start listening
$botman->listen();