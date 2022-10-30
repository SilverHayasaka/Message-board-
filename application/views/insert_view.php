<style type="text/css">

</style>
<h2><?php echo $subtitle ?></h2>
<?php validation_errors(); ?>
<div>
	<?php echo form_open('message/post'); ?>
	<table cellpadding="2" cellspacing="8" align="center" border="1px,soild">
		<tr>
			<td>昵称:</td>
			<td><input type="text" name="name"/></td>
			<br/>
		</tr>
		<tr>
			<td>个人邮箱或链接:</td>
			<td><input type="text" name="url"/></td>
			<br/>
		</tr>
		<tr>
			<td>标题:</td>
			<td><input type="text" name="title"/></td>
			<br/>
		</tr>
		<tr>
			<td>请输入内容:</td>
			<td><textarea name="content"></textarea></td>
			<br/>
		</tr>
	</table>
	<input type="submit" name="submit" style="cursor: hand" value="提交"/>
	</form>
	<?php
	if (isset($errors)) {
		echo "<span style='color:red;'>$errors</span>";
	}
	?>
</div>

