<?php
/**
 * Template Name: Locations
 * The Locations page template for KIDazzle Child Care
 * @package KIDWEB
 */
get_header();
?>

<!-- Header / Hero Section -->
<div class="relative py-24 text-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
            alt="Map and community" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-green-900/80"></div>
    </div>
    <div class="relative z-10 container mx-auto px-4 text-white">
        <span class="bg-white/20 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4 inline-block">7
            Locations</span>
        <h1 class="text-5xl font-extrabold mb-4">Our Locations</h1>
        <p class="text-xl max-w-2xl mx-auto text-green-100">Find a KIDazzle center near you in Georgia, Tennessee, or
            Florida.</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- West End -->
        <div
            class="border border-slate-200 rounded-[2rem] overflow-hidden hover:shadow-2xl transition bg-white group flex flex-col">
            <div class="h-48 relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1575968770275-d831502049d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
                    alt="Atlanta">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                <div class="absolute bottom-4 left-6 text-white font-bold">Atlanta, GA</div>
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <h3 class="text-2xl font-bold text-slate-900 mb-2">West End Center</h3>
                <p class="text-slate-500 mb-6 text-sm flex items-start gap-2"><i data-lucide="map-pin"
                        class="w-4 h-4 mt-1 text-red-400"></i> 674 Joseph E Lowery Blvd</p>
                <div class="flex-grow mb-8">
                    <span class="bg-green-50 text-green-700 text-xs px-3 py-1 rounded-full font-bold uppercase">Arts
                        Focus</span>
                    <span
                        class="bg-slate-50 text-slate-600 text-xs px-3 py-1 rounded-full font-bold uppercase ml-2">Historic
                        District</span>
                </div>
                <a href="<?php echo esc_url(home_url('/location-west-end/')); ?>"
                    class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-600 transition shadow-md">View
                    Details</a>
            </div>
        </div>

        <!-- Summit -->
        <div
            class="border border-slate-200 rounded-[2rem] overflow-hidden hover:shadow-2xl transition bg-white group flex flex-col">
            <div class="h-48 relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
                    alt="Midtown Atlanta">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                <div class="absolute bottom-4 left-6 text-white font-bold">Midtown Atlanta</div>
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <h3 class="text-2xl font-bold text-slate-900 mb-2">IRS Summit</h3>
                <p class="text-slate-500 mb-6 text-sm flex items-start gap-2"><i data-lucide="map-pin"
                        class="w-4 h-4 mt-1 text-red-400"></i> 401 W Peachtree St NW</p>
                <div class="flex-grow mb-8"><span
                        class="bg-blue-50 text-blue-700 text-xs px-3 py-1 rounded-full font-bold uppercase">Bilingual</span>
                </div>
                <a href="<?php echo esc_url(home_url('/location-summit/')); ?>"
                    class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-600 transition shadow-md">View
                    Details</a>
            </div>
        </div>

        <!-- Memphis -->
        <div
            class="border border-slate-200 rounded-[2rem] overflow-hidden hover:shadow-2xl transition bg-white group flex flex-col">
            <div class="h-48 relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1569123847253-159846b490f2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
                    alt="Memphis">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                <div class="absolute bottom-4 left-6 text-white font-bold">Memphis, TN</div>
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Downtown Memphis</h3>
                <p class="text-slate-500 mb-6 text-sm flex items-start gap-2"><i data-lucide="map-pin"
                        class="w-4 h-4 mt-1 text-red-400"></i> 200 Main St</p>
                <div class="flex-grow mb-8"><span
                        class="bg-indigo-50 text-indigo-700 text-xs px-3 py-1 rounded-full font-bold uppercase">FedEx
                        Hub</span></div>
                <a href="<?php echo esc_url(home_url('/location-memphis/')); ?>"
                    class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-600 transition shadow-md">View
                    Details</a>
            </div>
        </div>

        <!-- Doral -->
        <div
            class="border border-slate-200 rounded-[2rem] overflow-hidden hover:shadow-2xl transition bg-white group flex flex-col">
            <div class="h-48 relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
                    alt="Doral Florida">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                <div class="absolute bottom-4 left-6 text-white font-bold">Doral, FL</div>
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Doral International</h3>
                <p class="text-slate-500 mb-6 text-sm flex items-start gap-2"><i data-lucide="map-pin"
                        class="w-4 h-4 mt-1 text-red-400"></i> 8800 NW 36th St</p>
                <div class="flex-grow mb-8"><span
                        class="bg-yellow-50 text-yellow-700 text-xs px-3 py-1 rounded-full font-bold uppercase">Spanish
                        Immersion</span></div>
                <a href="<?php echo esc_url(home_url('/location-doral/')); ?>"
                    class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-600 transition shadow-md">View
                    Details</a>
            </div>
        </div>

        <!-- AFC -->
        <div
            class="border border-slate-200 rounded-[2rem] overflow-hidden hover:shadow-2xl transition bg-white group flex flex-col">
            <div class="h-48 relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
                    alt="Downtown Atlanta">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                <div class="absolute bottom-4 left-6 text-white font-bold">Downtown Atlanta</div>
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Atlanta Federal Center</h3>
                <p class="text-slate-500 mb-6 text-sm flex items-start gap-2"><i data-lucide="map-pin"
                        class="w-4 h-4 mt-1 text-red-400"></i> 61 Forsyth St SW</p>
                <div class="flex-grow mb-8"><span
                        class="bg-blue-50 text-blue-700 text-xs px-3 py-1 rounded-full font-bold uppercase">Secure
                        Facility</span></div>
                <a href="<?php echo esc_url(home_url('/location-atlanta-federal-center/')); ?>"
                    class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-600 transition shadow-md">View
                    Details</a>
            </div>
        </div>

        <!-- College Park -->
        <div
            class="border border-slate-200 rounded-[2rem] overflow-hidden hover:shadow-2xl transition bg-white group flex flex-col">
            <div class="h-48 relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1569336415962-a4bd9f69cd83?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
                    alt="College Park">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                <div class="absolute bottom-4 left-6 text-white font-bold">College Park, GA</div>
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <h3 class="text-2xl font-bold text-slate-900 mb-2">College Park</h3>
                <p class="text-slate-500 mb-6 text-sm flex items-start gap-2"><i data-lucide="map-pin"
                        class="w-4 h-4 mt-1 text-red-400"></i> 1701 Columbia Ave</p>
                <div class="flex-grow mb-8"><span
                        class="bg-cyan-50 text-cyan-700 text-xs px-3 py-1 rounded-full font-bold uppercase">STEAM
                        Focus</span></div>
                <a href="<?php echo esc_url(home_url('/location-college-park/')); ?>"
                    class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-600 transition shadow-md">View
                    Details</a>
            </div>
        </div>

        <!-- Hampton -->
        <div
            class="border border-slate-200 rounded-[2rem] overflow-hidden hover:shadow-2xl transition bg-white group flex flex-col">
            <div class="h-48 relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1502086223501-68119136a64b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
                    alt="Hampton GA">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                <div class="absolute bottom-4 left-6 text-white font-bold">Hampton, GA</div>
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Hampton</h3>
                <p class="text-slate-500 mb-6 text-sm flex items-start gap-2"><i data-lucide="map-pin"
                        class="w-4 h-4 mt-1 text-red-400"></i> Hampton, GA</p>
                <div class="flex-grow mb-8"><span
                        class="bg-orange-50 text-orange-700 text-xs px-3 py-1 rounded-full font-bold uppercase">School
                        Readiness</span></div>
                <a href="<?php echo esc_url(home_url('/location-hampton/')); ?>"
                    class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-600 transition shadow-md">View
                    Details</a>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>