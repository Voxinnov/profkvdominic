<?php

class RecordDelete extends MySql{
		


		function deleteGalimg($id){
				$query="SELECT * FROM `glry_image` WHERE `glry_id`='".$id."'";
					$rec=$this->fetchAll($query);
					unlink('admin/upload/Gallery/'.$rec[0]['glry_imge']);
					
					$this->delete('glry_image','`glry_id`='.$id);
					
					
				
			}

	
function deleteAnthology($id){
				$query="SELECT * FROM `pfkvadmnpl_anthology` WHERE `anthology_sid`='".$id."'";
					$rec=$this->fetchAll($query);
					unlink('upload/Books/'.$rec[0]['anthology_image']);
					$this->delete('pfkvadmnpl_anthology','`anthology_sid`='.$id);
					
					
				
			}			

			
		
		function deleteGallery($id){
				$query="SELECT * FROM `galry_ttle` WHERE `glry_id`='".$id."'";
					$rec=$this->fetchAll($query);
					
					
					$this->delete('galry_ttle','`glry_id`='.$id);
					
					
				
			}
	

			
			
			function deleteSlider($id){
				$query="SELECT * FROM `bvox_slider` WHERE `slider_id`='".$id."'";
					$rec=$this->fetchAll($query);
					unlink('admin/upload/slider/'.$rec[0]['slider_image']);
					
					$this->delete('bvox_slider','`slider_id`='.$id);
					
					
				
			}
			
			
						
			function deleteClientSlider($id){
				$query="SELECT * FROM `client_gallery` WHERE `gallery_id`='".$id."'";
					$rec=$this->fetchAll($query);
					unlink('admin/upload/clientgallery/'.$rec[0]['ad_image']);
					
					$this->delete('client_gallery','`gallery_id`='.$id);
					
			}
			
				function deletesClientSlider($id){
				$query="SELECT * FROM `church_gallery` WHERE `gallery_id`='".$id."'";
					$rec=$this->fetchAll($query);
					unlink('admin/upload/clientgallery/'.$rec[0]['ad_image']);
					
					$this->delete('church_gallery','`gallery_id`='.$id);
					
			}
			
			
			function deleteClientAd($id){
				$query="SELECT * FROM `church_events` WHERE `events_id`='".$id."'";
					$rec=$this->fetchAll($query);
					unlink('admin/upload/slider/'.$rec[0]['ad_image']);
					
					$this->delete(' church_events','`events_id`='.$id);
					
					
				
			}
			
			
			
			
			
				function deleteLists($id){
				$query="SELECT * FROM `bvox_join` WHERE `join_id`='".$id."'";
					$rec=$this->fetchAll($query);
					unlink('admin/upload/Lists/'.$rec[0]['join_image']);
					
					$this->delete('bvox_join','`join_id`='.$id);
					
					
				
			}
			


			function deleteTestimonial($id){
				$query="SELECT * FROM `client_testimonial` WHERE `testimonial_id`='".$id."'";
					$rec=$this->fetchAll($query);
					
					
					$this->delete('client_testimonial','`testimonial_id`='.$id);
					
					
				
			}


			function deleteCategory($id){
				$query="SELECT * FROM `bvox_category` WHERE `category_id`='".$id."'";
					$rec=$this->fetchAll($query);
					unlink('admin/upload/Category/'.$rec[0]['category_image']);
					
					$this->delete('bvox_category','`category_id`='.$id);
					
					
				
			}



			
			
			

}
