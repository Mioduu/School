<?php
$cookie_name = 'user';
$cookie_value = 'John Doe';
$cookie_expire = time() + (24*60*60); // 1 day
setcookie($cookie_name, $cookie_value, $cookie_expire);

if(!isset($_COOKIE[$cookie_name])) {
    echo 'Cookie named ' . $cookie_name . ' is not set';
} else {
    echo 'Name: ' . $cookie_name . '<br>';
    echo 'Value: ' . $_COOKIE[$cookie_name] . '<br>';
    echo 'Expires: ' . $cookie_expire;
}

function unsetCookies() {
    setcookie($cookie_name, "", time() - 3600);
}

unsetCookies()
if(!isset($_COOKIE[$cookie_name])) {
    echo 'Cookie named ' . $cookie_name . ' is not set';
} else {
    echo 'Name: ' . $cookie_name . '<br>';
    echo 'Value: ' . $_COOKIE[$cookie_name] . '<br>';
    echo 'Expires: ' . $cookie_expire;
}
?>