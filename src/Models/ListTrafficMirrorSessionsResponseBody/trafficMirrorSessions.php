<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorSessionsResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorSessionsResponseBody\trafficMirrorSessions\tags;
use AlibabaCloud\Tea\Model;

class trafficMirrorSessions extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @example 1500
     *
     * @var int
     */
    public $packetLength;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example tmf-j6cmls82xnc86vtpe****
     *
     * @var string
     */
    public $trafficMirrorFilterId;

    /**
     * @example Normal
     *
     * @var string
     */
    public $trafficMirrorSessionBusinessStatus;

    /**
     * @example This is a session.
     *
     * @var string
     */
    public $trafficMirrorSessionDescription;

    /**
     * @example tms-j6cla50buc44ap8tu****
     *
     * @var string
     */
    public $trafficMirrorSessionId;

    /**
     * @example abc
     *
     * @var string
     */
    public $trafficMirrorSessionName;

    /**
     * @example Created
     *
     * @var string
     */
    public $trafficMirrorSessionStatus;

    /**
     * @var string[]
     */
    public $trafficMirrorSourceIds;

    /**
     * @example eni-j6c2fp57q8rr47rp****
     *
     * @var string
     */
    public $trafficMirrorTargetId;

    /**
     * @example NetworkInterface
     *
     * @var string
     */
    public $trafficMirrorTargetType;

    /**
     * @example 10
     *
     * @var int
     */
    public $virtualNetworkId;
    protected $_name = [
        'enabled'                            => 'Enabled',
        'packetLength'                       => 'PacketLength',
        'priority'                           => 'Priority',
        'resourceGroupId'                    => 'ResourceGroupId',
        'tags'                               => 'Tags',
        'trafficMirrorFilterId'              => 'TrafficMirrorFilterId',
        'trafficMirrorSessionBusinessStatus' => 'TrafficMirrorSessionBusinessStatus',
        'trafficMirrorSessionDescription'    => 'TrafficMirrorSessionDescription',
        'trafficMirrorSessionId'             => 'TrafficMirrorSessionId',
        'trafficMirrorSessionName'           => 'TrafficMirrorSessionName',
        'trafficMirrorSessionStatus'         => 'TrafficMirrorSessionStatus',
        'trafficMirrorSourceIds'             => 'TrafficMirrorSourceIds',
        'trafficMirrorTargetId'              => 'TrafficMirrorTargetId',
        'trafficMirrorTargetType'            => 'TrafficMirrorTargetType',
        'virtualNetworkId'                   => 'VirtualNetworkId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->packetLength) {
            $res['PacketLength'] = $this->packetLength;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trafficMirrorFilterId) {
            $res['TrafficMirrorFilterId'] = $this->trafficMirrorFilterId;
        }
        if (null !== $this->trafficMirrorSessionBusinessStatus) {
            $res['TrafficMirrorSessionBusinessStatus'] = $this->trafficMirrorSessionBusinessStatus;
        }
        if (null !== $this->trafficMirrorSessionDescription) {
            $res['TrafficMirrorSessionDescription'] = $this->trafficMirrorSessionDescription;
        }
        if (null !== $this->trafficMirrorSessionId) {
            $res['TrafficMirrorSessionId'] = $this->trafficMirrorSessionId;
        }
        if (null !== $this->trafficMirrorSessionName) {
            $res['TrafficMirrorSessionName'] = $this->trafficMirrorSessionName;
        }
        if (null !== $this->trafficMirrorSessionStatus) {
            $res['TrafficMirrorSessionStatus'] = $this->trafficMirrorSessionStatus;
        }
        if (null !== $this->trafficMirrorSourceIds) {
            $res['TrafficMirrorSourceIds'] = $this->trafficMirrorSourceIds;
        }
        if (null !== $this->trafficMirrorTargetId) {
            $res['TrafficMirrorTargetId'] = $this->trafficMirrorTargetId;
        }
        if (null !== $this->trafficMirrorTargetType) {
            $res['TrafficMirrorTargetType'] = $this->trafficMirrorTargetType;
        }
        if (null !== $this->virtualNetworkId) {
            $res['VirtualNetworkId'] = $this->virtualNetworkId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficMirrorSessions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['PacketLength'])) {
            $model->packetLength = $map['PacketLength'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TrafficMirrorFilterId'])) {
            $model->trafficMirrorFilterId = $map['TrafficMirrorFilterId'];
        }
        if (isset($map['TrafficMirrorSessionBusinessStatus'])) {
            $model->trafficMirrorSessionBusinessStatus = $map['TrafficMirrorSessionBusinessStatus'];
        }
        if (isset($map['TrafficMirrorSessionDescription'])) {
            $model->trafficMirrorSessionDescription = $map['TrafficMirrorSessionDescription'];
        }
        if (isset($map['TrafficMirrorSessionId'])) {
            $model->trafficMirrorSessionId = $map['TrafficMirrorSessionId'];
        }
        if (isset($map['TrafficMirrorSessionName'])) {
            $model->trafficMirrorSessionName = $map['TrafficMirrorSessionName'];
        }
        if (isset($map['TrafficMirrorSessionStatus'])) {
            $model->trafficMirrorSessionStatus = $map['TrafficMirrorSessionStatus'];
        }
        if (isset($map['TrafficMirrorSourceIds'])) {
            if (!empty($map['TrafficMirrorSourceIds'])) {
                $model->trafficMirrorSourceIds = $map['TrafficMirrorSourceIds'];
            }
        }
        if (isset($map['TrafficMirrorTargetId'])) {
            $model->trafficMirrorTargetId = $map['TrafficMirrorTargetId'];
        }
        if (isset($map['TrafficMirrorTargetType'])) {
            $model->trafficMirrorTargetType = $map['TrafficMirrorTargetType'];
        }
        if (isset($map['VirtualNetworkId'])) {
            $model->virtualNetworkId = $map['VirtualNetworkId'];
        }

        return $model;
    }
}
