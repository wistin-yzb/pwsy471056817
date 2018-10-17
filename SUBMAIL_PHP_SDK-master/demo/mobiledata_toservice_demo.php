<?PHP
    /*
     | Submail mobiledata/TOService API demo
     | SUBMAIL SDK Version 2.6 --PHP
     | copyright 2011 - 2017 SUBMAIL
     |--------------------------------------------------------------------------
     */
    
    /*
     |载入 app_config 文件
     |--------------------------------------------------------------------------
     */
    require '../app_config.php';
    
    /*
     |载入 SUBMAILAutoload 文件
     |--------------------------------------------------------------------------
     */
    
    require_once('../SUBMAILAutoload.php');
    
    /*
     |初始化 MOBILEDATATOService 类
     |--------------------------------------------------------------------------
     */
    
    $submail=new MOBILEDATATOService($mobiledata_configs);
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |添加运营商查询11位手机号码
     |多号码请重复执行 AddTo 方法
     |addTO和addressbook二选一，每次请求必须传递至少一个手机号码或地址簿中包含的手机号码
     |--------------------------------------------------------------------------
     */
    
    $submail->AddTo('13*********');
    
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |添加地址薄标识
     |可多次调用
     |addTO和addressbook二选一，每次请求必须传递至少一个手机号码或地址簿中包含的手机号码
     |--------------------------------------------------------------------------
     */
    
    $submail->AddAddressbook('subscribe');
    
    
    /*
     |调用 TOService 方法获取手机运营商分类
     |--------------------------------------------------------------------------
     */
    
    $TOService=$submail->TOService();
    
    
    /*
     |打印服务器返回值
     |--------------------------------------------------------------------------
     */
    
    print_r($TOService);
