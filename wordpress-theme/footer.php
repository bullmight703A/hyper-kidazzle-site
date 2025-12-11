<!-- FOOTER -->
<footer class="bg-slate-900 text-slate-300 py-20 mt-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-10">
        <div>
            <div
                class="h-10 w-10 bg-yellow-400 rounded-full flex items-center justify-center text-white font-bold text-xl mb-4">
                K</div>
            <p class="text-slate-400 text-sm">
                Providing elite, independent child care for 31 years.
            </p>
        </div>

        <div>
            <h4 class="text-white font-bold mb-4">Quick Links</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="<?php echo site_url('/programs'); ?>" class="hover:text-red-400">Programs</a></li>
                <li><a href="<?php echo site_url('/locations'); ?>" class="hover:text-green-400">Locations</a></li>
                <li><a href="<?php echo site_url('/about'); ?>" class="hover:text-cyan-400">About Us</a></li>
                <li><a href="<?php echo site_url('/contact'); ?>" class="hover:text-indigo-400">Contact</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-white font-bold mb-4">Resources</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="<?php echo site_url('/resources'); ?>" class="hover:text-purple-400">Teacher Portal</a>
                </li>
                <li><a href="<?php echo site_url('/resources'); ?>" class="hover:text-purple-300">Blog</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-white font-bold mb-4">Contact</h4>
            <ul class="space-y-2 text-sm">
                <li class="flex items-start gap-2">
                    <i data-lucide="map-pin" class="text-slate-500"></i>
                    100 Alabama St SW, Atlanta
                </li>
                <li class="flex items-center gap-2">
                    <i data-lucide="phone" class="text-slate-500"></i>
                    <span class="font-bold text-white">877-410-1002</span>
                </li>
            </ul>
        </div>
    </div>

    <p class="text-center text-xs text-slate-500 mt-8">© <?php echo date('Y'); ?> KIDazzle Child Care Inc.</p>
</footer>

<?php wp_footer(); ?>
<script>
    lucide.createIcons();
    // Re-initialize charts if they exist on the page
    if (document.getElementById('kidazzleChart')) {
        let chart;
        const ctx = document.getElementById('kidazzleChart').getContext('2d');

        function renderChart(type) {
            if (chart) chart.destroy();

            const data = {
                labels: ["Teachers", "Facilities", "Food", "Curriculum", "Admin"],
                datasets: [{
                    label: "Cost Breakdown",
                    data: [45, 25, 15, 10, 5],
                    backgroundColor: ["#fbbf24", "#fb923c", "#7c3aed", "#06b6d4", "#ef4444"],
                    borderWidth: 2,
                    borderColor: "#0f172a",
                    tension: 0.3,
                    fill: type === 'line'
                }]
            };

            const config = {
                type: type,
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom',
                            labels: { color: '#475569' }
                        }
                    }
                }
            };

            chart = new Chart(ctx, config);
        }

        const lineBtn = document.getElementById("lineBtn");
        const pieBtn = document.getElementById("pieBtn");

        if (lineBtn && pieBtn) {
            lineBtn.onclick = () => {
                renderChart("line");
                lineBtn.classList.add("chart-btn-active");
                pieBtn.classList.remove("chart-btn-active");
            };

            pieBtn.onclick = () => {
                renderChart("doughnut");
                pieBtn.classList.add("chart-btn-active");
                lineBtn.classList.remove("chart-btn-active");
            };

            renderChart("line");
        }
    }
</script>
</body>

</html>