<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/write.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [Document][google.firestore.v1.Document] has been removed from the view of the targets.
 * Sent if the document is no longer relevant to a target and is out of view.
 * Can be sent instead of a DocumentDelete or a DocumentChange if the server
 * can not send the new value of the document.
 * Multiple [DocumentRemove][google.firestore.v1.DocumentRemove] messages may be returned for the same logical
 * write or delete, if multiple targets are affected.
 *
 * Generated from protobuf message <code>google.firestore.v1.DocumentRemove</code>
 */
class DocumentRemove extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the [Document][google.firestore.v1.Document] that has gone out of view.
     *
     * Generated from protobuf field <code>string document = 1;</code>
     */
    private $document = '';
    /**
     * A set of target IDs for targets that previously matched this document.
     *
     * Generated from protobuf field <code>repeated int32 removed_target_ids = 2;</code>
     */
    private $removed_target_ids;
    /**
     * The read timestamp at which the remove was observed.
     * Greater or equal to the `commit_time` of the change/delete/remove.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     */
    private $read_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $document
     *           The resource name of the [Document][google.firestore.v1.Document] that has gone out of view.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $removed_target_ids
     *           A set of target IDs for targets that previously matched this document.
     *     @type \Google\Protobuf\Timestamp $read_time
     *           The read timestamp at which the remove was observed.
     *           Greater or equal to the `commit_time` of the change/delete/remove.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Write::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the [Document][google.firestore.v1.Document] that has gone out of view.
     *
     * Generated from protobuf field <code>string document = 1;</code>
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * The resource name of the [Document][google.firestore.v1.Document] that has gone out of view.
     *
     * Generated from protobuf field <code>string document = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkString($var, True);
        $this->document = $var;

        return $this;
    }

    /**
     * A set of target IDs for targets that previously matched this document.
     *
     * Generated from protobuf field <code>repeated int32 removed_target_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRemovedTargetIds()
    {
        return $this->removed_target_ids;
    }

    /**
     * A set of target IDs for targets that previously matched this document.
     *
     * Generated from protobuf field <code>repeated int32 removed_target_ids = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRemovedTargetIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->removed_target_ids = $arr;

        return $this;
    }

    /**
     * The read timestamp at which the remove was observed.
     * Greater or equal to the `commit_time` of the change/delete/remove.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getReadTime()
    {
        return isset($this->read_time) ? $this->read_time : null;
    }

    public function hasReadTime()
    {
        return isset($this->read_time);
    }

    public function clearReadTime()
    {
        unset($this->read_time);
    }

    /**
     * The read timestamp at which the remove was observed.
     * Greater or equal to the `commit_time` of the change/delete/remove.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

}

