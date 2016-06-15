        <!-- 配置文件 -->
    <script type="text/javascript" src="<?php echo base_url("/public/js/ueditor/ueditor.config.js")?>"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="<?php echo base_url("/public/js/ueditor/ueditor.all.js")?>"></script>
      <script type="text/javascript" src="<?php echo base_url("/public/js/ueditor/ueditor.parse.js")?>"></script>
   <script type="text/javascript">
   var Ueditor = UE.getEditor('txtContent');
    //重新实例化一个编辑器，防止在上面的editor编辑器中显示上传的图片或者文件
    var _editor = UE.getEditor('upload_ue');
    _editor.ready(function () {
        //设置编辑器不可用
        //_editor.setDisabled();
        //隐藏编辑器，因为不会用到这个编辑器实例，所以要隐藏
        _editor.hide();
        //侦听图片上传
        _editor.addListener('beforeInsertImage', function (t, arg) {
            //将地址赋值给相应的input
            $("#headImg").attr("value", arg[0].src);
            //图片预览
            $("#imgHeadImg").attr("src", arg[0].src);
        })
        //侦听文件上传
        _editor.addListener('afterUpfile', function (t, arg) {
            $("#file").attr("value", _editor.options.filePath + arg[0].url);
        })
    });
    //弹出图片上传的对话框
    function upImage() {
        var myImage = _editor.getDialog("insertimage");
        myImage.open();
    }
    //弹出文件上传的对话框
    function upFiles() {
        var myFiles = _editor.getDialog("attachment");
        myFiles.open();
    }
</script>
