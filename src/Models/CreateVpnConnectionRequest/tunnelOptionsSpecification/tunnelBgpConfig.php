<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionRequest\tunnelOptionsSpecification;

use AlibabaCloud\Tea\Model;

class tunnelBgpConfig extends Model
{
    /**
     * @description The autonomous system number (ASN) of the tunnel on the Alibaba Cloud side. Valid values: **1** to **4294967295**. Default value: **45104**.
     *
     *
     *
     * > - If you set **EnableTunnelsBgp** to **true**, you must set this parameter.
     * > - We recommend that you use a private ASN to establish BGP connections to Alibaba Cloud. For information about the range of private ASNs, see the relevant documentation.
     * @example 65530
     *
     * @var int
     */
    public $localAsn;

    /**
     * @description The BGP IP address of the tunnel on the Alibaba Cloud side. The address is an IP address that falls within the BGP CIDR block.
     *
     * @example 169.254.10.1
     *
     * @var string
     */
    public $localBgpIp;

    /**
     * @description The BGP CIDR block of the tunnel. The CIDR block must fall within the 169.254.0.0/16 range. The subnet mask of the CIDR block must be 30 bits in length.
     *
     * >  The BGP CIDR block of each tunnel must be unique on a VPN gateway.
     * @example 169.254.10.0/30
     *
     * @var string
     */
    public $tunnelCidr;
    protected $_name = [
        'localAsn'   => 'LocalAsn',
        'localBgpIp' => 'LocalBgpIp',
        'tunnelCidr' => 'TunnelCidr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localAsn) {
            $res['LocalAsn'] = $this->localAsn;
        }
        if (null !== $this->localBgpIp) {
            $res['LocalBgpIp'] = $this->localBgpIp;
        }
        if (null !== $this->tunnelCidr) {
            $res['TunnelCidr'] = $this->tunnelCidr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tunnelBgpConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalAsn'])) {
            $model->localAsn = $map['LocalAsn'];
        }
        if (isset($map['LocalBgpIp'])) {
            $model->localBgpIp = $map['LocalBgpIp'];
        }
        if (isset($map['TunnelCidr'])) {
            $model->tunnelCidr = $map['TunnelCidr'];
        }

        return $model;
    }
}
