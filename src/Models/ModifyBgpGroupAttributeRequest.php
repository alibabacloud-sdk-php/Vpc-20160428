<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyBgpGroupAttributeRequest extends Model
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
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isFakeAsn;

    /**
     * @var int
     */
    public $localAsn;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $peerAsn;

    /**
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
    protected $_name = [
        'authKey'              => 'AuthKey',
        'bgpGroupId'           => 'BgpGroupId',
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'isFakeAsn'            => 'IsFakeAsn',
        'localAsn'             => 'LocalAsn',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'peerAsn'              => 'PeerAsn',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isFakeAsn) {
            $res['IsFakeAsn'] = $this->isFakeAsn;
        }
        if (null !== $this->localAsn) {
            $res['LocalAsn'] = $this->localAsn;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->peerAsn) {
            $res['PeerAsn'] = $this->peerAsn;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBgpGroupAttributeRequest
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsFakeAsn'])) {
            $model->isFakeAsn = $map['IsFakeAsn'];
        }
        if (isset($map['LocalAsn'])) {
            $model->localAsn = $map['LocalAsn'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PeerAsn'])) {
            $model->peerAsn = $map['PeerAsn'];
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

        return $model;
    }
}
