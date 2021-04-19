<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Member;

use EasyAllInPay\Kernel\BaseClient;
use EasyAllInPay\Kernel\Properties\RequestReq;
use EasyAllInPay\Kernel\Properties\JumpPageResponse;
use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\
{
    CreateMember as CreateMemberRequest,
    SendVerificationCode as SendVerificationCodeRequest,
    BindPhone as BindPhoneRequest,
    SignContract as SignContractRequest,
    SignContractQuery as SignContractQueryRequest,
    SetRealName as SetRealNameRequest,
    SetCompanyInfo as SetCompanyInfoRequest,
    IdCardCollect as IdCardCollectRequest,
    GetMemberInfo as GetMemberInfoRequest,
    GetBankCardBin as GetBankCardBinRequest,
    ApplyBindBankCard as ApplyBindBankCardRequest,
    BindBankCard as BindBankCardRequest,
    QueryBankCard as QueryBankCardRequest,
    UnbindBankCard as UnbindBankCardRequest,
    LockMember as LockMemberRequest,
    UnlockMember as UnlockMemberRequest,
    SetPayPwd as SetPayPwdRequest,
    UpdatePayPwd as UpdatePayPwdRequest,
    ResetPayPwd as ResetPayPwdRequest,
    UpdatePhoneByPayPwd as UpdatePhoneByPayPwdRequest,
    VspTermIdService as VspTermIdServiceRequest,
    ApplyBindAcct as ApplyBindAcctRequest,
    UnbindPhone as UnbindPhoneRequest,
    BankCardChangeBindPhone as BankCardChangeBindPhoneRequest,
    VerifyBankCardChangeBindPhone as VerifyBankCardChangeBindPhoneRequest,
    CreateBankSubAcctNo as CreateBankSubAcctNoRequest,
    GetUserIdByAuthCode as GetUserIdByAuthCodeRequest,
    WXSubMerchantService as WXSubMerchantServiceRequest,
    FillMemberInfoForHT as FillMemberInfoForHTRequest,
    IdCardCollectForHT as IdCardCollectForHTRequest,
    QueryIdCardCollectResult as QueryIdCardCollectResultRequest
};
use EasyAllInPay\Kernel\Properties\ResponseSignedValue\Member\
{
    CreateMember as CreateMemberResponse,
    SendVerificationCode as SendVerificationCodeResponse,
    BindPhone as BindPhoneResponse,
    SignContract as SignContractResponse,
    SignContractQuery as SignContractQueryResponse,
    SetRealName as SetRealNameResponse,
    SetCompanyInfo as SetCompanyInfoResponse,
    IdCardCollect as IdCardCollectResponse,
    GetMemberInfo as GetMemberInfoResponse,
    GetBankCardBin as GetBankCardBinResponse,
    ApplyBindBankCard as ApplyBindBankCardResponse,
    BindBankCard as BindBankCardResponse,
    QueryBankCard as QueryBankCardResponse,
    UnbindBankCard as UnbindBankCardResponse,
    LockMember as LockMemberResponse,
    UnlockMember as UnlockMemberResponse,
    SetPayPwd as SetPayPwdResponse,
    UpdatePayPwd as UpdatePayPwdResponse,
    ResetPayPwd as ResetPayPwdResponse,
    UpdatePhoneByPayPwd as UpdatePhoneByPayPwdResponse,
    VspTermIdService as VspTermIdServiceResponse,
    ApplyBindAcct as ApplyBindAcctResponse,
    UnbindPhone as UnbindPhoneResponse,
    BankCardChangeBindPhone as BankCardChangeBindPhoneResponse,
    VerifyBankCardChangeBindPhone as VerifyBankCardChangeBindPhoneResponse,
    CreateBankSubAcctNo as CreateBankSubAcctNoResponse,
    GetUserIdByAuthCode as GetUserIdByAuthCodeResponse,
    WXSubMerchantService as WXSubMerchantServiceResponse,
    FillMemberInfoForHT as FillMemberInfoForHTResponse,
    IdCardCollectForHT as IdCardCollectForHTResponse,
    QueryIdCardCollectResult as QueryIdCardCollectResultResponse
};
use EasyAllInPay\Kernel\Exceptions\RequestException;
use EasyAllInPay\Kernel\Exceptions\ResponseException;
use EasyAllInPay\Kernel\Properties\ResponseSignedValue\ResponseSignedValue;
use ReflectionException;

class Client extends BaseClient
{
    protected $requestReqProperty;

    public function __construct($app)
    {
        parent::__construct($app);
        $this->requestReqProperty = new RequestReq();
        $this->requestReqProperty->setService('MemberService');
    }

    /**
     * 创建会员
     *
     * @param CreateMemberRequest $createMemberRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function createMember(CreateMemberRequest $createMemberRequest)
    {
        $this->requestReqProperty
            ->setMethod('createMember')
            ->setParam($createMemberRequest);
        return $this->client->postJson($this->requestReqProperty, new CreateMemberResponse);
    }

    /**
     * 发送短信验证码
     *
     * @param SendVerificationCodeRequest $sendVerificationCodeRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function sendVerificationCode(SendVerificationCodeRequest $sendVerificationCodeRequest)
    {
        $this->requestReqProperty
            ->setMethod('sendVerificationCode')
            ->setParam($sendVerificationCodeRequest);
        return $this->client->postJson($this->requestReqProperty, new SendVerificationCodeResponse);
    }

    /**
     * 绑定手机
     *
     * @param BindPhoneRequest $bindPhoneRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function bindPhone(BindPhoneRequest $bindPhoneRequest)
    {
        $this->requestReqProperty
            ->setMethod('bindPhone')
            ->setParam($bindPhoneRequest);
        return $this->client->postJson($this->requestReqProperty, new BindPhoneResponse);
    }

    /**
     * 会员电子协议签约
     *
     * @param SignContractRequest $signContractRequest
     * @return JumpPageResponse
     * @throws ReflectionException
     * @throws RequestException
     */
    public function signContract(SignContractRequest $signContractRequest)
    {
        $uri = $this->httpRequestConfig['jump_uri']['sign_contract'] ?? '';
        $this->requestReqProperty
            ->setMethod('signContract')
            ->setParam($signContractRequest);
        return $this->client->jumpPage($uri, $this->requestReqProperty, new JumpPageResponse);
    }

    /**
     * 电子协议签约查询
     *
     * @param SignContractQueryRequest $signContractQueryRequest
     * @return JumpPageResponse
     * @throws ReflectionException
     * @throws RequestException
     */
    public function signContractQuery(SignContractQueryRequest $signContractQueryRequest)
    {
        $uri = $this->httpRequestConfig['jump_uri']['sign_contract_query'] ?? '';
        $this->requestReqProperty
            ->setMethod('signContractQuery')
            ->setParam($signContractQueryRequest);
        return $this->client->jumpPage($uri, $this->requestReqProperty, new JumpPageResponse);
    }

    /**
     * 实名认证
     *
     * @param SetRealNameRequest $setRealNameRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function setRealName(SetRealNameRequest $setRealNameRequest)
    {
        $this->requestReqProperty
            ->setMethod('setRealName')
            ->setParam($setRealNameRequest);
        return $this->client->postJson($this->requestReqProperty, new SetRealNameResponse);
    }

    /**
     * 设置企业信息
     *
     * @param SetCompanyInfoRequest $setCompanyInfoRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function setCompanyInfo(SetCompanyInfoRequest $setCompanyInfoRequest)
    {
        $this->requestReqProperty
            ->setMethod('setCompanyInfo')
            ->setParam($setCompanyInfoRequest);
        return $this->client->postJson($this->requestReqProperty, new SetCompanyInfoResponse);
    }

    /**
     * 影印件采集
     *
     * @param IdCardCollectRequest $idCardCollectRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function idCardCollect(IdCardCollectRequest $idCardCollectRequest)
    {
        $this->requestReqProperty
            ->setMethod('idcardCollect')
            ->setParam($idCardCollectRequest);
        return $this->client->postJson($this->requestReqProperty, new IdCardCollectResponse);
    }

    /**
     * 获取会员信息
     *
     * @param GetMemberInfoRequest $getMemberInfoRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function getMemberInfo(GetMemberInfoRequest $getMemberInfoRequest)
    {
        $this->requestReqProperty
            ->setMethod('getMemberInfo')
            ->setParam($getMemberInfoRequest);
        return $this->client->postJson($this->requestReqProperty, new GetMemberInfoResponse);
    }

    /**
     * 请求绑定银行卡
     *
     * @param ApplyBindBankCardRequest $applyBindBankCardRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function applyBindBankCard(ApplyBindBankCardRequest $applyBindBankCardRequest)
    {
        $this->requestReqProperty
            ->setMethod('applyBindBankCard')
            ->setParam($applyBindBankCardRequest);
        return $this->client->postJson($this->requestReqProperty, new ApplyBindBankCardResponse);
    }

    /**
     * 确认绑定银行卡
     *
     * @param BindBankCardRequest $bindBankCardRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function bindBankCard(BindBankCardRequest $bindBankCardRequest)
    {
        $this->requestReqProperty
            ->setMethod('bindBankCard')
            ->setParam($bindBankCardRequest);
        return $this->client->postJson($this->requestReqProperty, new BindBankCardResponse);
    }

    /**
     * 设置企业信息
     *
     * @param VspTermIdServiceRequest $vspTermIdServiceRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function vspTermIdService(VspTermIdServiceRequest $vspTermIdServiceRequest)
    {
        $this->requestReqProperty
            ->setMethod('vspTermidService')
            ->setParam($vspTermIdServiceRequest);
        return $this->client->postJson($this->requestReqProperty, new VspTermIdServiceResponse);
    }

    /**
     * 会员绑定支付账户用户标识
     *
     * @param ApplyBindAcctRequest $applyBindAcctRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function applyBindAcct(ApplyBindAcctRequest $applyBindAcctRequest)
    {
        $this->requestReqProperty
            ->setMethod('applyBindAcct')
            ->setParam($applyBindAcctRequest);
        return $this->client->postJson($this->requestReqProperty, new ApplyBindAcctResponse);
    }

    /**
     * 会员绑定支付账户用户标识
     *
     * @param QueryBankCardRequest $queryBankCardRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function queryBankCard(QueryBankCardRequest $queryBankCardRequest)
    {
        $this->requestReqProperty
            ->setMethod('queryBankCard')
            ->setParam($queryBankCardRequest);
        return $this->client->postJson($this->requestReqProperty, new QueryBankCardResponse);
    }

    /**
     * 解除绑定银行卡
     *
     * @param UnbindBankCardRequest $unbindBankCardRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function unbindBankCard(UnbindBankCardRequest $unbindBankCardRequest)
    {
        $this->requestReqProperty
            ->setMethod('unbindBankCard')
            ->setParam($unbindBankCardRequest);
        return $this->client->postJson($this->requestReqProperty, new UnbindBankCardResponse);
    }

    /**
     * 修改绑定手机(银行卡验证)
     *
     * @param BankCardChangeBindPhoneRequest $bankCardChangeBindPhoneRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function bankCardChangeBindPhone(BankCardChangeBindPhoneRequest $bankCardChangeBindPhoneRequest)
    {
        $this->requestReqProperty
            ->setMethod('bankCardChangeBindPhone')
            ->setParam($bankCardChangeBindPhoneRequest);
        return $this->client->postJson($this->requestReqProperty, new BankCardChangeBindPhoneResponse);
    }

    /**
     * 确认修改绑定手机（银行卡验证）
     *
     * @param VerifyBankCardChangeBindPhoneRequest $verifyBankCardChangeBindPhoneRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function verifyBankCardChangeBindPhone(VerifyBankCardChangeBindPhoneRequest $verifyBankCardChangeBindPhoneRequest)
    {
        $this->requestReqProperty
            ->setMethod('verifyBankCardChangeBindPhone')
            ->setParam($verifyBankCardChangeBindPhoneRequest);
        return $this->client->postJson($this->requestReqProperty, new VerifyBankCardChangeBindPhoneResponse);
    }

    /**
     *
     *
     * @param CreateBankSubAcctNoRequest $createBankSubAcctNoRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function createBankSubAcctNoRequest(CreateBankSubAcctNoRequest $createBankSubAcctNoRequest)
    {
        $this->requestReqProperty
            ->setMethod('createBankSubAcctNo')
            ->setParam($createBankSubAcctNoRequest);
        return $this->client->postJson($this->requestReqProperty, new CreateBankSubAcctNoResponse);
    }

    /**
     *
     *
     * @param GetUserIdByAuthCodeRequest $getUserIdByAuthCodeRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function getUserIdByAuthCode(GetUserIdByAuthCodeRequest $getUserIdByAuthCodeRequest)
    {
        $this->requestReqProperty
            ->setMethod('getUserIdByAuthcode')
            ->setParam($getUserIdByAuthCodeRequest);
        return $this->client->postJson($this->requestReqProperty, new GetUserIdByAuthCodeResponse);
    }

    /**
     * 修改手机号（个人版）
     *
     * @param UpdatePhoneByPayPwdRequest $updatePhoneByPayPwdRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function updatePhoneByPayPwd(UpdatePhoneByPayPwdRequest $updatePhoneByPayPwdRequest)
    {
        $this->requestReqProperty
            ->setMethod('updatePhoneByPayPwd')
            ->setParam($updatePhoneByPayPwdRequest);
        return $this->client->postJson($this->requestReqProperty, new UpdatePhoneByPayPwdResponse);
    }

    /**
     * 查询卡bin
     *
     * @param GetBankCardBinRequest $getBankCardBinRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function getBankCardBin(GetBankCardBinRequest $getBankCardBinRequest)
    {
        $this->requestReqProperty
            ->setMethod('getBankCardBin')
            ->setParam($getBankCardBinRequest);
        return $this->client->postJson($this->requestReqProperty, new GetBankCardBinResponse);
    }

    /**
     * 锁定会员
     *
     * @param LockMemberRequest $lockMember
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function lockMember(LockMemberRequest $lockMember)
    {
        $this->requestReqProperty
            ->setMethod('lockMember')
            ->setParam($lockMember);
        return $this->client->postJson($this->requestReqProperty, new LockMemberResponse);
    }

    /**
     * 解除锁定会员
     *
     * @param UnlockMemberRequest $unlockMemberRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function unlockMember(UnlockMemberRequest $unlockMemberRequest)
    {
        $this->requestReqProperty
            ->setMethod('unlockMember')
            ->setParam($unlockMemberRequest);
        return $this->client->postJson($this->requestReqProperty, new UnlockMemberResponse);
    }

    /**
     * 设置支付密码（密码验证版）
     *
     * @param SetPayPwdRequest $setPayPwdRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException

     */
    public function setPayPwd(SetPayPwdRequest $setPayPwdRequest)
    {
        $this->requestReqProperty
            ->setMethod('setPayPwd')
            ->setParam($setPayPwdRequest);
        return $this->client->postJson($this->requestReqProperty, new SetPayPwdResponse);
    }

    /**
     *  修改支付密码（密码验证版）
     *
     * @param UpdatePayPwdRequest $updatePayPwdRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function updatePayPwd(UpdatePayPwdRequest $updatePayPwdRequest)
    {
        $this->requestReqProperty
            ->setMethod('updatePayPwd')
            ->setParam($updatePayPwdRequest);
        return $this->client->postJson($this->requestReqProperty, new UpdatePayPwdResponse);
    }

    /**
     *  重置支付密码（密码验证版）
     *
     * @param ResetPayPwdRequest $resetPayPwdRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function resetPayPwd(ResetPayPwdRequest $resetPayPwdRequest)
    {
        $this->requestReqProperty
            ->setMethod('resetPayPwd')
            ->setParam($resetPayPwdRequest);
        return $this->client->postJson($this->requestReqProperty, new ResetPayPwdResponse);
    }

    /**
     * 解绑手机
     *
     * @param UnbindPhoneRequest $unbindPhoneRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function unbindPhone(UnbindPhoneRequest $unbindPhoneRequest)
    {
        $this->requestReqProperty
            ->setMethod('unbindPhone')
            ->setParam($unbindPhoneRequest);
        return $this->client->postJson($this->requestReqProperty, new UnbindPhoneResponse);
    }

    /**
     * 账户余额扣款协议签约
     *
     */
    public function signBalanceProtocol()
    {

    }

    /**
     * 账户余额扣款协议解约
     *
     */
    public function releaseProtocol()
    {
    }

    /**
     * 账户余额协议查询
     *
     */
    public function getProtocolDetail()
    {

    }

    /**
     * 会员关联微信子商户信息（服务商）管理
     *
     * @param WXSubMerchantServiceRequest $WXSubMerchantServiceRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function WXSubMerchantService(WXSubMerchantServiceRequest $WXSubMerchantServiceRequest)
    {
        $this->requestReqProperty
            ->setMethod('wxSubMchtService')
            ->setParam($WXSubMerchantServiceRequest);
        return $this->client->postJson($this->requestReqProperty, new WXSubMerchantServiceResponse);
    }

    /**
     * 华通会员要素补录
     *
     * @param FillMemberInfoForHTRequest $fillMemberInfoForHTRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function fillMemberInfoForHT(FillMemberInfoForHTRequest $fillMemberInfoForHTRequest)
    {
        $this->requestReqProperty
            ->setMethod('fillMemberInfoForHT')
            ->setParam($fillMemberInfoForHTRequest);
        return $this->client->postJson($this->requestReqProperty, new FillMemberInfoForHTResponse);
    }

    /**
     * 华通会员影印件采集
     *
     * @param IdCardCollectForHTRequest $idCardCollectForHTRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function idCardCollectForHT(IdCardCollectForHTRequest $idCardCollectForHTRequest)
    {
        $this->requestReqProperty
            ->setMethod('idCardCollectForHT')
            ->setParam($idCardCollectForHTRequest);
        return $this->client->postJson($this->requestReqProperty, new IdCardCollectForHTResponse);
    }

    /**
     * 查询华通合规采集结果
     *
     * @param QueryIdCardCollectResultRequest $queryIdCardCollectResultRequest
     * @return ResponseSignedValue
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function queryIdCardCollectResult(QueryIdCardCollectResultRequest $queryIdCardCollectResultRequest)
    {
        $this->requestReqProperty
            ->setMethod('queryIdCardCollectResult')
            ->setParam($queryIdCardCollectResultRequest);
        return $this->client->postJson($this->requestReqProperty, new QueryIdCardCollectResultResponse);
    }

}
