<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/search.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.MultiSearchResponse</code>
 */
class _MultiSearchResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    private $status = null;
    /**
     * Generated from protobuf field <code>string id = 2;</code>
     */
    private $id = '';
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Hit hits = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $hits;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Search::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Internal\Status\_Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @param \Clarifai\Internal\Status\_Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Internal\Status\_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Hit hits = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Hit hits = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param \Clarifai\Internal\_Hit[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Internal\_Hit::class);
        $this->hits = $arr;

        return $this;
    }

}
