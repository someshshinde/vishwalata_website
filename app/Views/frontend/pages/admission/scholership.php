<?php
$documents = [
    [
        "sr" => "1",
        "name" => "Adhar card"
    ],
    [
        "sr" => "2",
        "name" => " Income Certificate of Father in original (Upto 6 lakh for all category except SC/ST)"
    ],
    [
        "sr" => "3",
        "name" => "Admission Receipt Xerox"
    ],
    [
        "sr" => "4",
        "name" => "10th Or last year marksheet xerox"
    ],
    [
        "sr" => "5",
        "name" => "Cast Validity Certificate"
    ],
    [
        "sr" => "6",
        "name" => "Non-Creamy Layer Certificate"
    ],
    [
        "sr" => "7",
        "name" => "Saving Account in Nationalized Bank"
    ],
    [
        "sr" => "8",
        "name" => "Passport size photo - 03"
    ],
    [
        "sr" => "9",
        "name" => "Gap Certificate (If required)"
    ],
    [
        "sr" => "10",
        "name" => "Death Certificate (If parent is no more)"
    ],
    [
        "sr" => "11",
        "name" => "72% attendance compulsary otherwise not eligible for scholarship"
    ],
    [
        "sr" => "12",
        "name" => "Application in the prescribed format with all necessary documents attached"
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
                    Scholership
                </h1>
                <p class="text-white link-nav"><a href="<?= base_url('/'); ?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('admission/scholership'); ?>">Scholership</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start Sample Area -->
<section class="sample-text-area">
    <div class="container">
        <h3 class="text-heading">Government Scholarships & Freeships</h3>
        <p class="sample-text" style="text-align: justify;">
            The Government of India scholarship includes maintenance charges, fees and expenses of approved study
            tours in respect of professional courses. The maintenance charges to the students are detailed in Rules V of the
            Government of India Regulation. Types of Government scholarships & freeships.<br /><i>

                For Open Category Students Dr. Punjabrao Deshmukh Vasatigruh Nirvah Bhatta Yojna (DHE) For Hostel Student For ST Category Students Pandit Dindayal Upadhyay Swayam Yojna
            </i>


        </p>
    </div>
</section>
<!-- End Sample Area -->

<!-- Start Align Area -->
<div class="whole-wrap">
    <div class="container">


        <div class="section-top-border">

            <div class="row">
                <div class="col-md-4">
                    <div class="single-defination">
                        <h4 class="mb-20">Document Required for scholarship</h4>
                        <ul>
                            <?php foreach ($documents as $row): ?>
                                <li><?= $row['sr']; ?>.&nbsp;.<?= $row['name'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-defination">
                        <h4 class="mb-20">Mandetory Documents</h4>
                        <p style="font-family: 'Khula', sans-serif, ">बँक खात्यात शिष्यवृत्ती/सरकारी अनुदान मिळविण्यासाठी, तुमचे खाते आधार लिंक असणे आवश्यक आहे.
                            खाते उघडण्यासाठी खालील बाबी आवश्यक आहेत. शिक्षणाबाबतचे सरकारी नियम दर आठवड्याला बदलतात.
                        <ol>
                            <li>मोबाईल क्रमांक</li>
                            <li>आधार क्रमांक </li>
                            <li>पॅन कार्ड (उपलब्ध असेल तर ) </li>
                            <li>शिष्यवृत्ती अर्ज क्रमांक</li>
                        </ol>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-defination">
                        <h4 class="mb-20">All Scholarship form to be filled online only</h4>
                        <p>
                        <dl>
                            <dt>Scholarship</dt>
                            <dd>EBC/SEBC</dd>
                            <dd>OBC/VJNT/SBC</dd>
                            <dd>SC/ST</dd>

                            <dt>Freeship</dt>
                            <dd>EBC/SEBC</dd>
                            <dd>OBC/VJNT/SBC</dd>
                            <dd>SC/ST</dd>
                        </dl>
                        <ol>
                            <li><a href="https://mahaeschol.maharashtra.gov.in">(SBC,OBC,VJ,NT,SC category)</a></li>
                            <li><a href="https://etribal.maharashtra.gov.in">(ST category only)</a></li>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-top-border">
            <h3 class="mb-30">Late .Sonabai Narayan Bhandare Scholarship</h3>
            <div class="row">
                <div class="col-lg-12">
                    <blockquote class="generic-blockquote">
                        Late .Sonabai Narayan Bhandare Scholarship for Economically backward Open category
                        female student Only.( From management of Institute)
                    </blockquote>
                    <table>
                        <thead>
                            <th>Year</th>
                            <th>B.C.A</th>
                            <th>B.B.A/B.B.M</th>
                            <th>Eligibility</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>First</td>
                                <td>8,000/-</td>
                                <td>2,000/-</td>
                                <td>12 th Pass out with above 60 % marks.</td>
                            </tr>
                            <tr>
                                <td>Second</td>
                                <td>5,000/-</td>
                                <td>1,500/-</td>
                                <td>First year Pass out with above 60 % marks.</td>
                            </tr>
                            <tr>
                                <td>Third</td>
                                <td>3,000/-</td>
                                <td>1,000/-</td>
                                <td>Second Year Pass out with above 60 % marks.</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="section-top-border">
            <h3 class="mb-30">Refund of fees</h3>
            <div class="row">
                <div class="col-lg-12">
                    <blockquote class="generic-blockquote" style="text-align: justify;">
                        For the course which do not come under the juridiction of DTE e.g. B.S.C, B.C.S, B.C.A,
                        B.B.A.,B.B.M, B.COM , M.COM, MCS etc.cancellation of admission before the commencement
                        of courses of the relevant academic year as per the notification issued by UGC, New Delhi dated
                        23 rd April 2007.For the candidates who cancel their admission before starting the course for the
                        relevant academic year his entire fees after deducting processing fee of not more than RS.1000 /-
                        shall be refunded to the student by the university concerned Institutions.
                        If the student cancel admission after course is started, following scheme will be adopted.
                    </blockquote>
                    <table>
                        <thead>
                            <th>Sr.No</th>
                            <th>Time of Cancellation</th>
                            <th>Amount to be deducted</th>

                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>From 1 st day to 10 th day (first day is inclusive) from the date of commencement of the course</td>
                                <td>20% of the total fees.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>From 11 th to 30 th day from the date of commencement (first day is inclusive) of the course</td>
                                <td>40% of the total fees.</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>After 30 days ( First day is Inclusive)</td>
                                <td>100% of the total fees.</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>




    </div>
</div>
<!-- End Align Area -->