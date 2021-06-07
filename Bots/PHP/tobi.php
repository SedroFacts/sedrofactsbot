<?php

<!--- (Testing) PHP Bot - Tobi by Sedro Inc --->

$token = "API_TOKEN";
$link1 = "https://api.telegram.org/bot".$token;

$updates = file_get_contents('php://input');
$updates = json_decode($updates, TRUE);

$msgID = $updates['message']['from']['id'];
$name = $updates['message']['from']['first_name'];
$text = $updates['message']['text'];

switch($text)
{
    case"/start":
    sendmsg($msgID, "Welcome $name ! Send [hello] to get started or Send [/commands] to get the commands.");
    break;
    case"hello":
    sendmsg($msgID, "Hello $name ! What this bot can do? Get all notifications about updates, new GitHub releases about the programming tricks bot made by the programming tricks group (@Trivion_bb). Send /commands to get the all the commands. Enjoy! ( $name ) !");
    break;
    case"/commands":
    sendmsg($msgID, "Here are the commands $name ;");
    sendmsg($msgID, "/start - Start the bot");
    sendmsg($msgID, "/status - Give the status 'online' or 'offline'");
    sendmsg($msgID, "/commands - To get this message");
    sendmsg($msgID, "/supporters - Get contacts of all the supporters");
    sendmsg($msgID, "Go back home - /back");
    break;
    case"/back":
    sendmsg($msgID, "Welcome $name ! Send [hello] or Send [/commands] to get the commands.");
    break;
    case"/status":
    sendmsg($msgID, "Active");
    sendmsg($msgID, "Online");


    break;
    case"/supporters":
    sendmsg($msgID, "Developer;");
    sendmsg($msgID, "@Trivion_bb");
    sendmsg($msgID, "People;");
    sendmsg($msgID, "+94 76 255 8669");
    sendmsg($msgID, "@Trivion_bb");
    sendmsg($msgID, "@code1to5");
    sendmsg($msgID, "@codipy");
    sendmsg($msgID, "Groups;");
    sendmsg($msgID, "https://t.me/trivionbb");
    sendmsg($msgID, "https://t.me/offtopictri");
    sendmsg($msgID, "https://t.me/Javatrickz");
    sendmsg($msgID, "YouTube channels;");
    sendmsg($msgID, "Trivion bb");
    sendmsg($msgID, "The()Brackets(hour)");
    sendmsg($msgID, "GitHub;");
    sendmsg($msgID, "https://github.com/Senhas-t/Programming_tricks-bot.git");
    sendmsg($msgID, "Twitter;");
    sendmsg($msgID, "@senhasd");
    break;
    case"0147":
    sendmsg($msgID, "(Checking!)");
    sendmsg($msgID, "Login in >>");
    sendmsg($msgID, "Redirecting...");
    sendmsg($msgID, "Bot identified");
    sendmsg($msgID, "Hello member!");
    break;
    case"/help":
    sendmsg($msgID, "Please use this format $name : /help {LANGUAGE CODE} + {QUESTION} or help {LANGUAGE CODE} + {QUESTION} . Need help $name ? Click: error");
    break;
    case"/help {LANGUAGE CODE} + {QUESTION}":
    case"help {LANGUAGE CODE} + {QUESTION}":
    sendmsg($msgID, "Message sent to the team");
    break;
}


function sendmsg($msgID, $text)
{
$url = $GLOBALS[link1].'/sendMessage?chat_id='.$msgID.'&text='.urlencode($text);
file_get_contents($url);
}

<!--- basic setup from https://github.com/Senhas-t/Programming_tricks-bot/blob/master/%40teirood_bot.php --->
?>
