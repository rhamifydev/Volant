@extends('layouts.app')

@section('title', 'Volant — Plain Language Control for Robots and Drones | Verified Before It Moves')
@section('meta_description', 'Tell any robot or drone what to do in plain language. Verified before it moves. Volant is a safety layer for industrial arms, humanoids, mobile robots, and drones.')

@section('content')
<!-- Hero Section -->
<section class="relative pt-16 pb-24 lg:pt-24 lg:pb-32 overflow-hidden bg-grid-pattern">
    <!-- Hero Background Image with Increased Visibility -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/drone.jpg') }}" 
             alt="Volant autonomous flight background" 
             aria-hidden="true" 
             class="w-full h-full object-cover object-center scale-100 opacity-65 sm:opacity-75 filter contrast-105">
        <!-- Soft top and bottom vignette to blend seamlessly with header and content -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#080c14]/80 via-[#080c14]/40 to-[#080c14]"></div>
    </div>

    <!-- Ambient Radial Glows -->
    <div class="absolute inset-0 pointer-events-none glow-radial-cyan" aria-hidden="true"></div>
    <div class="absolute inset-0 pointer-events-none glow-radial-emerald" aria-hidden="true"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto space-y-6">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-950/90 border border-amber-500/40 text-xs font-mono text-amber-300 shadow-lg shadow-black/60 backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping" aria-hidden="true"></span>
                <span>Deterministic Safety Layer for Robots &amp; Drones</span>
            </div>

            <!-- Headline: Exact text required by prompt with drop-shadow for crystal legibility -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight drop-shadow-[0_4px_16px_rgba(0,0,0,0.85)]">
                Tell any robot or drone what to do in plain language. <span class="bg-gradient-to-r from-amber-400 via-amber-300 to-orange-400 bg-clip-text text-transparent">Verified before it moves.</span>
            </h1>

            <!-- Subtext with shadow -->
            <p class="text-lg sm:text-xl text-slate-200 max-w-2xl mx-auto leading-relaxed drop-shadow-[0_2px_8px_rgba(0,0,0,0.9)]">
                Volant bridges human intent and autonomous hardware. We translate natural language into deterministic trajectory primitives, run formal safety barrier verification, and guarantee machine integrity before a single actuator engages.
            </p>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                <a href="{{ route('contact.create') }}" 
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 text-base font-semibold text-slate-950 bg-gradient-to-r from-amber-400 via-amber-500 to-orange-500 hover:from-amber-300 hover:to-orange-400 rounded-xl shadow-lg shadow-amber-500/25 hover:shadow-amber-500/40 transition-all focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2 focus:ring-offset-slate-950">
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
            <div class="glass-panel rounded-2xl overflow-hidden shadow-2xl shadow-amber-950/40 border border-slate-700/60">
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
                        <button type="button" data-simulation-trigger="arm" class="px-2.5 py-1 rounded font-mono transition-colors bg-amber-500/20 border border-amber-400 text-amber-300">
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
                        <span id="sim-robot" class="text-amber-400 font-bold ml-2">6-Axis Industrial Manipulator (UR10e / Fanuc)</span>
                    </div>

                    <div class="p-3.5 rounded-lg bg-slate-900/60 border border-slate-800">
                        <span class="text-amber-400 font-semibold">[1. OPERATOR INPUT]</span>
                        <p id="sim-prompt" class="mt-1 text-slate-200 text-sm">
                            "Pick up component B4 from feeder tray, inspect surface roughness, and place in bin 2."
                        </p>
                    </div>

                    <div class="space-y-2">
                        <div class="flex items-start gap-2">
                            <span class="text-amber-400 font-semibold shrink-0">[2. COMPILE]</span>
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

<!-- Autonomous Execution Video Demonstration Section -->
<section id="live-demo" class="relative py-20 lg:py-28 overflow-hidden bg-gradient-to-b from-[#080c14] via-slate-950/90 to-[#080c14] border-t border-slate-800/80">
    <!-- Ambient Radial Glows -->
    <div class="absolute inset-0 pointer-events-none glow-radial-cyan opacity-70" aria-hidden="true"></div>
    <div class="absolute inset-0 pointer-events-none glow-radial-emerald opacity-60" aria-hidden="true"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-12 lg:mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-950/90 border border-amber-500/40 text-xs font-mono text-amber-300 shadow-lg shadow-black/60 backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse" aria-hidden="true"></span>
                <span>Deterministic Motion In Action</span>
            </div>
            
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white leading-tight">
                Watch Volant in Action
            </h2>
            
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed">
                Experience deterministic safety barrier verification running synchronously alongside continuous autonomous flight and hardware execution.
            </p>
        </div>

        <!-- Video Player Frame -->
        <div class="max-w-5xl mx-auto">
            <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden glass-panel border border-slate-700/80 shadow-2xl shadow-amber-950/50 group">
                
                <!-- Video Cockpit / Telemetry Header Bar -->
                <div class="bg-slate-900/90 px-4 sm:px-6 py-3 border-b border-slate-800 flex flex-wrap items-center justify-between gap-3 text-xs font-mono text-slate-300">
                    <div class="flex items-center gap-2.5">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                        </span>
                        <span class="text-emerald-400 font-bold uppercase tracking-wider text-[11px] sm:text-xs">Live Telemetry Feed</span>
                        <span class="hidden sm:inline text-slate-600">|</span>
                        <span id="video-feed-subtitle" class="hidden sm:inline text-slate-400">Urban Airspace Geofence Patrol &amp; Real-Time Collision Avoidance (New York)</span>
                    </div>

                    <div class="flex items-center gap-3 text-[11px] sm:text-xs">
                        <span id="video-barrier-badge" class="px-2 py-0.5 rounded bg-amber-950/80 border border-amber-500/40 text-amber-300">
                            Barrier: ACTIVE [0 Breaches]
                        </span>
                        <span class="hidden md:inline-block px-2 py-0.5 rounded bg-slate-800/80 border border-slate-700 text-slate-300">
                            60 FPS &bull; 4.1ms Latency
                        </span>
                    </div>
                </div>

                <!-- Video Element & Overlays Container -->
                <div id="video-container" class="relative aspect-video w-full bg-slate-950 overflow-hidden">
                    <video 
                        id="volant-hero-video"
                        class="w-full h-full object-cover transition-opacity duration-300"
                        src="{{ asset('videos/drone-city.webm') }}"
                        autoplay 
                        muted 
                        loop 
                        playsinline 
                        preload="auto"
                        poster="{{ asset('images/drone.jpg') }}"
                        aria-label="Volant autonomous robotic and drone trajectory execution demonstration video"
                    >
                        <!-- Fallback content if video is unsupported -->
                        <div class="absolute inset-0 flex items-center justify-center p-6 text-center bg-slate-950 text-slate-300">
                            <p>Your browser does not support the video tag. Please view our autonomous trajectory verification imagery above.</p>
                        </div>
                    </video>

                    <!-- Center Play Overlay Button (Visible if browser blocks autoplay until user taps) -->
                    <button 
                        type="button"
                        id="video-center-play-overlay"
                        class="absolute inset-0 m-auto w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-slate-950/80 border-2 border-amber-400 text-amber-300 hover:scale-110 hover:bg-amber-500/20 transition-all flex items-center justify-center backdrop-blur-md shadow-2xl shadow-amber-500/50 hidden z-20 cursor-pointer"
                        aria-label="Click to start video"
                        title="Click to start video"
                    >
                        <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </button>

                    <!-- Cinematic Vignette Gradient -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-slate-950/90 via-transparent to-slate-950/40" aria-hidden="true"></div>

                    <!-- Tech HUD Corner Reticles -->
                    <div class="absolute top-4 left-4 w-6 h-6 border-t-2 border-l-2 border-amber-400/60 pointer-events-none" aria-hidden="true"></div>
                    <div class="absolute top-4 right-4 w-6 h-6 border-t-2 border-r-2 border-amber-400/60 pointer-events-none" aria-hidden="true"></div>
                    <div class="absolute bottom-16 left-4 w-6 h-6 border-b-2 border-l-2 border-amber-400/60 pointer-events-none" aria-hidden="true"></div>
                    <div class="absolute bottom-16 right-4 w-6 h-6 border-b-2 border-r-2 border-amber-400/60 pointer-events-none" aria-hidden="true"></div>

                    <!-- Live Dynamic HUD Telemetry Overlay -->
                    <div id="video-hud-telemetry" class="absolute top-6 left-6 pointer-events-none hidden sm:block font-mono text-[11px] text-amber-300/90 space-y-1 drop-shadow-[0_2px_4px_rgba(0,0,0,0.9)]">
                        <div class="flex items-center gap-2">
                            <span class="text-slate-400">WAYPOINT:</span>
                            <span id="hud-waypoint" class="text-white font-bold">NYC-WP-14 &rarr; 5TH-AVE CORRIDOR</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-slate-400">BOUNDING ENVELOPE:</span>
                            <span id="hud-envelope" class="text-emerald-400 font-semibold">100% CLEAR (URBAN BUFFER &gt; 12.0m)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-slate-400">KINEMATIC DRIFT:</span>
                            <span id="hud-drift" class="text-amber-300">&plusmn;0.002 rad/s</span>
                        </div>
                    </div>

                    <!-- HUD Status Badge (Top Right) -->
                    <div class="absolute top-6 right-6 pointer-events-none hidden sm:flex items-center gap-2 px-3 py-1 rounded-md bg-slate-950/80 border border-emerald-500/40 font-mono text-xs text-emerald-300 drop-shadow-md">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span id="hud-status-badge">CITY FLIGHT ENVELOPE LOCKED</span>
                    </div>

                    <!-- Auto-Rotation 15s Progress Line (Above control bar) -->
                    <div class="absolute bottom-14 left-0 right-0 h-1 bg-slate-800/80 overflow-hidden pointer-events-none" title="Feed switches automatically every 15 seconds">
                        <div id="rotation-progress-bar" class="h-full bg-gradient-to-r from-amber-400 via-amber-300 to-orange-400 w-0 transition-all duration-100 ease-linear"></div>
                    </div>

                    <!-- Control Bar Overlay (Accessible & Modern) -->
                    <div class="absolute bottom-0 inset-x-0 bg-slate-950/85 backdrop-blur-md px-4 sm:px-6 py-2.5 flex items-center justify-between border-t border-slate-800/80 z-10 transition-opacity duration-300">
                        <!-- Play/Pause & Audio Toggles -->
                        <div class="flex items-center gap-2 sm:gap-3">
                            <!-- Play / Pause Button -->
                            <button 
                                type="button" 
                                id="video-play-btn" 
                                class="inline-flex items-center justify-center w-9 h-9 rounded-lg bg-slate-800/90 hover:bg-slate-700 text-slate-200 hover:text-white border border-slate-700 transition focus:outline-none focus:ring-2 focus:ring-amber-400 cursor-pointer"
                                aria-label="Pause auto play video"
                                title="Pause / Play"
                            >
                                <!-- Pause Icon (Initial state when playing) -->
                                <svg id="video-pause-icon" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M6 4h4v16H6V4zm8 0h4v16h-4V4z"/>
                                </svg>
                                <!-- Play Icon (Hidden initially) -->
                                <svg id="video-play-icon" class="w-4 h-4 hidden" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </button>

                            <!-- Mute / Unmute Button -->
                            <button 
                                type="button" 
                                id="video-mute-btn" 
                                class="inline-flex items-center justify-center w-9 h-9 rounded-lg bg-slate-800/90 hover:bg-slate-700 text-slate-200 hover:text-white border border-slate-700 transition focus:outline-none focus:ring-2 focus:ring-amber-400 cursor-pointer"
                                aria-label="Unmute video audio"
                                title="Mute / Unmute"
                            >
                                <!-- Muted Icon (Initial state) -->
                                <svg id="video-muted-icon" class="w-4 h-4 text-slate-300" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M16.5 12c0-1.77-1.02-3.29-2.5-4.03v2.21l2.45 2.45c.03-.2.05-.41.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51C20.63 14.91 21 13.5 21 12c0-4.28-2.99-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71zM4.27 3L3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06c1.38-.31 2.63-.95 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4L9.91 6.09 12 8.18V4z"/>
                                </svg>
                                <!-- Unmuted Icon (Hidden initially) -->
                                <svg id="video-unmuted-icon" class="w-4 h-4 hidden text-amber-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/>
                                </svg>
                            </button>

                            <!-- Live Status Label -->
                            <span id="video-state-label" class="text-xs font-mono text-slate-400 pl-1">
                                Auto-playing (Muted)
                            </span>
                        </div>

                        <!-- Right Actions: Rotation Countdown & Fullscreen -->
                        <div class="flex items-center gap-3">
                            <!-- 15s Auto Rotation Pill -->
                            <div class="hidden sm:inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-slate-900/90 border border-slate-700/80 text-[11px] font-mono text-slate-300">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
                                <span>Cycle: </span>
                                <span id="rotation-countdown" class="text-amber-300 font-bold">15s</span>
                            </div>

                            <button 
                                type="button" 
                                id="video-fullscreen-btn" 
                                class="inline-flex items-center justify-center w-9 h-9 rounded-lg bg-slate-800/90 hover:bg-slate-700 text-slate-200 hover:text-white border border-slate-700 transition focus:outline-none focus:ring-2 focus:ring-amber-400 cursor-pointer"
                                aria-label="Toggle video fullscreen"
                                title="Toggle Fullscreen"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Live Stream Feed Selector & Details (All 4 Feeds with 15s Auto-Rotation) -->
                <div class="bg-slate-900/60 p-4 sm:p-6 border-t border-slate-800 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-4">
                    <div class="flex items-center gap-2 text-xs font-mono text-slate-400">
                        <span class="text-slate-500">Camera Source:</span>
                        <span id="video-active-feed-title" class="text-amber-400 font-semibold">Feed 01: Autonomous Drone Fleet // City Airspace Navigation</span>
                    </div>

                    <!-- 4 Interactive Tabs -->
                    <div class="grid grid-cols-2 sm:flex sm:flex-wrap items-center gap-2 w-full lg:w-auto" role="tablist" aria-label="Select robot camera feed">
                        <!-- Feed 1: Drone in City -->
                        <button 
                            type="button" 
                            data-video-feed-btn="drone" 
                            class="inline-flex items-center justify-center gap-1.5 px-3 py-2 rounded-lg text-xs font-mono transition-all bg-amber-500/20 border border-amber-400 text-amber-300 shadow-md shadow-amber-500/20 cursor-pointer"
                            aria-selected="true"
                        >
                            <span class="w-2 h-2 rounded-full bg-cyan-400 feed-active-indicator" aria-hidden="true"></span>
                            <span>1. City Drone</span>
                        </button>

                        <!-- Feed 2: Industrial Arm (Soldering/Welding) -->
                        <button 
                            type="button" 
                            data-video-feed-btn="arm" 
                            class="inline-flex items-center justify-center gap-1.5 px-3 py-2 rounded-lg text-xs font-mono transition-all bg-slate-800/80 border border-slate-700 text-slate-400 hover:text-slate-200 cursor-pointer"
                            aria-selected="false"
                        >
                            <span class="w-2 h-2 rounded-full bg-cyan-400 feed-active-indicator hidden" aria-hidden="true"></span>
                            <span>2. Industrial Arm (Soldering)</span>
                        </button>

                        <!-- Feed 3: Warehouse AMR -->
                        <button 
                            type="button" 
                            data-video-feed-btn="amr" 
                            class="inline-flex items-center justify-center gap-1.5 px-3 py-2 rounded-lg text-xs font-mono transition-all bg-slate-800/80 border border-slate-700 text-slate-400 hover:text-slate-200 cursor-pointer"
                            aria-selected="false"
                        >
                            <span class="w-2 h-2 rounded-full bg-cyan-400 feed-active-indicator hidden" aria-hidden="true"></span>
                            <span>3. Warehouse AMR</span>
                        </button>

                        <!-- Feed 4: Humanoids -->
                        <button 
                            type="button" 
                            data-video-feed-btn="humanoid" 
                            class="inline-flex items-center justify-center gap-1.5 px-3 py-2 rounded-lg text-xs font-mono transition-all bg-slate-800/80 border border-slate-700 text-slate-400 hover:text-slate-200 cursor-pointer"
                            aria-selected="false"
                        >
                            <span class="w-2 h-2 rounded-full bg-cyan-400 feed-active-indicator hidden" aria-hidden="true"></span>
                            <span>4. Humanoids</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Supporting Value Metric Grid Below Video -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6">
                <div class="glass-panel p-5 rounded-xl border border-slate-800/80 hover:border-amber-500/40 transition">
                    <div class="flex items-center gap-2 text-amber-400 font-mono text-xs mb-2">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <span class="font-bold">Pre-Motion Verification</span>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        100% of trajectory bounds and collision envelopes validated prior to actuation command dispatch.
                    </p>
                </div>

                <div class="glass-panel p-5 rounded-xl border border-slate-800/80 hover:border-emerald-500/40 transition">
                    <div class="flex items-center gap-2 text-emerald-400 font-mono text-xs mb-2">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <span class="font-bold">Sub-5ms Evaluation</span>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        Deterministic compiler engineered for zero-jitter edge microcontrollers, PLCs, and ROS2 companion computers.
                    </p>
                </div>

                <div class="glass-panel p-5 rounded-xl border border-slate-800/80 hover:border-amber-500/40 transition">
                    <div class="flex items-center gap-2 text-amber-400 font-mono text-xs mb-2">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <span class="font-bold">Deterministic Fallback</span>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        Dynamic geofence boundaries guarantee fail-safe deceleration or safe return-to-land within 10ms.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4-Step Process Section: Describe -> Compile -> Verify -> Deploy -->
<section id="how-it-works" class="py-24 bg-slate-950/60 border-y border-slate-800/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <span class="text-xs font-mono uppercase tracking-widest text-amber-400">System Architecture</span>
            <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-white">
                The Four-Step Safety Pipeline
            </h2>
            <p class="text-base sm:text-lg text-slate-400">
                How Volant transforms conversational language into safe, mathematically bounded physical actions. Click any step below to inspect its internal logic.
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1: Describe -->
            <button type="button" data-step-tab="1" class="step-tab-btn text-left glass-panel p-6 rounded-2xl relative flex flex-col justify-between group transition-all duration-300 hover:-translate-y-1 border-amber-400 shadow-lg shadow-amber-500/10 cursor-pointer w-full focus:outline-none focus:ring-2 focus:ring-amber-400">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <span class="step-num text-2xl font-bold font-mono text-amber-400">01</span>
                        <div class="w-10 h-10 rounded-lg bg-amber-950/80 border border-cyan-800 flex items-center justify-center text-amber-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Describe</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        The operator expresses the mission in ordinary human language — through text or speech. No proprietary coding languages or teach pendants required.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800 text-xs text-amber-400 font-mono flex items-center justify-between">
                    <span>Input: Natural language</span>
                    <span class="step-active-tag text-[10px] uppercase font-bold tracking-wider px-2 py-0.5 rounded bg-amber-500/20 text-amber-300 border border-amber-500/40">Active</span>
                </div>
            </button>

            <!-- Step 2: Compile -->
            <button type="button" data-step-tab="2" class="step-tab-btn text-left glass-panel p-6 rounded-2xl relative flex flex-col justify-between group transition-all duration-300 hover:-translate-y-1 border-slate-800 cursor-pointer w-full focus:outline-none focus:ring-2 focus:ring-amber-400">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <span class="step-num text-2xl font-bold font-mono text-slate-400">02</span>
                        <div class="w-10 h-10 rounded-lg bg-amber-950/80 border border-cyan-800 flex items-center justify-center text-amber-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Compile</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Volant parses intent against the machine's kinematic specifications and operational environment into deterministic task trajectories.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800 text-xs text-slate-400 font-mono flex items-center justify-between">
                    <span>Output: Action graphs</span>
                    <span class="step-active-tag hidden text-[10px] uppercase font-bold tracking-wider px-2 py-0.5 rounded bg-amber-500/20 text-amber-300 border border-amber-500/40">Active</span>
                </div>
            </button>

            <!-- Step 3: Verify -->
            <button type="button" data-step-tab="3" class="step-tab-btn text-left glass-panel p-6 rounded-2xl relative flex flex-col justify-between group transition-all duration-300 hover:-translate-y-1 border-slate-800 cursor-pointer w-full focus:outline-none focus:ring-2 focus:ring-amber-400">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <span class="step-num text-2xl font-bold font-mono text-slate-400">03</span>
                        <div class="w-10 h-10 rounded-lg bg-emerald-950/80 border border-emerald-800 flex items-center justify-center text-emerald-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Verify</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Every motion is checked against mathematical safety invariants: kinematic limits, torque thresholds, and dynamic human proximity barriers.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800 text-xs text-slate-400 font-mono flex items-center justify-between">
                    <span>Check: 100% Pre-motion barrier</span>
                    <span class="step-active-tag hidden text-[10px] uppercase font-bold tracking-wider px-2 py-0.5 rounded bg-amber-500/20 text-amber-300 border border-amber-500/40">Active</span>
                </div>
            </button>

            <!-- Step 4: Deploy -->
            <button type="button" data-step-tab="4" class="step-tab-btn text-left glass-panel p-6 rounded-2xl relative flex flex-col justify-between group transition-all duration-300 hover:-translate-y-1 border-slate-800 cursor-pointer w-full focus:outline-none focus:ring-2 focus:ring-amber-400">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <span class="step-num text-2xl font-bold font-mono text-slate-400">04</span>
                        <div class="w-10 h-10 rounded-lg bg-amber-950/80 border border-cyan-800 flex items-center justify-center text-amber-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Deploy</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Only verified motion plans are dispatched to controllers. Real-time telemetry streams continuously to guarantee safety envelope adherence.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800 text-xs text-slate-400 font-mono flex items-center justify-between">
                    <span>Dispatch: Low-latency motor execution</span>
                    <span class="step-active-tag hidden text-[10px] uppercase font-bold tracking-wider px-2 py-0.5 rounded bg-amber-500/20 text-amber-300 border border-amber-500/40">Active</span>
                </div>
            </button>
        </div>

        <!-- Interactive Step Deep-Dive Inspector Drawer -->
        <div id="step-inspector-drawer" class="mt-10 rounded-2xl glass-panel border border-amber-500/40 p-6 sm:p-8 bg-slate-950/90 shadow-2xl relative overflow-hidden transition-all duration-300">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-5 border-b border-slate-800">
                <div class="flex items-center gap-3">
                    <span id="step-inspector-number" class="w-9 h-9 rounded-lg bg-amber-500/20 border border-amber-400 text-amber-300 font-mono font-bold flex items-center justify-center text-sm">01</span>
                    <div>
                        <h4 id="step-inspector-title" class="text-lg font-bold text-white">Step 01: Natural Language Semantic Ingestion</h4>
                        <p id="step-inspector-desc" class="text-xs text-slate-400 font-mono">Transforms raw operator voice or prompt into unambiguous semantic task primitives.</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-xs font-mono text-slate-500">FORMAT:</span>
                    <span id="step-inspector-format" class="px-2.5 py-1 rounded bg-slate-900 border border-slate-700 text-xs font-mono text-amber-300">Semantic AST (JSON)</span>
                </div>
            </div>

            <!-- Code & Telemetry Terminal View -->
            <div class="mt-5 relative">
                <div class="flex items-center justify-between px-4 py-2 bg-slate-900 border-t border-x border-slate-800 rounded-t-lg text-xs font-mono text-slate-400">
                    <span id="step-inspector-filename">pipeline/ingest/semantic_ast.json</span>
                    <button type="button" id="step-copy-btn" class="text-amber-400 hover:text-amber-300 transition flex items-center gap-1 cursor-pointer">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                        <span id="step-copy-text">Copy Code</span>
                    </button>
                </div>
                <pre class="p-4 sm:p-5 rounded-b-xl bg-slate-950/95 border-b border-x border-slate-800 text-xs font-mono text-slate-300 overflow-x-auto leading-relaxed max-h-72"><code id="step-inspector-code">{
  "raw_prompt": "Pick up component B4 from feeder tray and laser-solder seam",
  "ast_version": "2.4.1",
  "intent_class": "MANIPULATION_AND_WELD",
  "spatial_bindings": {
    "target_asset": "FEEDER_TRAY_B4",
    "cad_coordinate_anchor": [0.420, -0.185, 0.310],
    "weld_seam_id": "SEAM_FLANGE_04"
  },
  "safety_envelope_requirements": {
    "payload_max_kg": 12.0,
    "max_approach_velocity_mps": 0.85,
    "thermal_laser_clearance_mm": 15.0
  }
}</code></pre>
            </div>
            
            <div class="mt-4 flex flex-wrap items-center justify-between gap-3 text-xs font-mono text-slate-400 pt-3 border-t border-slate-800/80">
                <span class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>Deterministic Compiler: Munich Verification Node v2.4</span>
                </span>
                <span class="text-amber-400">Click steps 01–04 above to inspect live pipeline data &rarr;</span>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Kinematic Trajectory & Safety Envelope Sandbox -->
<section id="interactive-simulator" class="py-24 relative overflow-hidden bg-gradient-to-b from-[#080c14] via-slate-950/95 to-[#080c14] border-b border-slate-800/80">
    <!-- Ambient Radial Glows -->
    <div class="absolute inset-0 pointer-events-none glow-radial-cyan opacity-60" aria-hidden="true"></div>
    <div class="absolute inset-0 pointer-events-none glow-radial-emerald opacity-50" aria-hidden="true"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-14">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-950/90 border border-amber-500/40 text-xs font-mono text-amber-300 shadow-xl backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping" aria-hidden="true"></span>
                <span>Interactive Verification Sandbox</span>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white">
                Test Plain Language &amp; Dynamic Barrier Physics
            </h2>
            <p class="text-base sm:text-lg text-slate-300">
                Command a virtual robotic system in real-time. Adjust speeds, payloads, and proximity buffers to observe how Volant’s mathematical safety barrier protects physical hardware.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Left Column: Command & Parameter Cockpit -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Robot Architecture Selector -->
                <div class="glass-panel p-5 rounded-2xl border border-slate-800">
                    <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block mb-3">1. Select Machine Architecture</span>
                    <div class="grid grid-cols-3 gap-2" role="group" aria-label="Machine Architecture Selection">
                        <button type="button" data-canvas-robot="arm" class="canvas-robot-btn px-3 py-2.5 rounded-xl text-xs font-mono border transition-all flex flex-col items-center gap-1.5 bg-amber-500/20 border-amber-400 text-amber-300 shadow-md shadow-amber-500/20 cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                            <span>6-Axis Arm</span>
                        </button>
                        <button type="button" data-canvas-robot="drone" class="canvas-robot-btn px-3 py-2.5 rounded-xl text-xs font-mono border transition-all flex flex-col items-center gap-1.5 bg-slate-900 border-slate-700 text-slate-400 hover:text-slate-200 cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                            <span>UAV Drone</span>
                        </button>
                        <button type="button" data-canvas-robot="amr" class="canvas-robot-btn px-3 py-2.5 rounded-xl text-xs font-mono border transition-all flex flex-col items-center gap-1.5 bg-slate-900 border-slate-700 text-slate-400 hover:text-slate-200 cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/></svg>
                            <span>Warehouse AMR</span>
                        </button>
                    </div>
                </div>

                <!-- Custom Prompt & Presets -->
                <div class="glass-panel p-5 rounded-2xl border border-slate-800 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-mono text-slate-400 uppercase tracking-wider">2. Natural Language Directive</span>
                        <span class="text-[10px] font-mono text-amber-400">Live Parser</span>
                    </div>
                    
                    <div class="relative">
                        <input 
                            type="text" 
                            id="canvas-prompt-input" 
                            value="Solder circuit seam B4 with 0.5mm precision and return to home position" 
                            class="w-full px-4 py-3 rounded-xl bg-slate-950/90 border border-slate-700 text-sm text-white font-mono focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 pr-10 shadow-inner"
                            placeholder="Type a plain-language command..."
                        >
                        <div class="absolute right-3 top-3.5 text-slate-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                    </div>

                    <!-- Preset Chips -->
                    <div class="space-y-1.5 pt-1">
                        <span class="text-[11px] font-mono text-slate-500">Quick Test Directives:</span>
                        <div class="flex flex-wrap gap-1.5">
                            <button type="button" data-prompt-preset="Solder circuit seam B4 with 0.5mm precision and return to home position" class="prompt-preset-chip text-[11px] font-mono px-2.5 py-1 rounded bg-slate-900/80 hover:bg-slate-800 border border-slate-700 text-slate-300 hover:text-amber-300 transition cursor-pointer">
                                Solder PCB Seam
                            </button>
                            <button type="button" data-prompt-preset="Inspect high-voltage transmission flange at 25m avoiding no-fly zone" class="prompt-preset-chip text-[11px] font-mono px-2.5 py-1 rounded bg-slate-900/80 hover:bg-slate-800 border border-slate-700 text-slate-300 hover:text-amber-300 transition cursor-pointer">
                                Inspect Turbine Flange
                            </button>
                            <button type="button" data-prompt-preset="Transport 22kg battery pack across aisle 4 avoiding pedestrian buffer" class="prompt-preset-chip text-[11px] font-mono px-2.5 py-1 rounded bg-slate-900/80 hover:bg-slate-800 border border-slate-700 text-slate-300 hover:text-amber-300 transition cursor-pointer">
                                Heavy Battery Transport
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Physical Parameter Sliders -->
                <div class="glass-panel p-5 rounded-2xl border border-slate-800 space-y-4">
                    <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block">3. Adjust Physical Invariant Parameters</span>
                    
                    <!-- Slider 1: Speed -->
                    <div class="space-y-1.5">
                        <div class="flex justify-between text-xs font-mono">
                            <span class="text-slate-300">Tool Velocity:</span>
                            <span id="slider-speed-val" class="text-amber-300 font-bold">1.2 m/s</span>
                        </div>
                        <input type="range" id="slider-speed" min="0.3" max="3.5" step="0.1" value="1.2" class="w-full accent-amber-400 bg-slate-800 h-2 rounded-lg cursor-pointer">
                        <div class="flex justify-between text-[10px] font-mono text-slate-500">
                            <span>0.3 m/s (Creep)</span>
                            <span class="text-amber-400">&gt; 2.5 m/s Hazard Zone</span>
                            <span>3.5 m/s (Max)</span>
                        </div>
                    </div>

                    <!-- Slider 2: Payload -->
                    <div class="space-y-1.5">
                        <div class="flex justify-between text-xs font-mono">
                            <span class="text-slate-300">Payload Mass:</span>
                            <span id="slider-payload-val" class="text-amber-300 font-bold">8.0 kg</span>
                        </div>
                        <input type="range" id="slider-payload" min="1" max="35" step="1" value="8" class="w-full accent-amber-400 bg-slate-800 h-2 rounded-lg cursor-pointer">
                        <div class="flex justify-between text-[10px] font-mono text-slate-500">
                            <span>1 kg (Light)</span>
                            <span class="text-amber-400">&gt; 25 kg Torque Limit</span>
                            <span>35 kg</span>
                        </div>
                    </div>

                    <!-- Slider 3: Safety Buffer -->
                    <div class="space-y-1.5">
                        <div class="flex justify-between text-xs font-mono">
                            <span class="text-slate-300">Safety Exclusion Buffer:</span>
                            <span id="slider-buffer-val" class="text-emerald-300 font-bold">0.80 m</span>
                        </div>
                        <input type="range" id="slider-buffer" min="0.2" max="2.0" step="0.1" value="0.8" class="w-full accent-emerald-400 bg-slate-800 h-2 rounded-lg cursor-pointer">
                        <div class="flex justify-between text-[10px] font-mono text-slate-500">
                            <span>0.2 m (Tight)</span>
                            <span>0.8 m (Standard)</span>
                            <span>2.0 m (Spacious)</span>
                        </div>
                    </div>
                </div>

                <!-- Action Controls -->
                <div class="flex flex-wrap items-center gap-3">
                    <button type="button" id="btn-inject-obstacle" class="flex-1 inline-flex items-center justify-center gap-2 px-4 py-3 rounded-xl border border-amber-500/50 bg-amber-500/10 hover:bg-amber-500/20 text-amber-300 text-xs font-mono font-semibold transition cursor-pointer shadow-md">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        <span id="btn-inject-obstacle-text">Inject Path Hazard</span>
                    </button>

                    <button type="button" id="btn-run-sim" class="flex-1 inline-flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-gradient-to-r from-amber-400 via-amber-500 to-orange-500 hover:from-amber-300 hover:to-orange-400 text-slate-950 text-xs font-mono font-bold transition shadow-lg shadow-amber-500/25 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span>Re-Verify Trajectory</span>
                    </button>

                    <button type="button" id="btn-audio-toggle" class="px-3.5 py-3 rounded-xl border border-slate-700 bg-slate-900 text-slate-400 hover:text-amber-300 text-xs font-mono transition cursor-pointer" title="Toggle audio feedback synthesizer" aria-label="Toggle audio effects">
                        <svg id="audio-icon-on" class="w-4 h-4 hidden text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/></svg>
                        <svg id="audio-icon-off" class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15zM17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2"/></svg>
                    </button>
                </div>
            </div>

            <!-- Right Column: Live HTML5 Canvas & Telemetry HUD -->
            <div class="lg:col-span-7 space-y-4">
                <div class="rounded-2xl glass-panel border border-slate-700/80 overflow-hidden shadow-2xl bg-slate-950/95 relative">
                    
                    <!-- HUD Telemetry Header Bar -->
                    <div class="bg-slate-900/90 px-4 sm:px-6 py-3 border-b border-slate-800 flex flex-wrap items-center justify-between gap-3 text-xs font-mono">
                        <div class="flex items-center gap-2">
                            <span id="canvas-status-dot" class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span id="canvas-status-badge" class="font-bold text-emerald-400 uppercase tracking-wider">BARRIER: VERIFIED [SAFE]</span>
                        </div>
                        <div class="flex items-center gap-4 text-slate-400">
                            <span>Latency: <strong id="canvas-hud-latency" class="text-amber-300">2.1ms</strong></span>
                            <span>Kinetic Energy: <strong id="canvas-hud-energy" class="text-white">5.76 J</strong></span>
                        </div>
                    </div>

                    <!-- Interactive Canvas Viewport -->
                    <div class="relative w-full aspect-[16/10] sm:aspect-[16/9] bg-slate-950 overflow-hidden select-none">
                        <canvas id="kinematic-canvas" class="w-full h-full block cursor-crosshair"></canvas>

                        <!-- Reticle Overlays -->
                        <div class="absolute top-3 left-3 text-[10px] font-mono text-amber-400/80 pointer-events-none">
                            COORD GRID: <span id="canvas-coords">X: +0.420 Y: +0.285 Z: +0.110</span>
                        </div>
                        <div class="absolute bottom-3 left-3 text-[10px] font-mono text-slate-500 pointer-events-none">
                            Tip: Drag crosshair on canvas to manually adjust target waypoint
                        </div>

                        <!-- Barrier Alert Banner (Triggered when unsafe) -->
                        <div id="canvas-danger-banner" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 p-4 rounded-xl bg-red-950/90 border border-red-500/80 text-center space-y-2 backdrop-blur-md shadow-2xl hidden z-20 pointer-events-none">
                            <div class="inline-flex items-center gap-2 text-red-400 font-bold font-mono text-sm">
                                <svg class="w-5 h-5 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                                <span>FAIL-SAFE CLAMP ENGAGED</span>
                            </div>
                            <p id="canvas-danger-msg" class="text-xs text-red-200 font-mono">Velocity damped to zero in 2.8ms — Collision boundary violated.</p>
                        </div>
                    </div>

                    <!-- Real-Time Mathematical Telemetry Terminal -->
                    <div class="p-4 bg-slate-900/80 border-t border-slate-800 font-mono text-xs space-y-2">
                        <div class="flex items-center justify-between text-slate-400 text-[11px] pb-1 border-b border-slate-800">
                            <span>FORMAL INVARIANT VALIDATOR</span>
                            <span class="text-emerald-400">MATH GUARANTEE: ACTIVE</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-[11px] pt-1">
                            <div>
                                <span class="text-slate-500">Control Barrier Eq:</span>
                                <span id="math-cbf" class="text-amber-300 font-semibold block">h(x) = &nabla;h &bull; f(x) &ge; -&gamma;(h) [+0.482 &ge; 0]</span>
                            </div>
                            <div>
                                <span class="text-slate-500">Torque Matrix:</span>
                                <span id="math-torque" class="text-emerald-300 font-semibold block">&tau;_applied &lt; &tau;_max (18.4 Nm / 45.0 Nm)</span>
                            </div>
                        </div>
                    </div>
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
            <div class="glass-panel rounded-2xl border border-slate-800 hover:border-amber-500/40 transition duration-300 flex flex-col justify-between overflow-hidden group">
                <div>
                    <div class="relative w-full h-52 sm:h-64 overflow-hidden">
                        <img src="{{ asset('images/industrial-arm.jpg') }}" 
                             alt="Precision 6-Axis Industrial Robotic Arm" 
                             width="800" 
                             height="450" 
                             loading="lazy" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
                        <span class="absolute top-4 right-4 text-xs font-mono px-2.5 py-1 rounded-md bg-slate-950/80 text-amber-300 border border-cyan-800/60 backdrop-blur-md">
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
                    <a href="{{ route('product') }}" class="text-amber-400 hover:text-amber-300 font-semibold inline-flex items-center gap-1">Details &rarr;</a>
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
                             class="w-full h-full object-cover">
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
            <div class="glass-panel rounded-2xl border border-slate-800 hover:border-amber-500/40 transition duration-300 flex flex-col justify-between overflow-hidden group">
                <div>
                    <div class="relative w-full h-52 sm:h-64 overflow-hidden">
                        <img src="{{ asset('images/mobile-robot.jpg') }}" 
                             alt="Autonomous Mobile Robot (AMR) in Warehouse" 
                             width="800" 
                             height="450" 
                             loading="lazy" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
                        <span class="absolute top-4 right-4 text-xs font-mono px-2.5 py-1 rounded-md bg-slate-950/80 text-amber-300 border border-cyan-800/60 backdrop-blur-md">
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
                    <a href="{{ route('product') }}" class="text-amber-400 hover:text-amber-300 font-semibold inline-flex items-center gap-1">Details &rarr;</a>
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
                             class="w-full h-full object-cover">
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

<!-- Interactive Fleet Safety & ROI Impact Calculator -->
<section id="fleet-roi-calculator" class="py-24 relative overflow-hidden bg-gradient-to-b from-[#080c14] via-slate-950/90 to-[#080c14] border-t border-slate-800/80">
    <!-- Ambient Radial Glow -->
    <div class="absolute inset-0 pointer-events-none glow-radial-cyan opacity-40" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <span class="text-xs font-mono uppercase tracking-widest text-amber-400">Enterprise Value Model</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white">
                Fleet Safety &amp; Operational ROI Calculator
            </h2>
            <p class="text-base sm:text-lg text-slate-300">
                Quantify how deterministic pre-motion verification accelerates engineering turnaround, eliminates robot collision downtime, and slashes commissioning overhead.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <!-- Left Controls Column -->
            <div class="lg:col-span-6 space-y-6">
                <div class="glass-panel p-6 sm:p-8 rounded-2xl border border-slate-800 space-y-6">
                    
                    <!-- Slider 1: Fleet Size -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-sm font-mono">
                            <span class="text-slate-200 font-semibold">Active Fleet Size:</span>
                            <span id="roi-fleet-display" class="px-3 py-1 rounded-md bg-amber-950/80 border border-amber-500/40 text-amber-300 font-bold">25 Robots</span>
                        </div>
                        <input type="range" id="roi-fleet-slider" min="1" max="250" step="1" value="25" class="w-full accent-amber-400 bg-slate-800 h-2.5 rounded-lg cursor-pointer">
                        <div class="flex justify-between text-xs font-mono text-slate-500">
                            <span>1 pilot unit</span>
                            <span>50 units</span>
                            <span>250+ enterprise fleet</span>
                        </div>
                    </div>

                    <!-- Slider 2: Shift Pattern -->
                    <div class="space-y-2">
                        <span class="text-sm font-mono text-slate-200 font-semibold block">Operating Shift Model:</span>
                        <div class="grid grid-cols-3 gap-2">
                            <button type="button" data-shift-btn="1" class="roi-shift-btn px-3 py-2 rounded-xl text-xs font-mono border transition-all bg-slate-900 border-slate-700 text-slate-400 hover:text-slate-200 cursor-pointer">
                                1 Shift (8h/day)
                            </button>
                            <button type="button" data-shift-btn="2" class="roi-shift-btn px-3 py-2 rounded-xl text-xs font-mono border transition-all bg-amber-500/20 border-amber-400 text-amber-300 shadow-md shadow-amber-500/10 cursor-pointer font-bold">
                                2 Shifts (16h/day)
                            </button>
                            <button type="button" data-shift-btn="3" class="roi-shift-btn px-3 py-2 rounded-xl text-xs font-mono border transition-all bg-slate-900 border-slate-700 text-slate-400 hover:text-slate-200 cursor-pointer">
                                Continuous (24/7)
                            </button>
                        </div>
                    </div>

                    <!-- Slider 3: Task Changes / Month -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-sm font-mono">
                            <span class="text-slate-200 font-semibold">Task &amp; Mission Changes / Month:</span>
                            <span id="roi-changes-display" class="px-3 py-1 rounded-md bg-amber-950/80 border border-amber-500/40 text-amber-300 font-bold">18 missions</span>
                        </div>
                        <input type="range" id="roi-changes-slider" min="2" max="60" step="1" value="18" class="w-full accent-amber-400 bg-slate-800 h-2.5 rounded-lg cursor-pointer">
                        <div class="flex justify-between text-xs font-mono text-slate-500">
                            <span>2 (Infrequent)</span>
                            <span>18 (Moderate)</span>
                            <span>60+ (Agile Manufacturing)</span>
                        </div>
                    </div>

                    <!-- Slider 4: Engineering Hourly Rate -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-sm font-mono">
                            <span class="text-slate-200 font-semibold">Blended Robotics Engineer Rate:</span>
                            <span id="roi-rate-display" class="px-3 py-1 rounded-md bg-amber-950/80 border border-amber-500/40 text-amber-300 font-bold">$125 / hr</span>
                        </div>
                        <input type="range" id="roi-rate-slider" min="60" max="220" step="5" value="125" class="w-full accent-amber-400 bg-slate-800 h-2.5 rounded-lg cursor-pointer">
                        <div class="flex justify-between text-xs font-mono text-slate-500">
                            <span>$60 / hr</span>
                            <span>$125 / hr (Average)</span>
                            <span>$220 / hr (Specialist)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Results Column -->
            <div class="lg:col-span-6 space-y-6">
                <!-- Large Highlight Card -->
                <div class="glass-panel p-6 sm:p-8 rounded-3xl border border-emerald-500/40 shadow-2xl bg-gradient-to-br from-slate-900/90 via-slate-950/95 to-slate-900/90 relative overflow-hidden">
                    <div class="absolute -right-8 -top-8 w-32 h-32 rounded-full bg-emerald-500/10 blur-2xl pointer-events-none"></div>

                    <span class="text-xs font-mono uppercase tracking-widest text-emerald-400 block mb-2">Projected Annual Financial Impact</span>
                    
                    <div class="flex items-baseline gap-2 mb-4">
                        <span id="roi-annual-savings" class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight font-mono">$337,500</span>
                        <span class="text-sm font-mono text-slate-400">/ year</span>
                    </div>

                    <p class="text-slate-300 text-sm leading-relaxed mb-6">
                        Estimated savings from eliminating manual trajectory teaching, zero collision downtime, and reducing task changeover from 14 hours to under 30 seconds.
                    </p>

                    <!-- Breakdown Grid -->
                    <div class="grid grid-cols-2 gap-4 pt-6 border-t border-slate-800">
                        <div class="p-4 rounded-xl bg-slate-950/80 border border-slate-800">
                            <span class="text-xs font-mono text-slate-400 block mb-1">Hours Saved / Month</span>
                            <span id="roi-hours-saved" class="text-2xl font-bold font-mono text-amber-400">225 hrs</span>
                            <span class="text-[11px] font-mono text-slate-500 block mt-0.5">Across entire fleet</span>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-950/80 border border-slate-800">
                            <span class="text-xs font-mono text-slate-400 block mb-1">Commissioning Speedup</span>
                            <span id="roi-speedup" class="text-2xl font-bold font-mono text-emerald-400">88%</span>
                            <span class="text-[11px] font-mono text-slate-500 block mt-0.5">Faster deployment cycle</span>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-950/80 border border-slate-800">
                            <span class="text-xs font-mono text-slate-400 block mb-1">Safety Invariant Status</span>
                            <span class="text-lg font-bold font-mono text-emerald-400">100% Pre-Check</span>
                            <span class="text-[11px] font-mono text-slate-500 block mt-0.5">Zero kinematic breaches</span>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-950/80 border border-slate-800">
                            <span class="text-xs font-mono text-slate-400 block mb-1">Payback Period</span>
                            <span id="roi-payback" class="text-lg font-bold font-mono text-amber-400">&lt; 2.4 Months</span>
                            <span class="text-[11px] font-mono text-slate-500 block mt-0.5">High operational IRR</span>
                        </div>
                    </div>

                    <div class="mt-6 pt-5 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <span class="text-xs font-mono text-slate-400">Ready to pilot on your hardware?</span>
                        <a href="{{ route('contact.create') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-2.5 text-xs font-mono font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-amber-500 to-orange-500 hover:from-amber-300 hover:to-orange-400 rounded-lg shadow-md transition">
                            <span>Request Pilot Simulation &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-20 relative overflow-hidden bg-gradient-to-b from-[#080c14] via-slate-900/90 to-[#080c14] border-t border-slate-800/80">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        <span class="text-xs font-mono uppercase tracking-widest text-amber-400">Deploy Plain-Language Control</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
            Ready to bring certified plain-language commands to your machines?
        </h2>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
            Reach out to our Munich team to discuss how Volant can integrate with your industrial arms, humanoids, mobile fleets, or drones.
        </p>
        <div class="pt-4">
            <a href="{{ route('contact.create') }}" 
               class="inline-flex items-center gap-2 px-8 py-4 text-base font-bold text-slate-950 bg-gradient-to-r from-amber-400 via-amber-300 to-orange-400 hover:from-amber-300 hover:to-orange-400 rounded-xl shadow-xl shadow-amber-500/25 transition-all focus:outline-none focus:ring-2 focus:ring-amber-400">
                <span>Contact Our Munich Engineering Team</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
