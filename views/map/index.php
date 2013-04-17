<div class="frameHead">
<div class="primaryInfoMap">
<h1>LOREM IPSUM</h1>
<?php echo $this->page['content'];?>
<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lobortis odio sapien. Sed fringilla tincidunt leo eget sagittis. Praesent dictum risus id velit faucibus eu sollicitudin eros vulputate. Nulla ultricies egestas bibendum. Duis vel mauris sit amet lacus laoreet lobortis sed sit amet nisi. Maecenas commodo aliquam euismod.</p>

<p>&nbsp;</p>

<h1>MAP LEGEND</h1>

<div class="mapLeyend">
<ul>
	<li><img alt="map" src="/glass/uploads/leyendGlass.jpg" style="float:left" /></li>
	<li>
	<p>Glass</p>
	</li>
	<li><img alt="map" src="/glass/uploads/leyendPark.jpg" style="float:left" /></li>
	<li>
	<p>Parks</p>
	</li>
</ul>
</div>

<p>A&nbsp; South Pointe Park<br />
B&nbsp; Pier Park<br />
C&nbsp; Prime 112<br />
D&nbsp; Joe&rsquo;s Stone Crab<br />
E&nbsp; Majory Stoneman Douglas &nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp; Ocean Beach Park<br />
F&nbsp; Smith &amp; Wollensky<br />
G&nbsp; Washington Park<br />
H&nbsp; The Room<br />
I&nbsp;&nbsp;&nbsp; Lummus Park<br />
J&nbsp;&nbsp; The Wolfsonian-FIU<br />
K&nbsp; Flamingo Park &amp; Pool<br />
L&nbsp;&nbsp; Maurice Gibb Memorial Park<br />
M Lincoln Road<br />
N&nbsp; 21st&nbsp; Street Recreation Center<br />
O&nbsp; Collins Park<br />
P&nbsp; Bass Museu<br />
Q&nbsp; Miami Beach Botanical Garden<br />
R&nbsp; New World Symphony<br />
S&nbsp;&nbsp; Aroma Espresso Bar<br />
T&nbsp;&nbsp; Estiatorio Milos<br />
U&nbsp; Jewish Museum of Florida</p>-->
</div>

<div class="primaryMap">
    <?php foreach ($this->gallery as $id => $value) { 
       echo '<img id="map" alt="map" src="'.URL.UPLOAD.$this->page['id'].'/'.$value['img'].'" />';
       break;
    }?>
    
</div>
    <div class=" clr"></div>
</div>
