<?php
$testimonials_eyebrow = "TESTIMONIALS";
$testimonials_title = "What our clients are saying";
$testimonials_desc = "We measure our success by the growth and success of our clients. Here is what they have to say about working with MINEIB.";

$testimonials_list = [
    [
        "rating" => 5,
        "text" => "MINEIB took our legacy portal and rebuilt it into a stunning, responsive web dashboard. The process was incredibly structured, and our users are thrilled with the new performance.",
        "author" => "Sarah Jenkins",
        "role" => "CEO, Apex Logistics"
    ],
    [
        "rating" => 5,
        "text" => "Our online sales skyrocketed after the redesign. They understood our brand identity perfectly, and the mobile performance is outstanding. Couldn't recommend them more!",
        "author" => "Marcus Chen",
        "role" => "Founder, Nova Cosmetics"
    ],
    [
        "rating" => 5,
        "text" => "Their SEO optimization plan put us on the first page of search results for our key practice areas within 3 months. The volume of new leads has been game-changing.",
        "author" => "David Vance",
        "role" => "Partner, Zenith Law Group"
    ]
];
?>

<section class="testimonials-section">
    <div class="container">
        <span class="section-eyebrow"><?php echo $testimonials_eyebrow; ?></span>
        <h2><?php echo $testimonials_title; ?></h2>
        <p class="section-desc"><?php echo $testimonials_desc; ?></p>
        
        <div class="testimonials-grid">
            <?php foreach ($testimonials_list as $review): ?>
                <div class="testimonial-card">
                    <div class="rating-stars">
                        <?php echo str_repeat("★", $review['rating']); ?>
                    </div>
                    <p class="testimonial-text">"<?php echo $review['text']; ?>"</p>
                    <div class="testimonial-author">
                        <strong><?php echo $review['author']; ?></strong>
                        <span><?php echo $review['role']; ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
