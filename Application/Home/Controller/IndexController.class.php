<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //查看文章
        $Data = M('poets');
        $list = $Data
            ->join('poetries on poets.id = poetries.poet_id')
            ->limit(0, 20)
            ->order('poetries.updated_at desc')
            ->select();
        $this->assign('list', $list);
//        var_dump($list[0]['name']);
        $this->display();
    }

    public function viewMore()
    {
        if (!empty($_GET['id'])) {
            $articleId = $_GET[id];
            $Data = M('poets');
            $list = $Data
                ->join('poetries on poets.id = poetries.poet_id')
                ->where('poetries.id=' . $articleId)
                ->select();
            $this->assign('list', $list);
            $this->display();
        }
        //上一首
        if ($_GET[lid]) {
            $Data = M('poets');
            $articleId = $_GET[lid] - 1;
            $list = $Data
                ->join('poetries on poets.id = poetries.poet_id')
                ->where('poetries.id=' . $articleId)
                ->select();
            $this->assign('list', $list);
            $this->display();
        }
        //下一首
        if ($_GET[rid]) {
            $Data = M('poets');
            $articleId = $_GET[rid] + 1;
            $list = $Data
                ->join('poetries on poets.id = poetries.poet_id')
                ->where('poetries.id=' . $articleId)
                ->select();
            $this->assign('list', $list);
            $this->display();
        }
    }
}