<?php	 	

	class Announcemets extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	
	/*
			 * Edit Testimonials
			*/			
		function editAnnouncemets($inputs){
		$insert	=	array(
							'ancemts_ttle'=>$this->addFilter($this->escapeHtml($inputs['title'])),
							'ancemts_dscption'=>$inputs['dscrptn'],
							'ancemts_imges'=>$inputs['photo'],
							'ancemts_stus'=>$inputs['status']
																			
							);
							//print_r($insert); exit;	
				$this->update($insert,"prfkvadmnpnl_anocmnts",'`ancemts_id`='.$inputs['id']);		
				return true;
			}
			function updateGalleryImage($id,$pdf){
		  $this->update(array('ancemts_imges'=>$image),'prfkvadmnpnl_anocmnts','`ancemts_id`='.$id);
	}

	/*function updateGalleryImage($id,$image){
		 $this->update(array('gip_prfl_img'=>$image),'gip_prfl','`gip_prfl_id`='.$id);
	}*/


	function getAnnouncemets(){
		$query	=	"SELECT * FROM `prfkvadmnpnl_anocmnts`";

		$rec		=	$this->fetchAll($query);
		return $rec;
	}

	function getAllAnnouncemetsDetails()
	{
		$query = "SELECT * FROM prfkvadmnpnl_anocmnts where ancemts_stus=1";
		$rec = $this->fetchAll($query);
		return $rec;	
	}
	
}
?>
