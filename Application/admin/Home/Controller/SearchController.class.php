<?php
namespace Home\Controller;

use Think\Controller;
use Think\Page;

class SearchController extends Controller
{
    public function index()
    {
        if (isset($_GET['submit']) && $_GET['keywords'] !== '') {
            $keywords = $_GET['keywords'];
            $User = M('poets');
            //模糊查找条件
            $map['poetries.title|poets.name'] = array('like', '%' . $keywords . "%");

            //数据分页
            import('ORG.Util.Page');// 导入分页类
            $count = $User->join('poetries on poets.id = poetries.poet_id')->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
            $Page = new Page($count, 10);// 实例化分页类 传入总记录数
            $Page->setConfig('first', '首页');
            $Page->setConfig('last', '末页');
            $Page->setConfig('prev', '<i class="material-icons">chevron_left</i>');
            $Page->setConfig('next', '<i class="material-icons">chevron_right</i>');
            $Page->setConfig('link', 'indexpagenumb');//pagenumb 会替换成页码
            $Page->setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
            $show = $Page->show();// 分页显示输出
            // 进行分页数据查询
            $list = $User
                ->join('poetries on poets.id = poetries.poet_id')
                ->where($map)
                ->order('poetries.updated_at desc')
                ->limit($Page->firstRow . ',' . $Page->listRows)
                ->select();
            $this->assign('page', $show);// 赋值分页输出
            $this->assign('list', $list);
            $this->display();
        } else {
            $this->error('搜索内容不能为空！');
        }


    }


}