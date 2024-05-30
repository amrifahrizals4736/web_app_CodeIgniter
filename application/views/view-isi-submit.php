<h5><strong>MATA KULIAH: <?php echo $rps->matakuliah ?> (<?php echo $rps->kode ?>)</strong></h5>
<hr>
<h5><strong>Program Studi: <?php echo $rps->prodi ?></strong></h5>
<table class="table-bordered text-center">
    <thead>
        <tr class="fw-bold">
            <td>Nomor</td>
            <td>Tgl. Berlaku Mulai</td>
            <td>Tgl. Disusun</td>
            <td>Revisi</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $rps->norps ?></td>
            <td><?php echo $rps->berlaku; ?></td>
            <td><?php echo $rps->disusun; ?></td>
            <td>00</td>
        </tr>
    </tbody>
</table>