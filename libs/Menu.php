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
                $m.='<li class="menuTitle"><span class="menuTitlespan">'.$value['name'].'</span>
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
}