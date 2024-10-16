<?php

function getSuccsesPhrases($defaultLang = 'en')
{

	$langCode = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);


	$jsonString = file_get_contents('succses.json');

	$phrases = json_decode($jsonString, true);
	$defaultObj = [];



	foreach ($phrases as $phrase) {

		if (isset($phrase['lang_code']) && in_array($langCode, $phrase['lang_code'])) {

			return $phrase;
		}

		if (isset($phrase['lang_code']) && in_array($defaultLang, $phrase['lang_code'])) {

			$defaultObj = $phrase;
		}
	}


	if (!empty($defaultObj) && array_is_list($defaultObj)) {
		return $defaultObj;
	}


	foreach ($phrases as $phrase) {
		if (isset($phrase['lang_code']) && in_array($defaultLang, $phrase['lang_code'])) {

			return $phrase;
		}
	}
}