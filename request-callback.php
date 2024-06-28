<?php

chdir(__DIR__);

define("SPAM_TIMEOUT_IN_S", 10);
define("SPAM_FILE", ".request_callback_spam_protection");
define("MAIL_RECIPIENT", "info@concepts-and-training.de");

function spamProtection() {
    if (!file_exists(SPAM_FILE)) {
        $res = false;
    }
    else {
        $res = (filemtime(SPAM_FILE) + SPAM_TIMEOUT_IN_S) > time();
    }
    if (!$res) {
        touch(SPAM_FILE);
    }
    return $res;
}

if (spamProtection()) {
    die("retry");
}

$name = substr($_POST["name"], 0, 50);
$number = substr($_POST["number"], 0, 22);

$mail = <<<MAIL
Hallo,

wir haben eine Anfrage für einen Rückruf über die cate-Website erhalten:

$name
$number

Beste Grüße!
MAIL;

mail(
    MAIL_RECIPIENT,
    "Anfrage für Rückruf über cate-Website",
    $mail,
    "From: ".MAIL_RECIPIENT 
);

die("ok");
