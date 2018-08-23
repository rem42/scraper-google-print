<?php

namespace Scraper\ScraperGooglePrint\Api;

use JMS\Serializer\SerializerBuilder;
use Scraper\ScraperGooglePrint\Entity\GooglePrintSubmit;

class GooglePrintSubmitApi extends GooglePrintApi
{
	public function execute()
	{
		$data         = json_encode($this->data);
		$serializer   = SerializerBuilder::create()
			->build()
		;
		$this->object = $serializer->deserialize($data, GooglePrintSubmit::class, 'json');
		return $this->object;
	}
}
