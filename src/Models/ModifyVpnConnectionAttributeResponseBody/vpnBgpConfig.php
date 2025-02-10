<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class vpnBgpConfig extends Model
{
    /**
     * @var string
     */
    public $enableBgp;
    /**
     * @var int
     */
    public $localAsn;
    /**
     * @var string
     */
    public $localBgpIp;
    /**
     * @var int
     */
    public $peerAsn;
    /**
     * @var string
     */
    public $peerBgpIp;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $tunnelCidr;
    protected $_name = [
        'enableBgp'  => 'EnableBgp',
        'localAsn'   => 'LocalAsn',
        'localBgpIp' => 'LocalBgpIp',
        'peerAsn'    => 'PeerAsn',
        'peerBgpIp'  => 'PeerBgpIp',
        'status'     => 'Status',
        'tunnelCidr' => 'TunnelCidr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableBgp) {
            $res['EnableBgp'] = $this->enableBgp;
        }

        if (null !== $this->localAsn) {
            $res['LocalAsn'] = $this->localAsn;
        }

        if (null !== $this->localBgpIp) {
            $res['LocalBgpIp'] = $this->localBgpIp;
        }

        if (null !== $this->peerAsn) {
            $res['PeerAsn'] = $this->peerAsn;
        }

        if (null !== $this->peerBgpIp) {
            $res['PeerBgpIp'] = $this->peerBgpIp;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tunnelCidr) {
            $res['TunnelCidr'] = $this->tunnelCidr;
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
        if (isset($map['EnableBgp'])) {
            $model->enableBgp = $map['EnableBgp'];
        }

        if (isset($map['LocalAsn'])) {
            $model->localAsn = $map['LocalAsn'];
        }

        if (isset($map['LocalBgpIp'])) {
            $model->localBgpIp = $map['LocalBgpIp'];
        }

        if (isset($map['PeerAsn'])) {
            $model->peerAsn = $map['PeerAsn'];
        }

        if (isset($map['PeerBgpIp'])) {
            $model->peerBgpIp = $map['PeerBgpIp'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TunnelCidr'])) {
            $model->tunnelCidr = $map['TunnelCidr'];
        }

        return $model;
    }
}
