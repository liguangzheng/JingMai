<?php

namespace Mobile\Controller;

use Think\Controller;
use Mobile\Model\GoodsModel;

class GoodsController extends Controller {
    /**
     * 遍历
     */
    public function index() {
        $Goods = new GoodsModel ();
        // 数据库查询
        $selectQuery = $Goods->select ();
        // JSON结构输出
        $this->ajaxReturn ( $selectQuery, 'JSON' );
    }
    
    /**
     * 插入测试数据
     */
    public function insertTest() {
        $Goods = new GoodsModel ();
        $testObj ['name'] = 'iphone6s';
        $testObj ['type_id'] = '2';
        $testObj ['type_name'] = '手机';
        $testObj ['summary'] = '苹果手机';
        $testObj ['start_time'] = date ( 'Y-m-d' );
        // 数据对象创建
        $obj = $Goods->create ( $testObj );
        // 数据库插入
        $Goods->doAdd ( $obj );
    }
    
    /**
     * 数据库删除
     */
    public function deleteText() {
        $Goods = new GoodsModel ();
        // 数据库删除
        $Goods->doDelete ( 'name=\'iphone6s\'' );
    }
}