<!doctype html>
<html>
    <head>
        <?php isset($head)?$this->load->view($head):require('head.php');?>
    </head>
    <body>
        <div id="site">
            <div id="site-head">
                <?php isset($navbar)?$this->load->view($navbar):require('navbar.php');?>
            </div>
            <div id="site-body">
                <?php isset($layout)?$this->load->view($layout):require('layout.php');?>
            </div>
            <div id="site-foot">
                <?php isset($foot)?$this->load->view($foot):require('foot.php');?>
            </div>
        </div>
    </body>
</html>