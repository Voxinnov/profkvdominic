<?php	 	

	class Slider extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listSlider(){
		
		
		


		$query = "SELECT * FROM `bvox_slider` c WHERE c.`slider_id`!='' ORDER BY `slider_id` DESC";
	
		$rec	=	$this->fetchAll($query);
	
		
		return $rec;		
		
		
	}
	
	 /* Add Testimonials
			*/			
			function addSlider($inputs){
					$insert	=	array('slider_title'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										'slider_description'=>$this->addFilter($this->escapeHtml($inputs['caption'])),
										'slider_image'=>$inputs['photo'],
										'slider_status'=>$inputs['status'],
										);
				
				$this->insert($insert,"bvox_slider");	
				
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
	/*
			 * Edit Testimonials
			*/			
			function editSlider($inputs){
					$insert	=	array('slider_title'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										'slider_description'=>$this->addFilter($this->escapeHtml($inputs['caption'])),
										'slider_image'=>$inputs['photo'],
										'slider_status'=>$inputs['status'],
										'slider_id'=>$inputs['id']
							);
				$this->update($insert,"bvox_slider",'`slider_id`='.$inputs['id']);		
				return true;
			}

	function updateGalleryImage($id,$image){
		 $this->update(array('slider_image'=>$image),'bvox_slider','`slider_id`='.$id);
	}
	 function getSlider($id){
		$query	=	"SELECT * FROM `bvox_slider` WHERE `slider_id`='$id'  ";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	function getAllSliderDetails()
	{
		$query = "SELECT * FROM bvox_slider where  slider_status=1";
		$rec = $this->fetchAll($query);
		//print_r($rec);exit;
		return $rec;	
	}

}
?>
