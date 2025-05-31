<?php
$placementPartners = [
    [
        "name" => "ICICI Bank",
        "url" => "https://www.icicibank.com",
        "logo" => "icici-bank-vector-logo.png",
        "alt" => "ICICI Bank"
    ],
    [
        "name" => "Infosys",
        "url" => "https://www.infosys.com",
        "logo" => "infosys-logo.jpg",
        "alt" => "Infosys Technologies"
    ],
    [
        "name" => "Anvento Software",
        "url" => "https://advantosoftware.com/",
        "logo" => "Advanto-loggo.jpg",
        "alt" => "Anvento Software"
    ],
    [
        "name" => "Healthy Food",
        "url" => "https://healthyfoods.com.in/",
        "logo" => "Healthy_Food.png",
        "alt" => "Healthy Food"
    ],
    [
        "name" => "Axis Bank",
        "url" => "https://www.axisbank.com",
        "logo" => "Axis_Bank.png",
        "alt" => "Axis Bank"
    ],

];
?>
<?php foreach ($placementPartners as $partner): ?>
    <div class="single-review item">
        <div class="title justify-content-start d-flex">
            <a href="<?= $partner['url']; ?>" target="_blank" rel="noopener noreferrer">
                <img style="width: 503px; height: 266px;" src="frontend/img/placement-partners/<?= $partner['logo']; ?>"
                    alt="<?= $partner['alt']; ?>"
                    class="img-fluid">
                <span class="partner-name"><?= $partner['name']; ?></span>
            </a>

        </div>

    </div>
<?php endforeach; ?>