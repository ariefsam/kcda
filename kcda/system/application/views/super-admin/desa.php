<div id="tabs-2">

    <h1>List Desa</h1>
    <table class="fullwidth" cellpadding="0" cellspacing="0" border="0">
        <thead>
            <tr>
                <th width="25" class="rounded-company">No</th>
                <th style="text-align: left">&nbsp;&nbsp;&nbsp;Nama Desa</th>
                <th style="text-align: left">&nbsp;&nbsp;&nbsp;Keterangan</th>
                <th style="text-align: left">&nbsp;&nbsp;&nbsp;Keterangan</th>
                <th class="rounded-q4" width="50px"></th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($daftar_desa) == 0) : ?>
                <tr>
                    <td colspan="9" style="text-align: center"><h1>Tidak ada data</h1></td>
                </tr>
            <?php else : $i = 1;
                    foreach ($daftar_desa as $desa) : ?>
                        <tr id="row<?php echo $desa['id'] ?>">
                            <td><?php echo $i ?></td>
                            <td><?php echo $desa['nama'] ?></td>
                            <td><?php echo $desa['kecamatan'] ?></td>
                            <td><?php echo $desa['keterangan'] ?></td>
                            <td>
                                <ul class="ui-widget ui-helper-clearfix" id="icons">
                                    <li title="Edit" class="ui-state-default ui-corner-all">
                                        <span onclick="edit(<?php echo $desa['id'] ?>)" class="ui-icon ui-icon-pencil">&nbsp;</span>
                                    </li>                                    
                                </ul>
                            </td>
                        </tr>
                        <form id="data<?php echo $desa['id']?>" method="post" action="home/update_desa/<?php echo $desa['id']?>">
                        <tr id="edit<?php echo $desa['id'] ?>" style="display: none">
                            <td><?php echo $i++ ?></td>
                            <td><input size="20" type="text" value="<?php echo $desa['nama'] ?>" name="nama" /></td>
                            <td>
                                <select name="kecamatan">
                                    
                                    <?php
                                    foreach ($daftar_kecamatan as $kecamatan)
                                    {
                                    ?>
                                    <option value="<?php echo $kecamatan['id']?>" <?php if($kecamatan['id']==$desa['id_kecamatan']) echo 'selected="selected"'?>><?php echo $kecamatan['nama']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            <td><input size="60" type="text" value="<?php echo $desa['keterangan'] ?>" name="keterangan" /></td>
                            <td>
                                <ul class="ui-widget ui-helper-clearfix" id="icons">
                                    <li title="Simpan" class="ui-state-default ui-corner-all">
                                        <span class="ui-icon ui-icon-disk" onclick="$('#data<?php echo $desa['id'] ?>').submit()"></span>
                                    </li>
                                    <li title="Batal" class="ui-state-default ui-corner-all">
                                        <span onclick="batal(<?php echo $desa['id'] ?>)" class="ui-icon ui-icon-arrowreturnthick-1-w"></span>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        </form>
            <?php endforeach;
                    endif; ?>
        </tbody>
        <tfoot>
            <tr>

                <td colspan="8">Tambahkan data</td>
            </tr>
            <tr>
        <form action="home/insert_desa" id="form" method="post">
            <td class="rounded-foot-left"></td>
            <td><input type="text" size="15" maxlength="100" style="width: 100%" name="nama" id="new_kode"/></td>
            <td>
                <select name="kecamatan" style="width: 100%">
                    <option value="0" selected="selected">--Pilih Kecamatan--</option>
                    <?php
                    foreach ($daftar_kecamatan as $kecamatan)
                    {
                    ?>
                    <option value="<?php echo $kecamatan['id']?>"><?php echo $kecamatan['nama']?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
            <td><input type="text" size="15" maxlength="100" style="width: 100%" name="keterangan" id="new_kode"/></td>

            <td class="rounded-foot-right"><input type="submit" value="+ Tambahkan" name="submit" class="button blue"/></td>
        </form>
        </tr>
        </tfoot>
    </table>


</div>
<script type="text/javascript">
    function hapus(id) {
    if (confirm("Yakin akan menghapus kontak ini? Kontak yang sudah dihapus tidak akan dapat dikembalikan lagi.")) {
    $.ajax({
    url: 'kontak/hapus/' + id,
    success: function(data) {
    $('#row' + id).fadeOut('slow');

    }

    });
    }
    }
    function edit(id) {
    $('#row' + id).fadeOut('fast', function(){
    $('#edit' + id).fadeIn();
    });
    }
    function batal(id) {
    $('#edit' + id).fadeOut('fast', function(){
    $('#row' + id).fadeIn();
    });
    }
</script>

<!-- End of Main Content -->


