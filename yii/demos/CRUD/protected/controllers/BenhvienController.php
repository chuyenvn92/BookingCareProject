<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class BenhvienController extends CController {

    const ADD_SUCCESS = 'Thêm bệnh viện thành công';
    const EDIT_SUCCESS_ALERT = 'Cập nhật bệnh viện thành công';
    const DELETE_SUCCESS_ALERT = 'Xóa bệnh viện thành công';

    public $modelName = 'Benhvien';

    /**
     * Index action is the default action in a controller.
     */
    public $code = 200;
    public $message = "";
    public $data = array();
    public $response = array();
    function _response()
    {
        $this->response['code'] = $this->code;
        $this->response['message'] = $this->message;
        if (!empty($this->data))
        {
            $this->response['data'] = $this->data;
        }

        header('Content-Type: application/json');
        echo json_encode($this->response);
        Yii::app()->end();
    }

    function renderJson($code, $message, $data = array())
    {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;

        $this->_response();
    }
    
    public function actionIndex() {
        $this->actionShow();
    }

    public function actionShow() {
        
//        $data = array();
//
//        $data['benhvien'] = array();
//        $bv = Benhvien::model()->findAll();
//        foreach($bv as $item)
//        {
//            $data['benhvien'][] = array(
//                'id' => $item->id,
//                'ten' => $item->ten,
//                'diachi' => $item->diachi,
//                'gioithieu' => $item->gioithieu,
//            );
//        }
//
//        $this->renderJson(200, "Thành công", $data);
        
        $cond = new CDbCriteria();
        $ds = Benhvien::model()->findAll();
        $this->render('show', array(
            'ds' => $ds,
        ));
    }

    public function actionSearch() {
        $search = $_GET["search"];
        $cond = new CDbCriteria();

        $cond->addSearchCondition('ten', $search);

        $data = Benhvien::model()->findAll($cond);
        $count = Benhvien::model()->count($cond);
        $this->render('results', array(
            'data' => $data,
            'count' => $count,
            'search' => $search,
        ));
    }

    public function actionCreate() {
        $bv = new Benhvien();
        
//        $bv->setScenario('admin');
        
        if ($_POST) {
            $bv->attributes = $_POST['Benhvien'];
            if ($bv->validate()) {
                $bv->save();
                Yii::app()->user->setFlash('success', self::ADD_SUCCESS);
                $this->redirect($this->createUrl("index"));
            }
        }
//        $this->render("create", array(
//            'model' => $bv
//        ));
    }

    public function actionEdit($id) {
        $bv = Benhvien::model()->findByPk($id);
        if ($_POST) {
            $bv->attributes = $_POST['Benhvien'];
            if ($bv->validate()) {
                $bv->save();
                Yii::app()->user->setFlash('success', self::EDIT_SUCCESS_ALERT);
                $this->redirect($this->createUrl("index"));
            }
        }
        $this->render("edit", array(
            'model' => $bv
        ));
    }

    public function actionDelete($id) {
        $bv = Benhvien::model()->findByPk($id);
        $bv->delete();
        Yii::app()->user->setFlash('success', self::DELETE_SUCCESS_ALERT);
        return $this->redirect(['/']);
    }

}
