<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpnRouteEntryResponseBody extends Model
{
    /**
     * @example 1492747187000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example mytest
     *
     * @var string
     */
    public $description;

    /**
     * @example vco-bp15oes1py4i66rmd****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @example Ipsec
     *
     * @var string
     */
    public $overlayMode;

    /**
     * @example 5BE01CD7-5A50-472D-AC14-CA181C5C03BE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $routeDest;

    /**
     * @example published
     *
     * @var string
     */
    public $state;

    /**
     * @example vpn-bp1cmw7jh1nfe43m9****
     *
     * @var string
     */
    public $vpnInstanceId;

    /**
     * @example 0
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'nextHop'       => 'NextHop',
        'overlayMode'   => 'OverlayMode',
        'requestId'     => 'RequestId',
        'routeDest'     => 'RouteDest',
        'state'         => 'State',
        'vpnInstanceId' => 'VpnInstanceId',
        'weight'        => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->overlayMode) {
            $res['OverlayMode'] = $this->overlayMode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeDest) {
            $res['RouteDest'] = $this->routeDest;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->vpnInstanceId) {
            $res['VpnInstanceId'] = $this->vpnInstanceId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpnRouteEntryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }
        if (isset($map['OverlayMode'])) {
            $model->overlayMode = $map['OverlayMode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteDest'])) {
            $model->routeDest = $map['RouteDest'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['VpnInstanceId'])) {
            $model->vpnInstanceId = $map['VpnInstanceId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
