<?php

namespace GeniusDivision\HtmlPurifier;

use HtmlSanitizer\Sanitizer;
use HtmlSanitizer\SanitizerInterface;

class LaravelHtmlPurifier
{
    /**
     * @var SanitizerInterface
     */
    private $purifier;

    public function __construct()
    {
        $this->purifier = Sanitizer::create([
            'extensions' => ['basic', 'code', 'image', 'list', 'table', 'extra'],
        ]);
    }

    /**
     * @param string $value
     * @return string
     */
    public function purify($value)
    {
        return $this->purifier->sanitize($value);
    }
}
