<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Original Laminate Flooring',
                'order' => 1,
                'has_products' => 1,
                'name' => 'Flooring',
                'slung' => 'original-laminate-flooring',
                'meta' => 'Laminate flooring\'s enhanced durability compared to ordinary wood arises from its wear layer. Comprising multiple protective coats infused with materials like aluminum oxide, this layer acts as a robust shield against scratches, stains, and fading. Unlike wood, it resists damage and UV-induced color changes, ensuring a long-lasting appearance with minimal maintenance.',
                'content' => '<ul>
<li><strong>Back Layer</strong>: Provides stability and acts as a moisture barrier to prevent warping or damage from below.</li>
<li><strong>HDF Layer</strong>: High-Density Fiberboard layer forms the core structure, adding strength and durability.</li>
<li><strong>Print Layer</strong>: High-resolution photograph of natural materials (like wood or stone) that gives the flooring its realistic appearance.</li>
<li><strong>Protective Layer</strong>: Scratch-resistant coating, often infused with materials like aluminum oxide, shields the floor from wear and tear.</li>
<li><strong>Waterproof Layer</strong>: A top layer that adds water resistance, enhancing the flooring\'s durability and making it suitable for areas prone to moisture.</li>
</ul>

<p>The texturing process in laminate flooring involves:</p>

<ul>
<li><strong>Embossing</strong>: Pressing textured plates onto the surface to mimic wood or stone patterns.</li>
<li><strong>Registered Embossing</strong>: Aligning texture with printed design for enhanced realism.</li>
<li><strong>Hand Scraping and Distressing</strong>: Artificially adding wear and imperfections for authenticity.</li>
<li><strong>Gloss Levels</strong>: Choosing gloss for light reflection and perceived texture.</li>
</ul>',
                'thicknesses' => 'The laminate has different thicknesses, ranging from 7mm to 12mm, and usually the thicker the laminate, the more likely you are to hear natural wood under your feet.<br>The laminate has different thicknesses, ranging from 7mm to 12mm, and usually the thicker the laminate, the more likely you are to hear natural wood under your feet.',
                'a_c_ratings' => 'The AC rating represents the wear rating and is the number you should pay attention to. The AC value of a product reflects its applicability to a particular level of traffic, which will help you find the best floor for you. The laminate flooring is subject to a series of tests to determine the durability of the flooring and the appropriate mounting area. The laminate flooring has six AC ratings:',
                'color' => 'We\'ve prepared a variety of color options, and the tan laminate makes your room look bigger and more open. You\'ll also get that wonderful, rich warmth from slightly darker tones. In addition to looking chic and stylish, the gray laminate sets the tone for a cool modern home.<br>We\'ve prepared a variety of color options, and the tan laminate makes your room look bigger and more open. You\'ll also get that wonderful, rich warmth from slightly darker tones. In addition to looking chic and stylish, the gray laminate sets the tone for a cool modern home.',
                'species' => 'We\'ve prepared a variety of color options, and the tan laminate makes your room look bigger and more open. You\'ll also get that wonderful, rich warmth from slightly darker tones. In addition to looking chic and stylish, the gray laminate sets the tone for a cool modern home.',
                'heading_two' => 'Elegant Flooring Redefined: Immerse Yourself in the Belgian Legacy of Quick-Step\'s Top-End Craftsmanship',
                'heading_two_section' => 'LAMINATE FLOORING IS COMPOSED OF MANY LAYERS, INCLUDING:',
                'content_two' => '',
                'content_two_image' => '',
                'image' => 'laminate-flooring-kenya-cover-page.jpg',
                'created_at' => '2023-06-12 09:06:57',
                'updated_at' => '2023-06-12 09:06:57',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Decomanga Cabinets and Doors',
                'order' => 4,
                'has_products' => 0,
                'name' => 'Elora Cabinets and Doors',
                'slung' => 'decomanga-cabinets-and-doors',
                'meta' => '..',
                'content' => '<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Decomagna — Cabinets & Doors in Kenya | Design • Build • Install</title>
<meta name="description" content="Decomagna Ltd designs, builds, and installs modern kitchen cabinets, wardrobes, and premium doors in Kenya. Turn‑key service: design, manufacturing, delivery and expert installation." />
<link rel="preconnect" href="https://cdn.jsdelivr.net" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="icon" href="data:image/svg+xml,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 64 64\'><rect width=\'64\' height=\'64\' fill=\'%230d6efd\'/><text x=\'50%\' y=\'56%\' dominant-baseline=\'middle\' text-anchor=\'middle\' font-family=\'Arial\' font-size=\'36\' fill=\'white\'>D</text></svg>">
<style>
:root{
--dmn-dark:#0b0f14;
--dmn-primary:#0d6efd;/* Bootstrap primary */
--dmn-accent:#20c997;/* teal */
--dmn-muted:#6c757d;
}
html{scroll-behavior:smooth}
body{background:#f8fafc;color:#1c1f23}
.navbar-brand span{font-weight:700;letter-spacing:.2px}
.hero{
background: radial-gradient(1000px 400px at 10% 10%, rgba(13,110,253,.15), transparent 60%),
radial-gradient(800px 400px at 90% 10%, rgba(32,201,151,.15), transparent 60%),
linear-gradient(180deg,#ffffff, #f3f6fb 60%);
padding: 5rem 0 4rem;
position: relative;
overflow: hidden;
}
.hero .badge{background: rgba(13,110,253,.12); color:#0d6efd;}
.card-gradient{
background: linear-gradient(180deg, #ffffff, #f7f9fc);
border:1px solid #e9eef7;
box-shadow: 0 6px 24px rgba(13,110,253,.05);
}
.section-title{
font-weight:800; letter-spacing:.2px;
}
.feature-icon{
width:48px;height:48px;border-radius:12px;
display:grid;place-items:center;background:#edf4ff;color:#0d6efd;
}
.gallery-img{
aspect-ratio: 4/3; object-fit:cover; border-radius:12px; width:100%;
background: #e7ecf5;
}
.pill{border:1px solid #e9eef7;border-radius:999px;padding:.5rem 1rem;}
.check{color:#20c997}
.bg-dark-ink{background:var(--dmn-dark);}
.cta-btn{box-shadow:0 10px 24px rgba(32,201,151,.25)}
.footer a{color:#cbd5e1}
.small-muted{color:var(--dmn-muted)}
.whatsapp{color:#25D366}
</style>
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
<div class="container py-2">
<a class="navbar-brand d-flex align-items-center" href="#">
<span class="badge rounded-pill me-2">DM</span>
<span>Decomagna Ltd</span>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="nav">
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
<li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
<li class="nav-item"><a class="nav-link" href="#process">Process</a></li>
<li class="nav-item"><a class="nav-link" href="#why">Why Us</a></li>
<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
</ul>
<a class="btn btn-primary ms-lg-3" href="#contact">Get a Quote</a>
</div>
</div>
</nav>

<!-- HERO -->
<header class="hero">
<div class="container">
<div class="row align-items-center g-5">
<div class="col-lg-7">
<span class="badge rounded-pill mb-3">Cabinets • Wardrobes • Premium Doors</span>
<h1 class="display-5 fw-bold mb-3">Beautiful, durable <span class="text-primary">Cabinets</span> & <span class="text-primary">Doors</span> — designed, built, and installed in Kenya.</h1>
<p class="lead text-secondary mb-4">We combine European finishes with local craftsmanship. From kitchen cabinetry and wardrobes to laminate‑clad pivot and security doors — we handle design, manufacturing, delivery and expert installation.</p>
<div class="d-flex gap-3 flex-wrap">
<a href="#contact" class="btn btn-success cta-btn">Request a Site Visit</a>
<a href="#gallery" class="btn btn-outline-primary">See our work</a>
<div class="d-flex align-items-center small small-muted">
<span class="ms-1">Call/WhatsApp: <a class="ms-1 text-decoration-none" href="https://wa.me/254796110511" target="_blank" rel="noopener">+254 796 110 511</a></span>
</div>
</div>
<div class="d-flex gap-3 mt-4">
<span class="pill">Lead time: 10–21 days*</span>
<span class="pill">Warranty: 12 months</span>
</div>
</div>
<div class="col-lg-5">
<!-- Inline SVG Showcase -->
<div class="card card-gradient border-0 p-3 p-md-4">
<svg viewBox="0 0 560 420" class="w-100 rounded" role="img" aria-label="Cabinet & door mockup">
<defs>
<linearGradient id="g1" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#dfe8ff"/>
<stop offset="100%" stop-color="#f7f9ff"/>
</linearGradient>
</defs>
<rect x="0" y="0" width="560" height="420" fill="url(#g1)"/>
<!-- cabinet block -->
<rect x="40" y="60" width="300" height="240" rx="16" fill="#ffffff" stroke="#e3e8f5"/>
<rect x="60" y="80" width="120" height="200" rx="6" fill="#f1f4fa" stroke="#e3e8f5"/>
<rect x="200" y="80" width="120" height="200" rx="6" fill="#f1f4fa" stroke="#e3e8f5"/>
<circle cx="170" cy="180" r="6" fill="#0d6efd"/>
<circle cx="300" cy="180" r="6" fill="#0d6efd"/>
<!-- door block -->
<rect x="370" y="40" width="150" height="340" rx="10" fill="#1f2937"/>
<rect x="378" y="48" width="134" height="324" rx="8" fill="#374151"/>
<rect x="385" y="55" width="120" height="90" rx="6" fill="#111827"/>
<rect x="385" y="155" width="120" height="210" rx="6" fill="#111827"/>
<rect x="406" y="180" width="12" height="60" rx="4" fill="#20c997"/>
</svg>
<div class="d-flex gap-4 mt-3">
<div class="d-flex align-items-center gap-2 small"><span class="check">✔</span>Moisture‑resistant boards</div>
<div class="d-flex align-items-center gap-2 small"><span class="check">✔</span>Soft‑close hardware</div>
<div class="d-flex align-items-center gap-2 small"><span class="check">✔</span>Clean, modern edges</div>
</div>
</div>
</div>
</div>
</div>
</header>

<!-- SERVICES -->
<section id="services" class="py-5">
<div class="container">
<div class="row align-items-end mb-4">
<div class="col">
<h2 class="section-title">What we build</h2>
<p class="text-secondary">Turn‑key design → build → install. We produce to size, finish, and budget.</p>
</div>
</div>
<div class="row g-4">
<div class="col-md-6 col-lg-4">
<div class="card h-100 card-gradient p-3">
<div class="feature-icon mb-3"><i class="bi bi-grid-3x3-gap-fill"></i></div>
<h5>Kitchen Cabinets</h5>
<p class="small text-secondary">Modular, moisture‑resistant carcasses with premium hinges and soft‑close drawers. Countertops in laminate, quartz or solid wood.</p>
<ul class="small text-secondary mb-4">
<li>Design layouts &amp; 3D previews</li>
<li>Pantries, islands &amp; utility storage</li>
<li>On‑site measurement &amp; templating</li>
</ul>
<a href="#contact" class="btn btn-outline-primary w-100">Get a kitchen quote</a>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="card h-100 card-gradient p-3">
<div class="feature-icon mb-3"><i class="bi bi-door-closed-fill"></i></div>
<h5>Premium Doors</h5>
<p class="small text-secondary">Laminate‑clad pivot &amp; hinged doors with aluminum/steel structure, insulated cores and designer hardware.</p>
<ul class="small text-secondary mb-4">
<li>Pivot, security &amp; acoustic options</li>
<li>Custom sizes up to 2.7×1.4 m</li>
<li>Modern bronze/black trims</li>
</ul>
<a href="#contact" class="btn btn-outline-primary w-100">Price my door</a>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="card h-100 card-gradient p-3">
<div class="feature-icon mb-3"><i class="bi bi-archive-fill"></i></div>
<h5>Wardrobes &amp; Storage</h5>
<p class="small text-secondary">Sliding or hinged wardrobes with integrated lighting, organizers and mirror doors.</p>
<ul class="small text-secondary mb-4">
<li>Floor‑to‑ceiling panels</li>
<li>Soft‑close sliding systems</li>
<li>Custom internals &amp; accessories</li>
</ul>
<a href="#contact" class="btn btn-outline-primary w-100">Design my wardrobe</a>
</div>
</div>
</div>
</div>
</section>

<!-- GALLERY -->
<section id="gallery" class="py-5 bg-white border-top border-bottom">
<div class="container">
<div class="d-flex justify-content-between align-items-end mb-4">
<div>
<h2 class="section-title mb-1">Recent work</h2>
<p class="text-secondary mb-0">A small selection. More on request.</p>
</div>
<a href="#contact" class="btn btn-primary">Book a showroom visit</a>
</div>
<div class="row g-3">
<!-- Use simple SVG placeholders that you can replace with photos later -->
<div class="col-6 col-md-4 col-lg-3"><img class="gallery-img" alt="Kitchen project" src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 400 300\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%23dfe7f5\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' text-anchor=\'middle\' font-size=\'26\' font-family=\'Arial\' fill=\'%23556\'%3EKitchen%3C/text%3E%3C/svg%3E"></div>
<div class="col-6 col-md-4 col-lg-3"><img class="gallery-img" alt="Wardrobe" src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 400 300\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%23e9eef7\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' text-anchor=\'middle\' font-size=\'26\' font-family=\'Arial\' fill=\'%23556\'%3EWardrobe%3C/text%3E%3C/svg%3E"></div>
<div class="col-6 col-md-4 col-lg-3"><img class="gallery-img" alt="Pivot door" src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 400 300\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%23dfe7f5\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' text-anchor=\'middle\' font-size=\'26\' font-family=\'Arial\' fill=\'%23556\'%3EDoor%3C/text%3E%3C/svg%3E"></div>
<div class="col-6 col-md-4 col-lg-3"><img class="gallery-img" alt="TV unit" src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 400 300\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%23e9eef7\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' text-anchor=\'middle\' font-size=\'26\' font-family=\'Arial\' fill=\'%23556\'%3ETV Unit%3C/text%3E%3C/svg%3E"></div>
<div class="col-6 col-md-4 col-lg-3"><img class="gallery-img" alt="Office storage" src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 400 300\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%23e9eef7\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' text-anchor=\'middle\' font-size=\'26\' font-family=\'Arial\' fill=\'%23556\'%3EOffice%3C/text%3E%3C/svg%3E"></div>
<div class="col-6 col-md-4 col-lg-3"><img class="gallery-img" alt="Vanity" src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 400 300\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%23dfe7f5\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' text-anchor=\'middle\' font-size=\'26\' font-family=\'Arial\' fill=\'%23556\'%3EVanity%3C/text%3E%3C/svg%3E"></div>
<div class="col-6 col-md-4 col-lg-3"><img class="gallery-img" alt="Storage" src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 400 300\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%23e9eef7\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' text-anchor=\'middle\' font-size=\'26\' font-family=\'Arial\' fill=\'%23556\'%3EStorage%3C/text%3E%3C/svg%3E"></div>
<div class="col-6 col-md-4 col-lg-3"><img class="gallery-img" alt="Stairs cladding" src="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 400 300\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%23dfe7f5\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' text-anchor=\'middle\' font-size=\'26\' font-family=\'Arial\' fill=\'%23556\'%3EStairs%3C/text%3E%3C/svg%3E"></div>
</div>
<p class="small text-secondary mt-3">*Replace placeholders with your real project photos.</p>
</div>
</section>

<!-- PROCESS -->
<section id="process" class="py-5">
<div class="container">
<h2 class="section-title mb-4">How it works</h2>
<div class="row g-4">
<div class="col-md-6 col-lg-3">
<div class="card card-gradient h-100 p-3">
<div class="feature-icon mb-2">1</div>
<h6>Measure &amp; Brief</h6>
<p class="small text-secondary mb-0">We visit site, measure, and capture your style, finishes &amp; budget.</p>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="card card-gradient h-100 p-3">
<div class="feature-icon mb-2">2</div>
<h6>Design &amp; Quote</h6>
<p class="small text-secondary mb-0">Layouts/3D previews plus a clear, itemized quotation.</p>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="card card-gradient h-100 p-3">
<div class="feature-icon mb-2">3</div>
<h6>Build</h6>
<p class="small text-secondary mb-0">Manufacturing with moisture‑resistant boards and soft‑close hardware.</p>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="card card-gradient h-100 p-3">
<div class="feature-icon mb-2">4</div>
<h6>Deliver &amp; Install</h6>
<p class="small text-secondary mb-0">Protected transport, professional installation, and handover.</p>
</div>
</div>
</div>
</div>
</section>

<!-- WHY US -->
<section id="why" class="py-5 bg-white border-top">
<div class="container">
<div class="row g-4 align-items-center">
<div class="col-lg-6">
<h2 class="section-title mb-3">Why clients choose Decomagna</h2>
<ul class="list-unstyled">
<li class="d-flex gap-2 mb-2"><span class="check">✔</span><span>Moisture‑resistant board cores and sealed edges</span></li>
<li class="d-flex gap-2 mb-2"><span class="check">✔</span><span>Soft‑close hinges &amp; drawer systems (full extension)</span></li>
<li class="d-flex gap-2 mb-2"><span class="check">✔</span><span>Engineered doors with insulated cores &amp; metal frames</span></li>
<li class="d-flex gap-2 mb-2"><span class="check">✔</span><span>Clean, modern trims in matte black or bronze</span></li>
<li class="d-flex gap-2 mb-2"><span class="check">✔</span><span>Transparent quotes and reliable timelines</span></li>
</ul>
</div>
<div class="col-lg-6">
<div class="ratio ratio-16x9 rounded overflow-hidden border" style="background:#000;">
<!-- Replace the <iframe> src with your video URL when ready -->
<iframe srcdoc="<style>body{margin:0;background:black;color:white;display:grid;place-items:center;font:16px system-ui}</style><body>Project walkthrough video placeholder</body>"></iframe>
</div>
<p class="small text-secondary mt-2">Drop in a project video or client testimonial here.</p>
</div>
</div>
</div>
</section>

<!-- CONTACT -->
<section id="contact" class="py-5 bg-dark-ink text-white">
<div class="container">
<div class="row g-4">
<div class="col-lg-6">
<h2 class="mb-3">Request a quote</h2>
<p class="text-white-50">Tell us about your project (location, room sizes, finishes). We’ll reply with a proposed layout and quotation.</p>
<form class="row g-3">
<div class="col-md-6">
<label class="form-label">Name</label>
<input type="text" class="form-control" placeholder="Your name" required>
</div>
<div class="col-md-6">
<label class="form-label">Phone</label>
<input type="tel" class="form-control" placeholder="07xx xxx xxx" required>
</div>
<div class="col-12">
<label class="form-label">Email</label>
<input type="email" class="form-control" placeholder="you@example.com" required>
</div>
<div class="col-12">
<label class="form-label">Project details</label>
<textarea class="form-control" rows="4" placeholder="Kitchen 3.2×2.6 m, matte white & oak, quartz worktop…" required></textarea>
</div>
<div class="col-12 d-flex gap-2 flex-wrap align-items-center">
<button type="submit" class="btn btn-success">Send enquiry</button>
<a class="btn btn-outline-light" href="https://wa.me/254796110511" target="_blank" rel="noopener">WhatsApp us</a>
<span class="small">or email <a class="link-light" href="mailto:info@decomagna.com">info@decomagna.com</a></span>
</div>
</form>
</div>
<div class="col-lg-5 ms-auto">
<div class="card bg-transparent border-0">
<div class="card-body">
<h5>Decomagna Ltd • Quick‑Step Flooring Kenya</h5>
<p class="mb-1">Call / WhatsApp: <a class="text-decoration-none text-white" href="https://wa.me/254796110511" target="_blank" rel="noopener">+254 796 110 511</a></p>
<p class="mb-1">Email: <a class="text-decoration-none text-white" href="mailto:info@decomagna.com">info@decomagna.com</a></p>
<p class="mb-0">Nairobi, Kenya</p>
<hr class="border-secondary"/>
<p class="small text-white-50">Open Mon–Sat • Site visits by appointment. Lead times depend on project scope and current production schedule.</p>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- FOOTER -->
<footer class="footer bg-black text-white-50 py-4">
<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
<div>&copy; <span id="year"></span> Decomagna Ltd. All rights reserved.</div>
<div class="d-flex gap-3">
<a href="#services" class="text-decoration-none">Services</a>
<a href="#gallery" class="text-decoration-none">Gallery</a>
<a href="#contact" class="text-decoration-none">Contact</a>
</div>
</div>
</footer>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.getElementById(\'year\').textContent = new Date().getFullYear();
</script>
<!-- Optional: Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>
</html>',
                'thicknesses' => '',
                'a_c_ratings' => '',
                'color' => '',
                'species' => '',
                'heading_two' => 'Premium Luxury doors',
                'heading_two_section' => 'Durable exclusive doors and cabinetry',
                'content_two' => '',
                'content_two_image' => '',
                'image' => 'ChatGPT Image Oct 15, 2025, 03_41_06 PM.png',
                'created_at' => '2023-06-12 09:08:10',
                'updated_at' => '2023-06-12 09:08:10',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Quick-Step® Original Staircase',
                'order' => 5,
                'has_products' => 0,
                'name' => 'Staircase',
                'slung' => 'quick-step-original-staircase',
                'meta' => 'Upgrade your staircase with Quick-Step laminate, SPC, LVT, and engineered wood finishes — expertly installed by Decomagna Kenya. Each tread and riser is precision-cut and fitted with Uniclic or Incizo stair profiles for seamless transitions. Child-friendly, anti-slip, and easy on the feet, our stair systems bring the beauty of your floor up the steps with warmth, comfort, and durability. Available across Nairobi, Mombasa, Kisumu, Nakuru, Eldoret, Naivasha, Nanyuki, and Malindi.',
                'content' => '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Staircase Flooring Kenya | Quick‑Step Laminate & Stair Nosing | Decomagna</title>
<meta name="description" content="Staircase flooring & stair nosing experts in Kenya. Premium Quick‑Step laminate, SPC, LVT & engineered wood stair finishes with Uniclic/Incizo profiles. Child‑friendly, anti‑slip, quiet & durable. Installations in Nairobi, Mombasa, Kisumu, Nakuru, Eldoret, Naivasha, Nanyuki, Malindi & more." />
<meta name="keywords" content="staircase flooring Kenya, laminate stairs Kenya, Quick‑Step stairs Nairobi, SPC stairs, LVT stairs, engineered wood stairs Kenya, stair nosing Uniclic, Incizo profile Kenya, Decomagna, Quick‑Step Flooring Kenya" />
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<meta property="og:title" content="Staircase Flooring & Installation | Kenya | Decomagna" />
<meta property="og:description" content="Quick‑Step laminate, SPC, LVT & engineered wood stair solutions with Uniclic & Incizo profiles. Child‑friendly, anti‑slip and easy on feet. Kenya‑wide installs." />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://i.imgur.com/vXLcTod.jpg" />
<meta property="og:url" content="https://flooringkenya.com/stairs" />
<meta name="twitter:card" content="summary_large_image" />
<style>
:root{
--brand:#0f766e; /* teal-700 */
--brand-dark:#115e59; /* teal-800 */
--accent:#f59e0b; /* amber-500 */
}
body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial,"Apple Color Emoji","Segoe UI Emoji";}
.navbar{box-shadow:0 6px 24px rgba(0,0,0,.06)}
.bg-brand{background:linear-gradient(135deg,var(--brand),var(--brand-dark));}
.text-brand{color:var(--brand)}
.btn-brand{background:var(--brand);color:#fff;border:none}
.btn-brand:hover{background:var(--brand-dark);color:#fff}
.badge-soft{background:rgba(17,94,89,.08);color:var(--brand);border:1px solid rgba(17,94,89,.2)}
.shadow-soft{box-shadow:0 10px 30px rgba(2,6,23,.08)}
.hero{background:radial-gradient(1200px 500px at 10% -10%, rgba(245,158,11,.15), transparent),
radial-gradient(1200px 500px at 110% 10%, rgba(17,94,89,.15), transparent),
#0b1727; color:#e6f6f4}
.hero h1 span{color:#fff;border-bottom:4px solid var(--accent)}
.icon{width:28px;height:28px}
.gallery img{border-radius:12px}
.check li{margin:.5rem 0}
.check li::marker{content:"✔  ";color:var(--brand)}
.region-pill{border:1px dashed rgba(15,118,110,.35);border-radius:999px;padding:.4rem .8rem;margin:.25rem;display:inline-block}
.sticky-cta{position:sticky;bottom:0;z-index:1020;background:#0b1727;color:#fff}
footer a{color:#d1fae5;text-decoration:none}
footer a:hover{color:#fff;text-decoration:underline}
.logo-word{letter-spacing:.5px}
</style>
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "LocalBusiness",
"name": "Decomagna Ltd — Quick‑Step Flooring Kenya",
"url": "https://flooringkenya.com/stairs",
"telephone": "+254796110511",
"email": "info@decomagna.com",
"logo": "https://flooringkenya.com/static/logo.png",
"description": "Kenya’s specialist for staircase flooring: Quick‑Step laminate, SPC, LVT and engineered wood with Uniclic/Incizo stair profiles. Professional supply & installation across Kenya.",
"areaServed": ["Nairobi","Kiambu","Machakos","Kajiado","Mombasa","Kilifi","Kwale","Nakuru","Naivasha","Nyeri","Nanyuki","Eldoret","Kisumu","Kericho","Naivasha","Malindi","Diani"],
"address": {"@type":"PostalAddress","addressCountry":"KE"},
"sameAs": ["https://www.quick-step.co.uk/","https://www.facebook.com/QuickStepKenya/"]
}
</script>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white py-3">
<div class="container">
<a class="navbar-brand fw-bold text-brand logo-word" href="#">Decomagna • Quick‑Step Kenya</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"><span class="navbar-toggler-icon"></span></button>
<div id="nav" class="collapse navbar-collapse">
<ul class="navbar-nav ms-auto gap-2">
<li class="nav-item"><a class="nav-link" href="#solutions">Solutions</a></li>
<li class="nav-item"><a class="nav-link" href="#benefits">Why Quick‑Step</a></li>
<li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
<li class="nav-item"><a class="nav-link" href="#regions">Regions</a></li>
<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
</ul>
</div>
</div>
</nav>

<!-- Hero -->
<header class="hero py-5 py-md-6">
<div class="container py-5">
<div class="row align-items-center g-4">
<div class="col-lg-7">
<span class="badge badge-soft mb-3">Kenya’s Staircase Flooring Specialists</span>
<h1 class="display-5 fw-bold mb-3">Beautiful, Safe & Durable <span>Staircase Finishes</span> for Kenyan Homes & Projects</h1>
<p class="lead mb-4">We design and install premium <strong>Quick‑Step laminate</strong>, <strong>SPC</strong>, <strong>LVT</strong> and <strong>engineered wood</strong> stair solutions using original <strong>Uniclic</strong> stair noses and <strong>Incizo</strong> multi‑profiles. Child‑friendly, anti‑slip, warm underfoot and built for heavy traffic.</p>
<div class="d-flex gap-2">
<a href="#contact" class="btn btn-brand btn-lg shadow-soft">Get a Free Site Visit</a>
<a href="#gallery" class="btn btn-outline-light btn-lg">See Real Installs</a>
</div>
<div class="mt-3 small opacity-75">Installations in Nairobi, Kiambu, Machakos, Kajiado, Mombasa, Nakuru, Eldoret, Kisumu, Naivasha, Nanyuki, Malindi & more.</div>
</div>
<div class="col-lg-5">
<div class="card shadow-soft border-0">
<img src="https://i.imgur.com/vXLcTod.jpg" class="card-img-top" alt="Kenya staircase top view finished in Quick‑Step laminate — Decomagna" loading="lazy">
<div class="card-body">
<div class="d-flex align-items-center gap-2">
<img class="icon" alt="Incizo 4 functions" src="https://i.imgur.com/cVUn5Xf.jpg" loading="lazy"/>
<span class="small">Original Quick‑Step <strong>Incizo</strong> & <strong>Uniclic</strong> profiles for perfect stairs</span>
</div>
</div>
</div>
</div>
</div>
</div>
</header>

<!-- Solutions -->
<section id="solutions" class="py-5">
<div class="container">
<div class="text-center mb-5">
<h2 class="fw-bold">Staircase Systems & Finishes</h2>
<p class="text-muted">Choose the perfect finish for your stairs — all professionally supplied and installed by Decomagna.</p>
</div>
<div class="row g-4">
<div class="col-md-6 col-lg-3">
<div class="card h-100 shadow-soft">
<img src="https://i.imgur.com/VTXKDi7.jpg" class="card-img-top" alt="Quick‑Step Uniclic stair nose for laminate stairs Kenya" loading="lazy">
<div class="card-body">
<h3 class="h5">Quick‑Step Laminate</h3>
<p class="mb-3">High‑wear AC4/AC5 surfaces with <strong>Uniclic</strong> stair nose for seamless treads & risers. Stunning oak, walnut & stone decors.</p>
<ul class="check ps-3 small">
<li>Fast, clean installation</li>
<li>Scratch & stain resistant</li>
<li>Great value & huge décor range</li>
</ul>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="card h-100 shadow-soft">
<img src="https://i.imgur.com/d60StRx.jpg" class="card-img-top" alt="SPC rigid core stair step installation Kenya" loading="lazy">
<div class="card-body">
<h3 class="h5">Ultra durable anti warping stairs</h3>
<p class="mb-3">Ultra‑stable, water‑resistant rigid vinyl — excellent for coastal or high‑humidity homes and commercial stairs.</p>
<ul class="check ps-3 small">
<li>Water‑resistant & dimensionally stable</li>
<li>Great for apartments & offices</li>
<li>Authentic wood & stone textures</li>
</ul>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="card h-100 shadow-soft">
<img src="https://i.imgur.com/VZboZb6.jpg" class="card-img-top" alt="Decomagna installer fitting LVT stair treads Nairobi" loading="lazy">
<div class="card-body">
<h3 class="h5">LVT (Luxury Vinyl Tile)</h3>
<p class="mb-3">Quiet, forgiving and comfortable underfoot with excellent slip performance. Ideal for family homes with kids.</p>
<ul class="check ps-3 small">
<li>Soft & quiet steps</li>
<li>Great slip resistance</li>
<li>Low maintenance</li>
</ul>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="card h-100 shadow-soft">
<img src="https://i.imgur.com/yYdtowA.jpg" class="card-img-top" alt="Engineered wood staircase tread and nose finish Kenya" loading="lazy">
<div class="card-body">
<h3 class="h5">Engineered Wood</h3>
<p class="mb-3">Real timber veneer on a stable core for a premium natural look, finished with colour‑matched stair nosing.</p>
<ul class="check ps-3 small">
<li>Premium feel & longevity</li>
<li>Refinishing options</li>
<li>Perfect for luxury homes</li>
</ul>
</div>
</div>
</div>
</div>

<div class="row mt-5 g-4 align-items-center">
<div class="col-lg-6">
<img src="https://i.imgur.com/cVUn5Xf.jpg" class="img-fluid shadow-soft" alt="Quick‑Step Incizo profile 4 functions for stairs Kenya" loading="lazy">
</div>
<div class="col-lg-6">
<h3 class="fw-bold">Uniclic & Incizo — Engineered for Perfect Stairs</h3>
<p>We use the <strong>original Quick‑Step</strong> profiles for a clean, continuous look. The <em>Uniclic</em> stair nose locks treads securely, while the <em>Incizo</em> multi‑profile handles transitions, end caps, stair noses and more — one profile, multiple functions, colour‑matched to your décor.</p>
<ul class="check ps-3">
<li>No visible screw caps on the nosing</li>
<li>Strong, safe edge — anti‑slip texture</li>
<li>Precise, repeatable cuts for consistent steps</li>
<li>Compatible with laminate, SPC, LVT & engineered wood</li>
</ul>
<a href="#contact" class="btn btn-brand mt-2">Book a Stair Survey</a>
</div>
</div>
</div>
</section>

<!-- Benefits vs Tiles -->
<section id="benefits" class="py-5 bg-light">
<div class="container">
<div class="row align-items-center g-4">
<div class="col-lg-6">
<h2 class="fw-bold">Why Quick‑Step Stair Finishes Beat Tiles in Kenya</h2>
<p class="mb-4">Tiles can be cold, slippery and unforgiving on knees and little feet. Our staircase systems deliver everyday comfort and safety without compromising on style.</p>
<div class="row g-3">
<div class="col-md-6">
<div class="p-3 border rounded-3 h-100 bg-white shadow-soft">
<h5 class="mb-1">Child‑Friendly</h5>
<p class="small mb-0">Warmer, quieter steps with cushioned feel — kinder for toddlers and seniors.</p>
</div>
</div>
<div class="col-md-6">
<div class="p-3 border rounded-3 h-100 bg-white shadow-soft">
<h5 class="mb-1">Anti‑Slip Textures</h5>
<p class="small mb-0">Embossed surfaces & nosing ridges enhance grip in our humid and coastal climates.</p>
</div>
</div>
<div class="col-md-6">
<div class="p-3 border rounded-3 h-100 bg-white shadow-soft">
<h5 class="mb-1">Easy Maintenance</h5>
<p class="small mb-0">Sweep & damp‑mop. No grout to scrub, no efflorescence, no sharp edges.</p>
</div>
</div>
<div class="col-md-6">
<div class="p-3 border rounded-3 h-100 bg-white shadow-soft">
<h5 class="mb-1">Aesthetic Continuity</h5>
<p class="small mb-0">Match your staircase perfectly to your living room floor for a seamless look.</p>
</div>
</div>
</div>
<ul class="check ps-3 mt-3">
<li>Great acoustic comfort — reduced footfall noise</li>
<li>Impact‑resistant nosing and edge protection</li>
<li>Fast, dust‑controlled installation</li>
</ul>
</div>
<div class="col-lg-6">
<div class="row g-3 gallery">
<div class="col-6">
<img src="https://i.imgur.com/HMw1Yuo.jpg" class="img-fluid shadow-soft" alt="Decomagna installing Quick‑Step stair nose Kenya" loading="lazy">
</div>
<div class="col-6">
<img src="https://i.imgur.com/d60StRx.jpg" class="img-fluid shadow-soft" alt="SPC/Laminate stair tread installation close‑up Kenya" loading="lazy">
</div>
<div class="col-12">
<img src="https://i.imgur.com/VZboZb6.jpg" class="img-fluid shadow-soft" alt="Decomagna installer fixing LVT treads and risers Nairobi" loading="lazy">
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Process -->
<section class="py-5">
<div class="container">
<div class="text-center mb-5">
<h2 class="fw-bold">Our 4‑Step Installation Process</h2>
<p class="text-muted">Engineered workflow for clean, accurate and durable results.</p>
</div>
<div class="row g-4">
<div class="col-md-6 col-lg-3">
<div class="p-4 border rounded-3 h-100 shadow-soft">
<div class="fw-bold mb-1">1) Site Survey</div>
<div class="small text-muted">Measure rises/runs, check substrate, choose décor & nosing.</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="p-4 border rounded-3 h-100 shadow-soft">
<div class="fw-bold mb-1">2) Prep & Templates</div>
<div class="small text-muted">Dust control, templating, colour‑match trims & Incizo profile.</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="p-4 border rounded-3 h-100 shadow-soft">
<div class="fw-bold mb-1">3) Fit & Lock</div>
<div class="small text-muted">Glue/lock treads & risers, fix Uniclic nosing, precise overhang.</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="p-4 border rounded-3 h-100 shadow-soft">
<div class="fw-bold mb-1">4) Finish & Care</div>
<div class="small text-muted">Edge sealing where needed, clean‑down, care kit handover.</div>
</div>
</div>
</div>
</div>
</section>

<!-- Regions -->
<section id="regions" class="py-5 bg-light">
<div class="container">
<div class="row align-items-center g-4">
<div class="col-lg-6">
<h2 class="fw-bold">Where We Install Stairs in Kenya</h2>
<p class="text-muted">We serve homeowners, architects and contractors nationwide.</p>
<div>
<span class="region-pill">Nairobi & Kiambu: Karen, Runda, Parklands, Lavington, Thika</span>
<span class="region-pill">Machakos & Kajiado: Syokimau, Athi River, Kitengela, Ngong</span>
<span class="region-pill">Coast: Mombasa, Nyali, Kilifi, Malindi, Diani</span>
<span class="region-pill">Rift Valley: Nakuru, Naivasha, Eldoret, Nanyuki</span>
<span class="region-pill">Western & Nyanza: Kisumu, Kakamega, Kericho</span>
<span class="region-pill">Mount Kenya: Nyeri, Naro Moru, Timau</span>
</div>
</div>
<div class="col-lg-6">
<div class="card border-0 shadow-soft">
<div class="card-body">
<h5 class="fw-bold mb-2">Commercial & Hospitality</h5>
<p class="mb-0 small">From boutique hotels and offices to apartment blocks and schools — we specify the right wear class, slip rating and nosing for your traffic levels and design brief.</p>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Gallery -->
<section id="gallery" class="py-5">
<div class="container">
<div class="text-center mb-5">
<h2 class="fw-bold">Recent Staircase Projects</h2>
<p class="text-muted">A few snapshots from Decomagna install teams on site.</p>
</div>
<div class="row g-3 gallery">
<div class="col-6 col-md-4">
<img class="img-fluid shadow-soft" src="https://i.imgur.com/VZboZb6.jpg" alt="Decomagna installer fitting LVT/laminate stairs Nairobi Kenya" loading="lazy">
</div>
<div class="col-6 col-md-4">
<img class="img-fluid shadow-soft" src="https://i.imgur.com/HMw1Yuo.jpg" alt="Stair nose installation close up — Quick‑Step Uniclic Kenya" loading="lazy">
</div>
<div class="col-6 col-md-4">
<img class="img-fluid shadow-soft" src="https://i.imgur.com/d60StRx.jpg" alt="SPC rigid core stair step install — Decomagna Kenya" loading="lazy">
</div>
<div class="col-6 col-md-4">
<img class="img-fluid shadow-soft" src="https://i.imgur.com/VTXKDi7.jpg" alt="Quick‑Step Uniclic stair nose profile for laminate — Kenya" loading="lazy">
</div>
<div class="col-6 col-md-4">
<img class="img-fluid shadow-soft" src="https://i.imgur.com/yYdtowA.jpg" alt="Engineered wood staircase tread & nose finish — Kenya" loading="lazy">
</div>
<div class="col-6 col-md-4">
<img class="img-fluid shadow-soft" src="https://i.imgur.com/vXLcTod.jpg" alt="Top view: finished staircase in Quick‑Step laminate — Kenya" loading="lazy">
</div>
</div>
</div>
</section>

<!-- FAQ -->
<section class="py-5 bg-light">
<div class="container">
<div class="row g-4">
<div class="col-lg-6">
<h2 class="fw-bold mb-3">Staircase FAQs</h2>
<div class="accordion" id="faq">
<div class="accordion-item">
<h2 class="accordion-header" id="q1"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#a1">Can you match my floor colour on the stairs?</button></h2>
<div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faq"><div class="accordion-body small">Yes. With Quick‑Step we colour‑match treads, risers and nosing using the original décor or closest approved match in SPC/LVT/laminate.</div></div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="q2"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a2">Are your stair finishes anti‑slip?</button></h2>
<div id="a2" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body small">Our textures and nosing ridges improve grip. For specific slip ratings (e.g., R10/R11) we specify the correct product and finish for your project.</div></div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="q3"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a3">How long does installation take?</button></h2>
<div id="a3" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body small">A standard 12–16 step flight typically completes in 1–2 days depending on substrate, detailing and chosen material.</div></div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="q4"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a4">Do you install outside Nairobi?</button></h2>
<div id="a4" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body small">Yes. We cover Kenya coast, Rift Valley, Mount Kenya region, Western & Nyanza. Travel logistics included in your quote.</div></div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="p-4 border rounded-3 shadow-soft h-100">
<h4 class="fw-bold">Technical Notes</h4>
<ul class="small mb-0 check ps-3">
<li>Substrates: concrete, screed, timber — must be sound, level, dry.</li>
<li>Edges: original Quick‑Step <em>Uniclic</em> stair nose or colour‑matched metal nosing where specified.</li>
<li>Profiles: <em>Incizo</em> multi‑profile for landings, top step transitions and end caps.</li>
<li>Maintenance: vacuum/sweep; damp mop with approved cleaner; avoid standing water.</li>
</ul>
</div>
</div>
</div>
</div>
</section>

<!-- Contact / Lead Form -->
<section id="contact" class="py-5">
<div class="container">
<div class="row g-4 align-items-center">
<div class="col-lg-6">
<h2 class="fw-bold">Book a Free Stair Assessment</h2>
<p>Send us your location, photos and number of steps — our team will advise on the best option (laminate, SPC, LVT or engineered wood) and provide a same‑day estimate.</p>
<ul class="check ps-3">
<li>Decomagna Ltd • Quick‑Step Flooring Kenya</li>
<li>Contact: <a href="tel:+254796110511" class="text-brand fw-semibold">+254 796 110 511</a> • <a href="mailto:info@decomagna.com" class="text-brand fw-semibold">info@decomagna.com</a></li>
</ul>
</div>
<div class="col-lg-6">
<form class="row g-3">
<div class="col-md-6">
<label class="form-label">Name</label>
<input class="form-control" type="text" placeholder="Your full name" required>
</div>
<div class="col-md-6">
<label class="form-label">Phone</label>
<input class="form-control" type="tel" placeholder="e.g., 0796 110 511" required>
</div>
<div class="col-12">
<label class="form-label">Location / Estate</label>
<input class="form-control" type="text" placeholder="e.g., Karen, Nairobi" required>
</div>
<div class="col-md-6">
<label class="form-label">Material</label>
<select class="form-select">
<option>Quick‑Step Laminate</option>
<option>SPC (Rigid Core)</option>
<option>LVT</option>
<option>Engineered Wood</option>
<option>Not sure — advise me</option>
</select>
</div>
<div class="col-md-6">
<label class="form-label">Steps</label>
<input class="form-control" type="number" min="1" placeholder="e.g., 14" required>
</div>
<div class="col-12">
<label class="form-label">Notes</label>
<textarea class="form-control" rows="4" placeholder="Any photos/links, landing size, pets/kids, etc."></textarea>
</div>
<div class="col-12 d-grid d-sm-block">
<button class="btn btn-brand btn-lg" type="submit">Request Estimate</button>
</div>
</form>
</div>
</div>
</div>
</section>

<!-- Sticky CTA -->
<div class="sticky-cta py-3">
<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-2">
<span class="small">Ready to upgrade your stairs with Quick‑Step laminate, SPC, LVT or engineered wood?</span>
<div class="d-flex gap-2">
<a href="tel:+254796110511" class="btn btn-brand">Call +254 796 110 511</a>
<a href="mailto:info@decomagna.com?subject=Staircase%20Estimate%20Request" class="btn btn-outline-light">Email Us</a>
</div>
</div>
</div>

<footer class="bg-brand text-white py-4">
<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
<div>
<div class="fw-bold">Decomagna Ltd • Quick‑Step Flooring Kenya</div>
<div class="small">© <span id="y"></span> All rights reserved.</div>
</div>
<div class="small">
<a href="#solutions">Solutions</a> · <a href="#benefits">Why Quick‑Step</a> · <a href="#gallery">Gallery</a> · <a href="#contact">Contact</a>
</div>
</div>
</footer>

<script>
document.getElementById(\'y\').textContent = new Date().getFullYear();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>',
'thicknesses' => 'Laminate flooring\'s enhanced durability compared to ordinary wood arises from its wear layer. Comprising multiple protective coats infused with materials like aluminum oxide, this layer acts as a robust shield against scratches, stains, and fading. Unlike wood, it resists damage and UV-induced color changes, ensuring a long-lasting appearance with minimal maintenance.',
'a_c_ratings' => 'The AC rating represents the wear rating and is the number you should pay attention to. The AC value of a product reflects its applicability to a particular level of traffic, which will help you find the best floor for you. The laminate flooring is subject to a series of tests to determine the durability of the flooring and the appropriate mounting area. The laminate flooring has six AC ratings:',
'color' => 'We\'ve prepared a variety of color options, and the tan laminate makes your room look bigger and more open. You\'ll also get that wonderful, rich warmth from slightly darker tones. In addition to looking chic and stylish, the gray laminate sets the tone for a cool modern home.<br>We\'ve prepared a variety of color options, and the tan laminate makes your room look bigger and more open. You\'ll also get that wonderful, rich warmth from slightly darker tones. In addition to looking chic and stylish, the gray laminate sets the tone for a cool modern home.',
'species' => 'We\'ve prepared a variety of color options, and the tan laminate makes your room look bigger and more open. You\'ll also get that wonderful, rich warmth from slightly darker tones. In addition to looking chic and stylish, the gray laminate sets the tone for a cool modern home.<br>We\'ve prepared a variety of color options, and the tan laminate makes your room look bigger and more open. You\'ll also get that wonderful, rich warmth from slightly darker tones. In addition to looking chic and stylish, the gray laminate sets the tone for a cool modern home.',
'heading_two' => 'For achieving a staircase that complements your interior, there are several flooring solutions to match your needs. Whether you choose laminate or wood to renovate your stairs, you can obtain a perfect finish with our stair covers or stair profiles.',
'heading_two_section' => 'Quick-Step original staircase solutions',
'content_two' => '',
'content_two_image' => '',
'image' => 'staircase-productss.jpg',
'created_at' => '2023-06-12 09:08:52',
'updated_at' => '2023-06-12 09:08:52',
),
3 => 
array (
'id' => 5,
'title' => 'Engineered Hardwood Flooring',
'order' => 3,
'has_products' => 1,
'name' => NULL,
'slung' => 'engineered-hardwood-flooring',
'meta' => NULL,
'content' => NULL,
'thicknesses' => NULL,
'a_c_ratings' => NULL,
'color' => NULL,
'species' => NULL,
'heading_two' => NULL,
'heading_two_section' => NULL,
'content_two' => NULL,
'content_two_image' => NULL,
'image' => '2025-10-0909_18_28imageherringbone-engineered-wood-parquet-flooring-14mm-brushed-uv-lacquered-smoked-dark-oak (1).png',
'created_at' => '2025-10-16 06:50:43',
'updated_at' => '2025-10-16 06:50:43',
),
4 => 
array (
'id' => 6,
'title' => 'Professional Laminate & Wood Flooring Installation Across Kenya',
'order' => 6,
'has_products' => 0,
'name' => NULL,
'slung' => 'professional-laminate-wood-flooring-installation-across-kenya',
'meta' => 'Decomagna – Quick-Step Flooring Kenya provides expert laminate and engineered-wood floor installation across Kenya. We handle site visits, subfloor and moisture checks, underlay installation, and custom pattern layouts. All floors and trims are colour-matched or tailored to suit each client’s interior design.',
'content' => '<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Professional Laminate & Wood Flooring Installation in Kenya | Decomagna – Quick‑Step Kenya</title>
<meta name="description" content="Premium laminate & engineered-wood flooring installation across Kenya. Site surveys in Nairobi, Karen, Runda & nationwide. Moisture checks, subfloor prep, underlay, patterns (herringbone, diagonal) & finishing. Book a free site visit." />
<link rel="canonical" href="https://flooringkenya.com/installation" />
<meta property="og:title" content="Professional Flooring Installation in Kenya | Decomagna – Quick‑Step Kenya" />
<meta property="og:description" content="Site visits, accurate as‑built surveys, subfloor & moisture checks, underlay, expert installation & finishing. We install across Kenya." />
<meta property="og:type" content="website" />
<meta property="og:locale" content="en_KE" />

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

<style>
:root{
--qs-primary: #0f766e;   /* teal */
--qs-accent:  #f97316;   /* warm accent */
--qs-ink:     #0b1721;   /* deep text */
--qs-mute:    #6b7280;   /* muted text */
--qs-bg:      #f7fafc;   /* soft bg */
}
body{font-family: system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji"; color: var(--qs-ink); background: #fff;}
.hero{
background: linear-gradient(180deg, rgba(15,118,110,.08), rgba(255,255,255,0) 60%);
}
.badge-kenya{background: var(--qs-primary);}
.lead-quiet{color: var(--qs-mute)}
.section{padding: 4rem 0}
.shadow-soft{box-shadow: 0 10px 30px rgba(0,0,0,.06)}
.icon{width: 2.5rem; height: 2.5rem; display:inline-grid; place-items:center; border-radius:.7rem; background:#ecfeff; color:var(--qs-primary)}
.step{position: relative; padding-left: 2.75rem}
.step::before{content: attr(data-step); position:absolute; left:0; top:.2rem; width:2rem; height:2rem; border-radius:.6rem; background:var(--qs-primary); color:#fff; display:grid; place-items:center; font-weight:700}
.grid-gap{gap: 1.2rem}
figure{margin:0}
.caption{font-size:.9rem; color:var(--qs-mute)}
.pill{border:1px solid #e5e7eb; border-radius:999px; padding:.4rem .8rem; color:#111827; background:#fff}
.check{color: var(--qs-primary)}
.bg-soft{background:var(--qs-bg)}
.cta{background: linear-gradient(135deg, var(--qs-primary), #0891b2); color:#fff}
.cta a{color:#fff; text-decoration: none}
.pattern-card img{aspect-ratio: 4/3; object-fit: cover}
.gallery img{aspect-ratio: 4/3; object-fit: cover}
.brandbar{border-top:1px solid #e5e7eb}
.water-card{border-left: .4rem solid var(--qs-accent)}
.contact-chip{background:#eef2ff; border:1px solid #c7d2fe}
.sticky-cta{position: sticky; top: 0; z-index: 1030}
@media (min-width: 992px){
.hero-visual{max-height: 520px; object-fit: cover}
}
</style>

<!-- Schema.org Service -->
<script type="application/ld+json">
{
"@context":"https://schema.org",
"@type":"Service",
"name":"Laminate & Engineered Wood Flooring Installation",
"provider":{
"@type":"LocalBusiness",
"name":"Decomagna Ltd – Quick‑Step Flooring Kenya",
"telephone":"+254796110511",
"email":"info@decomagna.com",
"areaServed":"KE",
"address":{"@type":"PostalAddress","addressCountry":"KE","addressLocality":"Nairobi"}
},
"areaServed":["Nairobi","Karen","Runda","Mombasa","Nakuru","Eldoret","Kenya"],
"hasOfferCatalog":{
"@type":"OfferCatalog",
"name":"Flooring Installation Services",
"itemListElement":[
{"@type":"Offer","itemOffered":{"@type":"Service","name":"Site Visit & As‑Built Survey"}},
{"@type":"Offer","itemOffered":{"@type":"Service","name":"Subfloor & Moisture Testing"}},
{"@type":"Offer","itemOffered":{"@type":"Service","name":"Underlay & Acoustic Treatment"}},
{"@type":"Offer","itemOffered":{"@type":"Service","name":"Laminate / Engineered‑Wood Installation"}}
]
}
}
</script>
</head>
<body>
<!-- Sticky contact bar -->
<div class="sticky-cta py-2 bg-white border-bottom">
<div class="container d-flex flex-wrap align-items-center justify-content-between small">
<div class="d-flex align-items-center gap-2">
<span class="badge badge-kenya">Kenya‑wide installation</span>
<span class="pill">Site visits • As‑built surveys • Subfloor prep</span>
</div>
<div class="d-flex align-items-center gap-3">
<a class="contact-chip rounded-pill px-3 py-1" href="tel:+254796110511">📞 +254 796 110 511</a>
<a class="contact-chip rounded-pill px-3 py-1" href="mailto:info@decomagna.com">✉️ info@decomagna.com</a>
</div>
</div>
</div>

<!-- HERO -->
<header class="hero section pt-5 pb-3">
<div class="container">
<div class="row align-items-center g-4">
<div class="col-lg-6">
<h1 class="display-5 fw-bold mb-3">Professional Flooring Installation in Kenya</h1>
<p class="lead">Laminate & engineered‑wood floors expertly installed by Decomagna – Quick‑Step Kenya. We handle <strong>site visits</strong>, <strong>as‑built surveys</strong>, <strong>subfloor & moisture checks</strong>, precise <strong>underlay</strong> choice, and flawless laying in your preferred pattern.</p>
<ul class="list-unstyled text-secondary">
<li class="mb-1">✅ Nairobi, Karen, Runda, Thika & nationwide</li>
<li class="mb-1">✅ Dust‑controlled, low‑VOC, family‑friendly process</li>
<li class="mb-1">✅ Doors trimmed for clean, hidden expansion gaps</li>
</ul>
<div class="d-flex flex-wrap gap-2">
<a href="#book" class="btn btn-lg btn-success">Book a Site Visit</a>
<a href="#process" class="btn btn-lg btn-outline-secondary">See Our Process</a>
</div>
</div>
<div class="col-lg-6">
<figure class="shadow-soft rounded overflow-hidden">
<img class="w-100 hero-visual" loading="lazy" src="https://i.imgur.com/1WOCF4Y.jpg" alt="Our installers preparing a subfloor on site in Nairobi" />
<figcaption class="p-2 caption">On‑site installation team preparing subfloor.</figcaption>
</figure>
</div>
</div>
</div>
</header>

<!-- TRUST STRIP / BADGES -->
<section class="section pt-0 pb-4">
<div class="container">
<div class="row text-center g-3">
<div class="col-6 col-md-3"><span class="pill">Quick‑Step Certified</span></div>
<div class="col-6 col-md-3"><span class="pill">Moisture Testing</span></div>
<div class="col-6 col-md-3"><span class="pill">Acoustic Underlay</span></div>
<div class="col-6 col-md-3"><span class="pill">Door & Trim Finishing</span></div>
</div>
</div>
</section>

<!-- WHY SITE VISITS -->
<section id="site-visits" class="section bg-soft">
<div class="container">
<div class="row g-4 align-items-center">
<div class="col-lg-6">
<h2 class="h1 mb-3">Site Visits & As‑Built Surveys</h2>
<p class="lead-quiet">Plans are helpful, but <strong>as‑built measurements</strong> are always more accurate. We measure on site to account for wall deviations, door clearances, skirting, stair nosings, and transitions to tiles or other floors.</p>
<div class="mt-3">
<div class="step mb-3" data-step="1"><strong>Check subfloor</strong> condition (cracks, flatness, movement).</div>
<div class="step mb-3" data-step="2"><strong>Check moisture/dampness</strong> with meter & visual inspection.</div>
<div class="step mb-3" data-step="3"><strong>Acclimatise boards</strong> (laminate/wood) to the room conditions.</div>
<div class="step mb-3" data-step="4"><strong>Confirm levels & transitions</strong> to tiles/other rooms for a truly level finish.</div>
</div>
</div>
<div class="col-lg-6">
<div class="row g-3 gallery">
<div class="col-6">
<figure class="shadow-soft rounded overflow-hidden">
<img class="w-100" loading="lazy" src="https://i.imgur.com/FWeFfRG.jpg" alt="Installer taking laser levels during a site visit" />
<figcaption class="p-2 caption">Laser level & as‑built checks.</figcaption>
</figure>
</div>
<div class="col-6">
<figure class="shadow-soft rounded overflow-hidden">
<img class="w-100" loading="lazy" src="https://i.imgur.com/VZboZb6.jpg" alt="Team inspecting subfloor for moisture and cracks" />
<figcaption class="p-2 caption">Subfloor inspection.</figcaption>
</figure>
</div>
<div class="col-12">
<figure class="shadow-soft rounded overflow-hidden">
<img class="w-100" loading="lazy" src="https://i.imgur.com/d60StRx.jpg" alt="Installers preparing room for laminate installation" />
<figcaption class="p-2 caption">Room prep before underlay.</figcaption>
</figure>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- UNDERLAY & COMFORT -->
<section id="underlay" class="section">
<div class="container">
<div class="row g-4 align-items-center">
<div class="col-lg-6 order-lg-2">
<h2 class="h1 mb-3">Underlay, Acoustic Comfort & Thermal Feel</h2>
<p>We select the right underlay for your space: acoustic comfort for bedrooms, moisture barrier for ground floors, and densified foam for high‑traffic areas. Proper underlay makes your floor <em>feel</em> solid while reducing noise between rooms.</p>
<ul class="list-unstyled">
<li class="mb-2"><span class="check">✔</span> Vapour barriers where needed (ground/first floors).</li>
<li class="mb-2"><span class="check">✔</span> Acoustic underlays for apartments & bedrooms.</li>
<li class="mb-2"><span class="check">✔</span> Smoother walking experience; warmer on bare feet.</li>
</ul>
</div>
<div class="col-lg-6 order-lg-1">
<div class="row g-3 gallery">
<div class="col-12">
<figure class="shadow-soft rounded overflow-hidden">
<img class="w-100" loading="lazy" src="https://i.imgur.com/rL01M4q.jpg" alt="High‑quality underlay roll ready to be installed" />
<figcaption class="p-2 caption">Quality underlay for acoustic & moisture control.</figcaption>
</figure>
</div>
<div class="col-6">
<figure class="shadow-soft rounded overflow-hidden">
<img class="w-100" loading="lazy" src="https://i.imgur.com/suGTD2M.jpg" alt="Comfortable socks walking on laminate floor" />
<figcaption class="p-2 caption">Soft, warm feel underfoot.</figcaption>
</figure>
</div>
<div class="col-6">
<figure class="shadow-soft rounded overflow-hidden water-card">
<img class="w-100" loading="lazy" src="https://i.imgur.com/F3AdnGs.jpg" alt="Spilled drink on laminate showing easy clean" />
<figcaption class="p-2 caption">Easy‑clean surfaces for real life.</figcaption>
</figure>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- INSTALLATION PROCESS -->
<section id="process" class="section bg-soft">
<div class="container">
<div class="row g-5 align-items-start">
<div class="col-lg-6">
<h2 class="h1 mb-3">Our Installation Procedure</h2>
<ol class="list-group list-group-numbered shadow-soft">
<li class="list-group-item">Checking subfloor integrity, flatness & joints.</li>
<li class="list-group-item">Checking water/dampness; advise on mitigation if required.</li>
<li class="list-group-item">Acclimatising laminate/wood to the room.</li>
<li class="list-group-item">Confirming levels & transitions for a level finish.</li>
<li class="list-group-item">Underlay selection & installation.</li>
<li class="list-group-item">Installation of laminate according to desired pattern.</li>
<li class="list-group-item">Door trimming where required – hidden expansion, no visible gap.</li>
<li class="list-group-item">Skirting, trims & final detailing; clean‑down & handover.</li>
</ol>
</div>
<div class="col-lg-6">
<div class="p-4 bg-white rounded shadow-soft">
<h3 class="h4">Patterns & Layout Options</h3>
<p class="mb-3">From fast, elegant straight lays to expressive designs. We help you choose based on room size, light direction and thresholds.</p>
<div class="row g-3">
<div class="col-6">
<div class="card pattern-card shadow-soft h-100">
<img src="https://i.imgur.com/GDUi67G.jpg" class="card-img-top" loading="lazy" alt="Herringbone pattern close‑up" />
<div class="card-body">
<h4 class="h6 mb-1">Herringbone</h4>
<p class="mb-0 caption">Timeless, dynamic movement.</p>
</div>
</div>
</div>
<div class="col-6">
<div class="card pattern-card shadow-soft h-100">
<img src="https://i.imgur.com/fsKBOa8.jpg" class="card-img-top" loading="lazy" alt="Diagonal lay pattern in living room" />
<div class="card-body">
<h4 class="h6 mb-1">Diagonal Lay</h4>
<p class="mb-0 caption">Wider feel; great for corridors.</p>
</div>
</div>
</div>
</div>
<ul class="mt-3 small text-secondary">
<li>We advise board direction by <em>light and length</em> to visually elongate spaces.</li>
<li>We pre‑plan starting points to avoid slivers at walls and doors.</li>
<li>We pre‑cut and number complex areas for a cleaner install day.</li>
</ul>
</div>
</div>
</div>
</div>
</section>

<!-- KENYA WIDE -->
<section class="section">
<div class="container">
<div class="row g-4 align-items-center">
<div class="col-lg-7">
<h2 class="h1 mb-3">We Install Across Kenya</h2>
<p>Our Nairobi crews cover Karen, Runda, Muthaiga, Westlands and beyond. We also coordinate teams for Mombasa, Naivasha, Nakuru, Nanyuki and Eldoret. Get one consistent specification, supervised installation, and a clean finish—wherever your project is.</p>
<div class="d-flex flex-wrap gap-2 mt-3">
<span class="pill">Nairobi</span>
<span class="pill">Karen</span>
<span class="pill">Runda</span>
<span class="pill">Thika</span>
<span class="pill">Naivasha</span>
<span class="pill">Nakuru</span>
<span class="pill">Nanyuki</span>
<span class="pill">Mombasa</span>
<span class="pill">Eldoret</span>
</div>
</div>
<div class="col-lg-5">
<figure class="shadow-soft rounded overflow-hidden">
<img class="w-100" loading="lazy" src="https://i.imgur.com/0K2vpWO.jpg" alt="Decomagna crew on a Kenyan site" />
<figcaption class="p-2 caption">Kenya‑wide project coordination.</figcaption>
</figure>
</div>
</div>
</div>
</section>

<!-- FAQ -->
<section class="section bg-soft">
<div class="container">
<div class="row g-4">
<div class="col-lg-6">
<h2 class="h1 mb-3">Frequently Asked</h2>
<div class="accordion" id="faq">
<div class="accordion-item">
<h2 class="accordion-header" id="q1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1">Do you trim doors?</button></h2>
<div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faq"><div class="accordion-body">Yes. Where needed we trim doors so the floor slides under neatly—no visible expansion gap.</div></div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="q2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">How long does installation take?</button></h2>
<div id="a2" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Most apartments complete in 1–2 days after acclimatisation. Complex layouts or large homes may take longer—your survey will include a schedule.</div></div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="q3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3">Can you install over tiles or concrete?</button></h2>
<div id="a3" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes—if they are sound and level. We check moisture, repair cracks, and level transitions first.</div></div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="p-4 rounded shadow-soft cta h-100 d-flex flex-column justify-content-between">
<div>
<h3 class="h2">Ready for a clean, quiet install?</h3>
<p class="mb-0">Book a free site visit in Nairobi (or virtual briefing up‑country). We’ll measure, advise on underlay and patterns, and send a clear quotation.</p>
</div>
<div class="mt-3 d-flex flex-wrap gap-2">
<a class="btn btn-light btn-lg" href="#book">Book a Site Visit</a>
<a class="btn btn-outline-light btn-lg" href="mailto:info@decomagna.com">Email Us</a>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- BOOKING FORM (static placeholder) -->
<section id="book" class="section">
<div class="container">
<div class="row g-4">
<div class="col-lg-6">
<h2 class="h1 mb-3">Book a Site Visit</h2>
<p>Tell us your location, area in m², current floor type and any deadlines. We’ll confirm your slot and bring samples.</p>
<form class="row g-3 shadow-soft p-4 rounded bg-white" onsubmit="event.preventDefault(); alert(\'Thanks! We\\\'ll get in touch shortly.\');">
<div class="col-md-6">
<label class="form-label">Name</label>
<input type="text" class="form-control" required />
</div>
<div class="col-md-6">
<label class="form-label">Phone</label>
<input type="tel" class="form-control" required />
</div>
<div class="col-12">
<label class="form-label">Email</label>
<input type="email" class="form-control" />
</div>
<div class="col-md-6">
<label class="form-label">Location</label>
<input type="text" class="form-control" placeholder="Karen, Runda, ..." />
</div>
<div class="col-md-6">
<label class="form-label">Approx. area (m²)</label>
<input type="number" class="form-control" min="1" />
</div>
<div class="col-12">
<label class="form-label">Notes</label>
<textarea class="form-control" rows="4" placeholder="Current floor, timing, pattern preference..."></textarea>
</div>
<div class="col-12 d-grid d-sm-flex gap-2">
<button class="btn btn-success btn-lg" type="submit">Request Visit</button>
<a class="btn btn-outline-secondary btn-lg" href="tel:+254796110511">Call Us</a>
</div>
</form>
</div>
<div class="col-lg-6">
<h3 class="h4">Why Choose Decomagna – Quick‑Step Kenya?</h3>
<ul class="list-unstyled">
<li class="mb-2">• Clean, fast, professional teams</li>
<li class="mb-2">• Laser levels, moisture meters & tidy detailing</li>
<li class="mb-2">• Clear quotations & predictable timelines</li>
<li class="mb-2">• Aftercare guidance & product warranty</li>
</ul>
<div class="row g-3 gallery mt-1">
<div class="col-6">
<figure class="shadow-soft rounded overflow-hidden">
<img class="w-100" loading="lazy" src="https://i.imgur.com/1WOCF4Y.jpg" alt="On‑site team laying underlay" />
<figcaption class="p-2 caption">Underlay and layout prep.</figcaption>
</figure>
</div>
<div class="col-6">
<figure class="shadow-soft rounded overflow-hidden">
<img class="w-100" loading="lazy" src="https://i.imgur.com/FWeFfRG.jpg" alt="Installer setting alignment lines" />
<figcaption class="p-2 caption">Alignment lines for straight runs.</figcaption>
</figure>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- FOOTER -->
<footer class="py-5 brandbar bg-white">
<div class="container">
<div class="row g-4">
<div class="col-lg-8">
<h5 class="mb-1">Decomagna Ltd • Quick‑Step Flooring Kenya</h5>
<p class="mb-2">Premium laminate & engineered‑wood installation across Kenya. Site visits in Nairobi, Karen, Runda and beyond.</p>
<div class="d-flex flex-wrap gap-3 small">
<a href="tel:+254796110511">📞 +254 796 110 511</a>
<a href="mailto:info@decomagna.com">✉️ info@decomagna.com</a>
</div>
</div>
<div class="col-lg-4 text-lg-end small text-secondary">
<div>© <span id="yr"></span> Decomagna Ltd. All rights reserved.</div>
<div>Nairobi, Kenya</div>
</div>
</div>
</div>
</footer>

<script>
document.getElementById(\'yr\').textContent = new Date().getFullYear();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>',
'thicknesses' => NULL,
'a_c_ratings' => NULL,
'color' => NULL,
'species' => NULL,
'heading_two' => 'Site Visits • Accurate As-Built Measurements • Seamless Finishing & Matching Trims',
'heading_two_section' => 'Decomagna flooring supply and install',
'content_two' => NULL,
'content_two_image' => NULL,
'image' => '2025-09-1807_26_32image20250902_124908 (1).jpg',
'created_at' => '2025-10-16 06:53:13',
'updated_at' => '2025-10-16 06:53:13',
),
5 => 
array (
'id' => 7,
'title' => 'Luxury Vinyl Tiles',
'order' => 2,
'has_products' => 1,
'name' => NULL,
'slung' => 'luxury-vinyl-tiles',
'meta' => NULL,
'content' => '<p>Luxury Vinyl Tiles</p>',
'thicknesses' => NULL,
'a_c_ratings' => NULL,
'color' => NULL,
'species' => NULL,
'heading_two' => NULL,
'heading_two_section' => NULL,
'content_two' => NULL,
'content_two_image' => NULL,
'image' => 'luxury-vinyl-tile-lvt-liverpool-longstaffes-1024x742.jpg',
'created_at' => '2025-10-16 07:03:57',
'updated_at' => '2025-10-16 07:03:57',
),
));
        
        
    }
}