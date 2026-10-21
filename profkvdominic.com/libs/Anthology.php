<?php	 	

	class Anthology extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listAnthology(){
		
		
		


		$query = "SELECT * FROM `pfkvadmnpl_anthology` c WHERE c.`anthology_sid`!='' ORDER BY `anthology_sid` DESC";
	
		$rec	=	$this->fetchAll($query);
	
		
		return $rec;		
		
		
	}
	
	 /* Add Testimonials
			*/			
			function addAnthology($inputs){
					$insert	=	array(	
										'anthology_tte'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										'anthology_dscription'=>$inputs['dscrptn'],
										'anthology_image'=>$inputs['photo'],
										'anthology_ctgry'=>$inputs['category'],
										'anthology_year'=>$inputs['yearofpublish'],
										'anthology_stus'=>$inputs['status'],
									);
				
				$this->insert($insert,"pfkvadmnpl_anthology");	
				
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
	/*
			 * Edit Testimonials
			*/			
			function editAnthology($inputs){
					$insert	=	array(	
										'anthology_tte'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										'anthology_dscription'=>$inputs['dscrptn'],
										'anthology_image'=>$inputs['photo'],
										'anthology_ctgry'=>$inputs['category'],
										'anthology_stus'=>$inputs['status'],
										'anthology_year'=>$inputs['yearofpublish'],
										'anthology_sid'=>$inputs['id']
									);
				$this->update($insert,"pfkvadmnpl_anthology",'`anthology_sid`='.$inputs['id']);		
				return true;
			}

	function updateGalleryImage($id,$image){
		 $this->update(array('anthology_image'=>$image),'pfkvadmnpl_anthology','`anthology_sid`='.$id);
	}
	 function getAnthology($id){
		$query	=	"SELECT * FROM `pfkvadmnpl_anthology` WHERE `anthology_sid`='$id'  ";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	
		 function getAnthologybsedCata($id){
		$query	=	"SELECT * FROM `pfkvadmnpl_anthology` WHERE `anthology_ctgry`='$id'  AND anthology_stus=1";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	
	function getAllAnthologyDetails()
	{
		$query = "SELECT * FROM pfkvadmnpl_anthology where  anthology_stus=1";
		$rec = $this->fetchAll($query);
		//print_r($rec);exit;
		return $rec;	
	}
	
	
function ListAllBookSearch($search){
		$query	=	"SELECT * FROM `pfkvadmnpl_anthology`    WHERE anthology_stus=1 and anthology_tte like '%$search%' ";
		//print_r($query);exit;
		$rec		=	$this->fetchAll($query);
		return $rec;
				
			}		

}
?>
