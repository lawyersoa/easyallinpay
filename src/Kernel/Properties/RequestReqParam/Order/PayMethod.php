<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\RequestReqParam\Order;

use EasyAllInPay\Kernel\Properties\RequestReqParam\RequestReqParam;

class PayMethod extends RequestReqParam
{

}

class H5CashierVSP
{
    const KEY = 'H5_CASHIER_VSP'; //收银宝H5收银

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * @var string 渠道拓展参数
     */
    private $extendParams;

    /**
     * @var string 是否限制贷记卡
     */
    private $limitPay;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return H5CashierVSP
     */
    public function setAmount(int $amount): ?H5CashierVSP
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 获取渠道拓展参数
     *
     * @return ?string
     */
    public function getExtendParams(): ?string
    {
        return $this->extendParams;
    }

    /**
     * 设置渠道拓展参数
     *
     * @param ?string $extendParams 渠道扩展参数
     * @return H5CashierVSP
     */
    public function setExtendParams(string $extendParams): ?H5CashierVSP
    {
        $this->extendParams = $extendParams;
        return $this;
    }

    /**
     * 获取是否限制贷记卡
     *
     * @return ?string
     */
    public function getLimitPay(): ?string
    {
        return $this->limitPay;
    }

    /**
     * 设置是否限制贷记卡
     *
     * @param string $limitPay 是否限制贷记卡
     * @return ?H5CashierVSP
     */
    public function setLimitPay(string $limitPay): ?H5CashierVSP
    {
        $this->limitPay = $limitPay;
        return $this;
    }
}

class H5CashierVSPOrg
{
    const KEY = 'H5_CASHIER_VSP_ORG'; //收银宝H5收银台_集团

    /**
     * @var string 收银宝子商户号
     */
    private $vspCusId;

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * @var string 渠道拓展参数
     */
    private $extendParams;

    /**
     * @var string 是否限制贷记卡
     */
    private $limitPay;

    /**
     * 获取收银宝子商户号
     *
     * @return ?string
     */
    public function getVspCusId(): ?string
    {
        return $this->vspCusId;
    }

    /**
     * 设置收银宝子商户号
     *
     * @param string $vspCusId 收银宝子商户号
     * @return ?H5CashierVSPOrg
     */
    public function setVspCusId(string $vspCusId): ?H5CashierVSPOrg
    {
        $this->vspCusId = $vspCusId;
        return $this;
    }

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return H5CashierVSPOrg
     */
    public function setAmount(int $amount): ?H5CashierVSPOrg
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 获取渠道拓展参数
     *
     * @return ?string
     */
    public function getExtendParams(): ?string
    {
        return $this->extendParams;
    }

    /**
     * 设置渠道拓展参数
     *
     * @param ?string $extendParams 渠道扩展参数
     * @return H5CashierVSPOrg
     */
    public function setExtendParams(string $extendParams): ?H5CashierVSPOrg
    {
        $this->extendParams = $extendParams;
        return $this;
    }

    /**
     * 获取是否限制贷记卡
     *
     * @return ?string
     */
    public function getLimitPay(): ?string
    {
        return $this->limitPay;
    }

    /**
     * 设置是否限制贷记卡
     *
     * @param string $limitPay 是否限制贷记卡
     * @return ?H5CashierVSPOrg
     */
    public function setLimitPay(string $limitPay): ?H5CashierVSPOrg
    {
        $this->limitPay = $limitPay;
        return $this;
    }
}

class GatewayVSP
{
    const KEY = 'GATEWAY_VSP'; //收银宝网关支付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * @var string 支付银行
     */
    private $gateId;

    /**
     * @var string 交易类型
     */
    private $payType;

    /**
     * @var string 是否限制贷记卡
     */
    private $limitPay;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return GatewayVSP
     */
    public function setAmount(int $amount): ?GatewayVSP
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 获取支付银行
     *
     * @return ?string
     */
    public function getGateId(): ?string
    {
        return $this->gateId;
    }

    /**
     * 设置支付银行
     *
     * @param string $gateId 支付银行
     * @return ?GatewayVSP
     */
    public function setGateId(string $gateId): ?GatewayVSP
    {
        $this->gateId = $gateId;
        return $this;
    }

    /**
     * 获取交易类型
     *
     * @return ?string
     */
    public function getPayType(): ?string
    {
        return $this->payType;
    }

    /**
     * 设置交易类型
     *
     * @param string $payType 交易类型
     * @return ?GatewayVSP
     */
    public function setPayType(string $payType): ?GatewayVSP
    {
        $this->payType = $payType;
        return $this;
    }

    /**
     * 获取是否限制贷记卡
     *
     * @return ?string
     */
    public function getLimitPay(): ?string
    {
        return $this->limitPay;
    }

    /**
     * 设置是否限制贷记卡
     *
     * @param string $limitPay 是否限制贷记卡
     * @return ?GatewayVSP
     */
    public function setLimitPay(string $limitPay): ?GatewayVSP
    {
        $this->limitPay = $limitPay;
        return $this;
    }
}

class GatewayVSPOrg
{
    const KEY = 'GATEWAY_VSP_ORG'; //收银宝网关支付_集团

    /**
     * @var string 收银宝子商户号
     */
    private $vspCusId;

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * @var string 支付银行
     */
    private $gateId;

    /**
     * @var string 交易类型
     */
    private $payType;

    /**
     * @var string 是否限制贷记卡
     */
    private $limitPay;

    /**
     * 获取收银宝子商户号
     *
     * @return ?string
     */
    public function getVspCusId(): ?string
    {
        return $this->vspCusId;
    }

    /**
     * 设置收银宝子商户号
     *
     * @param string $vspCusId 收银宝子商户号
     * @return ?GatewayVSPOrg
     */
    public function setVspCusId(string $vspCusId): ?GatewayVSPOrg
    {
        $this->vspCusId = $vspCusId;
        return $this;
    }

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return GatewayVSPOrg
     */
    public function setAmount(int $amount): ?GatewayVSPOrg
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 获取支付银行
     *
     * @return ?string
     */
    public function getGateId(): ?string
    {
        return $this->gateId;
    }

    /**
     * 设置支付银行
     *
     * @param string $gateId 支付银行
     * @return ?GatewayVSPOrg
     */
    public function setGateId(string $gateId): ?GatewayVSPOrg
    {
        $this->gateId = $gateId;
        return $this;
    }

    /**
     * 获取交易类型
     *
     * @return ?string
     */
    public function getPayType(): ?string
    {
        return $this->payType;
    }

    /**
     * 设置交易类型
     *
     * @param string $payType 交易类型
     * @return ?GatewayVSPOrg
     */
    public function setPayType(string $payType): ?GatewayVSPOrg
    {
        $this->payType = $payType;
        return $this;
    }

    /**
     * 获取是否限制贷记卡
     *
     * @return ?string
     */
    public function getLimitPay(): ?string
    {
        return $this->limitPay;
    }

    /**
     * 设置是否限制贷记卡
     *
     * @param string $limitPay 是否限制贷记卡
     * @return ?GatewayVSPOrg
     */
    public function setLimitPay(string $limitPay): ?GatewayVSPOrg
    {
        $this->limitPay = $limitPay;
        return $this;
    }
}

class RealNamePay
{
    const KEY = 'REALNAMEPAY'; //实名付（单笔）

    /**
     * @var string 银行卡号
     */
    private $bankCardNo;

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取银行卡号
     *
     * @return ?string
     */
    public function getBankCardNo(): ?string
    {
        return $this->bankCardNo;
    }

    /**
     * 设置银行卡号
     *
     * @param string $bankCardNo 银行卡号
     * @return ?RealNamePay
     */
    public function setBankCardNo(string $bankCardNo): ?RealNamePay
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return RealNamePay
     */
    public function setAmount(int $amount): ?RealNamePay
    {
        $this->amount = $amount;
        return $this;
    }
}

class RealNamePayBatch
{
    const KEY = 'REALNAMEPAY_BATCH'; //实名付（批量）

    /**
     * @var string 银行卡号
     */
    private $bankCardNo;

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取银行卡号
     *
     * @return ?string
     */
    public function getBankCardNo(): ?string
    {
        return $this->bankCardNo;
    }

    /**
     * 设置银行卡号
     *
     * @param string $bankCardNo 银行卡号
     * @return ?RealNamePayBatch
     */
    public function setBankCardNo(string $bankCardNo): ?RealNamePayBatch
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return RealNamePayBatch
     */
    public function setAmount(int $amount): ?RealNamePayBatch
    {
        $this->amount = $amount;
        return $this;
    }
}

class QuickPayTLT
{
    const KEY = 'QUICKPAY_TLT'; //通联通协议支付

    /**
     * @var string 银行卡号
     */
    private $bankCardNo;

    /**
     * @var string 有效期
     */
    private $validate;

    /**
     * @var string CVV2
     */
    private $cvv2;

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取银行卡号
     *
     * @return ?string
     */
    public function getBankCardNo(): ?string
    {
        return $this->bankCardNo;
    }

    /**
     * 设置银行卡号
     *
     * @param string $bankCardNo 银行卡号
     * @return ?QuickPayTLT
     */
    public function setBankCardNo(string $bankCardNo): ?QuickPayTLT
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return QuickPayTLT
     */
    public function setAmount(int $amount): ?QuickPayTLT
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidate(): string
    {
        return $this->validate;
    }

    /**
     * 设置有效期
     *
     * @param string $validate 有效期
     * @return ?QuickPayTLT
     */
    public function setValidate(string $validate): ?QuickPayTLT
    {
        $this->validate = $validate;
        return $this;
    }

    /**
     * 获取CVV2
     *
     * @return ?string
     */
    public function getCvv2(): ?string
    {
        return $this->cvv2;
    }

    /**
     * 设置CVV2
     *
     * @param string $cvv2 CVV2
     * @return ?QuickPayTLT
     */
    public function setCvv2(string $cvv2): ?QuickPayTLT
    {
        $this->cvv2 = $cvv2;
        return $this;
    }
}

class QuickPayVSP
{
    const KEY = 'QUICKPAY_VSP'; //收银宝快捷支付

    /**
     * @var string 银行卡号
     */
    private $bankCardNo;

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取银行卡号
     *
     * @return ?string
     */
    public function getBankCardNo(): ?string
    {
        return $this->bankCardNo;
    }

    /**
     * 设置银行卡号
     *
     * @param string $bankCardNo 银行卡号
     * @return ?QuickPayVSP
     */
    public function setBankCardNo(string $bankCardNo): ?QuickPayVSP
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return QuickPayVSP
     */
    public function setAmount(int $amount): ?QuickPayVSP
    {
        $this->amount = $amount;
        return $this;
    }
}

class WechatPayMiniProgram
{
    const KEY = 'WECHATPAY_MINIPROGRAM'; //微信小程序支付（收银宝）

    /**
     * @var string 是否限制贷记卡
     */
    private $limitPay;

    /**
     * @var string 微信小程序APP_ID
     */
    private $subAppId;

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * @var string 渠道拓展参数
     */
    private $extendParams;

    /**
     * @var string 微信小程序支付openid
     */
    private $acct;

    /**
     * @var string 订单支付标识
     */
    private $goodsTag;

    /**
     * @var array 优惠信息
     */
    private $benefitDetail;

    /**
     * @var string 渠道门店号
     */
    private $channelStoreId;

    /**
     * @var string 门店号
     */
    private $subBranch;

    /**
     * 获取是否限制贷记卡
     *
     * @return ?string
     */
    public function getLimitPay(): ?string
    {
        return $this->limitPay;
    }

    /**
     * 设置是否限制贷记卡
     *
     * @param string $limitPay 是否限制贷记卡
     * @return ?WechatPayMiniProgram
     */
    public function setLimitPay(string $limitPay): ?WechatPayMiniProgram
    {
        $this->limitPay = $limitPay;
        return $this;
    }

    /**
     * 获取微信小程序支付APP_ID
     *
     * @return ?string
     */
    public function getSubAppId(): ?string
    {
        return $this->subAppId;
    }

    /**
     * 设置微信小程序支付APP_ID
     *
     * @param string $subAppId 微信小程序支付APP_ID
     * @return ?WechatPayMiniProgram
     */
    public function setSubAppId(string $subAppId): ?WechatPayMiniProgram
    {
        $this->subAppId = $subAppId;
        return $this;
    }

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WechatPayMiniProgram
     */
    public function setAmount(int $amount): ?WechatPayMiniProgram
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 获取渠道拓展参数
     *
     * @return ?string
     */
    public function getExtendParams(): ?string
    {
        return $this->extendParams;
    }

    /**
     * 设置渠道拓展参数
     *
     * @param string $extendParams 渠道拓展参数
     * @return ?WechatPayMiniProgram
     */
    public function setExtendParams(string $extendParams): ?WechatPayMiniProgram
    {
        $this->extendParams = $extendParams;
        return $this;
    }

    /**
     * 获取微信小程序支付openid
     *
     * @return ?string
     */
    public function getAcct(): ?string
    {
        return $this->acct;
    }

    /**
     * 设置微信小程序支付openid
     *
     * @param string $acct 微信小程序支付openid
     * @return ?WechatPayMiniProgram
     */
    public function setAcct(string $acct): ?WechatPayMiniProgram
    {
        $this->acct = $acct;
        return $this;
    }

    /**
     * 获取订单支付标识
     *
     * @return ?string
     */
    public function getGoodsTag(): ?string
    {
        return $this->goodsTag;
    }

    /**
     * 设置订单支付标识
     *
     * @param string $goodsTag 订单支付标识
     * @return ?WechatPayMiniProgram
     */
    public function setGoodsTag(string $goodsTag): ?WechatPayMiniProgram
    {
        $this->goodsTag = $goodsTag;
        return $this;
    }

    /**
     * 获取优惠信息
     *
     * @return ?array
     */
    public function getBenefitDetail(): ?array
    {
        return $this->benefitDetail;
    }

    /**
     * 设置优惠信息
     *
     * @param array $benefitDetail 优惠信息
     * @return ?WechatPayMiniProgram
     */
    public function setBenefitDetail(array $benefitDetail): ?WechatPayMiniProgram
    {
        $this->benefitDetail = $benefitDetail;
        return $this;
    }

    /**
     * 获取渠道门店号
     *
     * @return ?string
     */
    public function getChannelStoreId(): ?string
    {
        return $this->channelStoreId;
    }

    /**
     * 设置渠道门店号
     *
     * @param string $channelStoreId 渠道门店号
     * @return ?WechatPayMiniProgram
     */
    public function setChannelStoreId(string $channelStoreId): ?WechatPayMiniProgram
    {
        $this->channelStoreId = $channelStoreId;
        return $this;
    }

    /**
     * 获取门店号
     *
     * @return ?string
     */
    public function getSubBranch(): ?string
    {
        return $this->subBranch;
    }

    /**
     * 设置门店号
     *
     * @param string $subBranch 门店号
     * @return ?WechatPayMiniProgram
     */
    public function setSubBranch(string $subBranch): ?WechatPayMiniProgram
    {
        $this->subBranch = $subBranch;
        return $this;
    }
}

class WechatPayMiniProgramOrg
{
    const KEY = 'WECHATPAY_MINIPROGRAM_ORG'; //微信小程序支付_集团（收银宝）

    /**
     * @var string 是否限制贷记卡
     */
    private $limitPay;

    /**
     * @var string 微信小程序APP_ID
     */
    private $subAppId;

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * @var string 渠道拓展参数
     */
    private $extendParams;

    /**
     * @var string 微信小程序支付openid
     */
    private $acct;

    /**
     * @var string 订单支付标识
     */
    private $goodsTag;

    /**
     * @var array 优惠信息
     */
    private $benefitDetail;

    /**
     * @var string 渠道门店号
     */
    private $channelStoreId;

    /**
     * @var string 门店号
     */
    private $subBranch;

    /**
     * 获取是否限制贷记卡
     *
     * @return ?string
     */
    public function getLimitPay(): ?string
    {
        return $this->limitPay;
    }

    /**
     * 设置是否限制贷记卡
     *
     * @param string $limitPay 是否限制贷记卡
     * @return ?WechatPayMiniProgramOrg
     */
    public function setLimitPay(string $limitPay): ?WechatPayMiniProgramOrg
    {
        $this->limitPay = $limitPay;
        return $this;
    }

    /**
     * 获取微信小程序支付APP_ID
     *
     * @return ?string
     */
    public function getSubAppId(): ?string
    {
        return $this->subAppId;
    }

    /**
     * 设置微信小程序支付APP_ID
     *
     * @param string $subAppId 微信小程序支付APP_ID
     * @return ?WechatPayMiniProgramOrg
     */
    public function setSubAppId(string $subAppId): ?WechatPayMiniProgramOrg
    {
        $this->subAppId = $subAppId;
        return $this;
    }

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WechatPayMiniProgramOrg
     */
    public function setAmount(int $amount): ?WechatPayMiniProgramOrg
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 获取渠道拓展参数
     *
     * @return ?string
     */
    public function getExtendParams(): ?string
    {
        return $this->extendParams;
    }

    /**
     * 设置渠道拓展参数
     *
     * @param string $extendParams 渠道拓展参数
     * @return ?WechatPayMiniProgramOrg
     */
    public function setExtendParams(string $extendParams): ?WechatPayMiniProgramOrg
    {
        $this->extendParams = $extendParams;
        return $this;
    }

    /**
     * 获取微信小程序支付openid
     *
     * @return ?string
     */
    public function getAcct(): ?string
    {
        return $this->acct;
    }

    /**
     * 设置微信小程序支付openid
     *
     * @param string $acct 微信小程序支付openid
     * @return ?WechatPayMiniProgramOrg
     */
    public function setAcct(string $acct): ?WechatPayMiniProgramOrg
    {
        $this->acct = $acct;
        return $this;
    }

    /**
     * 获取订单支付标识
     *
     * @return ?string
     */
    public function getGoodsTag(): ?string
    {
        return $this->goodsTag;
    }

    /**
     * 设置订单支付标识
     *
     * @param string $goodsTag 订单支付标识
     * @return ?WechatPayMiniProgramOrg
     */
    public function setGoodsTag(string $goodsTag): ?WechatPayMiniProgramOrg
    {
        $this->goodsTag = $goodsTag;
        return $this;
    }

    /**
     * 获取优惠信息
     *
     * @return ?array
     */
    public function getBenefitDetail(): ?array
    {
        return $this->benefitDetail;
    }

    /**
     * 设置优惠信息
     *
     * @param array $benefitDetail 优惠信息
     * @return ?WechatPayMiniProgramOrg
     */
    public function setBenefitDetail(array $benefitDetail): ?WechatPayMiniProgramOrg
    {
        $this->benefitDetail = $benefitDetail;
        return $this;
    }

    /**
     * 获取渠道门店号
     *
     * @return ?string
     */
    public function getChannelStoreId(): ?string
    {
        return $this->channelStoreId;
    }

    /**
     * 设置渠道门店号
     *
     * @param string $channelStoreId 渠道门店号
     * @return ?WechatPayMiniProgramOrg
     */
    public function setChannelStoreId(string $channelStoreId): ?WechatPayMiniProgramOrg
    {
        $this->channelStoreId = $channelStoreId;
        return $this;
    }

    /**
     * 获取门店号
     *
     * @return ?string
     */
    public function getSubBranch(): ?string
    {
        return $this->subBranch;
    }

    /**
     * 设置门店号
     *
     * @param string $subBranch 门店号
     * @return ?WechatPayMiniProgramOrg
     */
    public function setSubBranch(string $subBranch): ?WechatPayMiniProgramOrg
    {
        $this->subBranch = $subBranch;
        return $this;
    }
}

class WechatPayMiniProgramOpen
{
    const KEY = 'WECHATPAY_MINIPROGRAM_OPEN'; //微信原生小程序支付

    /**
     * @var string 微信端应用ID
     */
    private $wxAppId;

    /**
     * @var string 微信商户ID
     */
    private $wxMerchantId;

    /**
     * @var string 是否限制贷记卡
     */
    private $limitPay;

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * @var string 微信小程序支付openid
     */
    private $acct;

    /**
     * @var string 用户下单及调起支付的终端IP
     */
    private $cusIp;

    /**
     * @var string 开发票入口开放标识
     */
    private $receipt;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WechatPayMiniProgramOpen
     */
    public function setAmount(int $amount): ?WechatPayMiniProgramOpen
    {
        $this->amount = $amount;
        return $this;
    }
}

class WechatPayAppOpen
{
    const KEY = 'WECHATPAY_APP_OPEN'; //微信原生APP支付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WechatPayAppOpen
     */
    public function setAmount(int $amount): ?WechatPayAppOpen
    {
        $this->amount = $amount;
        return $this;
    }
}

class WechatPayH5Open
{
    const KEY = 'WECHATPAY_H5_OPEN'; //微信原生H5支付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WechatPayH5Open
     */
    public function setAmount(int $amount): ?WechatPayH5Open
    {
        $this->amount = $amount;
        return $this;
    }
}

class CodePayVSP
{
    const KEY = 'CODEPAY_VSP'; //收银宝刷卡支付（被扫）——支持微信、支付宝、银联、手机QQ

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return CodePayVSP
     */
    public function setAmount(int $amount): ?CodePayVSP
    {
        $this->amount = $amount;
        return $this;
    }
}

class CodePayVSPOrg
{
    const KEY = 'CODEPAY_VSP_ORG'; //收银宝刷卡支付（被扫）_集团——支持微信、支付宝、银联、手机QQ

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return CodePayVSPOrg
     */
    public function setAmount(int $amount): ?CodePayVSPOrg
    {
        $this->amount = $amount;
        return $this;
    }
}

class WechatScan
{
    const KEY = 'SCAN_WEIXIN'; //微信扫码支付(正扫)——收银宝

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WechatScan
     */
    public function setAmount(int $amount): ?WechatScan
    {
        $this->amount = $amount;
        return $this;
    }
}

class WechatScanOrg
{
    const KEY = 'SCAN_WEIXIN_ORG'; //微信扫码支付(正扫)_集团——收银宝

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WechatScanOrg
     */
    public function setAmount(int $amount): ?WechatScanOrg
    {
        $this->amount = $amount;
        return $this;
    }
}

class WechatPayScanOpen
{
    const KEY = 'WECHATPAY_SCAN_OPEN'; //微信原生正扫支付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WechatPayScanOpen
     */
    public function setAmount(int $amount): ?WechatPayScanOpen
    {
        $this->amount = $amount;
        return $this;
    }
}

class WechatPayMiniProgramOpenService
{
    const KEY = 'WECHATPAY_MINIPROGRAM_OPEN_SERVICE'; //微信原生小程序支付（服务商）

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WechatPayMiniProgramOpenService
     */
    public function setAmount(int $amount): ?WechatPayMiniProgramOpenService
    {
        $this->amount = $amount;
        return $this;
    }
}

class AlipayScan
{
    const KEY = 'SCAN_ALIPAY'; //支付宝扫码支付(正扫)——收银宝

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return AlipayScan
     */
    public function setAmount(int $amount): ?AlipayScan
    {
        $this->amount = $amount;
        return $this;
    }
}

class AlipayScanOrg
{
    const KEY = 'SCAN_ALIPAY_ORG'; //支付宝扫码支付(正扫)_集团——收银宝

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return AlipayScanOrg
     */
    public function setAmount(int $amount): ?AlipayScanOrg
    {
        $this->amount = $amount;
        return $this;
    }
}

class UnionPayScan
{
    const KEY = 'SCAN_UNIONPAY'; //银联扫码支付(正扫)——收银宝

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return UnionPayScan
     */
    public function setAmount(int $amount): ?UnionPayScan
    {
        $this->amount = $amount;
        return $this;
    }
}

class UnionPayScanOrg
{
    const KEY = 'SCAN_UNIONPAY_ORG'; //银联扫码支付(正扫)_集团——收银宝

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return UnionPayScanOrg
     */
    public function setAmount(int $amount): ?UnionPayScanOrg
    {
        $this->amount = $amount;
        return $this;
    }
}

class WechatPublic
{
    const KEY = 'WECHAT_PUBLIC'; //微信JS支付（公众号）——收银宝

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WechatPublic
     */
    public function setAmount(int $amount): ?WechatPublic
    {
        $this->amount = $amount;
        return $this;
    }
}

class WechatPublicOrg
{
    const KEY = 'WECHAT_PUBLIC_ORG'; //微信JS支付（公众号）_集团——收银宝

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WechatPublicOrg
     */
    public function setAmount(int $amount): ?WechatPublicOrg
    {
        $this->amount = $amount;
        return $this;
    }
}

class WechatPayPublic
{
    const KEY = 'WECHAT_PUBLIC_ORG'; //微信JS支付（公众号）_集团——收银宝

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WechatPayPublic
     */
    public function setAmount(int $amount): ?WechatPayPublic
    {
        $this->amount = $amount;
        return $this;
    }
}

class WechatPayPublicOpen
{
    const KEY = 'WECHATPAY_PUBLIC_OPEN'; //微信原生JS支付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WechatPayPublicOpen
     */
    public function setAmount(int $amount): ?WechatPayPublicOpen
    {
        $this->amount = $amount;
        return $this;
    }
}

class AlipayService
{
    const KEY = 'ALIPAY_SERVICE'; //支付宝JS支付（生活号）——收银宝

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return AlipayService
     */
    public function setAmount(int $amount): ?AlipayService
    {
        $this->amount = $amount;
        return $this;
    }
}

class AlipayServiceOrg
{
    const KEY = 'ALIPAY_SERVICE_ORG'; //支付宝JS支付_集团——收银宝

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return AlipayServiceOrg
     */
    public function setAmount(int $amount): ?AlipayServiceOrg
    {
        $this->amount = $amount;
        return $this;
    }
}

class AlipayServiceOpen
{
    const KEY = 'ALIPAY_SERVICE_OPEN'; //支付宝原生JS支付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return AlipayServiceOpen
     */
    public function setAmount(int $amount): ?AlipayServiceOpen
    {
        $this->amount = $amount;
        return $this;
    }
}

class QQWallet
{
    const KEY = 'QQ_WALLET'; //QQ钱包JS支付——收银宝

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return QQWallet
     */
    public function setAmount(int $amount): ?QQWallet
    {
        $this->amount = $amount;
        return $this;
    }
}

class QQWalletOrg
{
    const KEY = 'QQ_WALLET_ORG'; //QQ钱包JS支付_集团——收银宝

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return QQWalletOrg
     */
    public function setAmount(int $amount): ?QQWalletOrg
    {
        $this->amount = $amount;
        return $this;
    }
}

class UnionPayJs
{
    const KEY = 'UNIONPAY_JS'; //银联JS支付（收银宝）

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return UnionPayJs
     */
    public function setAmount(int $amount): ?UnionPayJs
    {
        $this->amount = $amount;
        return $this;
    }
}

class UnionPayJsOrg
{
    const KEY = 'UNIONPAY_JS_ORG'; //银联JS支付（收银宝）_集团

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return UnionPayJsOrg
     */
    public function setAmount(int $amount): ?UnionPayJsOrg
    {
        $this->amount = $amount;
        return $this;
    }
}

class Balance
{
    const KEY = 'BALANCE'; //账户余额

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return Balance
     */
    public function setAmount(int $amount): ?Balance
    {
        $this->amount = $amount;
        return $this;
    }
}

class Coupon
{
    const KEY = 'COUPON'; //代金券

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return Coupon
     */
    public function setAmount(int $amount): ?Coupon
    {
        $this->amount = $amount;
        return $this;
    }
}

class WithdrawTLT
{
    const KEY = 'WITHDRAW_TLT'; //通联通代付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WithdrawTLT
     */
    public function setAmount(int $amount): ?WithdrawTLT
    {
        $this->amount = $amount;
        return $this;
    }
}

class OrderVSPPay
{
    const KEY = 'ORDER_VSPPAY'; //收银宝POS当面付及订单模式支付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return OrderVSPPay
     */
    public function setAmount(int $amount): ?OrderVSPPay
    {
        $this->amount = $amount;
        return $this;
    }
}

class AlipayAppVSP
{
    const KEY = 'ALIPAY_APP_VSP'; //收银宝支付宝APP支付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return AlipayAppVSP
     */
    public function setAmount(int $amount): ?AlipayAppVSP
    {
        $this->amount = $amount;
        return $this;
    }
}

class AlipayAppVSPOrg
{
    const KEY = 'ALIPAY_APP_VSP_ORG'; //收银宝支付宝APP支付_集团

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return AlipayAppVSPOrg
     */
    public function setAmount(int $amount): ?AlipayAppVSPOrg
    {
        $this->amount = $amount;
        return $this;
    }
}

class AlipayAppOpen
{
    const KEY = 'ALIPAY_APP_OPEN'; //支付宝原生APP支付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return AlipayAppOpen
     */
    public function setAmount(int $amount): ?AlipayAppOpen
    {
        $this->amount = $amount;
        return $this;
    }
}

class AlipayMobileWebOpen
{
    const KEY = 'ALIPAY_MWEB_OPEN'; //支付宝原生手机网站支付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return AlipayMobileWebOpen
     */
    public function setAmount(int $amount): ?AlipayMobileWebOpen
    {
        $this->amount = $amount;
        return $this;
    }
}

class WithHoldSD
{
    const KEY = 'WITHHOLD_SD'; //山东代收

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WithHoldSD
     */
    public function setAmount(int $amount): ?WithHoldSD
    {
        $this->amount = $amount;
        return $this;
    }
}

class WithdrawSD
{
    const KEY = 'WITHDRAW_SD'; //山东代付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WithdrawSD
     */
    public function setAmount(int $amount): ?WithdrawSD
    {
        $this->amount = $amount;
        return $this;
    }
}

class WithdrawJFB
{
    const KEY = 'WITHDRAW_JFB'; //金服宝代付——银行存管出金使用

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WithdrawJFB
     */
    public function setAmount(int $amount): ?WithdrawJFB
    {
        $this->amount = $amount;
        return $this;
    }
}

class WithdrawHTBank
{
    const KEY = 'WITHDRAW_HTBANK'; //华通代付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WithdrawHTBank
     */
    public function setAmount(int $amount): ?WithdrawHTBank
    {
        $this->amount = $amount;
        return $this;
    }
}

class TransferHTBank
{
    const KEY = 'TRANSFER_HTBANK'; //华通头寸调拨

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return TransferHTBank
     */
    public function setAmount(int $amount): ?TransferHTBank
    {
        $this->amount = $amount;
        return $this;
    }
}

class MobileAppPayVSP
{
    const KEY = 'MOBILEAPPPAY_VSP'; //收银宝手机银行APP

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return MobileAppPayVSP
     */
    public function setAmount(int $amount): ?MobileAppPayVSP
    {
        $this->amount = $amount;
        return $this;
    }
}

class MobileAppPayVSPOrg
{
    const KEY = 'MOBILEAPPPAY_VSP_ORG'; //收银宝手机银行APP_集团

    /**
     * @var string 收银宝子商户号
     */
    private $vspCusId;

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * 获取收银宝子商户号
     *
     * @return ?string
     */
    public function getVspCusId(): ?string
    {
        return $this->vspCusId;
    }

    /**
     * 设置收银宝子商户号
     *
     * @param string $vspCusId 收银宝子商户号
     * @return ?MobileAppPayVSPOrg
     */
    public function setVspCusId(string $vspCusId): ?MobileAppPayVSPOrg
    {
        $this->vspCusId = $vspCusId;
        return $this;
    }

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return MobileAppPayVSPOrg
     */
    public function setAmount(int $amount): ?MobileAppPayVSPOrg
    {
        $this->amount = $amount;
        return $this;
    }
}

class WithdrawTEA
{
    const KEY = 'WITHDRAW_TEA'; //电子账户代付

    /**
     * @var int 支付金额
     */
    private $amount;

    /**
     * @var string 支行行号
     */
    private $unionBank;

    /**
     * @var string 开户行支行名称
     */
    private $bankName;

    /**
     * @var string 开户行所在省
     */
    private $province;

    /**
     * @var string 开户行所在市
     */
    private $city;

    /**
     * 获取支付金额
     *
     * @return ?int 支付金额
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置支付金额
     *
     * @param ?int $amount 支付金额
     * @return WithdrawTEA
     */
    public function setAmount(int $amount): ?WithdrawTEA
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 获取支付行号
     *
     * @return ?string
     */
    public function getUnionBank(): ?string
    {
        return $this->unionBank;
    }

    /**
     * 设置支付行号
     *
     * @param string $unionBank 支付行号
     * @return ?WithdrawTEA
     */
    public function setUnionBank(string $unionBank): ?WithdrawTEA
    {
        $this->unionBank = $unionBank;
        return $this;
    }

    /**
     * 获取开户行支行名称
     *
     * @return ?string
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * 设置开户行支行名称
     *
     * @param string $bankName 开户行支行名称
     * @return ?WithdrawTEA
     */
    public function setBankName(string $bankName): ?WithdrawTEA
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * 获取开户行所在省
     *
     * @return ?string
     */
    public function getProvince(): string
    {
        return $this->province;
    }

    /**
     * 设置开户行所在省
     *
     * @param string $province 开户行所在省
     * @return ?WithdrawTEA
     */
    public function setProvince(string $province): ?WithdrawTEA
    {
        $this->province = $province;
        return $this;
    }

    /**
     * 获取开户行所在市
     *
     * @return ?string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * 设置开户行所在市
     *
     * @param string $city 开户行所在市
     * @return ?WithdrawTEA
     */
    public function setCity(string $city): ?WithdrawTEA
    {
        $this->city = $city;
        return $this;
    }
}

