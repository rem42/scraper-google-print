<?php

namespace Scraper\ScraperGooglePrint\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class GooglePrintSubmitRequest
 * @package Scraper\ScraperGooglePrint\Request
 *
 * @UrlAnnotation(url="/submit", method="POST", contentType="JSON", protocol="HTTP")
 */
class GooglePrintSubmitRequest extends GooglePrintRequest
{
	protected $title;
	protected $ticket;
	protected $content;
	protected $contentType;

	public function getBody()
	{
		return [
			'printerid' => $this->printerId,
			'title' => $this->title,
			'ticket' => $this->ticket,
			'content' => $this->content,
			'contentType' => $this->contentType,
		];
	}

	/**
	 * @return mixed
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * @param mixed $content
	 *
	 * @return $this
	 */
	public function setContent($content)
	{
		$this->content = $content;
		return $this;
	}

	public function getHeaders()
	{
		return [
			'Authorization' => 'Bearer ' . $this->accessToken,
		];
	}

	public function getParameters()
	{
		return [];
	}

	/**
	 * @return mixed
	 */
	public function getTicket()
	{
		return $this->ticket;
	}

	/**
	 * @param mixed $ticket
	 *
	 * @return $this
	 */
	public function setTicket($ticket)
	{
		$this->ticket = $ticket;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param mixed $title
	 *
	 * @return $this
	 */
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}
}
