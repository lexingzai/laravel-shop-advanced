<?php

return [
    'alipay' => [
        'app_id'         => '2016091600525333',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtrff5IOVcfLD9veNfcvO1YzZ2/33DvAAKzVwPz/YYTY+gkMxMbpZ7y8X62FUDN+aoDDiqxINGJDqEHIFoMFSKTgQC/elL9vWLBLUKUPc5eieilo5QuIzP3OJ7P21u2Ifcbx9TEobkI8Da3qJkff06i7CV6Ni2CSDsMiEVtVPkm/J554ogM5SZtLbYNxwSp+rJJV3cc8TBUsDdPjSHMOT6/qdpUyoqFhEkGJtFIcdLyXreND4gdTTVIHAhdfhVPWcNeZsx2pnWPN5HASWexq1qNNx1xEY7Mq42S/YPWjDLmC8oAeS/F7B2kThDKW7DMhtledPQmUvWrYMoo9d1LyfKwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA0BUqJQtP/cyk+Kr7SaZxGm/XQU2jWI3xGVjcRI0CnIuKka0nF0FrnN6K4vTc6ufU9IGwwDMdueP/ufZv6fv4o2wCn7LYMPQgviG0Kg3rqR3MjagrMZgt3x8G78lLnIviHrQfKzFv8ecsG1SBnIgdATaO5Xg5MLoXncTr24nWwEki1n0FUfMZJ5DGIiTTU0uj1A3gFeONRPYAWA20E+qBPOHbTgGQR4xBkhta8jeArazLNP+z3S3z+PA3k8BKzr/JvyuHvQOzZhx1YY3B+4jBnA4bMxselrJLa3Tvr2JZRfkPVMBPSox7AIC2nP7n+disMywun60zpcLLrzmVm803YwIDAQABAoIBAQCiZ0JjczbVcXl4k4pY60zvQ0cPstbAcNgx3kbcQeo94DMgi7Is1mR1JMPlaxNZS+PLicU33S1gPnEC5TJnvr9KXSyXE/DkFEXR32BMSl0ZuyZBkXVU2d9De2XglI0s+4haSl7hSU6D0Nd95TDbyOhKYBibRH/uZe+0tVMYH7a6j3Hup9wo6ZBIZwTa3plBjAwCSrSPQUDc5ZvT6cVgz69v2nQ0gdZ8++Wdyy5dZkzhGr1G/8SwqGOe9no/mAV0kjfzJf9NFZirjDCPt+t3pO7E9BUViUJCqa+XMwljkn8MwNZTrmyJYri45Z12wSKAqAVSDXMf27kn9wifQo1qMj0hAoGBAO3nUARXwPfvFAlePMIZmL2JhEOCW0psK0PMWg8mhk1u8rmPRDOoPfll+DSnlczX5LcVvQuM2WsCIMi0zybc5YVFmCo/IMjiTDLq5roetml0+6QS6Y8c8iczs3launaIIt+F/1Mce6L8klUlFB0zF4aKvV5S6+oLj5TJNfgJqZlZAoGBAN/pJqS+TwgyRlFkFe5zYO6HCwYUW+g/Y8hHkTRDrixhJf6+/+6M+dix8akTi2Y45ndj7qWhCJwGpS+PBcZ7AhgBMDdUPcGKBnjWSJAB+ddB38Fws1QElh6B/r03hJaPl5H4jQiDUBCkfwzanEyVjcbs0Nfw1L3OsLvtS5zJTgMbAoGAcKqURYo9k+2AgrNDePTgVhrTLZmFnGg/0RrtJ7Gp9u/tOZ20wfYSa5M0CdO36MvxwBcmcVrh+ICIgCTI2fHRLN15o8BDyX8KcS632DsFTkodhmWCgMlHkPM2MumZ1trAETWHZpfdoaGVt4cY0H9Ky+fWqN4CZdPVyrPDwFTrIfkCgYBeb959k0qQAWxI/baGSKF0WP6cRM/yp3G1UgH7EiSO0TaOOA6HlWv3Ki3rirO7nHoPltVbhAy2idL3uRHNgaoDZ9TnMR+O1mEea/pUypCOalkuJBNudzS9j0Ral+TS/6MEzNjm40NMkaSITlensVgHs2/t88Q2fctqp43BheHiSwKBgChvhl4ipaD4cihnWnD5mUXDbpAgjtfJM4PNGKonqJNaT08MhSm1I4sjBZkwQIpzmMqP4R/q0rHb0XjBLlhOZkujaYIn2AMuuE4nregQNBOWwn1Ydj1d0Gu+fhcZEqoulf5Pru3nJ4OJfx2n9FHqYlnoq0FMjFr9MxAdh3Rz5BPb',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => 'wx8caefe996e1c08fe',  // 公众号 app id
        'mch_id'      => '1502850861',  // 第一步获取到的商户号
        'key'         => 'IOh2Lm0gyXe7lV6n4es9Dq6h7f9Aaqty',  //刚刚设置的 API 密钥
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];