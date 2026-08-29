<?php
$services_eyebrow = "OUR SERVICES";
$services_title = "High-impact solutions to scale your business";
$services_desc = "From initial design prototypes to production-ready platforms and ongoing marketing campaigns, we cover the entire digital product lifecycle.";

$services_list = [
    [
        "icon" => "✨",
        "title" => "Web Design",
        "desc" => "Stunning, brand-aligned interfaces that capture attention and guide users smoothly toward conversion."
    ],
    [
        "icon" => "💻",
        "title" => "Web Development",
        "desc" => "Clean, high-performance code building fast, secure, and responsive sites that rank well and function flawlessly."
    ],
    [
        "icon" => "📈",
        "title" => "Digital Marketing",
        "desc" => "Data-driven SEO, Google Ads, and content strategies designed to place your business right in front of active buyers."
    ]
];
?>

<section class="services-section">
    <div class="container">
        <span class="section-eyebrow"><?php echo $services_eyebrow; ?></span>
        <h2><?php echo $services_title; ?></h2>
        <p class="section-desc"><?php echo $services_desc; ?></p>
        
        <div class="services-grid">
            <?php foreach ($services_list as $service): ?>
                <div class="service-card">
                    <div class="service-icon"><?php echo $service['icon']; ?></div>
                    <h3><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
