<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses\eipAddress\operationLocks;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses\eipAddress\securityProtectionTypes;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses\eipAddress\tags;
use AlibabaCloud\Tea\Model;

class eipAddress extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * @example eip-2zeerraiwb7ujcdvf****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The time when the EIP was created. The time is displayed in `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2021-04-23T01:37:38Z
     *
     * @var string
     */
    public $allocationTime;

    /**
     * @description The maximum bandwidth of the EIP. Unit: Mbit/s.
     *
     * @example 5
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description The maximum bandwidth of the EIP bandwidth plan with which the EIP is associated. Unit: Mbit/s.
     *
     * @example 50
     *
     * @var string
     */
    public $bandwidthPackageBandwidth;

    /**
     * @description The ID of the EIP bandwidth plan.
     *
     * @example cbwp-bp1ego3i4j07ccdvf****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The type of the bandwidth. Only **CommonBandwidthPackage** (EIP Bandwidth Plan) is returned.
     *
     * @example CommonBandwidthPackage
     *
     * @var string
     */
    public $bandwidthPackageType;

    /**
     * @description The service status of the EIP. Valid values:
     *
     *   **Normal**: active
     *   **FinancialLocked**: locked
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The billing method of the EIP. Valid values:
     *
     *   **PostPaid**: pay-as-you-go
     *   **PrePaid**: subscription
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Indicates whether deletion protection is enabled. Valid values:
     *
     *   **true**: enabled
     *   **false**: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The description of the EIP.
     *
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @description The maximum bandwidth of the EIP when it is not associated with an EIP bandwidth plan. Unit: Mbit/s.
     *
     * @example 101
     *
     * @var string
     */
    public $eipBandwidth;

    /**
     * @description The time when the EIP expires. The time is displayed in `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2021-05-23T02:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description Indicates whether fine-grained monitoring is enabled for the EIP. Valid values:
     *
     *   **false**: no
     *   **true**: yes
     *
     * @example false
     *
     * @var string
     */
    public $HDMonitorStatus;

    /**
     * @description Indicates whether renewal data is included.
     *
     *   **false**: no
     *   **true**: yes This parameter returns **true** only when the **IncludeReservationData** parameter is set to **true** and some orders have not taken effect.
     *
     * @example false
     *
     * @var string
     */
    public $hasReservationData;

    /**
     * @description The line type.
     *
     *   **BGP**: BGP (Multi-ISP). All regions support BGP (Multi-ISP) EIPs.
     *   **BGP_PRO**: BGP (Multi-ISP) Pro lines. Only the following regions support BGP (Multi-ISP) Pro lines: China (Hong Kong), Singapore, Malaysia (Kuala Lumpur), Philippines (Manila), Indonesia (Jakarta), and Thailand (Bangkok).
     *
     * If you are allowed to use single-ISP bandwidth, one of the following values is returned:
     *
     *   **ChinaTelecom**: China Telecom
     *   **ChinaUnicom**: China Unicom
     *   **ChinaMobile**: China Mobile
     *   **ChinaTelecom_L2**: China Telecom L2
     *   **ChinaUnicom_L2**: China Unicom L2
     *   **ChinaMobile_L2**: China Mobile L2
     *
     * If your services are deployed in China East 1 Finance, **BGP_FinanceCloud** is returned.
     * @example BGP
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The ID of the associated instance.
     *
     * @example i-bp15zckdt37cdvf****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the associated instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegionId;

    /**
     * @description The type of the associated instance. Valid values:
     *
     *   **EcsInstance**: an ECS instance in a VPC
     *   **SlbInstance**: an SLB instance in a VPC
     *   **Nat**: a NAT gateway
     *   **HaVip**: an HAVIP
     *   **NetworkInterface**: a secondary ENI
     *   **IpAddress**: an IP address
     *
     * @example EcsInstance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The metering method of the EIP. Valid values:
     *
     *   **PayByBandwidth**: pay-by-bandwidth
     *   **PayByTraffic**: pay-by-data-transfer
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The IP address of the EIP.
     *
     * @example 47.75.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The name of the EIP.
     *
     * @example EIP-01
     *
     * @var string
     */
    public $name;

    /**
     * @description The network type. The value is set to **public**, which indicates the Internet.
     *
     * @example public
     *
     * @var string
     */
    public $netmode;

    /**
     * @description The details about the locked EIPs.
     *
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description The ID of the IP address pool to which the EIP belongs.
     *
     * @example pippool-2vc0kxcedhquybdsz****
     *
     * @var string
     */
    public $publicIpAddressPoolId;

    /**
     * @description The region ID of the EIP.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The time when the renewal takes effect. The time is displayed in `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2021-05-23T16:00:00Z
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @description The bandwidth after the renewal takes effect. Unit: Mbit/s.
     *
     * @example 12
     *
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @description The metering method that is used after the renewal takes effect. Valid values:
     *
     *   **PayByBandwidth**: pay-by-bandwidth
     *   **PayByTraffic**: pay-by-data-transfer
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @description The type of the renewal order. Valid values:
     *
     *   **RENEWCHANGE**: renewal with an upgrade or a downgrade
     *   **TEMP_UPGRADE**: temporary upgrade
     *   **UPGRADE**: upgrade
     *
     * @example RENEWCHANGE
     *
     * @var string
     */
    public $reservationOrderType;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazcdxs****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether level-2 throttling is configured. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $secondLimited;

    /**
     * @description The edition of Anti-DDoS.
     *
     * - If an empty value is returned, it indicates that Anti-DDoS Origin Basic is used.
     * - If **AntiDDoS_Enhanced** is returned, it indicates that Anti-DDoS Pro/Premium is used.
     * @var securityProtectionTypes
     */
    public $securityProtectionTypes;

    /**
     * @description The IDs of contiguous EIPs.
     *
     * This value is returned only when you query contiguous EIP groups.
     * @example eipsg-t4nr90yik5oy38xd****
     *
     * @var string
     */
    public $segmentInstanceId;

    /**
     * @description Indicates whether the resource is created by the service account.
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $serviceManaged;

    /**
     * @description The status of the EIP. Valid values:
     *
     *   **Associating**: being associated
     *   **Unassociating**: being disassociated
     *   **InUse**: allocated
     *   **Available**: available
     *   **Releasing**: being released
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag list of the EIP.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the VPC that has IPv4 gateways enabled and that is deployed in the same region as the EIP.
     *
     * When you associate an EIP with an IP address, the system can enable the IP address to access the Internet based on VPC route configurations.
     *
     * >  This parameter is returned if **InstanceType** is set to **IpAddress**. In this case, the EIP is associated with an IP address.
     * @example vpc-bp15zckdt37pq72zv****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone of the EIP.
     *
     * This parameter is returned only if your account is included in the whitelist.
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zone;
    protected $_name = [
        'allocationId'                  => 'AllocationId',
        'allocationTime'                => 'AllocationTime',
        'bandwidth'                     => 'Bandwidth',
        'bandwidthPackageBandwidth'     => 'BandwidthPackageBandwidth',
        'bandwidthPackageId'            => 'BandwidthPackageId',
        'bandwidthPackageType'          => 'BandwidthPackageType',
        'businessStatus'                => 'BusinessStatus',
        'chargeType'                    => 'ChargeType',
        'deletionProtection'            => 'DeletionProtection',
        'description'                   => 'Description',
        'eipBandwidth'                  => 'EipBandwidth',
        'expiredTime'                   => 'ExpiredTime',
        'HDMonitorStatus'               => 'HDMonitorStatus',
        'hasReservationData'            => 'HasReservationData',
        'ISP'                           => 'ISP',
        'instanceId'                    => 'InstanceId',
        'instanceRegionId'              => 'InstanceRegionId',
        'instanceType'                  => 'InstanceType',
        'internetChargeType'            => 'InternetChargeType',
        'ipAddress'                     => 'IpAddress',
        'name'                          => 'Name',
        'netmode'                       => 'Netmode',
        'operationLocks'                => 'OperationLocks',
        'publicIpAddressPoolId'         => 'PublicIpAddressPoolId',
        'regionId'                      => 'RegionId',
        'reservationActiveTime'         => 'ReservationActiveTime',
        'reservationBandwidth'          => 'ReservationBandwidth',
        'reservationInternetChargeType' => 'ReservationInternetChargeType',
        'reservationOrderType'          => 'ReservationOrderType',
        'resourceGroupId'               => 'ResourceGroupId',
        'secondLimited'                 => 'SecondLimited',
        'securityProtectionTypes'       => 'SecurityProtectionTypes',
        'segmentInstanceId'             => 'SegmentInstanceId',
        'serviceManaged'                => 'ServiceManaged',
        'status'                        => 'Status',
        'tags'                          => 'Tags',
        'vpcId'                         => 'VpcId',
        'zone'                          => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->allocationTime) {
            $res['AllocationTime'] = $this->allocationTime;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthPackageBandwidth) {
            $res['BandwidthPackageBandwidth'] = $this->bandwidthPackageBandwidth;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->bandwidthPackageType) {
            $res['BandwidthPackageType'] = $this->bandwidthPackageType;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->HDMonitorStatus) {
            $res['HDMonitorStatus'] = $this->HDMonitorStatus;
        }
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceRegionId) {
            $res['InstanceRegionId'] = $this->instanceRegionId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netmode) {
            $res['Netmode'] = $this->netmode;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->publicIpAddressPoolId) {
            $res['PublicIpAddressPoolId'] = $this->publicIpAddressPoolId;
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
        if (null !== $this->secondLimited) {
            $res['SecondLimited'] = $this->secondLimited;
        }
        if (null !== $this->securityProtectionTypes) {
            $res['SecurityProtectionTypes'] = null !== $this->securityProtectionTypes ? $this->securityProtectionTypes->toMap() : null;
        }
        if (null !== $this->segmentInstanceId) {
            $res['SegmentInstanceId'] = $this->segmentInstanceId;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['AllocationTime'])) {
            $model->allocationTime = $map['AllocationTime'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthPackageBandwidth'])) {
            $model->bandwidthPackageBandwidth = $map['BandwidthPackageBandwidth'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['BandwidthPackageType'])) {
            $model->bandwidthPackageType = $map['BandwidthPackageType'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['HDMonitorStatus'])) {
            $model->HDMonitorStatus = $map['HDMonitorStatus'];
        }
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceRegionId'])) {
            $model->instanceRegionId = $map['InstanceRegionId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Netmode'])) {
            $model->netmode = $map['Netmode'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['PublicIpAddressPoolId'])) {
            $model->publicIpAddressPoolId = $map['PublicIpAddressPoolId'];
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
        if (isset($map['SecondLimited'])) {
            $model->secondLimited = $map['SecondLimited'];
        }
        if (isset($map['SecurityProtectionTypes'])) {
            $model->securityProtectionTypes = securityProtectionTypes::fromMap($map['SecurityProtectionTypes']);
        }
        if (isset($map['SegmentInstanceId'])) {
            $model->segmentInstanceId = $map['SegmentInstanceId'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
