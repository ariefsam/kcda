<table>
    <tr>
        <th>No</th>
        <th>Nama Kecamatan</th>
        <th>Keterangan</th>
    </tr>
    <?php
    $i = 1;
    foreach ($daftar_kecamatan as $kecamatan){
    ?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $kecamatan['nama']?></td>
        <td><?php echo $kecamatan['keterangan']?></td>
    </tr>
    <?php }?>
</table>
