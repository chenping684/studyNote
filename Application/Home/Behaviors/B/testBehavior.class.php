<?php
namespace Home\Behaviors\B;
class testBehavior {
    //行为执行入口
    public function run(&$param){
        $param = 'a';
        echo __METHOD__;
        return 'a';
    }
}