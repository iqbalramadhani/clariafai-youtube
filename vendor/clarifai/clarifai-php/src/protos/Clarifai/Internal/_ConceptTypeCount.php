<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/concept.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.ConceptTypeCount</code>
 */
class _ConceptTypeCount extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 positive = 1;</code>
     */
    private $positive = 0;
    /**
     * Generated from protobuf field <code>uint32 negative = 2;</code>
     */
    private $negative = 0;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Concept::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 positive = 1;</code>
     * @return int
     */
    public function getPositive()
    {
        return $this->positive;
    }

    /**
     * Generated from protobuf field <code>uint32 positive = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPositive($var)
    {
        GPBUtil::checkUint32($var);
        $this->positive = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 negative = 2;</code>
     * @return int
     */
    public function getNegative()
    {
        return $this->negative;
    }

    /**
     * Generated from protobuf field <code>uint32 negative = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNegative($var)
    {
        GPBUtil::checkUint32($var);
        $this->negative = $var;

        return $this;
    }

}

