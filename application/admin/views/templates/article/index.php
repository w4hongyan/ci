
<div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-xs-12">
          <h1 class="page-header"><?php echo $title; ?><a class='btn btn-site' href='<?php echo site_url('article/create') ?>' role='button'>新建</a></h1>
		  
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>标题</th>
                  <th>类型</th>
                  <th>作者</th>
                  <th>浏览量</th>
                  <th>创建时间</th>
                 <th>操作</th>
                </tr>
              </thead>
              <tbody>
<?php foreach ($article as $article_item):?>
	<tr>
	<td><?php echo $article_item['id']; ?></td>
	<td><?php echo $article_item['title']; ?></td>
	<td><?php echo $article_item['type_name']; ?></td>
	<td>0</td>
	<td>0</td>
	<td><?php echo date_format(date_create($article_item['createtime']),'Y-m-d');?></td>
	<td><a class="btn btn-site" href="<?php echo site_url('article/edit/'.$article_item['id']);?>" role="button">修改</a><a class="btn btn-site btn-delete" data-id='<?php echo $article_item['id'] ?>' href="javascript:void(0)" role="button">删除</a></td></tr>
<?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
        </div>
<script type="text/javascript">
$(function(){
    $(".btn-delete").click(function(){
      deleteArticle(this);
    })
})
  function deleteArticle (btn){
    swal({   title: "确定删除吗?", type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "确定",  cancelButtonText:"取消", closeOnConfirm: false }, 
      function(){
        $.post('<?php echo site_url('article/delete') ?>'+'/'+$(btn).attr('data-id'),function(data){
            if(data>0){
              $(btn).parent().parent().remove();

              swal({title: "删除成功!",
                    timer: 2000,  
                    showConfirmButton: false}); 
            }
        })
       
     });
  }
</script>