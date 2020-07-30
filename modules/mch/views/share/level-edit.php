<?php
defined('YII_ENV') or exit('Access Denied');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 11:36
 */

$urlManager = Yii::$app->urlManager;
$this->title = '分销商分类编辑';
$this->params['active_nav_group'] = 5;
?>
<div class="panel mb-3">
    <div class="panel-header"><?= $this->title ?></div>
    <div class="panel-body">
        <form class="form auto-form" method="post" autocomplete="off"
              return="<?= $urlManager->createUrl(['mch/share/level-add','id'=>\Yii::$app->request->get('id')]) ?>">
            <div class="form-body">
                <div class="form-group row">
                    <div class="form-group-label col-sm-2 text-right">
                        <label class=" col-form-label required">等级名称</label>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="levelname" 
                        value="<?= $list->levelname ? $list->levelname : '' ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="form-group-label col-sm-2 text-right">
                        <label class=" col-form-label required">升级条件</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group short-row">直销订单金额满&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-control" name="ordermoney"
                                   value="<?= $list->ordermoney ? $list->ordermoney : 0 ?>">
                            <span class="input-group-addon">元</span>
                        </div>
                        直销商升级条件，不填写默认为不自动升级
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group-label col--sm-2 text-right">
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-primary auto-form-btn" href="javascript:">保存</a>
                        <input type="button" class="btn btn-default ml-4" 
                               name="Submit" onclick="javascript:history.back(-1);" value="返回">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
