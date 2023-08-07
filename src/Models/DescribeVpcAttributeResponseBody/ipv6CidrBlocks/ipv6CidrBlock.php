<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\ipv6CidrBlocks;

use AlibabaCloud\Tea\Model;

class ipv6CidrBlock extends Model
{
    /**
     * @description The IPv6 CIDR block of the VPC.
     *
     * @example 2408:XXXX:0:6a::/56
     *
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @description The type of the IPv6 CIDR block. Valid values:
     *
     * - **BGP** (default): an IPv6 CIDR block provided by Alibaba Cloud over Border Gateway Protocol (BGP)
     * - **ChinaMobile**: an IPv6 CIDR block provided by China Mobile (single ISP)
     * - **ChinaUnicom**: an IPv6 CIDR block provided by China Unicom (single ISP)
     * - **ChinaTelecom**: an IPv6 CIDR block provided by China Telecom (single ISP)
     *
     * >  If your Alibaba Cloud account is allowed to activate single-ISP bandwidth, valid values are: **ChinaTelecom**, **ChinaUnicom**, and **ChinaMobile**.
     * @example BGP
     *
     * @var string
     */
    public $ipv6Isp;
    protected $_name = [
        'ipv6CidrBlock' => 'Ipv6CidrBlock',
        'ipv6Isp'       => 'Ipv6Isp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }
        if (null !== $this->ipv6Isp) {
            $res['Ipv6Isp'] = $this->ipv6Isp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6CidrBlock
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }
        if (isset($map['Ipv6Isp'])) {
            $model->ipv6Isp = $map['Ipv6Isp'];
        }

        return $model;
    }
}
