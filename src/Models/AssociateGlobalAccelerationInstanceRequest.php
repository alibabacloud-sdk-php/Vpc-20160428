<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AssociateGlobalAccelerationInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $globalAccelerationInstanceId;

    /**
     * @var string
     */
    public $backendServerId;

    /**
     * @var string
     */
    public $backendServerRegionId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $backendServerType;
    protected $_name = [
        'ownerId'                      => 'OwnerId',
        'resourceOwnerAccount'         => 'ResourceOwnerAccount',
        'resourceOwnerId'              => 'ResourceOwnerId',
        'regionId'                     => 'RegionId',
        'globalAccelerationInstanceId' => 'GlobalAccelerationInstanceId',
        'backendServerId'              => 'BackendServerId',
        'backendServerRegionId'        => 'BackendServerRegionId',
        'ownerAccount'                 => 'OwnerAccount',
        'backendServerType'            => 'BackendServerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->globalAccelerationInstanceId) {
            $res['GlobalAccelerationInstanceId'] = $this->globalAccelerationInstanceId;
        }
        if (null !== $this->backendServerId) {
            $res['BackendServerId'] = $this->backendServerId;
        }
        if (null !== $this->backendServerRegionId) {
            $res['BackendServerRegionId'] = $this->backendServerRegionId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->backendServerType) {
            $res['BackendServerType'] = $this->backendServerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateGlobalAccelerationInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['GlobalAccelerationInstanceId'])) {
            $model->globalAccelerationInstanceId = $map['GlobalAccelerationInstanceId'];
        }
        if (isset($map['BackendServerId'])) {
            $model->backendServerId = $map['BackendServerId'];
        }
        if (isset($map['BackendServerRegionId'])) {
            $model->backendServerRegionId = $map['BackendServerRegionId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['BackendServerType'])) {
            $model->backendServerType = $map['BackendServerType'];
        }

        return $model;
    }
}
