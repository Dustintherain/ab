<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('sys.web.name')); ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <?php echo $__env->yieldContent('head'); ?>
</head>
<body>
<header class="navbar navbar-expand flex-md-row bd-navbar">
    <div class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row">
            <li class="nav-item d-sm-none" id="menu">
                <a class="nav-link nav-menu" href="#">
                    <i class="fa fa-bars fa-lg"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-logo-name" href="/"><i class="fa fa-cloud"></i><?php echo e(config('sys.web.name')); ?></a>
            </li>
        </ul>
    </div>

    <ul class="navbar-nav flex-row ml-auto d-md-flex">
        <li class="nav-item dropdown">
            <a class="nav-item nav-link dropdown-toggle" href="#" id="user_btns"
               data-toggle="dropdown"><?php echo e(auth()->user()->username); ?><span
                        class="d-none d-sm-inline">[<?php echo e(auth()->user()->group?auth()->user()->group->name:''); ?>]</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="user_btns">
                <a class="dropdown-item" href="/home/profile">修改密码</a>
                <a class="dropdown-item" href="/logout" onclick="return confirm('确认退出登录？');">退出登录</a>
            </div>
        </li>
    </ul>
</header>
<div class="container-fluid">
    <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar"><p></p>
            <div class="menu-item"style="background-color: #FFFFFF;border-top-left-radius:15px;border-top-right-radius: 15px;">
                <a href="/home" class="menu-link">
                    <i class="fa fa-globe"></i> 解析记录
                </a>
            </div>
            <div class="menu-item"style="background-color: #FFFFFF;border-bottom-left-radius:15px;border-bottom-right-radius: 15px;">
                <a href="/home/point" class="menu-link">
                    <i class="fa fa-cube"></i> 积分明细
                </a>
            </div>
        </div>
        <main class="col-12 col-md-9 col-xl-10 py-md-3 pl-md-5 bd-content">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/layer/2.3/layer.js"></script>
<script src="/js/main.js"></script>
<script>
    var showMenu = false;
    $("#menu").click(function () {
        if (showMenu) {
            $(".bd-sidebar").removeClass('openMenu');
            $(".bd-content").removeClass('moveRight');
            $(".bd-content").addClass('moveAnimation');
            showMenu = false;
        } else {
            $(".bd-content").removeClass('moveAnimation');
            $(".bd-sidebar").addClass('openMenu');
            $(".bd-content").addClass('moveRight');
            showMenu = true;
        }
    });
</script>
<?php echo $__env->yieldContent('foot'); ?>
</html><?php /**PATH /home/ftp/s/ser177390476772/ym/src/resources/views/home/layout/index.blade.php ENDPATH**/ ?>