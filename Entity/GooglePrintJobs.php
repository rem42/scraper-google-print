<?php

namespace Scraper\ScraperGooglePrint\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class GooglePrintJobs
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
	 * @var ArrayCollection|GooglePrintJob[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperGooglePrint\Entity\GooglePrintJob>")
	 * @Serializer\SerializedName("jobs")
	 */
	protected $jobs;
	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("range")
	 */
	protected $range;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("xsrf_token")
	 */
	protected $xsrfToken;

	/**
	 * @return ArrayCollection|GooglePrintJob[]
	 */
	public function getJobs()
	{
		return $this->jobs;
	}

	/**
	 * @param ArrayCollection|GooglePrintJob[] $jobs
	 *
	 * @return $this
	 */
	public function setJobs($jobs)
	{
		$this->jobs = $jobs;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getRange(): ?ArrayCollection
	{
		return $this->range;
	}

	/**
	 * @param ArrayCollection $range
	 *
	 * @return $this
	 */
	public function setRange(?ArrayCollection $range)
	{
		$this->range = $range;
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
}
