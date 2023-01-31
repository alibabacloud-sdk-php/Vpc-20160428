<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEcGrantRelationResponseBody;

use AlibabaCloud\Tea\Model;

class ecGrantRelations extends Model
{
    /**
     * @example 1250123456123456
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example 2022-09-02T11:46Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example vpc-bp1brjuegjc88v3u9****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example VPCname
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example vrt-bp1i0yzgjd8ra05ec****
     *
     * @var string
     */
    public $instanceRouterId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @example vbr-m5ex0xf63xk8s5bob****
     *
     * @var string
     */
    public $vbrInstanceId;

    /**
     * @example 1210123456123456
     *
     * @var int
     */
    public $vbrOwnerUid;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vbrRegionNo;
    protected $_name = [
        'aliUid'           => 'AliUid',
        'gmtCreate'        => 'GmtCreate',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'instanceRouterId' => 'InstanceRouterId',
        'regionNo'         => 'RegionNo',
        'status'           => 'Status',
        'vbrInstanceId'    => 'VbrInstanceId',
        'vbrOwnerUid'      => 'VbrOwnerUid',
        'vbrRegionNo'      => 'VbrRegionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceRouterId) {
            $res['InstanceRouterId'] = $this->instanceRouterId;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vbrInstanceId) {
            $res['VbrInstanceId'] = $this->vbrInstanceId;
        }
        if (null !== $this->vbrOwnerUid) {
            $res['VbrOwnerUid'] = $this->vbrOwnerUid;
        }
        if (null !== $this->vbrRegionNo) {
            $res['VbrRegionNo'] = $this->vbrRegionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecGrantRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceRouterId'])) {
            $model->instanceRouterId = $map['InstanceRouterId'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VbrInstanceId'])) {
            $model->vbrInstanceId = $map['VbrInstanceId'];
        }
        if (isset($map['VbrOwnerUid'])) {
            $model->vbrOwnerUid = $map['VbrOwnerUid'];
        }
        if (isset($map['VbrRegionNo'])) {
            $model->vbrRegionNo = $map['VbrRegionNo'];
        }

        return $model;
    }
}