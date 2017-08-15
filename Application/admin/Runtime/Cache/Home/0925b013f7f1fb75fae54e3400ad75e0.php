<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/ThinkPHP_study/Public/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="/ThinkPHP_study/Public/css/ghpages-materialize.css">
    <link rel="stylesheet" href="/ThinkPHP_study/Public/css/mystyle.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
    <nav class="top-nav red">
        <div class="nav-wrapper container" style="font-size: small">
            <a class="page-title hide-on-large-only" href="/ThinkPHP_study/admin.php">后台管理</a>

            <a class="page-title circle hide-on-small-only" href="/ThinkPHP_study/index.php">网站首页</a>
            <ul class="right hide-on-small-only">
                <li><a class="page-title" href="/">管理员</a></li>
                <li><a class="page-title" href="/">修改密码</a></li>
            </ul>


        </div>
    </nav>
    <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons">menu</i></a></div>

    <ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0px);">
        <div class="red" style="line-height: 120px; text-align: center; color: white; font-size: xx-large">
            后台管理
        </div>

        <li><a class="subheader">常用操作</a></li>
        <li class="bold active"><a href="#" class="waves-effect waves-teal"><i class="material-icons">book</i>文章管理</a></li>
        <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">format_list_bulleted</i>分类管理</a></li>
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



    <main>
        <div id="editor" style="overflow: hidden">
            <p>欢迎使用 <b>wangEditor</b> 富文本编辑器</p>
        </div>
    </main>
    <!-- 注意， 只需要引用 JS，无需引用任何 CSS ！！！-->
    <script type="text/javascript" src="//unpkg.com/wangeditor/release/wangEditor.min.js"></script>
    <script type="text/javascript">
        var E = window.wangEditor
        var editor = new E('#editor')
        // 或者 var editor = new E( document.getElementById('#editor') )
        editor.create()
    </script>



<footer></footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/ThinkPHP_study/Public/js/materialize.min.js"></script>
<script src="/ThinkPHP_study/Public/js/init.js"></script>
</body>
</html>