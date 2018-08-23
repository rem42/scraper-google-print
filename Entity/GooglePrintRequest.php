<?php

namespace Scraper\ScraperGooglePrint\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class GooglePrintRequest
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("time")
	 */
	protected $time;

	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("printerid")
	 */
	protected $printerId;

	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("title")
	 */
	protected $title;

	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("contentType")
	 */
	protected $contentType;

	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("content")
	 */
	protected $content;

	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("user")
	 */
	protected $user;

	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("users")
	 */
	protected $users;

	/**
	 * @return string
	 */
	public function getTime(): ?string
	{
		return $this->time;
	}

	/**
	 * @param string $time
	 *
	 * @return $this
	 */
	public function setTime(?string $time)
	{
		$this->time = $time;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getPrinterId(): ?ArrayCollection
	{
		return $this->printerId;
	}

	/**
	 * @param ArrayCollection $printerId
	 *
	 * @return $this
	 */
	public function setPrinterId(?ArrayCollection $printerId)
	{
		$this->printerId = $printerId;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getTitle(): ?ArrayCollection
	{
		return $this->title;
	}

	/**
	 * @param ArrayCollection $title
	 *
	 * @return $this
	 */
	public function setTitle(?ArrayCollection $title)
	{
		$this->title = $title;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getContentType(): ?ArrayCollection
	{
		return $this->contentType;
	}

	/**
	 * @param ArrayCollection $contentType
	 *
	 * @return $this
	 */
	public function setContentType(?ArrayCollection $contentType)
	{
		$this->contentType = $contentType;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getContent(): ?ArrayCollection
	{
		return $this->content;
	}

	/**
	 * @param ArrayCollection $content
	 *
	 * @return $this
	 */
	public function setContent(?ArrayCollection $content)
	{
		$this->content = $content;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUser(): ?string
	{
		return $this->user;
	}

	/**
	 * @param string $user
	 *
	 * @return $this
	 */
	public function setUser(?string $user)
	{
		$this->user = $user;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getUsers(): ?ArrayCollection
	{
		return $this->users;
	}

	/**
	 * @param ArrayCollection $users
	 *
	 * @return $this
	 */
	public function setUsers(?ArrayCollection $users)
	{
		$this->users = $users;
		return $this;
	}
}
