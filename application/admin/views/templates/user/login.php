<div class="row">
    <h2 class="text-center">用户登录
    </h2>
        <div class="col-xs-10 col-xs-offset-1">

		<?php echo form_open('login','class="form-horizontal" id="myform"'); ?>
		<div class="form-group">
			<lable class="col-xs-3 control-lable" for="name">用户名：</lable>
			<div class="col-xs-9"><input class="form-control" name="name" type="text" id="name" placeholder="用户名" value=""/>
			</div>
		</div>
		<div class="form-group">
			<lable class="col-xs-3 control-lable" for="pwd">密码：</lable>
			<div class="col-xs-9"><input class="form-control" name="pwd" type="password" id="pwd" placeholder="密码" value=""/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-offset-3 col-xs-9">
			<button type="submit" class="btn btn-site btn-md ">提交</button>
			<button type="reset" class="btn btn-site btn-md col-xs-offset-2">撤销</button>
			</div>
		</div>

			
	</form>
	</div>
	</div>