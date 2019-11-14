<?php

namespace Scraper\ScraperGooglePrint\Api;

use JMS\Serializer\SerializerBuilder;
use Scraper\ScraperGooglePrint\Entity\GooglePrintJobs;

class GooglePrintJobsApi extends GooglePrintApi
{
    public function execute()
    {
        $data         = json_encode($this->data);
        $serializer   = SerializerBuilder::create()
            ->build()
        ;
        $this->object = $serializer->deserialize($data, GooglePrintJobs::class, 'json');
        return $this->object;
    }
}
