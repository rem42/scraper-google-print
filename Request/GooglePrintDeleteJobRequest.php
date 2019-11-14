<?php

namespace Scraper\ScraperGooglePrint\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class GooglePrintDeleteJobRequest
 *
 * @UrlAnnotation(url="/deletejob", method="GET", contentType="JSON", protocol="HTTP")
 */
class GooglePrintDeleteJobRequest extends GooglePrintRequest
{
    protected $jobId;

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
            'jobid' => $this->jobId,
        ];
    }

    /**
     * @return mixed
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * @param mixed $jobId
     *
     * @return $this
     */
    public function setJobId($jobId): self
    {
        $this->jobId = $jobId;
        return $this;
    }
}
