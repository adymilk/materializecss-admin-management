<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class IndexController extends Controller {
    public function index(){

        $map = '';
        $Data = M('poets'); // 实例化Data数据对象  date 是你的表名
        import('ORG.Util.Page');// 导入分页类
        $count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 20);// 实例化分页类 传入总记录数
        $Page->setConfig('first', '首页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('prev', '<i class="material-icons">chevron_left</i>');
        $Page->setConfig('next', '<i class="material-icons">chevron_right</i>');
        $Page->setConfig('link', 'indexpagenumb');//pagenumb 会替换成页码
        $Page->setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询
        $list = $Data->join('poetries on poets.id = poetries.poet_id')->where()->order('poetries.updated_at desc')->limit($Page->firstRow . ',' . $Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
        $this->assign('list', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
//        var_dump($list);
    }

}