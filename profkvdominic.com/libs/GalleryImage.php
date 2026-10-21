<?php	 	

	class GalleryImage extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listGalleryImage(){
		
		
		


		$query = "SELECT * FROM `glry_imge` c WHERE c.`glry_id`!='' ORDER BY `glry_id` DESC";
	
		$rec	=	$this->fetchAll($query);
	
		
		return $rec;		
		
		
	}
	
	 /* Add Testimonials
			*/			
			function addGalleryImage($inputs){
					$insert	=	array('glry_imge'=>$inputs['photo'],
										'glry_tle_index'=>$inputs['glrytle']
										);
				//print_r($insert);exit;
				$this->insert($insert,"glry_image");	
				//print_r($this);exit;
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
	/*
			 * Edit Testimonials
			*/			
			function editGalleryImage($inputs){
					$insert	= array('glry_imge'=>$this->addFilter($this->escapeHtml($inputs['photo'])),
										'glry_tle_index'=>$inputs['glrytle'],	
										'glry_id'=>$inputs['id']
							);
				$this->update($insert,"glry_image",'`glry_id`='.$inputs['id']);		
				return true;
			}

	function updateGalleryImage($id,$image){
		//print_r($image);
		//print_r($id);exit;
		 $this->update(array('glry_imge'=>$image),'glry_image','`glry_id`='.$id);
	}
	 function getGalleryImage($id){
		$query	=	"SELECT * FROM `glry_image` WHERE `glry_tle_index`='$id'  ";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	function getGalleryImage_act($id){
		$query	=	"SELECT * FROM `glry_image` WHERE `glry_tle_index`='$id'  ";
		///print_r($query);exit;
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	function getAllGalleryImageDetails()
	{
		$query = "SELECT * FROM glry_image where  sldr_stus=1";
		$rec = $this->fetchAll($query);
		//print_r($rec);exit;
		return $rec;	
	}

}
?>
