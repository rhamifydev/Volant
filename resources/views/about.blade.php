@extends('layouts.app')

@section('title', 'About HOPn — Robotics Safety & Plain Language Control | Munich')
@section('meta_description', 'About HOPn and founder Prof. Dr. Ahmed Ebada. Based in Munich, Germany, HOPn builds Volant to enable verified plain language control for robots and drones.')

@section('content')
<!-- Page Header / Hero Section -->
<section class="relative py-24 sm:py-32 border-b border-slate-800/80 overflow-hidden bg-grid-pattern">
    <!-- About Page Hero Background Image with High Visibility -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/about.jpg') }}" 
             alt="About HOPn — Robotics Safety & Plain Language Control" 
             aria-hidden="true" 
             class="w-full h-full object-cover object-center scale-100 opacity-80 sm:opacity-90 filter contrast-110 brightness-95">
        <!-- Balanced vignette gradient overlay ensuring the background is clearly visible while typography pops -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#09090b]/75 via-[#09090b]/40 to-[#09090b]"></div>
    </div>

    <!-- Ambient Radial Glows -->
    <div class="absolute inset-0 pointer-events-none glow-radial-amber opacity-80" aria-hidden="true"></div>
    <div class="absolute inset-0 pointer-events-none glow-radial-gold opacity-60" aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-950/90 border border-amber-500/40 text-xs font-mono text-amber-300 shadow-xl shadow-black/80 backdrop-blur-md">
            <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping" aria-hidden="true"></span>
            <span>Company &amp; Leadership</span>
        </div>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight drop-shadow-[0_4px_16px_rgba(0,0,0,0.95)]">
            About HOPn
        </h1>
        <p class="text-base sm:text-lg lg:text-xl text-slate-100 max-w-2xl mx-auto leading-relaxed drop-shadow-[0_2px_12px_rgba(0,0,0,0.95)]">
            Pioneering the verifiable software bridge between natural human communication and physical robotic motion.
        </p>
    </div>
</section>

<!-- Company Overview & Munich Base -->
<section class="py-20 relative overflow-hidden">
    <!-- Subtle Background Image Layer continuing through the content -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/about.jpg') }}" 
             alt="HOPn Robotics atmospheric background" 
             aria-hidden="true" 
             class="w-full h-full object-cover object-center opacity-25 filter contrast-110 brightness-75">
        <div class="absolute inset-0 bg-gradient-to-b from-[#09090b] via-[#09090b]/85 to-[#09090b]"></div>
    </div>

    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-center">
            <div class="md:col-span-7 space-y-5">
                <span class="text-xs font-mono uppercase tracking-wider text-amber-400">Our Mission</span>
                <h2 class="text-3xl font-bold text-white tracking-tight">
                    Safe, Verifiable Autonomy for Every Machine
                </h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    At HOPn, we believe that commanding a robot or drone should feel as natural as speaking to a human colleague. Operators shouldn't need specialized programming syntax or intricate manual controllers just to tell a machine what needs to be done.
                </p>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    However, physical machines operate in shared human spaces with severe real-world consequences. Unconstrained artificial intelligence is unpredictable. HOPn developed <strong class="text-white">Volant</strong> to solve this fundamental paradox: combining the accessibility of natural language with the non-negotiable certainty of deterministic formal verification.
                </p>
            </div>

            <div class="md:col-span-5">
                <div class="glass-panel p-6 rounded-2xl border border-slate-800 space-y-4">
                    <div class="flex items-center gap-3.5">
                        <div class="w-12 h-12 rounded-xl bg-slate-900 border border-slate-700 p-1 flex items-center justify-center shrink-0 overflow-hidden shadow-lg shadow-amber-950/40">
                            <img src="{{ asset('images/hopn_ug_logo.jpg') }}" alt="HOPn UG Official Company Logo" width="48" height="48" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div>
                            <span class="text-xs font-mono text-amber-400 uppercase tracking-wider">Company Headquarters</span>
                            <h3 class="text-base font-bold text-white">HOPn UG &bull; Munich</h3>
                        </div>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Headquartered in Munich, Bavaria — a recognized global epicenter of precision engineering, industrial robotics, and aerospace technology.
                    </p>
                    <div class="pt-3 border-t border-slate-800 flex items-center justify-between text-xs font-mono text-slate-400">
                        <span>Legal: HOPn UG</span>
                        <span class="text-amber-400">Munich, Germany</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Founder Profile: Prof. Dr. Ahmed Ebada -->
        <div class="glass-panel p-8 sm:p-10 rounded-2xl border border-amber-500/30">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
                <div class="md:col-span-4 flex flex-col items-center text-center space-y-3">
                    <div class="w-32 h-32 rounded-2xl bg-gradient-to-tr from-amber-500 to-orange-400 p-[2px] shadow-xl shadow-amber-950/50 overflow-hidden">
                        <img src="{{ asset('prof.Dr.AhmedEbada.jpg') }}" 
                             alt="Prof. Dr. Ahmed Ebada, Founder of HOPn" 
                             width="128" 
                             height="128" 
                             class="w-full h-full object-cover rounded-[14px]">
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-white">Prof. Dr. Ahmed Ebada</h3>
                        <p class="text-xs font-mono text-amber-400">Founder, HOPn</p>
                    </div>
                    <span class="text-xs text-slate-400 font-mono">Munich, Germany</span>
                </div>

                <div class="md:col-span-8 space-y-4">
                    <span class="text-xs font-mono uppercase tracking-widest text-amber-400">Founder &bull; Leadership</span>
                    <h3 class="text-2xl font-bold text-white">
                        Bridging Natural Language &amp; Mathematical Safety
                    </h3>
                    <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                        HOPn was established by Prof. Dr. Ahmed Ebada to tackle the critical challenge confronting modern autonomous robotics: the transition from rigid, pre-programmed routines to agile, human-centric control.
                    </p>
                    <p class="text-sm sm:text-base text-slate-400 leading-relaxed">
                        Under his direction, the team engineered Volant to separate probabilistic language comprehension from deterministic motion execution. This architectural separation guarantees that no matter how complex or conversational an operator's request is, safety verification remains an absolute mathematical barrier.
                    </p>
                    <blockquote class="p-4 rounded-lg bg-slate-900/80 border-l-2 border-amber-400 text-xs sm:text-sm text-slate-300 italic">
                        "The future of robotics is not in replacing human operators, but in empowering them to direct machines naturally — with mathematical guarantees that the machine will never execute an unsafe move."
                    </blockquote>
                </div>
            </div>
        </div>

        <!-- Guiding Principles -->
        <div class="space-y-6">
            <div class="text-center max-w-2xl mx-auto space-y-2">
                <span class="text-xs font-mono uppercase tracking-wider text-amber-400">Core Principles</span>
                <h3 class="text-2xl font-bold text-white">How We Build</h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="glass-panel p-6 rounded-xl border border-slate-800">
                    <span class="text-lg font-bold font-mono text-amber-400 mb-2 block">01. Zero-Trust Safety</span>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Every trajectory is treated as potentially hazardous until proven safe against physical laws, kinematic boundaries, and human proximity zones.
                    </p>
                </div>
                <div class="glass-panel p-6 rounded-xl border border-slate-800">
                    <span class="text-lg font-bold font-mono text-amber-400 mb-2 block">02. Human Intuition</span>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Operators are subject-matter experts, not robotics code compilers. Natural communication empowers operators to focus on mission objectives.
                    </p>
                </div>
                <div class="glass-panel p-6 rounded-xl border border-slate-800">
                    <span class="text-lg font-bold font-mono text-amber-400 mb-2 block">03. Deterministic Rigor</span>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Rooted in Munich's engineering traditions, we rely on reproducible mathematics and formal methods rather than unchecked heuristics.
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact CTA -->
        <div class="text-center pt-8">
            <a href="{{ route('contact.create') }}" 
               class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold text-slate-950 bg-gradient-to-r from-amber-400 via-amber-500 to-orange-500 hover:from-amber-300 hover:to-orange-400 rounded-lg shadow-lg shadow-amber-500/20 transition-all">
                <span>Connect With Our Team</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
