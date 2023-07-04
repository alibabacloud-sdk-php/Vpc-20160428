<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListGatewayRouteTableEntriesResponseBody\gatewayRouteEntryModels;
use AlibabaCloud\Tea\Model;

class ListGatewayRouteTableEntriesResponseBody extends Model
{
    /**
     * @description The ID of the next hop.
     *
     * @var gatewayRouteEntryModels[]
     */
    public $gatewayRouteEntryModels;

    /**
     * @description The total number of entries returned.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The details of the routes in the gateway route table.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the route. Valid values:
     *
     *   **Pending**
     *   **Available**
     *   **Modifying**
     *
     * @example 1
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayRouteEntryModels) {
            $res['GatewayRouteEntryModels'] = [];
            if (null !== $this->gatewayRouteEntryModels && \is_array($this->gatewayRouteEntryModels)) {
                $n = 0;
                foreach ($this->gatewayRouteEntryModels as $item) {
                    $res['GatewayRouteEntryModels'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListGatewayRouteTableEntriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayRouteEntryModels'])) {
            if (!empty($map['GatewayRouteEntryModels'])) {
                $model->gatewayRouteEntryModels = [];
                $n                              = 0;
                foreach ($map['GatewayRouteEntryModels'] as $item) {
                    $model->gatewayRouteEntryModels[$n++] = null !== $item ? gatewayRouteEntryModels::fromMap($item) : $item;
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
