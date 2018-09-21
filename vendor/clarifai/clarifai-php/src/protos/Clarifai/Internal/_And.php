<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/search.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.And</code>
 */
class _And extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.Input input = 1;</code>
     */
    private $input = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.Output output = 2;</code>
     */
    private $output = null;
    /**
     * Generated from protobuf field <code>bool negate = 3;</code>
     */
    private $negate = false;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Search::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Input input = 1;</code>
     * @return \Clarifai\Internal\_Input
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Input input = 1;</code>
     * @param \Clarifai\Internal\_Input $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Internal\_Input::class);
        $this->input = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Output output = 2;</code>
     * @return \Clarifai\Internal\_Output
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Output output = 2;</code>
     * @param \Clarifai\Internal\_Output $var
     * @return $this
     */
    public function setOutput($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Internal\_Output::class);
        $this->output = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool negate = 3;</code>
     * @return bool
     */
    public function getNegate()
    {
        return $this->negate;
    }

    /**
     * Generated from protobuf field <code>bool negate = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setNegate($var)
    {
        GPBUtil::checkBool($var);
        $this->negate = $var;

        return $this;
    }

}

