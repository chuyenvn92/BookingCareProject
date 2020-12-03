<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class BenhvienController extends CController {

    /**
     * Index action is the default action in a controller.
     */
    public function actionIndex() {
        $this->render('search');
    }

    public function actionDanhsach() {
        $cond = new CDbCriteria();
        $ds = Benhvien::model()->findAll();
        $this->render('danhsach', array('ds' => $ds));
    }

    public function actionThem() {
        $bv = new Benhvien();
        $bv->ten = "Bệnh viện nhiệt đới trung ương Cơ sở 3";
        $bv->diachi = "Hà Nội";
        $bv->gioithieu = "Chuyên test Input DB 3";
        $bv->save();
        echo "Thêm dữ liệu thành công";
    }

    public function actionSearch() {
        $search = $_GET['search'];
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

}
