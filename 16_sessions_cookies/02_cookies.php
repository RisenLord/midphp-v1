<?php

// How to set cookies
setcookie('key', 'value', time() + 60);

// How to update cookie
setcookie('key', 'value [updates]', time() + 180);

// How to delete cookie
setcookie('key', '', time() - 1);
