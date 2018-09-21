<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/input.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.GetInputRequest</code>
 */
class _GetInputRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    private $user_app_id = null;
    /**
     * Generated from protobuf field <code>string input_id = 2;</code>
     */
    private $input_id = '';

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Input::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @return \Clarifai\Internal\_UserAppIDSet
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @param \Clarifai\Internal\_UserAppIDSet $var
     * @return $this
     */
    public function setUserAppId($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Internal\_UserAppIDSet::class);
        $this->user_app_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string input_id = 2;</code>
     * @return string
     */
    public function getInputId()
    {
        return $this->input_id;
    }

    /**
     * Generated from protobuf field <code>string input_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInputId($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_id = $var;

        return $this;
    }

}

