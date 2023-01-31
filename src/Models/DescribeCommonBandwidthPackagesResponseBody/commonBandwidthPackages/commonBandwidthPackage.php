<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages\commonBandwidthPackage\publicIpAddresses;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages\commonBandwidthPackage\securityProtectionTypes;
use AlibabaCloud\Tea\Model;

class commonBandwidthPackage extends Model
{
    /**
     * @example 20
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @example cbwp-bp1t3sm1ffzmshdki****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @example 2017-06-28T06:39:20Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @example none
     *
     * @var string
     */
    public $description;

    /**
     * @example 2019-01-15T03:08:37Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example false
     *
     * @var string
     */
    public $hasReservationData;

    /**
     * @example BGP
     *
     * @var string
     */
    public $ISP;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @var publicIpAddresses
     */
    public $publicIpAddresses;

    /**
     * @example 20
     *
     * @var int
     */
    public $ratio;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2018-08-30T16:00:00Z
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @example 1000
     *
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @example PayByBandwidth
     *
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @example RENEWCHANGE
     *
     * @var string
     */
    public $reservationOrderType;

    /**
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var securityProtectionTypes
     */
    public $securityProtectionTypes;

    /**
     * @example 1
     *
     * @var int
     */
    public $serviceManaged;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bandwidth'                     => 'Bandwidth',
        'bandwidthPackageId'            => 'BandwidthPackageId',
        'businessStatus'                => 'BusinessStatus',
        'creationTime'                  => 'CreationTime',
        'deletionProtection'            => 'DeletionProtection',
        'description'                   => 'Description',
        'expiredTime'                   => 'ExpiredTime',
        'hasReservationData'            => 'HasReservationData',
        'ISP'                           => 'ISP',
        'instanceChargeType'            => 'InstanceChargeType',
        'internetChargeType'            => 'InternetChargeType',
        'name'                          => 'Name',
        'publicIpAddresses'             => 'PublicIpAddresses',
        'ratio'                         => 'Ratio',
        'regionId'                      => 'RegionId',
        'reservationActiveTime'         => 'ReservationActiveTime',
        'reservationBandwidth'          => 'ReservationBandwidth',
        'reservationInternetChargeType' => 'ReservationInternetChargeType',
        'reservationOrderType'          => 'ReservationOrderType',
        'resourceGroupId'               => 'ResourceGroupId',
        'securityProtectionTypes'       => 'SecurityProtectionTypes',
        'serviceManaged'                => 'ServiceManaged',
        'status'                        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->publicIpAddresses) {
            $res['PublicIpAddresses'] = null !== $this->publicIpAddresses ? $this->publicIpAddresses->toMap() : null;
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reservationActiveTime) {
            $res['ReservationActiveTime'] = $this->reservationActiveTime;
        }
        if (null !== $this->reservationBandwidth) {
            $res['ReservationBandwidth'] = $this->reservationBandwidth;
        }
        if (null !== $this->reservationInternetChargeType) {
            $res['ReservationInternetChargeType'] = $this->reservationInternetChargeType;
        }
        if (null !== $this->reservationOrderType) {
            $res['ReservationOrderType'] = $this->reservationOrderType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityProtectionTypes) {
            $res['SecurityProtectionTypes'] = null !== $this->securityProtectionTypes ? $this->securityProtectionTypes->toMap() : null;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commonBandwidthPackage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PublicIpAddresses'])) {
            $model->publicIpAddresses = publicIpAddresses::fromMap($map['PublicIpAddresses']);
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReservationActiveTime'])) {
            $model->reservationActiveTime = $map['ReservationActiveTime'];
        }
        if (isset($map['ReservationBandwidth'])) {
            $model->reservationBandwidth = $map['ReservationBandwidth'];
        }
        if (isset($map['ReservationInternetChargeType'])) {
            $model->reservationInternetChargeType = $map['ReservationInternetChargeType'];
        }
        if (isset($map['ReservationOrderType'])) {
            $model->reservationOrderType = $map['ReservationOrderType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityProtectionTypes'])) {
            $model->securityProtectionTypes = securityProtectionTypes::fromMap($map['SecurityProtectionTypes']);
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
