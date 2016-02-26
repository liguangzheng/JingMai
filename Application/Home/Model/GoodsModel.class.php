<?php

/**
 * 商品模型
 */
namespace Home\Model;

use Think\Model;

class GoodsModel extends Model {
    
    /**
     * 添加
     *
     * @param unknown $data            
     */
    public function doAdd($data) {
        if (! empty ( $data )) {
            $this->add ( $data );
        }
    }
    
    /**
     * 删除
     *
     * @param unknown $where            
     */
    public function doDelete($where) {
        if (! empty ( $where )) {
            $this->where ( $where )->delete ();
        } else {
            $this->delete ();
        }
    }
    
    /**
     * 修改字段值
     *
     * @param unknown $where            
     * @param unknown $field            
     * @param unknown $value            
     */
    public function doUpdateField($where, $field, $value) {
        if (! empty ( $field )) {
            $this->where ( $where )->setField ( $field, $value );
        }
    }
    
    /**
     * 修改数据
     *
     * @param unknown $where            
     * @param unknown $field            
     * @param unknown $data            
     */
    public function doUpdateData($where, $field, $data) {
        if (! empty ( $field )) {
            $this->where ( $where )->field ( $field )->data ( $data )->save ();
        }
    }
    
    /**
     * 遍历
     *
     * @param array $where            
     */
    public function doSelect($where = '') {
        $this->where ( $where )->select ();
    }
}