<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/search.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.PostSearchesRequest</code>
 */
class _PostSearchesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    private $user_app_id = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.Query query = 2;</code>
     */
    private $query = null;
    /**
     * Generated from protobuf field <code>.Pagination pagination = 3;</code>
     */
    private $pagination = null;
    /**
     * Generated from protobuf field <code>bool brute_force = 4;</code>
     */
    private $brute_force = false;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Search::initOnce();
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
     * Generated from protobuf field <code>.clarifai.api.Query query = 2;</code>
     * @return \Clarifai\Internal\_Query
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Query query = 2;</code>
     * @param \Clarifai\Internal\_Query $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Internal\_Query::class);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Pagination pagination = 3;</code>
     * @return \Pagination
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Generated from protobuf field <code>.Pagination pagination = 3;</code>
     * @param \Pagination $var
     * @return $this
     */
    public function setPagination($var)
    {
        GPBUtil::checkMessage($var, \Pagination::class);
        $this->pagination = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool brute_force = 4;</code>
     * @return bool
     */
    public function getBruteForce()
    {
        return $this->brute_force;
    }

    /**
     * Generated from protobuf field <code>bool brute_force = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBruteForce($var)
    {
        GPBUtil::checkBool($var);
        $this->brute_force = $var;

        return $this;
    }

}

