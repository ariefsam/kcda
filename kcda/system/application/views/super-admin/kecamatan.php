<table class="rounded-corner sortable" id="main_table">
    <thead>
        <tr>
            <th width="25" class="rounded-company">No</th>
            <th>Nama Kecamatan</th>
            <th>Keterangan</th>
            <th class="rounded-q4"></th>
        </tr>
    </thead>
    <tbody>
    <?php if (count($daftar_kecamatan) == 0) : ?>
        <tr>
            <td colspan="9" style="text-align: center"><h1>Tidak ada data</h1></td>
        </tr>
    <?php else : $i = 1; foreach($daftar_kecamatan as $kecamatan) : ?>
        <tr id="k<?php echo $kecamatan['id']?>">
            <td><?php echo $i?></td>
            <td><?php echo $kecamatan['nama']?></td>
            <td><?php echo $kecamatan['keterangan']?></td>
            <td>
                <input type="button" value="Edit" class="edit-in-place-btn" onclick="showEditForm(<?php echo $kecamatan['id']; ?>)"/><input type="button" value="Hapus" class="edit-in-place-btn delete" onclick="hapus(<?php echo $kecamatan['id']; ?>)"/>
            </td>
        </tr>
        <tr id="edit<?php echo $kecamatan['id']?>" style="display: none">
            <td><?php echo $i++?></td>
            <td><?php echo $kecamatan['nama']?></td>
            <td><?php echo $kecamatan['keterangan']?></td>
        </tr>
    <?php
        endforeach; endif; ?>
    </tbody>
    <tfoot>
        <tr style="font-size: 15px;">
            
        </tr>
    </tfoot>
</table>

<script type="text/javascript">

$(document).ready(function(){

    var inputNama = $('#new_nama');

    $('#form').submit(function(){

        if(inputNama.val() == "" || $('#new_diskon').val() == "" || $('#new_kode').val() == "") return false;

    });
    $('.entri_baru').css({backgroundColor : 'yellow !important'});

})

function showEditForm(id) {
        $('#filter').val("");
        $('.editrow').hide();
        $('.row').show();
	$('#baris_' + id).hide();
	$('#edit_' + id).fadeIn('slow');
        $('#nama_' + id).focus();
}

function hideEditForm(id) {
	$('#edit_' + id).hide();
	$('#baris_' + id).fadeIn('slow');
}

$(function() {
  var theTable = $('#main_table')

  $("#filter").keyup(function() {
    $.uiTableFilter( theTable, this.value );
    $('.editrow').hide();
  })
});

function hapus(id){
    if(confirm("Yakin ingin menghapus data ini?")){
        $.ajax({
           url: 'index.php/master/agen/hapus/' + id,
           dataType: 'text',
           success: function(data){
               if(data == 1){
                   $('#baris_' + id).fadeOut('slow', function(){$(this).remove()});
                   $('#edit_' + id).remove();
               } else alert("Kesalahan: gagal menghapus data!");
           },
           error: function(){
               alert("Kesalahan: gagal menghapus data!");
           }
        });
    }
}

</script>
