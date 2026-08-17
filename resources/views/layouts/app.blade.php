<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kongboo Tang | Software Engineering Student & AI Developer</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}">

    <!-- Scripts / Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#f5f5f7] text-[#1d1d1f] dark:bg-[#000000] dark:text-[#f5f5f7] min-h-screen flex flex-col selection:bg-indigo-500 selection:text-white">
    
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 w-full apple-glass-light dark:apple-glass-dark border-b border-black/[0.08] dark:border-white/[0.12] apple-spring-transition">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('portfolio.index') }}" class="text-2xl font-bold tracking-tight text-[#1d1d1f] dark:text-white flex items-center gap-2 group">
                        <span class="w-8 h-8 rounded-xl bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center text-white text-sm font-black shadow-md group-hover:scale-105 active:scale-95 apple-spring-transition">T</span>
                        <span class="tracking-tighter font-extrabold text-xl">Tang</span>
                    </a>
                </div>
                
                <div class="flex items-center gap-3">
                    <!-- Desktop Links -->
                    <div class="hidden md:flex items-center space-x-1 mr-2 bg-black/[0.04] dark:bg-white/[0.06] p-1 rounded-full border border-black/[0.04] dark:border-white/[0.08]">
                        <a href="#about" class="px-4 py-1.5 rounded-full text-xs font-semibold text-slate-700 hover:text-black hover:bg-white dark:text-slate-300 dark:hover:text-white dark:hover:bg-white/15 apple-spring-transition active:scale-95">About</a>
                        <a href="#skills" class="px-4 py-1.5 rounded-full text-xs font-semibold text-slate-700 hover:text-black hover:bg-white dark:text-slate-300 dark:hover:text-white dark:hover:bg-white/15 apple-spring-transition active:scale-95">Skills</a>
                        <a href="#projects" class="px-4 py-1.5 rounded-full text-xs font-semibold text-slate-700 hover:text-black hover:bg-white dark:text-slate-300 dark:hover:text-white dark:hover:bg-white/15 apple-spring-transition active:scale-95">Projects</a>
                        <a href="#contact" class="px-4 py-1.5 rounded-full text-xs font-semibold text-slate-700 hover:text-black hover:bg-white dark:text-slate-300 dark:hover:text-white dark:hover:bg-white/15 apple-spring-transition active:scale-95">Contact</a>
                    </div>

                    <!-- Theme Toggle -->
                    <button id="theme-toggle" type="button" class="text-slate-600 dark:text-slate-300 hover:bg-black/5 dark:hover:bg-white/10 active:scale-90 rounded-full p-2.5 apple-spring-transition border border-black/[0.06] dark:border-white/[0.1]">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>

                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-btn" type="button" class="md:hidden text-slate-600 dark:text-slate-300 hover:bg-black/5 dark:hover:bg-white/10 active:scale-90 rounded-full p-2.5 apple-spring-transition border border-black/[0.06] dark:border-white/[0.1]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden apple-glass-light dark:apple-glass-dark border-b border-black/[0.08] dark:border-white/[0.12]">
            <div class="px-4 pt-3 pb-6 space-y-1 sm:px-3">
                <a href="#about" class="mobile-nav-link block px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:text-black hover:bg-black/5 dark:text-slate-300 dark:hover:text-white dark:hover:bg-white/10 apple-spring-transition">About</a>
                <a href="#skills" class="mobile-nav-link block px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:text-black hover:bg-black/5 dark:text-slate-300 dark:hover:text-white dark:hover:bg-white/10 apple-spring-transition">Skills</a>
                <a href="#projects" class="mobile-nav-link block px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:text-black hover:bg-black/5 dark:text-slate-300 dark:hover:text-white dark:hover:bg-white/10 apple-spring-transition">Projects</a>
                <a href="#contact" class="mobile-nav-link block px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:text-black hover:bg-black/5 dark:text-slate-300 dark:hover:text-white dark:hover:bg-white/10 apple-spring-transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#f0f0f2] dark:bg-[#111113] border-t border-black/[0.08] dark:border-white/[0.12] py-12 mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <div>
                <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-lg bg-gradient-to-tr from-indigo-500 to-purple-500 flex items-center justify-center text-white text-xs font-black">T</span>
                    <span class="text-lg font-bold tracking-tight text-[#1d1d1f] dark:text-white">Tang Kongboo</span>
                </div>
                <p class="text-xs apple-text-muted-light dark:apple-text-muted-dark mt-1 font-medium">© {{ date('Y') }} All rights reserved. Designed following Apple HIG standards.</p>
            </div>
            <div class="flex space-x-5 items-center">
                <a href="https://github.com/TangKongboo" target="_blank" class="p-2 rounded-full text-slate-500 hover:text-indigo-600 dark:text-slate-400 dark:hover:text-indigo-400 hover:bg-black/5 dark:hover:bg-white/10 active:scale-90 apple-spring-transition" aria-label="GitHub">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/kongboo-tang-503a92404/" target="_blank" class="p-2 rounded-full text-slate-500 hover:text-indigo-600 dark:text-slate-400 dark:hover:text-indigo-400 hover:bg-black/5 dark:hover:bg-white/10 active:scale-90 apple-spring-transition" aria-label="LinkedIn">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="mailto:kongbootang@gmail.com" class="p-2 rounded-full text-slate-500 hover:text-indigo-600 dark:text-slate-400 dark:hover:text-indigo-400 hover:bg-black/5 dark:hover:bg-white/10 active:scale-90 apple-spring-transition" aria-label="Email">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </a>
                <a href="https://t.me/+85561913865" target="_blank" class="p-2 rounded-full text-slate-500 hover:text-indigo-600 dark:text-slate-400 dark:hover:text-indigo-400 hover:bg-black/5 dark:hover:bg-white/10 active:scale-90 apple-spring-transition" aria-label="Telegram">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    @stack('scripts')
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        });

        // Mobile Menu Toggle
        var mobileMenuBtn = document.getElementById('mobile-menu-btn');
        var mobileMenu = document.getElementById('mobile-menu');
        var mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            // Close mobile menu when a link is clicked
            mobileNavLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                });
            });
        }
    </script>
</body>
</html>
