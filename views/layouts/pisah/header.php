<?php

use yii\helpers\Url;

?>


<div class="top_nav">

    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">

                <li>
                    <?= Yii::$app->user->isGuest ? (
                        '<a href="index.php?r=site/login"><i class="fa fa-sign-in pull-right"></i>LOGIN</a>'
                    ) : (
                        '<a data-method="post" href="' . Url::to(['site/logout']) . '"><i class="fa fa-sign-out pull-right"></i>LOGOUT (' . Yii::$app->user->identity->username . ')</a>'
                    ) ?>
                </li>

            </ul>
        </nav>
    </div>
</div>