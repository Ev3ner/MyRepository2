<?php
$authPass = true;
$inWorkTime = false;
$workStartTime = strtotime(date('Y-m-d') . ' 09:00:00');
$workEndTime = strtotime(date('Y-m-d') . ' 17:30:00');
if (time() >= $workStartTime && time() < $workEndTime) {
    $inWorkTime = true;
}
$isAdmin = false;
if (Yii::$app->controller->is_admin) {
    $isAdmin = true;
}
//P_DEL start
/*if ($inWorkTime && $isAdmin) {
    try {
        $hostInfo = \app\opening\cloud\Cloud::getHostInfo();
        if (!$hostInfo) {
            throw new Exception();
        }
        if ($hostInfo['code'] !== 0) {
            throw new Exception($hostInfo['msg']);
        }
        $localAuthInfo = \app\opening\cloud\Cloud::getLocalAuthInfo();
        if ($localAuthInfo && !empty($localAuthInfo['domain'])) {
            $domain = $localAuthInfo['domain'];
        } else {
            $domain = Yii::$app->request->getHostName();
        }
        if ($domain !== $hostInfo['data']['host']['domain']) {
            throw new Exception();
        }
    } catch (Exception $e) {
        $appendMsg = $e->getMessage();
        $authPass = false;
    }
}*/
//P_DEL end
$authPass = true;//P_ADD
?>
<?php if (!$authPass) : ?>
    <style>
    body > .auth-tip {
        position: fixed;
        z-index: 510;
        top: 15px;
        left: calc(50% - 150px);
        width: 380px;
        padding: 10px;
        border: 1px solid rgba(228, 105, 105, 0.49);
        background: rgba(255, 247, 248, 0.85);
        box-shadow: 0 1px 5px rgba(0, 0, 0, .15);
        color: rgba(0, 0, 0, .5);
        text-align: center;
    }

    body > .auth-tip a {
        color: inherit;
        text-decoration: underline;
    }
    </style>
    <div class="auth-tip">
        <a target="_blank"
           href="<?= Yii::$app->urlManager->createUrl(['cloud/index/index']) ?>">您的站点授权信息有误，请点此处理<?= $appendMsg ? ': ' . $appendMsg : '' ?></a>
    </div>
<?php endif; ?>