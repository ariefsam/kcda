<div>
    <table class="fullwidth" cellpadding="0" cellspacing="0" border="0">
        <thead>
            <tr>
                <td>Jumlah Penduduk</td>
                <td></td>
                <td width="100px"></td>
            </tr>
        </thead>
        <tbody>
            <tr class="odd">
                <td rowspan="2" style="vertical-align: top">Jenis Kelamin</td>
                <td>Laki-laki</td>
                <td>
                    <span class="data"><?php echo $jenis_kelamin->pria?></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Perempuan</td>
                <td>
                    <span class="data"><?php echo $jenis_kelamin->wanita?></span>
                </td>
            </tr>
            <tr class="even">
                <td rowspan="4" style="vertical-align: top">Kelompok Usia</td>
                <td>Anak dan Balita</td>
                <td>
                    <span class="data"><?php echo $kelompok_umur->balita?></span>
                </td>
            </tr>
            <tr>
                <td>Usia Sekolah</td>
                <td>
                    <span class="data"><?php echo $kelompok_umur->sekolah?></span>
                </td>
            </tr>
            <tr>
                <td>Usia Produktif</td>
                <td>
                    <span class="data"><?php echo $kelompok_umur->produktif?></span>
                </td>
            </tr>
            <tr>
                <td>Usia Lansia</td>
                <td>
                    <span class="data"><?php echo $kelompok_umur->lansia?></span>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" style="text-align: right">
                    <input class="data" type="button" value="Ubah" name="ubah" onclick="edit()" />
                    <input class="edit" style="display: none" type="submit" value="Update" name="submit" />
                    <input class="edit" style="display: none" type="button" value="Cancel" name="ubah" onclick="batal()" />
                </td>
            </tr>
        </tfoot>
    </table>
</div>