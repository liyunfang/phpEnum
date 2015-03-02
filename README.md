# phpEnum
PHP enumeration helper classes


1、Increased EnumBase a class inheritance  
//建议每张表一个类    
class EnumUser extends EnumBase{  
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

  $active = EnumUser::ACTIVE;  
  $activename = EnumUser::getName($active,EnumUser::STATUS);  
  
  var_dump($active);  
  var_dump($activename);  
  exit();  


