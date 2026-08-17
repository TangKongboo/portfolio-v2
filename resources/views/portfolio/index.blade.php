@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative pt-24 pb-20 lg:pt-36 lg:pb-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <!-- Profile Avatar Badge -->
        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full apple-card-light dark:apple-card-dark mb-8 shadow-sm border border-black/[0.08] dark:border-white/[0.12] active:scale-95 apple-spring-transition">
            <img src="{{ asset('images/profile1.jpg') }}" alt="Kongboo Tang" class="w-8 h-8 rounded-full object-cover ring-2 ring-indigo-500/50">
            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Hi, I'm <strong class="text-indigo-600 dark:text-indigo-400 font-bold">Kongboo Tang</strong> 👋</span>
        </div>

        <h1 class="text-5xl md:text-7xl lg:text-8xl font-black tracking-tight text-[#1d1d1f] dark:text-white mb-6">
            Building <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 via-purple-500 to-cyan-400">Intelligent</span> Systems.
        </h1>
        <p class="mt-6 text-lg md:text-2xl apple-text-muted-light dark:apple-text-muted-dark max-w-3xl mx-auto font-normal leading-relaxed">
            Software Engineering student passionate about crafting scalable, full-stack applications and integrating AI technologies.
        </p>
        <div class="mt-10 flex flex-wrap justify-center gap-4">
            <a href="#projects" class="px-8 py-3.5 text-sm font-semibold rounded-full text-white bg-[#1d1d1f] hover:bg-black dark:bg-white dark:text-[#1d1d1f] dark:hover:bg-slate-200 active:scale-95 apple-spring-transition shadow-lg">
                View My Work
            </a>
            <a href="{{ asset('TANG_KONGBOO_CV.pdf') }}" target="_blank" class="px-8 py-3.5 text-sm font-semibold rounded-full text-[#1d1d1f] dark:text-white apple-card-light dark:apple-card-dark hover:bg-black/5 dark:hover:bg-white/10 active:scale-95 apple-spring-transition flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                Download CV
            </a>
            <a href="#contact" class="hidden sm:inline-flex px-8 py-3.5 text-sm font-semibold rounded-full text-[#1d1d1f] dark:text-white apple-card-light dark:apple-card-dark hover:bg-black/5 dark:hover:bg-white/10 active:scale-95 apple-spring-transition">
                Get in Touch
            </a>
        </div>
    </div>

    <!-- Background Glow Backdrop -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-indigo-500/10 dark:bg-indigo-500/15 rounded-full blur-3xl pointer-events-none"></div>
</section>

<!-- Personal Information Section -->
<section id="about" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-extrabold tracking-tight text-[#1d1d1f] dark:text-white sm:text-4xl">Personal Information</h2>
            <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
            <p class="mt-4 apple-text-muted-light dark:apple-text-muted-dark text-base font-normal">Get to know more about my background, expertise, and contact details.</p>
        </div>

        <div class="max-w-5xl mx-auto apple-card-light dark:apple-card-dark rounded-[28px] p-8 md:p-12 shadow-sm">
            <div class="flex flex-col md:flex-row gap-8 md:gap-12 items-center md:items-start">
                <!-- Profile Image & Quick Bio Card -->
                <div class="w-full md:w-1/3 flex flex-col items-center text-center">
                    <div class="relative group mb-6 w-48 h-48 sm:w-56 sm:h-56">
                        <div class="absolute -inset-1 bg-gradient-to-tr from-indigo-500 to-cyan-400 rounded-full blur opacity-70 group-hover:opacity-100 apple-spring-transition"></div>
                        <img src="{{ asset('images/profile1.jpg') }}" alt="Kongboo Tang" class="relative w-full h-full rounded-full object-cover object-top border-4 border-white dark:border-slate-900 shadow-xl">
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#1d1d1f] dark:text-white tracking-tight">Kongboo Tang</h3>
                    <p class="text-indigo-600 dark:text-indigo-400 font-semibold text-sm mt-1">Software Engineering Student</p>
                    <span class="inline-flex items-center gap-1.5 mt-3 px-3.5 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        Available for Internship
                    </span>
                </div>

                <!-- Detailed Info & Bio -->
                <div class="w-full md:w-2/3 leading-relaxed">
                    <h4 class="text-xl font-bold text-[#1d1d1f] dark:text-white mb-3 tracking-tight">About Me</h4>
                    <p class="text-base text-slate-700 dark:text-slate-300 mb-6 font-normal">
                        I am a third-year Software Engineering student at <strong class="text-[#1d1d1f] dark:text-white font-semibold">Limkokwing University</strong> with a strong passion for <span class="text-indigo-600 dark:text-indigo-400 font-medium">full stack web development</span> and AI technology integration. Skilled in PHP, Laravel, JavaScript, MySQL, and Tailwind CSS.
                    </p>

                    <!-- Key Details Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-black/[0.06] dark:border-white/[0.08]">
                        <div class="flex items-center gap-3 p-3.5 rounded-[18px] bg-black/[0.02] dark:bg-white/[0.04] border border-black/[0.04] dark:border-white/[0.08] hover:bg-black/[0.04] dark:hover:bg-white/[0.08] apple-spring-transition">
                            <div class="w-9 h-9 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center shrink-0 font-bold">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-[11px] uppercase tracking-wider apple-text-muted-light dark:apple-text-muted-dark block font-semibold">Full Name</span>
                                <span class="text-sm font-semibold text-[#1d1d1f] dark:text-slate-100">Kongboo Tang</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-3.5 rounded-[18px] bg-black/[0.02] dark:bg-white/[0.04] border border-black/[0.04] dark:border-white/[0.08] hover:bg-black/[0.04] dark:hover:bg-white/[0.08] apple-spring-transition">
                            <div class="w-9 h-9 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center shrink-0 font-bold">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-[11px] uppercase tracking-wider apple-text-muted-light dark:apple-text-muted-dark block font-semibold">Education</span>
                                <span class="text-sm font-semibold text-[#1d1d1f] dark:text-slate-100">B.S. Software Engineering</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-3.5 rounded-[18px] bg-black/[0.02] dark:bg-white/[0.04] border border-black/[0.04] dark:border-white/[0.08] hover:bg-black/[0.04] dark:hover:bg-white/[0.08] apple-spring-transition">
                            <div class="w-9 h-9 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center shrink-0 font-bold">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-[11px] uppercase tracking-wider apple-text-muted-light dark:apple-text-muted-dark block font-semibold">Email</span>
                                <a href="mailto:kongbootang@gmail.com" class="text-sm font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">kongbootang@gmail.com</a>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-3.5 rounded-[18px] bg-black/[0.02] dark:bg-white/[0.04] border border-black/[0.04] dark:border-white/[0.08] hover:bg-black/[0.04] dark:hover:bg-white/[0.08] apple-spring-transition">
                            <div class="w-9 h-9 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center shrink-0 font-bold">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-[11px] uppercase tracking-wider apple-text-muted-light dark:apple-text-muted-dark block font-semibold">Telegram</span>
                                <a href="https://t.me/+85561913865" target="_blank" class="text-sm font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">+855 61 913 865</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience & Education Section -->
<section id="resume" class="py-20">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-extrabold tracking-tight text-[#1d1d1f] dark:text-white sm:text-4xl">Experience & Education</h2>
            <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Experience Card -->
            <div class="apple-card-light dark:apple-card-dark rounded-[24px] p-8">
                <h3 class="text-2xl font-bold text-[#1d1d1f] dark:text-white mb-6 flex items-center gap-3 tracking-tight">
                    <div class="w-10 h-10 rounded-2xl bg-indigo-500/10 flex items-center justify-center text-indigo-600 dark:text-indigo-400 font-bold">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    Experience
                </h3>
                <div class="relative border-l-2 border-indigo-500/30 ml-4 space-y-8">
                    <div class="relative pl-6">
                        <div class="absolute w-3 h-3 bg-indigo-500 rounded-full -left-[7px] top-1.5 ring-4 ring-white dark:ring-slate-900"></div>
                        <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 mb-2">May, 2024 - Dec, 2024</span>
                        <h4 class="text-lg font-bold text-[#1d1d1f] dark:text-white">Credit Admin</h4>
                        <div class="text-xs apple-text-muted-light dark:apple-text-muted-dark font-medium mb-3">Daun Penh Specialized Bank Plc.</div>
                        <ul class="list-disc list-outside ml-4 text-slate-600 dark:text-slate-300 text-sm space-y-2 font-normal">
                            <li>Managed and verified customer data with strong attention to detail, maintaining accurate records across internal systems.</li>
                            <li>Identified and corrected data inconsistencies to ensure data integrity.</li>
                            <li>Collaborated with team members to ensure efficient daily operations.</li>
                            <li>Developed strong problem-solving and analytical skills through rigorous data validation processes.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Education Card -->
            <div class="apple-card-light dark:apple-card-dark rounded-[24px] p-8">
                <h3 class="text-2xl font-bold text-[#1d1d1f] dark:text-white mb-6 flex items-center gap-3 tracking-tight">
                    <div class="w-10 h-10 rounded-2xl bg-indigo-500/10 flex items-center justify-center text-indigo-600 dark:text-indigo-400 font-bold">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        </svg>
                    </div>
                    Education
                </h3>
                <div class="relative border-l-2 border-indigo-500/30 ml-4 space-y-8">
                    <div class="relative pl-6">
                        <div class="absolute w-3 h-3 bg-indigo-500 rounded-full -left-[7px] top-1.5 ring-4 ring-white dark:ring-slate-900"></div>
                        <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 mb-2">2024 - Present</span>
                        <h4 class="text-lg font-bold text-[#1d1d1f] dark:text-white">B.S. in Software Engineering</h4>
                        <div class="text-xs apple-text-muted-light dark:apple-text-muted-dark font-medium mb-3">Limkokwing University of Creative Technology</div>
                        <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed font-normal">
                            <strong class="text-[#1d1d1f] dark:text-white font-semibold">Relevant Coursework:</strong> Web Development, Database Systems, Data Structures & Algorithms, Software Engineering, Requirements Engineering, Object-Oriented Programming.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-extrabold tracking-tight text-[#1d1d1f] dark:text-white sm:text-4xl">Technical Expertise</h2>
            <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($skills as $skill)
            <div class="apple-card-light dark:apple-card-dark rounded-[22px] p-6 hover:scale-[1.02] active:scale-[0.98] apple-spring-transition">
                <div class="w-12 h-12 bg-indigo-500/10 rounded-2xl flex items-center justify-center mb-4 text-indigo-600 dark:text-indigo-400 font-bold">
                    {!! $skill->icon_svg !!}
                </div>
                <h3 class="text-lg font-bold text-[#1d1d1f] dark:text-white mb-2 tracking-tight">{{ $skill->title }}</h3>
                <p class="apple-text-muted-light dark:apple-text-muted-dark text-sm leading-relaxed font-normal">{{ $skill->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Projects Showcase Section -->
<section id="projects" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-extrabold tracking-tight text-[#1d1d1f] dark:text-white sm:text-4xl">Featured Projects</h2>
            <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
            <p class="mt-4 apple-text-muted-light dark:apple-text-muted-dark text-base font-normal">A selection of my recent work showcasing full-stack development and system design.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <!-- Project Card -->
            <div class="group apple-card-light dark:apple-card-dark rounded-[24px] overflow-hidden hover:scale-[1.02] active:scale-[0.99] apple-spring-transition flex flex-col">
                <div class="h-52 relative overflow-hidden bg-black/5 dark:bg-white/5 border-b border-black/[0.06] dark:border-white/[0.08]">
                    <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h3 class="text-xl font-bold text-[#1d1d1f] dark:text-white mb-2 tracking-tight">{{ $project->title }}</h3>
                    <p class="apple-text-muted-light dark:apple-text-muted-dark text-sm mb-4 flex-1 leading-relaxed font-normal">{{ $project->description }}</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach($project->tags ?? [] as $tag)
                        <span class="px-3 py-1 text-xs font-semibold bg-black/[0.04] dark:bg-white/[0.06] text-slate-700 dark:text-slate-300 rounded-full border border-black/[0.04] dark:border-white/[0.08]">{{ $tag }}</span>
                        @endforeach
                    </div>
                    <div class="flex gap-4 mt-auto pt-4 border-t border-black/[0.06] dark:border-white/[0.08]">
                        @if($project->github_link)
                        <a href="{{ $project->github_link }}" target="_blank" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1d1d1f] dark:text-white hover:text-indigo-600 dark:hover:text-indigo-400 active:scale-95 apple-spring-transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                            Code
                        </a>
                        @endif
                        @if($project->live_link && $project->live_link !== '#')
                        <a href="{{ $project->live_link }}" target="_blank" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#1d1d1f] dark:text-white hover:text-indigo-600 dark:hover:text-indigo-400 active:scale-95 apple-spring-transition">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Live Demo
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold tracking-tight text-[#1d1d1f] dark:text-white sm:text-4xl">Let's Connect</h2>
            <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
            <p class="mt-4 apple-text-muted-light dark:apple-text-muted-dark text-base font-normal">Have a project in mind or just want to say hi? I'd love to hear from you.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
            <!-- Direct Contact & QR -->
            <div class="lg:col-span-2 apple-card-light dark:apple-card-dark rounded-[28px] p-8 flex flex-col items-center justify-center text-center">
                <h3 class="text-xl font-bold text-[#1d1d1f] dark:text-white mb-2 tracking-tight">Direct Contact</h3>
                <p class="apple-text-muted-light dark:apple-text-muted-dark text-xs mb-6 font-medium">Scan to chat with me instantly on Telegram.</p>
                <div class="bg-white p-3 rounded-[20px] shadow-md border border-black/[0.08] mb-5 inline-block">
                    <img src="{{ asset('images/telegram-qr.png') }}" alt="Telegram QR Code" class="w-44 h-44 object-contain rounded-xl">
                </div>
                <a href="https://t.me/+85561913865" target="_blank" class="inline-flex items-center justify-center gap-2 text-indigo-600 dark:text-indigo-400 font-bold text-sm hover:underline active:scale-95 apple-spring-transition">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                    </svg>
                    @MENHCHEU
                </a>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-3 apple-card-light dark:apple-card-dark rounded-[28px] p-8 md:p-10">
                @if(session('success'))
                <div class="mb-6 bg-emerald-500/10 border border-emerald-500/20 rounded-[16px] p-4">
                    <p class="text-xs text-emerald-600 dark:text-emerald-400 font-semibold">{{ session('success') }}</p>
                </div>
                @endif

                <form action="{{ route('portfolio.contact') }}" method="POST" class="space-y-5">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="name" class="block text-xs font-semibold apple-text-muted-light dark:apple-text-muted-dark uppercase tracking-wider mb-1.5">Name</label>
                            <input type="text" name="name" id="name" class="w-full rounded-[14px] border border-black/[0.08] dark:border-white/[0.12] bg-black/[0.02] dark:bg-white/[0.04] text-[#1d1d1f] dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500/50 text-sm py-3 px-4 apple-spring-transition" placeholder="Your name">
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-semibold apple-text-muted-light dark:apple-text-muted-dark uppercase tracking-wider mb-1.5">Email</label>
                            <input type="email" name="email" id="email" class="w-full rounded-[14px] border border-black/[0.08] dark:border-white/[0.12] bg-black/[0.02] dark:bg-white/[0.04] text-[#1d1d1f] dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500/50 text-sm py-3 px-4 apple-spring-transition" placeholder="you@example.com">
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-xs font-semibold apple-text-muted-light dark:apple-text-muted-dark uppercase tracking-wider mb-1.5">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full rounded-[14px] border border-black/[0.08] dark:border-white/[0.12] bg-black/[0.02] dark:bg-white/[0.04] text-[#1d1d1f] dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500/50 text-sm py-3 px-4 apple-spring-transition" placeholder="How can I help you?"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full flex justify-center py-3.5 px-6 rounded-full text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 active:scale-98 apple-spring-transition shadow-md">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-8');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('section').forEach(section => {
            section.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-8');
            observer.observe(section);
        });
    });
</script>
@endpush