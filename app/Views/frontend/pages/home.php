<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-between">
            <div class="banner-content col-lg-9 col-md-12">
                <h1 class="text-uppercase">
                    We Ensure better education
                    for a better world
                </h1>
                <p class="pt-10 pb-10">
                    In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.
                </p>
                <a href="#" class="primary-btn text-uppercase">Get Started</a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start feature Area -->
<?php
include_once(APPPATH . 'Views/frontend/inc/feature.php');
?>
<!-- End feature Area -->

<!-- Start popular-course Area -->
<section class="popular-course-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Popular Courses we offer</h1>
                    <p>There is a moment in the life of any aspiring.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-popular-carusel">
                <?php foreach ($course_data as $course): ?>
                    <div class="single-popular-carusel">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" style="width: 263px; height: 200px;" src="<?= base_url('frontend/img/courses/' . $course['img']); ?>" loading="lazy" alt="<?= $course['name']; ?>" />
                            </div>

                        </div>
                        <div class="details">
                            <a href="<?= base_url('/course_details/' . $course['short_name']); ?>">
                                <h4>
                                    <?= $course['name']; ?>
                                </h4>
                            </a>
                            <p class="description">
                                <?= $course['description']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
<!-- End popular-course Area -->


<!-- Start search-course Area -->
<section class="search-course-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-6 search-course-left">
                <h1 class="text-white">
                    Get reduced fee <br>
                    during this Summer!
                </h1>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
                </p>
                <div class="row details-content">
                    <div class="col single-detials">
                        <span class="lnr lnr-graduation-hat"></span>
                        <a href="#">
                            <h4>Expert Instructors</h4>
                        </a>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                    <div class="col single-detials">
                        <span class="lnr lnr-license"></span>
                        <a href="#">
                            <h4>Certification</h4>
                        </a>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 search-course-right section-gap">
                <form class="form-wrap" action="#">
                    <h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4>
                    <input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'">
                    <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'">
                    <input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'">
                    <div class="form-select" id="service-select">
                        <select>
                            <option datd-display="">Choose Course</option>
                            <?php foreach ($course_data as $course): ?>
                                <option value="<?= $course['name']; ?>"><?= $course['short_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="primary-btn text-uppercase">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End search-course Area -->


<!-- Start upcoming-event Area -->
<section class="upcoming-event-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Upcoming Events of our Institute</h1>
                    <p>If you are a serious astronomy fanatic like a lot of us</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-upcoming-event-carusel">
                <?php foreach ($events as $event): ?>
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" style="width: 263px; height: 220px;" src="<?= base_url('frontend/img/events/' . $event['img']); ?>" loading="lazy" alt="<?= $event['name']; ?>">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p><?= formatDate($event['date']); ?></p>
                            <a href="<?= base_url('/event_details/' . base64_encode($event['id'])); ?>">
                                <h4><?= ucfirst($event['name']); ?></h4>
                            </a>
                            <p style="text-align: justify;" class="description">
                                <?= esc($event['description']); ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
<!-- End upcoming-event Area -->

<!-- Start review Area -->
<?php
include_once(APPPATH . 'Views/frontend/inc/review.php');
?>
<!-- End review Area -->

<!-- Start cta-one Area -->
<section class="cta-one-area relative section-gap">
    <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row justify-content-center">
            <div class="wrap">
                <h1 class="text-white">Become an instructor</h1>
                <p>
                    There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station whether that is on the deck.
                </p>
                <a class="primary-btn wh" href="#">Apply for the post</a>
            </div>
        </div>
    </div>
</section>
<!-- End cta-one Area -->

<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Latest News</h1>
                    <p>In the history of modern astronomy there is.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($news as $row): ?>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="frontend/img/news/<?= $row['img']; ?>" alt="<?= $row['img']; ?>" loading="lazy">
                    </div>
                    <p class="meta"><?= formatDate($row['date']); ?> | By <a href="#"><?= $row['organiser']; ?></a></p>
                    <a href="<?= base_url('/news_details/' . base64_encode($row['id'])); ?>">
                        <h5><?= ucfirst($row['name']); ?></h5>
                    </a>
                    <p style="text-align: justify;" class="description">
                        <?= $row['description']; ?>
                    </p>
                    <a href="<?= base_url('/news_details/' . base64_encode($row['id'])); ?>" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                </div>
            <?php endforeach;  ?>

        </div>
    </div>
</section>
<!-- End blog Area -->


<!-- Start cta-two Area -->
<?php
include_once(APPPATH . 'Views/frontend/inc/student_grievance.php');
?>
<!-- End cta-two Area -->