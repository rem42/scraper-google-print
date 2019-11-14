<?php

namespace Scraper\ScraperGooglePrint\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class GooglePrintSearchRequest
 *
 * @UrlAnnotation(url="/printer", method="POST", contentType="JSON", protocol="HTTP")
 */
class GooglePrintPrinterRequest extends GooglePrintRequest
{
    public function getBody()
    {
        return [];
    }

    public function getHeaders()
    {
        return [
            'Authorization' => 'Bearer ' . $this->accessToken,
        ];
    }

    public function getParameters()
    {
        return [
            'printerid' => $this->printerId,
        ];
    }
}
