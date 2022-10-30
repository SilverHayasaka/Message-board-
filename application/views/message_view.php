<h2><?php echo $subtitle; ?></h2>
<input type="button" value="添加留言" style="cursor: hand" onclick="window.location ='<?php echo site_url('message/post/');?>'"/>
<!--<a href="<? /*echo site_url('message/post/')*/ ?>" class="button">添加留言</a>-->
<div>
	<?php foreach ($message as $message_item) : ?>
		<table cellpadding="2" cellspacing="8" align="center" border="1px,soild">
			<tr>
				<td>Id:</td>
				<td><?php echo $message_item['id']; ?></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><?php echo $message_item['name']; ?></td>
			</tr>
			<tr>
				<td>Url:</td>
				<td><?php echo $message_item['url']; ?></td>
			</tr>
			<tr>
				<td>title:</td>
				<td><?php echo $message_item['title']; ?></td>

			</tr>
			<tr>
				<td>content:</td>
				<td><?php echo $message_item['content']; ?></td>
			</tr>
			<tr>
				<td>date:</td>
				<td><?php echo $message_item['date']; ?></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<a href="<?php echo site_url('message/edit/') . $message_item['id']; ?>">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;<a
							href="<?php echo site_url('message/delete/') . $message_item['id']; ?>">删除</a></td>
			</tr>
		</table>
		<br/>
	<?php endforeach; ?>

</div>
