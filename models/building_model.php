<?php
class Building_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function viewProject($id){
         return $this->db->select('SELECT * FROM page WHERE id = :id', 
            array('id' => $id));
    }
    public function picsProject($id){
        ;
        $sth = $this->db->prepare("SELECT * FROM almaglass.images WHERE page=:id and `group`!=0 group by `group` UNION SELECT * FROM almaglass.images WHERE page=:id and `group`=0 ORDER by `orden`");
        $sth->execute(array(
            ':id' => $id,
            ':id' => $id
        ));
       return $sth->fetchAll();
        /*return $this->db->select('SELECT * FROM images WHERE project = :id', 
            array('id' => $id));*/
    }
    public function getFullScreen($pageID,$imgID){
        $page=$this->db->select('SELECT * FROM page WHERE id = :id', 
            array('id' => $pageID));  
        $img=$this->db->select('SELECT * FROM images WHERE id = :id', 
            array('id' => $imgID));
        foreach($page as $value){
            $res['content']=$value['content'];
            $res['slide']=$value['slide'];
        }
        foreach($img as $value){
           $res['img']=URL . UPLOAD . $pageID . '/'.$value['img'];
            $nav='';
            if($value['group']){
                $group=$this->db->select("SELECT * from images WHERE page='".$value['page']."' AND `group`='".$value['group']."' ORDER BY orden");
                foreach ($group as $id=>$v){
                    $class=($v['id']==$value['id'])?'selected':'';
                    $nav.='<a rel="'.$v['id'].'" class="'.$class.'">'.($id+1).'</a>';
                }
            }
            $res['nav']=$nav;
        }        
        return $res;
    }
    
    
}