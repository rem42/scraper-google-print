<?php

namespace Scraper\ScraperGooglePrint\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class GooglePrintJob
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ticketUrl")
     */
    protected $ticketUrl;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("printerType")
     */
    protected $printerType;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("printerName")
     */
    protected $printerName;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("errorCode")
     */
    protected $errorCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("updateTime")
     */
    protected $updateTime;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("title")
     */
    protected $title;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("message")
     */
    protected $message;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ownerId")
     */
    protected $ownerId;
    /**
     * @var ArrayCollection
     * @Serializer\Type("ArrayCollection")
     * @Serializer\SerializedName("tags")
     */
    protected $tags;
    /**
     * @var ArrayCollection
     * @Serializer\Type("ArrayCollection")
     * @Serializer\SerializedName("uiState")
     */
    protected $uiState;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("numberOfPages")
     */
    protected $numberOfPages;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("createTime")
     */
    protected $createTime;
    /**
     * @var ArrayCollection
     * @Serializer\Type("ArrayCollection")
     * @Serializer\SerializedName("semanticState")
     */
    protected $semanticState;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("printerid")
     */
    protected $printerid;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fileUrl")
     */
    protected $fileUrl;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    protected $id;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("rasterUrl")
     */
    protected $rasterUrl;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("contentType")
     */
    protected $contentType;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     */
    protected $status;

    /**
     * @return string
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     *
     * @return $this
     */
    public function setContentType(?string $contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     *
     * @return $this
     */
    public function setCreateTime(?string $createTime)
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     *
     * @return $this
     */
    public function setErrorCode(?string $errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileUrl(): ?string
    {
        return $this->fileUrl;
    }

    /**
     * @param string $fileUrl
     *
     * @return $this
     */
    public function setFileUrl(?string $fileUrl)
    {
        $this->fileUrl = $fileUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage(?string $message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPages(): ?int
    {
        return $this->numberOfPages;
    }

    /**
     * @param int $numberOfPages
     *
     * @return $this
     */
    public function setNumberOfPages(?int $numberOfPages)
    {
        $this->numberOfPages = $numberOfPages;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerId(): ?string
    {
        return $this->ownerId;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId(?string $ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrinterName(): ?string
    {
        return $this->printerName;
    }

    /**
     * @param string $printerName
     *
     * @return $this
     */
    public function setPrinterName(?string $printerName)
    {
        $this->printerName = $printerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrinterType(): ?string
    {
        return $this->printerType;
    }

    /**
     * @param string $printerType
     *
     * @return $this
     */
    public function setPrinterType(?string $printerType)
    {
        $this->printerType = $printerType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrinterid(): ?string
    {
        return $this->printerid;
    }

    /**
     * @param string $printerid
     *
     * @return $this
     */
    public function setPrinterid(?string $printerid)
    {
        $this->printerid = $printerid;
        return $this;
    }

    /**
     * @return string
     */
    public function getRasterUrl(): ?string
    {
        return $this->rasterUrl;
    }

    /**
     * @param string $rasterUrl
     *
     * @return $this
     */
    public function setRasterUrl(?string $rasterUrl)
    {
        $this->rasterUrl = $rasterUrl;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getSemanticState(): ?ArrayCollection
    {
        return $this->semanticState;
    }

    /**
     * @param ArrayCollection $semanticState
     *
     * @return $this
     */
    public function setSemanticState(?ArrayCollection $semanticState)
    {
        $this->semanticState = $semanticState;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus(?string $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getTags(): ?ArrayCollection
    {
        return $this->tags;
    }

    /**
     * @param ArrayCollection $tags
     *
     * @return $this
     */
    public function setTags(?ArrayCollection $tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string
     */
    public function getTicketUrl(): ?string
    {
        return $this->ticketUrl;
    }

    /**
     * @param string $ticketUrl
     *
     * @return $this
     */
    public function setTicketUrl(?string $ticketUrl)
    {
        $this->ticketUrl = $ticketUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getUiState(): ?ArrayCollection
    {
        return $this->uiState;
    }

    /**
     * @param ArrayCollection $uiState
     *
     * @return $this
     */
    public function setUiState(?ArrayCollection $uiState)
    {
        $this->uiState = $uiState;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * @param string $updateTime
     *
     * @return $this
     */
    public function setUpdateTime(?string $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }
}
