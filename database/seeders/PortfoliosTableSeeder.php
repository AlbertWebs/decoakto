<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolios')->delete();
        
        \DB::table('portfolios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Lordship Africa - 88 Nairobi Showhouse',
                'category_id' => 1,
                'big' => 1,
                'home' => 1,
                'slung' => 'lordship-africa-88-nairobi-showhouse',
                'video' => NULL,
                'meta' => 'Decomagna was proud to have done the flooring installation for the prestigious 88 Nairobi showhouse in Upperhill, commissioned by Lordship Africa. The project featured the installation of Quick-Step Eligna laminate flooring, renowned for its durability and elegance. With a 25-year warranty and waterproof properties, this Belgian-made flooring added a touch of sophistication to the showhouse, situated in the heart of Nairobi. Trust Decomagna for exceptional flooring solutions that elevate your space to new heights.',
                'content' => '<p>Decomagna is thrilled to have executed a remarkable flooring project for The Lordship Africa - 88 Nairobi Showhouse in Nairobi. Our expert team demonstrated their expertise and commitment to excellence, transforming the show house with exquisite flooring solutions.</p>',
                'image_one' => 'lordship-africa-88-nairobi-1.jpg',
                'image_two' => 'lordship_africa_88_nairobi_flooring.jpg',
                'image_three' => 'category-wood-species-hickory.webp',
                'image_four' => 'category-wood-species-hickory.webp',
                'created_at' => '2023-06-23 12:42:49',
                'updated_at' => '2023-06-23 12:42:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Wadi Degla Clubs',
                'category_id' => 1,
                'big' => 0,
                'home' => 1,
                'slung' => 'wadi-degla-clubs',
                'video' => NULL,
                'meta' => 'Decomagna successfully completed a remarkable flooring project for the esteemed Wadi Degla Club in Kiambu. With our expertise and dedication to excellence, we transformed the club\'s interior spaces with high-quality flooring solutions. From elegant laminate options to luxurious engineered wood,',
                'content' => '<p>Decomagna proudly announces the successful completion of a remarkable flooring project for The Wadi Degla Club in Kiambui Showhouse, Nairobi. Our dedicated team of experts demonstrated exceptional skill and commitment to excellence, elevating the gallery&#39;s interior spaces with exquisite flooring solutions. From concept to execution, our meticulous attention to detail ensured a flawless finish, reflecting our dedication to delivering top-quality results. We are honored to have contributed to enhancing the aesthetic appeal and functionality of this esteemed venue, solidifying our reputation as leaders in the flooring industry.</p>',
                'image_one' => 'Wadi Degla Clubs-decomagna-flooring-laminates-1.jpg',
                'image_two' => '0',
                'image_three' => '0',
                'image_four' => NULL,
                'created_at' => '2023-06-23 12:59:10',
                'updated_at' => '2023-06-23 12:59:10',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'The Design Gallery',
                'category_id' => 1,
                'big' => 0,
                'home' => 1,
                'slung' => 'the-design-gallery',
                'video' => NULL,
                'meta' => 'For the first time ever, you can install timber everywhere in your home, thanks to Amato’s waterproof surface with waterproof click.',
                'content' => '<p>Decomagna proudly executed a remarkable flooring project for The Design Gallery located in Westlands, Nairobi. Our team of experts showcased their expertise and commitment to excellence, transforming the gallery&#39;s interior spaces with exquisite flooring solutions. From stunning laminate options to luxurious engineered wood, Decomagna delivered flooring that seamlessly merged style, durability, and functionality. The meticulous installation process ensured a flawless finish that surpassed expectations. Trust Decomagna to provide exceptional flooring solutions for your project, just as we did for The Design Gallery in Westlands Nairobi.</p>',
                'image_one' => 'Design-Gallery-Westlands.jpg',
                'image_two' => '0',
                'image_three' => '0',
                'image_four' => NULL,
                'created_at' => '2023-06-23 13:00:01',
                'updated_at' => '2023-06-23 13:00:01',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Karen Country Club',
                'category_id' => 1,
                'big' => 0,
                'home' => 1,
                'slung' => 'karen-country-club',
                'video' => NULL,
                'meta' => 'Decomagna undertook a remarkable flooring project at the prestigious Karen Country Club, showcasing our impressive collection of fully waterproof laminate flooring. Our team demonstrated expertise and attention to detail, transforming the club\'s spaces with flooring solutions that combine style, durability, and waterproof capabilities. From elegant designs to exceptional performance, our laminate floors provided a seamless and stunning finish. Trust Decomagna to deliver outstanding flooring solutions, as we did for the esteemed Karen Country Club.',
                'content' => '<p>Decomagna proudly announces the successful completion of a remarkable flooring project for The Karen Country Club in Nairobi. Our dedicated team of experts showcased exceptional skill and commitment to excellence, enhancing the gallery&#39;s interior spaces with exquisite flooring solutions. From meticulous planning to flawless execution, we ensured every detail was met with precision, reflecting our unwavering dedication to quality. We&#39;re honored to have contributed to the club&#39;s ambiance, providing a stunning backdrop for members and guests alike. This achievement underscores our commitment to excellence and solidifies our position as leaders in the flooring industry.</p>',
                'image_one' => 'karen-country-club.jpg',
                'image_two' => '0',
                'image_three' => '0',
                'image_four' => NULL,
                'created_at' => '2023-06-23 13:00:46',
                'updated_at' => '2023-06-23 13:00:46',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Novo Nordisk',
                'category_id' => 1,
                'big' => 0,
                'home' => 1,
                'slung' => 'novo-nordisk',
                'video' => NULL,
                'meta' => 'Decomagna successfully executed an exceptional flooring project for Novo Nordisk, highlighting our wide range of high-quality flooring solutions. Our team\'s expertise and meticulous attention to detail brought a fresh and stylish look to Novo Nordisk\'s spaces. From elegant laminate options to luxurious engineered wood, Decomagna provided flooring that seamlessly combined aesthetics, durability, and functionality. The flawless installation ensured a refined finish that exceeded expectations. Trust Decomagna to deliver outstanding flooring solutions for your project, just as we did for Novo Nordisk.',
                'content' => '<p>For the first time ever, you can install timber everywhere in your home, thanks to Amato&rsquo;s waterproof surface with waterproof click.</p>',
                'image_one' => 'novo-nordisk.jpg',
                'image_two' => '0',
                'image_three' => '0',
                'image_four' => NULL,
                'created_at' => '2023-06-23 13:01:22',
                'updated_at' => '2023-06-23 13:01:22',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Laminates',
                'category_id' => 1,
                'big' => 0,
                'home' => 1,
                'slung' => 'laminates',
                'video' => NULL,
                'meta' => 'For the first time ever, you can install timber everywhere in your home, thanks to Amato’s waterproof surface with waterproof click.',
                'content' => '<p>The flawless installation ensured a refined finish that exceeded expectations. Trust Decomagna to deliver outstanding flooring solutions for your project,</p>',
                'image_one' => 'Amato-feature 1.png',
                'image_two' => '0',
                'image_three' => '0',
                'image_four' => NULL,
                'created_at' => '2023-06-23 13:01:43',
                'updated_at' => '2023-06-23 13:01:43',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Catalogue',
                'category_id' => 1,
                'big' => 0,
                'home' => 0,
                'slung' => 'catalogue',
                'video' => NULL,
                'meta' => 'Our catalogue',
                'content' => '<p>Catalogue</p>',
                'image_one' => 'Decomagna Catalogue .pdf',
                'image_two' => '0',
                'image_three' => '0',
                'image_four' => NULL,
                'created_at' => '2025-05-13 18:36:54',
                'updated_at' => '2025-05-13 18:36:54',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Naivasha Homes  Project',
                'category_id' => 1,
                'big' => 0,
                'home' => 0,
                'slung' => 'naivasha-homes-project',
                'video' => NULL,
                'meta' => 'Residential Flooring Installation',
                'content' => '<p>In this Naivasha project, our client envisioned a warm, modern interior with a seamless, wood-inspired look that would stand the test of time. Our <strong>DecoMagna Quick-Step laminate flooring</strong> was the perfect choice&mdash;offering durability, easy maintenance, and timeless elegance.</p>

<p>Our technicians began by <strong>preparing the subfloor</strong> to ensure a perfectly level surface, which is essential for a smooth, long-lasting installation. Underlay was carefully laid to provide extra comfort underfoot, improve acoustic performance, and protect against moisture.</p>

<p>Each laminate plank was expertly measured, cut, and fitted with precision, ensuring tight seams and a natural flow of the grain pattern across the room. The client selected a <strong>rich walnut finish</strong>, which beautifully complements the <strong>white-colored walls</strong>, creating a striking contrast that adds both warmth and elegance to the space.</p>

<p>The result is a <strong>stylish, durable floor</strong> that blends seamlessly with the home&rsquo;s d&eacute;cor while offering the practical benefits of Quick-Step laminates&mdash;scratch resistance, easy cleaning, and long-lasting beauty.</p>

<p><strong>Why this project stands out:</strong></p>

<ul>
<li>
<p>Professional workmanship from start to finish</p>
</li>
<li>
<p>Attention to detail in pattern alignment and finishing touches</p>
</li>
<li>
<p>On-time project delivery with client satisfaction guaranteed</p>
</li>
</ul>',
            'image_one' => 'WhatsApp Image 2025-08-07 at 4.38.26 PM (1).jpeg',
                'image_two' => 'WhatsApp Image 2025-08-07 at 4.38.26 PM.jpeg',
                'image_three' => 'WhatsApp Image 2025-08-07 at 4.38.28 PM.jpeg',
                'image_four' => 'WhatsApp Image 2025-08-07 at 4.38.27 PM.jpeg',
                'created_at' => '2025-08-08 15:28:26',
                'updated_at' => '2025-08-08 15:28:26',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Quick-Step Flooring Kenya – Laminate & LVT and Engineered wood | Supply and install across Kenya',
                'category_id' => 1,
                'big' => 0,
                'home' => 0,
                'slung' => 'quick-step-flooring-kenya-laminate-lvt-and-engineered-wood-supply-and-install-across-kenya',
                'video' => NULL,
                'meta' => 'Quick-Step Kenya laminate & SPC flooring Q&A: prices from KSh 2,300/m², professional installation in Nairobi, Mombasa, Nyali, Diani, Naivasha, Nanyuki & beyond. Waterproof vs splash-proof, AC4–AC5 ratings, Service Class 32/33/43, termite resistance, heat & coastal salt-air tips, transport & warranties.',
                'content' => '<p>&lt;!-- Primary SEO --&gt;<br />
&lt;title&gt;Quick-Step Flooring Kenya Q&amp;A: Prices, Installation (Nairobi &amp; Mombasa), Waterproof vs Splash-proof, Class 32/33/43&lt;/title&gt;<br />
&lt;meta name=&quot;description&quot; content=&quot;Quick-Step flooring Kenya Q&amp;A: prices from KSh 2,300/m&sup2;, pro installation in Nairobi &amp; Mombasa, waterproof vs splash-proof, AC/Service Class 32/33/43, termites, heat &amp; coast.&quot;&gt;<br />
&lt;link rel=&quot;canonical&quot; href=&quot;https://www.decomagna.com/blogs/quick-step-question-answer-sheet&quot;&gt;</p>

<p>&lt;!-- Helpful robots signals --&gt;<br />
&lt;meta name=&quot;robots&quot; content=&quot;index,follow,max-image-preview:large&quot;&gt;<br />
&lt;meta name=&quot;format-detection&quot; content=&quot;telephone=no&quot;&gt;</p>

<p>&lt;!-- Open Graph (Facebook/LinkedIn/WhatsApp) --&gt;<br />
&lt;meta property=&quot;og:title&quot; content=&quot;Quick-Step Flooring Kenya Q&amp;A (Nairobi, Mombasa): Prices, Waterproof, Class 32/33/43&quot;&gt;<br />
&lt;meta property=&quot;og:description&quot; content=&quot;Compare waterproof vs splash-proof, Service Class 32/33/43 &amp; AC ratings. Prices from KSh 2,300/m&sup2;. Expert installation in Nairobi &amp; the Coast.&quot;&gt;<br />
&lt;meta property=&quot;og:type&quot; content=&quot;article&quot;&gt;<br />
&lt;meta property=&quot;og:url&quot; content=&quot;https://www.decomagna.com/blogs/quick-step-question-answer-sheet&quot;&gt;<br />
&lt;meta property=&quot;og:site_name&quot; content=&quot;Decomagna &bull; Quick-Step Kenya&quot;&gt;<br />
&lt;meta property=&quot;og:locale&quot; content=&quot;en_KE&quot;&gt;<br />
&lt;!-- Use a real hosted image at least 1200x630 --&gt;<br />
&lt;meta property=&quot;og:image&quot; content=&quot;https://www.decomagna.com/static/og/quick-step-kenya-faq-1200x630.jpg&quot;&gt;<br />
&lt;meta property=&quot;og:image:width&quot; content=&quot;1200&quot;&gt;<br />
&lt;meta property=&quot;og:image:height&quot; content=&quot;630&quot;&gt;</p>

<p>&lt;!-- Twitter --&gt;<br />
&lt;meta name=&quot;twitter:card&quot; content=&quot;summary_large_image&quot;&gt;<br />
&lt;meta name=&quot;twitter:title&quot; content=&quot;Quick-Step Flooring Kenya Q&amp;A: Prices, Waterproof vs Splash-proof, Class 32/33/43&quot;&gt;<br />
&lt;meta name=&quot;twitter:description&quot; content=&quot;Nairobi &amp; Mombasa installs. Prices from KSh 2,300/m&sup2;. Compare Service Class 32/33/43, AC wear, termites, heat &amp; coastal guidance.&quot;&gt;<br />
&lt;meta name=&quot;twitter:image&quot; content=&quot;https://www.decomagna.com/static/og/quick-step-kenya-faq-1200x630.jpg&quot;&gt;</p>

<p>&lt;!-- Optional: Local Business JSON-LD (helps with local context) --&gt;<br />
&lt;script type=&quot;application/ld+json&quot;&gt;<br />
{<br />
&nbsp; &quot;@context&quot;: &quot;https://schema.org&quot;,<br />
&nbsp; &quot;@type&quot;: &quot;FlooringContractor&quot;,<br />
&nbsp; &quot;name&quot;: &quot;Decomagna Ltd &bull; Quick-Step Kenya&quot;,<br />
&nbsp; &quot;url&quot;: &quot;https://www.decomagna.com/&quot;,<br />
&nbsp; &quot;logo&quot;: &quot;https://www.decomagna.com/static/brand/decomagna-logo.png&quot;,<br />
&nbsp; &quot;image&quot;: &quot;https://www.decomagna.com/static/og/quick-step-kenya-faq-1200x630.jpg&quot;,<br />
&nbsp; &quot;priceRange&quot;: &quot;KSh 2,300&ndash;8,500 per m&sup2;&quot;,<br />
&nbsp; &quot;telephone&quot;: &quot;+254796110511&quot;,<br />
&nbsp; &quot;areaServed&quot;: [<br />
&nbsp; &nbsp; {&quot;@type&quot;:&quot;City&quot;,&quot;name&quot;:&quot;Nairobi&quot;},<br />
&nbsp; &nbsp; {&quot;@type&quot;:&quot;City&quot;,&quot;name&quot;:&quot;Mombasa&quot;},<br />
&nbsp; &nbsp; {&quot;@type&quot;:&quot;Place&quot;,&quot;name&quot;:&quot;Nyali&quot;},<br />
&nbsp; &nbsp; {&quot;@type&quot;:&quot;Place&quot;,&quot;name&quot;:&quot;Diani&quot;},<br />
&nbsp; &nbsp; {&quot;@type&quot;:&quot;City&quot;,&quot;name&quot;:&quot;Nakuru&quot;},<br />
&nbsp; &nbsp; {&quot;@type&quot;:&quot;City&quot;,&quot;name&quot;:&quot;Naivasha&quot;},<br />
&nbsp; &nbsp; {&quot;@type&quot;:&quot;City&quot;,&quot;name&quot;:&quot;Nanyuki&quot;}<br />
&nbsp; ],<br />
&nbsp; &quot;address&quot;: {<br />
&nbsp; &nbsp; &quot;@type&quot;: &quot;PostalAddress&quot;,<br />
&nbsp; &nbsp; &quot;addressCountry&quot;: &quot;KE&quot;<br />
&nbsp; },<br />
&nbsp; &quot;sameAs&quot;: [<br />
&nbsp; &nbsp; &quot;https://www.facebook.com/yourpage&quot;,<br />
&nbsp; &nbsp; &quot;https://www.instagram.com/yourpage&quot;,<br />
&nbsp; &nbsp; &quot;https://www.linkedin.com/company/yourpage&quot;<br />
&nbsp; ],<br />
&nbsp; &quot;makesOffer&quot;: [<br />
&nbsp; &nbsp; {&quot;@type&quot;:&quot;Offer&quot;,&quot;itemOffered&quot;:{&quot;@type&quot;:&quot;Product&quot;,&quot;name&quot;:&quot;Quick-Step Laminate Class 32&quot;}},<br />
&nbsp; &nbsp; {&quot;@type&quot;:&quot;Offer&quot;,&quot;itemOffered&quot;:{&quot;@type&quot;:&quot;Product&quot;,&quot;name&quot;:&quot;Quick-Step Laminate Class 33&quot;}},<br />
&nbsp; &nbsp; {&quot;@type&quot;:&quot;Offer&quot;,&quot;itemOffered&quot;:{&quot;@type&quot;:&quot;Product&quot;,&quot;name&quot;:&quot;SPC (Rigid Core) Waterproof Flooring&quot;}}<br />
&nbsp; ]<br />
}<br />
&lt;/script&gt;<br />
&nbsp;</p>',
                'image_one' => 'Screenshot 2025-08-14 095641.png',
                'image_two' => '0',
                'image_three' => '0',
                'image_four' => NULL,
                'created_at' => '2025-10-01 19:56:48',
                'updated_at' => '2025-10-01 19:56:48',
            ),
        ));
        
        
    }
}