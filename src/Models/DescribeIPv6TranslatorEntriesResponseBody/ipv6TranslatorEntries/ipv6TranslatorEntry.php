<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorEntriesResponseBody\ipv6TranslatorEntries;

use AlibabaCloud\Tea\Model;

class ipv6TranslatorEntry extends Model
{
    /**
     * @example ipv6transacl-bp1de2xxxx
     *
     * @var string
     */
    public $aclId;

    /**
     * @example on
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @example 2400:3200:1600::xxx
     *
     * @var string
     */
    public $allocateIpv6Addr;

    /**
     * @example 80
     *
     * @var int
     */
    public $allocateIpv6Port;

    /**
     * @example 47.99.xx.xx
     *
     * @var string
     */
    public $backendIpv4Addr;

    /**
     * @example 80
     *
     * @var string
     */
    public $backendIpv4Port;

    /**
     * @example 1
     *
     * @var string
     */
    public $entryBandwidth;

    /**
     * @example description
     *
     * @var string
     */
    public $entryDescription;

    /**
     * @example name
     *
     * @var string
     */
    public $entryName;

    /**
     * @example active
     *
     * @var string
     */
    public $entryStatus;

    /**
     * @example ipv6transentry-bp1g8bhrdexxxxx
     *
     * @var string
     */
    public $ipv6TranslatorEntryId;

    /**
     * @example ipv6trans-bp1858ysxxxxxx
     *
     * @var string
     */
    public $ipv6TranslatorId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example tcp
     *
     * @var string
     */
    public $transProtocol;
    protected $_name = [
        'aclId'                 => 'AclId',
        'aclStatus'             => 'AclStatus',
        'aclType'               => 'AclType',
        'allocateIpv6Addr'      => 'AllocateIpv6Addr',
        'allocateIpv6Port'      => 'AllocateIpv6Port',
        'backendIpv4Addr'       => 'BackendIpv4Addr',
        'backendIpv4Port'       => 'BackendIpv4Port',
        'entryBandwidth'        => 'EntryBandwidth',
        'entryDescription'      => 'EntryDescription',
        'entryName'             => 'EntryName',
        'entryStatus'           => 'EntryStatus',
        'ipv6TranslatorEntryId' => 'Ipv6TranslatorEntryId',
        'ipv6TranslatorId'      => 'Ipv6TranslatorId',
        'regionId'              => 'RegionId',
        'transProtocol'         => 'TransProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->allocateIpv6Addr) {
            $res['AllocateIpv6Addr'] = $this->allocateIpv6Addr;
        }
        if (null !== $this->allocateIpv6Port) {
            $res['AllocateIpv6Port'] = $this->allocateIpv6Port;
        }
        if (null !== $this->backendIpv4Addr) {
            $res['BackendIpv4Addr'] = $this->backendIpv4Addr;
        }
        if (null !== $this->backendIpv4Port) {
            $res['BackendIpv4Port'] = $this->backendIpv4Port;
        }
        if (null !== $this->entryBandwidth) {
            $res['EntryBandwidth'] = $this->entryBandwidth;
        }
        if (null !== $this->entryDescription) {
            $res['EntryDescription'] = $this->entryDescription;
        }
        if (null !== $this->entryName) {
            $res['EntryName'] = $this->entryName;
        }
        if (null !== $this->entryStatus) {
            $res['EntryStatus'] = $this->entryStatus;
        }
        if (null !== $this->ipv6TranslatorEntryId) {
            $res['Ipv6TranslatorEntryId'] = $this->ipv6TranslatorEntryId;
        }
        if (null !== $this->ipv6TranslatorId) {
            $res['Ipv6TranslatorId'] = $this->ipv6TranslatorId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->transProtocol) {
            $res['TransProtocol'] = $this->transProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6TranslatorEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['AllocateIpv6Addr'])) {
            $model->allocateIpv6Addr = $map['AllocateIpv6Addr'];
        }
        if (isset($map['AllocateIpv6Port'])) {
            $model->allocateIpv6Port = $map['AllocateIpv6Port'];
        }
        if (isset($map['BackendIpv4Addr'])) {
            $model->backendIpv4Addr = $map['BackendIpv4Addr'];
        }
        if (isset($map['BackendIpv4Port'])) {
            $model->backendIpv4Port = $map['BackendIpv4Port'];
        }
        if (isset($map['EntryBandwidth'])) {
            $model->entryBandwidth = $map['EntryBandwidth'];
        }
        if (isset($map['EntryDescription'])) {
            $model->entryDescription = $map['EntryDescription'];
        }
        if (isset($map['EntryName'])) {
            $model->entryName = $map['EntryName'];
        }
        if (isset($map['EntryStatus'])) {
            $model->entryStatus = $map['EntryStatus'];
        }
        if (isset($map['Ipv6TranslatorEntryId'])) {
            $model->ipv6TranslatorEntryId = $map['Ipv6TranslatorEntryId'];
        }
        if (isset($map['Ipv6TranslatorId'])) {
            $model->ipv6TranslatorId = $map['Ipv6TranslatorId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TransProtocol'])) {
            $model->transProtocol = $map['TransProtocol'];
        }

        return $model;
    }
}
