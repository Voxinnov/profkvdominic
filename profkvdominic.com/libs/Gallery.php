<?php	 	

	class Gallery extends MySql{
	
	
	
	

	
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listGallery(){
		
		
		


		$query = "SELECT * FROM `pfkvadmnpl_glary` c WHERE c.`glary_id`!='' ORDER BY `glary_id` DESC";
	
		$rec	=	$this->fetchAll($query);
	
		
		return $rec;		
		
		
	}
	
	 /* Add Testimonials
			*/			
			function addGallery($inputs){
					$insert	=	array(	
										'glary_ttle'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										
										'glary_imge'=>$inputs['photo'],
										
										'glary_stus'=>$inputs['status'],
									);
				
				$this->insert($insert,"pfkvadmnpl_glary");	
				
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
	/*
			 * Edit Testimonials
			*/			
			function editGallery($inputs){
					$insert	=	array(	
										'glary_ttle'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										
										'glary_imge'=>$inputs['photo'],
										
										'glary_stus'=>$inputs['status'],
										
										'glary_id'=>$inputs['id']
									);
				$this->update($insert,"pfkvadmnpl_glary",'`glary_id`='.$inputs['id']);		
				return true;
			}

	function updateGalleryImage($id,$image){
		 $this->update(array('glary_imge'=>$image),'pfkvadmnpl_glary','`glary_id`='.$id);
	}
	 function getGallery($id){
		$query	=	"SELECT * FROM `pfkvadmnpl_glary` WHERE `glary_id`='$id'  ";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	function getAllGalleryDetails()
	{
		$query = "SELECT * FROM pfkvadmnpl_glary where  glary_stus=1";
		$rec = $this->fetchAll($query);
		//print_r($rec);exit;
		return $rec;	
	}

}
?>
