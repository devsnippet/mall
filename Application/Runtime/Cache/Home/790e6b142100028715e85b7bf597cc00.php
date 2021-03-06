<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        系统设置
        <small></small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-danger">
                <p>微信模板消息请设置所在行业为IT科技/互联网|电子商务，消费品/消费品</p>
                <p>无法自动添加的用户请在微信后台手动添加设置</p>
            </div>
            <!-- general form elements -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">微信模板消息设置</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo U('Home/Config/wxTplMsgSet');?>" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">新订单通知</label>

                            <div class="col-sm-2">
                                <input class="form-control" disabled placeholder="" value="OPENTM201785396"
                                       type="text">
                            </div>

                            <div class="col-sm-8">
                                <input class="form-control" placeholder="" name="OPENTM201785396"
                                       value="<?php echo ($OPENTM201785396); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">订单支付成功</label>

                            <div class="col-sm-2">
                                <input class="form-control" disabled placeholder="" value="OPENTM207791277"
                                       type="text">
                            </div>

                            <div class="col-sm-8">
                                <input class="form-control" placeholder="" name="OPENTM207791277"
                                       value="<?php echo ($OPENTM207791277); ?>"
                                       type="text">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-block btn-danger">保存</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (right) -->
    </div>
</section>