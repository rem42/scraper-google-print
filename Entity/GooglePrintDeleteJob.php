<?php

namespace Scraper\ScraperGooglePrint\Entity;

use JMS\Serializer\Annotation as Serializer;

class GooglePrintDeleteJob
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
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("xsrf_token")
     */
    protected $xsrfToken;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("message")
     */
    protected $message;

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
    public function setSuccess(?bool $success): self
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
    public function setRequest(?GooglePrintRequest $request): self
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
    public function setXsrfToken(?string $xsrfToken): self
    {
        $this->xsrfToken = $xsrfToken;
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
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }
}
