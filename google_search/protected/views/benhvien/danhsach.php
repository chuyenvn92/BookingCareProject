<table class="magic-table">
    <thead>
        <tr>
            <th scope="col">Tên</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Giới thiệu</th>
        </tr>  
    </thead>
    <?php foreach ($ds as $item): ?>
        <tbody>
            <tr>
                <td><?php echo $item->ten ?></td>
                <td><?php echo $item->diachi ?></td>
                <td><?php echo $item->gioithieu ?></td>
            </tr>
        </tbody>
    <?php endforeach; ?>
</table>