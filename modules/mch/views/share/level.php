<?php
defined('YII_ENV') or exit('Access Denied');

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 11:14
 */

use yii\widgets\LinkPager;

$urlManager = Yii::$app->urlManager;
$this->title = '分销商等级';
$this->params['active_nav_group'] = 5;
?>

<div class="panel mb-3">
    <div class="panel-header">
        <span><?= $this->title ?></span>
        <ul class="nav nav-right">
            <li class="nav-item">
                <a class="nav-link" href="<?= $urlManager->createUrl(['mch/share/level-add']) ?>">添加等级</a>
            </li>
        </ul>
    </div>
    <div class="panel-body">
        <table class="table table-bordered bg-white">
            <thead>
            <tr>
                <th>ID</th>
                <th>等级名称</th>
                <th>升级条件</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $index => $item) : ?>
                <tr>
                    <td class="nowrap" style="text-align: left"><?= $item->id ?></td>
                    <td class="nowrap"><?= $item->levelname ?></td>
                    <td class="nowrap"><?= $item->ordermoney ?></td>
                    <td class="nowrap">
                        <a class="btn btn-sm btn-primary"
                           href="<?= $urlManager->createUrl(['mch/share/level-edit', 'id' => $item->id]) ?>">修改</a>
                        <a class="btn btn-sm btn-danger del"
                           href="<?= $urlManager->createUrl(['mch/share/level-del', 'id' => $item->id]) ?>">删除</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>

<script>
    $(document).on('click', '.nav-item1', function () {
        if($(this).find(".trans")[0].style.display=='inline-block'){
            $(this).find(".trans")[0].style.display='inline';
        }else{
            $(this).find(".trans")[0].style.display='inline-block';
        }
        $('.bg-'+$(this).index(".nav-item1")).toggle();
    }); 
    $(document).on('click', '.del', function () {
        if (confirm("是否删除？")) {
            $.ajax({
                url: $(this).attr('href'),
                type: 'get',
                dataType: 'json',
                success: function (res) {
                    alert(res.msg);
                    if (res.code == 0) {
                        window.location.reload();
                    }
                }
            });
        } 
        return false;
    });
</script>