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
                <p>目前仅支持易联云微信打印机 网站:http://www.10ss.net/</p>
            </div>
            <!-- general form elements -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">微信打印机设置</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo U('Admin/Config/wxPrintSet');?>" method="post">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo ($wxPrint['id']?$wxPrint['id']:0); ?>"
                               type="hidden">
                        <div class="form-group">
                            <label class="control-label col-md-2">自动打印</label>

                            <div class="col-md-7">
                                <label class="radio-inline"><input name="switch" type="radio"
                                    <?php if($wxPrint["switch"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>开启</span></label>
                                <label class="radio-inline"><input name="switch" type="radio"
                                    <?php if($wxPrint["switch"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>关闭</span></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">apikey</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="apikey" placeholder="" value="<?php echo ($wxPrint["apikey"]); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">mkey</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="mkey" placeholder="" value="<?php echo ($wxPrint["mkey"]); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">partner</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="partner" placeholder="" value="<?php echo ($wxPrint["partner"]); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">machine_code</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="machine_code" placeholder=""
                                       value="<?php echo ($wxPrint["machine_code"]); ?>"
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