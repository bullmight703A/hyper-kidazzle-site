<?php
/**
 * Template Name: About Us
 * The About page template for KIDazzle Child Care
 * @package KIDWEB
 */
get_header();
?>

<!-- HEADER / HERO SECTION -->
<div class="relative py-32 text-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1603354350317-6f7aaa5911c5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
            alt="Children learning together" class="w-full h-full object-cover">
        <!-- Orange Overlay to match brand & keep text readable -->
        <div class="absolute inset-0 bg-orange-50/90"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4">
        <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 mb-6">Our Legacy</h1>
        <p class="text-xl md:text-2xl text-slate-600 max-w-3xl mx-auto font-medium">Three decades. Three states. One
            mission: To build a brighter future.</p>
    </div>
</div>

<div class="container mx-auto px-4 py-20 space-y-24">
    <section class="grid md:grid-cols-2 gap-16 items-center">
        <div>
            <span class="text-orange-500 font-bold tracking-widest uppercase text-sm mb-2 block">Since 1994</span>
            <h2 class="text-4xl font-extrabold text-slate-900 mb-8">From Humble Beginnings to Regional Excellence</h2>
            <div class="space-y-6 text-lg text-slate-600 leading-relaxed">
                <p>KIDazzle Child Care was founded over 31 years ago with a singular vision: to provide elite early
                    childhood education accessible to working families. We started as a single center, driven by the
                    belief that <strong>quality care is a right, not a privilege</strong>.</p>
                <p>Unlike many large chains that prioritize franchise fees, KIDazzle has remained an independent,
                    family-led organization. This allows us to maintain strict quality control and a deep personal
                    connection with every community we serve.</p>
            </div>
        </div>
        <div class="h-[500px] bg-slate-200 rounded-[3rem] shadow-2xl overflow-hidden relative">
            <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Vintage or Founding Photo Placeholder" class="w-full h-full object-cover">
        </div>
    </section>

    <!-- Vision 2030 -->
    <section class="bg-slate-900 text-white rounded-[3rem] p-12 text-center relative overflow-hidden">
        <div class="relative z-10">
            <h2 class="text-3xl font-bold mb-4">Vision for the Future</h2>
            <p class="text-slate-300 max-w-3xl mx-auto mb-8">Continuing to bridge the gap between affordable care and
                elite education across the Southeast.</p>
            <div class="grid grid-cols-4 gap-4 border-t border-slate-700 pt-8 mb-8">
                <div>
                    <div class="text-3xl font-bold text-yellow-400">31+</div>
                    <div class="text-xs uppercase">Years</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-red-500">10k+</div>
                    <div class="text-xs uppercase">Students</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-cyan-400">3</div>
                    <div class="text-xs uppercase">States</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-green-500">100%</div>
                    <div class="text-xs uppercase">Quality</div>
                </div>
            </div>

            <!-- Embedded CTA -->
            <div
                class="bg-white/10 border-2 border-dashed border-white/20 rounded-xl p-8 max-w-xl mx-auto backdrop-blur-sm">
                <p class="text-slate-300 text-xs font-mono mb-4">Join Our Mission</p>
                <a href="<?php echo esc_url(home_url('/enrollment/')); ?>"
                    class="bg-white text-slate-900 px-8 py-3 rounded-lg font-bold hover:bg-cyan-50 transition inline-block">Contact
                    Leadership</a>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>