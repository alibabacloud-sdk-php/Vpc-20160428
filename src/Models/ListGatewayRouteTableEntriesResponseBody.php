<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListGatewayRouteTableEntriesResponseBody\gatewayRouteEntryModels;

class ListGatewayRouteTableEntriesResponseBody extends Model
{
    /**
     * @var gatewayRouteEntryModels[]
     */
    public $gatewayRouteEntryModels;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'gatewayRouteEntryModels' => 'GatewayRouteEntryModels',
        'nextToken'               => 'NextToken',
        'requestId'               => 'RequestId',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->gatewayRouteEntryModels)) {
            Model::validateArray($this->gatewayRouteEntryModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayRouteEntryModels) {
            if (\is_array($this->gatewayRouteEntryModels)) {
                $res['GatewayRouteEntryModels'] = [];
                $n1                             = 0;
                foreach ($this->gatewayRouteEntryModels as $item1) {
                    $res['GatewayRouteEntryModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['GatewayRouteEntryModels'])) {
            if (!empty($map['GatewayRouteEntryModels'])) {
                $model->gatewayRouteEntryModels = [];
                $n1                             = 0;
                foreach ($map['GatewayRouteEntryModels'] as $item1) {
                    $model->gatewayRouteEntryModels[$n1++] = gatewayRouteEntryModels::fromMap($item1);
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
