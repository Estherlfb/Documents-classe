<?php

include "User.php";
include "Settings.php";

// 1
$user = new User();
$user->setName("bob")->getSettings()->setEmail("tot@gmail.com")->setMobile("0600000000");
var_dump($user);

// 2
$settings = new Settings();
$settings->setEmail("thtjt@gzjfj.com")->setMobile("065455");
$user->getSettings($settings);
var_dump($user);

// 3
$settings = $user->getSettings();
$settings->setEmail("zaza@gmail.com")->setMobile("08000000");
$user->setSettings($settings);
var_dump($user);
