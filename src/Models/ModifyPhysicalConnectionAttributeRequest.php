<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class ModifyPhysicalConnectionAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $circuitCode;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $lineOperator;

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
     * @var string
     */
    public $peerLocation;

    /**
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @var string
     */
    public $portType;

    /**
     * @var string
     */
    public $redundantPhysicalConnectionId;

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

    /**
     * @var int
     */
    public $bandwidth;
    protected $_name = [
        'circuitCode' => 'CircuitCode',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'lineOperator' => 'LineOperator',
        'name' => 'Name',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'peerLocation' => 'PeerLocation',
        'physicalConnectionId' => 'PhysicalConnectionId',
        'portType' => 'PortType',
        'redundantPhysicalConnectionId' => 'RedundantPhysicalConnectionId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'bandwidth' => 'bandwidth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->lineOperator) {
            $res['LineOperator'] = $this->lineOperator;
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

        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
        }

        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }

        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }

        if (null !== $this->redundantPhysicalConnectionId) {
            $res['RedundantPhysicalConnectionId'] = $this->redundantPhysicalConnectionId;
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

        if (null !== $this->bandwidth) {
            $res['bandwidth'] = $this->bandwidth;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LineOperator'])) {
            $model->lineOperator = $map['LineOperator'];
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

        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
        }

        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }

        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }

        if (isset($map['RedundantPhysicalConnectionId'])) {
            $model->redundantPhysicalConnectionId = $map['RedundantPhysicalConnectionId'];
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

        if (isset($map['bandwidth'])) {
            $model->bandwidth = $map['bandwidth'];
        }

        return $model;
    }
}
