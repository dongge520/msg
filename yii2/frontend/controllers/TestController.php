<?php
namespace frontend\controllers;
use Yii;
use common\models\T1;
use yii\web\Controller;
class TestController extends Controller
{
    public $layout=false;
    public function actionIndex()
    {
        $t1=new T1;
        $t1->uname='dongge';
        $t1->pwd='dongge520';
        $rs=$t1->save();
        echo $t1->id;
        echo '<hr/>';
        var_dump($rs);
        die;
        // $t1=T1::findOne(1);
        // $t2=T1::find()->where(['id'=>2])->one();
        // echo '<pre>';
        // print_r($t1);
        // echo '<hr/>';
        // echo $t1->uname;
        // echo '<pre>';
        // print_r($t2);
        // echo '<hr/>';
        // echo $t2->uname;
        // die;
        // $t1s=T1::find()->all();
        // foreach ($t1s as $t1) {
        //     echo $t1->id . '__' . $t1->uname . '<br/>';
        // }
        // echo '<hr/>';
        // echo '<pre>';
        // print_r($t1s);
        // die;
        // return $this->render('index',[
        //     'username'=>'东哥',
        //     'order'=>[
        //         'age'=>25,
        //         'sex'=>'男'
        //     ],
        // ]);
    }

    public function actionAdd()
    {
        echo '真的非常非常喜欢你';
        // return $this->render('index');
    }
}