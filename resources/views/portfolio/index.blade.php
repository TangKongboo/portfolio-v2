@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight text-slate-900 dark:text-white mb-6">
            Building <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 to-cyan-400">Intelligent</span> Systems.
        </h1>
        <p class="mt-4 text-xl md:text-2xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
            Software Engineering student passionate about crafting scalable, full-stack applications and integrating AI technologies.
        </p>
        <div class="mt-10 flex justify-center gap-4">
            <a href="#projects" class="px-8 py-3 text-base font-medium rounded-full text-white bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 transition-all shadow-lg hover:shadow-indigo-500/25">
                View My Work
            </a>
            <a href="{{ asset('TANG_KONGBOO_CV.pdf') }}" target="_blank" class="px-8 py-3 text-base font-medium rounded-full text-slate-900 bg-white border border-slate-200 hover:bg-slate-50 dark:text-white dark:bg-slate-800 dark:border-slate-700 dark:hover:bg-slate-700 transition-all flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                Download CV
            </a>
            <a href="#contact" class="hidden md:inline-block px-8 py-3 text-base font-medium rounded-full text-slate-900 bg-white border border-slate-200 hover:bg-slate-50 dark:text-white dark:bg-slate-800 dark:border-slate-700 dark:hover:bg-slate-700 transition-all">
                Get in Touch
            </a>
        </div>
    </div>
    
    <!-- Background Decoration -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-indigo-500/10 dark:bg-indigo-500/5 rounded-full blur-3xl pointer-events-none"></div>
</section>

<!-- About Me Section -->
<section id="about" class="py-20 bg-slate-50 dark:bg-[#0a0a0a]/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-4xl">About Me</h2>
            <div class="w-20 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
        </div>
        
        <div class="max-w-4xl mx-auto bg-white dark:bg-[#0a0a0a] rounded-3xl p-8 md:p-12 shadow-sm border border-slate-200 dark:border-slate-800">
            <div class="flex flex-col md:flex-row gap-8 md:gap-12 items-center md:items-start">
                <div class="w-full md:w-1/3 flex flex-col items-center text-center md:text-left md:items-start">
                    <div class="w-32 h-32 rounded-2xl bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600 dark:text-indigo-400 mb-6 rotate-3">
                        <svg class="w-16 h-16" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Software Engineering Student</h3>
                    <p class="text-indigo-600 dark:text-indigo-400 font-medium mt-1">Limkokwing University</p>
                </div>
                <div class="w-full md:w-2/3 text-slate-600 dark:text-slate-300 leading-relaxed text-left">
                    <p class="text-lg md:text-xl text-slate-900 dark:text-slate-100 font-medium leading-relaxed mb-4">
                        I am a third-year Software Engineering student with a strong interest in <span class="text-indigo-600 dark:text-indigo-400">full stack web development</span> and practical AI integration.
                    </p>
                    <p class="mb-4">
                        Experienced in building responsive web applications using HTML5, CSS3, JavaScript, PHP, Laravel, and MySQL, with modern UI development using Tailwind CSS. 
                    </p>
                    <p>
                        Skilled in system requirements analysis, UI/UX prototyping, and developing practical software solutions. Currently exploring Generative AI and modern AI technologies to enhance web applications. Seeking a <strong class="text-slate-900 dark:text-white font-semibold">Web Developer Internship</strong> where I can apply my problem-solving skills, expand my technical knowledge, and contribute to real-world projects.
                    </p>
                </div>
            </div>
        </div>
</section>

<!-- Experience & Education Section -->
<section id="resume" class="py-20">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-4xl">Experience & Education</h2>
            <div class="w-20 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Experience -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600 dark:text-indigo-400">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                    </div>
                    Experience
                </h3>
                <div class="relative border-l-2 border-slate-200 dark:border-slate-800 ml-5 space-y-8">
                    <div class="relative pl-8">
                        <div class="absolute w-4 h-4 bg-indigo-500 rounded-full -left-[9px] top-1.5 border-4 border-slate-50 dark:border-black"></div>
                        <div class="text-sm font-semibold text-indigo-600 dark:text-indigo-400 mb-1">May, 2024 - December, 2024</div>
                        <h4 class="text-lg font-bold text-slate-900 dark:text-white">Credit Admin</h4>
                        <div class="text-sm text-slate-500 dark:text-slate-400 mb-3">Daun Penh Specialized Bank Plc.</div>
                        <ul class="list-disc list-outside ml-4 text-slate-600 dark:text-slate-400 text-sm space-y-1.5">
                            <li>Managed and verified customer data with strong attention to detail, maintaining accurate records across internal systems.</li>
                            <li>Identified and corrected data inconsistencies to ensure data integrity.</li>
                            <li>Collaborated with team members to ensure efficient daily operations.</li>
                            <li>Developed strong problem-solving and analytical skills through rigorous data validation processes.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600 dark:text-indigo-400">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" /></svg>
                    </div>
                    Education
                </h3>
                <div class="relative border-l-2 border-slate-200 dark:border-slate-800 ml-5 space-y-8">
                    <div class="relative pl-8">
                        <div class="absolute w-4 h-4 bg-indigo-500 rounded-full -left-[9px] top-1.5 border-4 border-slate-50 dark:border-black"></div>
                        <div class="text-sm font-semibold text-indigo-600 dark:text-indigo-400 mb-1">2024 - Present</div>
                        <h4 class="text-lg font-bold text-slate-900 dark:text-white">Bachelor of Science in Software Engineering</h4>
                        <div class="text-sm text-slate-500 dark:text-slate-400 mb-3">Limkokwing University of Creative Technology</div>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            <strong class="text-slate-800 dark:text-slate-200">Relevant Coursework:</strong> Web Development, Database Systems, Data Structures and Algorithms, Software Engineering, Software Requirements Engineering, Object-Oriented Programming.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Matrix Section -->
<section id="skills" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-4xl">Technical Expertise</h2>
            <div class="w-20 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
        </div>
        
            @foreach($skills as $skill)
            <div class="p-6 bg-white dark:bg-[#0a0a0a] rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800 hover:border-{{ $skill->color_theme }}-500 dark:hover:border-{{ $skill->color_theme }}-500 transition-colors">
                <div class="w-12 h-12 bg-{{ $skill->color_theme }}-100 dark:bg-{{ $skill->color_theme }}-900/30 rounded-lg flex items-center justify-center mb-4 text-{{ $skill->color_theme }}-600 dark:text-{{ $skill->color_theme }}-400">
                    {!! $skill->icon_svg !!}
                </div>
                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">{{ $skill->title }}</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm">{{ $skill->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Projects Showcase Section -->
<section id="projects" class="py-20 bg-slate-50 dark:bg-[#0a0a0a]/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-4xl">Featured Projects</h2>
            <div class="w-20 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
            <p class="mt-4 text-slate-600 dark:text-slate-400">A selection of my recent work showcasing full-stack development and system design.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <!-- Project Card -->
            <div class="group bg-white dark:bg-[#0a0a0a] rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-all flex flex-col">
                <div class="h-48 relative overflow-hidden bg-slate-100 dark:bg-slate-800 border-b border-slate-200 dark:border-slate-800">
                    <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">{{ $project->title }}</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-4 flex-1">{{ $project->description }}</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project->tags ?? [] as $tag)
                        <span class="px-2.5 py-1 text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-md">{{ $tag }}</span>
                        @endforeach
                    </div>
                    <div class="flex gap-4 mt-auto pt-4 border-t border-slate-100 dark:border-slate-800">
                        @if($project->github_link)
                        <a href="{{ $project->github_link }}" target="_blank" class="flex items-center gap-1.5 text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                            Code
                        </a>
                        @endif
                        @if($project->live_link && $project->live_link !== '#')
                        <a href="{{ $project->live_link }}" target="_blank" class="flex items-center gap-1.5 text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
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
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-4xl">Let's Connect</h2>
            <div class="w-20 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
            <p class="mt-4 text-slate-600 dark:text-slate-400">Have a project in mind or just want to say hi? I'd love to hear from you.</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
            <!-- Direct Contact & QR -->
            <div class="lg:col-span-2 bg-white dark:bg-[#0a0a0a] rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800 p-8 flex flex-col items-center justify-center text-center">
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Direct Contact</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">Scan to chat with me instantly on Telegram.</p>
                <div class="bg-white p-2 rounded-xl shadow-sm border border-slate-100 dark:border-slate-800 mb-4 inline-block">
                    <img src="{{ asset('images/telegram-qr.png') }}" alt="Telegram QR Code" class="w-48 h-48 object-contain rounded-lg">
                </div>
                <a href="https://t.me/+85561913865" target="_blank" class="flex items-center justify-center gap-2 text-indigo-600 dark:text-indigo-400 font-medium hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                    @MENHCHEU
                </a>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-3 bg-white dark:bg-[#0a0a0a] rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800 p-8 md:p-12">
                @if(session('success'))
                <div class="mb-6 bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800 rounded-md p-4">
                    <p class="text-sm text-green-600 dark:text-green-400 font-medium">{{ session('success') }}</p>
                </div>
                @endif

                <form action="{{ route('portfolio.contact') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Name</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-3 px-4" placeholder="Your name">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Email</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-3 px-4" placeholder="you@example.com">
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-3 px-4" placeholder="How can I help you?"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
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
        }, { threshold: 0.1 });

        document.querySelectorAll('section').forEach(section => {
            section.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-8');
            observer.observe(section);
        });
    });
</script>
@endpush
