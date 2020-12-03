<h1 class="mt-4">Quản lý Bệnh viện</h1>
<?php if (Yii::app()->user->hasFlash('success')): ?>
    <div class="flash-success alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?> 
<a href="<?php echo $this->createUrl('create') ?>" class="btn btn-primary mb-4 ml-4"><i class="fas fa-plus mr-1"></i>Thêm mới</a>
<div class="card mb-4">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Tên</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Giới thiệu</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ds as $row) : ?>
                        <tr>
                            <td><?php echo $row->ten ?></td>
                            <td><?php echo $row->diachi ?></td>
                            <td><?php echo $row->gioithieu ?></td>
                            <td>  
                                <a class="btn btn-primary" href="<?php echo Yii::app()->createUrl("benhvien/edit", array('id' => $row->id)) ?>" title="Sửa"><i class="fas fa-edit mr-1"></i>Sửa</a>
                                <a class="btn btn-danger" href="<?php echo Yii::app()->createUrl("benhvien/delete", array('id' => $row->id)) ?>" id="delete" title="Xóa"><i class="far fa-trash-alt mr-1"></i>Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="POST" action="<?php echo Yii::app()->createUrl("benhvien/add") ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm mới</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label">Tên</label>
                        <input type="text" name="ten" class="form-control" placeholder="Nhập tên bệnh viện">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Địa chỉ</label>
                        <input class="form-control" name="diachi" type="text" placeholder="Địa chỉ">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Giới thiệu</label>
                        <input class="form-control" name="gioithieu" type="text" placeholder="Giới thiệu">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </div>
        </div>
    </form>
</div>-->
