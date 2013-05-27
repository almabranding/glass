<?php

class Menu extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getMenu($url = '') {
        $model = new Model();
        $sth = $model->db->prepare("SELECT * FROM menu WHERE parent = :parent ORDER BY orden");
        $sth->execute(array(
            'parent' => '0'
        ));
        $level1 = $sth->fetchAll(); 
        $m.='<ul class="header_menu">';
        foreach ($level1 as $value) {
            $m.='<li class="menuTitle"><div class="menuTitleBox"><span class="menuTitlespan">' . $value['name'] . '</span></div>
                <ul>';
            $level2 = $model->db->select('SELECT * FROM menu WHERE parent = :parent  ORDER BY orden', array('parent' => $value['id']));
            foreach ($level2 as $value) {
                $sth = $model->db->prepare("SELECT * FROM page WHERE id = :id");
                $sth->execute(array(
                    ':id' => $value['page']
                ));
                $data = $sth->fetch();
                $class = ($url == $data['url']) ? 'selected' : '';
                $m.='<li class="menuOpt ' . $class . '"><a href="' . URL . $model->getTemplate($data['template']) . '/view/' . $value['url'] . '">' . $value['name'] . '</a></li>';
            }
            $m.='</ul></li>';
        }
        return $m;
    }

    public function getMovil($url = '') {
        $model = new Model();
        $sth = $model->db->prepare("SELECT * FROM menu WHERE parent = :parent ORDER BY orden");
        $sth->execute(array(
            'parent' => '0'
        ));
        $level1 = $sth->fetchAll();
        $m.='<ul class="header_menu">';
        foreach ($level1 as $value) {
            $m.='<li class="menuTitle menuDepl " id="' . $value['name'] . '"><div class="menuTitleBox"><span class="nocufon menuTitlespanArrrow">' . $value['name'] . '</span></div></li>';
            $level2 = $model->db->select('SELECT * FROM menu WHERE parent = :parent  ORDER BY orden', array('parent' => $value['id']));

            $m.='<ul class="' . $value['name'] . '">';
            foreach ($level2 as $value2) {
                $sth = $model->db->prepare("SELECT * FROM page WHERE id = :id");
                $sth->execute(array(
                    ':id' => $value2['page']
                ));
                $page = $sth->fetch();
                $class = ($url == $page['url']) ? 'selected' : '';
                $sth = $model->db->prepare("SELECT * FROM imagesGroups WHERE page = :page");
                $sth->execute(array(
                    ':page' => $value2['page']
                ));
                $level3 = $sth->fetchAll();
                $plus = ($level3) ? '<div class="plusM">+</div>' : '';
                $href = ($level3) ? '#' : URL . $model->getTemplate($page['template']) . '/view/' . $page['url'];
                if($value2['name']=='Area'){
                    $href=URL.'uploads/glass_map_v4.pdf';
                    $target='target="_blank"';
                }
                if($value2['name']=='Inspiration'){
                    $href=URL . $model->getTemplate($page['template']) . '/view/' . $page['url'];
                    $plus='';
                    $target='target=""';
                    $level3=null;
                }
                $m.='<a href="' . $href . '"><li class="menuMobile ' . $class . ' menuDepl group" id="subM_' . $value2['id'] . '"><span class="nocufon">' . $value2['name'] . $plus . '</span></li></a>';
                $m.='<ul class="subM_' . $value2['id'] . '">';
                if ($level3){
                    //$m.='<a href="' . URL . $model->getTemplate($page['template']) . '/view/' . $page['url'] . '"><li class="menuGroup ' . $class . '"><span class="nocufon">All</span></li></a>';
                    foreach ($level3 as $value3) {
                        $class = ($url == $page['url']) ? 'selected' : '';
                        $href=URL . $model->getTemplate($page['template']) . '/view/' . $page['url'] . '/' . $value3['id'];
                        if($value3['pdf']){
                            $imgG=Menu::getImageGroup($value3['pos'],$value3['page']);
                            $href=URL.UPLOAD.$value3['page'].'/'.$imgG['pdf'];
                        }
                        $m.='<a href="' . $href . '"><li class="menuGroup ' . $class . '"><span class="nocufon">' . $value3['name'] . '</span></li></a>';
                    }
                }
                $m.='</ul>';
            }
            $m.='</ul>';
        }
        return $m;
    }

    public function getMovilHome($url = '') {
        $model = new Model();
        $m.='<ul class="header_menu">';
        $m.='<li class="menuMobile menuDepl" id="loginBtn"><span class="nocufon">LOGIN</span></li>';
        $m.='<ul class="loginBtn"><li id="dontPass" class="menuMobile  menuDepl group">I don\'t have a passcode</li>';
        $m.='
        <div class="dontPass formsMobile">
        <div>
        <form id="contactform" action="/form/register" method="post"><fieldset><label>Name</label> <input name="name" type="text" value="" /></fieldset><fieldset><label>Last name</label> <input name="last" type="text" value="" /></fieldset><fieldset><label>Email address</label> <input name="email" type="text" value="" /></fieldset><fieldset><label>Subject</label> <input name="subject" type="text" value="" /></fieldset><fieldset><label>Message</label> <textarea name="message"></textarea></fieldset><fieldset><input type="submit" value="SUBMIT" /></fieldset></form></div>
        </div>';
        $m.='<li id="hasPass" class="menuMobile  menuDepl group">I have a passcode</li>';
        $m.='<div class="hasPass formsMobile">
            <div>
            <p class="title">PLEASE ENTER THE PASSCODE<br />FROM YOUR WELCOME EMAIL</p>
            <p>&nbsp;</p>
            <form id="contactform" action="/login/run" method="post"><fieldset><label>E-Mail Address</label> <input name="email" type="text" value="" /></fieldset><fieldset><label>Passcode</label> <input name="passcode" type="password" value="" /></fieldset><br /><fieldset><input type="submit" value="SUBMIT" /></fieldset></form>
            </div></div>';
        $m.='</ul>';
        $m.='</ul>';
        return $m;
    }
    public function getImageGroup($group,$page){ 
        $model = new Model();
        $img=$model->db->select('SELECT * FROM images WHERE `group` = :group and `page`=:page ORDER BY orden', 
            array('group' => $group,'page' => $page));
        foreach($img as $value){
            return $value;
        }      
    }

}