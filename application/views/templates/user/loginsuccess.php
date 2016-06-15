<h2>登陆成功！<?php echo $this->session->loginuser;?></h2>
<script type="text/javascript">
 window.setTimeout(function(){
 		window.location.href="<?php echo site_url('') ?>"
 },3000);

</script>