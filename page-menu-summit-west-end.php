<?php
/**
 * Template Name: Summit West End Menu Page
 *
 * @package kidazzle
 */

get_header();

$pdf_menu_url = get_template_directory_uri() . '/assets/KIDazzle_August_2026_Master_Menu_With_Heavy_Snacks.pdf';
?>

<main id="view-menu" class="view-section active block">
    <!-- Hero Section -->
    <section class="relative py-24 md:py-32 text-center overflow-hidden bg-brand-cream border-b border-brand-ink/5">
        <div class="max-w-7xl mx-auto px-4 text-brand-ink">
            <div class="inline-flex items-center gap-2 bg-kidazzle-blue/10 border border-kidazzle-blue/20 px-4 py-1.5 rounded-full text-[11px] uppercase tracking-[0.2em] font-bold text-kidazzle-blue mb-6">
                <i class="fa-solid fa-utensils"></i> Monthly Meals & Heavy Snacks
            </div>
            <h1 class="text-4xl md:text-6xl font-serif font-bold mb-4 text-brand-ink">
                August 2026 Master Meal & Heavy Snack Menu
            </h1>
            <p class="text-lg md:text-xl text-brand-ink/70 max-w-2xl mx-auto leading-relaxed">
                Healthy breakfasts, fresh lunches by ChefAdvantage, and daily rotated Heavy PM Snacks (CACFP aligned, 0 lunch menu conflicts) for our Summit and West End classrooms.
            </p>
        </div>
    </section>

    <!-- Download Options Section -->
    <section class="py-12 bg-white border-b border-brand-ink/5 text-center">
        <div class="max-w-4xl mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4">
                <a href="<?php echo esc_url($pdf_menu_url); ?>" 
                   class="inline-flex items-center gap-3 px-8 py-4 bg-kidazzle-blue text-white font-bold rounded-full uppercase tracking-widest text-xs hover:bg-brand-ink transition-all shadow-lg"
                   download="KIDazzle_August_2026_Master_Menu_With_Heavy_Snacks.pdf">
                   <i class="fa-solid fa-download"></i> Download Master Menu PDF (Breakfast, Lunch & Heavy Snacks)
                </a>
            </div>
        </div>
    </section>

    <!-- Interactive Menu Viewer -->
    <section class="py-16 bg-brand-cream">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-serif font-bold text-brand-ink text-center mb-10">Interactive Weekly Schedule</h2>
            
            <!-- Week Selection Tabs -->
            <div class="flex flex-wrap justify-center gap-2 mb-10" id="menu-tabs">
                <button onclick="changeMenuWeek(0)" class="tab-trigger px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-kidazzle-blue text-white shadow-md active-tab" data-idx="0">Week 1 (Aug 3-7)</button>
                <button onclick="changeMenuWeek(1)" class="tab-trigger px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-brand-ink/10 text-brand-ink/70 hover:text-brand-ink" data-idx="1">Week 2 (Aug 10-14)</button>
                <button onclick="changeMenuWeek(2)" class="tab-trigger px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-brand-ink/10 text-brand-ink/70 hover:text-brand-ink" data-idx="2">Week 3 (Aug 17-21)</button>
                <button onclick="changeMenuWeek(3)" class="tab-trigger px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-brand-ink/10 text-brand-ink/70 hover:text-brand-ink" data-idx="3">Week 4 (Aug 24-28)</button>
                <button onclick="changeMenuWeek(4)" class="tab-trigger px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-brand-ink/10 text-brand-ink/70 hover:text-brand-ink" data-idx="4">Week 5 (Aug 31)</button>
            </div>

            <!-- Schedule Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6" id="menu-day-cards">
                <!-- Dynamically loaded by script below -->
            </div>
        </div>
    </section>

    <!-- ChefAdvantage & Vendor Partnership Section -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Nutrition Info -->
                <div>
                    <span class="text-kidazzle-green font-bold uppercase tracking-widest text-xs mb-3 block">Meal & Snack Standards</span>
                    <h2 class="text-3xl font-serif font-bold text-brand-ink mb-6">Partnership & Nutrition</h2>
                    <p class="text-brand-ink/70 leading-relaxed mb-4">
                        At KIDazzle, nutrition is the foundation of growth and learning. We partner with <strong><a href="https://www.chefadvantage.com" target="_blank" class="text-kidazzle-blue hover:underline">ChefAdvantage</a></strong> for fresh daily lunches and maintain an in-house rotated <strong>Heavy PM Snack</strong> menu.
                    </p>
                    <p class="text-brand-ink/70 leading-relaxed mb-6">
                        <strong>Fresh Deliveries & Prep:</strong> Heavy snacks are prepared fresh in our 7:00 AM – 12:00 PM kitchen window, with deliveries arriving every Tuesday and Thursday from PureFun / PFG. Every snack is rotated daily to prevent food fatigue and eliminate ingredient conflicts with lunch.
                    </p>
                    <div class="p-5 bg-brand-cream rounded-2xl border border-brand-ink/5">
                        <h4 class="font-bold text-brand-ink mb-2">💡 Dietary Accommodations</h4>
                        <p class="text-sm text-brand-ink/70 leading-relaxed">
                            Vegetarian options and allergy-safe substitutions are prepared in a dedicated kitchen environment. Please coordinate with the center director for custom dietary needs.
                        </p>
                    </div>
                </div>
                
                <!-- Printable Download Card -->
                <div class="flex justify-center">
                    <div class="relative bg-brand-cream p-8 rounded-3xl border border-brand-ink/5 shadow-xl max-w-sm text-center">
                        <i class="fa-solid fa-file-pdf text-5xl text-kidazzle-green mb-4 block"></i>
                        <h4 class="font-bold text-brand-ink mb-2">Full Printable Menu PDF</h4>
                        <p class="text-xs text-brand-ink/60 leading-relaxed mb-4">
                            Includes complete weekly spreads for Breakfast, Lunch, and rotated Heavy PM Snacks across all 5 weeks.
                        </p>
                        <a href="<?php echo esc_url($pdf_menu_url); ?>" 
                           download="KIDazzle_August_2026_Master_Menu_With_Heavy_Snacks.pdf"
                           class="inline-block px-6 py-3 bg-kidazzle-green text-white font-bold rounded-full uppercase tracking-widest text-[10px] hover:bg-brand-ink transition-all shadow-md">
                            Download Master Menu PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    const menuData = [
      {
        week: "Week 1",
        dates: ["August 3", "August 4", "August 5", "August 6", "August 7"],
        breakfast: {
          Monday: "Chex Cereal, Pears, Milk, Water",
          Tuesday: "French Toast Sticks, Mixed Fruit, Milk, Water",
          Wednesday: "Oatmeal, Peaches, Milk, Water",
          Thursday: "Bagels, Cream Cheese, Banana, Milk, Water",
          Friday: "Biscuits, Sausage, Apple Sauce, Milk, Water"
        },
        lunch: {
          Monday: "Turkey Meat Sauce Pasta, Shredded Cheese, Steamed Peas, Diced Pears",
          Tuesday: "Cheese Pizza Dippers, Marinara Sauce, Steamed Carrots, Diced Pineapple",
          Wednesday: "Tuscan Chicken Pasta, Steamed Green Beans, Strawberry Applesauce, Fruit Yogurt Cup",
          Thursday: "BBQ Chicken Sandwich, Soft Bun, Baked Beans, Vegetable Medley",
          Friday: "Tex-Mex Turkey Soft Taco, Cheddar Cheese, Shredded Lettuce, Mandarin Oranges"
        },
        snack: {
          Monday: "Sun Butter & Jelly Sandwich on Whole Wheat + Apple Slices & Juice",
          Tuesday: "Turkey & Cheddar Sliders + Sun Chips & Oranges (PFG Delivery)",
          Wednesday: "Turkey & Cheese Tortilla Roll-ups + Applesauce",
          Thursday: "Baked Seasoned Chicken Legs + Whole Wheat Bread & Pears (PFG Delivery)",
          Friday: "Homemade Baked Oatmeal Bars + Fresh Red Apple Slices"
        }
      },
      {
        week: "Week 2",
        dates: ["August 10", "August 11", "August 12", "August 13", "August 14"],
        breakfast: {
          Monday: "Original Kix Cereal, Applesauce, Milk, Water",
          Tuesday: "Pancakes - WG, Turkey Sausage, Oranges, Milk, Water",
          Wednesday: "Grits, Egg Omelet, Peaches, Milk, Water",
          Thursday: "Waffles, Warm Strawberries, Milk, Water",
          Friday: "French Toast - WG, Mixed Fruit, Milk, Water"
        },
        lunch: {
          Monday: "Creamy Chicken Alfredo Pasta, Steamed Carrots, Diced Pineapples, Mandarin Oranges",
          Tuesday: "Breaded Chicken Sandwich, Soft Bun, Honey Mustard, Mashed Potatoes",
          Wednesday: "Cheesy Tomato Pasta, Shredded Cheese, Steamed Green Beans, Diced Pears",
          Thursday: "Whole Grain Popcorn Chicken, Housemade Ranch, Steamed Peas, Diced Peaches",
          Friday: "Chicken Quesadilla, Steamed Green Beans, Cinnamon Applesauce"
        },
        snack: {
          Monday: "Turkey Nachos & Tortilla Chips + Salsa",
          Tuesday: "Greek Yogurt & Fresh Berries Parfait + Whole Grain Granola (PFG Delivery)",
          Wednesday: "Turkey Pepperoni & Cheese Roll-ups + Warm Pizza Sauce",
          Thursday: "Baked Mac & Cheese w/ Diced Chicken + Green Peas (PFG Delivery)",
          Friday: "Fresh Warm Fruit Muffins + 100% Pure Apple Juice"
        }
      },
      {
        week: "Week 3",
        dates: ["August 17", "August 18", "August 19", "August 20", "August 21"],
        breakfast: {
          Monday: "Rice Krispy, Oranges, Milk, Water",
          Tuesday: "Pancakes - WG, Turkey Sausage, Mixed Fruit, Milk, Water",
          Wednesday: "Banana Muffin, Apple Slices, Milk, Water",
          Thursday: "Bagels, Cream Cheese, Banana, Milk, Water",
          Friday: "French Toast - WG, Peaches, Milk, Water"
        },
        lunch: {
          Monday: "Twist & Shout Mac N Cheese, Steamed Peas, Mandarin Oranges",
          Tuesday: "All-American BBQ Hamburger, Soft Bun, BBQ Sauce, Baked Beans, Diced Pears",
          Wednesday: "Fiesta Chicken Taco, Cheddar Cheese, Shredded Lettuce, Vegetable Medley, Diced Peaches",
          Thursday: "Italian Chicken Pasta, Steamed Green Beans, Strawberry Applesauce",
          Friday: "Personal Cheese Pizza, Steamed Carrots, Diced Pineapple"
        },
        snack: {
          Monday: "Baked Beans & Fresh Corn Muffins + Sliced Peaches",
          Tuesday: "Greek Yogurt Smoothie (Banana & Berries) + Graham Crackers (PFG Delivery)",
          Wednesday: "Baked Spaghetti w/ Cheese + Whole Wheat Crackers",
          Thursday: "Turkey & Cheddar Sliders + Sun Chips & Apple Slices (PFG Delivery)",
          Friday: "Fresh Baked Banana Bread + 100% Pure Apple Juice"
        }
      },
      {
        week: "Week 4",
        dates: ["August 24", "August 25", "August 26", "August 27", "August 28"],
        breakfast: {
          Monday: "Rice Krispy, Pears, Milk, Water",
          Tuesday: "Blueberry Muffin, Applesauce, Milk, Water",
          Wednesday: "Pancakes - WG, Mangos, Milk, Water",
          Thursday: "Biscuits - WG, Turkey Sausage, Peaches, Milk, Water",
          Friday: "Hashbrown Roll - WG, Apple Slices, Milk, Water"
        },
        lunch: {
          Monday: "Luca's Nut-Free Trenette Al Pesto, Steamed Carrots, Diced Peaches",
          Tuesday: "Chicken Burger, Southwest Ranch Dressing, Soft Bun, Steamed Peas, Diced Peaches",
          Wednesday: "Southwest Turkey and Rice, Steamed Green Beans, Mandarin Oranges",
          Thursday: "Parmesan Chicken Nuggets, Honey Mustard, Vegetable Medley, Diced Pineapple",
          Friday: "Topsy-Turvy Breakfast for Lunch (French Toast, Turkey Sausage, Applesauce, Yogurt Cup)"
        },
        snack: {
          Monday: "Sun Butter & Jelly Sandwich on Whole Wheat + Orange Wedges",
          Tuesday: "Baked Seasoned Chicken Legs + Whole Wheat Roll & Apple Slices (PFG Delivery)",
          Wednesday: "Turkey & Cheese Tortilla Roll-ups + Applesauce",
          Thursday: "Creamy Alfredo Noodles + Warm Dinner Roll & Pears (PFG Delivery)",
          Friday: "Vanilla Yogurt & Sliced Bananas + Graham Crackers"
        }
      },
      {
        week: "Week 5",
        dates: ["August 31", "", "", "", ""],
        breakfast: {
          Monday: "Corn Flakes, Bananas, Milk, Water",
          Tuesday: "",
          Wednesday: "",
          Thursday: "",
          Friday: ""
        },
        lunch: {
          Monday: "Turkey Cheeseburger Mac, Steamed Green Beans, Diced Peaches",
          Tuesday: "",
          Wednesday: "",
          Thursday: "",
          Friday: ""
        },
        snack: {
          Monday: "Sun Butter & Jelly Sandwich on Whole Wheat + Apple Slices",
          Tuesday: "",
          Wednesday: "",
          Thursday: "",
          Friday: ""
        }
      }
    ];

    const daysOfWeek = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];

    function changeMenuWeek(idx) {
        // Toggle tab styles
        const btns = document.querySelectorAll('#menu-tabs button');
        btns.forEach((btn, bIdx) => {
            if (bIdx === idx) {
                btn.className = "tab-trigger px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-kidazzle-blue text-white shadow-md active-tab";
            } else {
                btn.className = "tab-trigger px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-brand-ink/10 text-brand-ink/70 hover:text-brand-ink";
            }
        });

        // Render Day Cards with extra spacing
        const container = document.getElementById('menu-day-cards');
        container.innerHTML = '';
        
        const week = menuData[idx];
        daysOfWeek.forEach((day, dIdx) => {
            const date = week.dates[dIdx];
            const bf = week.breakfast[day];
            const lh = week.lunch[day];
            const sn = week.snack ? week.snack[day] : "";
            
            if (!date && !bf && !lh) return; // Skip empty days in Week 5
            
            const card = document.createElement('div');
            card.className = "bg-white p-6 rounded-2xl border border-brand-ink/5 shadow-md flex flex-col justify-between hover:shadow-lg transition-all space-y-6";
            card.innerHTML = `
                <div class="border-b border-brand-ink/10 pb-3 mb-2">
                    <h4 class="font-bold text-lg text-brand-ink">${day}</h4>
                    <span class="text-xs text-brand-ink/50">${date}</span>
                </div>
                
                <div class="space-y-4">
                    <div class="bg-brand-cream/50 p-3 rounded-xl border border-brand-ink/5">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-kidazzle-blue block mb-1">🍳 Breakfast</span>
                        <p class="text-xs text-brand-ink/80 leading-relaxed">${bf}</p>
                    </div>
                    
                    <div class="bg-emerald-50/50 p-3 rounded-xl border border-emerald-100">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-kidazzle-green block mb-1">🍲 Lunch</span>
                        <p class="text-xs text-brand-ink/80 leading-relaxed">${lh}</p>
                    </div>
                    
                    <div class="bg-amber-50/60 p-3 rounded-xl border border-amber-200">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-amber-700 block mb-1">🥣 Heavy PM Snack</span>
                        <p class="text-xs text-amber-900 font-semibold leading-relaxed">${sn}</p>
                    </div>
                </div>
            `;
            container.appendChild(card);
        });
    }

    // Load initial week
    changeMenuWeek(0);
</script>

<?php
get_footer();
