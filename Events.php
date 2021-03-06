<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\threebot_login;

use Yii;
use yii\web\JsonParser;
use yii\helpers\Url;

class Events
{
    public static function onBeforeRequest($event)
    {

        Yii::$app->urlManager->addRules([

            // User: Default Controller
		['pattern' => 'threebot_login/login', 'route' => 'threebot_login/user/user/login', 'verb' => ['GET', 'HEAD']],
                ['pattern' => 'threebot_login/about', 'route' => 'threebot_login/user/user/about', 'verb' => ['GET', 'HEAD']],
                ['pattern' => 'threebot_login/how', 'route' => 'threebot_login/user/user/how', 'verb' => ['GET', 'HEAD']],

        ], true);
    }
}
