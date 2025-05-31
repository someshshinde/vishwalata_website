<?php 
$data=[
       
        [
            'Sr_no'=>'01',
            'name'=>'Dr.Annasaheb Pawar',
            'degignation'=>'Principal',
            
        ],
         [
            'Sr_no'=>'02',
            'name'=>'Mrs. Bhalerao Ashwini Raju',
            'degignation'=>'Office Superintendent',
            
        ],
		[
            'Sr_no'=>'03',
            'name'=>'Mr. Chavan Hemantkumar Bhikaji',
            'degignation'=>'Sr.Clerk Account',
            
        ],
		[
            'Sr_no'=>'04',
            'name'=>'Mr. Kawade Dnyaneshwar Machindra',
            'degignation'=>'Jr.Clerk Account',
            
        ],
		[
            'Sr_no'=>'05',
            'name'=>'Ms. Rajguru Jayshri Murlidhar',
            'degignation'=>'Jr. Clerk Accountant',
            
        ],
		[
            'Sr_no'=>'06',
            'name'=>'Mrs. Kharat Ujwala Vikram',
            'degignation'=>'Librarian',
            
        ],
		[
            'Sr_no'=>'07',
            'name'=>'Mr. Mandalkar Mayur Ashok',
            'degignation'=>'Compt. Technician & Designer',
            
        ],
		[
            'Sr_no'=>'08',
            'name'=>'Mr. Mahale Ashok Bhagwant',
            'degignation'=>'Peon',
            
        ],
		[
            'Sr_no'=>'09',
            'name'=>'Mr. Agham Pathesh Madhukar',
            'degignation'=>'Peon',
            
        ],
		[
            'Sr_no'=>'10',
            'name'=>'Mr. Bhill Sanjay Thakare',
            'degignation'=>'Peon',
            
        ],
		[
            'Sr_no'=>'11',
            'name'=>'Mr. Kumbhakarna Amol Madhukar',
            'degignation'=>'Peon',
            
        ],
		[
            'Sr_no'=>'12',
            'name'=>'Mr. Bhad Sandip  Kisan',
            'degignation'=>'Driver',
            
        ],
		[
            'Sr_no'=>'13',
            'name'=>'Mr. Jagtap Balasheb Chhagan ',
            'degignation'=>'Driver',
            
        ],
		[
            'Sr_no'=>'14',
            'name'=>'Mr. Arane Chandrakant Karbhari',
            'degignation'=>'Watchman',
            
        ],
        
    ]
?>

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Administration Department
							</h1>	
							<p class="text-white link-nav"><a href="<?=base_url('/');?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?=base_url('/administration_department');?>">Administration Department</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			
	
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">

					<div class="section-top-border">
						<h3 class="mb-30">Administration Department</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">#</div>
									<div class="country">Employee Name</div>
									<div class="visit">Degignation</div>
									
								</div>
                                <?php foreach($data as $list):?>
								<div class="table-row">
									<div class="serial"><?=$list['Sr_no'];?></div>
									<div class="country"><?=$list['name'];?></div>
									<div class="visit"><?=$list['degignation'];?></div>
									
								</div>
								<?php endforeach;?>
								
							</div>
						</div>
					</div>
					
				
					
				</div>
			</div>
			<!-- End Align Area -->

			<!-- start footer Area -->		
			
			<!-- End footer Area -->	
