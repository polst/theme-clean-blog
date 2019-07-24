# Clean Blog Theme

Design by: [Start Bootstrap](https://startbootstrap.com/)

### Installation

composer.json

~~~
{
    "require": {
        "phptheme/core": "dev-master",
        "basic-app/theme-clean-blog-assets": "1.0"
    },
    "scripts": {
        "post-update-cmd": [
            "@composer dump-autoload",
            "PhpTheme\\Core\\Composer::postUpdate"
        ]                
    },
    "extra": {
        "PhpTheme\\Core\\Composer::postUpdate": {
            "copyFiles": [
                {
                    "vendor/basic-app/theme-clean-blog-assets/css": "public/startbootstrap-clean-blog/css",
                    "vendor/basic-app/theme-clean-blog-assets/img": "public/startbootstrap-clean-blog/img",
                    "vendor/basic-app/theme-clean-blog-assets/js": "public/startbootstrap-clean-blog/js",
                    "vendor/basic-app/theme-clean-blog-assets/scss": "public/startbootstrap-clean-blog/scss",
                    "vendor/basic-app/theme-clean-blog-assets/vendor": "public/startbootstrap-clean-blog/vendor"
                }
            ]
        }
    },    
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "basic-app/theme-clean-blog-assets",
                "version": "1.0",
                "source": {
                    "url": "https://github.com/BlackrockDigital/startbootstrap-clean-blog",
                    "type": "git",
                    "reference": "master"
                }
            }
        }
    ]
}
~~~

app/Config/Autoload.php

~~~
{
    public function __construct()
    {
        ...
        $psr4 = [
            ...
            'BasicApp\CleanBlogTheme' => dirname(dirname(COMPOSER_PATH)) . '/vendor/basic-app/theme-clean-blog'
        ];
    }
}
~~~
