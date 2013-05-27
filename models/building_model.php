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
            if($value['replace'])
                $res['content']=$value['info'];
            if($value['group']){
                $res['group']=$value['group'];
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
    public function getGroup($id){ 
        $sth = $this->db->prepare('SELECT * FROM imagesGroups WHERE `id` = :id');
        $sth->execute(array('id' => $id));
        return $sth->fetch();
    }
    public function getGroups($group,$page){ 
        $img=$this->db->select('SELECT * FROM images WHERE `group` = :group and `page`=:page ORDER BY orden', 
            array('group' => $group,'page' => $page));
        foreach($img as $value){
            $res['image']=$value['id'];
            return $res['image'];
        }      
    }
    public function getRel($group){ 
        $img=$this->db->select('SELECT * FROM imagesGroups WHERE `id` = :group', 
            array('group' => $group));
        foreach($img as $value){
            return $value['pos'];
        }      
    }
    public function getGalleryByGroup($group,$id){ 
        $grupos=$this->db->select('SELECT * FROM imagesGroups WHERE `id` = :id', 
            array('id' => $group));
        foreach($grupos as $value)
            $grupo=$value['pos']; 
        return $this->db->select('SELECT * FROM images WHERE page = :page and `group`=:group ORDER by orden', array('page' => $id,'group'=>$grupo));
    }
}