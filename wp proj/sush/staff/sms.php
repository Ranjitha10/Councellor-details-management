<?php 
require_once('/path/to/twilio-php/Services/Twilio.php');
$client = new Services_Twilio("{{ sid }}", "{{ auth_token }}");
$client->account->messages->sendMessage("9886424175", "9739189688", "extra class assigned"; ?>
