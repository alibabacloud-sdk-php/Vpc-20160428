<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesRequest\filter;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeEipAddressesRequest extends Model
{
    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @description The ID of the EIP that you want to query.
     *
     * You can enter up to 50 IDs of EIPs. Separate multiple IDs with commas (,).
     *
     * >  If both the **EipAddress** and **AllocationId** parameters are set, you can enter up to 50 IDs of EIPs in **AllocationId**, and enter up to 50 IP addresses of EIPs in **EipAddress**.
     * @example eip-2zeerraiwb7ujxscd****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The ID of the cloud resource.
     *
     * @example i-2zebb08phyccdvf****
     *
     * @var string
     */
    public $associatedInstanceId;

    /**
     * @description The type of the cloud resource with which you want to associate the EIP. Valid values:
     *
     *   **EcsInstance** (default): an Elastic Compute Service (ECS) instance in a virtual private cloud (VPC)
     *   **SlbInstance**: a Server Load Balancer (SLB) instance in a VPC
     *   **Nat**: a NAT gateway
     *   **HaVip**: a high-availability virtual IP address (HAVIP)
     *   **NetworkInterface**: a secondary ENI
     *   **IpAddress**: an IP address
     *
     * >  You can associate only one EIP with each ECS instance, SLB instance, HAVIP, or IP address. You can associate multiple EIPs with each NAT gateway. The number of EIPs that you can associate with a secondary ENI depends on the association mode. For more information, see [EIP overview](~~72125~~).
     * @example EcsInstance
     *
     * @var string
     */
    public $associatedInstanceType;

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
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true**: performs a dry run. The system checks the required parameters, request syntax, and limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and sends the request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The IP address of the EIP that you want to query.
     *
     * You can enter up to 50 IP addresses of EIPs. Separate multiple IP addresses with commas (,).
     *
     * >  If both the **EipAddress** and **AllocationId** parameters are set, you can enter up to 50 IP addresses of EIPs in **EipAddress**, and enter up to 50 IDs of EIPs in **AllocationId**.
     * @example 47.75.XX.XX
     *
     * @var string
     */
    public $eipAddress;

    /**
     * @description The name of the EIP.
     *
     * The name must be 1 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). The name must start with a letter.
     * @example EIP-01
     *
     * @var string
     */
    public $eipName;

    /**
     * @description The line type. Valid values:
     *
     *   **BGP** (default): BGP (Multi-ISP) lines. All regions support BGP (Multi-ISP) EIPs.
     *   **BGP_PRO**: BGP (Multi-ISP) Pro lines. Only the following regions support BGP (Multi-ISP) Pro lines: China (Hong Kong), Singapore, Malaysia (Kuala Lumpur), Philippines (Manila), Indonesia (Jakarta), and Thailand (Bangkok).
     *
     * If you are allowed to use single-ISP bandwidth, you can also choose one of the following values:
     *
     *   **ChinaTelecom**: China Telecom
     *   **ChinaUnicom**: China Unicom
     *   **ChinaMobile**: China Mobile
     *   **ChinaTelecom_L2**: China Telecom L2
     *   **ChinaUnicom_L2**: China Unicom L2
     *   **ChinaMobile_L2**: China Mobile L2
     *
     * If your services are deployed in China East 1 Finance, you must set this parameter to **BGP_FinanceCloud**.
     * @example BGP
     *
     * @var string
     */
    public $ISP;

    /**
     * @description Specifies whether to return information about pending orders. Valid values:
     *
     *   **false** (default): does not return information about pending orders.
     *   **true**: returns information about pending orders.
     *
     * @example false
     *
     * @var bool
     */
    public $includeReservationData;

    /**
     * @description The reason why the EIP is locked. Valid values:
     *
     *   **financial**: The EIP is locked due to overdue payments.
     *   **security**: The EIP is locked for security reasons.
     *
     * @example financial
     *
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: **100**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The IP address pool to which the EIP that you want to query belongs.
     *
     * @example pippool-2vc0kxcedhquybdsz****
     *
     * @var string
     */
    public $publicIpAddressPoolId;

    /**
     * @description The region ID of the EIP.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the EIPs belong.
     *
     * @example rg-acfmxazb4pcdvf****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to enable Anti-DDoS Pro/Premium. Valid values:
     *
     *   **false** (default): no
     *   **true**: yes
     *
     * @example false
     *
     * @var bool
     */
    public $securityProtectionEnabled;

    /**
     * @description The IDs of the contiguous EIPs.
     *
     * @example eipsg-t4nr90yik5oy38xdy****
     *
     * @var string
     */
    public $segmentInstanceId;

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
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'filter'                    => 'Filter',
        'allocationId'              => 'AllocationId',
        'associatedInstanceId'      => 'AssociatedInstanceId',
        'associatedInstanceType'    => 'AssociatedInstanceType',
        'chargeType'                => 'ChargeType',
        'dryRun'                    => 'DryRun',
        'eipAddress'                => 'EipAddress',
        'eipName'                   => 'EipName',
        'ISP'                       => 'ISP',
        'includeReservationData'    => 'IncludeReservationData',
        'lockReason'                => 'LockReason',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'publicIpAddressPoolId'     => 'PublicIpAddressPoolId',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'securityProtectionEnabled' => 'SecurityProtectionEnabled',
        'segmentInstanceId'         => 'SegmentInstanceId',
        'status'                    => 'Status',
        'tag'                       => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->associatedInstanceId) {
            $res['AssociatedInstanceId'] = $this->associatedInstanceId;
        }
        if (null !== $this->associatedInstanceType) {
            $res['AssociatedInstanceType'] = $this->associatedInstanceType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = $this->eipAddress;
        }
        if (null !== $this->eipName) {
            $res['EipName'] = $this->eipName;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->includeReservationData) {
            $res['IncludeReservationData'] = $this->includeReservationData;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->publicIpAddressPoolId) {
            $res['PublicIpAddressPoolId'] = $this->publicIpAddressPoolId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityProtectionEnabled) {
            $res['SecurityProtectionEnabled'] = $this->securityProtectionEnabled;
        }
        if (null !== $this->segmentInstanceId) {
            $res['SegmentInstanceId'] = $this->segmentInstanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEipAddressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n             = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['AssociatedInstanceId'])) {
            $model->associatedInstanceId = $map['AssociatedInstanceId'];
        }
        if (isset($map['AssociatedInstanceType'])) {
            $model->associatedInstanceType = $map['AssociatedInstanceType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EipAddress'])) {
            $model->eipAddress = $map['EipAddress'];
        }
        if (isset($map['EipName'])) {
            $model->eipName = $map['EipName'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['IncludeReservationData'])) {
            $model->includeReservationData = $map['IncludeReservationData'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PublicIpAddressPoolId'])) {
            $model->publicIpAddressPoolId = $map['PublicIpAddressPoolId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityProtectionEnabled'])) {
            $model->securityProtectionEnabled = $map['SecurityProtectionEnabled'];
        }
        if (isset($map['SegmentInstanceId'])) {
            $model->segmentInstanceId = $map['SegmentInstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
