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
    <nav class="top-nav blue">
        <div class="nav-wrapper">
            <div class="container">
                <a class="page-title" href="/">后台管理系统</a>
                <a href="/ThinkPHP_study/index.php" data-activates="nav-mobile" class="top-nav waves-effect waves-light circle hide-on-small-only" style="float: right"><i class="material-icons">前台 fast_forward</i></a>
            </div>
        </div>
    </nav>
    <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons">menu</i></a></div>
    <ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0px);">
        <li class="logo">
            <a id="logo-container" href="/" class="brand-logo">
                <img src="https://download.mokeedev.com/static/images/common/xlogo.png.pagespeed.ic.a7fdnsB4lA.webp" style="width: 64px; height: 64px;" alt="">
        </a>
        </li>
        
            
        <li class="search">
            <div class="search-wrapper card">
                <input id="search"><i class="material-icons">search</i>
                <div class="search-results"></div>
            </div>
        </li>
        <li style="padding-top: 20px;"><a class="subheader">常用操作</a></li>
            <li class="bold active"><a href="#" class="waves-effect waves-teal"><i class="material-icons">book</i>文章管理</a></li>
        <li class="bold"><a href="#" class="waves-effect waves-teal"><i class="material-icons">format_list_bulleted</i>分类管理</a></li>
        <li><a class="subheader">高级操作</a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="">
                    <a class="collapsible-header waves-effect"><i class="material-icons">keyboard_arrow_down</i>参与贡献</a>
                    <div class="collapsible-body" style="display: none;">
                        <ul>
                            <li><a class="waves-effect" href="http://wiki.mokeedev.com/Contributing_code" target="_blank"><i class="material-icons">info</i>贡献代码</a></li>
                            <li><a class="waves-effect" href="https://review.mfunz.com/" target="_blank"><i class="material-icons">code</i>代码评审页面</a></li>
                            <li><a class="waves-effect" href="http://www.mokeedev.com/device-maintainer" target="_blank"><i class="material-icons">build</i>设备支持维护</a></li>
                            <li><a class="waves-effect" href="http://www.mokeedev.com/developer-application" target="_blank"><i class="material-icons">developer_mode</i>适配版本接口</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header waves-effect"><i class="material-icons">keyboard_arrow_down</i>社交网络</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a class="waves-effect" href="http://weibo.com/martincz" target="_blank"><i class="material-icons">people</i>Weibo</a></li>
                            <li><a class="waves-effect" href="https://github.com/MoKee" target="_blank"><i class="material-icons">people</i>GitHub</a></li>
                            <li><a class="waves-effect" href="https://plus.google.com/+MokeedevTeam" target="_blank"><i class="material-icons">people</i>Google+</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</header>
<hr>
<main>
    <div class="row">
        <div class="col s12">
            <a class="waves-effect waves-light blue btn"><i class="material-icons left">select_all</i>全选</a>
            <a class="waves-effect waves-light red btn"><i class="material-icons left">delete</i>删除</a>
        </div>
        
    </div>
    <div class="row">
        <div class="col s12">
            <table class="bordered centered highlight responsive-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>发表时间</th>
                    <th>文章标题</th>
                    <th>作者</th>
                    <th>上线</th>
                    <th>操作</th>
                </tr>
                </thead>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td>
                            <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" /><label for="filled-in-box"></label>
                            <?php echo ($vo["id"]); ?>
                        </td>
                        <td><?php echo ($vo["created_at"]); ?></td>
                        <td><a href="#"><?php echo ($vo["title"]); ?></a></td>
                        <td><?php echo ($vo["name"]); ?></td>
                        <td>
                            <!-- Switch -->
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </td>
                        <td><!-- Dropdown Trigger -->
                            <a class='dropdown-button' data-beloworigin="true" href='#' data-activates='dropdown1'><i class="material-icons">more_vert</i></a>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>

                                <li><a href="#!"> <i class="material-icons left">visibility</i>查看</a></li>
                                <li><a href="#!"> <i class="material-icons left">edit</i>编辑</a></li>
                                <li><a href="#!"><i class="material-icons left">delete</i>删除</a></li>
                            </ul></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

            </table>
            <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
        </div>
    </div>
</main>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/ThinkPHP_study/Public/js/materialize.min.js"></script>
<script src="/ThinkPHP_study/Public/js/init.js"></script>
</body>
</html>