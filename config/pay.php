<?php
return [
    'alipay' => [
        'app_id' => '2016101500694296',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt9dVQIgl75DL5sBnxdx3YvMmm9DG0wI97vqIEROu2BHyEBScU3RJEBlWRmmcQdKw2TqnwH1yFg+KgzoBSRg/fr6JkGk+2bVOL9s3/RXxEW0kNZBSS/1CX2zUn/+h4IGpKAx4BhYSRvlSxvUbI2374HV4T3uKj8TfaA0RRf5jyG9nriNTUTkfRSiXRYvotuRyOUul0FLtB1u7pv1Tp7c0vnq4+ttmGP2ZAAu+bSWERkQF6Y25lOGwwtCmxFDLI4JXL6OU47kiWt7ZfEQXigfbX9z/Rjk2/HUzrxFVT4DHgZyeDFWyg3Sho5WwncKEYrgamndNZ3fo91/b3TwADxNTewIDAQAB',
        'private_key' => 'MIIEowIBAAKCAQEAxkQIsogzC2jTBptOMsTRApm6EGXvBr0VDg3U7tdkJNvXy+wIcivcwy8J5B31mmRN/e7nmbEWVzAACCXpYzpNro9GlA5KIMwVlfIwrcHWbKOQtKVDj6wRZiqkKyQjRRA0+zUfhXUBFRkJU9Al9NEmc3YXuVBIjsW6PMU8ssstNwXhKexFEapnEiyEkL9qjND5rt/1p/eCJKTBXQxBxuqS9YqDFfLRmYUen/EoGLG4fvpcVduR0k6r+i3QQHSXIv4Sgy8AiWCoSV58Aq+RPYGI4BEL+guuhkHPKBHG97BJUUZY3VHP+FTZMi/qWVFsYXLTA3AKJURy0osf7BK9Ns2KDwIDAQABAoIBAB8GIFJHa61aXsMG5Eqfb5E3mtzcBnYIelXzpiElhR8bY34eVgf/gxDruGGAqqDZFzcn/geXpUZJVYfw3r9PLT6mXsXmIoVVSf9noWRfE312brtFrPe7VhGllIDHq9kvuwqf+mm4sE2r2EDMLlRLsfeZQAcYX/IvUIAX4PKdRlr4gprMOmBFlC3AiE2u3QW5ttkwC22xWGaCMbf3CqXzQ/h0MVDkx/XLbBQlLrTdaU4Q+3KXm4NkQkP7oMFXyCUAjdf6GNzb4rHECT7Cw8m9/W5PhxNJPC6YZ+IN7iIaR5mDIWyrLM8uuMthLIqGI+QXGAPjhyOZD9HjqILmx9UPPYkCgYEA/AtM7ieukEA8+Xspl5/vx1y9GAG8NyV6NAXvoYRqCCCUHybh6wMif9I9Q24l2ZdcxUaodwm8ozhTl8f0ldUHQK2V/k7ffQ6EETHU9cOG7dStCAbifMCoNYC8DAHZboudcGYYfwHDr1gAAVXxuf4tMI5OdPzSPSwCoIuU4Z63100CgYEAyWCnpeLFO504XDj6rvz813s6im2FNRUeg5m+xe4HLA2AJPLu1EzCLvpn27plLFRS/IvdmiwBZ5ZYBJKMZlZCcBB2g2PzPOmnZEfN7+pFHf7CngD7n91mg1mNsZK/xVVuUgqEpNs4BQdYxv7dByIEmiuM5lX/13b3RnimIWVVEMsCgYBYoYit/tpN86j9eigIH7/r9VqxhHqxUcaFYMkBnVTEAuDTi5LKV9Hb7QyKF8PLnoSLAuve4FerdfU/XJtPzRe90Mz8HrRMf7xFZ6ahvd5G6BDoz7L5d64vElQOTOAvFX2Jtv1KPE6Z7HIkBhr48r7lYkWIshckV8OcvTjfljbDyQKBgEyWewxHI9YZZF8GuKimxQ666jfNkXTv1EwexASJE6c4dz0WO6j4jH3LdIaH7ISgiXNNSnmhNOONtWn/xnABbIEscbZk5BSNlME54ePWCHVw99mZ7BkP3jYkcBRSCKdnZ27CW1JLoZGgCq6cLbnRwUhVOeA8YvIyZ7cgmaZn4KNjAoGBAPUMh3NpX2GTEW7Mq4NQwd4B72timQBfQNaBAs4MMT/sGk+2rSD5QRUwSTwovsNVs0SNtrPv2TRMcGRCpjujwTtY6lEyyu/NhNbUyJbe3rYaQdZh4jDoANvGYFIyuZYwEUiXlEmfwiJ8ZG1kCxqXAHMHDbp4BxuNKu1ZRm/3z2r/',
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],


    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
