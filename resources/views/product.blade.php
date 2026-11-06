@extends('layouts.app')

@section('title', 'Product & Architecture — How Volant Works | HOPn Munich')
@section('meta_description', 'Deep dive into Volant’s 4-step safety architecture: Describe, Compile, Verify, Deploy. Plain language control with deterministic pre-motion verification.')

@section('content')
<!-- Page Header / Hero Section -->
<section class="relative py-24 sm:py-32 border-b border-slate-800/80 overflow-hidden bg-grid-pattern">
    <!-- Series of Robots Company Background Image with High Visibility -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/robots-fleet.jpg') }}" 
             alt="Robotics company manufacturing facility with series of robots" 
             aria-hidden="true" 
             class="w-full h-full object-cover object-center scale-100 opacity-80 sm:opacity-90 filter contrast-110 brightness-95">
        <!-- Balanced vignette gradient overlay ensuring robots are clearly visible while typography pops -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#080c14]/75 via-[#080c14]/40 to-[#080c14]"></div>
    </div>

    <!-- Ambient Radial Glows -->
    <div class="absolute inset-0 pointer-events-none glow-radial-cyan opacity-80" aria-hidden="true"></div>
    <div class="absolute inset-0 pointer-events-none glow-radial-emerald opacity-60" aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-950/90 border border-cyan-500/40 text-xs font-mono text-cyan-300 shadow-xl shadow-black/80 backdrop-blur-md">
            <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping" aria-hidden="true"></span>
            <span>Deterministic Safety Architecture</span>
        </div>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight drop-shadow-[0_4px_16px_rgba(0,0,0,0.95)]">
            How Volant Works
        </h1>
        <p class="text-base sm:text-lg lg:text-xl text-slate-100 max-w-2xl mx-auto leading-relaxed drop-shadow-[0_2px_12px_rgba(0,0,0,0.95)]">
            A comprehensive look at our deterministic software layer that converts conversational directives into mathematically proven, risk-bounded physical actions.
        </p>
    </div>
</section>

<!-- Deep Dive: The 4 Steps -->
<section class="py-20">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
        
        <!-- Step 1: Describe (With Highly Visible Series of Robots Background Image) -->
        <div class="relative rounded-3xl p-6 sm:p-10 lg:p-12 overflow-hidden border border-cyan-500/40 shadow-2xl shadow-cyan-950/50">
            <!-- Series of Robots Company Background Image Layer with High Opacity -->
            <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
                <img src="{{ asset('images/robots-fleet.jpg') }}" 
                     alt="Series of industrial robots working in automated company plant" 
                     aria-hidden="true" 
                     class="w-full h-full object-cover object-center scale-100 opacity-65 sm:opacity-75 filter contrast-115 brightness-95">
                <!-- Balanced contrast gradient so robots are clearly visible and text stays crisp -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#080c14]/90 via-[#080c14]/70 to-[#080c14]/50"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#080c14]/85 via-transparent to-[#080c14]/40"></div>
            </div>

            <!-- Content Grid positioned above background -->
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-5 space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-cyan-950/90 border border-cyan-500/40 text-cyan-300 text-xs font-mono shadow-md backdrop-blur-md">
                        Step 01 &bull; Natural Language Ingestion
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-white tracking-tight drop-shadow-[0_2px_10px_rgba(0,0,0,0.9)]">Describe</h2>
                    <p class="text-slate-100 text-sm sm:text-base leading-relaxed drop-shadow-[0_1px_4px_rgba(0,0,0,0.9)]">
                        Robotics operations traditionally require skilled programmers writing low-level scripts or manipulating complex teach pendants. Volant replaces this friction by accepting natural, conversational sentences from field operators.
                    </p>
                    <p class="text-slate-200 text-sm leading-relaxed drop-shadow-[0_1px_4px_rgba(0,0,0,0.9)]">
                        Whether typed into a terminal or spoken over a field radio headset, the system parses high-level operational intent without forcing the operator to calculate XYZ Cartesian offsets, joint angle rotations, or spline knot vectors.
                    </p>
                    <div class="p-3.5 rounded-lg bg-slate-950/95 border border-slate-700/80 text-xs font-mono text-slate-200 shadow-xl backdrop-blur-md">
                        <span class="text-slate-400">Example operator input:</span><br>
                        <span class="text-cyan-300 font-semibold">"Inspect the turbine flange on tower 3 and notify if corrosion exceeds grade B."</span>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <div class="glass-panel p-6 rounded-2xl border border-slate-700/80 shadow-2xl backdrop-blur-md bg-slate-950/80">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-800 text-xs font-mono text-slate-400">
                            <span>INGESTION_PIPELINE</span>
                            <span class="text-cyan-400">STATUS: ACTIVE</span>
                        </div>
                        <div class="mt-4 space-y-3 text-xs font-mono">
                            <div class="p-3 rounded bg-slate-950/90 border border-slate-800">
                                <span class="text-amber-400">1. Audio / Text Stream:</span>
                                <p class="text-slate-200 mt-1">Raw operator speech transcribed with domain-specific industrial acoustic models.</p>
                            </div>
                            <div class="p-3 rounded bg-slate-950/90 border border-slate-800">
                                <span class="text-cyan-400">2. Context Disambiguation:</span>
                                <p class="text-slate-200 mt-1">Contextual bindings match entity names ("turbine flange") to spatial CAD landmarks and active asset registries.</p>
                            </div>
                            <div class="p-3 rounded bg-slate-950/90 border border-slate-800">
                                <span class="text-emerald-400">3. Intent Representation:</span>
                                <p class="text-slate-200 mt-1">Generates an intermediate semantic goal structure independent of actuator hardware specifics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-slate-800/80"></div>

        <!-- Step 2: Compile -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-7 order-2 lg:order-1">
                <div class="glass-panel p-6 rounded-2xl border border-slate-800">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-800 text-xs font-mono text-slate-400">
                        <span>DETERMINISTIC_COMPILER</span>
                        <span class="text-cyan-400">BUILD: RELEASE</span>
                    </div>
                    <div class="mt-4 p-4 rounded bg-slate-950/90 border border-slate-800 font-mono text-xs space-y-2 text-slate-300 overflow-x-auto">
                        <p class="text-slate-500">// Compiled Motion Primitive Graph</p>
                        <p><span class="terminal-syntax-keyword">const</span> plan = <span class="terminal-syntax-func">compileGoal</span>({ target: <span class="terminal-syntax-str">'FLANGE_3'</span> });</p>
                        <p>plan.<span class="terminal-syntax-func">generateSpline</span>({ algorithm: <span class="terminal-syntax-str">'MIN_JERK'</span>, dt: <span class="terminal-syntax-keyword">0.002</span> });</p>
                        <p>plan.<span class="terminal-syntax-func">resolveInverseKinematics</span>({ dof: <span class="terminal-syntax-keyword">6</span>, damping: <span class="terminal-syntax-keyword">0.05</span> });</p>
                        <p>plan.<span class="terminal-syntax-func">bindToolCenterPoint</span>({ offset_z: <span class="terminal-syntax-keyword">0.142</span>, camera_mount: <span class="terminal-syntax-keyword">true</span> });</p>
                        <div class="pt-2 text-emerald-400 font-bold border-t border-slate-800">
                            &gt; COMPILED 14 DETERMINISTIC WAYPOINTS
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 order-1 lg:order-2 space-y-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-cyan-950/80 border border-cyan-800 text-cyan-400 text-xs font-mono">
                    Step 02 &bull; Deterministic Translation
                </div>
                <h2 class="text-3xl font-bold text-white">Compile</h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Language is probabilistic, but hardware motion cannot afford probability. Volant’s compiler transforms high-level intent into strict, deterministic robotic primitives: joint trajectory splines, inverse kinematics solutions, and tool control graphs.
                </p>
                <p class="text-slate-400 text-sm leading-relaxed">
                    By compiling intent into explicit kinematic trajectories ahead of execution, every single parameter is fully specified, inspected, and reproducible.
                </p>
            </div>
        </div>

        <div class="border-t border-slate-800/80"></div>

        <!-- Step 3: Verify -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-5 space-y-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-emerald-950/80 border border-emerald-800 text-emerald-400 text-xs font-mono">
                    Step 03 &bull; Mathematical Safety Barrier
                </div>
                <h2 class="text-3xl font-bold text-white">Verify</h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    This is the critical differentiator of Volant: <span class="text-white font-semibold">nothing moves until it is verified</span>. Before a single motor driver receives a pulse or a drone spins up its ESCs, the compiled trajectory passes through our formal verification engine.
                </p>
                <p class="text-slate-400 text-sm leading-relaxed">
                    The motion plan is evaluated against rigorous invariant rules:
                </p>
                <ul class="space-y-2 text-xs font-mono text-slate-300">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400" aria-hidden="true"></span>
                        <span>Zero human collision risk (ISO 10218 / TS 15066 adherence)</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400" aria-hidden="true"></span>
                        <span>Actuator torque, velocity, and jerk within rated thermal envelope</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400" aria-hidden="true"></span>
                        <span>Geofence volumes and restricted exclusion zones guaranteed untouched</span>
                    </li>
                </ul>
            </div>

            <div class="lg:col-span-7">
                <div class="glass-panel p-6 rounded-2xl border border-emerald-500/40 shadow-xl shadow-emerald-950/20">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-800 text-xs font-mono text-slate-400">
                        <span>FORMAL_VERIFICATION_CERTIFIER</span>
                        <span class="text-emerald-400">ALL_INVARIANTS_PASSED</span>
                    </div>
                    <div class="mt-4 space-y-3 font-mono text-xs">
                        <div class="flex items-center justify-between p-3 rounded bg-slate-950/70 border border-slate-800">
                            <span class="text-slate-300">Kinematic Singularity Barrier</span>
                            <span class="text-emerald-400 font-bold">[PASSED &bull; Margin 21.6°]</span>
                        </div>
                        <div class="flex items-center justify-between p-3 rounded bg-slate-950/70 border border-slate-800">
                            <span class="text-slate-300">Continuous Collision Swept-Volume</span>
                            <span class="text-emerald-400 font-bold">[PASSED &bull; Clearance &gt; 180mm]</span>
                        </div>
                        <div class="flex items-center justify-between p-3 rounded bg-slate-950/70 border border-slate-800">
                            <span class="text-slate-300">Joint Torque Maximum Limit</span>
                            <span class="text-emerald-400 font-bold">[PASSED &bull; Peak 68% Rated]</span>
                        </div>
                        <div class="flex items-center justify-between p-3 rounded bg-slate-950/70 border border-slate-800">
                            <span class="text-slate-300">3D Convex Geofence Invariant</span>
                            <span class="text-emerald-400 font-bold">[PASSED &bull; Inside Polygon]</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-slate-800/80"></div>

        <!-- Step 4: Deploy -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-7 order-2 lg:order-1">
                <div class="glass-panel p-6 rounded-2xl border border-slate-800">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-800 text-xs font-mono text-slate-400">
                        <span>REALTIME_BUS_EXECUTION</span>
                        <span class="text-cyan-400">1 kHz BUS RATE</span>
                    </div>
                    <div class="mt-4 p-4 rounded bg-slate-950/90 border border-slate-800 font-mono text-xs space-y-2 text-slate-300">
                        <p class="text-slate-500">// Low-latency hardware dispatch</p>
                        <p class="text-cyan-300">&gt; Authenticated cryptographic signature verified</p>
                        <p class="text-slate-300">&gt; Streaming to CANopen / EtherCAT / ROS 2 micro-controller bus</p>
                        <p class="text-emerald-400">&gt; Real-time observer loop: Delta error &lt; 0.04mm</p>
                        <p class="text-slate-400">&gt; Watchdog timer heartbeat: Active (0.8ms)</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 order-1 lg:order-2 space-y-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-cyan-950/80 border border-cyan-800 text-cyan-400 text-xs font-mono">
                    Step 04 &bull; Real-Time Actuation
                </div>
                <h2 class="text-3xl font-bold text-white">Deploy</h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Once the safety barrier issues a cryptographically stamped pass certificate, the trajectory is transmitted to the robot's real-time controllers over deterministic industrial buses (ROS 2, EtherCAT, CANopen, or MAVLink).
                </p>
                <p class="text-slate-400 text-sm leading-relaxed">
                    During physical motion, continuous high-frequency telemetry verifies that the physical machine never deviates from the verified state envelope. If any anomalous discrepancy occurs, the real-time watchdog safely halts the system.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Hardware Architectures Gallery -->
<section class="py-20 border-t border-slate-800/80 bg-slate-900/30">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
            <span class="text-xs font-mono uppercase tracking-widest text-cyan-400">Hardware Compatibility</span>
            <h2 class="text-3xl font-bold text-white">Deployed Across Physical Form Factors</h2>
            <p class="text-slate-400 text-sm sm:text-base">
                From precision joint coordination on assembly lines to dynamic airspace geofencing in uncrewed flight.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="glass-panel rounded-xl overflow-hidden border border-slate-800 hover:border-cyan-500/50 transition duration-300 group">
                <div class="h-44 overflow-hidden relative">
                    <img src="{{ asset('images/industrial-arm.jpg') }}" alt="Industrial Robotic Arm" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent"></div>
                    <span class="absolute bottom-2.5 left-3 text-xs font-bold text-white">Industrial Arms</span>
                </div>
                <div class="p-4 text-xs text-slate-300">
                    Deterministic inverse kinematics and singularity avoidance for 6-axis and 7-axis manipulators.
                </div>
            </div>

            <div class="glass-panel rounded-xl overflow-hidden border border-slate-800 hover:border-emerald-500/50 transition duration-300 group">
                <div class="h-44 overflow-hidden relative">
                    <img src="{{ asset('images/humanoid.jpg') }}" alt="Humanoid Robot" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent"></div>
                    <span class="absolute bottom-2.5 left-3 text-xs font-bold text-white">Humanoids</span>
                </div>
                <div class="p-4 text-xs text-slate-300">
                    Whole-body stability and zero-moment point balance validation prior to multi-limb motion.
                </div>
            </div>

            <div class="glass-panel rounded-xl overflow-hidden border border-slate-800 hover:border-cyan-500/50 transition duration-300 group">
                <div class="h-44 overflow-hidden relative">
                    <img src="{{ asset('images/mobile-robot.jpg') }}" alt="Autonomous Mobile Robot" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent"></div>
                    <span class="absolute bottom-2.5 left-3 text-xs font-bold text-white">Mobile Robots (AMR)</span>
                </div>
                <div class="p-4 text-xs text-slate-300">
                    Dynamic deceleration braking envelopes and obstacle clearance for warehouse fleets.
                </div>
            </div>

            <div class="glass-panel rounded-xl overflow-hidden border border-slate-800 hover:border-emerald-500/50 transition duration-300 group">
                <div class="h-44 overflow-hidden relative">
                    <img src="{{ asset('images/drone.jpg') }}" alt="Autonomous Drone UAV" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent"></div>
                    <span class="absolute bottom-2.5 left-3 text-xs font-bold text-white">Drones (UAV)</span>
                </div>
                <div class="p-4 text-xs text-slate-300">
                    3D convex airspace envelope enforcement, battery return reserves, and active geofencing.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Table: Why Verification Matters -->
<section class="py-20 bg-slate-950/60 border-t border-slate-800/80">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
            <h2 class="text-3xl font-bold text-white">Why Verification Is Non-Negotiable</h2>
            <p class="text-slate-400 text-sm sm:text-base">
                How Volant compares to traditional programming approaches and raw unconstrained language models.
            </p>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm border-collapse">
                <thead>
                    <tr class="border-b border-slate-800 text-xs font-mono text-slate-400 uppercase">
                        <th class="py-4 px-4">Capability</th>
                        <th class="py-4 px-4 text-slate-400">Manual Scripting</th>
                        <th class="py-4 px-4 text-amber-400">Raw Unchecked LLM</th>
                        <th class="py-4 px-4 text-cyan-400 font-bold bg-cyan-950/30 rounded-t-lg">Volant Safety Layer</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/60 text-slate-300 text-xs sm:text-sm">
                    <tr>
                        <td class="py-4 px-4 font-semibold text-white">Interface</td>
                        <td class="py-4 px-4">Manual code &amp; teach pendant</td>
                        <td class="py-4 px-4">Plain text</td>
                        <td class="py-4 px-4 bg-cyan-950/30 text-cyan-300 font-semibold">Plain natural language</td>
                    </tr>
                    <tr>
                        <td class="py-4 px-4 font-semibold text-white">Determinism</td>
                        <td class="py-4 px-4">High (rigid)</td>
                        <td class="py-4 px-4 text-rose-400">Low (hallucination risk)</td>
                        <td class="py-4 px-4 bg-cyan-950/30 text-emerald-300 font-semibold">100% Deterministic Primitives</td>
                    </tr>
                    <tr>
                        <td class="py-4 px-4 font-semibold text-white">Pre-motion Safety Check</td>
                        <td class="py-4 px-4">Manual human testing</td>
                        <td class="py-4 px-4 text-rose-400">None (direct action)</td>
                        <td class="py-4 px-4 bg-cyan-950/30 text-emerald-300 font-semibold">Mathematical Invariant Barrier</td>
                    </tr>
                    <tr>
                        <td class="py-4 px-4 font-semibold text-white">Hardware Adaptability</td>
                        <td class="py-4 px-4">Proprietary per vendor</td>
                        <td class="py-4 px-4">Unconstrained</td>
                        <td class="py-4 px-4 bg-cyan-950/30 text-cyan-300 font-semibold">Universal across arms, AMRs, UAVs</td>
                    </tr>
                    <tr>
                        <td class="py-4 px-4 font-semibold text-white">Operator Skill Threshold</td>
                        <td class="py-4 px-4">Robotics engineer required</td>
                        <td class="py-4 px-4">Low, but hazardous</td>
                        <td class="py-4 px-4 bg-cyan-950/30 text-emerald-300 font-semibold">Accessible to any field operator</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-14 text-center">
            <a href="{{ route('contact.create') }}" 
               class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold text-slate-950 bg-gradient-to-r from-cyan-400 to-emerald-400 hover:from-cyan-300 hover:to-emerald-300 rounded-lg shadow-lg shadow-cyan-500/20 transition-all">
                <span>Discuss Your Deployment With Us</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
