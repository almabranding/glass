<!--<ul id="<?php /* echo ($this->zoom)?'':'carousel';?>" class="elastic-container <?php echo ($this->zoom)?'map-list':'elastislide-list';?>">
  <?php foreach ($this->gallery as $id => $value) {
  $description=($value['replace'])?$value['info']:$this->page['content'];
  ?>
  <li id="<?php echo $value['id'];?>">
  <div class="carouselBox" style="margin:auto">
  <div class="primaryInfo" style="<?php echo ($description)?'display:inherit':'display:none';?>">
  <p><?php echo $description; ?></p>
  </div>
  <div class="primaryImage">
  <img class="<?php echo ($this->zoom)?'map':'';?>" src="<?php echo URL . UPLOAD . $this->page['id'] . '/' . $value['img']; ?>" alt="<?php echo $value['caption']; ?>" onDrag='return false;' onmousedown='return false' />
  <div class="groupNav" style="background:none !important;">
  <?php
  if($value['group']){
  $model=new model();
  $group=$model->db->select("SELECT * from images WHERE page='".$value['page']."' AND `group`='".$value['group']."' ORDER BY orden");
  foreach ($group as $id=>$v){
  $class=($v['id']==$value['id'])?'selected':'';
  echo '<a rel="'.$v['id'].'" class="'.$class.'">'.($id+1).'</a>';
  }
  }?>
  </div>
  </div>
  </div>
  </li>
  <?php } */ ?>
</ul>-->
<?php if($this->section!='Area'){?>
<div class="mobileSubMenu">
<span><?php echo $this->section;?></span>
<div class="plusM">+</div>
</div>
<?php } ?>
<div id="imgFull" class="">
    <div id="bgFrame" class="labels bgFrameLess"></div>
    <div id="bgPrev" class="labels bgControl bgPrev"></div>
    <div id="bgNext" class="labels bgControl bgNext"></div>
    <div class="preload preloadW"></div>
    <div class="accessFrame galleryFrame"><div class="frameContent" style="padding: 17px 0;height:auto;"></div></div>
    <img class="imgBG" id="imgBG" src="" alt=""> 
    <div id="fitNav" class="groupNav" style=""></div>
</div>
<div id="gallerys" class="clearfix fluid masonry <?php echo (sizeof($this->gallery)<=1) ? 'HidedScreen' : ''; ?>" style="">
    <?php
    foreach ($this->gallery as $id => $value) {
        ?>
        <div class="gallerysBox <?php echo ($value['hide']) ? 'HidedBox' : ''; ?> " style="">
            <div class="gallerysBoxImg">
                <a rel="<?php echo $value['id']; ?>" id="rel_<?php echo $value['id']; ?>"><img title="<?php echo $this->page['id'] . '/' . $value['id']; ?>" ref="<?php echo $id; ?>" src="<?php echo URL . UPLOAD . $this->page['id'] . '/thumb_' . $value['img']; ?>" alt="<?php echo $value['caption']; ?>"></a>
            </div>
            <div class="gallerysBoxInfo"><p><?php echo $value['name']; ?></p></div>
        </div> 
    <?php } ?>
    <div class="clr"></div>
</div>
<div class="clr"></div>
<script>
    var page = '<?php echo $this->page['id']; ?>';
    <?php if($this->rel){?>
    var rel= '<?php echo $this->rel;?>';
    <?php }?>
</script>