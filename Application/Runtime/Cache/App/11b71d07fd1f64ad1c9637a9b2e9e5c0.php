<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>绑定店铺</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" type="text/css" href="/wemall/Theme/waimai/Public/css/weui.min.css">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
</head>
<body>
<div class="container js_container">
    <div class="page slideIn msg">
        <div class="weui_msg">
            
            <?php if(empty($result)): ?><div class="weui_icon_area"><i class="weui_icon_success weui_icon_msg"></i></div>
                <div class="weui_text_area">
                    <h2 class="weui_msg_title">绑定店铺成功</h2>
                </div>
            <?php else: ?>
                <div class="weui_icon_area"><i class="weui_icon_warn weui_icon_msg"></i></div>
                <div class="weui_text_area">
                    <h2 class="weui_msg_title">绑定店铺失败</h2>
                </div><?php endif; ?>

            <div class="weui_opr_area">
                <p class="weui_btn_area">
                    <a href="javascript:wx.closeWindow();" class="weui_btn weui_btn_primary">退出</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    wx.closeWindow();
</script>
</body>
</html>