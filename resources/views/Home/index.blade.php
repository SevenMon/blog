@extends('layouts.default')
@section('title','首页')
@section('content')
    {{--<h1 class="title">
        <i class="fa fa-camera-retro fa-lg"></i>
    </h1>--}}
    <div class="content-wrapper">
        <section class="article-wrapper">
            <a href="#" class="article-item-a">
                <article class="article-item">
                    <div class="article-content">
                        <header class="article-header">
                            移动端图片上传旋转、压缩的解决方案
                        </header>
                        <span class="create-time">
                            <i class="fa fa-calendar-o"></i>
                            2017-06-17
                        </span>
                        <span class="category">
                            <i class="fa fa-folder-o"></i>
                            vue
                        </span>
                        <span class="look">
                            <i class="fa fa-eye"></i>
                            1788
                        </span>
                        <span class="like">
                            <i class="fa fa-heart"></i>
                            33
                        </span>
                        <p class="article-descrip">
                            在手机上通过网页 input 标签拍照上传图片，有一些手机会出现图片旋转了90度d的问题，包括 iPhone 和个别三星手机。这些手机竖着拍的时候才会出现这种问题，横拍出来的照片就正常显示。因此，可以通过获取手机拍照角度来对照片进行旋转，从而解决这个问题。
                        </p>
                    </div>
                    <div class="article-img" style="background-image: url('/img/head_img.jpeg')">
                    </div>
                </article>
            </a>
            <article class="article-item">
                <div class="article-content">
                    <header class="article-header">
                        移动端图片上传旋转、压缩的解决方案
                    </header>
                    <span class="create-time">
                        <i class="fa fa-calendar-o"></i>
                        2017-06-17
                    </span>
                    <span class="category">
                        <i class="fa fa-folder-o"></i>
                        vue
                    </span>
                    <span class="look">
                        <i class="fa fa-eye"></i>
                        1788
                    </span>
                    <span class="like">
                        <i class="fa fa-heart"></i>
                        33
                    </span>
                    <p class="article-descrip">
                        在手机上通过网页 input 标签拍照上传图片，有一些手机会出现图片旋转了90度d的问题，包括 iPhone 和个别三星手机。这些手机竖着拍的时候才会出现这种问题，横拍出来的照片就正常显示。因此，可以通过获取手机拍照角度来对照片进行旋转，从而解决这个问题。
                    </p>
                </div>
                <div class="article-img" style="background-image: url('/img/head_img.jpeg')">

                </div>
            </article>
        </section>
    </div>
@endsection