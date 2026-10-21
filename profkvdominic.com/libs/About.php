<?php	 	

	class About extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	
	/*
			 * Edit Testimonials
			*/			
		function editAbout($inputs){
		$insert	=	array(
							'pfkvadmnpl_abot_ttle'=>$this->addFilter($this->escapeHtml($inputs['title'])),
							'pfkvadmnpl_abot_dspton'=>$inputs['dscrptn'],
							'pfkvadmnpl_abot_imge'=>$inputs['photo'],
							'pfkvadmnpl_abot_stus'=>$inputs['status']
																			
							);
							//print_r($insert); exit;	
				$this->update($insert,"pfkvadmnpl_about",'`pfkvadmnpl_about_id`='.$inputs['id']);		
				return true;
			}
			function updateGalleryImage($id,$pdf){
		  $this->update(array('pfkvadmnpl_abot_imge'=>$image),'pfkvadmnpl_about','`pfkvadmnpl_about_id`='.$id);
	}

	/*function updateGalleryImage($id,$image){
		 $this->update(array('gip_prfl_img'=>$image),'gip_prfl','`gip_prfl_id`='.$id);
	}*/


	function getAbout(){
		$query	=	"SELECT * FROM `pfkvadmnpl_about`";

		$rec		=	$this->fetchAll($query);
		return $rec;
	}

	function getAllAboutDetails()
	{
		$query = "SELECT * FROM pfkvadmnpl_about where pfkvadmnpl_abot_stus=1";
		$rec = $this->fetchAll($query);
		return $rec;	
	}
	
}
?>
