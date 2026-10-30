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
});
