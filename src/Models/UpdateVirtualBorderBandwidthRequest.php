<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class UpdateVirtualBorderBandwidthRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example 02fb3da4-130e-11e9-8e44-0016****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example cn-shanghai
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
     * @example vbr-bp15zckdt37pq72****
     *
     * @var string
     */
    public $virtualBorderRouterId;
    protected $_name = [
        'bandwidth'             => 'Bandwidth',
        'clientToken'           => 'ClientToken',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'virtualBorderRouterId' => 'VirtualBorderRouterId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->virtualBorderRouterId) {
            $res['VirtualBorderRouterId'] = $this->virtualBorderRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVirtualBorderBandwidthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['VirtualBorderRouterId'])) {
            $model->virtualBorderRouterId = $map['VirtualBorderRouterId'];
        }

        return $model;
    }
}
