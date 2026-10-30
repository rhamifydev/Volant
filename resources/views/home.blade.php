@extends('layouts.app')

@section('title', 'Volant — Plain Language Control for Robots and Drones | Verified Before It Moves')
@section('meta_description', 'Tell any robot or drone what to do in plain language. Verified before it moves. Volant is a safety layer for industrial arms, humanoids, mobile robots, and drones.')

@section('content')
<!-- Hero Section -->
<section class="relative pt-16 pb-24 lg:pt-24 lg:pb-32 overflow-hidden bg-grid-pattern">
    <!-- Hero Background Image with Cinematic Dark Gradient Mask -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/drone.jpg') }}" 
             alt="Volant autonomous flight background" 
             aria-hidden="true" 
             class="w-full h-full object-cover object-center scale-105 opacity-25 sm:opacity-30 filter brightness-90">
        <div class="absolute inset-0 bg-gradient-to-b from-[#080c14] via-[#080c14]/70 to-[#080c14]"></div>
    </div>

    <!-- Ambient Radial Glows -->
    <div class="absolute inset-0 pointer-events-none glow-radial-cyan" aria-hidden="true"></div>
    <div class="absolute inset-0 pointer-events-none glow-radial-emerald" aria-hidden="true"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto space-y-6">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900/90 border border-cyan-500/30 text-xs font-mono text-cyan-300 shadow-sm shadow-cyan-950">
                <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping" aria-hidden="true"></span>
                <span>Deterministic Safety Layer for Robots &amp; Drones</span>
            </div>

            <!-- Headline: Exact text required by prompt -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
                Tell any robot or drone what to do in plain language. <span class="bg-gradient-to-r from-cyan-400 via-teal-300 to-emerald-400 bg-clip-text text-transparent">Verified before it moves.</span>
            </h1>

            <!-- Subtext -->
            <p class="text-lg sm:text-xl text-slate-300 max-w-2xl mx-auto leading-relaxed">
                Volant bridges human intent and autonomous hardware. We translate natural language into deterministic trajectory primitives, run formal safety barrier verification, and guarantee machine integrity before a single actuator engages.
            </p>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                <a href="{{ route('contact.create') }}" 
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 text-base font-semibold text-slate-950 bg-gradient-to-r from-cyan-400 to-emerald-400 hover:from-cyan-300 hover:to-emerald-300 rounded-xl shadow-lg shadow-cyan-500/25 hover:shadow-cyan-500/40 transition-all focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:ring-offset-2 focus:ring-offset-slate-950">
                    <span>Contact Us</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
                <a href="{{ route('product') }}" 
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 text-base font-semibold text-slate-200 hover:text-white bg-slate-900/80 hover:bg-slate-800/90 border border-slate-700/80 hover:border-slate-600 rounded-xl transition-all focus:outline-none focus:ring-2 focus:ring-slate-500">
                    <span>Explore How It Works</span>
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Interactive Terminal Simulator -->
        <div class="mt-16 max-w-4xl mx-auto">
            <div class="glass-panel rounded-2xl overflow-hidden shadow-2xl shadow-cyan-950/40 border border-slate-700/60">
                <!-- Terminal Header Bar -->
                <div class="bg-slate-900/90 px-4 py-3 border-b border-slate-800 flex flex-wrap items-center justify-between gap-3">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-1.5" aria-hidden="true">
                            <span class="w-3 h-3 rounded-full bg-rose-500/80"></span>
                            <span class="w-3 h-3 rounded-full bg-amber-500/80"></span>
                            <span class="w-3 h-3 rounded-full bg-emerald-500/80"></span>
                        </div>
                        <span class="text-xs font-mono text-slate-400 ml-2">volant-core-runtime &bull; formal-verification-engine</span>
                    </div>

                    <!-- Filter buttons to switch simulation robot type -->
                    <div class="flex items-center gap-1 text-xs" role="tablist" aria-label="Select simulation robot type">
                        <button type="button" data-simulation-trigger="arm" class="px-2.5 py-1 rounded font-mono transition-colors bg-cyan-500/20 border border-cyan-400 text-cyan-300">
                            Arm
                        </button>
                        <button type="button" data-simulation-trigger="humanoid" class="px-2.5 py-1 rounded font-mono transition-colors bg-slate-800/60 border border-slate-700 text-slate-400 hover:text-slate-200">
                            Humanoid
                        </button>
                        <button type="button" data-simulation-trigger="amr" class="px-2.5 py-1 rounded font-mono transition-colors bg-slate-800/60 border border-slate-700 text-slate-400 hover:text-slate-200">
                            AMR
                        </button>
                        <button type="button" data-simulation-trigger="drone" class="px-2.5 py-1 rounded font-mono transition-colors bg-slate-800/60 border border-slate-700 text-slate-400 hover:text-slate-200">
                            Drone
                        </button>
                    </div>
                </div>

                <!-- Terminal Body -->
                <div class="p-6 font-mono text-xs sm:text-sm space-y-4 bg-slate-950/80">
                    <div>
                        <span class="text-slate-400">Target System:</span>
                        <span id="sim-robot" class="text-cyan-400 font-bold ml-2">6-Axis Industrial Manipulator (UR10e / Fanuc)</span>
                    </div>

                    <div class="p-3.5 rounded-lg bg-slate-900/60 border border-slate-800">
                        <span class="text-amber-400 font-semibold">[1. OPERATOR INPUT]</span>
                        <p id="sim-prompt" class="mt-1 text-slate-200 text-sm">
                            "Pick up component B4 from feeder tray, inspect surface roughness, and place in bin 2."
                        </p>
                    </div>

                    <div class="space-y-2">
                        <div class="flex items-start gap-2">
                            <span class="text-cyan-400 font-semibold shrink-0">[2. COMPILE]</span>
                            <span id="sim-compile" class="text-slate-300 text-xs">
                                TASK: trajectory_spline(p0-&gt;p_tray) -&gt; gripper_actuate(force=12N) -&gt; laser_inspect() -&gt; p_bin2
                            </span>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="text-emerald-400 font-semibold shrink-0">[3. VERIFY]</span>
                            <span id="sim-verify" class="text-emerald-300 text-xs">
                                [PASS] Collision envelope clear | Force within tolerance (&lt;15N) | Singularity margin: 18.4°
                            </span>
                        </div>
                    </div>

                    <div class="pt-2 border-t border-slate-800/80 flex items-center justify-between text-xs">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span id="sim-status" class="text-emerald-400 font-semibold tracking-wider">
                                VERIFIED_SAFE — DISPATCHING MOTOR COMM
                            </span>
                        </div>
                        <span class="text-slate-400">Barrier Latency: 4.2ms</span>
                    </div>
                </div>
            </div>
            <p class="text-center text-xs text-slate-400 mt-3">
                Select any robot target above to preview deterministic constraint checking in action.
            </p>
        </div>
    </div>
</section>

<!-- 4-Step Process Section: Describe -> Compile -> Verify -> Deploy -->
<section id="how-it-works" class="py-24 bg-slate-950/60 border-y border-slate-800/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <span class="text-xs font-mono uppercase tracking-widest text-cyan-400">System Architecture</span>
            <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-white">
                The Four-Step Safety Pipeline
            </h2>
            <p class="text-base sm:text-lg text-slate-400">
                How Volant transforms conversational language into safe, mathematically bounded physical actions.
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1: Describe -->
            <div class="glass-panel p-6 rounded-2xl relative flex flex-col justify-between group transition-all duration-300 hover:-translate-y-1">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <span class="text-2xl font-bold font-mono text-cyan-400">01</span>
                        <div class="w-10 h-10 rounded-lg bg-cyan-950/80 border border-cyan-800 flex items-center justify-center text-cyan-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Describe</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        The operator expresses the mission in ordinary human language — through text or speech. No proprietary coding languages, teach pendants, or complex scripting required.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800 text-xs text-slate-400 font-mono">
                    Input: Natural language intent
                </div>
            </div>

            <!-- Step 2: Compile -->
            <div class="glass-panel p-6 rounded-2xl relative flex flex-col justify-between group transition-all duration-300 hover:-translate-y-1">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <span class="text-2xl font-bold font-mono text-cyan-400">02</span>
                        <div class="w-10 h-10 rounded-lg bg-cyan-950/80 border border-cyan-800 flex items-center justify-center text-cyan-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Compile</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Volant parses intent against the machine's kinematic specifications and operational environment. Ambiguities are resolved into unambiguous, deterministic task trajectories and action graphs.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800 text-xs text-slate-400 font-mono">
                    Output: Deterministic action graphs
                </div>
            </div>

            <!-- Step 3: Verify -->
            <div class="glass-panel p-6 rounded-2xl relative flex flex-col justify-between group transition-all duration-300 hover:-translate-y-1 border-cyan-500/40">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <span class="text-2xl font-bold font-mono text-emerald-400">03</span>
                        <div class="w-10 h-10 rounded-lg bg-emerald-950/80 border border-emerald-800 flex items-center justify-center text-emerald-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Verify</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Before execution, every motion is checked against mathematical safety invariants: kinematic limits, torque thresholds, collision volumes, geofences, and dynamic human proximity barriers.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800 text-xs text-emerald-400 font-mono">
                    Check: 100% Pre-motion barrier guarantee
                </div>
            </div>

            <!-- Step 4: Deploy -->
            <div class="glass-panel p-6 rounded-2xl relative flex flex-col justify-between group transition-all duration-300 hover:-translate-y-1">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <span class="text-2xl font-bold font-mono text-cyan-400">04</span>
                        <div class="w-10 h-10 rounded-lg bg-cyan-950/80 border border-cyan-800 flex items-center justify-center text-cyan-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Deploy</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Only verified, certified motion plans are dispatched to the robot's real-time controllers. Telemetry streams continuously to ensure real-world state remains strictly within the verified safety envelope.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800 text-xs text-slate-400 font-mono">
                    Dispatch: Low-latency motor execution
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Robot Types Section: Industrial arms, humanoids, mobile robots, drones -->
<section id="robot-types" class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <span class="text-xs font-mono uppercase tracking-widest text-emerald-400">Platform Versatility</span>
            <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-white">
                Engineered for Every Machine Architecture
            </h2>
            <p class="text-base sm:text-lg text-slate-400">
                A single universal safety layer designed to command diverse robotic form factors with zero compromise on operator safety.
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- 1. Industrial Arms -->
            <div class="glass-panel rounded-2xl border border-slate-800 hover:border-cyan-500/40 transition duration-300 flex flex-col justify-between overflow-hidden group">
                <div>
                    <div class="relative w-full h-52 sm:h-64 overflow-hidden">
                        <img src="{{ asset('images/industrial-arm.jpg') }}" 
                             alt="Precision 6-Axis Industrial Robotic Arm" 
                             width="800" 
                             height="450" 
                             loading="lazy" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
                        <span class="absolute top-4 right-4 text-xs font-mono px-2.5 py-1 rounded-md bg-slate-950/80 text-cyan-300 border border-cyan-800/60 backdrop-blur-md">
                            Kinematic Safety
                        </span>
                    </div>
                    <div class="p-6 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-2xl font-bold text-white">Industrial Arms</h3>
                        </div>
                        <p class="text-slate-300 text-sm leading-relaxed mb-6">
                            From heavy-payload assembly manipulators to precision cobots on shop floors. Volant translates operator directives into Cartesian and joint trajectories while enforcing singularity buffers, maximum payload torque, and work-cell safety zones.
                        </p>
                        <ul class="space-y-2 text-xs font-mono text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400" aria-hidden="true"></span>
                                <span>Cartesian collision boundary enforcement</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400" aria-hidden="true"></span>
                                <span>Payload mass and torque barrier validation</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400" aria-hidden="true"></span>
                                <span>Singularity and joint acceleration clamp</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="px-6 pb-6 sm:px-8 sm:pb-8 pt-0 flex items-center justify-between text-xs text-slate-400 border-t border-slate-800/80 pt-4">
                    <span>Use Case: Precision Assembly &amp; Handling</span>
                    <a href="{{ route('product') }}" class="text-cyan-400 hover:text-cyan-300 font-semibold inline-flex items-center gap-1">Details &rarr;</a>
                </div>
            </div>

            <!-- 2. Humanoids -->
            <div class="glass-panel rounded-2xl border border-slate-800 hover:border-emerald-500/40 transition duration-300 flex flex-col justify-between overflow-hidden group">
                <div>
                    <div class="relative w-full h-52 sm:h-64 overflow-hidden">
                        <img src="{{ asset('images/humanoid.jpg') }}" 
                             alt="Bipedal Humanoid Robot in Munich Research Lab" 
                             width="800" 
                             height="450" 
                             loading="lazy" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
                        <span class="absolute top-4 right-4 text-xs font-mono px-2.5 py-1 rounded-md bg-slate-950/80 text-emerald-300 border border-emerald-800/60 backdrop-blur-md">
                            Balance &amp; Whole-Body
                        </span>
                    </div>
                    <div class="p-6 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-2xl font-bold text-white">Humanoids</h3>
                        </div>
                        <p class="text-slate-300 text-sm leading-relaxed mb-6">
                            Bipedal locomotion and multi-limb manipulation demand rigorous stability guarantees. Volant simulates zero-moment point dynamics, center-of-mass balance, and multi-contact points before permitting whole-body movement.
                        </p>
                        <ul class="space-y-2 text-xs font-mono text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400" aria-hidden="true"></span>
                                <span>Whole-body dynamic balance (ZMP) check</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400" aria-hidden="true"></span>
                                <span>Multi-limb contact wrench validation</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400" aria-hidden="true"></span>
                                <span>Self-collision avoidance between limbs</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="px-6 pb-6 sm:px-8 sm:pb-8 pt-0 flex items-center justify-between text-xs text-slate-400 border-t border-slate-800/80 pt-4">
                    <span>Use Case: Agile Complex Tasks &amp; Service</span>
                    <a href="{{ route('product') }}" class="text-emerald-400 hover:text-emerald-300 font-semibold inline-flex items-center gap-1">Details &rarr;</a>
                </div>
            </div>

            <!-- 3. Mobile Robots -->
            <div class="glass-panel rounded-2xl border border-slate-800 hover:border-cyan-500/40 transition duration-300 flex flex-col justify-between overflow-hidden group">
                <div>
                    <div class="relative w-full h-52 sm:h-64 overflow-hidden">
                        <img src="{{ asset('images/mobile-robot.jpg') }}" 
                             alt="Autonomous Mobile Robot (AMR) in Warehouse" 
                             width="800" 
                             height="450" 
                             loading="lazy" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
                        <span class="absolute top-4 right-4 text-xs font-mono px-2.5 py-1 rounded-md bg-slate-950/80 text-cyan-300 border border-cyan-800/60 backdrop-blur-md">
                            Navigation Bounds
                        </span>
                    </div>
                    <div class="p-6 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-2xl font-bold text-white">Mobile Robots (AMRs)</h3>
                        </div>
                        <p class="text-slate-300 text-sm leading-relaxed mb-6">
                            Autonomous mobile robots and AGVs navigating warehouses or outdoor yards. Plain-text route directions are mathematically verified against dynamic costmaps, pedestrian buffers, stopping distances, and payload limits.
                        </p>
                        <ul class="space-y-2 text-xs font-mono text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400" aria-hidden="true"></span>
                                <span>Dynamic obstacle braking distance calculations</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400" aria-hidden="true"></span>
                                <span>Restricted operational corridor geofencing</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400" aria-hidden="true"></span>
                                <span>Payload stability under lateral turning forces</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="px-6 pb-6 sm:px-8 sm:pb-8 pt-0 flex items-center justify-between text-xs text-slate-400 border-t border-slate-800/80 pt-4">
                    <span>Use Case: Warehouse Logistics &amp; Transport</span>
                    <a href="{{ route('product') }}" class="text-cyan-400 hover:text-cyan-300 font-semibold inline-flex items-center gap-1">Details &rarr;</a>
                </div>
            </div>

            <!-- 4. Drones -->
            <div class="glass-panel rounded-2xl border border-slate-800 hover:border-emerald-500/40 transition duration-300 flex flex-col justify-between overflow-hidden group">
                <div>
                    <div class="relative w-full h-52 sm:h-64 overflow-hidden">
                        <img src="{{ asset('images/drone.jpg') }}" 
                             alt="Autonomous Inspection Drone with Geofence Barrier" 
                             width="800" 
                             height="450" 
                             loading="lazy" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
                        <span class="absolute top-4 right-4 text-xs font-mono px-2.5 py-1 rounded-md bg-slate-950/80 text-emerald-300 border border-emerald-800/60 backdrop-blur-md">
                            Airspace Safety
                        </span>
                    </div>
                    <div class="p-6 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-2xl font-bold text-white">Drones (UAVs)</h3>
                        </div>
                        <p class="text-slate-300 text-sm leading-relaxed mb-6">
                            Uncrewed aerial vehicles for perimeter surveillance, infrastructure inspection, and delivery. Natural flight commands are validated against 3D airspace geofences, altitude ceilings, return-to-land battery reserves, and no-fly zones.
                        </p>
                        <ul class="space-y-2 text-xs font-mono text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400" aria-hidden="true"></span>
                                <span>3D convex airspace envelope enforcement</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400" aria-hidden="true"></span>
                                <span>Energy-aware return-to-home battery threshold</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400" aria-hidden="true"></span>
                                <span>No-fly zone and altitude ceiling checks</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="px-6 pb-6 sm:px-8 sm:pb-8 pt-0 flex items-center justify-between text-xs text-slate-400 border-t border-slate-800/80 pt-4">
                    <span>Use Case: Aerial Inspection &amp; Monitoring</span>
                    <a href="{{ route('product') }}" class="text-emerald-400 hover:text-emerald-300 font-semibold inline-flex items-center gap-1">Details &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-20 relative overflow-hidden bg-gradient-to-b from-[#080c14] via-slate-900/90 to-[#080c14] border-t border-slate-800/80">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        <span class="text-xs font-mono uppercase tracking-widest text-cyan-400">Deploy Plain-Language Control</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
            Ready to bring certified plain-language commands to your machines?
        </h2>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
            Reach out to our Munich team to discuss how Volant can integrate with your industrial arms, humanoids, mobile fleets, or drones.
        </p>
        <div class="pt-4">
            <a href="{{ route('contact.create') }}" 
               class="inline-flex items-center gap-2 px-8 py-4 text-base font-bold text-slate-950 bg-gradient-to-r from-cyan-400 via-teal-300 to-emerald-400 hover:from-cyan-300 hover:to-emerald-300 rounded-xl shadow-xl shadow-cyan-500/25 transition-all focus:outline-none focus:ring-2 focus:ring-cyan-400">
                <span>Contact Our Munich Engineering Team</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
