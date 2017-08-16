<?php
namespace Home\Controller;

use Think\Controller;
use Think\Page;

class UserController extends Controller
{
    public function index()
    {

        $this->display();
    }

    //新增文章
    public function newAddArticle()
    {
        $this->display();
    }

    //删除文章
    public function deleteArticle()
    {
        if (!empty($_GET['id'])) {
            $articleId = $_GET['id'];
            $Dao = M('poetries');
            $rs = $Dao->where('id=' . $articleId)->delete();
            if ($rs) {
                $this->success('删除成功！', '../');
            }

        }
    }

    //修改文章
    public function updateArticle()
    {
        if (!empty($_GET['id'])) {

            $articleId = $_GET['id'];
            $Dao = M('poetries');
            $Dao->title = $_POST['title'];
            $Dao->content = $_POST['content'];
            $rs = $Dao->where("id='$articleId'")->save();
            if ($rs) {
                $this->success('更新成功', '../');
            } else {
                $this->error('更新失败(可能是因为你并没有更改任何数据)', '../');
            }
        }
    }

    //查看文章
    public function reviewArticle()
    {
        //查看文章
        if (!empty($_GET[id])) {
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
            $articleId = $_GET[lid] - 1;
            $Data = M('poets');
            $list = $Data->join('poetries on poets.id = poetries.poet_id')->where('poetries.id=' . $articleId)->select();
            $this->assign('list', $list);
            $this->display();
        }
        //下一首
        if ($_GET[rid]) {
            $articleId = $_GET[rid] + 1;
            $Data = M('poets');
            $list = $Data->join('poetries on poets.id = poetries.poet_id')->where('poetries.id=' . $articleId)->select();
            $this->assign('list', $list);
            $this->display();
        }
    }

    //编辑文章
    public function editArticle()
    {
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $articleId = M('poets');
            $list = $articleId->join('poetries on poets.id = poetries.poet_id')->where("poetries.id='$id'")->select();
            $this->assign('list', $list);
            $this->display();
        }

    }

    //发布文章
    public function publishArticle()
    {
        $author = $_GET['author'];
        $poets = M('poets');
        $list = $poets->where("name='$author'")->select();
        //如果作者不存在，则在 poets（作者）表中创建他
        if (empty($list)) {
            $poets->name = $_GET['author'];
            $poets->add();
            $poet_id = $list[0]['id'];
            $poetries = M('poetries');
            $poetries->poet_id = $poet_id;
            $poetries->content = $_GET['content'];
            $poetries->title = $_GET['title'];

            if ($poetries->add()) {
                $this->success('发布成功！', '../Index');

            } else {
                $this->error('发布失败');
            }

        } else {
            $poet_id = $list[0]['id'];
            $poetries = M('poetries');
            $poetries->poet_id = $poet_id;
            $poetries->content = $_GET['content'];
            $poetries->title = $_GET['title'];

            if ($poetries->add()) {
                $this->success('发布成功！', '../Index');

            } else {
                $this->error('发布失败');
            }
        }


    }


}