<?php
require_once __DIR__.'/vendor/simplehtmldom/1.5/simple_html_dom.php';

// Change this depending on your account
$url = 'https://wwws-uk1.givex.com/public/balance/history.py?282650254+_LANGUAGE_:en+webinfo_id:3800985114x55833f801f6dcbcec42c8b670a5b5846x38';

$html = file_get_html($url);

// The HTML is poor so we have to target by the font color (!!) if they change their mark up this will break
$balance = $html->find('font[color=#ff6633]', 0)->plaintext;

require_once __DIR__.'/view/main.php';