# phpEnum
PHP enumeration helper classes


1、Increased EnumBase a class inheritance  

class EnumUserStatus extends EnumBase{  
    const STATUS = 'status';    
    const INACTIVE = 0;  
    const ACTIVE   = 1;  
    const DELETED  = 2;  
    
    protected static $status_list = array(
        self::INACTIVE => '不活跃',
        self::ACTIVE => '活跃',
        self::DELETED => '已删除',
    );
}

2、How to use  

  $active = EnumUserStatus::ACTIVE;  
  $activename = EnumUserStatus::getName($active,EnumUserStatus::STATUS);  
  
  var_dump($active);  
  var_dump($activename);  
  exit();  


