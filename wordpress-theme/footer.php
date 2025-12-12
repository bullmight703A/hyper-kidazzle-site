<!-- FOOTER -->
<footer class="bg-slate-900 text-slate-300 py-16 relative mt-12 text-center md:text-left">
    <div
        class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-white p-2 rounded-full shadow-lg border border-slate-100">
        <!-- Using custom logo if possible, but hardcoded img in snippet -->
        <span class="font-bold text-2xl text-slate-900 block px-2">K</span>
    </div>
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-8 pt-10">
        <div>
            <div class="bg-white p-1 rounded inline-block mb-4">
                <span class="font-bold text-slate-900 text-xl px-2">KIDazzle</span>
            </div>
            <p class="text-sm">
                Providing elite, independent child care for 31 years.
            </p>
        </div>
        <div>
            <h3 class="text-white font-bold mb-4">Quick Links</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="<?php echo site_url('/programs'); ?>" class="hover:text-white">Programs</a></li>
                <li><a href="<?php echo site_url('/locations'); ?>" class="hover:text-white">Locations</a></li>
                <li><a href="<?php echo site_url('/careers'); ?>" class="hover:text-white">Careers</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-white font-bold mb-4">Resources</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="<?php echo site_url('/teacher-portal'); ?>" class="hover:text-orange-400">Teacher
                        Portal</a></li>
                <li><a href="<?php echo site_url('/resources'); ?>" class="hover:text-purple-400">Blog</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-white font-bold mb-4">Contact</h3>
            <p class="text-sm">
                100 Alabama St SW, Atlanta, GA<br>
                <span class="text-white font-bold">877-410-1002</span>
            </p>
        </div>
    </div>
    <div class="border-t border-slate-800 mt-12 pt-8 text-center text-xs text-slate-500">
        <span>© <?php echo date('Y'); ?> KIDazzle Child Care Inc. All Rights Reserved.</span>
    </div>
</footer>

<?php wp_footer(); ?>
<!-- GHL Embed Script -->
<script src="https://link.msgsndr.com/js/embed.js" type="text/javascript"></script>

<script>
    lucide.createIcons();
    // Re-initialize charts if they exist on the page
    if (document.getElementById('kidazzleChart')) {
        let chart;
        const ctx = document.getElementById('kidazzleChart').getContext('2d');

        function renderChart(type) {
            if (chart) chart.destroy();

            // Updated Data for 2024-2025
            const data = {
                labels: ["Quality Staffing", "Nutrition Program", "Facility Maintenance", "Educational Resources", "Admin"],
                datasets: [{
                    label: "Commitment to Excellence (2025 Projection)",
                    data: [50, 20, 15, 10, 5],
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
                        },
                        title: {
                            display: true,
                            text: 'Where Your Tuition Goes: Investing in Quality',
                            color: '#1e293b',
                            font: { size: 16 }
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