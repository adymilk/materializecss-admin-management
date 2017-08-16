<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/ThinkPHP_study/Public/css/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="/ThinkPHP_study/Public/css/ghpages-materialize.css">
    <link rel="stylesheet" href="/ThinkPHP_study/Public/css/mystyle.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
        <nav class="nav top-nav red" style="padding-left: 5px; padding-right: 5px">
            <div class="nav-wrapper">
                <a href="/ThinkPHP_study/index.php" class="brand-logo hide-on-small-only"><i class="material-icons">cloud</i>Logo</a>
                <ul class="right " id="top-menu">
                    <li data-target="modal1" class="modal-trigger"><a href="#!"><i class="material-icons">search</i></a></li>
                    <li><a href="#!"><i class="material-icons">view_module</i></a></li>
                    <li><a href="#!"><i class="material-icons">refresh</i></a></li>
                    <li><a href="#!"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
    </nav>
    <div class="container">
        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only">
            <i class="material-icons">menu</i></a></div>

    <ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0px);">
        <div class="red" style="line-height: 120px; text-align: center; color: white; font-size: xx-large">
            管理员
        </div>

        <li><a class="subheader">常用操作</a></li>
        <li class="bold active"><a href="/ThinkPHP_study/admin.php" class="waves-effect waves-teal"><i class="material-icons">book</i>文章管理</a>
        </li>
        <li class="bold"><a href="#" class="waves-effect waves-teal">
            <i class="material-icons">comment</i>评论管理</a>
        </li>

        <li class="bold"><a href="/ThinkPHP_study/admin.php/Home/User/newAddArticle"><i class="material-icons">add</i>新增文章</a></li>

        <li><a class="subheader">系统管理</a></li>
        <li class="bold active"><a href="#" class="waves-effect waves-teal"><i class="material-icons">book</i>系统设置</a>
        </li>
        <li class="bold active"><a href="#" class="waves-effect waves-teal"><i class="material-icons">book</i>清除缓存</a>
        </li>
        <li class="bold active"><a href="#" class="waves-effect waves-teal"><i class="material-icons">book</i>数据备份</a>
        </li>
        <li class="bold active"><a href="#" class="waves-effect waves-teal"><i class="material-icons">book</i>数据还原</a>
        </li>
        <li><a class="subheader">高级操作</a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="">
                    <a class="collapsible-header waves-effect"><i class="material-icons">keyboard_arrow_down</i>参与贡献</a>
                    <div class="collapsible-body" style="display: none;">
                        <ul>
                            <li><a class="waves-effect"
                                   href="https://github.com/adymilk/materializecss-admin-management" target="_blank"><i
                                    class="material-icons">info</i>贡献代码</a></li>
                            <li><a class="waves-effect"
                                   href="https://github.com/adymilk/materializecss-admin-management/pulls"
                                   target="_blank"><i class="material-icons">code</i>代码评审页面</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header waves-effect"><i class="material-icons">keyboard_arrow_down</i>社交网络</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a class="waves-effect" href="http://weibo.com/martincz" target="_blank"><i
                                    class="material-icons">people</i>Blog</a></li>
                            <li><a class="waves-effect" href="https://github.com/adymilk" target="_blank"><i
                                    class="material-icons">people</i>GitHub</a></li>
                            <li><a class="waves-effect" href="#!" target="_blank"><i class="material-icons">people</i>Google+</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</header>

<!--<button data-target="modal1" class="btn modal-trigger">Modal</button>-->
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <form action="/ThinkPHP_study/admin.php/Home/Search/index" method="get">
        <h4>搜索</h4>
        <div class="row">
            <div class="input-field col s12">
                <input name="keywords" id="text" type="text" class="validate">
                <label for="text">输入关键词</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="waves-light btn" type="submit" name="submit"><i class="material-icons right">search</i>搜索</button>
    </div>
    </form>
</div>



    <main>
        <table style="width: 70%;" class="hide-on-small-only">
            <tr>
                <td style="float: right"><b>选择分类:</b></td>
                <td>
                    <select class="browser-default">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">选项 1</option>
                        <option value="2">选项 2</option>
                        <option value="3">选项 3</option>
                    </select>
                </td>
                <form action="/ThinkPHP_study/admin.php/Home/Search/index" method="get">
                    <td style="float: right"><b>关键词:</b></td>
                    <td>
                        <input name="keywords" id="keywords" type="text" placeholder="关键词"
                               style="text-align: center; margin-bottom: 0px">
                    </td>
                    <td><input type="submit" name="submit" value="搜索" class="red btn"></td>
                </form>
            </tr>

        </table>
        <table style="width: 30%;" class="hide-on-small-only">
            <tr>
                <td><a href="/ThinkPHP_study/admin.php/Home/User/newAddArticle"><i class="material-icons">add</i>新增文章</a>
                </td>
                <td><a href="#!"><i class="material-icons">delete</i>批量删除</a></td>
                <td><a href="#!"><i class="material-icons">update</i>更新排序</a></td>
            </tr>

        </table>

        <hr>
    <div class="row">
        <div class="col s12">
            <table class="bordered centered highlight responsive-table">
                <thead>
                <tr>
                    <th>
                        <input onclick="swapCheck()" type="checkbox" class="filled-in" id="filled-in-box"/><label
                            for="filled-in-box"></label>
                    </th>
                    <th>ID</th>
                    <th>发表时间</th>
                    <th>文章标题</th>
                    <th>作者</th>
                    <th>点击次数</th>
                    <th>操作</th>
                </tr>
                </thead>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td>
                            <input type="checkbox" class="filled-in" id="<?php echo ($vo["id"]); ?>"/><label for="<?php echo ($vo["id"]); ?>"></label>
                        </td>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["created_at"]); ?></td>
                        <td><a style="color: #000000" href="/ThinkPHP_study/admin.php/Home/User/reviewArticle?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
                        </td>
                        <td><?php echo ($vo["name"]); ?></td>
                        <td>1000+</td>
                        <td>
                            <a href="/ThinkPHP_study/admin.php/Home/User/deleteArticle?id=<?php echo ($vo["id"]); ?>"><i class="material-icons">delete</i>删除</a>&nbsp;&nbsp;
                            <a href="/ThinkPHP_study/admin.php/Home/User/editArticle?id=<?php echo ($vo["id"]); ?>"><i class="material-icons">edit</i>编辑</a>
                        </td>

                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

            </table>
            <script>
                //checkbox 全选/取消全选
                var isCheckAll = false;
                function swapCheck() {
                    if (isCheckAll) {
                        $("input[type='checkbox']").each(function () {
                            this.checked = false;
                        });
                        isCheckAll = false;
                    } else {
                        $("input[type='checkbox']").each(function () {
                            this.checked = true;
                        });
                        isCheckAll = true;
                    }
                }
            </script>
            <ul class="pagination">
                <?php echo ($page); ?>
            </ul>
        </div>
    </div>
</main>


<footer></footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/ThinkPHP_study/Public/js/materialize.min.js"></script>
<script src="/ThinkPHP_study/Public/js/init.js"></script>
</body>
</html>