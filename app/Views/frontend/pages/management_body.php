<?php 
$data_members=[
       
        [
            'Sr_no'=>'01',
            'Name'=>'Mr. Vishwanath N. Bhandare',
            'Designation'=>'Founder',
            'Image'=>'img/elements/f1.jpg',
        ],
        [
            'Sr_no'=>'02',
            'Name'=>'Mr. Milind V. Bhandare',
            'Designation'=>'President',
            'Image'=>'img/elements/f1.jpg',
        ],
        [
            'Sr_no'=>'03',
            'Name'=>'Mr. Prashant V. Bhandare',
            'Designation'=>'Secretary',
            'Image'=>'img/elements/f1.jpg',
        ],
        [
            'Sr_no'=>'04',
            'Name'=>'Mrs. Lata B. Laghave',
            'Designation'=>'Trustee',
            'Image'=>'img/elements/f1.jpg',
        ],
                [
            'Sr_no'=>'05',
            'Name'=>'Mr. Kishor B. Laghave',
            'Designation'=>'Trustee',
            'Image'=>'img/elements/f1.jpg',
        ],
                [
            'Sr_no'=>'06',
            'Name'=>'Mrs. Sejal S. Dhumal',
            'Designation'=>'Trustee',
            'Image'=>'img/elements/f1.jpg',
        ],
        [
            'Sr_no'=>'07',
            'Name'=>'Mr. Bhushan K. Laghave',
            'Designation'=>'Trustee',
            'Image'=>'img/elements/f1.jpg',
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
								Management Body		
							</h1>	
							<p class="text-white link-nav"><a href="<?=base_url('/about');?>">About </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?=base_url('/management_body');?>">Management Body</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			
	
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">

					<div class="section-top-border">
						<h3 class="mb-30">Management Body</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">#</div>
									<div class="country">Name of Trustee</div>
									<div class="visit">Designation</div>
									
								</div>
                                <?php foreach($data_members as $member):?>
								<div class="table-row">
									<div class="serial"><?=$member['Sr_no'];?></div>
									<div class="country"><?=$member['Name'];?></div>
									<div class="visit"><?=$member['Designation']?></div>
									
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
