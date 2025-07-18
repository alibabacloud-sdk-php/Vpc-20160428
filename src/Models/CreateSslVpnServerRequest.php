<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateSslVpnServerRequest extends Model
{
    /**
     * @description The encryption algorithm that is used by the SSL-VPN connection.
     *
     *   If the client uses Tunnelblick or OpenVPN 2.4.0 or later, the SSL server dynamically negotiates with the client about the encryption algorithm and uses the most secure encryption algorithm that is supported by the SSL server and the client. The encryption algorithm that you specify for the SSL server does not take effect.
     *
     *   If the client uses OpenVPN of a version that is earlier than 2.4.0, the SSL server and the client use the encryption algorithm that you specify for the SSL server. You can specify one of the following encryption algorithms for the SSL server:
     *
     *   **AES-128-CBC** (default)
     *   **AES-192-CBC**
     *   **AES-256-CBC**
     *   **none**
     *
     * @example AES-128-CBC
     *
     * @var string
     */
    public $cipher;

    /**
     * @description The client CIDR block.
     *
     * The CIDR block from which an IP address is allocated to the virtual network interface controller (NIC) of the client, rather than the private CIDR block.
     *
     * If the client accesses the SSL server over an SSL-VPN connection, the VPN gateway assigns an IP address from the specified client CIDR block for the client to access cloud resources.
     *
     * Make sure that the number of IP addresses in the client CIDR block is at least four times the maximum number of SSL-VPN connections supported by the VPN gateway.
     *
     * <details>
     * <summary>Click to view the reason.</summary>
     *
     * For example, if you specify 192.168.0.0/24 as the client CIDR block, the system first divides a subnet CIDR block with a subnet mask of 30 from 192.168.0.0/24, such as 192.168.0.4/30. This subnet provides up to four IP addresses. Then, the system allocates an IP address from 192.168.0.4/30 to the client and uses the other three IP addresses to ensure network communication. In this case, one client consumes four IP addresses. Therefore, to ensure that an IP address is assigned to your client, the number of IP addresses in the client CIDR block must be at least four times the maximum number of SSL-VPN connections supported by the VPN gateway with which the SSL server is associated.
     * </details>
     *
     * <details>
     * <summary>Click to view the CIDR blocks that are not supported.</summary>
     *
     *   100.64.0.0~100.127.255.255
     *   127.0.0.0~127.255.255.255
     *   169.254.0.0~169.254.255.255
     *   224.0.0.0~239.255.255.255
     *   255.0.0.0~255.255.255.255
     * </details>
     * <details>
     * <summary>Click to view the recommended client CIDR blocks for different numbers of SSL-VPN connections.</summary>
     * This parameter is required.
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $clientIpPool;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     *
     * @example 02fb3da4-130e-11e9-8e44-0016e04115b
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable data compression. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $compress;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to enable two-factor authentication. To enable two-factor authentication, you need to specify `IDaaSInstanceId`, `IDaaSRegionId`, and `IDaaSApplicationId`. Valid values:
     *
     *   **true**: enables this feature.
     *   **false** (default): disables this feature.
     *
     * > - If you use two-factor authentication for the first time, you must first complete [authorization](https://ram.console.aliyun.com/role/authorization?request=%7B%22Services%22%3A%5B%7B%22Service%22%3A%22VPN%22%2C%22Roles%22%3A%5B%7B%22RoleName%22%3A%22AliyunVpnAccessingIdaasRole%22%2C%22TemplateId%22%3A%22IdaasRole%22%7D%5D%7D%5D%2C%22ReturnUrl%22%3A%22https%3A%2F%2Fvpc.console.aliyun.com%2Fsslvpn%2Fcn-shanghai%2Fvpn-servers%22%7D).
     * > - When you create an SSL server in the UAE (Dubai) region, we recommend that you associate the SSL server with an IDaaS EIAM 2.0 instance in Singapore to reduce latency.
     * > - IDaaS EIAM 1.0 instances are no longer for purchase. If your Alibaba Cloud account has IDaaS EIAM 1.0 instances, the IDaaS EIAM 1.0 instances can be associated after two-factor authentication is enabled. If your Alibaba Cloud account does not have IDaaS EIAM 1.0 instances, only IDaaS EIAM 2.0 instances can be associated after two-factor authentication is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enableMultiFactorAuth;

    /**
     * @description The ID of the IDaaS application.
     *
     *   If an IDaaS EIAM 2.0 instance is associated, you need to specify an IDaaS application ID.
     *   If an IDaaS EIAM 1.0 instance is associated, you do not need to specify an IDaaS application ID.
     *
     * @example app_my6g4qmvnwxzj2f****
     *
     * @var string
     */
    public $IDaaSApplicationId;

    /**
     * @description The ID of the IDaaS EIAM instance.
     *
     * @example idaas-cn-hangzhou-p****
     *
     * @var string
     */
    public $IDaaSInstanceId;

    /**
     * @description The region ID of the IDaaS EIAM instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $IDaaSRegionId;

    /**
     * @description The local CIDR block.
     *
     * The CIDR block that your client needs to access by using the SSL-VPN connection.
     *
     * This value can be the CIDR block of a VPC, a vSwitch, a data center that is connected to a VPC by using an Express Connect circuit, or an Alibaba Cloud service such as Object Storage Service (OSS).
     *
     * The subnet mask of the specified local CIDR block must be 8 to 32 bits in length. You cannot specify the following CIDR blocks as the local CIDR blocks:
     *
     *   127.0.0.0~127.255.255.255
     *   169.254.0.0~169.254.255.255
     *   224.0.0.0~239.255.255.255
     *   255.0.0.0~255.255.255.255
     *
     * This parameter is required.
     *
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @description The SSL server name.
     *
     * The name must be 1 to 100 characters in length and cannot start with `http://` or `https://`.
     *
     * @example sslvpnname
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The port that is used by the SSL server. Valid values of port numbers: **1** to **65535**. Default value: **1194**.
     *
     * The following ports are not supported: **22**, **2222**, **22222**, **9000**, **9001**, **9002**, **7505**, **80**, **443**, **53**, **68**, **123**, **4510**, **4560**, **500**, and **4500**.
     *
     * @example 1194
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol that is used by the SSL server. Valid values:
     *
     *   **TCP** (default)
     *   **UDP**
     *
     * @example UDP
     *
     * @var string
     */
    public $proto;

    /**
     * @description The region ID of the VPN gateway.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the VPN gateway.
     *
     * This parameter is required.
     *
     * @example vpn-bp1hgim8by0kc9nga****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'cipher' => 'Cipher',
        'clientIpPool' => 'ClientIpPool',
        'clientToken' => 'ClientToken',
        'compress' => 'Compress',
        'dryRun' => 'DryRun',
        'enableMultiFactorAuth' => 'EnableMultiFactorAuth',
        'IDaaSApplicationId' => 'IDaaSApplicationId',
        'IDaaSInstanceId' => 'IDaaSInstanceId',
        'IDaaSRegionId' => 'IDaaSRegionId',
        'localSubnet' => 'LocalSubnet',
        'name' => 'Name',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'port' => 'Port',
        'proto' => 'Proto',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'vpnGatewayId' => 'VpnGatewayId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cipher) {
            $res['Cipher'] = $this->cipher;
        }
        if (null !== $this->clientIpPool) {
            $res['ClientIpPool'] = $this->clientIpPool;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->compress) {
            $res['Compress'] = $this->compress;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->enableMultiFactorAuth) {
            $res['EnableMultiFactorAuth'] = $this->enableMultiFactorAuth;
        }
        if (null !== $this->IDaaSApplicationId) {
            $res['IDaaSApplicationId'] = $this->IDaaSApplicationId;
        }
        if (null !== $this->IDaaSInstanceId) {
            $res['IDaaSInstanceId'] = $this->IDaaSInstanceId;
        }
        if (null !== $this->IDaaSRegionId) {
            $res['IDaaSRegionId'] = $this->IDaaSRegionId;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSslVpnServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cipher'])) {
            $model->cipher = $map['Cipher'];
        }
        if (isset($map['ClientIpPool'])) {
            $model->clientIpPool = $map['ClientIpPool'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Compress'])) {
            $model->compress = $map['Compress'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EnableMultiFactorAuth'])) {
            $model->enableMultiFactorAuth = $map['EnableMultiFactorAuth'];
        }
        if (isset($map['IDaaSApplicationId'])) {
            $model->IDaaSApplicationId = $map['IDaaSApplicationId'];
        }
        if (isset($map['IDaaSInstanceId'])) {
            $model->IDaaSInstanceId = $map['IDaaSInstanceId'];
        }
        if (isset($map['IDaaSRegionId'])) {
            $model->IDaaSRegionId = $map['IDaaSRegionId'];
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
