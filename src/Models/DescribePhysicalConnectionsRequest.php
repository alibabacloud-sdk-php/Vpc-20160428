<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsRequest\filter;
use AlibabaCloud\Tea\Model;

class DescribePhysicalConnectionsRequest extends Model
{
    /**
     * @description description: The ID of the region where the leased line is deployed. You can obtain the region ID by calling the [DescribeRegions](~~36063~~);
     *
     * @var string
     */
    public $regionId;

    /**
     * @description description: Optional. The page number of the physical connection list. Default value: 1.;
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description description: Optional. The number of rows per page. Maximum value: 50. Default value: 10.;
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @description description: Optional. Indicates whether to return invalid orders.;
     *
     * @var bool
     */
    public $includeReservationData;

    /**
     * @description description: Optional. It is used to guarantee the idempotence of requests. This parameter is generated by clients. It must be unique for each request and must not exceed 64 ASCII characters in length.;
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'regionId'               => 'RegionId',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'filter'                 => 'Filter',
        'includeReservationData' => 'IncludeReservationData',
        'clientToken'            => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->includeReservationData) {
            $res['IncludeReservationData'] = $this->includeReservationData;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePhysicalConnectionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n             = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IncludeReservationData'])) {
            $model->includeReservationData = $map['IncludeReservationData'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
