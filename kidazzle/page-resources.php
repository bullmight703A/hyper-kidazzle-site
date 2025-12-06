<?php
/**
 * Template Name: Resources Page
 *
 * @package Kidazzle_Theme
 */

get_header();
?>

<!-- 6. RESOURCES VIEW -->
<div id="view-resources" class="view-section active">
    <div class="bg-green-50 py-20 text-center">
        <h1 class="text-5xl font-extrabold text-slate-900 mb-4">Resources</h1>
        <p class="text-xl text-slate-600">Blogs, guides, and support.</p>
    </div>
    <div class="container mx-auto px-4 py-16 grid md:grid-cols-3 gap-8">
        <!-- Blog Placeholders -->
        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl transition">
            <div class="h-48 bg-slate-100 flex items-center justify-center text-slate-300 text-4xl">📖</div>
            <div class="p-6">
                <span class="text-xs font-bold text-green-600 uppercase">Parenting Tip</span>
                <h3 class="font-bold text-lg text-slate-900 mt-2 mb-2">Supporting Early Literacy</h3>
                <p class="text-sm text-slate-500 mb-4">Simple tips to help your child love reading from day one.</p>
                <button class="text-green-600 font-bold text-sm">Read Article</button>
            </div>
        </div>
        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl transition">
            <div class="h-48 bg-slate-100 flex items-center justify-center text-slate-300 text-4xl">🥦</div>
            <div class="p-6">
                <span class="text-xs font-bold text-green-600 uppercase">Wellness</span>
                <h3 class="font-bold text-lg text-slate-900 mt-2 mb-2">Healthy Eating Habits</h3>
                <p class="text-sm text-slate-500 mb-4">How to handle picky eaters with patience.</p>
                <button class="text-green-600 font-bold text-sm">Read Article</button>
            </div>
        </div>
        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl transition">
            <div class="h-48 bg-slate-100 flex items-center justify-center text-slate-300 text-4xl">🎨</div>
            <div class="p-6">
                <span class="text-xs font-bold text-green-600 uppercase">Development</span>
                <h3 class="font-bold text-lg text-slate-900 mt-2 mb-2">The Power of Play</h3>
                <p class="text-sm text-slate-500 mb-4">Why messy play is crucial for brain development.</p>
                <button class="text-green-600 font-bold text-sm">Read Article</button>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
