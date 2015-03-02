<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnumBase
 * 枚举基类
 * 枚举集合list必须安装顺序排列
 * @author liyunfang <381296986@qq.com>
 * @date 2015-01-23
 */
abstract class EnumBase {
    //protected static $names = array();
    /**
     * 验证枚举合法性
     * @param type $value
     * @return type  $field = 'status'
     */
    public static function validate($value, $field)
    {
        $field = strtolower($field);
        $childClass  =  new static();
        $list_name = $field.'_list';
        $list = $childClass::$$list_name;
        return isset($list[$value]);
    }

    /**
     * 获取枚举描述
     * @param type $value
     * @return string $field = 'status'
     */
    public static function getName($value , $field)
    {
        $field = strtolower($field);
        $childClass  =  new static();
        $list_name = $field.'_list';
        $list = $childClass::$$list_name;
        if(isset($list[$value]))
        {
            return $list[$value];
        }
        return '未知';
    }

    /**
     * 获取所有类型
     */
    public static function getAll($field){
        $field = strtolower($field);
        $childClass  =  new static();
        $list_name = $field.'_list';
        $list = $childClass::$$list_name;
        return $list;
    }
    
    /**
     * 获取该枚举所对应的显示颜色
     * @param type $value
     * @return string $field = 'status'
     */
    public static function getColor($value , $field)
    {
        $field = strtolower($field);
        $childClass  =  new static();
        $list_name = $field.'_colors';
        $list = $childClass::$$list_name;
        if(isset($list[$value]))
        {
            return $list[$value];
        }
        return '';
    }
    
//*********************************
//*    preorder_source 预约来源
//*    预约单来源([0:未知][1:APP安卓客户端][2:APP苹果客户端][3:电话呼入][4:WEB][5:微信]
//*********************************    
    const SOURCE = 'source';
    /**
     * 未知
     */
    const SOURCE_UNKNOWN = 0;
    /**
     * 安卓
     */
    const SOURCE_ANDROID   = 1;
    /**
     * 苹果
     */
    const SOURCE_APPLE  = 2;
    /**
     * 电话
     */
    const SOURCE_TEL  = 3;
    /**
     * web
     */
    const SOURCE_WEB  = 4;
    /**
     * 微信
     */
    const SOURCE_WECHAT  = 5;
    
    
    
    /**
     * 翻译状态
     * @var type 
     */
    protected static $source_list = array(
        self::SOURCE_UNKNOWN => '未知',
        self::SOURCE_ANDROID => '安卓',
        self::SOURCE_APPLE => '苹果',  
        self::SOURCE_TEL => '电话',  
        self::SOURCE_WEB => 'web',  
        self::SOURCE_WECHAT => '微信',  
    );
}
