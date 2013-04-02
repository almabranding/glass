<?php
class Model {
    function __construct() {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }
    function getPage($url){
        $sth = $this->db->prepare("SELECT * FROM page WHERE url = :url");
        $sth->execute(array(
            ':url' => $url
        ));
        $data = $sth->fetch();
        return $data;
    }
    function getPageById($id){
        $sth = $this->db->prepare("SELECT * FROM page WHERE id = :id");
        $sth->execute(array(
            ':id' => $id
        ));
        $data = $sth->fetch();
        return $data;
    }
    function getGallery($id){
        return $this->db->select('SELECT * FROM images WHERE page = :page', 
            array('page' => $id));
    }
    function getTemplate($id){
        $sth = $this->db->prepare("SELECT * FROM template WHERE id = :id");
        $sth->execute(array(
            ':id' => $id
        ));
        $data = $sth->fetch();
        return $data['URL'];
    }
    function setLang($lang){
        $this->lang=$lang;
    }
    public function getMenu($url=''){
        $level1 = $this->db->select("SELECT * FROM menu WHERE parent = :parent", 
            array('parent' => '0'));
            $m.='<ul class="header_menu">';
            foreach($level1 as $value){
                $m.='<li class="menuTitle">'.$value['name'].'
                <ul>';
                $level2=$this->db->select('SELECT * FROM menu WHERE parent = :parent', array('parent' => $value['id']));
                foreach($level2 as $value){
                    $sth = $this->db->prepare("SELECT * FROM page WHERE id = :id");
                    $sth->execute(array(
                        ':id' => $value['page']
                    ));
                    $data = $sth->fetch();
                    $class=($url==$data['url'])?'selected':'';
                    $m.='<li class="'.$class.'"><a href="'.URL.$this->getTemplate($data['template']).'/view/'.$value['url'].'">'.$value['name'].'</a></li>';
                }
                $m.='</ul></li>';
            }
        return $m;
    }
}