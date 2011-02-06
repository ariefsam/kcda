<div id="tabs-2">

    <h1>Jumlah Penduduk</h1>
    <form action="jumlah_penduduk/show/" method="POST">
        Pilih Desa:
        <select name="desa">
            <?php
            foreach ($daftar_desa as $desa)
            {
            ?>
            <option value="data/show/<?php echo $desa['id']?>" onclick="window.location=this.value"><?php echo $desa['nama']?></option>
            <?php
            }
            ?>
        </select>
    </form>
</div>

<!-- End of Main Content -->


