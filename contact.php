<?php
    include 'includes/header.php';   
?>

<section class="contact-section" style="padding: 100px 6% 60px; max-width: 1200px; margin: 0 auto; text-align: center;">
    <div class="container">
        <span class="section-eyebrow">GET IN TOUCH</span>
        <h2 style="font-family: var(--font-display); font-size: clamp(2rem, 3.5vw, 2.8rem); margin-bottom: 20px;">
            Let's discuss your next project
        </h2>
        <p class="section-desc" style="margin: 0 auto 40px;">
            Have a question or ready to scale your business? Reach out to us below.
        </p>

        <form style="max-width: 600px; width: 100%; margin: 0 auto; display: flex; flex-direction: column; gap: 18px;" onsubmit="event.preventDefault(); alert('Thank you! Your message has been received.');">
            <input type="text" placeholder="Your Name" required style="padding: 14px 18px; border-radius: var(--radius); border: 1px solid var(--navy-line); background: var(--navy-mid); color: var(--text-main); font-family: var(--font-body); font-size: 0.95rem; width: 100%;">
            <input type="email" placeholder="Your Email" required style="padding: 14px 18px; border-radius: var(--radius); border: 1px solid var(--navy-line); background: var(--navy-mid); color: var(--text-main); font-family: var(--font-body); font-size: 0.95rem; width: 100%;">
            <textarea rows="5" placeholder="Tell us about your project..." required style="padding: 14px 18px; border-radius: var(--radius); border: 1px solid var(--navy-line); background: var(--navy-mid); color: var(--text-main); font-family: var(--font-body); font-size: 0.95rem; width: 100%; resize: vertical;"></textarea>
            <button type="submit" class="btn-cta" style="border: none; cursor: pointer; align-self: flex-start;">Send Message</button>
        </form>
    </div>
</section>

<?php
    include 'includes/footer.php';
?>
