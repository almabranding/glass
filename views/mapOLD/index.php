<div class="frameHead">
<div class="primaryInfoMap">
<?php echo $this->page['content'];?>
</div>

<div class="primaryMap">
    <?php foreach ($this->gallery as $id => $value) { 
       echo '<img id="map" alt="map" src="'.URL.UPLOAD.$this->page['id'].'/'.$value['img'].'" />';
       break;
    }?>
    
</div>
    <div class=" clr"></div>
</div>
