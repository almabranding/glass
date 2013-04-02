
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/elastislide.css" />

    <ul id="carousel" class="elastislide-list">
    <?php foreach ($this->gallery as $id => $value) { 
            $description=($value['info']?$value['info']:$this->page['content']);
        ?>
            <li>
                <div class="primaryInfo">
                    <span class="title"><?php echo $this->page['name']; ?></span>
                    <p><?php echo $description; ?></p>
                </div>
                <div class="primaryImage">
                    <a href="#"><img src="<?php echo URL . UPLOAD . $this->page['id'] . '/' . $value['img']; ?>" alt="<?php echo $value['caption']; ?>" /></a>
                </div>
            </li>
    <?php } ?>
    </ul>


<div id="gallerys" class="clearfix fluid masonry">

    <?php foreach ($this->gallery as $id => $value) { ?>
        <div class="gallerysBox">
            <div class="gallerysBoxImg">
                <img ref="<?php echo $id; ?>" src="<?php echo URL . UPLOAD . $this->page['id'] . '/thumb_' . $value['img']; ?>" alt="<?php echo $value['caption']; ?>">
            </div>
            <p class="gallerysBoxInfo">Loren ipsim</p>


        </div> 
    <?php } ?>
</div>
<div class="clr"></div>
<script type="text/javascript" src="<?php echo URL;?>views/building/js/modernizr.custom.17475.js"></script>
<script type="text/javascript" src="<?php echo URL;?>views/building/js/jquery.elastislide.js"></script>
<script type="text/javascript" src="<?php echo URL;?>views/building/js/custom.js"></script>
