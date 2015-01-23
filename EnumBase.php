<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnumBase
 *
 * @author liyunfang <381296986@qq.com>
 * @date 2015-01-23
 */
abstract class EnumBase {
    //protected static $names = array();
    /**
     * 验证合法性
     * @param type $value
     * @return type
     */
    public static function validate($value)
    {
        $childClass  =  new static();
        $names = $childClass::$names;
        return isset($names[$value]);
    }

    /**
     * 获取枚举描述
     * @param type $value
     * @return string
     */
    public static function getName($value)
    {
        if(!empty($value))
        {
            $childClass  =  new static();
            $names = $childClass::$names;
            if(isset($names[$value]))
            {
                return $names[$value];
            }
        }
        return '未知';
    }
}
