<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','晓峰的博客')</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
<div class="main">
    <div class="header">
        <div class="header-wrapper">
            <div class="logo-wrapper">
                <span class="logo">晓峰的博客</span>
            </div>
            <div class="menu-wrapper">
                <nav class="menu">
                    <ul class="menu-ul">
                        <li class="menu-li">首页</li>
                        <li class="menu-li">分类</li>
                        <li class="menu-li">归档</li>
                        <li class="menu-li">标签</li>
                        <li class="menu-li">开源</li>
                        <li class="menu-li">关于</li>
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
            <span class="time">2018</span>
            <span class="love-icon">

            </span>
            <span class="name">SevenMon</span>
        </div>
    </div>
</div>
</body>
</html>