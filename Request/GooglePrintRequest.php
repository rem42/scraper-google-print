<?php

namespace Scraper\ScraperGooglePrint\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\Scraper\Request\Request;

/**
 * Class GooglePrintRequest
 * @package Scraper\ScraperGooglePrint\Request
 *
 * @UrlAnnotation(baseUrl="https://www.google.com/cloudprint")
 */
abstract class GooglePrintRequest extends Request
{
	/**
	 * @var string
	 */
	public $accessToken;
	/**
	 * @var string
	 */
	protected $printerId;

	/**
	 * @return string
	 */
	public function getAccessToken(): ?string
	{
		return $this->accessToken;
	}

	/**
	 * @param string $accessToken
	 *
	 * @return $this
	 */
	public function setAccessToken(?string $accessToken)
	{
		$this->accessToken = $accessToken;
		return $this;
	}

	public function getBody()
	{
		return [];
	}

	public function getHeaders()
	{
		return [];
	}

	public function getParameters()
	{
		return [];
	}

	/**
	 * @return string
	 */
	public function getPrinterId(): ?string
	{
		return $this->printerId;
	}

	/**
	 * @param string $printerId
	 *
	 * @return $this
	 */
	public function setPrinterId(?string $printerId)
	{
		$this->printerId = $printerId;
		return $this;
	}
}