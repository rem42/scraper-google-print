<?php

namespace Scraper\ScraperGooglePrint\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class GooglePrintSearchRequest
 * @package Scraper\ScraperGooglePrint\Request
 *
 * @UrlAnnotation(url="/jobs", method="POST", contentType="JSON", protocol="HTTP")
 */
class GooglePrintJobsRequest extends GooglePrintRequest
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
