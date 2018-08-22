<?php

return [
    'alipay' => [
        'app_id'         => '2016091800537235',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA5GVBMVY6dAxNc5h71ZHjulfnpT2lMWU03GvW/LZNVS7uGz60abNwuwqQfAAcIStaVGccw3IQRQhUanX1K2RmaMgveuA6UyYqj8gD71ssC4bdwcqhen4vYqJ9cRF3/jyCo8Xc8mcoT70p+9bGAT2vNsqVKWrUCyT4/XYlrIb42HYxhK3LXTCH5GJnhfmBTwtUncvOHCxFn31wJODzPPxSFycSeu86jw5dVqHL08RIpWZqoaGPdqRUtR2CREkw/Irh/DgOn6JfdiE0As88R0v0oRRBnVFehSAyj3tOqsemr/zIjGOHAJk4cc2gaOMJCee7ML1pcOfUAcL/9J0ioMs5RQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEA5GVBMVY6dAxNc5h71ZHjulfnpT2lMWU03GvW/LZNVS7uGz60abNwuwqQfAAcIStaVGccw3IQRQhUanX1K2RmaMgveuA6UyYqj8gD71ssC4bdwcqhen4vYqJ9cRF3/jyCo8Xc8mcoT70p+9bGAT2vNsqVKWrUCyT4/XYlrIb42HYxhK3LXTCH5GJnhfmBTwtUncvOHCxFn31wJODzPPxSFycSeu86jw5dVqHL08RIpWZqoaGPdqRUtR2CREkw/Irh/DgOn6JfdiE0As88R0v0oRRBnVFehSAyj3tOqsemr/zIjGOHAJk4cc2gaOMJCee7ML1pcOfUAcL/9J0ioMs5RQIDAQABAoIBACDaW8VQBPp6Zo2xKmbvJFXCnUSMmH2BdFgcfwE86+TL6l4q5+KoeBe/jkb38RPoW4b2ihGnD6YOa64gp5KFT6HU4deH93vMaqTh/Ybpk21ZCf79ObsX+ZLzkp24CI2egKA0LvMDWa4WpLpgC31UNSbpfwlFH5k2yUYUP5kQlSz1ldmmU6W1ovyEGWm8d8pn5MSQyE/7uYgIt1NwTQ1rLo65x3nDre7EPqsc7zD/CnERMiFgxbp1AaTLadthfKKYd3DY2S0EQMxS8PpO04zboxn2yoLsAAWw0qTb9yVf7+h987MJb0/AYpO16M9yA1XSESiPYpxJI0jHxZoWyODdvGUCgYEA9TS0emipXM+jHsZEZnJb+IMraV1r3yWQbsmNl4Ts2hiaLD2HI8+YQ46zGzJHoS3DDA/vRfH34dZOa7JnQfiPgIVtMbxXlDVw9r4hwHkVA565zkMp2fF7QL31tokV+Gqzq7wqU7SnstIJ6Av7qBErUnVRoPrhk+Lfrid69stbAXsCgYEA7nMb56uURAiGUA7swrCXl/GGRdIc4TpmrobQBLEFSS4Jg1KjbtttXy6ewu+U1pt3gc1VcBLXu5KNn9lm+H2jZOeCYfu4kE7z0pC/P11gTRstRvW3qeXEtUTkLbmaSq2Dp+E4L6cWXSG/ToazpwnqMdwhGWwQosDtMab+82LE1D8CgYEAqoHPzh7hRkyMXWX5QlPbaF+t3EK+NBlm6eL1tpsUKERbUNAoHNrKQpAEM7Eu5gFwU/7wn262tC/VsEYKT3GMOA6P87nIHKNcvfdQeQq5dh71jVxeydKFpmtxZVDGGkv4TD84H6TLyCkOAnHyuNfXjCtQa+SI39EvQWbqtpqJ2ekCgYBWlE0pjU9EdKPwJbsp5dzlOrk6WNRLo1ztOd4GFhCJRcIGgNb+xYWs7cyPk1ZDpid6ZggDrZPPc6Mgy1tsFpJhbP4WfcPCAijd59jJNSpmVNvXzBhoBBmsh9siDyZKvz3ykwBHrS+dmUdRR++rUxpKCFesV2Si89IsGSqxTMeTGQKBgQDECX2tB8Rqhcg8zsf2rEuG6xyn+HNpwOWq+sctnIRJhC9KPWHFt4Sn8KAcqcmG+8hoit6W3gDnjaNtPqOzCwcmegAAdS12e5GGHrvqcR2L7fjjBd3MQnSYi+v+xlmHorX09yKEkFrW74a2WUkNZ3GHbcUtGTaniuSPTYOhiuqoLg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];