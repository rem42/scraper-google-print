<?php

namespace Scraper\ScraperGooglePrint\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class GooglePrintPrinter
{
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("isTosAccepted")
     */
    protected $isTosAccepted;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("displayName")
     */
    protected $displayName;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("supportedContentTypes")
     */
    protected $supportedContentTypes;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("description")
     */
    protected $description;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("capsHash")
     */
    protected $capsHash;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("updateTime")
     */
    protected $updateTime;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    protected $type;
    /**
     * @var ArrayCollection
     * @Serializer\Type("ArrayCollection")
     * @Serializer\SerializedName("tags")
     */
    protected $tags;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("gcpVersion")
     */
    protected $gcpVersion;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("proxy")
     */
    protected $proxy;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("createTime")
     */
    protected $createTime;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("defaultDisplayName")
     */
    protected $defaultDisplayName;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("connectionStatus")
     */
    protected $connectionStatus;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    protected $id;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     */
    protected $status;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("accessTime")
     */
    protected $accessTime;

    /**
     * @return string
     */
    public function getAccessTime(): ?string
    {
        return $this->accessTime;
    }

    /**
     * @param string $accessTime
     *
     * @return $this
     */
    public function setAccessTime(?string $accessTime)
    {
        $this->accessTime = $accessTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getCapsHash(): ?string
    {
        return $this->capsHash;
    }

    /**
     * @param string $capsHash
     *
     * @return $this
     */
    public function setCapsHash(?string $capsHash)
    {
        $this->capsHash = $capsHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getConnectionStatus(): ?string
    {
        return $this->connectionStatus;
    }

    /**
     * @param string $connectionStatus
     *
     * @return $this
     */
    public function setConnectionStatus(?string $connectionStatus)
    {
        $this->connectionStatus = $connectionStatus;
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
    public function getDefaultDisplayName(): ?string
    {
        return $this->defaultDisplayName;
    }

    /**
     * @param string $defaultDisplayName
     *
     * @return $this
     */
    public function setDefaultDisplayName(?string $defaultDisplayName)
    {
        $this->defaultDisplayName = $defaultDisplayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     *
     * @return $this
     */
    public function setDisplayName(?string $displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGcpVersion(): ?string
    {
        return $this->gcpVersion;
    }

    /**
     * @param string $gcpVersion
     *
     * @return $this
     */
    public function setGcpVersion(?string $gcpVersion)
    {
        $this->gcpVersion = $gcpVersion;
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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getProxy(): ?string
    {
        return $this->proxy;
    }

    /**
     * @param string $proxy
     *
     * @return $this
     */
    public function setProxy(?string $proxy)
    {
        $this->proxy = $proxy;
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
     * @return string
     */
    public function getSupportedContentTypes(): ?string
    {
        return $this->supportedContentTypes;
    }

    /**
     * @param string $supportedContentTypes
     *
     * @return $this
     */
    public function setSupportedContentTypes(?string $supportedContentTypes)
    {
        $this->supportedContentTypes = $supportedContentTypes;
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
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType(?string $type)
    {
        $this->type = $type;
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

    /**
     * @return bool
     */
    public function isTosAccepted(): ?bool
    {
        return $this->isTosAccepted;
    }

    /**
     * @param bool $isTosAccepted
     *
     * @return $this
     */
    public function setIsTosAccepted(?bool $isTosAccepted)
    {
        $this->isTosAccepted = $isTosAccepted;
        return $this;
    }
}
