<?php

class UserController extends Controller
{
    public function actionList()
    {
        header('Content-type: application/json');

        if (Yii::app()->request->requestType !== 'GET') {
            $httpVersion = Yii::app()->request->getHttpVersion();
            header("HTTP/$httpVersion 405 Method Not Allowed");
            echo CJSON::encode(['status' => 405, 'error' => 'Invalid request type.']);
        }

        $userList = Yii::app()->db->createCommand()
            ->select('*')
            ->from('tbl_user')
            ->where(['and', 'id > 4', 'id < 16'])
            ->queryAll();

        echo CJSON::encode($userList);
        Yii::app()->end();
    }
}