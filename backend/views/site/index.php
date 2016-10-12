<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
	
	<div class="col-lg-5">
	    <h2 class="text-left">系统信息</h2>
	    <table class="table table-striped table-bordered detail-view">
	    	<tr>
		    	<td>
	    			系统时间
		    	</td>
		    	<td>
	    			<?= date('Y-m-d H:i:s') ?>
		    	</td>
	    	</tr>
	    	<tr>
		    	<td>
	    			程序版本
		    	</td>
		    	<td>
	    			blog V0.1
		    	</td>
	    	</tr>
	    	<tr>
		    	<td>
	    			操作系统
		    	</td>
		    	<td>
	    			<?= php_uname() ?>
		    	</td>
	    	</tr>
	    	<tr>
		    	<td>
	    			服务器软件
		    	</td>
		    	<td>
	    			<?= date('Y-m-d H:i:s') ?>
		    	</td>
	    	</tr>
	    	<tr>
		    	<td>
	    			PHP版本
		    	</td>
		    	<td>
	    			<?= PHP_VERSION ?>
		    	</td>
	    	</tr>
	    	<tr>
		    	<td>
	    			最大上传限制
		    	</td>
		    	<td>
	    			<?= ini_get("file_uploads") ? ini_get("upload_max_filesize") : "Disabled" ?>
		    	</td>
	    	</tr>
	    	<tr>
		    	<td>
	    			当前路径
		    	</td>
		    	<td>
	    			<?= __FILE__ ?>
		    	</td>
	    	</tr>
	    </table>
	</div>
	<div class="col-lg-3">
	    <h2 class="text-left">快速访问</h2>
	    <h2 class="text-left"><a href="/" target="_blank">点击访问首页!</a></h2>
	</div>
	<div class="col-lg-4">
	    <h2 class="text-left">最新操作</h2>
	    <h2 class="text-left"><a href="/" target="_blank">点击访问首页!</a></h2>
	</div>
        
</div>
