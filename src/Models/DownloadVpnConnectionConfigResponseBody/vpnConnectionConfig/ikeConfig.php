<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig;

use AlibabaCloud\Tea\Model;

class ikeConfig extends Model
{
    /**
     * @description The IKE authentication algorithm. Valid values: **sha1** and **MD5**.
     *
     * @example sha1
     *
     * @var string
     */
    public $ikeAuthAlg;

    /**
     * @description The IKE encryption algorithm.
     *
     * @example aes
     *
     * @var string
     */
    public $ikeEncAlg;

    /**
     * @description The IKE lifetime. Unit: seconds.
     *
     * @example 86400
     *
     * @var int
     */
    public $ikeLifetime;

    /**
     * @description The IKE mode. Valid values: **main** and **aggressive**. The **main** mode offers higher security. If NAT traversal is enabled, we recommend that you use the **aggressive** mode.
     *
     * @example main
     *
     * @var string
     */
    public $ikeMode;

    /**
     * @description The DH group.
     *
     * @example group2
     *
     * @var string
     */
    public $ikePfs;

    /**
     * @description The IKE version.
     *
     * @example ikev1
     *
     * @var string
     */
    public $ikeVersion;

    /**
     * @description The local ID. The default value is the IP address of the VPN gateway. You can specify the value as an IP address or in the FQDN format.
     *
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $localId;

    /**
     * @description The pre-shared key.
     *
     * @example pgw6dy7d1i8i****
     *
     * @var string
     */
    public $psk;

    /**
     * @description The peer ID. The default value is the IP address of the customer gateway. You can specify the value as an IP address or in the fully qualified domain name (FQDN) format.
     *
     * @example 139.196.XX.XX
     *
     * @var string
     */
    public $remoteId;
    protected $_name = [
        'ikeAuthAlg'  => 'IkeAuthAlg',
        'ikeEncAlg'   => 'IkeEncAlg',
        'ikeLifetime' => 'IkeLifetime',
        'ikeMode'     => 'IkeMode',
        'ikePfs'      => 'IkePfs',
        'ikeVersion'  => 'IkeVersion',
        'localId'     => 'LocalId',
        'psk'         => 'Psk',
        'remoteId'    => 'RemoteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ikeAuthAlg) {
            $res['IkeAuthAlg'] = $this->ikeAuthAlg;
        }
        if (null !== $this->ikeEncAlg) {
            $res['IkeEncAlg'] = $this->ikeEncAlg;
        }
        if (null !== $this->ikeLifetime) {
            $res['IkeLifetime'] = $this->ikeLifetime;
        }
        if (null !== $this->ikeMode) {
            $res['IkeMode'] = $this->ikeMode;
        }
        if (null !== $this->ikePfs) {
            $res['IkePfs'] = $this->ikePfs;
        }
        if (null !== $this->ikeVersion) {
            $res['IkeVersion'] = $this->ikeVersion;
        }
        if (null !== $this->localId) {
            $res['LocalId'] = $this->localId;
        }
        if (null !== $this->psk) {
            $res['Psk'] = $this->psk;
        }
        if (null !== $this->remoteId) {
            $res['RemoteId'] = $this->remoteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ikeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IkeAuthAlg'])) {
            $model->ikeAuthAlg = $map['IkeAuthAlg'];
        }
        if (isset($map['IkeEncAlg'])) {
            $model->ikeEncAlg = $map['IkeEncAlg'];
        }
        if (isset($map['IkeLifetime'])) {
            $model->ikeLifetime = $map['IkeLifetime'];
        }
        if (isset($map['IkeMode'])) {
            $model->ikeMode = $map['IkeMode'];
        }
        if (isset($map['IkePfs'])) {
            $model->ikePfs = $map['IkePfs'];
        }
        if (isset($map['IkeVersion'])) {
            $model->ikeVersion = $map['IkeVersion'];
        }
        if (isset($map['LocalId'])) {
            $model->localId = $map['LocalId'];
        }
        if (isset($map['Psk'])) {
            $model->psk = $map['Psk'];
        }
        if (isset($map['RemoteId'])) {
            $model->remoteId = $map['RemoteId'];
        }

        return $model;
    }
}
