<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Merchant;

use EasyAllInPay\Kernel\BaseClient;
use EasyAllInPay\Kernel\Exceptions\RequestException;
use EasyAllInPay\Kernel\Exceptions\ResponseException;
use ReflectionException;
use EasyAllInPay\Kernel\Properties\RequestReq;
use EasyAllInPay\Kernel\Properties\ResponseSignedValue\ResponseSignedValue;
use EasyAllInPay\Kernel\Properties\RequestReqParam\Merchant\
{
    GetCheckAccountFile as GetCheckAccountFileRequest,
    QueryBankBalance as QueryBankBalanceRequest,
    QueryBankInExpDetail as QueryBankInExpDetailRequest,
    QueryMerchantBalance as QueryMerchantBalanceRequest,
    QueryReserveFundBalance as QueryReserveFundBalanceRequest,
    ElectronicReceiptDownload as ElectronicReceiptDownloadRequest
};
use EasyAllInPay\Kernel\Properties\ResponseSignedValue\Merchant\
{
    GetCheckAccountFile as GetCheckAccountFileResponse,
    QueryBankBalance as QueryBankBalanceResponse,
    QueryBankInExpDetail as QueryBankInExpDetailResponse,
    QueryMerchantBalance as QueryMerchantBalanceResponse,
    QueryReserveFundBalance as QueryReserveFundBalanceResponse,
    ElectronicReceiptDownload as ElectronicReceiptDownloadResponse
};

class Client extends BaseClient
{

    protected $requestReqProperty;

    public function __construct($app)
    {
        parent::__construct($app);
        $this->requestReqProperty = new RequestReq();
        $this->requestReqProperty->setService('MerchantService');
    }

    /**
     * 平台头寸查询
     *
     * @param QueryReserveFundBalanceRequest $queryReserveFundBalanceRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function queryReserveFundBalance(QueryReserveFundBalanceRequest $queryReserveFundBalanceRequest)
    {
        $this->requestReqProperty
            ->setMethod('queryReserveFundBalance')
            ->setParam($queryReserveFundBalanceRequest);
        return $this->client->postJson($this->requestReqProperty, new QueryReserveFundBalanceResponse);
    }

    /**
     * 商户集合对账文件下载
     *
     * @param GetCheckAccountFileRequest $getCheckAccountFileRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function getCheckAccountFile(GetCheckAccountFileRequest $getCheckAccountFileRequest)
    {
        $this->requestReqProperty
            ->setMethod('getCheckAccountFile')
            ->setParam($getCheckAccountFileRequest);
        return $this->client->postJson($this->requestReqProperty, new GetCheckAccountFileResponse);
    }

    /**
     * 平台账户集余额查询
     *
     * @param QueryMerchantBalanceRequest $queryMerchantBalanceRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function queryMerchantBalance(QueryMerchantBalanceRequest $queryMerchantBalanceRequest)
    {
        $this->requestReqProperty
            ->setMethod('queryMerchantBalance')
            ->setParam($queryMerchantBalanceRequest);
        return $this->client->postJson($this->requestReqProperty, new QueryMerchantBalanceResponse);
    }

    /**
     * 平台银行存管账户余额查询
     *
     * @param QueryBankBalanceRequest $queryBankBalanceRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function queryBankBalance(QueryBankBalanceRequest $queryBankBalanceRequest)
    {
        $this->requestReqProperty
            ->setMethod('queryBankBalance')
            ->setParam($queryBankBalanceRequest);
        return $this->client->postJson($this->requestReqProperty, new QueryBankBalanceResponse);
    }

    /**
     * 银行账户交易明细查询
     *
     * @param QueryBankInExpDetailRequest $queryBankInExpDetailRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function queryBankInExpDetail(QueryBankInExpDetailRequest $queryBankInExpDetailRequest)
    {
        $this->requestReqProperty
            ->setMethod('queryBankInExpDetail')
            ->setParam($queryBankInExpDetailRequest);
        return $this->client->postJson($this->requestReqProperty, new QueryBankInExpDetailResponse);
    }

    /**
     * 电子回单下载
     *
     * @param ElectronicReceiptDownloadRequest $electronicReceiptDownloadRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function electronicReceiptDownload(ElectronicReceiptDownloadRequest $electronicReceiptDownloadRequest)
    {
        $this->requestReqProperty
            ->setMethod('eleReceiptDownload')
            ->setParam($electronicReceiptDownloadRequest);
        return $this->client->postJson($this->requestReqProperty, new ElectronicReceiptDownloadResponse);
    }


}
