<?php
/**
 * Configuration file for CSRF Protector
 * Necessary configurations are (library would throw exception otherwise)
 * ---- logDirectory
 * ---- failedAuthAction
 * ---- jsUrl
 * ---- tokenLength
 */
return array(
	"CSRFP_TOKEN" => "mizuki_nano",
	"logDirectory" => "../log",
	"failedAuthAction" => array(
		"GET" => 2,
		"POST" => 2),
	"errorRedirectionPage" => URL . "error?note=403 Access Forbidden by CSRFProtector",
	"customErrorMessage" => "",
	"jsUrl" => URL . "assets/vendor/owasp/csrf-protector-php/js/csrfprotector.js",
	"tokenLength" => 64,
	"cookieConfig" => array(
		"path" => '',
		"domain" => '',
		"secure" => false
	),
	"disabledJavascriptMessage" => "This site attempts to protect users against <a href=\"https://www.owasp.org/index.php/Cross-Site_Request_Forgery_%28CSRF%29\">
	Cross-Site Request Forgeries </a> attacks. In order to do so, you must have JavaScript enabled in your web browser otherwise this site will fail to work correctly for you.
	 See details of your web browser for how to enable JavaScript.",
	 "verifyGetFor" => array()
);
