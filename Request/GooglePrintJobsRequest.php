<?php

namespace Scraper\ScraperGooglePrint\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class GooglePrintSearchRequest
 *
 * @UrlAnnotation(url="/jobs", method="GET", contentType="JSON", protocol="HTTP")
 */
class GooglePrintJobsRequest extends GooglePrintRequest
{
    protected $limit = 10;

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
            'limit' => $this->limit,
        ];
    }

    /**
     * @return int
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     *
     * @return $this
     */
    public function setLimit(?int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }
}
