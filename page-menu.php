<?php
/**
 * Template Name: Menu Page
 *
 * @package kidazzle
 */

get_header();
?>

<main id="view-menu" class="view-section active block">
    <!-- Hero Section -->
    <section class="relative py-24 md:py-32 text-center overflow-hidden bg-brand-cream border-b border-brand-ink/5">
        <div class="max-w-7xl mx-auto px-4 text-brand-ink">
            <div class="inline-flex items-center gap-2 bg-kidazzle-blue/10 border border-kidazzle-blue/20 px-4 py-1.5 rounded-full text-[11px] uppercase tracking-[0.2em] font-bold text-kidazzle-blue mb-6">
                <i class="fa-solid fa-utensils"></i> Monthly Meals
            </div>
            <h1 class="text-4xl md:text-6xl font-serif font-bold mb-4 text-brand-ink">
                August 2026 Meal Menu
            </h1>
            <p class="text-lg md:text-xl text-brand-ink/70 max-w-2xl mx-auto leading-relaxed">
                Healthy, nutritious breakfasts + fresh lunches prepared daily by ChefAdvantage for our Summit and West End classrooms.
            </p>
        </div>
    </section>

    <!-- Download Options Section -->
    <section class="py-12 bg-white border-b border-brand-ink/5 text-center">
        <div class="max-w-4xl mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4">
                <a href="https://iro.bullmight.com/KIDazzle_August_2026_Breakfast_Lunch_Menu_Weekly_Pages.pdf" 
                   class="inline-flex items-center gap-3 px-8 py-4 bg-kidazzle-blue text-white font-bold rounded-full uppercase tracking-widest text-xs hover:bg-brand-ink transition-all shadow-lg"
                   download>
                   <i class="fa-solid fa-download"></i> Download Weekly Menu PDF
                </a>
                <a href="https://iro.bullmight.com/KIDazzle_August_2026_Menu_Cover_Page.pdf" 
                   class="inline-flex items-center gap-3 px-8 py-4 bg-white border border-brand-ink/20 text-brand-ink font-bold rounded-full uppercase tracking-widest text-xs hover:border-kidazzle-blue hover:text-kidazzle-blue transition-all"
                   download>
                   <i class="fa-solid fa-file-pdf"></i> Download Cover Flyer PDF
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

    <!-- ChefAdvantage & Chef Bio Section -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Chef Bio Column -->
                <div>
                    <span class="text-kidazzle-green font-bold uppercase tracking-widest text-xs mb-3 block">Meet our Chef</span>
                    <h2 class="text-3xl font-serif font-bold text-brand-ink mb-6">Partnership & Nutrition</h2>
                    <p class="text-brand-ink/70 leading-relaxed mb-4">
                        At KIDazzle, nutrition is the foundation of growth and learning. We partner with <strong><a href="https://www.chefadvantage.com" target="_blank" class="text-kidazzle-blue hover:underline">ChefAdvantage</a></strong> to provide healthy, well-balanced lunches that meet and exceed USDA guidelines.
                    </p>
                    <p class="text-brand-ink/70 leading-relaxed mb-6">
                        <strong>Chef Marcus, Culinary Director:</strong> Marcus is passionate about early childhood nutrition, crafting recipes that expand young palates while providing essential vitamins and minerals. All meals are prepared fresh daily using local, natural ingredients, free of unnecessary additives.
                    </p>
                    <div class="p-5 bg-brand-cream rounded-2xl border border-brand-ink/5">
                        <h4 class="font-bold text-brand-ink mb-2">💡 Dietary Accommodations</h4>
                        <p class="text-sm text-brand-ink/70 leading-relaxed">
                            Vegetarian options and allergy-safe substitutions are prepared in a dedicated kitchen environment. Please coordinate with the center director to establish custom meal schedules.
                        </p>
                    </div>
                </div>
                
                <!-- Graphic Image / QR code poster visual -->
                <div class="flex justify-center">
                    <div class="relative bg-brand-cream p-8 rounded-3xl border border-brand-ink/5 shadow-xl max-w-sm text-center">
                        <img src="https://iro.bullmight.com/august-2026-menu-qr.png" alt="Scan QR Code" class="w-48 h-48 mx-auto mb-4 rounded-xl border border-brand-ink/10" />
                        <h4 class="font-bold text-brand-ink mb-2">QR Code Flyer</h4>
                        <p class="text-xs text-brand-ink/60 leading-relaxed mb-4">
                            Hanging this flyer on your classroom board allows parents to scan and instantly pull up this page!
                        </p>
                        <a href="https://iro.bullmight.com/KIDazzle_August_2026_Menu_Cover_Page.pdf" class="inline-block px-6 py-2.5 bg-kidazzle-green text-white font-bold rounded-full uppercase tracking-widest text-[10px] hover:bg-brand-ink transition-all shadow-md">
                            Print Flyer PDF
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

        // Render Day Cards
        const container = document.getElementById('menu-day-cards');
        container.innerHTML = '';
        
        const week = menuData[idx];
        daysOfWeek.forEach((day, dIdx) => {
            const date = week.dates[dIdx];
            const bf = week.breakfast[day];
            const lh = week.lunch[day];
            
            if (!date && !bf && !lh) return; // Skip empty days in Week 5
            
            const card = document.createElement('div');
            card.className = "bg-white p-6 rounded-2xl border border-brand-ink/5 shadow-md flex flex-col hover:shadow-lg transition-all";
            card.innerHTML = `
                <div class="border-b border-brand-ink/5 pb-3 mb-4">
                    <h4 class="font-bold text-lg text-brand-ink">${day}</h4>
                    <span class="text-xs text-brand-ink/50">${date}</span>
                </div>
                <div class="mb-4">
                    <span class="text-[10px] font-extrabold uppercase tracking-wider text-kidazzle-blue block mb-1">🍳 Breakfast</span>
                    <p class="text-sm text-brand-ink/80 leading-relaxed">${bf}</p>
                </div>
                <div>
                    <span class="text-[10px] font-extrabold uppercase tracking-wider text-kidazzle-green block mb-1">🍲 Lunch</span>
                    <p class="text-sm text-brand-ink/80 leading-relaxed">${lh}</p>
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
