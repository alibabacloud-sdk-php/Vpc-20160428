<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponseBody\physicalConnectionLOAType\PMInfo;
use AlibabaCloud\Tea\Model;

class physicalConnectionLOAType extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $lineLabel;

    /**
     * @var string
     */
    public $lineCode;

    /**
     * @var string
     */
    public $constructionTime;

    /**
     * @var string
     */
    public $SI;

    /**
     * @var string
     */
    public $loaUrl;

    /**
     * @var string
     */
    public $companyLocalizedName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var PMInfo
     */
    public $PMInfo;

    /**
     * @var string
     */
    public $lineType;

    /**
     * @var string
     */
    public $companyName;
    protected $_name = [
        'status'               => 'Status',
        'lineLabel'            => 'LineLabel',
        'lineCode'             => 'LineCode',
        'constructionTime'     => 'ConstructionTime',
        'SI'                   => 'SI',
        'loaUrl'               => 'LoaUrl',
        'companyLocalizedName' => 'CompanyLocalizedName',
        'instanceId'           => 'InstanceId',
        'PMInfo'               => 'PMInfo',
        'lineType'             => 'LineType',
        'companyName'          => 'CompanyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->lineLabel) {
            $res['LineLabel'] = $this->lineLabel;
        }
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }
        if (null !== $this->constructionTime) {
            $res['ConstructionTime'] = $this->constructionTime;
        }
        if (null !== $this->SI) {
            $res['SI'] = $this->SI;
        }
        if (null !== $this->loaUrl) {
            $res['LoaUrl'] = $this->loaUrl;
        }
        if (null !== $this->companyLocalizedName) {
            $res['CompanyLocalizedName'] = $this->companyLocalizedName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->PMInfo) {
            $res['PMInfo'] = null !== $this->PMInfo ? $this->PMInfo->toMap() : null;
        }
        if (null !== $this->lineType) {
            $res['LineType'] = $this->lineType;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return physicalConnectionLOAType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LineLabel'])) {
            $model->lineLabel = $map['LineLabel'];
        }
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }
        if (isset($map['ConstructionTime'])) {
            $model->constructionTime = $map['ConstructionTime'];
        }
        if (isset($map['SI'])) {
            $model->SI = $map['SI'];
        }
        if (isset($map['LoaUrl'])) {
            $model->loaUrl = $map['LoaUrl'];
        }
        if (isset($map['CompanyLocalizedName'])) {
            $model->companyLocalizedName = $map['CompanyLocalizedName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PMInfo'])) {
            $model->PMInfo = PMInfo::fromMap($map['PMInfo']);
        }
        if (isset($map['LineType'])) {
            $model->lineType = $map['LineType'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        return $model;
    }
}
