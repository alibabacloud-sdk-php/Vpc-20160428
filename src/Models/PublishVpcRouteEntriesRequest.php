<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\PublishVpcRouteEntriesRequest\routeEntries;
use AlibabaCloud\Tea\Model;

class PublishVpcRouteEntriesRequest extends Model
{
    /**
     * @description Indicates whether to perform a dry run of this request. Values:
     *
     * - **true**: Sends a check request without publishing the route. The checks include whether the AccessKey is valid, the authorization status of the RAM user, and if all required parameters are filled out. If the check fails, the corresponding error is returned. If the check passes, the `DryRunOperation` error code is returned.
     *
     * - **false** (default): Sends a normal request. After passing the check, it returns a 2xx HTTP status code and directly queries the resource status.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the instance is located. You can obtain the region ID by calling the DescribeRegions interface.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description List of route entries to be published, supporting up to 50 routes at most.
     *
     * @var routeEntries[]
     */
    public $routeEntries;

    /**
     * @description The ID of the target instance for route publication.
     *
     * This parameter is required.
     *
     * @example ecr-dhw2xsds5****
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @description The type of the target for route publication.
     *
     * This parameter is required.
     *
     * @example ECR
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'dryRun' => 'DryRun',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'routeEntries' => 'RouteEntries',
        'targetInstanceId' => 'TargetInstanceId',
        'targetType' => 'TargetType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->routeEntries) {
            $res['RouteEntries'] = [];
            if (null !== $this->routeEntries && \is_array($this->routeEntries)) {
                $n = 0;
                foreach ($this->routeEntries as $item) {
                    $res['RouteEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishVpcRouteEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RouteEntries'])) {
            if (!empty($map['RouteEntries'])) {
                $model->routeEntries = [];
                $n = 0;
                foreach ($map['RouteEntries'] as $item) {
                    $model->routeEntries[$n++] = null !== $item ? routeEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
