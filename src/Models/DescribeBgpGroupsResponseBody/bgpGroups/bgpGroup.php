<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpGroupsResponseBody\bgpGroups;

use AlibabaCloud\Tea\Model;

class bgpGroup extends Model
{
    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $bgpGroupId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hold;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $isFake;

    /**
     * @var string
     */
    public $keepalive;

    /**
     * @var string
     */
    public $localAsn;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $peerAsn;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $routeLimit;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'authKey'     => 'AuthKey',
        'bgpGroupId'  => 'BgpGroupId',
        'description' => 'Description',
        'hold'        => 'Hold',
        'ipVersion'   => 'IpVersion',
        'isFake'      => 'IsFake',
        'keepalive'   => 'Keepalive',
        'localAsn'    => 'LocalAsn',
        'name'        => 'Name',
        'peerAsn'     => 'PeerAsn',
        'regionId'    => 'RegionId',
        'routeLimit'  => 'RouteLimit',
        'routerId'    => 'RouterId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->bgpGroupId) {
            $res['BgpGroupId'] = $this->bgpGroupId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hold) {
            $res['Hold'] = $this->hold;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->isFake) {
            $res['IsFake'] = $this->isFake;
        }
        if (null !== $this->keepalive) {
            $res['Keepalive'] = $this->keepalive;
        }
        if (null !== $this->localAsn) {
            $res['LocalAsn'] = $this->localAsn;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->peerAsn) {
            $res['PeerAsn'] = $this->peerAsn;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->routeLimit) {
            $res['RouteLimit'] = $this->routeLimit;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bgpGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['BgpGroupId'])) {
            $model->bgpGroupId = $map['BgpGroupId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Hold'])) {
            $model->hold = $map['Hold'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IsFake'])) {
            $model->isFake = $map['IsFake'];
        }
        if (isset($map['Keepalive'])) {
            $model->keepalive = $map['Keepalive'];
        }
        if (isset($map['LocalAsn'])) {
            $model->localAsn = $map['LocalAsn'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PeerAsn'])) {
            $model->peerAsn = $map['PeerAsn'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RouteLimit'])) {
            $model->routeLimit = $map['RouteLimit'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
