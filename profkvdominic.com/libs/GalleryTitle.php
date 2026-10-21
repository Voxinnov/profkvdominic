<?php	 	

	class GalleryTitle extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listGalleryTitle(){
		
		
		


		$query = "SELECT * FROM `galry_ttle` c WHERE c.`glry_id`!='' ORDER BY `glry_id` DESC";
	
		$rec	=	$this->fetchAll($query);
	
		
		return $rec;		
		
		
	  }

	  	
	 /* Add Testimonials
			*/			
			function addGalleryTitle($inputs){
		$insert	=	array('glry_tle'=>$this->addFilter($this->escapeHtml($inputs['title'])),	
									
										
										'glry_stus'=>$inputs['status']
										);
				//print_r($insert);exit;
				$this->insert($insert,"galry_ttle");	
				
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
	/*
			 * Edit Testimonials
			*/			
			function editGalleryTitle($inputs){
	$insert	=	array('glry_tle'=>$this->addFilter($this->escapeHtml($inputs['title'])),							'desti_map'=>$inputs['lati'],
								
										'glry_stus'=>$inputs['status']
										);
	//print_r($insert);exit;
				$this->update($insert,"galry_ttle",'`glry_id`='.$inputs['id']);		
				return true;
			}

	function updateGalleryImage($id,$image){
		 $this->update(array('desti_img'=>$image),'galry_ttle','`glry_id`='.$id);
	}
	 function getGalleryTitle($id){
		$query	=	"SELECT * FROM `galry_ttle` WHERE `glry_id`='$id'";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	
	function getAllGalleryTitleDetails()
	{
		$query = "SELECT * FROM `galry_ttle` where glry_stus=1";
		$rec = $this->fetchAll($query);
		return $rec;	
	}
	function getAllGalleryTitleMax()
	{
		$query = "SELECT max(glry_id) as max_id FROM `galry_ttle`";
		$rec = $this->fetchAll($query);
		return $rec;	
	}

}
?>
