<?php

namespace app\models;

class User extends \yii\base\Object
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

}
