<div class="row">  
        <div class="col-sm-10 col-sm-offset-1">
          <h1 class="page-header">新建文章</h1>
      <?php echo form_open('/article/create','class="form-horizontal" id="myform"'); ?>
          <div class="form-group">
      <lable class="col-sm-2 control-lable" for="name">文章类型</lable>
      <div class="col-sm-10">
      <select class="form-control" name="typeId" id="typeId">
      <?php foreach ($types as $type):?>
          <option value="<?php echo $type['id']?>" ><?php echo $type['name'] ?></option>
      <?php endforeach; ?>
			</select>
      </div>
    </div>
    <div class="form-group">
      <lable class="col-sm-2 control-lable" for="name">标题</lable>
       <?php echo form_hidden('id', '0');?>
      <div class="col-sm-10"><input class="form-control" name="title" type="text" id="name" placeholder="Name" value=""/>
      </div>
    </div>
    <div class="form-group">
      <lable class="col-sm-2 control-lable" for="name">图片</lable>
      <div class="col-sm-10"><input class="form-control" name="headImg" type="text" id="headImg"  value="" readonly />
      <a href="javascript:void(0);" onclick="upImage();">上传图片</a>
      </div>
    </div>
    <div class="form-group editorBox">
      <lable class="col-sm-2 control-lable" for="body">内容</lable>
      <div class="col-sm-10">
     	<script id="txtContent" name="content" type="text/plain">

    </script>
    <script type="text/plain" id="upload_ue"></script>   
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-site btn-sm">提交</button>
      <a href="<?php echo site_url('/article') ?>" class="btn btn-site btn-sm" role="button">返回</a>
      </div>
         </div>
       </form>
        </div>
</div>

