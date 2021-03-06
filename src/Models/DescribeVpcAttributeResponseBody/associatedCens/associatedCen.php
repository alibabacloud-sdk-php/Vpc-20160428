<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\associatedCens;

use AlibabaCloud\Tea\Model;

class associatedCen extends Model
{
    /**
     * @var int
     */
    public $cenOwnerId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $cenStatus;
    protected $_name = [
        'cenOwnerId' => 'CenOwnerId',
        'cenId'      => 'CenId',
        'cenStatus'  => 'CenStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenStatus) {
            $res['CenStatus'] = $this->cenStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedCen
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenStatus'])) {
            $model->cenStatus = $map['CenStatus'];
        }

        return $model;
    }
}
