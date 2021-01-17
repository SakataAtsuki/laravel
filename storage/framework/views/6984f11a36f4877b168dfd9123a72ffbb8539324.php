<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理画面トップ</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body id="admin">
    <div class="admin-index-header">
        <span class="admin-title">管理画面メインメニュー</span>
        <div>
            <span class="admin-welcome">ようこそ<?php echo e(Auth::guard('administer')->user()->name_sei . Auth::guard('administer')->user()->name_mei); ?>さん</span>
            <a href="<?php echo e(route('admin.logout')); ?>" class="admin-index-header-button">ログアウト</a>
        </div>
    </div>
    <div class="admin-index-main">
    </div>
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/laravelbbs/resources/views/admin/index.blade.php ENDPATH**/ ?>