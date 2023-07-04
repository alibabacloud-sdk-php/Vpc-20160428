<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayConvertStatusResponseBody\convertSteps;
use AlibabaCloud\Tea\Model;

class GetNatGatewayConvertStatusResponseBody extends Model
{
    /**
     * @description The status during the switch.
     *
     * @var convertSteps[]
     */
    public $convertSteps;

    /**
     * @description The type of the NAT gateway. Set the value to **Enhanced**, which specifies an enhanced Internet NAT gateway.
     *
     * @example Enhanced
     *
     * @var string
     */
    public $dstNatType;

    /**
     * @description The ID of the Internet NAT gateway.
     *
     * @example ngw-bp1b0lic8uz4r6vf2****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The ID of the request.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'convertSteps' => 'ConvertSteps',
        'dstNatType'   => 'DstNatType',
        'natGatewayId' => 'NatGatewayId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->convertSteps) {
            $res['ConvertSteps'] = [];
            if (null !== $this->convertSteps && \is_array($this->convertSteps)) {
                $n = 0;
                foreach ($this->convertSteps as $item) {
                    $res['ConvertSteps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dstNatType) {
            $res['DstNatType'] = $this->dstNatType;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNatGatewayConvertStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConvertSteps'])) {
            if (!empty($map['ConvertSteps'])) {
                $model->convertSteps = [];
                $n                   = 0;
                foreach ($map['ConvertSteps'] as $item) {
                    $model->convertSteps[$n++] = null !== $item ? convertSteps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DstNatType'])) {
            $model->dstNatType = $map['DstNatType'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
