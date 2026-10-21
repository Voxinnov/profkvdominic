<?php	 	

	class Location extends MySql{
	
	
	

	/*
			 * Edit Testimonials
			*/			
			function editLocation($inputs){
					$insert	=	array(			'cndt_phone'=>$inputs['phn'],					
												'cndt_adreses'=>$this->addFilter($inputs['address']),
												
												'cndt_email'=>$this->addFilter($inputs['email']),
												'cndt_location'=>$this->addFilter($inputs['contact_map']),
												'cndt_facebook'=>$this->addFilter($inputs['fb']),
												'cndt_twitter'=>$this->addFilter($inputs['twtr']),
												'cndt_instagram'=>$this->addFilter($inputs['insta']),
												'cndt_youtube'=>$this->addFilter($inputs['ytb']),
												
										
										'cndt_id'=>$inputs['id']
							);
							//print_r($insert);exit;
				$this->update($insert,"church_cndt",'`cndt_id`='.$inputs['id']);			
				//$this->update($insert,"church_cndt",'`cndt_id`='.$inputs['id']);		
				return true;
			}

	
	 function getLocation(){
		$query	=	"SELECT * FROM `church_cndt`";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	
}
?>
