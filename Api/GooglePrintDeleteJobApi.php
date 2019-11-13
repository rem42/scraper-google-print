<?php

namespace Scraper\ScraperGooglePrint\Api;

use JMS\Serializer\SerializerBuilder;
use Scraper\ScraperGooglePrint\Entity\GooglePrintJobs;

class GooglePrintDeleteJobApi extends GooglePrintApi
{
	public function execute()
	{
		$data         = json_encode($this->data);
		dump($data);
		$serializer   = SerializerBuilder::create()
			->build()
		;
		$this->object = $serializer->deserialize($data, GooglePrintJobs::class, 'json');
		return $this->object;
	}
}
