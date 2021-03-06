<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"E:\phpStudy\PHPTutorial\WWW\ceshi1\public/../application/admin\view\keepout\outadd.html";i:1530008938;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>手动取酒</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="__CSS__/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="__CSS__/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="__CSS__/animate.min.css" rel="stylesheet">
    <link href="__CSS__/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="__JS__/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="__JS__/layui/css/layui.css"rel="stylesheet">
    <style>
        #recharge .recharge_s{
            margin:20px 0;
        }
    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-10">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>手动取酒</h5>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal m-t" id="commentForm" method="post" action="<?php echo url('keepout/outAdd'); ?>">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">用户：</label>
                            <div class="input-group col-sm-7">
<!--                                <select name="mid" class="form-control" id="mid" onchange="a(this)">  
                                            <option>--请选择--</option>  
                                            <?php if(is_array($info_m) || $info_m instanceof \think\Collection || $info_m instanceof \think\Paginator): $i = 0; $__LIST__ = $info_m;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $key; ?>"><?php echo $vo; ?></option>  
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>  -->
                                <input type="hidden" name="mid" id="mid" value="" >
                                <a href="javascript:giveQx()"><input name="mids" id="mids" value="" class="form-control"></a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">服务员：</label>
                            <div class="input-group col-sm-7">
                                <select name="wid" class="form-control">  
                                            <option>--请选择--</option>  
                                            <?php if(is_array($info_w) || $info_w instanceof \think\Collection || $info_w instanceof \think\Paginator): $i = 0; $__LIST__ = $info_w;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $key; ?>"><?php echo $vo; ?></option>  
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>  
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">桌台：</label>
                            <div class="input-group col-sm-7">
                                <select name="sid" class="form-control">  
                                            <option>--请选择--</option>  
                                            <?php if(is_array($info_s) || $info_s instanceof \think\Collection || $info_s instanceof \think\Paginator): $i = 0; $__LIST__ = $info_s;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $key; ?>"><?php echo $vo; ?></option>  
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                            </div>
                        </div>
                        <div class="form-group" id="recharge">
                                    
                         </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-8">
                                <!--<input type="button" value="提交" class="btn btn-primary" id="postform"/>-->
                                <button class="btn btn-primary" type="submit">确认提交</button>
                                <span class="btn btn-primary" id="all">全选</span>
                            </div>                            
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
        <!-- 用户 -->
<div class="zTreeDemoBackground left" style="display: none" id="role">
    <input type="hidden" id="nodeid">
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-2" style="width:100%;margin-left:0">
            <div id="treeType"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    zNodes = '';
</script>
<script src="__JS__/jquery.min.js?v=2.1.4"></script>
<script src="__JS__/bootstrap.min.js?v=3.3.6"></script>
<script src="__JS__/content.min.js?v=1.0.0"></script>
<script src="__JS__/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="__JS__/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="__JS__/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="__JS__/plugins/suggest/bootstrap-suggest.min.js"></script>
<script src="__JS__/plugins/layer/laydate/laydate.js"></script>
<script src="__JS__/plugins/sweetalert/sweetalert.min.js"></script>
<script src="__JS__/plugins/layer/layer.min.js"></script>
<script src="__JS__/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="__JS__/plugins/validate/jquery.validate.min.js"></script>
<script src="__JS__/plugins/validate/messages_zh.min.js"></script>
<script src="__JS__/layui/layui.js"></script>
<script src="__JS__/jquery.form.js"></script>
<script src="__JS__/plugins/ueditor/ueditor.config.js"></script>
<script src="__JS__/plugins/ueditor/ueditor.all.js"></script>
<link rel="stylesheet" href="__JS__/plugins/zTree/zTreeStyle.css" type="text/css">
<script type="text/javascript" src="__JS__/plugins/zTree/jquery.ztree.core-3.5.js"></script>
<script type="text/javascript" src="__JS__/plugins/zTree/jquery.ztree.excheck-3.5.js"></script>
<script type="text/javascript" src="__JS__/plugins/zTree/jquery.ztree.exedit-3.5.js"></script>
<script type="text/javascript">


    var index = '';
    function showStart(){
        index = layer.load(0, {shade: false});
        return true;
    }

    function showSuccess(res){

        layer.ready(function(){
            layer.close(index);
            if(1 == res.code){
                layer.alert(res.msg, {title: '友情提示', icon: 1, closeBtn: 0}, function(){
                    window.location.href = res.data;
                });
            }else if(111 == res.code){
                window.location.reload();
            }else{
                layer.msg(res.msg, {anim: 6});
            }
        });
    }

    $(document).ready(function(){
        // 添加角色
        var options = {
            beforeSubmit:showStart,
            success:showSuccess
        };

        $('#commentForm').submit(function(){
            $(this).ajaxSubmit(options);
            return false;
        });

        $('#keywords').tagsinput('add', 'some tag');
        $(".bootstrap-tagsinput").addClass('col-sm-12').find('input').addClass('form-control')
            .attr('placeholder', '输入后按enter');

        // 上传图片
        layui.use('upload', function(){
            var upload = layui.upload;

            //执行实例
            var uploadInst = upload.render({
                elem: '#test1' //绑定元素
                ,url: "<?php echo url('articles/uploadImg'); ?>" //上传接口
                ,done: function(res){
                    //上传完毕回调
                    $("#thumbnail").val(res.data.src);
                    $("#sm").html('<img src="' + res.data.src + '" style="width:40px;height: 40px;"/>');
                }
                ,error: function(){
                    //请求异常回调
                }
            });
        });

        var editor = UE.getEditor('container');
    });

    // 表单验证
    $.validator.setDefaults({
        highlight: function(e) {
            $(e).closest(".form-group").removeClass("has-success").addClass("has-error")
        },
        success: function(e) {
            e.closest(".form-group").removeClass("has-error").addClass("has-success")
        },
        errorElement: "span",
        errorPlacement: function(e, r) {
            e.appendTo(r.is(":radio") || r.is(":checkbox") ? r.parent().parent().parent() : r.parent())
        },
        errorClass: "help-block m-b-none",
        validClass: "help-block m-b-none"
    });
     
                    function a(id){
                        var html = '';                       
                        var id = id;
                        $("#recharge").html(html);//初始化
                        console.log(id);
                        $.getJSON("<?php echo url('keepout/stockGet'); ?>", {'id' : id}, function(res){
                           console.log(res);
                            $.each(res, function(j, val) {  
                                var nums = "";
                                if(val['nums']){
                                    nums = "<label class='col-sm-3 control-label' style='width:7%'>小数</label>"
                                        +"<select name='nums_"+val['id']+"' id='nums_"+val['id']+"' class='form-control' style='width:9%'>  "
                                          +"<option value='0'>无</option>" 
                                          +"<option value='"+val['nums']+"'>"+val['nums']+"/10</option>"
                                      +"  </select>";
                                }else{
                                    nums = "<input type='hidden' name='nums_"+val['id']+"' id='nums_"+val['id']+"' value='0' >";
                                }
                                if(val['use_day'] > 0){
                                    num = " <label class='col-sm-3 control-label' style='width:7%'>数量</label>"
                                       +" <input id='num_"+val['id']+"' type='text' class='form-control' name='num_"+val['id']+"' required='' aria-required='true' value='0' style='width:5%' ><label class='col-sm-3 control-label' style='width:1%'>/"+val['num']+"</label>"   
                                    useday = " <label class='col-sm-3 control-label' style='width:10%'>有效时间</label>"
                                        +" <input id='useday_"+val['id']+"' type='text' class='form-control' name='useday_"+val['id']+"' required='' aria-required='true' value='"+val['use_day']+"' style='width:9%' readonly='readonly'><label class='col-sm-3 control-label' style='width:1%'>天</label>";
                                }else{
                                    num = " <label class='col-sm-3 control-label' style='width:7%'>数量</label>"
                                       +" <input id='num_"+val['id']+"' type='hidden' class='form-control' name='num_"+val['id']+"' required='' aria-required='true' value='0' style='width:5%' ><label class='col-sm-3 control-label' style='width:1%'>"+val['num']+"</label>"
                                    useday = " <label class='col-sm-3 control-label' style='width:10%'>已过期</label>";
                                    nums = "<label class='col-sm-3 control-label' style='width:7%'>小数</label><input type='hidden' name='nums_"+val['id']+"' id='nums_"+val['id']+"' value='0' ><label class='col-sm-3 control-label' style='width:1%'>"+val['nums']+"/10</label>";
                                }
                                
                               var html =  "<input id='id_"+val['id']+"' type='hidden' class='form-control' name='id_"+val['id']+"' value='"+val['id']+"'>"
                                           +"<div class='input-group col-sm-7 recharge_s' style='width: 100%' >"
                                        +"<label class='col-sm-3 control-label' style='width:12%'>酒种类</label>"
                                        +"<select name='tid_"+val['id']+"' id='tid_"+val['id']+"' class='form-control' style='width:10%'>"  
                                            +"<option value='"+val['t_id']+"'>"+val['type']+"</option>  "
                                        +"</select>"
                                        +"<label class='col-sm-3 control-label' style='width:10%'>酒品牌</label>"
                                        +"<select name='bid_"+val['id']+"' id='bid_"+val['id']+"' class='form-control' style='width:10%' >  "
                                            +"<option value='"+val['b_id']+"'>"+val['brand']+"</option>  "
                                       +" </select>"
                                       +num
                                       +nums
                                        +useday
                                   +" </div>";
                                $("#recharge").append(html);  
                                }); 
                            })                             
                    }
    var index = '';
    var index2 = '';
    //分配权限
    function giveQx(){
        //加载层
        index2 = layer.load(0, {shade: false}); //0代表加载的风格，支持0-2

        // 获取权限信息
        $.getJSON("<?php echo url('member/giveMember'); ?>", {'type' : 'get'}, function(res){
            layer.close(index2);
            var html = '';
            if(1 == res.code){
                $.each(res.data, function (n, value) {
                   html += "<div style='margin:10px;float:left' id='m_"+value['id']+"' name='"+value['nickname']+"'><a href='javascript:checkQx("+value['id']+")'>"+value['nickname']+"</a></div>" ;
                })
                //页面层
                index = layer.open({
                    type: 1,
                    area:['350px', '400px'],
                    title:'选择用户',
                    skin: 'layui-layer-demo', //加上边框
                    content: $('#role')
                });
                $('#treeType').html(html);
            }else if(111 == res.code){
                window.location.reload();
            }else{
                layer.alert(res.msg, {title: '友情提示', icon: 2});
            }

        });
    }
    //确认分配权限
    function checkQx(id){
        var name = $("#m_"+id).attr('name');
        $("#mid").val(id);
        $("#mids").val(name);
        layer.close(index);
        $(function(){
            a(id);//JQuery中调用方法a
  });
    }
    $("#all").click(function(){
        var id = $("#mid").val();
        if(id ==""){
            layer.alert("请选择用户", {title: '友情提示', icon: 2});
        }else{
            $.getJSON("<?php echo url('keepout/stockGet'); ?>", {'id' : id}, function(res){
                           console.log(res);
                            $.each(res, function(j, a) {  
//                                var nums = "";
//                                if(val['nums']){
//                                    nums = "<label class='col-sm-3 control-label' style='width:7%'>小数</label>"
//                                        +"<select name='nums_"+val['id']+"' id='nums_"+val['id']+"' class='form-control' style='width:9%'>  "
//                                          +"<option value='0'>无</option>" 
//                                          +"<option value='"+val['nums']+"'>"+val['nums']+"/10</option>"
//                                      +"  </select>";
//                                }else{
//                                    nums = "<input type='hidden' name='nums_"+val['id']+"' id='nums_"+val['id']+"' value='0' >";
//                                }
                                if(a['use_day'] > 0){
                                    $("#num_"+a['id']).val(a['num']);
                                    $("#nums_"+a['id']+" option[value='"+a['nums']+"']").attr("selected", "selected");
                                }
                            })     
                        })
        }
        
});
</script>
</body>
</html>
