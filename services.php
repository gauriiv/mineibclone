<?php
    include 'includes/header.php';

    $services_eyebrow = "OUR EXPERTISE";
    $services_title = "High-Impact Solutions to Scale Your Business";
    $services_desc = "From initial design prototypes to production-ready platforms and ongoing marketing campaigns, we cover the entire digital product lifecycle.";

    $services_list = [
        [
            "icon" => "✨",
            "title" => "UI/UX & Web Design",
            "desc" => "Engaging, brand-aligned interfaces crafted with precision to capture visitor attention and guide users smoothly toward conversion."
        ],
        [
            "icon" => "💻",
            "title" => "Custom Web Development",
            "desc" => "Clean, high-performance code building fast, secure, and responsive websites and applications that function flawlessly."
        ],
        [
            "icon" => "📈",
            "title" => "Digital Marketing & SEO",
            "desc" => "Data-driven SEO, Google Ads, and content strategies designed to place your business right in front of active buyers."
        ],
        [
            "icon" => "⚡",
            "title" => "Speed & Core Web Vitals",
            "desc" => "Asset compression, caching architecture, and performance tuning to achieve sub-second load times and boost Google rankings."
        ],
        [
            "icon" => "🛒",
            "title" => "E-Commerce Solutions",
            "desc" => "Scalable digital storefronts with seamless checkout flows, secure payment gateways, and inventory management integration."
        ],
        [
            "icon" => "🛡️",
            "title" => "Maintenance & Security",
            "desc" => "Continuous uptime monitoring, daily backups, and security patching to keep your website fast, protected, and trouble-free."
        ]
    ];
?>

<!-- Services Hero Header -->
<section style="padding: 120px 6% 40px; text-align: center; max-width: 900px; margin: 0 auto;">
    <span class="section-eyebrow" style="color: var(--amber); font-family: var(--font-mono); font-size: 0.8rem; letter-spacing: 1.5px; text-transform: uppercase;"><?php echo $services_eyebrow; ?></span>
    <h1 style="font-family: var(--font-display); font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 700; margin: 16px 0; color: var(--text-main); line-height: 1.15;"><?php echo $services_title; ?></h1>
    <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.7; max-width: 700px; margin: 0 auto;"><?php echo $services_desc; ?></p>
</section>

<!-- Services Grid -->
<section class="services-section" style="border-top: none; padding-top: 20px;">
    <div class="services-grid">
        <?php foreach ($services_list as $service): ?>
            <div class="service-card">
                <div class="service-icon"><?php echo $service['icon']; ?></div>
                <h3><?php echo $service['title']; ?></h3>
                <p><?php echo $service['desc']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Workflow / Process Section -->
<section style="padding: 60px 6% 80px; max-width: 1200px; margin: 0 auto; border-top: 1px solid var(--navy-line);">
    <div class="container" style="text-align: center; margin-bottom: 50px;">
        <span class="section-eyebrow" style="color: var(--amber); font-family: var(--font-mono); font-size: 0.8rem; letter-spacing: 1.5px; text-transform: uppercase;">HOW WE WORK</span>
        <h2 style="font-family: var(--font-display); font-size: clamp(1.8rem, 3vw, 2.4rem); color: var(--text-main); margin-top: 10px;">Our 4-Step Proven Process</h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px;">
        <div style="background: var(--navy-mid); border: 1px solid var(--navy-line); border-radius: var(--radius); padding: 32px 24px;">
            <span style="font-family: var(--font-mono); color: var(--orange); font-size: 1.5rem; font-weight: 700; display: block; margin-bottom: 12px;">01</span>
            <h3 style="font-family: var(--font-display); color: var(--text-main); font-size: 1.15rem; margin-bottom: 8px;">Discovery & Strategy</h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">We analyze your market, competitors, and target audience to define a winning digital roadmap.</p>
        </div>
        <div style="background: var(--navy-mid); border: 1px solid var(--navy-line); border-radius: var(--radius); padding: 32px 24px;">
            <span style="font-family: var(--font-mono); color: var(--orange); font-size: 1.5rem; font-weight: 700; display: block; margin-bottom: 12px;">02</span>
            <h3 style="font-family: var(--font-display); color: var(--text-main); font-size: 1.15rem; margin-bottom: 8px;">UI/UX Design</h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">Wireframing and crafting modern, brand-consistent interactive prototypes for your review.</p>
        </div>
        <div style="background: var(--navy-mid); border: 1px solid var(--navy-line); border-radius: var(--radius); padding: 32px 24px;">
            <span style="font-family: var(--font-mono); color: var(--orange); font-size: 1.5rem; font-weight: 700; display: block; margin-bottom: 12px;">03</span>
            <h3 style="font-family: var(--font-display); color: var(--text-main); font-size: 1.15rem; margin-bottom: 8px;">Development</h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">Writing clean, fast, and secure code with rigorous cross-browser and responsiveness testing.</p>
        </div>
        <div style="background: var(--navy-mid); border: 1px solid var(--navy-line); border-radius: var(--radius); padding: 32px 24px;">
            <span style="font-family: var(--font-mono); color: var(--orange); font-size: 1.5rem; font-weight: 700; display: block; margin-bottom: 12px;">04</span>
            <h3 style="font-family: var(--font-display); color: var(--text-main); font-size: 1.15rem; margin-bottom: 8px;">Launch & Growth</h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">Deploying to production, configuring SEO monitoring, and scaling your conversion funnel.</p>
        </div>
    </div>
</section>

<?php
    include 'components/cta.php';
    include 'includes/footer.php';
?>

