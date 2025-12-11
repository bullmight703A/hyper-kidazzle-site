<?php get_header(); ?>

<div class="min-h-screen bg-slate-50 flex items-center justify-center py-24 px-6">
    <div class="max-w-4xl w-full bg-white rounded-[2rem] shadow-2xl overflow-hidden flex flex-col md:flex-row">

        <!-- Left Side: Login -->
        <div class="md:w-1/2 p-10 md:p-14">
            <h1 class="text-3xl font-extrabold text-slate-900 mb-2">Teacher Portal</h1>
            <p class="text-slate-500 mb-8">Welcome back! Please access your resources below.</p>

            <form class="space-y-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Staff ID / Email</label>
                    <div class="relative">
                        <i data-lucide="user"
                            class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 w-5 h-5"></i>
                        <input type="email"
                            class="w-full pl-12 pr-4 py-3 rounded-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition"
                            placeholder="ID Number">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Password</label>
                    <div class="relative">
                        <i data-lucide="lock"
                            class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 w-5 h-5"></i>
                        <input type="password"
                            class="w-full pl-12 pr-4 py-3 rounded-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition"
                            placeholder="••••••••">
                    </div>
                </div>
                <button type="button"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 rounded-xl transition shadow-lg flex items-center justify-center gap-2">
                    <i data-lucide="log-in" class="w-5 h-5"></i> Log In
                </button>
            </form>
            <p class="text-center text-xs text-slate-400 mt-6"><a href="#" class="hover:underline">Forgot password?</a>
                | <a href="#" class="hover:underline">Need access?</a></p>
        </div>

        <!-- Right Side: Info -->
        <div
            class="md:w-1/2 bg-indigo-900 text-white p-10 md:p-14 flex flex-col justify-center relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/50 to-purple-600/50"></div>
            <div class="relative z-10">
                <h2 class="text-2xl font-bold mb-6">Quick Resources</h2>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3">
                        <div class="bg-white/20 p-2 rounded-lg"><i data-lucide="file-text" class="w-5 h-5"></i></div>
                        <span>Lesson Plan Templates</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="bg-white/20 p-2 rounded-lg"><i data-lucide="calendar" class="w-5 h-5"></i></div>
                        <span>PTO Request Form</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="bg-white/20 p-2 rounded-lg"><i data-lucide="book-open" class="w-5 h-5"></i></div>
                        <span>Training Modules</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="bg-white/20 p-2 rounded-lg"><i data-lucide="phone" class="w-5 h-5"></i></div>
                        <span>IT Support</span>
                    </li>
                </ul>
                <div class="mt-10 pt-10 border-t border-white/20">
                    <p class="text-indigo-200 text-sm">"Teaching is the profession that teaches all the other
                        professions."</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>