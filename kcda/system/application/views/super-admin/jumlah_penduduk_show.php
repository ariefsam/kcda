<div id="tabs-2">

    <h1>Jumlah Penduduk <?php echo $nama_desa?></h1>
    Update terakhir: <?php echo $jenis_kelamin->tanggal?>
    <form action="data/update/<?php echo $id_desa?>" method="POST">
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
                    <span class="edit"  style="display: none"><input type="text" size="5" value="<?php echo $jenis_kelamin->pria?>" name="pria" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Perempuan</td>
                <td>
                    <span class="data"><?php echo $jenis_kelamin->wanita?></span>
                    <span class="edit" style="display: none"><input type="text" size="5" value="<?php echo $jenis_kelamin->wanita?>" name="wanita" /></span>
                </td>
            </tr>
            <tr class="even">
                <td rowspan="4" style="vertical-align: top">Kelompok Usia</td>
                <td>Anak dan Balita</td>
                <td>
                    <span class="data"><?php echo $kelompok_umur->balita?></span>
                    <span class="edit" style="display: none"><input type="text" size="5" value="<?php echo $kelompok_umur->balita?>" name="balita" /></span>
                </td>
            </tr>
            <tr>
                <td>Usia Sekolah</td>
                <td>
                    <span class="data"><?php echo $kelompok_umur->sekolah?></span>
                    <span class="edit" style="display: none"><input type="text" size="5" value="<?php echo $kelompok_umur->sekolah?>" name="sekolah" /></span>
                </td>
            </tr>
            <tr>
                <td>Usia Produktif</td>
                <td>
                    <span class="data"><?php echo $kelompok_umur->produktif?></span>
                    <span class="edit" style="display: none"><input type="text" size="5" value="<?php echo $kelompok_umur->produktif?>" name="produktif" /></span>
                </td>
            </tr>
            <tr>
                <td>Usia Lansia</td>
                <td>
                    <span class="data"><?php echo $kelompok_umur->lansia?></span>
                    <span class="edit" style="display: none"><input type="text" size="5" value="<?php echo $kelompok_umur->lansia?>" name="lansia" /></span>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="pisah">2. Pendidikan</td>
            </tr>
            <tr class="odd">
                <td rowspan="4">Infrastruktur Gedung</td>
                <td>TK/RA</td>
                <td>
                    <span class="data"><?php echo $infrastruktur_pendidikan->tk?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $infrastruktur_pendidikan->tk?>" name="tk" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>SD/MI</td>
                <td>
                    <span class="data"><?php echo $infrastruktur_pendidikan->sd?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $infrastruktur_pendidikan->sd?>" name="sd" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>SMP/MTS</td>
                <td>
                    <span class="data"><?php echo $infrastruktur_pendidikan->smp?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $infrastruktur_pendidikan->smp?>" name="smp" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>SMA/MA</td>
                <td>
                    <span class="data"><?php echo $infrastruktur_pendidikan->sma?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $infrastruktur_pendidikan->sma?>" name="sma" /></span>
                </td>
            </tr>
            <tr>
                <td rowspan="2">SDM TK/RA</td>
                <td>Murid</td>
                <td>
                    <span class="data"><?php echo $murid->tk?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $murid->tk?>" name="murid_tk" /></span>
                </td>
            </tr>
            <tr>
                <td>Guru</td>
                <td>
                    <span class="data"><?php echo $guru->tk?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $guru->tk?>" name="guru_tk" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td rowspan="2">SDM SD/MI</td>
                <td>Murid</td>
                <td>
                    <span class="data"><?php echo $murid->sd?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $murid->sd?>" name="murid_sd" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Guru</td>
                <td>
                    <span class="data"><?php echo $guru->sd?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $guru->sd?>" name="guru_sd" /></span>
                </td>
            </tr>
            <tr>
                <td rowspan="2">SDM SMP/MTS</td>
                <td>Murid</td>
                <td>
                    <span class="data"><?php echo $murid->smp?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $murid->smp?>" name="murid_smp" /></span>
                </td>
            </tr>
            <tr>
                <td>Guru</td>
                <td>
                    <span class="data"><?php echo $guru->smp?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $guru->smp?>" name="guru_smp" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td rowspan="2">SDM SMA/MA</td>
                <td>Murid</td>
                <td>
                    <span class="data"><?php echo $murid->sma?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $murid->sma?>" name="murid_sma" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Guru</td>
                <td>
                    <span class="data"><?php echo $guru->sma?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $guru->sma?>" name="guru_sma" /></span>
                </td>
            </tr>
            <tr>
                <td class="pisah" colspan="3">&nbsp;</td>
            </tr>
            <tr class="odd">
                <td rowspan="2">3. Mortalitas</td>
                <td>Laki-Laki</td>
                <td>
                    <span class="data"><?php echo $mortalitas->pria?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $mortalitas->pria?>" name="mortalitas_pria" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Perempuan</td>
                <td>
                    <span class="data"><?php echo $mortalitas->wanita?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $mortalitas->wanita?>" name="mortalitas_wanita" /></span>
                </td>
            </tr>
            <tr>
                <td rowspan="2">4. Natalitas</td>
                <td>Laki-Laki</td>
                <td>
                    <span class="data"><?php echo $natalitas->pria?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $natalitas->pria?>" name="natalitas_pria" /></span>
                </td>
            </tr>
            <tr>
                <td>Perempuan</td>
                <td>
                    <span class="data"><?php echo $natalitas->wanita?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $natalitas->wanita?>" name="natalitas_wanita" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td rowspan="2">5. Migrasi</td>
                <td>Datang</td>
                <td>
                    <span class="data"><?php echo $migrasi->datang?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $migrasi->datang?>" name="migrasi_datang" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Pergi</td>
                <td>
                    <span class="data"><?php echo $migrasi->pindah?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $migrasi->pindah?>" name="migrasi_pindah" /></span>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="pisah">6. Kesehatan</td>
            </tr>
            <tr class="odd">
                <td rowspan="3">SDM</td>
                <td>Dokter Umum</td>
                <td>
                    <span class="data"><?php echo $sdm_kesehatan->dokter_umum?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $sdm_kesehatan->dokter_umum?>" name="dokter_umum" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Dokter Gigi</td>
                <td>
                    <span class="data"><?php echo $sdm_kesehatan->dokter_gigi?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $sdm_kesehatan->dokter_gigi?>" name="dokter_gigi" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Dukun</td>
                <td>
                    <span class="data"><?php echo $sdm_kesehatan->dukun?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $sdm_kesehatan->dukun?>" name="dukun" /></span>
                </td>
            </tr>
            <tr>
                <td rowspan="3">Infrastruktur Gedung</td>
                <td>Klinik</td>
                <td>
                    <span class="data"><?php echo $infrastruktur_kesehatan->klinik?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $infrastruktur_kesehatan->klinik?>" name="klinik" /></span>
                </td>
            </tr>
            <tr>
                <td>Puskesmas</td>
                <td>
                    <span class="data"><?php echo $infrastruktur_kesehatan->puskesmas?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $infrastruktur_kesehatan->puskesmas?>" name="puskesmas" /></span>
                </td>
            </tr>
            <tr>
                <td>Posyandu</td>
                <td>
                    <span class="data"><?php echo $infrastruktur_kesehatan->posyandu?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $infrastruktur_kesehatan->posyandu?>" name="posyandu" /></span>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="pisah">7. Keagamaan</td>
            </tr>
            <tr class="odd">
                <td rowspan="5">Infrastruktur Gedung</td>
                <td>Masjid</td>
                <td>
                    <span class="data"><?php echo $keagamaan->masjid?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $keagamaan->masjid?>" name="masjid" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Langgar</td>
                <td>
                    <span class="data"><?php echo $keagamaan->langgar?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $keagamaan->langgar?>" name="langgar" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Gereja</td>
                <td>
                    <span class="data"><?php echo $keagamaan->gereja?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $keagamaan->gereja?>" name="gereja" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Pura</td>
                <td>
                    <span class="data"><?php echo $keagamaan->pura?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $keagamaan->pura?>" name="pura" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Vihara</td>
                <td>
                    <span class="data"><?php echo $keagamaan->vihara?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $keagamaan->vihara?>" name="vihara" /></span>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="pisah">8. Keagamaan</td>
            </tr>
            <tr class="odd">
                <td>Infrastruktur Gedung</td>
                <td>Pos Hansip</td>
                <td>
                    <span class="data"><?php echo $keamanan->pos_hansip?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $keamanan->pos_hansip?>" name="pos_hansip" /></span>
                </td>
            </tr>
            <tr>
                <td>SDM</td>
                <td>Hansip</td>
                <td>
                    <span class="data"><?php echo $keamanan->hansip?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $keamanan->hansip?>" name="hansip" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td rowspan="4">Catatan Kriminal</td>
                <td>KDRT</td>
                <td>
                    <span class="data"><?php echo $keamanan->kdrt?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $keamanan->kdrt?>" name="kdrt" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Curanmor</td>
                <td>
                    <span class="data"><?php echo $keamanan->curanmor?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $keamanan->curanmor?>" name="curanmor" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Pembunuhan</td>
                <td>
                    <span class="data"><?php echo $keamanan->pembunuhan?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $keamanan->pembunuhan?>" name="pembunuhan" /></span>
                </td>
            </tr>
            <tr class="odd">
                <td>Asusila</td>
                <td>
                    <span class="data"><?php echo $keamanan->asusila?></span>
                    <span class="edit"><input type="text" size="5" value="<?php echo $keamanan->asusila?>" name="asusila" /></span>
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
</form>
</div>

<!-- End of Main Content -->


<script type="text/javascript">
    function edit()
    {
        $('.data').fadeOut('fast', function()
        {
            $('.edit').fadeIn();
        });
    }

    function batal()
    {
        $('.edit').fadeOut('fast', function()
        {
            $('.data').fadeIn();
        });
    }
</script>