<?php
$portfolio_eyebrow = "RECENT PROJECTS";
$portfolio_title = "Work that speaks for itself";
$portfolio_desc = "Take a look at some of our latest designs, digital systems, and SEO campaigns crafted to drive results.";

$portfolio_items = [
    [
        "title" => " Logistics Platform",
        "category" => "Web Application / Dashboard",
        "image" => "https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80",
        "desc" => "Designed and built a real-time portal resulting in a 40% reduction in customer support requests."
    ],
    [
        "title" => " E-Commerce ",
        "category" => "E-Commerce / Shopify",
        "image" => "https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80",
        "desc" => "A modern conversion-focused storefront redesign that improved mobile conversion rates by 2.4%."
    ],
    [
        "title" => "seo campaign",
        "category" => "Web Design / Local SEO",
        "image" => "https://images.unsplash.com/photo-1507537297725-24a1c029d3ca?auto=format&fit=crop&w=600&q=80",
        "desc" => "Custom website refresh and SEO strategy generating a 250% increase in weekly qualified consultation calls."
    ]
];
?>



<section class="portfolio-section">
    <div class="container">
        <span class="section-eyebrow"><?php echo $portfolio_eyebrow; ?></span>
        <h2><?php echo $portfolio_title; ?></h2>
        <p class="section-desc"><?php echo $portfolio_desc; ?></p>
        
        <div class="portfolio-grid">
            <?php foreach ($portfolio_items as $item): ?>
                <div class="portfolio-card">
                    <div class="portfolio-image" style="background-image: url('<?php echo $item['image']; ?>')">
                        <span class="portfolio-category"><?php echo $item['category']; ?></span>
                    </div>
                    <div class="portfolio-info">
                        <h3><?php echo $item['title']; ?></h3>
                        <p><?php echo $item['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
