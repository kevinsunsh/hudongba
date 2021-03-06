<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0066)http://www.hdb.com/post/vote?tempId=106&sceneId=8&hdb_from=WapPost -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>发起投票活动</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta property="qc:admins" content="241045133560426375747716">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <link rel="dns-prefetch" href="http://img2.hudongba.com/">
    <link rel="dns-prefetch" href="http://static.hudongba.com/">
    <link rel="dns-prefetch" href="http://img1.hudongba.com/">
    <link rel="apple-touch-icon" href="http://img1.hudongba.com/static_v4/images/other/icon_72x72.png">
    <link rel="icon" type="image/x-icon" href="http://www.hdb.com/favicon.ico" size="16x16 24x24 32x32">
    <link rel="shortcut icon" type="image/x-icon" href="http://www.hdb.com/favicon.ico">
    <link rel="stylesheet" href="/Public/css/common.20160322_190354.min.css">
    <link rel="stylesheet" href="/Public/css/post.20160322_190354.min.css">
    <style>[ms-controller],[ms-important]{display:none}</style>
    <script src="/Public/js/jquery-1.7.2.min.js"></script>
    <script>
        var _pub_client = "mobile_ios";
        var _imgCdn="http://img1.hudongba.com";
        var _domain="http://www.hdb.com/";
        var _HDB_SOURCE_KEY = "hdb_source";
        var _HDB_POS_KEY = "hdb_pos";
        var _isNoAlertUser = "";// 详情页外链点击是否不弹出提示框
        var _fmShezhi;
        var dataForShare={
            weixin_icon:"http://img1.hudongba.com/images/share/other_weixin_msg_3.png",
            weixin_tl_icon:"http://img1.hudongba.com/images/share/other_weixin_tl_3.png",
            weixin_url:_domain,
            qq_icon:"http://img1.hudongba.com/images/share/other_qq_3.png",
            weibo_icon:"http://img1.hudongba.com/images/share/other_weibo_3.png",
            url:_domain,
            title:"互动吧，免费发布、传播活动，最大化享受微信传播红利。",
            description:"互动吧，免费提供活动发布、管理、传播、收款等全环节服务，通过互动吧，您可以轻松在微信朋友圈、聊天群里组织各类活动。",
            sms:"互动吧，免费提供活动发布、管理、传播、收款等全环节服务，通过互动吧，您可以轻松在微信朋友圈、聊天群里组织各类活动。http://hudong.ba",
            appId:"wx2eb9d27e0e24ec11",
            callback:function(){_$(_api3._shareCount,"info_id=0&info_type=other");}
        };
        var appInfo={
            app_v:4.0,
            info_v:2.1,
            system:"",
            pub_system:"mb"
        };
        var _config={
            _showBtn:1
        };

    </script>
    <script>
    </script>
</head>

<body>
<div class="outSide" id="post_form" style="min-height: 627px;">
    <!--投票标题 start-->
    <div class="post_title" id="post_vote_title_div"><span class="post_title_span">投票主题：</span>
        <p class="post_title_p">
            <input onblur="_postTemp._set(&#39;post_vote_title&#39;,this.value)" type="text" class="post_title_input" id="post_vote_title">
        </p>
    </div>
    <!--投票标题 end-->

    <!--投票详情 start-->

    <!--投票详情 start-->
    <div class="ke_container" id="ke_vote_container_div">
        <div class="ke_edit_top">投票详情</div>
        <div class="ke_edit"><textarea hidefocus="true" class="ke_edit_textarea" onblur="_postTemp._set(&#39;post_vote_content&#39;,this.value)" id="post_vote_content"></textarea></div>
    </div>
    <!--投票详情 end-->

    <!--投票选项 start-->
    <div class="post_vote_option_div">
        <div class="post_vote_option_div_top">投票选项</div>
        <div class="post_vote_option">
            <ul class="post_vote_option_ul" id="post_vote_option"><li class="post_vote_option_li"><span class="post_vote_option_s">选项1：</span><p class="post_vote_option_p"><input type="text" maxlength="25" onblur="_optionPost._onBlur(&#39;0&#39;)" id="post_vote_option_1" value=""></p></li><li class="post_vote_option_li"><span class="post_vote_option_s">选项2：</span><p class="post_vote_option_p"><input type="text" maxlength="25" onblur="_optionPost._onBlur(&#39;1&#39;)" id="post_vote_option_2" value=""></p></li><li class="post_vote_option_li"><span class="post_vote_option_s">选项3：</span><p class="post_vote_option_p"><input type="text" maxlength="25" onblur="_optionPost._onBlur(&#39;2&#39;)" id="post_vote_option_3" value=""></p></li></ul>
        </div>
        <div id="post_vote_option_add" onclick="_optionPost._add()" ontouchstart=""><p><img src="/Public/images/vote_add2x.png"></p></div>
    </div>
    <!--投票选项 end-->

    <!--投票结果 start-->
    <div class="ke_container_result" id="ke_vote_container_result_div">
        <div class="ke_edit_result_top">投票结果</div>
        <div class="ke_edit_result">
            <textarea hidefocus="true" id="post_vote_result" class="ke_edit_result_textarea" onpaste="_textArea._onPaste(this)" onblur="_textArea._onBlur(this,&#39;post_vote_result&#39;)"></textarea></div>
    </div>
    <!--投票结果 end-->

    <!--投票类型 start-->
    <div id="post_vote_option_select">
        <input type="hidden" value="1" id="post_vote_kind">
        <input type="hidden" value="1" id="post_vote_count">
        <span class="toupSpan">投票类型：</span>
        <select onchange="_votePostMB._kind(1)" id="post_vote_kind_select" style="width: 275px;"><option value="1" selected="selected">单选</option><option value="0">多选(无限制)</option><option value="2">多选(最多选2项)</option></select>
    </div>
    <!--投票类型 end-->

    <!--允许推荐-->
    <div ontouchstart="" onclick="_checkbox._check(&#39;post_vote_private&#39;)" class="form_checkbox">
        <div class="form_checkbox_text">允许互动吧推荐</div>
        <div class="form_checkbox_check">
            <img id="post_vote_private" src="/Public/images/checkbox2x.png">
        </div>
    </div>

    <!--app下载转化、用户协议 start-->
    <div class="post_appDown"><ul><li><span>●</span> 发布时设置活动费用，在线收款</li><li><span>●</span> 添加图片，编辑不同样式文字</li><li><span>●</span> 支持手机验票，数字码验票</li></ul><p><a href="javascript:void(0)" onclick="_download(_postLink._appDownload)" ontouchstart="">下载App，体验新功能</a></p></div>
    <div class="post_agreement"><p class="post_agreement_p">我同意<a href="http://www.hdb.com/app/service_duty" class="post_agreement_A" ontouchstart="">《互动吧服务协议》</a></p></div>
    <!--app下载转化、用户协议 end-->

    <!--发布按钮 start-->
    <div class="post_btn"><a href="javascript:void(0);" onclick="_votePostMB._post()" class="post_btn_A" ontouchstart="">发布</a></div>
    <!--发布按钮 end-->
</div>
<div id="post_vote_title_t" style="display:none;"></div>
<div id="post_vote_content_t" style="display:none;"></div>
<div id="post_vote_option_t" style="display:none;"></div>
<div id="post_vote_result_t" style="display:none;"></div>
<iframe id="post_upload_iframe" name="_upload"></iframe>
<div id="post_map">
    <iframe id="post_map_iframe"></iframe>
</div>

<div class="tc_c" id="moreGn">
    <h1 class="moregn_h1">下载App使用高级功能</h1>
    <div class="olOut">
        <ol id="moregn_ol_vote" class="moregn_ol"><li>设置投票邀请码，发布你的私密投票</li><li>即时收取投票、评论通知，随时关注投票进展</li><li>添加图片和表情，编辑字体颜色、尺寸</li></ol>
        <ol id="moregn_ol_party" class="moregn_ol"><li>添加更多报名项目，设置报名费用和报名人数</li><li>添加图片和视频，编辑字体颜色、大小</li><li>发布后管理报名人员，收集报名信息</li></ol>
        <ol id="moregn_ol_article" class="moregn_ol"><li>即时收取评论通知，随时了解文章关注度</li><li>添加图片和表情，编辑字体颜色、尺寸</li><li>其他高级发布功能，更多特色玩法</li></ol>
    </div>
    <div class="moregn_btn"><a onclick="_g(_postLink._appDownload);" href="javascript:void(0)" class="l">立即下载</a><a onclick="_moreGn._hide();" href="javascript:void(0)" class="r">稍后再说</a></div>
</div>

<div class="tc_c" id="tc_video">
    <div class="tc_c_close"><div><img title="关闭" onclick="_videoTc._hide()" ontouchstart="" src="/Public/images/share_qr_close3.png"></div></div>
    <div class="tc_c_title"><p>请粘贴视频地址到下面的输入框</p></div>
    <div class="tc_c_nr"><input name="" type="text" id="media_input"></div>
    <div class="tc_c_ts2"><p>目前仅支持腾讯和优酷视频</p></div>
    <div class="tc_c_btn" ontouchstart="" onclick="_richText._mov()"><a>插入</a></div>
</div>
<div class="loadingDiv" id="loadingDiv" style="display:none;"><p class="pImg"><img src="/Public/images/loading2.gif"></p><p class="pTxt"></p></div>
<div id="cover"></div>
<div id="cover2"></div>
<div id="toast" class="toast"></div>
<div id="loading_center" class="loading_center">
    <div><img src="/Public/images/loading2.gif"></div>
    <div id="loading_center_text"></div>
</div>
<div id="alert" class="alert">
    <div id="alert_title"></div>
    <div id="alert_text"></div>
    <div id="alert_button"><button id="alert_button_ok" class="button_3" ontouchstart=""></button></div>
    <div id="alert_cancel" class="alert_cancel" ontouchstart="" onclick="_alert._hide()"></div>
</div>
<div id="tc_bmSuccess" style="display: none; z-index: 9999; position: fixed; left: 50%; top: 50%; margin-top: -40px; margin-left: -125px;">
    <div class="baoSuccess"><img src="/Public/images/pop_remmind_yes.png" class="successDui"><p id="sucess_text"></p></div>
</div>
<div class="tc_c" id="appDownts">
    <h1 class="appDownts_h1">下载互动吧App</h1>
    <div class="appDownts_nr">
        <p>使用互动吧App，随身查看活动报名情况</p>
    </div>
    <div class="appDownts_btn"><a onclick="_g(_postLink._appDownload);" href="javascript:void(0)" class="l">立即下载</a><a onclick="_tc._hide(&#39;appDownts&#39;);" href="javascript:void(0)" class="r">稍后再说</a></div>
</div>
<div id="div_topbar_title" style="display:none;">发布活动</div>
<div id="share_weixin" onclick="_shareInWeixin._hide()">
    <div><img id="share_weixin_guide"></div>
    <div><button ontouchstart="" class="button_3">关闭提示</button></div>
</div>
<div id="share_qq" onclick="_shareInQq._hide()">
    <div><img id="share_qq_guide"></div>
    <div><button ontouchstart="" class="button_3">关闭提示</button></div>
</div>
<div class="tc_c" id="tc_2weima">
    <div class="tc_c_close"><div><img title="关闭" onclick="_joinQr._hide()" ontouchstart="" src="/Public/images/share_qr_close3.png"></div></div>
    <div class="tc_c_title"><p class="font02">报名凭证</p></div>
    <div class="tc_c_nr">
        <p class="tc_c_nr_txt font03" id="p_dt_title"></p>
        <div class="tc_c_nr_pic tc_c_nr_pic_2 tc_c_nr_pic_5"><strong><img class="weima2 weima2_2" id="join_qr_img" src="/Public/images/loading2.gif"></strong></div>
        <div class="tc_c_ts2 font04">
            <div class="tc_c_ts2 font04">长按二维码可将报名凭<br>证保存至您的手机相册</div>
            <p class="bmTs_c font03"><a href="http://www.hdb.com/find/">更多精彩活动 &gt;</a></p>
        </div>
        <div class="tc_c_btn" ontouchstart="" onclick="_joinQr._download()" style="margin-top:10px;"><a class="font02">保存</a></div>
        <div class="tc_c_btn_load" ontouchstart=""><p><span class="font02">正在保存</span><img class="tc_c_btn_loading" src="/Public/images/loading2.gif"></p></div>
    </div>
</div>

<div class="tc_c" id="share_qr" style="display:none;">
    <div class="tc_c_close"></div>
    <div class="tc_c_title"><p class="font02">发送给好友</p></div>
    <div class="tc_c_nr">
        <p class="tc_c_nr_txt font03 txtP">1. 使用微信/手机QQ/微博客户端扫描以下二维码</p>
        <div class="tc_c_nr_pic"><img class="weima2" id="share_qr_img" src="/Public/images/loading2.gif"></div>
        <p class="tc_c_nr_txt font03 txtP">2. 使用这些客户端的分享功能将信息发送给好友</p>
    </div>
    <div class="tc_c_btn" ontouchstart=""><a class="font02" onclick="_qr._hide()" ontouchstart="">关闭提示</a></div>
</div>
<div class="tc_c" id="share_qr_1">
    <div class="tc_c_close"><div><img title="关闭" onclick="_qr._hide()" ontouchstart="" src="/Public/images/share_qr_close3.png"></div></div>
    <div class="tc_c_title"><p class="font02">分享二维码</p></div>
    <div class="tc_c_nr">
        <p class="tc_c_nr_txt font03" id="p_dt_title"></p>
        <div class="tc_c_nr_pic"><img class="weima2" id="share_qr_1_img" src="/Public/images/loading2.gif"></div>
        <div class="tc_c_ts font04">长按图片保存</div>
        <p class="tc_c_nr_txt font03" id="p_dt_title">可用于印刷品、幻灯片等其他方式的宣传</p>
    </div>
    <div class="tc_c_btn" ontouchstart="" onclick="_qr._download()"><a class="font02">保存</a></div>
    <div class="tc_c_btn_load" ontouchstart=""><p><span class="font02">正在保存</span><img class="tc_c_btn_loading" src="/Public/images/loading2.gif"></p></div>
</div>
<div id="login">
    <div class="tc_c_close"><div><img title="关闭" onclick="_login._hide()" ontouchstart="" src="/Public/images/share_qr_close3.png"></div></div>
    <div class="login_title">离成功只差登录</div>
    <div id="login_button"></div>
    <div class="login_more"><a href="javascript:_g(_link._login)" class="gray">使用其它方式登录</a></div>
</div>
<div id="seo" style="height:1px;overflow:hidden;margin-top:-1px;">
    <a href="http://www.hdb.com/" style="color:#dddddd;font-size:1px">互动吧</a>
    <a href="http://www.hdb.com/showinfo/page/1" style="color:#dddddd;font-size:1px;">活动列表</a>
    <a href="http://www.hdb.com/post" style="color:#dddddd;font-size:1px">互动吧-发布首页</a>
    <a href="http://www.hdb.com/post/vote" style="color:#dddddd;font-size:1px">互动吧-发布投票</a>
    <a href="http://www.hdb.com/post/party" style="color:#dddddd;font-size:1px">互动吧-发布活动</a>
    <a href="http://www.hdb.com/post/article" style="color:#dddddd;font-size:1px">互动吧-发布文章</a>
    <a href="http://www.hdb.com/find" style="color:#dddddd;font-size:1px">互动吧-热门活动</a>
</div>
<script>
    var _post = {
        _id: "",
        _type: "vote",
        _sceneId : "8",
        _kind : "",
        _endTime : "",
        _isPrivate : "",
        _count : "",
        _pageTitle : ""
    };
</script>
<script src="/Public/js/comm.20160322_190354.min.js"></script>
<script src="/Public/js/post.20160322_190354.min.js"></script>


<div id="qq-sendUrl-btn"></div></body></html>