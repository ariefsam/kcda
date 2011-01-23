<html>
    <head>
        <base href="<?php echo base_url()?>" />
        <title>KCDA</title>
    </head>
    <body>
        <h2><?php echo $judul?></h2>
        <?php if($this->session->userdata('superadmin')) {?>Anda login sebagai: <?php echo $this->session->userdata('superadmin')?> <a href="index.php/super-admin/login/logout">Logout</a><?php }?>
        <hr>
        <?php $this->load->view("super-admin/" . $view_content)?>
    </body>
</html>
