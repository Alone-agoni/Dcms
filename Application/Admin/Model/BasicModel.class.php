<?php
/**
 * User: Wei.Ding
 * Date: 2017/4/22
 * Time: 23:11
 */
namespace Admin\Model;

use Think\Model;

class BasicModel extends Model
{
    public function saveData($data)
    {
        if ($this->create($data)) {
            if ($this->save($data)) {
                return C("STATUS_TRUE");
            }else{
                return C("STATUS_FALSE");
            }
        } else {
            return $this->getError();
        }
    }
}