<?php
/**
 * Template Name: Locations Page
 *
 * @package Kidazzle_Theme
 */

get_header();
?>

<!-- 4. LOCATIONS VIEW (List) -->
<div id="view-locations" class="view-section active">
	<div class="bg-cyan-50 py-20">
		<div class="container mx-auto px-4 text-center">
			<h1 class="text-5xl font-extrabold mb-4 text-slate-900">Our Locations</h1>
			<p class="text-xl max-w-2xl mx-auto text-slate-600">Find a KIDazzle center near you.</p>
		</div>
	</div>
	<div class="container mx-auto px-4 py-16 grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="locations-grid">
		<!-- Locations Injected via JS (Source) -> PHP conversion below -->
		<?php
		// Static Location Data for Initial Migration (Later can be CPT loop)
		$locations = [
			[
				'id' => 'westend',
				'name' => 'West End Center',
				'address' => '674 Joseph E Lowery Blvd, Atlanta, GA 30310',
				'features' => ['Arts Focus', 'Historic District', 'Pre-K Program']
			],
			[
				'id' => 'summit',
				'name' => 'IRS Summit Building',
				'address' => '401 W Peachtree St NW, Atlanta, GA 30308',
				'features' => ['Bilingual Center', 'Infant Care', 'Federal Employee Priority']
			],
			[
				'id' => 'memphis',
				'name' => 'Downtown Memphis',
				'address' => '200 Main St, Memphis, TN 38103',
				'features' => ['FedEx Hub Nearby', 'Music Program', 'Extended Hours']
			],
			[
				'id' => 'afc',
				'name' => 'Atlanta Federal Center',
				'address' => '61 Forsyth St SW, Atlanta, GA 30303',
				'features' => ['Secure Federal Facility', 'GA Pre-K', 'Toddler Discovery']
			],
			[
				'id' => 'collegepark',
				'name' => 'College Park Center',
				'address' => '1701 Columbia Ave, College Park, GA 30337',
				'features' => ['Near Airport', 'STEAM Focus', 'Transportation']
			],
			[
				'id' => 'hampton',
				'name' => 'Hampton Center',
				'address' => 'Hampton, GA',
				'features' => ['School Readiness', 'Large Playground', 'Summer Camp']
			],
			[
				'id' => 'miami',
				'name' => 'Doral International',
				'address' => '8800 NW 36th St, Doral, FL 33178',
				'features' => ['Spanish Immersion', 'STEM Lab', 'Cultural Arts']
			]
		];

		foreach ($locations as $loc): ?>
			<div class="border border-slate-200 rounded-3xl p-8 hover:shadow-xl transition bg-white group flex flex-col">
				<h3 class="text-2xl font-bold text-slate-900 mb-2"><?php echo esc_html($loc['name']); ?></h3>
				<p class="text-slate-500 mb-4 text-sm"><?php echo esc_html($loc['address']); ?></p>
				<div class="flex-grow mb-6">
					<div class="flex flex-wrap gap-2">
						<?php foreach ($loc['features'] as $f): ?>
							<span
								class="bg-cyan-50 text-cyan-700 text-xs px-2 py-1 rounded-md font-bold"><?php echo esc_html($f); ?></span>
						<?php endforeach; ?>
					</div>
				</div>
				<!-- Note: Linking to single location if CPT exists, else link to contact -->
				<button onclick="window.location.href='<?php echo home_url('/location/' . $loc['id']); ?>'"
					class="w-full bg-slate-900 text-white font-bold py-3 rounded-xl hover:bg-cyan-600 transition shadow-md">View
					Details</button>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<?php get_footer(); ?>
