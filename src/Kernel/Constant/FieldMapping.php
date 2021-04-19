<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Constant;

class FieldMapping
{
    /*
    |--------------------------------------------------------------------------
    | 会员类型
    |--------------------------------------------------------------------------
    */
    const MEMBER_TYPE_COMPANY = 2;  //企业
    const MEMBER_TYPE_PERSONAL = 3; //个人

    /*
    |--------------------------------------------------------------------------
    | 证件类型
    |--------------------------------------------------------------------------
    */
    const IDENTITY_TYPE_ID = 1;                 //身份证
    const IDENTITY_TYPE_PASSPORT = 2;           //护照
    const IDENTITY_TYPE_OFFICER = 3;            //军官证
    const IDENTITY_TYPE_HOME = 4;               //回乡证
    const IDENTITY_TYPE_TAIWAN = 5;             //台胞证
    const IDENTITY_TYPE_POLICE = 6;             //警官证
    const IDENTITY_TYPE_SOLDIERS = 7;           //士兵证
    const IDENTITY_TYPE_RESIDENCE_BOOKLET = 8;  //户口簿
    const IDENTITY_TYPE_TWO_WAY_EXIT_PERMIT = 9;//港澳居民来往内地通行证
    const IDENTITY_TYPE_ = 10;                  //士兵证
    const IDENTITY_TYPE_OTHER = 99;             //其他证件

    /*
    |--------------------------------------------------------------------------
    | 职业编号
    |--------------------------------------------------------------------------
    */
    const PROFESSION_NO_GOVERNMENT = '10000';       //党的机关、国家机关、群众团体和社会组织、企事业单位负责人
    const PROFESSION_NO_PROFESSIONAL = '20000';     //专业技术人员
    const PROFESSION_NO_LAWYER = '20700';           //法律、社会和宗教专业人员
    const PROFESSION_NO_TEACHER = '20800';          //教学人员
    const PROFESSION_NO_OFFICER = '30000';          //办事人员和有关人员
    const PROFESSION_NO_SERVICE = '40000';          //社会生产服务和生活服务人员
    const PROFESSION_NO_WHOLESALE = '40100';        //批发与零售服务人员
    const PROFESSION_NO_CATERING = '40300';         //住宿和餐饮服务人员
    const PROFESSION_NO_HIRE = '40700';             //租赁和商务服务人员
    const PROFESSION_NO_CULTURE = '41300';          //文化/体育/娱乐服务人员
    const PROFESSION_NO_FARMER = '50000';           //农、林、牧、渔业生产及辅助人员
    const PROFESSION_NO_PRODUCE = '60000';          //生产制造及有关人员
    const PROFESSION_NO_ABANDON = '62700';          //废弃资源综合利用人员
    const PROFESSION_NO_SOLDIER = '70000';          //军人
    const PROFESSION_NO_OTHER = '80000';            //不便分类的其他从业人员

    /*
    |--------------------------------------------------------------------------
    | 认证类型
    |--------------------------------------------------------------------------
    */
    const AUTH_TYPE_THREE = 1;      //三证
    const AUTH_TYPE_ONE = 2;        //一证

    /*
    |--------------------------------------------------------------------------
    | 影印件类型
    |--------------------------------------------------------------------------
    */
    const ID_CARD_PIC_TYPE_UNI_CREDIT = 1;                  //统一社会信用证
    const ID_CARD_PIC_TYPE_ORGANIZATION_CODE = 2;           //组织机构代码证
    const ID_CARD_PIC_TYPE_TAX_REGISTER = 3;                //税务登记证
    const ID_CARD_PIC_TYPE_BANK_ACCOUNT_PROVE = 4;          //银行开户证明
    const ID_CARD_PIC_TYPE_INSTITUTION_CREDIT_CODE = 5;     //机构信用代码
    const ID_CARD_PIC_TYPE_ICP = 6;                         //ICP备案许可
    const ID_CARD_PIC_TYPE_TRADE_LICENSE = 7;               //行业许可证
    const ID_CARD_PIC_TYPE_IDENTITY_CARD_FRONT = 8;         //身份证正面（人像面）
    const ID_CARD_PIC_TYPE_IDENTITY_CARD_BACK = 9;          //身份证反面（国徽面）

    /*
    |--------------------------------------------------------------------------
    | 开户机构类型
    |--------------------------------------------------------------------------
    */
    const ACCT_ORG_TYPE_TL = 1;             //通联
    const ACCT_ORG_TYPE_HT_BANK = 2;        //华通银行

    /*
    |--------------------------------------------------------------------------
    | 绑卡方式
    |--------------------------------------------------------------------------
    */
    const CARD_CHECK_TLT_ACCOUNT_REAL_VERIFIED_THREE = 1;   //通联通账户实名验证(三要素)
    const CARD_CHECK_TLT_REAL_NAME_PAY = 3;                 //通联通实名付
    const CARD_CHECK_TLT_ACCOUNT_REAL_VERIFIED_FOUR = 5;    //通联通账户实名验证(四要素)
    const CARD_CHECK_TLT_PROTOCOL_PAY_SIGN = 6;             //通联通协议支付签约
    const CARD_CHECK_VSP_QUICK_PAY_SIGN = 7;                //收银宝快捷支付签约
    const CARD_CHECK_BANK_CARD_FOUR_ITEM = 8;               //银行卡四要素验证
    const CARD_CHECK_BACK_BIND_BANK_CARD = 99;              //后台绑定银行卡

    /*
    |--------------------------------------------------------------------------
    | 银行卡类型
    |--------------------------------------------------------------------------
    */
    const BANK_CARD_TYPE_DEBIT = 1;     //借记卡
    const BANK_CARD_TYPE_CREDIT = 2;    //贷记卡

    /*
    |--------------------------------------------------------------------------
    | 小程序跳转类型
    |--------------------------------------------------------------------------
    */
    const JUMP_PAGE_TYPE_H5 = 1;        //H5页面
    const JUMP_PAGE_TYPE_PROGRAM = 2;   //小程序

    /*
    |--------------------------------------------------------------------------
    | 商品类型
    |--------------------------------------------------------------------------
    */
    const GOODS_TYPE_VIRTUAL = 1;       //虚拟商品
    const GOODS_TYPE_REAL = 2;          //实物商品

    /*
    |--------------------------------------------------------------------------
    | 访问终端类型
    |--------------------------------------------------------------------------
    */
    const SOURCE_MOBILE = 1;       //Mobile
    const SOURCE_PC = 2;           //PC

    /*
    |--------------------------------------------------------------------------
    | 验证码类型
    |--------------------------------------------------------------------------
    */
    const VERIFICATION_CODE_TYPE_UNBIND_PHONE = 6;        //解绑手机
    const VERIFICATION_CODE_TYPE_BIND_PHONE = 9;          //绑定手机

    /*
    |--------------------------------------------------------------------------
    | 用户状态
    |--------------------------------------------------------------------------
    */
    const MEMBER_STATE_VALID = 1;               //有效
    const MEMBER_STATE_AUDIT_FAILED = 3;        //审核失败
    const MEMBER_STATE_LOCKED = 5;              //已锁
    const MEMBER_STATE_WAIT_AUDIT = 7;          //待审核

    /*
    |--------------------------------------------------------------------------
    | 企业用户审核状态
    |--------------------------------------------------------------------------
    */
    const COMPANY_MEMBER_WAIT_AUDIT = 1;               //待审核
    const COMPANY_MEMBER_AUDIT_SUCCEED = 2;            //审核成功
    const COMPANY_MEMBER_AUDIT_FAILED = 3;             //审核失败

    /*
    |--------------------------------------------------------------------------
    | 订单状态
    |--------------------------------------------------------------------------
    */
    const ORDER_STATUS_NOT_PAY = 1;                     //未支付
    const ORDER_STATUS_PAY_FAILED = 3;                  //交易失败
    const ORDER_STATUS_PAY_SUCCEED = 4;                 //交易成功
    const ORDER_STATUS_PAY_SUCCEED_WITH_REFUND = 5;     //交易成功-发生退款
    const ORDER_STATUS_CLOSED = 6;                      //关闭
    const ORDER_STATUS_PENDING = 99;                    //进行中

    /*
    |--------------------------------------------------------------------------
    | 订单状态
    |--------------------------------------------------------------------------
    */
    const BIND_STATE_BOUND = 1;     //已绑定
    const BIND_STATE_UNBOUND = 2;   //已解除

    /*
    |--------------------------------------------------------------------------
    | 网关支付方式
    |--------------------------------------------------------------------------
    */
    const GATEWAY_PAY_METHOD_B2C = 'B2C';           //B2C个人网银
    const GATEWAY_PAY_METHOD_B2B = 'B2B';           //B2B企业网银
    const GATEWAY_PAY_METHOD_B2C_B2B = 'B2C,B2B';   //B2C个人网银/B2B企业网银

    /*
    |--------------------------------------------------------------------------
    | 订单类型
    |--------------------------------------------------------------------------
    */
    const ORDER_TYPE_RECHARGE = 1;                  //充值
    const ORDER_TYPE_CONSUME = 2;                   //消费
    const ORDER_TYPE_WITHDRAW = 3;                  //提现
    const ORDER_TYPE_AGENT_COLLECT = 4;             //标准代收
    const ORDER_TYPE_AGENT_PAY = 5;                 //代付
    const ORDER_TYPE_BATCH_AGENT_PAY = 6;           //批量代付
    const ORDER_TYPE_REFUND = 10;                   //退款
    const ORDER_TYPE_APPLICATION_TRANSFER = 12;     //平台转账
    const ORDER_TYPE_PROTOCOL_CONSUME = 15;         //协议消费
    const ORDER_TYPE_PROTOCOL_AGENT_COLLECT = 16;   //协议代收

    /*
    |--------------------------------------------------------------------------
    | 操作类型
    |--------------------------------------------------------------------------
    */
    const OPERATION_TYPE_SET = 'set';           //设置
    const OPERATION_TYPE_QUERY = 'query';       //查询
    const OPERATION_TYPE_DELETE = 'delete';     //删除

    /*
    |--------------------------------------------------------------------------
    | 支付账户类型
    |--------------------------------------------------------------------------
    */
    const ACCT_TYPE_WECHAT_PUBLIC = 'weChatPublic';             //微信公众号
    const ACCT_TYPE_WECHAT_MINI_PROGRAM = 'weChatMiniProgram';  //微信小程序
    const ACCT_TYPE_ALIPAY_SERVICE = 'aliPayService';           //支付宝生活号
    const ACCT_TYPE_UNION_PAY_JS = 'unionPayjs';                //银联JS
    const ACCT_TYPE_OTHER = 'other';                            //其他

    /*
    |--------------------------------------------------------------------------
    | 交易验证方式
    |--------------------------------------------------------------------------
    */
    const VALIDATE_TYPE_NONE = 0;       //无验证
    const VALIDATE_TYPE_SMS_CODE = 1;   //短信验证码
    const VALIDATE_TYPE_PAY_PWD = 2;    //支付密码

    /*
    |--------------------------------------------------------------------------
    | 授权码类型
    |--------------------------------------------------------------------------
    */
    const AUTH_CODE_TYPE_WECHAT = '01';         //微信付款码
    const AUTH_CODE_TYPE_UNION_PAY = '02';      //银联

    /**
     * @var string[] 会员类型映射
     */
    public static $memberTypeMapping = [
        self::MEMBER_TYPE_COMPANY => '企业',
        self::MEMBER_TYPE_PERSONAL => '个人',
    ];

    /**
     * @var string[] 访问终端类型
     */
    public static $sourceMapping = [
        self::SOURCE_MOBILE => 'Mobile',
        self::SOURCE_PC => 'PC'
    ];

    /**
     * @var string[] 证件类型
     */
    public static $identityTypeMapping = [
        self::IDENTITY_TYPE_ID                      => '身份证',
        self::IDENTITY_TYPE_PASSPORT                => '护照',
        self::IDENTITY_TYPE_OFFICER                 => '军官证',
        self::IDENTITY_TYPE_HOME                    => '回乡证',
        self::IDENTITY_TYPE_TAIWAN                  => '台胞证',
        self::IDENTITY_TYPE_POLICE                  => '警官证',
        self::IDENTITY_TYPE_SOLDIERS                => '士兵证',
        self::IDENTITY_TYPE_RESIDENCE_BOOKLET       => '户口簿',
        self::IDENTITY_TYPE_TWO_WAY_EXIT_PERMIT     => '港澳居民来往内地通行证',
        self::IDENTITY_TYPE_                        => '士兵证',
        self::IDENTITY_TYPE_OTHER                   => '其他证件'
    ];

    /**
     * @var string[] 访问终端类型
     */
    public static $verificationCodeTypeMapping = [
        self::VERIFICATION_CODE_TYPE_BIND_PHONE => '绑定手机',
        self::VERIFICATION_CODE_TYPE_UNBIND_PHONE => '解绑手机'
    ];

    /**
     * @var string[] 跳转页面类型
     */
    public static $jumpPageTypeMapping = [
        self::JUMP_PAGE_TYPE_H5 => 'H5页面',
        self::JUMP_PAGE_TYPE_PROGRAM => '小程序页面',
    ];

    /**
     * @var array 职业编号
     */
    public static $professionNoMapping = [
        self::PROFESSION_NO_GOVERNMENT      => '党的机关、国家机关、群众团体和社会组织、企事业单位负责人',
        self::PROFESSION_NO_PROFESSIONAL    => '专业技术人员',
        self::PROFESSION_NO_LAWYER          => '法律、社会和宗教专业人员',
        self::PROFESSION_NO_TEACHER         => '教学人员',
        self::PROFESSION_NO_OFFICER         => '办事人员和有关人员',
        self::PROFESSION_NO_SERVICE         => '社会生产服务和生活服务人员',
        self::PROFESSION_NO_WHOLESALE       => '批发与零售服务人员',
        self::PROFESSION_NO_CATERING        => '住宿和餐饮服务人员',
        self::PROFESSION_NO_HIRE            => '租赁和商务服务人员',
        self::PROFESSION_NO_CULTURE         => '文化/体育/娱乐服务人员',
        self::PROFESSION_NO_FARMER          => '农、林、牧、渔业生产及辅助人员',
        self::PROFESSION_NO_PRODUCE         => '生产制造及有关人员',
        self::PROFESSION_NO_ABANDON         => '废弃资源综合利用人员',
        self::PROFESSION_NO_SOLDIER         => '军人',
        self::PROFESSION_NO_OTHER           => '不便分类的其他从业人员',
    ];

    /**
     * @var string[] 认证类型
     */
    public static $authTypeMapping = [
        self::AUTH_TYPE_THREE => '一证',
        self::AUTH_TYPE_ONE => '三证',
    ];

    /**
     * @var string[] 影印件类型
     */
    public static $idCardTypeMapping = [
        self::ID_CARD_PIC_TYPE_UNI_CREDIT => '统一社会信用证',
        self::ID_CARD_PIC_TYPE_ORGANIZATION_CODE => '组织机构代码证',
        self::ID_CARD_PIC_TYPE_TAX_REGISTER => '税务登记证',
        self::ID_CARD_PIC_TYPE_BANK_ACCOUNT_PROVE => '银行开户证明',
        self::ID_CARD_PIC_TYPE_INSTITUTION_CREDIT_CODE => '机构信用代码',
        self::ID_CARD_PIC_TYPE_ICP => 'ICP备案许可',
        self::ID_CARD_PIC_TYPE_TRADE_LICENSE => '行业许可证',
        self::ID_CARD_PIC_TYPE_IDENTITY_CARD_FRONT => '身份证正面（人像面）',
        self::ID_CARD_PIC_TYPE_IDENTITY_CARD_BACK => '身份证反面（国徽面）',
    ];

    /**
     * @var string[] 开户机构类型
     */
    public static $acctOrgTypeMapping = [
        self::ACCT_ORG_TYPE_TL => '通联',
        self::ACCT_ORG_TYPE_HT_BANK => '华通银行',
    ];

    /**
     * @var string[] 绑卡方式
     */
    public static $cardCheckMapping = [
        self::CARD_CHECK_TLT_ACCOUNT_REAL_VERIFIED_THREE => '通联通账户实名验证(三要素)',
        self::CARD_CHECK_TLT_REAL_NAME_PAY => '通联通实名付',
        self::CARD_CHECK_TLT_ACCOUNT_REAL_VERIFIED_FOUR => '通联通账户实名验证(四要素)',
        self::CARD_CHECK_TLT_PROTOCOL_PAY_SIGN => '通联通协议支付签约',
        self::CARD_CHECK_VSP_QUICK_PAY_SIGN => '收银宝快捷支付签约',
        self::CARD_CHECK_BANK_CARD_FOUR_ITEM => '银行卡四要素验证',
        self::CARD_CHECK_BACK_BIND_BANK_CARD => '后台绑定银行卡',
    ];

    /**
     * @var string[] 操作类型
     */
    public static $operationTypeMapping = [
        self::OPERATION_TYPE_SET => '设置',
        self::OPERATION_TYPE_QUERY => '查询',
        self::OPERATION_TYPE_DELETE => '删除',
    ];

    /**
     * @var string[] 支付账户类型
     */
    public static $acctTypeMapping = [
        self::ACCT_TYPE_WECHAT_PUBLIC => '微信公众号',
        self::ACCT_TYPE_WECHAT_MINI_PROGRAM => '微信小程序',
        self::ACCT_TYPE_ALIPAY_SERVICE => '支付宝生活号',
        self::ACCT_TYPE_UNION_PAY_JS => '银联JS',
        self::ACCT_TYPE_OTHER => '其他',
    ];

    /**
     * @var string[] 授权码类型
     */
    public static $authCodeTypeMapping = [
        self::AUTH_CODE_TYPE_WECHAT => '微信付款码',
        self::AUTH_CODE_TYPE_UNION_PAY => '银联',
    ];

    /**
     * @var string[] 交易验证方式
     */
    public static $validateTypeMapping = [
        self::VALIDATE_TYPE_NONE => '无验证',
        self::VALIDATE_TYPE_SMS_CODE => '短信验证码',
        self::VALIDATE_TYPE_PAY_PWD => '支付密码',
    ];
}
