<?php
return [
    'basic' => [
        'sys_id' => '2006041448410260378',
        'alias' => '企叮咚',
        'account_set_no' => '400237',
        'public_key' => __DIR__ . '/TLCert-test.cer',
        'private_key' => __DIR__ . '/2006041448410260378.pfx',
        'private_pwd' => 'qidingdong123'
    ],
    'http_request' => [
        'base_uri' => 'http://116.228.64.55:6900/service/soa',
        'jump_uri' => [
            'sign_contract' => 'http://116.228.64.55:6900/yungateway/member/signContract.html',
            'sign_contract_query' => 'http://116.228.64.55:6900/yungateway/member/signContractQuery.html',
            'set_pay_pwd' => 'http://116.228.64.55:6900/yungateway/pwd/setPayPwd.html',
            'update_pay_pwd' => 'http://116.228.64.55:6900/yungateway/pwd/updatePayPwd.html',
            'reset_pay_pwd' => 'http://116.228.64.55:6900/yungateway/pwd/resetPayPwd.html',
            'update_phone_by_pay_pwd' => 'http://116.228.64.55:6900/yungateway/pwd/updatePhoneByPayPwd.html',
            'pay_by_sms_code' => 'http://116.228.64.55:6900/yungateway/frontTrans.do',
            'pay_by_pwd' => 'http://116.228.64.55:6900/yungateway/pwd/payOrder.html',
            'sign_balance_protocol' => 'http://116.228.64.55:6900/yungateway/member/signBalanceProtocol.html',
        ],
        'notify_uri' => 'http://test-pay.7dingdong.com/notify/tonglian/index?',
        'sign_method' => 'SHA1WithRSA',
        'version' => '2.0',
        'timeout' => 60
    ],
    'log' => [
        'request' => __DIR__ . '/log/REQUEST.log',
        'notify' => __DIR__ . '/log/NOTIFY.log',
    ],
];