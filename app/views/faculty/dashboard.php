    <div class="container">
        <!-- Welcome Banner -->
        <div class="welcome-banner">
            <h2>Greetings, Professor Roel</h2>
        </div>

        <!-- Stats Row 1 -->
        <div class="row mb-4">
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="stat-card">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-list-check stat-icon fa-lg"></i>
                        <span class="stat-title">Missing Contents</span>
                    </div>
                    <h2 class="stat-number">04</h2>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="stat-card">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-rotate-left stat-icon fa-lg"></i>
                        <span class="stat-title">Returned Details</span>
                    </div>
                    <h2 class="stat-number">2</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pending-actions h-100">
                    <h5 class="mb-3">Pending Actions</h5>
                    <div class="pending-item missing-item">
                        <div>Professional License</div>
                        <div>Missing Contents</div>
                    </div>
                    <div class="pending-item returned-item">
                        <div>Awards and Fellowships</div>
                        <div>Returned Details</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Row 2 -->
        <div class="row mb-4">
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="stat-card">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-file-circle-check stat-icon fa-lg"></i>
                        <span class="stat-title">CHED Requirements</span>
                    </div>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2">
                            <span class="status-circle status-red"></span>
                            Doctoral Incomplete
                        </li>
                        <li class="mb-2">
                            <span class="status-circle status-green"></span>
                            Masteral Complete
                        </li>
                        <li>
                            <span class="status-circle status-green"></span>
                            Professional License
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="stat-card">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-rotate-left stat-icon fa-lg"></i>
                        <span class="stat-title">Returned Details</span>
                    </div>
                    <h2 class="stat-number">2</h2>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>

        <!-- Profile Completion Row -->
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="stat-card d-flex">
                    <div class="me-4">
                        <div class="mb-3">Profile Completion</div>
                        <div class="progress-container">
                            <svg class="progress-circle">
                                <circle class="progress-circle-bg" cx="60" cy="60" r="50"></circle>
                                <circle class="progress-circle-value" cx="60" cy="60" r="50" stroke-dasharray="314" stroke-dashoffset="0"></circle>
                            </svg>
                            <div class="progress-text">100%</div>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h5>Notes:</h5>
                        <div class="notes-content"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Set progress circle value
        document.addEventListener('DOMContentLoaded', function() {
            const circle = document.querySelector('.progress-circle-value');
            const percentage = 100;
            const radius = circle.getAttribute('r');
            const circumference = 2 * Math.PI * radius;

            const offset = circumference - (percentage / 100 * circumference);
            circle.style.strokeDasharray = `${circumference} ${circumference}`;
            circle.style.strokeDashoffset = offset;
        });
    </script>
    <style>
        :root {
            --primary-green: #0d662f;
            --secondary-green: #1a8d46;
            --light-green: #e6f4ea;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .welcome-banner {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .welcome-banner h2 {
            color: var(--primary-green);
            font-weight: 600;
        }

        .stat-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1.5rem;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--primary-green);
            margin-bottom: 0;
        }

        .stat-title {
            font-size: 0.9rem;
            color: var(--primary-green);
            font-weight: 600;
        }

        .stat-icon {
            color: var(--primary-green);
            margin-right: 10px;
        }

        .status-circle {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .status-red {
            background-color: #dc3545;
        }

        .status-green {
            background-color: #198754;
        }

        .container {
            margin-top: 10%;
        }

        .progress-container {
            width: 120px;
            height: 120px;
            position: relative;
        }

        .progress-circle {
            position: relative;
            width: 120px;
            height: 120px;
        }

        .progress-circle-bg {
            fill: none;
            stroke: #e9ecef;
            stroke-width: 10;
        }

        .progress-circle-value {
            fill: none;
            stroke: var(--primary-green);
            stroke-width: 10;
            stroke-linecap: round;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
            transition: stroke-dashoffset 0.3s;
        }

        .progress-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-green);
        }

        nav {
            background-color: var(--clr-Green);
        }

        .pending-actions {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1rem;
            height: 100%;
        }

        .pending-item {
            padding: 1rem;
            margin-bottom: 0.5rem;
            border-radius: 6px;
        }

        .missing-item {
            background-color: #f8d7da;
        }

        .returned-item {
            background-color: #fff3cd;
        }
    </style>