<!-- FOOTER -->
<footer class="bg-slate-900 text-slate-300 py-16 relative mt-12 text-center md:text-left">
    <div
        class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-white p-2 rounded-full shadow-lg border border-slate-100">
        <?php if (has_custom_logo()): ?>
            <img src="<?php echo esc_url(wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'thumbnail')); ?>"
                class="h-10 w-auto" alt="<?php bloginfo('name'); ?>">
        <?php endif; ?>
    </div>
    <div class="container mx-auto px-4 grid md:grid-cols-4 gap-8 pt-10">
        <div>
            <h3 class="text-2xl font-extrabold text-white mb-4">KID<span class="text-yellow-500">azzle</span></h3>
            <p class="text-sm">Providing elite, independent child care for 31 years.</p>
        </div>
        <div>
            <h4 class="text-white font-bold mb-4">Quick Links</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="<?php echo esc_url(home_url('/programs/')); ?>" class="hover:text-white">Programs</a></li>
                <li><a href="<?php echo esc_url(home_url('/locations/')); ?>" class="hover:text-white">Locations</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/careers/')); ?>" class="hover:text-white">Careers</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-bold mb-4">Resources</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="<?php echo esc_url(home_url('/teacher-portal/')); ?>" class="hover:text-orange-400">Teacher
                        Portal</a></li>
                <li><a href="<?php echo esc_url(home_url('/resources/')); ?>" class="hover:text-purple-400">Blog</a>
                </li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-bold mb-4">Contact</h4>
            <p class="text-sm">100 Alabama St SW, Atlanta, GA<br><span class="text-white font-bold">877-410-1002</span>
            </p>
        </div>
    </div>
    <div class="border-t border-slate-800 mt-12 pt-8 text-center text-xs text-slate-500">
        <span>© <?php echo date('Y'); ?> KIDazzle Child Care Inc. All Rights Reserved.</span>
    </div>
</footer>

<?php wp_footer(); ?>
<script src="https://link.msgsndr.com/js/embed.js" type="text/javascript"></script>
<script>
    lucide.createIcons();
    document.getElementById('mobile-menu-btn').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
</body>

</html>