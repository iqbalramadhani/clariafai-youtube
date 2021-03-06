<?php

namespace Clarifai\API\Requests\Concepts;

use Clarifai\API\ClarifaiClientInterface;
use Clarifai\API\CustomV2Client;
use Clarifai\API\RequestMethod;
use Clarifai\API\Requests\ClarifaiRequest;
use Clarifai\DTOs\Predictions\Concept;
use Clarifai\Internal\_ListConceptsRequest;
use Clarifai\Internal\_MultiConceptResponse;

class GetConceptsRequest extends ClarifaiRequest
{

    public function __construct(ClarifaiClientInterface $client)
    {
        parent::__construct($client);
    }

    protected function requestMethod()
    {
        return RequestMethod::GET;
    }

    protected function url()
    {
        return '/v2/concepts';
    }

    protected function httpRequestBody(CustomV2Client $grpcClient)
    {
        return $grpcClient->ListConcepts(new _ListConceptsRequest());
    }

    /**
     * @param _MultiConceptResponse $conceptsResponse
     * @return array
     */
    protected function unmarshaller($conceptsResponse)
    {
        $concepts = [];
        foreach ($conceptsResponse->getConcepts() as $concept) {
            array_push($concepts, Concept::deserialize($concept));
        }
        return $concepts;
    }
}
