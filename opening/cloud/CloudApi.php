<?php
/**
 * Created by IntelliJ IDEA
 * Date Time: 2018/10/23 12:04
 */


namespace app\opening\cloud;


class CloudApi
{
    const SITE_INFO = 'xcx_auth_info.php';//'/mall/site/info';//站点信息(授权)
    const TEST_SITE = '/site-test/index';
    const TASK_CREATE = '/mall/task/create';
    const APP_UPLOAD_LOGIN = '/mall/app-upload/login';//扫码上传
    const APP_UPLOAD_PREVIEW = '/mall/app-upload/preview';//扫码上传
    const APP_UPLOAD_UPLOAD = '/mall/app-upload/upload';//扫码上传
    const PLUGIN_LIST = '/mall/plugin/index';//插件
    const PLUGIN_DETAIL = '/mall/plugin/detail';//插件
    const PLUGIN_CREATE_ORDER = '/mall/plugin/create-order';//插件
    const PLUGIN_INSTALL = '/mall/plugin/install';//插件
    const UPDATE_DATA = '/mall/update/index';//更新
}
