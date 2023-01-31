<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListsResponseBody\ipv6TranslatorAcls;

use AlibabaCloud\Tea\Model;

class IPv6TranslatorAcl extends Model
{
    /**
     * @example ipv6transacl-bp1de2xxxx
     *
     * @var string
     */
    public $aclId;

    /**
     * @example acl1
     *
     * @var string
     */
    public $aclName;
    protected $_name = [
        'aclId'   => 'AclId',
        'aclName' => 'AclName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclName) {
            $res['AclName'] = $this->aclName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IPv6TranslatorAcl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclName'])) {
            $model->aclName = $map['AclName'];
        }

        return $model;
    }
}
