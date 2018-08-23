<?php

namespace Scraper\ScraperGooglePrint\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class GooglePrintSearch
{
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("success")
	 */
	protected $success;
	/**
	 * @var GooglePrintRequest
	 * @Serializer\Type("Scraper\ScraperGooglePrint\Entity\GooglePrintRequest")
	 * @Serializer\SerializedName("request")
	 */
	protected $request;
	/**
	 * @var ArrayCollection|GooglePrintPrinter[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperGooglePrint\Entity\GooglePrintPrinter>")
	 * @Serializer\SerializedName("printers")
	 */
	protected $printers;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("xsrf_token")
	 */
	protected $xsrfToken;

	/**
	 * @return bool
	 */
	public function isSuccess(): ?bool
	{
		return $this->success;
	}

	/**
	 * @param bool $success
	 *
	 * @return $this
	 */
	public function setSuccess(?bool $success)
	{
		$this->success = $success;
		return $this;
	}

	/**
	 * @return GooglePrintRequest
	 */
	public function getRequest(): ?GooglePrintRequest
	{
		return $this->request;
	}

	/**
	 * @param GooglePrintRequest $request
	 *
	 * @return $this
	 */
	public function setRequest(?GooglePrintRequest $request)
	{
		$this->request = $request;
		return $this;
	}

	/**
	 * @return ArrayCollection|GooglePrintPrinter[]
	 */
	public function getPrinters()
	{
		return $this->printers;
	}

	/**
	 * @param ArrayCollection|GooglePrintPrinter[] $printers
	 *
	 * @return $this
	 */
	public function setPrinters($printers)
	{
		$this->printers = $printers;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getXsrfToken(): ?string
	{
		return $this->xsrfToken;
	}

	/**
	 * @param string $xsrfToken
	 *
	 * @return $this
	 */
	public function setXsrfToken(?string $xsrfToken)
	{
		$this->xsrfToken = $xsrfToken;
		return $this;
	}
}
