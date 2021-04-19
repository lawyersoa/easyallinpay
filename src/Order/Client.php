<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Order;

use EasyAllInpay\Kernel\BaseClient;
use EasyAllInPay\Kernel\Exceptions\RequestException;
use EasyAllInPay\Kernel\Exceptions\ResponseException;
use ReflectionException;
use EasyAllInPay\Kernel\Properties\RequestReq;
use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\
{
    ConsumeApply as ConsumeApplyRequest,
    AgentCollectApply as AgentCollectApplyRequest,
    WithdrawApply as WithdrawApplyRequest,
    GetOrderDetail as GetOrderDetailRequest,
    QueryInExpDetail as QueryInExpDetailRequest,
    QueryBalance as QueryBalanceRequest,
    GetPaymentInformationDetail as GetPaymentInformationDetailRequest,
    GetPayeeFundsInTransitDetail as GetPayeeFundsInTransitDetailRequest,
    ApplicationTransfer as ApplicationTransferRequest,
    DepositApply as DepositApplyRequest,
    SignalAgentPay as SignalAgentPayRequest,
    BatchAgentPay as BatchAgentPayRequest,
    Refund as RefundRequest,
    Pay as PayRequest,
    FreezeMoney as FreezeMoneyRequest,
    UnfreezeMoney as UnfreezeMoneyRequest
};
use EasyAllInPay\Kernel\Properties\ResponseSignedValue\Order\
{
    ConsumeApply as ConsumeApplyResponse,
    AgentCollectApply as AgentCollectApplyResponse,
    WithdrawApply as WithdrawApplyResponse,
    GetOrderDetail as GetOrderDetailResponse,
    QueryInExpDetail as QueryInExpDetailResponse,
    QueryBalance as QueryBalanceResponse,
    GetPaymentInformationDetail as GetPaymentInformationDetailResponse,
    GetPayeeFundsInTransitDetail as GetPayeeFundsInTransitDetailResponse,
    ApplicationTransfer as ApplicationTransferResponse,
    DepositApply as DepositApplyResponse,
    SignalAgentPay as SignalAgentPayResponse,
    BatchAgentPay as BatchAgentPayResponse,
    Refund as RefundResponse,
    Pay as PayResponse,
    FreezeMoney as FreezeMoneyResponse,
    UnfreezeMoney as UnfreezeMoneyResponse
};
use EasyAllInPay\Kernel\Properties\ResponseSignedValue\ResponseSignedValue;

class Client extends BaseClient
{

    protected $requestReqProperty;

    public function __construct($app)
    {
        parent::__construct($app);
        $this->requestReqProperty = new RequestReq();
        $this->requestReqProperty->setService('OrderService');
    }
    /**
     * 消费申请
     *
     * @param ConsumeApplyRequest $consumeApplyRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function consumeApply(ConsumeApplyRequest $consumeApplyRequest)
    {
        $this->requestReqProperty
            ->setMethod('consumeApply')
            ->setParam($consumeApplyRequest);
        return $this->client->postJson($this->requestReqProperty, new ConsumeApplyResponse);
    }

    /**
     * 托管代收申请（标准版）
     *
     * @param AgentCollectApplyRequest $agentCollectApplyRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function agentCollectApply(AgentCollectApplyRequest $agentCollectApplyRequest)
    {
        $this->requestReqProperty
            ->setMethod('agentCollectApply')
            ->setParam($agentCollectApplyRequest);
        return $this->client->postJson($this->requestReqProperty, new AgentCollectApplyResponse);
    }

    /**
     * 确认支付（虚拟渠道）【后台】
     *
     */
    public function payVirtual()
    {
    }

    /**
     * 提现申请
     *
     * @param WithdrawApplyRequest $withdrawApplyRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function withdrawApply(WithdrawApplyRequest $withdrawApplyRequest)
    {
        $this->requestReqProperty
            ->setMethod('withdrawApply')
            ->setParam($withdrawApplyRequest);
        return $this->client->postJson($this->requestReqProperty, new WithdrawApplyResponse);
    }

    /**
     * 查询订单状态
     *
     * @param GetOrderDetailRequest $getOrderDetailRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function getOrderDetail(GetOrderDetailRequest $getOrderDetailRequest)
    {
        $this->requestReqProperty
            ->setMethod('getOrderDetail')
            ->setParam($getOrderDetailRequest);
        return $this->client->postJson($this->requestReqProperty, new GetOrderDetailResponse);
    }

    /**
     * 查询账户收支明细
     *
     * @param QueryInExpDetailRequest $queryInExpDetailRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function queryInExpDetail(QueryInExpDetailRequest $queryInExpDetailRequest)
    {
        $this->requestReqProperty
            ->setMethod('queryInExpDetail')
            ->setParam($queryInExpDetailRequest);
        return $this->client->postJson($this->requestReqProperty, new QueryInExpDetailResponse);
    }

    /**
     * 查询账户余额
     *
     * @param QueryBalanceRequest $queryBalanceRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function queryBalance(QueryBalanceRequest $queryBalanceRequest)
    {
        $this->requestReqProperty
            ->setMethod('queryBalance')
            ->setParam($queryBalanceRequest);
        return $this->client->postJson($this->requestReqProperty, new QueryBalanceResponse);
    }

    /**
     * 付款方资金代付明细查询
     *
     * @param GetPaymentInformationDetailRequest $getPaymentInformationDetailRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function getPaymentInformationDetail(GetPaymentInformationDetailRequest $getPaymentInformationDetailRequest)
    {
        $this->requestReqProperty
            ->setMethod('getPaymentInformationDetail')
            ->setParam($getPaymentInformationDetailRequest);
        return $this->client->postJson($this->requestReqProperty, new GetPaymentInformationDetailResponse);
    }

    /**
     * 收款方在途资金明细查询
     *
     * @param GetPayeeFundsInTransitDetailRequest $getPayeeFundsInTransitDetailRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function getPayeeFundsInTransitDetail(GetPayeeFundsInTransitDetailRequest $getPayeeFundsInTransitDetailRequest)
    {
        $this->requestReqProperty
            ->setMethod('getPayeeFundsInTransitDetail')
            ->setParam($getPayeeFundsInTransitDetailRequest);
        return $this->client->postJson($this->requestReqProperty, new GetPayeeFundsInTransitDetailResponse);
    }

    /**
     * 平台转账
     *
     * @param ApplicationTransferRequest $applicationTransferRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function applicationTransfer(ApplicationTransferRequest $applicationTransferRequest)
    {
        $this->requestReqProperty
            ->setMethod('applicationTransfer')
            ->setParam($applicationTransferRequest);
        return $this->client->postJson($this->requestReqProperty, new ApplicationTransferResponse);
    }

    /**
     * 申请充值
     *
     * @param DepositApplyRequest $depositApplyRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function depositApply(DepositApplyRequest $depositApplyRequest)
    {
        $this->requestReqProperty
            ->setMethod('depositApply')
            ->setParam($depositApplyRequest);
        return $this->client->postJson($this->requestReqProperty, new DepositApplyResponse);
    }

    /**
     * 单笔托管代付(标准版)
     *
     * @param SignalAgentPayRequest $signalAgentPayRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function signalAgentPay(SignalAgentPayRequest $signalAgentPayRequest)
    {
        $this->requestReqProperty
            ->setMethod('signalAgentPay')
            ->setParam($signalAgentPayRequest);
        return $this->client->postJson($this->requestReqProperty, new SignalAgentPayResponse);
    }

    /**
     * 批量托管代付(标准版)
     *
     * @param BatchAgentPayRequest $batchAgentPayRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function batchAgentPay(BatchAgentPayRequest $batchAgentPayRequest)
    {
        $this->requestReqProperty
            ->setMethod('batchAgentPay')
            ->setParam($batchAgentPayRequest);
        return $this->client->postJson($this->requestReqProperty, new BatchAgentPayResponse);
    }

    /**
     * 退款申请
     *
     * @param RefundRequest $refundRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function refund(RefundRequest $refundRequest)
    {
        $this->requestReqProperty
            ->setMethod('refund')
            ->setParam($refundRequest);
        return $this->client->postJson($this->requestReqProperty, new RefundResponse);
    }

    /**
     * 确认支付
     *
     * @param PayRequest $payRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function pay(PayRequest $payRequest)
    {
        $this->requestReqProperty
            ->setMethod('pay')
            ->setParam($payRequest);
        return $this->client->postJson($this->requestReqProperty, new PayResponse);
    }

    /**
     * 冻结金额
     *
     * @param FreezeMoneyRequest $freezeMoneyRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function freezeMoney(FreezeMoneyRequest $freezeMoneyRequest)
    {
        $this->requestReqProperty
            ->setMethod('freezeMoney')
            ->setParam($freezeMoneyRequest);
        return $this->client->postJson($this->requestReqProperty, new FreezeMoneyResponse);
    }

    /**
     * 解冻金额
     *
     * @param UnfreezeMoneyRequest $unfreezeMoneyRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function unfreezeMoney(UnfreezeMoneyRequest $unfreezeMoneyRequest)
    {
        $this->requestReqProperty
            ->setMethod('unfreezeMoney')
            ->setParam($unfreezeMoneyRequest);
        return $this->client->postJson($this->requestReqProperty, new UnfreezeMoneyResponse);
    }

}
