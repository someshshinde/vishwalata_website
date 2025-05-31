
<?php 
$data=[
       
        [
            'Sr_no'=>'01',
            'Type'=>'ISO',
            'link'=>'output001.txt',
            
        ],
        [
            'Sr_no'=>'02',
            'Type'=>'AAA',
            'link'=>'output001.txt',
            
        ],
        [
            'Sr_no'=>'03',
            'Type'=>'CGA',
            'link'=>'output001.txt',
            
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
								Certification		
							</h1>	
							<p class="text-white link-nav"><a href="<?=base_url('/');?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?=base_url('naac/certification');?>">Certification</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			
	
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">

					<div class="section-top-border">
						<h3 class="mb-30">Certification</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">#</div>
									<div class="country">Type of Certification</div>
									<div class="visit">Action</div>
									
								</div>
                                <?php foreach($data as $list):?>
								<div class="table-row">
									<div class="serial"><?=$list['Sr_no'];?></div>
									<div class="country"><?=$list['Type'];?></div>
									<div class="visit"><a href="<?=base_url('frontend/naac/Certification/'.$list['link'])?>" target="_blank"class="genric-btn info circle" >View</a></div>
									
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

