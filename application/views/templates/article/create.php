<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('article/create'); ?>
<lable for="title">Title</lable>
<input type="text" name="title" /><br/>
<lable for="text">Text</lable>
<textarea name="text"></textarea><br/>
<input type="submit" name="submit" value="新建"/>
</form>