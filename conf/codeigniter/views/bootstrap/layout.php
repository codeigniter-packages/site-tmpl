<?php if (isset($page_content)) { ?>
    <?php foreach ($page_content as $item_component) { ?>
        <?php $this->load->view($item_component); ?>
    <?php } ?>
<?php } ?>