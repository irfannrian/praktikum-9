<div class="col-md-12">
    <h3>
        Daftar Mata Kuliah
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Sks</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_mtk as $mtk) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $mtk->nama ?></td>
                    <td><?= $mtk->sks ?></td>
                    <td><?= $mtk->kode ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>