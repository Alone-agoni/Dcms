<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>『Alone-agoni』</title>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/plugins/layui/css/layui.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/global.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/table.css"/>
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
                    <td><?php echo ($info['operating_system']); ?></td>
                    <td>运行环境</td>
                    <td><?php echo ($info['runtime_environment']); ?></td>
                </tr>
                <tr>
                    <td>PHP运行方式</td>
                    <td><?php echo ($info['operation_mode']); ?></td>
                    <td>ThinkPHP版本</td>
                    <td><?php echo ($info['thinkphp_version']); ?></td>
                </tr>
                <tr>
                    <td>上传附件限制</td>
                    <td><?php echo ($info['upload_limit']); ?></td>
                    <td>执行时间限制</td>
                    <td><?php echo ($info['execution_time_limit']); ?></td>
                </tr>
                <tr>
                    <td>服务器时间</td>
                    <td><?php echo ($info['server_time']); ?></td>
                    <td>北京时间</td>
                    <td><?php echo ($info['beijing_time']); ?></td>
                </tr>
                <tr>
                    <td>服务器域名/IP</td>
                    <td><?php echo ($info['server_domain_name']); ?></td>
                    <td>剩余空间</td>
                    <td><?php echo ($info['free_space']); ?></td>
                </tr>
                <tr>
                    <td>register_globals</td>
                    <td><?php echo ($info['register_globals']); ?></td>
                    <td>magic_quotes_gpc</td>
                    <td><?php echo ($info['magic_quotes_gpc']); ?></td>
                </tr>
                <tr>
                    <td>magic_quotes_runtime</td>
                    <td><?php echo ($info['magic_quotes_runtime']); ?></td>
                    <td>Developer</td>
                    <td><?php echo ($info['developer']); ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </fieldset>
</div>
</body>

</html>