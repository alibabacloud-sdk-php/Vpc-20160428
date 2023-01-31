<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponseBody\vpnGateways;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponseBody\vpnGateways\vpnGateway\reservationData;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponseBody\vpnGateways\vpnGateway\tags;
use AlibabaCloud\Tea\Model;

class vpnGateway extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoPropagate;

    /**
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @example 1515383700000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableBgp;

    /**
     * @example 1518105600000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 47.12.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example enable
     *
     * @var string
     */
    public $ipsecVpn;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example public
     *
     * @var string
     */
    public $networkType;

    /**
     * @var reservationData
     */
    public $reservationData;

    /**
     * @example 5M
     *
     * @var string
     */
    public $spec;

    /**
     * @example 5
     *
     * @var int
     */
    public $sslMaxConnections;

    /**
     * @example enable
     *
     * @var string
     */
    public $sslVpn;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @example {\"VpnNewImage\":\"true\",\"VpnVersion\":\"v1.2.2\"}
     *
     * @var string
     */
    public $tag;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @example vsw-bp15lbk8sgtr6r5b0****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp1m3i0kn1nd4wiw9****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vpn-bp17lofy9fd0dnvzv****
     *
     * @var string
     */
    public $vpnGatewayId;

    /**
     * @example Normal
     *
     * @var string
     */
    public $vpnType;
    protected $_name = [
        'autoPropagate'     => 'AutoPropagate',
        'businessStatus'    => 'BusinessStatus',
        'chargeType'        => 'ChargeType',
        'createTime'        => 'CreateTime',
        'description'       => 'Description',
        'enableBgp'         => 'EnableBgp',
        'endTime'           => 'EndTime',
        'internetIp'        => 'InternetIp',
        'ipsecVpn'          => 'IpsecVpn',
        'name'              => 'Name',
        'networkType'       => 'NetworkType',
        'reservationData'   => 'ReservationData',
        'spec'              => 'Spec',
        'sslMaxConnections' => 'SslMaxConnections',
        'sslVpn'            => 'SslVpn',
        'status'            => 'Status',
        'tag'               => 'Tag',
        'tags'              => 'Tags',
        'vSwitchId'         => 'VSwitchId',
        'vpcId'             => 'VpcId',
        'vpnGatewayId'      => 'VpnGatewayId',
        'vpnType'           => 'VpnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPropagate) {
            $res['AutoPropagate'] = $this->autoPropagate;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableBgp) {
            $res['EnableBgp'] = $this->enableBgp;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->ipsecVpn) {
            $res['IpsecVpn'] = $this->ipsecVpn;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->reservationData) {
            $res['ReservationData'] = null !== $this->reservationData ? $this->reservationData->toMap() : null;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->sslMaxConnections) {
            $res['SslMaxConnections'] = $this->sslMaxConnections;
        }
        if (null !== $this->sslVpn) {
            $res['SslVpn'] = $this->sslVpn;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }
        if (null !== $this->vpnType) {
            $res['VpnType'] = $this->vpnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnGateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPropagate'])) {
            $model->autoPropagate = $map['AutoPropagate'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableBgp'])) {
            $model->enableBgp = $map['EnableBgp'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IpsecVpn'])) {
            $model->ipsecVpn = $map['IpsecVpn'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['ReservationData'])) {
            $model->reservationData = reservationData::fromMap($map['ReservationData']);
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['SslMaxConnections'])) {
            $model->sslMaxConnections = $map['SslMaxConnections'];
        }
        if (isset($map['SslVpn'])) {
            $model->sslVpn = $map['SslVpn'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }
        if (isset($map['VpnType'])) {
            $model->vpnType = $map['VpnType'];
        }

        return $model;
    }
}
