<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewaysResponseBody\customerGateways;

use AlibabaCloud\Tea\Model;

class customerGateway extends Model
{
    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var int
     */
    public $asn;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $customerGatewayId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'ipAddress'         => 'IpAddress',
        'asn'               => 'Asn',
        'description'       => 'Description',
        'customerGatewayId' => 'CustomerGatewayId',
        'createTime'        => 'CreateTime',
        'name'              => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->asn) {
            $res['Asn'] = $this->asn;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->customerGatewayId) {
            $res['CustomerGatewayId'] = $this->customerGatewayId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerGateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Asn'])) {
            $model->asn = $map['Asn'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CustomerGatewayId'])) {
            $model->customerGatewayId = $map['CustomerGatewayId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
