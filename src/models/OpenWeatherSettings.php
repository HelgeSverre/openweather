<?php
/**
 * OpenWeather plugin for Craft CMS 3.x
 *
 * OpenWeather model settings
 *
 * @link      https://www.bolden.nl
 * @copyright Copyright (c) 2018 Bolden B.V.
 * @author Klearchos Douvantzis
 */

namespace bolden\openweather\models;

class OpenWeatherSettings extends \craft\base\Model
{
    public $enableGeneral = 1;
    public $openmapsAPIKey = '';
    public $longitude = '';
    public $latitude = '';
    public $language = 'en';
    public $updateInterval = '30';

    public function rules()
    {
        return [
            [['openmapsAPIKey'], 'required'],
            [['enableGeneral'], 'boolean'],
            [['openmapsAPIKey'], 'string'],
            [['language'], 'string'],
            [['longitude', 'latitude'], 'number'],
            [['updateInterval'], 'integer'],
        ];
    }


    public function availableLanguages()
    {
        return [
            "ar" => "Arabic",
            "bg" => "Bulgarian",
            "ca" => "Catalan",
            "cz" => "Czech",
            "de" => "German",
            "el" => "Greek",
            "en" => "English",
            "fa" => "Persian (Farsi)",
            "fi" => "Finnish",
            "fr" => "French",
            "gl" => "Galician",
            "hr" => "Croatian",
            "hu" => "Hungarian",
            "it" => "Italian",
            "ja" => "Japanese",
            "kr" => "Korean",
            "la" => "Latvian",
            "lt" => "Lithuanian",
            "mk" => "Macedonian",
            "no" => "Norwegian",
            "nl" => "Dutch",
            "pl" => "Polish",
            "pt" => "Portuguese",
            "ro" => "Romanian",
            "ru" => "Russian",
            "se" => "Swedish",
            "sk" => "Slovak",
            "sl" => "Slovenian",
            "es" => "Spanish",
            "tr" => "Turkish",
            "ua" => "Ukrainian",
            "vi" => "Vietnamese",
            "zh_cn" => "Chinese Simplified",
            "zh_tw" => "Chinese Traditional",
        ];
    }
}
