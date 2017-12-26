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
	"CSRFP_TOKEN" => CSRFP_TOKEN_NAME,
	"logDirectory" => '../log',
	"failedAuthAction" => array(
		"GET" => CSRFP_FAILEDAUTHACTION_GET,
		"POST" => CSRFP_FAILEDAUTHACTION_POST),
	"errorRedirectionPage" => CSRFP_ERRORREDIRECTIONPAGE,
	"customErrorMessage" => CSRFP_CUSTOMERRORMESSAGE,
	"jsUrl" => CSRFP_JSURL,
	"tokenLength" => CSRFP_TOKENLENGTH,
	"cookieConfig" => array(
		"path" => CSRFP_COOKIECONFIG_PATH,
		"domain" => CSRFP_COOKIECONFIG_DOMAIN,
		"secure" => CSRFP_COOKIECONFIG_SECURE
	),
	"disabledJavascriptMessage" => CSRFP_DISABLEDJAVASCRIPTMESSAGE,
	 "verifyGetFor" => array()
);
