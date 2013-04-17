<ul id="carousel" class="elastislide-list">
<?php foreach ($this->gallery as $id => $value) { 
        $description=($value['info']?$value['info']:$this->page['content']);
        if(!$value['info']){
            $infoStyle='display:none';
            $imgStyle='width:100%';
        }
    ?>
        <li>
            <div class="primaryInfo" style="<?php echo $infoStyle;?>">
                <span class="title"><?php echo $this->page['name']; ?></span><br/>
                <p><?php echo $description; ?></p>
            </div>
            <div class="primaryImage" style="<?php echo $imgStyle;?>">
                 <!-- Video -->
                <video id="video" width="640" height="365">
                  <source src="<?php echo URL . VUPLOAD . $this->page['id'] . '/' . $value['video']; ?>" autoplay>
                  <p>
                    Your browser doesn't support HTML5 video.
                    <a href="<?php echo URL . UPLOAD . $this->page['id'] . '/' . $value['video']; ?>">Download</a> the video instead.
                  </p>
                </video>
                <!-- Video Controls -->
                <div id="video-controls">
                  <button type="button" id="play-pause">Play</button>
                  <input type="range" id="seek-bar" value="0">
                  <button type="button" id="mute">Mute</button>
                  <input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
                  <button type="button" id="full-screen">Full-Screen</button>
                </div>
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
            <div class="gallerysBoxInfo"><p>Loren ipsim</p></div>
        </div> 
    <?php } ?>
    <div class="clr"></div>
</div>
<div class="clr"></div>
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/elastislide.css" />
<script type="text/javascript" src="<?php echo URL;?>views/building/js/modernizr.custom.17475.js"></script>
<script type="text/javascript" src="<?php echo URL;?>views/building/js/jquery.elastislide.js"></script>
<script type="text/javascript" src="<?php echo URL;?>views/building/js/custom.js"></script>
