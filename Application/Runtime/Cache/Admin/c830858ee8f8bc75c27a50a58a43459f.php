<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" type="text/css" href="/Public/Admin/css/global.css" media="all">
		<link rel="stylesheet" type="text/css" href="/Public/Admin/css/main.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Admin/css/table.css" />
	</head>

	<body>
		<div class="admin-main">
			<fieldset class="layui-elem-field">
				<legend>系统信息</legend>
				<div class="layui-field-box">
					<table class="site-table table-hover">
					  <colgroup>
						<col width="25%">
						<col width="25%">
						<col width="25%">
						<col>
					  </colgroup>
						<tbody>
							<tr>
								<td>操作系统</td>
								<td></td>
								<td>运行环境</td>
								<td></td>
							</tr>
							<tr>
								<td>PHP运行方式</td>
								<td></td>
								<td>ThinkPHP版本</td>
								<td></td>
							</tr>
							<tr>
								<td>上传附件限制</td>
								<td></td>
								<td>执行时间限制</td>
								<td></td>
							</tr>
							<tr>
								<td>服务器时间</td>
								<td></td>
								<td>北京时间</td>
								<td></td>
							</tr>
							<tr>
								<td>服务器域名/IP</td>
								<td></td>
								<td>剩余空间</td>
								<td></td>
							</tr>
							<tr>
								<td>register_globals</td>
								<td></td>
								<td>magic_quotes_gpc</td>
								<td></td>
							</tr>
							<tr>
								<td>magic_quotes_runtime</td>
								<td></td>
								<td>剩余空间</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</fieldset>
		</div>
	</body>

</html>