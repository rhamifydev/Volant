// Volant Client Interaction Scripts
document.addEventListener('DOMContentLoaded', () => {
    // 1. Accessible Mobile Menu Drawer
    const mobileMenuButton = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
            mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
        });
    }

    // 2. Interactive Verification Simulation on Home Page
    const simulationButtons = document.querySelectorAll('[data-simulation-trigger]');
    const simPrompt = document.getElementById('sim-prompt');
    const simRobot = document.getElementById('sim-robot');
    const simCompile = document.getElementById('sim-compile');
    const simVerify = document.getElementById('sim-verify');
    const simStatus = document.getElementById('sim-status');

    const simulationData = {
        arm: {
            robot: '6-Axis Industrial Manipulator (UR10e / Fanuc)',
            prompt: '"Pick up component B4 from feeder tray, inspect surface roughness, and place in bin 2."',
            compile: 'TASK: trajectory_spline(p0->p_tray) -> gripper_actuate(force=12N) -> laser_inspect() -> p_bin2',
            verify: '[PASS] Collision envelope clear | Force within tolerance (<15N) | Singularity margin: 18.4°',
            status: 'VERIFIED_SAFE — DISPATCHING MOTOR COMM'
        },
        humanoid: {
            robot: 'Bipedal Humanoid (Full-body coordination)',
            prompt: '"Walk to substation panel 4, open access hatch, and check main circuit breaker status."',
            compile: 'TASK: gait_planner(step_length=0.4m, zmp_stable) -> dual_arm_reach(panel_latch) -> camera_vision_check()',
            verify: '[PASS] Zero-Moment Point (ZMP) stable | Joint torque limits safe | Thermal envelope verified',
            status: 'VERIFIED_SAFE — DISPATCHING MOTOR COMM'
        },
        amr: {
            robot: 'Autonomous Mobile Robot (AMR / Warehouse Rover)',
            prompt: '"Navigate to aisle 7, load pallet ID #884, and transfer to packaging bay 3 avoiding aisle 6."',
            compile: 'TASK: global_path(costmap_v3) -> obstacle_dynamic_divert(aisle_6_avoid=true) -> dock_payload(weight=420kg)',
            verify: '[PASS] Dynamic obstacle clearance > 1.2m | Deceleration stopping distance safe (v_max=1.4m/s)',
            status: 'VERIFIED_SAFE — DISPATCHING MOTOR COMM'
        },
        drone: {
            robot: 'Autonomous Quadrotor Drone (Aerial Inspection)',
            prompt: '"Ascend to 25m, fly perimeter waypoint loop Alpha, record thermal video, and return to pad."',
            compile: 'TASK: takeoff_alt(25.0) -> waypoint_spline(pts=[WP1, WP2, WP3, WP4]) -> gimbal_record() -> rtl()',
            verify: '[PASS] Geofence boundary verified | Wind gust margin acceptable (<35km/h) | Battery reserve > 38%',
            status: 'VERIFIED_SAFE — DISPATCHING MOTOR COMM'
        }
    };

    if (simulationButtons.length && simPrompt && simRobot && simCompile && simVerify && simStatus) {
        simulationButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const type = btn.getAttribute('data-simulation-trigger');
                const data = simulationData[type];
                if (!data) return;

                // Update active state on buttons
                simulationButtons.forEach(b => {
                    b.classList.remove('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300');
                    b.classList.add('bg-slate-800/60', 'border-slate-700', 'text-slate-400');
                });
                btn.classList.add('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300');
                btn.classList.remove('bg-slate-800/60', 'border-slate-700', 'text-slate-400');

                // Visual transition
                simPrompt.textContent = data.prompt;
                simRobot.textContent = data.robot;
                simCompile.textContent = data.compile;
                simVerify.textContent = data.verify;
                simStatus.textContent = data.status;
            });
        });
    }

    // 3. Auto-play Video Player Controls & Live Feed Switcher (15s Auto-Rotation)
    const video = document.getElementById('volant-hero-video');
    const playBtn = document.getElementById('video-play-btn');
    const centerPlayOverlay = document.getElementById('video-center-play-overlay');
    const pauseIcon = document.getElementById('video-pause-icon');
    const playIcon = document.getElementById('video-play-icon');
    const muteBtn = document.getElementById('video-mute-btn');
    const mutedIcon = document.getElementById('video-muted-icon');
    const unmutedIcon = document.getElementById('video-unmuted-icon');
    const stateLabel = document.getElementById('video-state-label');
    const progressBar = document.getElementById('video-progress-bar');
    const rotationProgressBar = document.getElementById('rotation-progress-bar');
    const rotationCountdown = document.getElementById('rotation-countdown');
    const fullscreenBtn = document.getElementById('video-fullscreen-btn');
    const videoContainer = document.getElementById('video-container');

    const feedButtons = document.querySelectorAll('[data-video-feed-btn]');
    const activeFeedTitle = document.getElementById('video-active-feed-title');
    const feedSubtitle = document.getElementById('video-feed-subtitle');
    const hudWaypoint = document.getElementById('hud-waypoint');
    const hudEnvelope = document.getElementById('hud-envelope');
    const hudDrift = document.getElementById('hud-drift');
    const hudStatusBadge = document.getElementById('hud-status-badge');

    const feedMetadata = {
        drone: {
            title: 'Feed 01: Autonomous Drone Fleet // City Airspace Navigation',
            subtitle: 'Urban Airspace Geofence Patrol & Real-Time Collision Avoidance (New York)',
            video: '/videos/drone-city.webm',
            poster: '/images/drone.jpg',
            waypoint: 'NYC-WP-14 &rarr; 5TH-AVE CORRIDOR',
            envelope: '100% CLEAR (URBAN BUFFER &gt; 12.0m)',
            drift: '&plusmn;0.002 rad/s',
            badge: 'CITY FLIGHT ENVELOPE LOCKED'
        },
        arm: {
            title: 'Feed 02: Industrial Arm // Precision Machine Soldering & Welding',
            subtitle: 'Multi-Axis Robotic Manipulator Machine Assembly & Laser Soldering',
            video: '/videos/arm-soldering.webm',
            poster: '/images/industrial-arm.jpg',
            waypoint: 'JOINT-AXIS-06 &rarr; WELD-SEAM-B4',
            envelope: 'THERMAL &amp; TORQUE ENVELOPE: 100% SAFE',
            drift: '&plusmn;0.001 mm',
            badge: 'PRECISION LASER WELD CERTIFIED'
        },
        amr: {
            title: 'Feed 03: Warehouse AMR // Autonomous Logistics & Pallet Stacking',
            subtitle: 'Dynamic Obstacle Avoidance & Autonomous High-Bay Pallet Management',
            video: '/videos/warehouse-amr.webm',
            poster: '/images/mobile-robot.jpg',
            waypoint: 'AISLE-09 &rarr; PALLET-STACK-RACK-03',
            envelope: 'DYNAMIC BUFFER: 1.8m (STOPPING MARGIN: CLEAR)',
            drift: '&plusmn;0.004 m/s',
            badge: 'COLLISION BUFFER SECURED'
        },
        humanoid: {
            title: 'Feed 04: Bipedal Humanoid // Whole-Body Package Handling & Task Execution',
            subtitle: 'Dynamic Balance Control, Zero-Moment Point & Dual-Arm Manipulation',
            video: '/videos/humanoid-working.webm',
            poster: '/images/humanoid.jpg',
            waypoint: 'STATION-A &rarr; INSPECTION-CONVEYOR-02',
            envelope: 'ZMP DYNAMIC STABILITY: 100% BALANCED',
            drift: '&plusmn;0.003 rad',
            badge: 'WHOLE-BODY BALANCE VERIFIED'
        }
    };

    const feedSequence = ['drone', 'arm', 'amr', 'humanoid'];
    let currentFeedIndex = 0;
    const ROTATION_INTERVAL = 15000; // 15 seconds per video
    let rotationTimer = null;
    let rotationProgressInterval = null;
    let rotationStartTime = Date.now();

    if (video) {
        // Explicitly set loop, muted & defaultMuted to ensure uninterrupted, stutter-free playback
        video.muted = true;
        video.defaultMuted = true;
        video.loop = true;

        // Background preload all feeds into browser memory to eliminate transition buffer delays
        feedSequence.forEach(key => {
            const meta = feedMetadata[key];
            if (meta && meta.video) {
                const preloadEl = document.createElement('video');
                preloadEl.preload = 'auto';
                preloadEl.muted = true;
                preloadEl.src = meta.video;
                preloadEl.load();
            }
        });

        const updatePlayingUI = () => {
            if (pauseIcon) pauseIcon.classList.remove('hidden');
            if (playIcon) playIcon.classList.add('hidden');
            if (centerPlayOverlay) centerPlayOverlay.classList.add('hidden');
            if (playBtn) playBtn.setAttribute('aria-label', 'Pause auto play video');
            if (stateLabel) stateLabel.textContent = video.muted ? 'Auto-playing (Muted)' : 'Playing (Audio on)';
        };

        const updatePausedUI = () => {
            if (pauseIcon) pauseIcon.classList.add('hidden');
            if (playIcon) playIcon.classList.remove('hidden');
            if (centerPlayOverlay) centerPlayOverlay.classList.remove('hidden');
            if (playBtn) playBtn.setAttribute('aria-label', 'Play auto play video');
            if (stateLabel) stateLabel.textContent = 'Paused';
        };

        const playVideo = () => {
            video.muted = true;
            video.loop = true;
            const promise = video.play();
            if (promise !== undefined) {
                promise.then(updatePlayingUI).catch(() => {
                    updatePausedUI();
                });
            }
        };

        const stopRotationTimer = () => {
            if (rotationTimer) {
                clearTimeout(rotationTimer);
                rotationTimer = null;
            }
            if (rotationProgressInterval) {
                clearInterval(rotationProgressInterval);
                rotationProgressInterval = null;
            }
        };

        const startRotationTimer = () => {
            stopRotationTimer();
            rotationStartTime = Date.now();

            rotationProgressInterval = setInterval(() => {
                if (video.paused) return; // Pause countdown while video is paused
                const elapsed = Date.now() - rotationStartTime;
                const percentage = Math.min(100, (elapsed / ROTATION_INTERVAL) * 100);
                if (rotationProgressBar) {
                    rotationProgressBar.style.width = `${percentage}%`;
                }
                if (rotationCountdown) {
                    const remainingSeconds = Math.max(0, Math.ceil((ROTATION_INTERVAL - elapsed) / 1000));
                    rotationCountdown.textContent = `${remainingSeconds}s`;
                }
            }, 100);

            rotationTimer = setTimeout(() => {
                const nextIndex = (currentFeedIndex + 1) % feedSequence.length;
                switchFeed(feedSequence[nextIndex], true);
            }, ROTATION_INTERVAL);
        };

        let isSwitching = false;
        const switchFeed = (feedKey, isAuto = false) => {
            const meta = feedMetadata[feedKey];
            if (!meta || isSwitching) return;
            isSwitching = true;

            currentFeedIndex = feedSequence.indexOf(feedKey);

            // Update active tab button styles
            feedButtons.forEach(btn => {
                const key = btn.getAttribute('data-video-feed-btn');
                const indicator = btn.querySelector('.feed-active-indicator');
                if (key === feedKey) {
                    btn.classList.add('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300', 'shadow-md', 'shadow-cyan-500/20');
                    btn.classList.remove('bg-slate-800/80', 'border-slate-700', 'text-slate-400');
                    btn.setAttribute('aria-selected', 'true');
                    if (indicator) indicator.classList.remove('hidden');
                } else {
                    btn.classList.remove('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300', 'shadow-md', 'shadow-cyan-500/20');
                    btn.classList.add('bg-slate-800/80', 'border-slate-700', 'text-slate-400');
                    btn.setAttribute('aria-selected', 'false');
                    if (indicator) indicator.classList.add('hidden');
                }
            });

            // Update HUD & Cockpit Telemetry
            if (activeFeedTitle) activeFeedTitle.textContent = meta.title;
            if (feedSubtitle) feedSubtitle.textContent = meta.subtitle;
            if (hudWaypoint) hudWaypoint.innerHTML = meta.waypoint;
            if (hudEnvelope) hudEnvelope.innerHTML = meta.envelope;
            if (hudDrift) hudDrift.innerHTML = meta.drift;
            if (hudStatusBadge) hudStatusBadge.textContent = meta.badge;

            // Smooth cross-fade transition
            video.style.opacity = '0.4';

            const onVideoReady = () => {
                video.removeEventListener('loadeddata', onVideoReady);
                video.removeEventListener('canplay', onVideoReady);
                video.style.opacity = '1';
                playVideo();
                isSwitching = false;
            };

            video.addEventListener('loadeddata', onVideoReady, { once: true });
            video.addEventListener('canplay', onVideoReady, { once: true });

            video.poster = meta.poster;
            video.src = meta.video;
            video.loop = true;
            video.muted = true;
            video.load();

            // Safety timeout in case canplay is delayed
            setTimeout(() => {
                if (isSwitching) {
                    video.style.opacity = '1';
                    playVideo();
                    isSwitching = false;
                }
            }, 600);

            // Reset the 15-second rotation countdown
            startRotationTimer();
        };

        // Attempt playback on load
        playVideo();
        startRotationTimer();

        // Keep UI in sync with actual media events
        video.addEventListener('play', updatePlayingUI);
        video.addEventListener('playing', updatePlayingUI);
        video.addEventListener('pause', updatePausedUI);

        // Fallback: If autoplay policy blocked initial start, start on first scroll or touch
        const startOnFirstUserGesture = () => {
            if (video.paused) {
                playVideo();
            }
        };
        window.addEventListener('click', startOnFirstUserGesture, { once: true, passive: true });
        window.addEventListener('touchstart', startOnFirstUserGesture, { once: true, passive: true });
        window.addEventListener('scroll', startOnFirstUserGesture, { once: true, passive: true });

        // Play / Pause button
        if (playBtn) {
            playBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                if (video.paused) {
                    playVideo();
                    startRotationTimer();
                } else {
                    video.pause();
                    stopRotationTimer();
                }
            });
        }

        // Center overlay play button
        if (centerPlayOverlay) {
            centerPlayOverlay.addEventListener('click', (e) => {
                e.stopPropagation();
                playVideo();
                startRotationTimer();
            });
        }

        // Mute / Unmute toggle
        if (muteBtn) {
            muteBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                video.muted = !video.muted;
                if (video.muted) {
                    if (mutedIcon) mutedIcon.classList.remove('hidden');
                    if (unmutedIcon) unmutedIcon.classList.add('hidden');
                    muteBtn.setAttribute('aria-label', 'Unmute video audio');
                    if (stateLabel && !video.paused) stateLabel.textContent = 'Playing (Muted)';
                } else {
                    if (mutedIcon) mutedIcon.classList.add('hidden');
                    if (unmutedIcon) unmutedIcon.classList.remove('hidden');
                    muteBtn.setAttribute('aria-label', 'Mute video audio');
                    if (stateLabel && !video.paused) stateLabel.textContent = 'Playing (Audio on)';
                }
            });
        }

        // Fullscreen toggle
        if (fullscreenBtn && videoContainer) {
            fullscreenBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                if (!document.fullscreenElement) {
                    if (videoContainer.requestFullscreen) {
                        videoContainer.requestFullscreen();
                    } else if (video.requestFullscreen) {
                        video.requestFullscreen();
                    }
                } else {
                    if (document.exitFullscreen) {
                        document.exitFullscreen();
                    }
                }
            });
        }

        // Live Feed Switcher Button Clicks
        if (feedButtons.length) {
            feedButtons.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const feedKey = btn.getAttribute('data-video-feed-btn');
                    switchFeed(feedKey, false);
                });
            });
        }
    }

    // ==========================================
    // 4. Interactive Step Deep-Dive Inspector (The Four-Step Safety Pipeline)
    // ==========================================
    const stepTabButtons = document.querySelectorAll('[data-step-tab]');
    const stepNumberEl = document.getElementById('step-inspector-number');
    const stepTitleEl = document.getElementById('step-inspector-title');
    const stepDescEl = document.getElementById('step-inspector-desc');
    const stepFormatEl = document.getElementById('step-inspector-format');
    const stepFilenameEl = document.getElementById('step-inspector-filename');
    const stepCodeEl = document.getElementById('step-inspector-code');
    const stepCopyBtn = document.getElementById('step-copy-btn');
    const stepCopyText = document.getElementById('step-copy-text');

    const stepData = {
        '1': {
            number: '01',
            title: 'Step 01: Natural Language Semantic Ingestion',
            desc: 'Transforms raw operator voice or prompt into unambiguous semantic task primitives.',
            format: 'Semantic AST (JSON)',
            filename: 'pipeline/ingest/semantic_ast.json',
            code: `{
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
}`
        },
        '2': {
            number: '02',
            title: 'Step 02: Deterministic Trajectory Compilation',
            desc: 'Synthesizes minimum-jerk spatial splines and validates inverse kinematics feasibility.',
            format: 'Compiled Trajectory Plan (C++ / Eigen)',
            filename: 'pipeline/compile/trajectory_plan.hpp',
            code: `// Compiled Deterministic Kinematic Trajectory
const auto plan = volant::compileTask({
    .target = SpatialAnchor::fromCad("SEAM_FLANGE_04"),
    .kinematic_dof = 6,
    .spline_profile = TrajectoryProfile::MIN_JERK,
    .dt_seconds = 0.002 // 500 Hz deterministic tick
});

// Cartesian Waypoint Envelope Generation
for (const auto& wp : plan.waypoints()) {
    VOLANT_ASSERT(!plan.isNearSingularity(wp, /*angular_margin_deg=*/ 14.5));
    VOLANT_ASSERT(wp.velocity <= 0.85 /*m/s*/);
}`
        },
        '3': {
            number: '03',
            title: 'Step 03: Formal Mathematical Barrier Verification',
            desc: 'Evaluates Control Barrier Functions (CBFs) to guarantee state space safety invariants before actuation.',
            format: 'Barrier Certificate Invariant Proof',
            filename: 'pipeline/verify/control_barrier.py',
            code: `@deterministic_verifier(timeout_ms=5.0)
def verify_motion_barrier(x_state, u_control, env_costmap):
    # Control Barrier Function: h(x) >= 0 defines admissible safe set
    h_collision = min_distance(x_state.envelope, env_costmap.forbidden_zones) - D_BUFFER
    h_torque = TORQUE_MAX - compute_inverse_dynamics(x_state, u_control)
    h_kinetic = KINETIC_ENERGY_LIMIT - 0.5 * x_state.mass * np.dot(x_state.vel, x_state.vel)
    
    # Invariant barrier condition: dh/dt + gamma(h) >= 0
    assert h_collision >= 0.0, "FATAL: Proximity buffer breached"
    assert h_torque >= 0.0, "FATAL: Joint torque limit exceeded"
    assert h_kinetic >= 0.0, "FATAL: Kinetic energy exceeds safe cobot rating"
    return CertificationToken(status="PASS_CERTIFIED_SAFE", hash="0x8f72a1e0")`
        },
        '4': {
            number: '04',
            title: 'Step 04: Real-Time Hardware Dispatch & Watchdog',
            desc: 'Transmits cryptographic certification token and 500Hz setpoints over EtherCAT / CANopen.',
            format: 'Real-Time Hardware Dispatch Bus',
            filename: 'pipeline/deploy/bus_dispatch.log',
            code: `[00:00:00.002] BUS_INIT: Synchronized EtherCAT Master (1000us cycle time)
[00:00:00.004] TOKEN_VERIFY: Hash 0x8f72a1e0 [MATCHED_DETERMINISTIC_PROOF]
[00:00:00.006] MOTOR_COMM: Node 0x01 UR10e_Joint1 -> POS=0.421rad TORQUE=12.1Nm [OK]
[00:00:00.008] MOTOR_COMM: Node 0x02 UR10e_Joint2 -> POS=-0.892rad TORQUE=18.4Nm [OK]
[00:00:00.010] WATCHDOG_TELEMETRY: Drift=±0.001mm | Dynamic Margin=100% | Safety Relay=CLOSED`
        }
    };

    // Web Audio Synthesizer for high-tech interaction sound effects
    let audioEnabled = false;
    let audioCtx = null;

    const playSciFiTone = (freq = 880, duration = 0.06, type = 'sine') => {
        if (!audioEnabled) return;
        try {
            if (!audioCtx) {
                audioCtx = new (window.AudioContext || window.webkitAudioContext)();
            }
            if (audioCtx.state === 'suspended') {
                audioCtx.resume();
            }
            const osc = audioCtx.createOscillator();
            const gain = audioCtx.createGain();
            osc.type = type;
            osc.frequency.setValueAtTime(freq, audioCtx.currentTime);
            gain.gain.setValueAtTime(0.04, audioCtx.currentTime);
            gain.gain.exponentialRampToValueAtTime(0.0001, audioCtx.currentTime + duration);
            osc.connect(gain);
            gain.connect(audioCtx.destination);
            osc.start();
            osc.stop(audioCtx.currentTime + duration);
        } catch(e) {}
    };

    const audioToggleBtn = document.getElementById('btn-audio-toggle');
    const audioIconOn = document.getElementById('audio-icon-on');
    const audioIconOff = document.getElementById('audio-icon-off');
    if (audioToggleBtn) {
        audioToggleBtn.addEventListener('click', () => {
            audioEnabled = !audioEnabled;
            if (audioEnabled) {
                if (audioIconOn) audioIconOn.classList.remove('hidden');
                if (audioIconOff) audioIconOff.classList.add('hidden');
                playSciFiTone(880, 0.1);
            } else {
                if (audioIconOn) audioIconOn.classList.add('hidden');
                if (audioIconOff) audioIconOff.classList.remove('hidden');
            }
        });
    }

    if (stepTabButtons.length && stepNumberEl && stepTitleEl && stepDescEl && stepFormatEl && stepFilenameEl && stepCodeEl) {
        stepTabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const stepKey = btn.getAttribute('data-step-tab');
                const data = stepData[stepKey];
                if (!data) return;

                stepTabButtons.forEach(b => {
                    const num = b.querySelector('.step-num');
                    const tag = b.querySelector('.step-active-tag');
                    b.classList.remove('border-cyan-400', 'shadow-lg', 'shadow-cyan-500/10');
                    b.classList.add('border-slate-800');
                    if (num) {
                        num.classList.remove('text-cyan-400');
                        num.classList.add('text-slate-400');
                    }
                    if (tag) tag.classList.add('hidden');
                });

                btn.classList.add('border-cyan-400', 'shadow-lg', 'shadow-cyan-500/10');
                btn.classList.remove('border-slate-800');
                const activeNum = btn.querySelector('.step-num');
                const activeTag = btn.querySelector('.step-active-tag');
                if (activeNum) {
                    activeNum.classList.add('text-cyan-400');
                    activeNum.classList.remove('text-slate-400');
                }
                if (activeTag) activeTag.classList.remove('hidden');

                stepNumberEl.textContent = data.number;
                stepTitleEl.textContent = data.title;
                stepDescEl.textContent = data.desc;
                stepFormatEl.textContent = data.format;
                stepFilenameEl.textContent = data.filename;
                stepCodeEl.textContent = data.code;

                playSciFiTone(440 + parseInt(stepKey) * 110, 0.06);
            });
        });

        if (stepCopyBtn && stepCopyText) {
            stepCopyBtn.addEventListener('click', () => {
                navigator.clipboard.writeText(stepCodeEl.textContent).then(() => {
                    stepCopyText.textContent = 'Copied!';
                    playSciFiTone(1200, 0.08);
                    setTimeout(() => { stepCopyText.textContent = 'Copy Code'; }, 2000);
                });
            });
        }
    }

    // ==========================================
    // 5. Interactive Kinematic Trajectory & Safety Envelope Canvas Simulator
    // ==========================================
    const canvas = document.getElementById('kinematic-canvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        const robotSelectorBtns = document.querySelectorAll('[data-canvas-robot]');
        const promptInput = document.getElementById('canvas-prompt-input');
        const presetChips = document.querySelectorAll('[data-prompt-preset]');
        const sliderSpeed = document.getElementById('slider-speed');
        const sliderPayload = document.getElementById('slider-payload');
        const sliderBuffer = document.getElementById('slider-buffer');
        const sliderSpeedVal = document.getElementById('slider-speed-val');
        const sliderPayloadVal = document.getElementById('slider-payload-val');
        const sliderBufferVal = document.getElementById('slider-buffer-val');
        const btnInjectObstacle = document.getElementById('btn-inject-obstacle');
        const btnInjectObstacleText = document.getElementById('btn-inject-obstacle-text');
        const btnRunSim = document.getElementById('btn-run-sim');
        const statusBadge = document.getElementById('canvas-status-badge');
        const statusDot = document.getElementById('canvas-status-dot');
        const hudLatency = document.getElementById('canvas-hud-latency');
        const hudEnergy = document.getElementById('canvas-hud-energy');
        const coordsDisplay = document.getElementById('canvas-coords');
        const dangerBanner = document.getElementById('canvas-danger-banner');
        const dangerMsg = document.getElementById('canvas-danger-msg');
        const mathCbf = document.getElementById('math-cbf');
        const mathTorque = document.getElementById('math-torque');

        let currentRobot = 'arm'; // 'arm', 'drone', 'amr'
        let hasObstacle = false;
        let speed = 1.2;
        let payload = 8.0;
        let bufferDistance = 0.8;
        let isUnsafe = false;

        // Simulation physics variables
        let width = canvas.clientWidth;
        let height = canvas.clientHeight;
        let targetX = width * 0.72;
        let targetY = height * 0.45;
        let currentX = width * 0.25;
        let currentY = height * 0.75;
        let obstacleX = width * 0.52;
        let obstacleY = height * 0.52;
        let obstacleRadius = 38;
        let armAngle1 = -Math.PI / 4;
        let armAngle2 = Math.PI / 3;
        let droneAngle = 0;
        let lidarAngle = 0;
        let particles = [];

        const resizeCanvas = () => {
            const rect = canvas.getBoundingClientRect();
            const dpr = window.devicePixelRatio || 1;
            canvas.width = rect.width * dpr;
            canvas.height = rect.height * dpr;
            ctx.scale(dpr, dpr);
            width = rect.width;
            height = rect.height;
            targetX = width * 0.72;
            targetY = height * 0.45;
            obstacleX = width * 0.52;
            obstacleY = height * 0.52;
        };

        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        // Particles for trajectory trail
        const initParticles = () => {
            particles = [];
            for (let i = 0; i < 20; i++) {
                particles.push({
                    t: i / 20,
                    speed: 0.005 + Math.random() * 0.005
                });
            }
        };
        initParticles();

        // Evaluate Safety Invariant
        const evaluateSafety = () => {
            const dx = targetX - obstacleX;
            const dy = targetY - obstacleY;
            const distToObstacle = Math.sqrt(dx * dx + dy * dy);
            const dynamicThreshold = obstacleRadius + (bufferDistance * 45);

            // Kinetic energy: 0.5 * m * v^2
            const energy = 0.5 * payload * Math.pow(speed, 2);
            if (hudEnergy) hudEnergy.textContent = `${energy.toFixed(2)} J`;

            // Latency simulation (2.1ms - 3.4ms)
            const latency = (1.9 + Math.random() * 0.5).toFixed(1);
            if (hudLatency) hudLatency.textContent = `${latency}ms`;

            // Unsafe conditions: obstacle breach OR excess speed/payload
            if (hasObstacle && distToObstacle < dynamicThreshold) {
                isUnsafe = true;
                if (statusBadge) {
                    statusBadge.textContent = 'BARRIER ALERT: COLLISION HAZARD CLAMPED';
                    statusBadge.className = 'font-bold text-red-400 uppercase tracking-wider';
                }
                if (statusDot) statusDot.className = 'w-2.5 h-2.5 rounded-full bg-red-400 animate-ping';
                if (dangerBanner) {
                    dangerBanner.classList.remove('hidden');
                    if (dangerMsg) dangerMsg.textContent = `Proximity margin violated (${distToObstacle.toFixed(1)}px < ${dynamicThreshold.toFixed(1)}px). Velocity damped to zero in 2.4ms.`;
                }
                if (mathCbf) {
                    mathCbf.innerHTML = 'h(x) &lt; 0 <span class="text-red-400 font-bold">[-0.218 &lt; 0 BREACHED — BRAKE ENGAGED]</span>';
                }
                playSciFiTone(220, 0.12, 'sawtooth');
            } else if (speed > 2.8 || payload > 28) {
                isUnsafe = true;
                if (statusBadge) {
                    statusBadge.textContent = 'BARRIER ALERT: KINEMATIC TORQUE LIMIT';
                    statusBadge.className = 'font-bold text-amber-400 uppercase tracking-wider';
                }
                if (statusDot) statusDot.className = 'w-2.5 h-2.5 rounded-full bg-amber-400 animate-pulse';
                if (dangerBanner) {
                    dangerBanner.classList.remove('hidden');
                    if (dangerMsg) dangerMsg.textContent = `Payload / velocity torque envelope exceeds safety ceiling. Actuator clamped to safe limit.`;
                }
                if (mathTorque) {
                    mathTorque.innerHTML = `&tau;_applied &gt; &tau;_max <span class="text-amber-400 font-bold">(${(payload * speed * 0.95).toFixed(1)} Nm &gt; 45.0 Nm)</span>`;
                }
            } else {
                isUnsafe = false;
                if (statusBadge) {
                    statusBadge.textContent = 'BARRIER: VERIFIED [SAFE]';
                    statusBadge.className = 'font-bold text-emerald-400 uppercase tracking-wider';
                }
                if (statusDot) statusDot.className = 'w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse';
                if (dangerBanner) dangerBanner.classList.add('hidden');
                if (mathCbf) {
                    mathCbf.innerHTML = 'h(x) = &nabla;h &bull; f(x) &ge; -&gamma;(h) <span class="text-emerald-400 font-bold">[+0.482 &ge; 0 HOLDS]</span>';
                }
                if (mathTorque) {
                    mathTorque.innerHTML = `&tau;_applied &lt; &tau;_max (${(payload * speed * 0.35).toFixed(1)} Nm / 45.0 Nm)`;
                }
            }
        };

        // Slider events
        if (sliderSpeed && sliderSpeedVal) {
            sliderSpeed.addEventListener('input', () => {
                speed = parseFloat(sliderSpeed.value);
                sliderSpeedVal.textContent = `${speed.toFixed(1)} m/s`;
                evaluateSafety();
            });
        }
        if (sliderPayload && sliderPayloadVal) {
            sliderPayload.addEventListener('input', () => {
                payload = parseFloat(sliderPayload.value);
                sliderPayloadVal.textContent = `${payload.toFixed(1)} kg`;
                evaluateSafety();
            });
        }
        if (sliderBuffer && sliderBufferVal) {
            sliderBuffer.addEventListener('input', () => {
                bufferDistance = parseFloat(sliderBuffer.value);
                sliderBufferVal.textContent = `${bufferDistance.toFixed(2)} m`;
                evaluateSafety();
            });
        }

        // Toggle obstacle button
        if (btnInjectObstacle && btnInjectObstacleText) {
            btnInjectObstacle.addEventListener('click', () => {
                hasObstacle = !hasObstacle;
                if (hasObstacle) {
                    btnInjectObstacle.classList.add('bg-amber-500/30', 'border-amber-400');
                    btnInjectObstacleText.textContent = 'Remove Hazard';
                } else {
                    btnInjectObstacle.classList.remove('bg-amber-500/30', 'border-amber-400');
                    btnInjectObstacleText.textContent = 'Inject Path Hazard';
                }
                evaluateSafety();
                playSciFiTone(hasObstacle ? 587 : 784, 0.08);
            });
        }

        // Run Verification trigger
        if (btnRunSim) {
            btnRunSim.addEventListener('click', () => {
                evaluateSafety();
                playSciFiTone(988, 0.12);
            });
        }

        // Robot mode switcher
        robotSelectorBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                currentRobot = btn.getAttribute('data-canvas-robot');
                robotSelectorBtns.forEach(b => {
                    b.classList.remove('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300', 'shadow-md', 'shadow-cyan-500/20');
                    b.classList.add('bg-slate-900', 'border-slate-700', 'text-slate-400');
                });
                btn.classList.add('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300', 'shadow-md', 'shadow-cyan-500/20');
                btn.classList.remove('bg-slate-900', 'border-slate-700', 'text-slate-400');
                evaluateSafety();
                playSciFiTone(659, 0.08);
            });
        });

        // Prompt presets
        presetChips.forEach(chip => {
            chip.addEventListener('click', () => {
                const text = chip.getAttribute('data-prompt-preset');
                if (promptInput) promptInput.value = text;
                evaluateSafety();
                playSciFiTone(880, 0.08);
            });
        });

        // Canvas interactive mouse / touch drag
        let isDragging = false;
        const updateWaypoint = (clientX, clientY) => {
            const rect = canvas.getBoundingClientRect();
            targetX = Math.max(40, Math.min(width - 40, clientX - rect.left));
            targetY = Math.max(40, Math.min(height - 40, clientY - rect.top));
            if (coordsDisplay) {
                const normX = ((targetX / width) * 2 - 1).toFixed(3);
                const normY = ((1 - (targetY / height) * 2)).toFixed(3);
                coordsDisplay.textContent = `X: ${normX > 0 ? '+' : ''}${normX} Y: ${normY > 0 ? '+' : ''}${normY} Z: +0.110`;
            }
            evaluateSafety();
        };

        canvas.addEventListener('mousedown', (e) => {
            isDragging = true;
            updateWaypoint(e.clientX, e.clientY);
        });
        window.addEventListener('mousemove', (e) => {
            if (isDragging) updateWaypoint(e.clientX, e.clientY);
        });
        window.addEventListener('mouseup', () => {
            isDragging = false;
        });

        canvas.addEventListener('touchstart', (e) => {
            if (e.touches.length > 0) {
                updateWaypoint(e.touches[0].clientX, e.touches[0].clientY);
            }
        }, { passive: true });
        canvas.addEventListener('touchmove', (e) => {
            if (e.touches.length > 0) {
                updateWaypoint(e.touches[0].clientX, e.touches[0].clientY);
            }
        }, { passive: true });

        // Animation Loop
        const render = () => {
            ctx.clearRect(0, 0, width, height);

            // 1. Futuristic Grid
            ctx.strokeStyle = 'rgba(15, 23, 42, 0.8)';
            ctx.lineWidth = 1;
            const gridSize = 32;
            for (let x = 0; x < width; x += gridSize) {
                ctx.beginPath();
                ctx.moveTo(x, 0);
                ctx.lineTo(x, height);
                ctx.stroke();
            }
            for (let y = 0; y < height; y += gridSize) {
                ctx.beginPath();
                ctx.moveTo(0, y);
                ctx.lineTo(width, y);
                ctx.stroke();
            }

            // 2. Obstacle & Safety Buffer Halo
            if (hasObstacle) {
                const bufferHalo = obstacleRadius + (bufferDistance * 45);

                // Halo gradient
                const haloGrad = ctx.createRadialGradient(obstacleX, obstacleY, obstacleRadius, obstacleX, obstacleY, bufferHalo);
                haloGrad.addColorStop(0, isUnsafe ? 'rgba(239, 68, 68, 0.45)' : 'rgba(245, 158, 11, 0.25)');
                haloGrad.addColorStop(1, 'rgba(245, 158, 11, 0)');
                ctx.fillStyle = haloGrad;
                ctx.beginPath();
                ctx.arc(obstacleX, obstacleY, bufferHalo, 0, Math.PI * 2);
                ctx.fill();

                // Buffer boundary line (dashed)
                ctx.setLineDash([5, 5]);
                ctx.strokeStyle = isUnsafe ? 'rgba(239, 68, 68, 0.8)' : 'rgba(245, 158, 11, 0.6)';
                ctx.lineWidth = 1.5;
                ctx.beginPath();
                ctx.arc(obstacleX, obstacleY, bufferHalo, 0, Math.PI * 2);
                ctx.stroke();
                ctx.setLineDash([]);

                // Solid Obstacle Core
                ctx.fillStyle = isUnsafe ? '#991b1b' : '#b45309';
                ctx.beginPath();
                ctx.arc(obstacleX, obstacleY, obstacleRadius, 0, Math.PI * 2);
                ctx.fill();
                ctx.strokeStyle = isUnsafe ? '#f87171' : '#fcd34d';
                ctx.lineWidth = 2;
                ctx.stroke();

                // Warning Icon / Text in Core
                ctx.fillStyle = '#ffffff';
                ctx.font = 'bold 11px monospace';
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                ctx.fillText('HAZARD', obstacleX, obstacleY);
            }

            // 3. Trajectory Spline from Robot to Target
            ctx.strokeStyle = isUnsafe ? 'rgba(239, 68, 68, 0.8)' : 'rgba(6, 182, 212, 0.6)';
            ctx.lineWidth = 2;
            ctx.setLineDash([4, 4]);
            ctx.beginPath();
            ctx.moveTo(currentX, currentY);
            
            // If obstacle present, curve spline around obstacle
            let cpX = (currentX + targetX) / 2;
            let cpY = (currentY + targetY) / 2;
            if (hasObstacle) {
                cpY -= 65;
            }
            ctx.quadraticCurveTo(cpX, cpY, targetX, targetY);
            ctx.stroke();
            ctx.setLineDash([]);

            // Trajectory Particle Flow
            particles.forEach(p => {
                p.t = (p.t + p.speed * (isUnsafe ? 0.2 : speed)) % 1;
                const invT = 1 - p.t;
                const px = invT * invT * currentX + 2 * invT * p.t * cpX + p.t * p.t * targetX;
                const py = invT * invT * currentY + 2 * invT * p.t * cpY + p.t * p.t * targetY;

                ctx.fillStyle = isUnsafe ? '#f87171' : '#38bdf8';
                ctx.beginPath();
                ctx.arc(px, py, 2.5, 0, Math.PI * 2);
                ctx.fill();
            });

            // 4. Target Waypoint Reticle
            ctx.strokeStyle = isUnsafe ? '#f87171' : '#34d399';
            ctx.lineWidth = 2;
            ctx.beginPath();
            ctx.arc(targetX, targetY, 14, 0, Math.PI * 2);
            ctx.stroke();

            // Crosshair
            ctx.beginPath();
            ctx.moveTo(targetX - 20, targetY);
            ctx.lineTo(targetX + 20, targetY);
            ctx.moveTo(targetX, targetY - 20);
            ctx.lineTo(targetX, targetY + 20);
            ctx.stroke();

            // Target Text
            ctx.fillStyle = isUnsafe ? '#fca5a5' : '#6ee7b7';
            ctx.font = '10px monospace';
            ctx.textAlign = 'left';
            ctx.fillText('WP-TARGET', targetX + 18, targetY - 10);

            // 5. Draw Robot Model
            if (currentRobot === 'arm') {
                const baseX = width * 0.2;
                const baseY = height * 0.82;
                currentX = baseX;
                currentY = baseY;

                // Base mount
                ctx.fillStyle = '#1e293b';
                ctx.strokeStyle = '#06b6d4';
                ctx.lineWidth = 2;
                ctx.beginPath();
                ctx.rect(baseX - 25, baseY - 12, 50, 24);
                ctx.fill();
                ctx.stroke();

                // Two-link kinematics solver
                const L1 = height * 0.38;
                const L2 = height * 0.32;
                const targetDist = Math.hypot(targetX - baseX, targetY - baseY);
                const clampedDist = Math.min(L1 + L2 - 10, Math.max(50, targetDist));
                const baseAngle = Math.atan2(targetY - baseY, targetX - baseX);
                const cosQ2 = (clampedDist * clampedDist - L1 * L1 - L2 * L2) / (2 * L1 * L2);
                const sinQ2 = Math.sqrt(Math.max(0, 1 - cosQ2 * cosQ2));
                const q2 = Math.atan2(sinQ2, cosQ2);
                const q1 = baseAngle - Math.atan2(L2 * sinQ2, L1 + L2 * cosQ2);

                const elbowX = baseX + L1 * Math.cos(q1);
                const elbowY = baseY + L1 * Math.sin(q1);
                const wristX = elbowX + L2 * Math.cos(q1 + q2);
                const wristY = elbowY + L2 * Math.sin(q1 + q2);

                // Arm Link 1
                ctx.strokeStyle = isUnsafe ? '#991b1b' : '#0e7490';
                ctx.lineWidth = 14;
                ctx.lineCap = 'round';
                ctx.beginPath();
                ctx.moveTo(baseX, baseY);
                ctx.lineTo(elbowX, elbowY);
                ctx.stroke();

                // Arm Link 2
                ctx.strokeStyle = isUnsafe ? '#7f1d1d' : '#155e75';
                ctx.lineWidth = 10;
                ctx.beginPath();
                ctx.moveTo(elbowX, elbowY);
                ctx.lineTo(wristX, wristY);
                ctx.stroke();

                // Joints
                ctx.fillStyle = isUnsafe ? '#ef4444' : '#22d3ee';
                [baseX, elbowX, wristX].forEach((jx, idx) => {
                    const jy = [baseY, elbowY, wristY][idx];
                    ctx.beginPath();
                    ctx.arc(jx, jy, 6, 0, Math.PI * 2);
                    ctx.fill();
                });

                // Laser Tool Beam from wrist to target
                ctx.strokeStyle = isUnsafe ? 'rgba(239, 68, 68, 0.8)' : 'rgba(52, 211, 153, 0.85)';
                ctx.lineWidth = 1.5;
                ctx.beginPath();
                ctx.moveTo(wristX, wristY);
                ctx.lineTo(targetX, targetY);
                ctx.stroke();

            } else if (currentRobot === 'drone') {
                // Drone model
                currentX += (targetX - currentX) * 0.04 * (isUnsafe ? 0.2 : speed);
                currentY += (targetY - currentY) * 0.04 * (isUnsafe ? 0.2 : speed);
                droneAngle += 0.25;

                ctx.save();
                ctx.translate(currentX, currentY);

                // Drone Body
                ctx.fillStyle = '#0f172a';
                ctx.strokeStyle = isUnsafe ? '#ef4444' : '#06b6d4';
                ctx.lineWidth = 2;
                ctx.beginPath();
                ctx.arc(0, 0, 16, 0, Math.PI * 2);
                ctx.fill();
                ctx.stroke();

                // 4 Rotor Arms
                const armOffsets = [[-24, -24], [24, -24], [-24, 24], [24, 24]];
                armOffsets.forEach(pos => {
                    ctx.strokeStyle = '#475569';
                    ctx.lineWidth = 3;
                    ctx.beginPath();
                    ctx.moveTo(0, 0);
                    ctx.lineTo(pos[0], pos[1]);
                    ctx.stroke();

                    // Spinning Propeller
                    ctx.strokeStyle = isUnsafe ? '#f87171' : '#38bdf8';
                    ctx.lineWidth = 1.5;
                    ctx.beginPath();
                    ctx.arc(pos[0], pos[1], 10, droneAngle, droneAngle + Math.PI);
                    ctx.stroke();
                });

                ctx.restore();

            } else if (currentRobot === 'amr') {
                // Mobile AMR Rover model
                currentX += (targetX - currentX) * 0.03 * (isUnsafe ? 0.2 : speed);
                currentY += (targetY - currentY) * 0.03 * (isUnsafe ? 0.2 : speed);
                lidarAngle += 0.08;

                ctx.save();
                ctx.translate(currentX, currentY);

                // Rover Body
                ctx.fillStyle = '#1e293b';
                ctx.strokeStyle = isUnsafe ? '#ef4444' : '#06b6d4';
                ctx.lineWidth = 2;
                ctx.beginPath();
                ctx.roundRect(-30, -20, 60, 40, 8);
                ctx.fill();
                ctx.stroke();

                // LiDAR Ray Sweep
                ctx.strokeStyle = 'rgba(6, 182, 212, 0.4)';
                ctx.lineWidth = 1;
                ctx.beginPath();
                ctx.moveTo(0, 0);
                ctx.lineTo(Math.cos(lidarAngle) * 55, Math.sin(lidarAngle) * 55);
                ctx.stroke();

                ctx.restore();
            }

            requestAnimationFrame(render);
        };
        requestAnimationFrame(render);
    }

    // ==========================================
    // 6. Interactive Fleet Safety & ROI Impact Calculator
    // ==========================================
    const fleetSlider = document.getElementById('roi-fleet-slider');
    const fleetDisplay = document.getElementById('roi-fleet-display');
    const changesSlider = document.getElementById('roi-changes-slider');
    const changesDisplay = document.getElementById('roi-changes-display');
    const rateSlider = document.getElementById('roi-rate-slider');
    const rateDisplay = document.getElementById('roi-rate-display');
    const shiftButtons = document.querySelectorAll('[data-shift-btn]');

    const annualSavingsEl = document.getElementById('roi-annual-savings');
    const hoursSavedEl = document.getElementById('roi-hours-saved');
    const speedupEl = document.getElementById('roi-speedup');
    const paybackEl = document.getElementById('roi-payback');

    if (fleetSlider && changesSlider && rateSlider && annualSavingsEl) {
        let fleetCount = 25;
        let shiftMultiplier = 1.5; // 2 shifts default
        let changesPerMonth = 18;
        let hourlyRate = 125;

        const updateROI = () => {
            // Hours saved: Traditional teaching/recoding takes ~12h per change, Volant verified plain language takes ~0.5h
            // Hours saved/mo = fleet * (changes/month * 0.4) * (11.5) * shiftMultiplier
            const monthlyHours = Math.round(fleetCount * (changesPerMonth * 0.15) * 11.5 * (shiftMultiplier / 1.5));
            const annualSavings = monthlyHours * hourlyRate * 12;
            const speedupPercent = Math.min(94, Math.round(82 + (changesPerMonth / 60) * 11));
            const paybackMonths = Math.max(0.8, (2.6 - (fleetCount / 250) * 1.5)).toFixed(1);

            if (fleetDisplay) fleetDisplay.textContent = `${fleetCount} Robots`;
            if (changesDisplay) changesDisplay.textContent = `${changesPerMonth} missions`;
            if (rateDisplay) rateDisplay.textContent = `$${hourlyRate} / hr`;

            if (annualSavingsEl) {
                annualSavingsEl.textContent = `$${annualSavings.toLocaleString()}`;
            }
            if (hoursSavedEl) {
                hoursSavedEl.textContent = `${monthlyHours.toLocaleString()} hrs`;
            }
            if (speedupEl) {
                speedupEl.textContent = `${speedupPercent}%`;
            }
            if (paybackEl) {
                paybackEl.textContent = `< ${paybackMonths} Months`;
            }
        };

        fleetSlider.addEventListener('input', () => {
            fleetCount = parseInt(fleetSlider.value, 10);
            updateROI();
        });

        changesSlider.addEventListener('input', () => {
            changesPerMonth = parseInt(changesSlider.value, 10);
            updateROI();
        });

        rateSlider.addEventListener('input', () => {
            hourlyRate = parseInt(rateSlider.value, 10);
            updateROI();
        });

        shiftButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const shift = btn.getAttribute('data-shift-btn');
                shiftMultiplier = shift === '1' ? 1.0 : (shift === '2' ? 1.5 : 2.2);

                shiftButtons.forEach(b => {
                    b.classList.remove('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300', 'shadow-md', 'shadow-cyan-500/10', 'font-bold');
                    b.classList.add('bg-slate-900', 'border-slate-700', 'text-slate-400');
                });
                btn.classList.add('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300', 'shadow-md', 'shadow-cyan-500/10', 'font-bold');
                btn.classList.remove('bg-slate-900', 'border-slate-700', 'text-slate-400');

                updateROI();
                playSciFiTone(523, 0.06);
            });
        });

        updateROI();
    }
});
