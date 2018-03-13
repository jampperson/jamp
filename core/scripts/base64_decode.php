<?php
/**
 * Decodes a base64 encoded string.
 * 
 * Works as a wrapper for PHP's base64_decode function.
 * 
 * Usage: jamp base64_decode <input>
 * 
 * @author  jampperson <https://github.com/jampperson>
 * @license GPL-2.0
 */

jampUse('jampEcho');

if (empty($argv[1])) {
	passthru('jamp usage base64_decode');
	exit;
}

jampEcho(base64_decode($argv[1]));