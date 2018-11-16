<?php
/**
 * Created by PhpStorm.
 * User: hyc
 * Date: 2017/11/22
 * Time: 14:11
 */
namespace tree;


class Tree {

    /**
     * 无限级分类排序（多维数据集）
     * @param array $data 数据集
     * @param int $id     主ID 默认 0
     * @param string $idName   主ID key ( id )
     * @param string $keyName  上级key 名称
     * @param string $childName  下级放入 $childName 下
     * @return array
     */
    public static function tree($data = [],$id=0,$idName='id',$keyName='pid',$childName='child'){
        $row = [];
        foreach($data as $key => $value){
            if($value[$keyName] == $id){
                unset($data[$key]);
                $child = self::tree($data,$value[$idName],$idName,$keyName,$childName);
                if($child) {
                    $value[$childName] = isset($value[$childName]) ? array_merge($value[$childName],$child) : $child;
                }
                $row[] = $value;
            }
        }
        return $row;
    }


    /**
     * 无限级分类排序（一维数据集）
     * @param array $data           数据集
     * @param int $id               开始主ID
     * @param string $idName        主ID key
     * @param string $keyName       上级 key 名
     * @param string $title         标题 key
     * @param string $procon        拼接名字（默认空）
     * @param string $top           头标题拼接字符
     * @param string $con           下级拼接字符
     * @return array
     */
    public static function treesymbol($data = [],$id=0,$idName='id',$keyName='pid',$title = 'title',$procon = '',$top = '├ ',$con = '─ '){
        $row = [];
        foreach($data as $key => $value){
            if($value[$keyName] == $id){
                unset($data[$key]);
                $child = self::treesymbol($data,$value[$idName],$idName,$keyName,$title,$procon.$con,$top,$con);
                $value[$title] = $top.$procon.$value[$title];
                $row[] = $value;
                if($child) $row = array_merge($row,$child);
            }
        }
        return $row;
    }


}