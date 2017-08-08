<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $User = M('poetries');
        $list = $User
            -> join('poets on poetries.poet_id = poets.id')
            -> limit(10)
            -> select();

        $this->assign('list',$list);
        $this -> display();
//        var_dump($list);
    }
}