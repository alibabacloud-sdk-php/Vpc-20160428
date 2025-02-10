<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcGatewayEndpointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcGatewayEndpointsResponseBody\endpoints\tags;

class endpoints extends Model
{
    /**
     * @var string[]
     */
    public $associatedRouteTables;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $endpointDescription;
    /**
     * @var string
     */
    public $endpointId;
    /**
     * @var string
     */
    public $endpointName;
    /**
     * @var string
     */
    public $endpointStatus;
    /**
     * @var string
     */
    public $policyDocument;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'associatedRouteTables' => 'AssociatedRouteTables',
        'creationTime'          => 'CreationTime',
        'endpointDescription'   => 'EndpointDescription',
        'endpointId'            => 'EndpointId',
        'endpointName'          => 'EndpointName',
        'endpointStatus'        => 'EndpointStatus',
        'policyDocument'        => 'PolicyDocument',
        'resourceGroupId'       => 'ResourceGroupId',
        'serviceName'           => 'ServiceName',
        'tags'                  => 'Tags',
        'vpcId'                 => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->associatedRouteTables)) {
            Model::validateArray($this->associatedRouteTables);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedRouteTables) {
            if (\is_array($this->associatedRouteTables)) {
                $res['AssociatedRouteTables'] = [];
                $n1                           = 0;
                foreach ($this->associatedRouteTables as $item1) {
                    $res['AssociatedRouteTables'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->endpointDescription) {
            $res['EndpointDescription'] = $this->endpointDescription;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }

        if (null !== $this->endpointStatus) {
            $res['EndpointStatus'] = $this->endpointStatus;
        }

        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AssociatedRouteTables'])) {
            if (!empty($map['AssociatedRouteTables'])) {
                $model->associatedRouteTables = [];
                $n1                           = 0;
                foreach ($map['AssociatedRouteTables'] as $item1) {
                    $model->associatedRouteTables[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['EndpointDescription'])) {
            $model->endpointDescription = $map['EndpointDescription'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }

        if (isset($map['EndpointStatus'])) {
            $model->endpointStatus = $map['EndpointStatus'];
        }

        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
