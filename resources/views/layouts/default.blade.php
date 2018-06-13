<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','晓峰的博客')</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/app.css?{{time()}}">
</head>
<body class="main-body">
<div class="main" id="app">
    <div class="header">
        <div class="header-wrapper">
            <div class="logo-wrapper">
                <span class="logo"><a href="#">晓峰的博客</a></span>
            </div>
            <div class="menu-wrapper">
                <nav class="menu">
                    <ul class="menu-ul">
                        <li class="menu-li"><a href="#"><i class="fa fa-fw fa-home"></i> 首页</a></li>
                        <li class="menu-li"><a href="#"><i class="fa fa-fw fa-th"></i> 分类</a></li>
                        <li class="menu-li"><a href="#"><i class="fa fa-fw fa-archive"></i> 归档</a></li>
                        <li class="menu-li"><a href="#"><i class="fa fa-fw fa-tags"></i> 标签</a></li>
                        <li class="menu-li"><a href="#"><i class="fa fa-fw fa-github"></i> 开源</a></li>
                        <li class="menu-li"><a href="#"><i class="fa fa-fw fa-user"></i> 关于</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>

    <div class="footer">
        <div class="footer-wrapper">
            <p class="footer-content">
                ©
                <span class="time">2018</span>
                <span class="love-icon">
                <i class="fa fa-heart"></i>
            </span>
                <span class="name">SevenMon</span>
            </p>
        </div>
    </div>
    <side-bar :showside="updateside" @updateSide="updateside"></side-bar>
    <top></top>
    <aside class="side">
        <div class="side-wrapper">
            <div class="author-info">
                <p class="head-img">
                    <img src="/img/head_img.jpeg" style="width: 100px;height: 100px" />
                </p>
                <p class="nickname">
                    SevenMon
                </p>
            </div>
            <nav class="navigation">
                <div class="nav-item">
                    <p class="num">85</p>
                    <p class="name">日志</p>
                </div>
                <div class="nav-item">
                    <p class="num">85</p>
                    <p class="name">日志</p>
                </div>
                <div class="nav-item">
                    <p class="num">85</p>
                    <p class="name">日志</p>
                </div>
            </nav>
            <div class="author-sign">
                <p class="sign">
                    个性签名：丶把自己的心带入你的位置，用三分沉静来体会你的咆哮。
                </p>
            </div>
            <div class="author-links">
                <span class="links-item">
                    <a class="link" title="QQ" target="_blank" href="http://www.baidu.com">
                        <i class="fa fa-fw fa-qq"></i>
                        QQ
                    </a>
                </span>
            </div>
        </div>
    </aside>
</div>
<script src="/js/app.js"></script>
</body>
</html>