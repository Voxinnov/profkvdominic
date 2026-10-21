<?php	 	

	class Category extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listCategory(){
		
		
		


		$query = "SELECT * FROM `bvox_category` c WHERE c.`category_id`!='' ORDER BY `category_id` DESC";
	
		$rec	=	$this->fetchAll($query);
	
		
		return $rec;		
		
		
	}
	
	 /* Add Testimonials
			*/			
			function addCategory($inputs){
					$insert	=	array('category_title'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										'category_description'=>$this->addFilter($this->escapeHtml($inputs['caption'])),
										'category_image'=>$inputs['photo'],
										'category_status'=>$inputs['status'],
										);
				
				$this->insert($insert,"bvox_category");	
				
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
	/*
			 * Edit Testimonials
			*/			
			function editCategory($inputs){
					$insert	=	array('category_title'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										'category_description'=>$this->addFilter($this->escapeHtml($inputs['caption'])),
										'category_image'=>$inputs['photo'],
										'category_status'=>$inputs['status'],
										'category_id'=>$inputs['id']
							);
				$this->update($insert,"bvox_category",'`category_id`='.$inputs['id']);	
//print_r($this);exit;				
				return true;
			}

	function updateGalleryImage($id,$image){
		 $this->update(array('category_image'=>$image),'bvox_category','`category_id`='.$id);
	}
	 function getCategory($id){
		$query	=	"SELECT * FROM `bvox_category` WHERE `category_id`='$id'  ";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	function getAllCategoryDetails()
	{
		$query = "SELECT * FROM bvox_category where  category_status=1";
		$rec = $this->fetchAll($query);
		//print_r($rec);exit;
		return $rec;	
	}

}
?>
