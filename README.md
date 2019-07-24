# Clean Blog Theme                                                                                             
                                                                                                               
Design by: [Start Bootstrap](https://startbootstrap.com/)                                                      
                                                                                                               
### Installation                                                                                               
                                                                                                               
composer.json                                                                                                  
                                                                                                               
~~~                                                                                                            
{                                                                                                              
    "require": {                                                                                               
        "basic-app/theme-clean-blog-assets": "1.0"                                                             
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
                                                                                                               