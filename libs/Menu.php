<?php

class Menu extends Model
{   
    public function __construct() 
    {
        parent::__construct();
    }
    public function getMenu($url=''){
        $model = new Model();
        $level1 = $model->db->select("SELECT * FROM menu WHERE parent = :parent ORDER BY orden", 
            array('parent' => '0'));
            $m.='<ul class="header_menu">';
            foreach($level1 as $value){
                $m.='<li class="menuTitle"><div class="menuTitleBox"><span class="menuTitlespan">'.$value['name'].'</span></div>
                <ul>';
                $level2=$model->db->select('SELECT * FROM menu WHERE parent = :parent  ORDER BY orden', array('parent' => $value['id']));
                foreach($level2 as $value){
                    $sth = $model->db->prepare("SELECT * FROM page WHERE id = :id");
                    $sth->execute(array(
                        ':id' => $value['page']
                    ));
                    $data = $sth->fetch();
                    $class=($url==$data['url'])?'selected':'';
                    $m.='<li class="menuOpt '.$class.'"><a href="'.URL.$model->getTemplate($data['template']).'/view/'.$value['url'].'">'.$value['name'].'</a></li>';    
                }
                $m.='</ul></li>';
            }
        return $m;
    }
    public function getMovil($url=''){
        $model = new Model();
        $level1 = $model->db->select("SELECT * FROM menu WHERE parent = :parent ORDER BY orden", 
            array('parent' => '0'));
            $m.='<ul class="header_menu">';
            foreach($level1 as $value){
                $m.='<li class="menuTitle menuDepl " id="'.$value['name'].'"><div class="menuTitleBox"><span class="menuTitlespan menuTitlespanArrrow">'.$value['name'].'</span></div></li>';
                $level2=$model->db->select('SELECT * FROM menu WHERE parent = :parent  ORDER BY orden', array('parent' => $value['id']));
                
                $m.='<ul class="'.$value['name'].'">';
                foreach($level2 as $value2){
                    $sth = $model->db->prepare("SELECT * FROM page WHERE id = :id");
                    $sth->execute(array(
                        ':id' => $value2['page']
                    ));
                    $data = $sth->fetch();
                    $class=($url==$data['url'])?'selected':'';
                    $sth = $model->db->prepare("SELECT * FROM imagesGroups WHERE page = :page");
                    $sth->execute(array(
                        ':page' => $value2['page']
                    ));
                    $level3 = $sth->fetchAll();
                    $plus=($level3)?'<div class="plusM">+</div>':'';
                    
                    $m.='<li class="menuMobile '.$class.' menuDepl group" id="'.$value2['name'].'"><span>'.$value2['name'].$plus.'</span></li>';
                    $m.='<ul class="'.$value2['name'].'">';
                    foreach($level3 as $value3){
                        $class=($url==$data['url'])?'selected':'';
                        $m.='<li class="menuGroup '.$class.'"><a><span>'.$value3['name'].'</span></a></li>';
                    }
                    $m.='</ul>';
                }
                $m.='</ul>';
            }
        return $m;
    }
}