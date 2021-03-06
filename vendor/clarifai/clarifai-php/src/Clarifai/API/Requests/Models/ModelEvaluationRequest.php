<?php

namespace Clarifai\API\Requests\Models;

use Clarifai\API\ClarifaiClientInterface;
use Clarifai\API\CustomV2Client;
use Clarifai\API\RequestMethod;
use Clarifai\API\Requests\ClarifaiRequest;
use Clarifai\DTOs\Models\ModelVersion;
use Clarifai\Internal\_PostModelVersionMetricsRequest;
use Clarifai\Internal\_SingleModelVersionResponse;

class ModelEvaluationRequest extends ClarifaiRequest
{
    /**
     * @var string
     */
    private $modelID;
    /**
     * @var string
     */
    private $modelVersionID;

    /**
     * Ctor.
     * @param ClarifaiClientInterface $client
     * @param string $modelID The model ID.
     * @param string $modelVersionID The model version ID.
     */
    public function __construct(ClarifaiClientInterface $client, $modelID, $modelVersionID)
    {
        parent::__construct($client);
        $this->modelID = $modelID;
        $this->modelVersionID = $modelVersionID;
    }

    protected function requestMethod()
    {
        return RequestMethod::POST;
    }

    protected function url()
    {
        return "/v2/models/$this->modelID/versions/$this->modelVersionID/metrics";
    }

    protected function httpRequestBody(CustomV2Client $grpcClient)
    {
        return $grpcClient->PostModelVersionMetrics(new _PostModelVersionMetricsRequest());
    }

    /**
     * @param _SingleModelVersionResponse $response
     * @return ModelVersion
     */
    protected function unmarshaller($response)
    {
        return ModelVersion::deserialize($response->getModelVersion());
    }
}
