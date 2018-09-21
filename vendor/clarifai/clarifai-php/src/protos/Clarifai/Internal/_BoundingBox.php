<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/data.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.BoundingBox</code>
 */
class _BoundingBox extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float top_row = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $top_row = 0.0;
    /**
     * Generated from protobuf field <code>float left_col = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $left_col = 0.0;
    /**
     * Generated from protobuf field <code>float bottom_row = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $bottom_row = 0.0;
    /**
     * Generated from protobuf field <code>float right_col = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $right_col = 0.0;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Data::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>float top_row = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getTopRow()
    {
        return $this->top_row;
    }

    /**
     * Generated from protobuf field <code>float top_row = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setTopRow($var)
    {
        GPBUtil::checkFloat($var);
        $this->top_row = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float left_col = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getLeftCol()
    {
        return $this->left_col;
    }

    /**
     * Generated from protobuf field <code>float left_col = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setLeftCol($var)
    {
        GPBUtil::checkFloat($var);
        $this->left_col = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float bottom_row = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getBottomRow()
    {
        return $this->bottom_row;
    }

    /**
     * Generated from protobuf field <code>float bottom_row = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setBottomRow($var)
    {
        GPBUtil::checkFloat($var);
        $this->bottom_row = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float right_col = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getRightCol()
    {
        return $this->right_col;
    }

    /**
     * Generated from protobuf field <code>float right_col = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setRightCol($var)
    {
        GPBUtil::checkFloat($var);
        $this->right_col = $var;

        return $this;
    }

}
