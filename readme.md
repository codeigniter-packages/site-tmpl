# readme

使用docker的时候，必须需要设置config中的base_url，否则视图包中的css,js无法被加载

不要直接使用package加载主题中的视图，需要在application中的视图去加载ci代码之外的视图文件，使用那些视图需要转换传入的变量名称

全局变量增加append_js,append_css，便于类似upload页面需要加载额外的js,css的时候从主题中配置就可以了

controller中对于页面加载使用page_前缀，比如 page_login 加载登录页面,login 处理登录请求



# test
需要设置config/database
数据库连接

```
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => '192.168.50.37',
	'username' => 'root',
	'password' => '123456',
	'database' => 'tmpl',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

```

设置 config
设置 $config['sess_save_path'] ='/tmp';

# 加载其他composer 组件



# login

/login/weixinmini

不同的第三方登录提交的数据格式不一样
weixinmini需要从input中获取rawstring

且交互的时候是无会话状态的，所有每次请求都需要校验身份
所有使用jwt,在登录后返回ticket,每次发起请求都校验header中的ticket
然后返回数据

增加api控制器来管理，因为它们是无会话状态的

api控制器，校验ticket,获取input/post/rawstring中提交的数据


# composer

设置composer.json，增加以下配置 `"secure-http": false`,才可以获取到http协议的安装包
```
{
    "require": {
        "codeigniter-packages/weixin-mini":"dev-master",
        "codeigniter/framework":"3.1.4",
        "hautelook/phpass": "^1.1"
    },
    "config": {
        "secure-http": false,
        "vendor-dir": "/var/www/html/src/vendor"
    },
     "repositories": {
        "local": {
            "type": "composer",
            "url": "http://satis.atbyd.com"
        },
        "packagist": {
            "type": "composer",
            "url": "https://packagist.phpcomposer.com"
        }
    }
}

```


# 控制器

控制器中应该为表单设置好字段？列表设置好配置？
这样就可以切换到其他主题？


# 问题

1. ~~composer通过http加载的时候，codeigniter-packages/install-package没有触发安装事件~~
2. 需要创建一个theme-blank的空主题，便于测试或以后开发其他主题


