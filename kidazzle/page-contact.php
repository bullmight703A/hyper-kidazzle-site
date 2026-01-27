<?php
/**
 * Template Name: Contact Page
 *
 * @package kidazzle_Excellence
 */

get_header();
?>

<main id="view-contact" class="view-section active block">
    <!-- Hero Section -->
    <section class="py-24 bg-brand-ink text-white text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-kidazzle-blue/5 -z-10"></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10">
            <span class="text-kidazzle-yellow font-bold tracking-[0.2em] text-xs uppercase mb-4 block">Connect</span>
            <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4">Contact Us</h1>
            <p class="text-lg text-white/60">We\'re here to help you finding the perfect care for your family.</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <div class="grid lg:grid-cols-2 gap-20 items-start">
                
                <!-- Contact Info -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-brand-ink mb-12">Get in Touch</h2>
                    
                    <div class="grid gap-10">
                        <!-- Corporate -->
                        <div class="flex gap-6 group">
                            <div class="w-14 h-14 bg-brand-cream text-brand-ink rounded-2xl flex items-center justify-center text-xl shrink-0 group-hover:bg-brand-ink group-hover:text-white transition-all">
                                <i class="fa-solid fa-building"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-brand-ink mb-2">Corporate Office</h3>
                                <p class="text-brand-ink/60 leading-relaxed">100 Alabama St SW,<br>Atlanta, GA 30303</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex gap-6 group">
                            <div class="w-14 h-14 bg-kidazzle-green/10 text-kidazzle-green rounded-2xl flex items-center justify-center text-xl shrink-0 group-hover:bg-kidazzle-green group-hover:text-white transition-all">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-brand-ink mb-2">Phone</h3>
                                <p class="text-brand-ink/60 leading-relaxed">
                                    <a href="tel:877-410-1002" class="font-bold text-brand-ink hover:text-kidazzle-green transition-colors">877-410-1002</a><br>
                                    <span class="text-xs uppercase tracking-widest opacity-60">Mon-Fri 8am-5pm EST</span>
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex gap-6 group">
                            <div class="w-14 h-14 bg-kidazzle-red/10 text-kidazzle-red rounded-2xl flex items-center justify-center text-xl shrink-0 group-hover:bg-kidazzle-red group-hover:text-white transition-all">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-brand-ink mb-2">Email</h3>
                                <p class="text-brand-ink/60 leading-relaxed">
                                    <a href="mailto:info@kidazzlechildcare.com" class="font-bold text-brand-ink hover:text-kidazzle-red transition-colors">info@kidazzlechildcare.com</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Secondary CTA -->
                    <div class="mt-16 bg-brand-cream p-10 rounded-[3rem] border border-brand-ink/5 relative overflow-hidden">
                        <div class="relative z-10">
                            <h4 class="font-bold text-xl text-brand-ink mb-3">Looking for a specific center?</h4>
                            <p class="text-sm text-brand-ink/70 mb-8 leading-relaxed">Each of our locations has its own director and direct line. Find the details for your nearest school.</p>
                            <a href="/locations" class="inline-flex items-center gap-2 font-bold text-xs uppercase tracking-widest text-kidazzle-blue hover:gap-4 transition-all">View All Locations <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-10 md:p-12 rounded-[3.5rem] shadow-premium border border-brand-ink/5">
                    <h3 class="text-2xl font-serif font-bold text-brand-ink mb-8">Send us a Message</h3>
                    <?php
                    if (shortcode_exists('wpforms')) {
                        echo do_shortcode('[wpforms id="contact" title="false"]');
                    } else {
                    ?>
                        <form action="#" method="POST" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-[10px] font-bold uppercase tracking-widest text-brand-ink/40 mb-2 ml-4">First Name</label>
                                    <input type="text" class="w-full bg-brand-cream border-transparent focus:border-kidazzle-blue focus:bg-white rounded-2xl px-6 py-4 transition-all outline-none" placeholder="John" required>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-bold uppercase tracking-widest text-brand-ink/40 mb-2 ml-4">Last Name</label>
                                    <input type="text" class="w-full bg-brand-cream border-transparent focus:border-kidazzle-blue focus:bg-white rounded-2xl px-6 py-4 transition-all outline-none" placeholder="Doe" required>
                                </div>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-widest text-brand-ink/40 mb-2 ml-4">Email Address</label>
                                <input type="email" class="w-full bg-brand-cream border-transparent focus:border-kidazzle-blue focus:bg-white rounded-2xl px-6 py-4 transition-all outline-none" placeholder="john@example.com" required>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-widest text-brand-ink/40 mb-2 ml-4">Your Message</label>
                                <textarea rows="5" class="w-full bg-brand-cream border-transparent focus:border-kidazzle-blue focus:bg-white rounded-2xl px-6 py-4 transition-all outline-none resize-none" placeholder="How can we help you?" required></textarea>
                            </div>
                            <button type="submit" class="w-full py-5 bg-kidazzle-blue text-white font-bold rounded-full uppercase tracking-widest text-xs hover:bg-brand-ink transition-all shadow-lg hover:shadow-xl">Send Message</button>
                        </form>
                    <?php } ?>
                </div>

            </div>
        </div>
    </section>
</main>

<?php
get_footer();
