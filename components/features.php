<?php
// components/features.php

$features_title = "Why Choose Us";
$features_subtitle = "We deliver top-tier web solutions tailored to your business needs.";

$features_list = [
    [
        "title" => "Custom Web Design",
        "description" => "Tailor-made designs that reflect your brand identity."
    ],
    [
        "title" => "SEO Optimization",
        "description" => "Be found on Google and attract more organic customers."
    ],
    [
        "title" => "High Performance",
        "description" => "Fast loading speeds to increase visitor retention."
    ]
];
?>
<section class="features-section">
    <div class="container">
        <h2><?php echo $features_title; ?></h2>
        <p class="subtitle"><?php echo $features_subtitle; ?></p>
        
        <div class="features-grid">
            <?php foreach ($features_list as $feature): ?>
                <div class="feature-card">
                    <h3><?php echo $feature['title']; ?></h3>
                    <p><?php echo $feature['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>