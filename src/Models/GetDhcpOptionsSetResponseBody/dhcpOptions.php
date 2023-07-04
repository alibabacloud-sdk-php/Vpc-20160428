<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponseBody;

use AlibabaCloud\Tea\Model;

class dhcpOptions extends Model
{
    /**
     * @description The status of the VPC that is associated with the DHCP options set. Valid values:
     *
     *   **InUse**: in use
     *   **Pending**: being configured
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The information about the virtual private cloud (VPC) that is associated with the DHCP options set.
     *
     * @example 192.XX.XX.123
     *
     * @var string
     */
    public $domainNameServers;

    /**
     * @example 3650d
     *
     * @var string
     */
    public $ipv6LeaseTime;

    /**
     * @description The ID of the VPC that is associated with the DHCP options set.
     *
     * @example 3650d
     *
     * @var string
     */
    public $leaseTime;
    protected $_name = [
        'domainName'        => 'DomainName',
        'domainNameServers' => 'DomainNameServers',
        'ipv6LeaseTime'     => 'Ipv6LeaseTime',
        'leaseTime'         => 'LeaseTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainNameServers) {
            $res['DomainNameServers'] = $this->domainNameServers;
        }
        if (null !== $this->ipv6LeaseTime) {
            $res['Ipv6LeaseTime'] = $this->ipv6LeaseTime;
        }
        if (null !== $this->leaseTime) {
            $res['LeaseTime'] = $this->leaseTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dhcpOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainNameServers'])) {
            $model->domainNameServers = $map['DomainNameServers'];
        }
        if (isset($map['Ipv6LeaseTime'])) {
            $model->ipv6LeaseTime = $map['Ipv6LeaseTime'];
        }
        if (isset($map['LeaseTime'])) {
            $model->leaseTime = $map['LeaseTime'];
        }

        return $model;
    }
}
