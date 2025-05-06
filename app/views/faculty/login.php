    <!-- Main Content -->
    <section class="login-section d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row login-container mx-auto">
                <!-- Left Panel -->
                <div class="col-md-5 left-panel d-flex flex-column justify-content-center align-items-center p-4">
                    <img src="assets/images/CCISLogo.png" alt="CCIS Logo" class="mb-4">
                    <div class="welcome-text text-center">
                        Welcome To UMak CCIS Faculty Management Hub
                    </div>
                </div>

                <!-- Right Panel -->
                <div class="col-md-7 right-panel d-flex justify-content-center align-items-center p-4">
                    <div class="login-form-container text-center w-100">
                        <h2 class="welcome-back mb-4">Welcome Professors!</h2>

                        <form id="loginForm">
                            <div class="form-floating mb-3">
                                <input type="text" name="username" class="form-control" id="txtUsername" placeholder="Username" required>
                                <label for="txtUsername">Username</label>
                            </div>

                            <div class="form-floating mb-3 position-relative">
                                <input type="password" name="password" class="form-control" id="txtPassword" placeholder="Password" required>
                                <label for="txtPassword">Password</label>
                                <button type="button" class="btn toggle-password position-absolute end-0 top-50 translate-middle-y me-3" aria-label="Toggle password visibility">
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                            </div>

                            <button type="button" class="btn forgot-password" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">
                                Forgot Password?
                            </button>

                            <div>
                                <button id="submit" type="submit" class="btn btn-login px-4 py-2">Submit</button>
                            </div>

                        </form>
                        <!-- Forgot Password Modal -->
                        <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form id="forgotPasswordForm" method="POST" action="/forgot-password">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="forgotPasswordModalLabel">Forgot Password</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="mb-1">
                                                <label for="forgot-email" class="form-label">Enter your email or username</label>
                                                <input type="text" class="form-control" id="forgot-email" name="email_or_username" required>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Send Reset Link</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Embedded JavaScript -->
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const button = document.getElementById('submit');
            button.disabled = true;

            const elements = ['txtUsername', 'txtPassword'];
            fetchModal('/api/login-faculty', this, button,
                () => updateFormControl(elements, 'success'),
                () => updateFormControl(elements, 'error')
            );
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNav');
            if (window.scrollY > 0) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Toggle password visibility
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('txtPassword');
            const toggleButton = document.querySelector('.toggle-password');

            if (toggleButton && passwordInput) {
                toggleButton.addEventListener('click', function() {
                    // Toggle input type between 'password' and 'text'
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);

                    // Toggle eye icon
                    const icon = toggleButton.querySelector('i');
                    if (type === 'password') {
                        icon.classList.remove('bi-eye-slash-fill');
                        icon.classList.add('bi-eye-fill');
                    } else {
                        icon.classList.remove('bi-eye-fill');
                        icon.classList.add('bi-eye-slash-fill');
                    }
                });
            }
        });
    </script>
    <style>
        /* Custom Variables */
        :root {
            --clr-green: #116A3A;
            --clr-green-dark: #0D4D2B;
            --clr-white: #FCFCFC;
            --ff-metropolis: 'Metropolis', sans-serif;
            --ff-marcellus: 'Marcellus', serif;
        }

        .navbar,
        .navbar-brand {
            padding-block: 0;
        }

        /* Base Styles */
        body,
        html {
            height: 100%;
            font-family: var(--ff-metropolis);
        }

        /* Navbar Styles */
        #mainNav {
            background-color: var(--clr-green);
            transition: background-color 0.3s ease;
        }

        #mainNav.scrolled {
            background-color: var(--clr-green);
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.3);
        }

        .navbar {
            padding-block: 0;
        }

        .navbar-brand img {
            height: 40px;
            width: auto;
        }

        .navbar-brand a {
            color: var(--clr-white);
            font-family: var(--ff-marcellus);
            font-size: 1.5rem;
        }

        .navbar-nav {
            gap: 1rem;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: var(--clr-white);
            padding: 1.5rem 1.5rem;
            transition: background-color 0.3s;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            background-color: var(--clr-green-dark);
        }

        /* Login Section */
        .login-section {
            background-image: url(assets/images/section1-homepage.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .login-container {
            max-width: 1000px;
            height: 500px;
            margin-top: 80px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* Left Panel */
        .left-panel {
            background-color: var(--clr-green);
            border: 2px solid #1D9153;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            color: white;
        }

        .left-panel img {
            width: 50%;
            max-width: 120px;
        }

        .welcome-text {
            font-size: 1.5rem;
            font-weight: 500;
        }

        /* Right Panel */
        .right-panel {
            background-color: var(--clr-white);
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .login-form-container {
            width: 80%;
        }

        .welcome-back {
            color: var(--clr-green);
            font-weight: 700;
            font-size: 2.2rem;
        }

        /* Form Controls */
        .form-control {
            border: 2px solid var(--clr-green);
            color: #000;
        }

        .form-control:focus {
            border-color: var(--clr-green);
            box-shadow: 0 0 0 0.25rem rgba(17, 106, 58, 0.25);
        }

        .form-floating label {
            color: var(--clr-green);
        }

        .toggle-password {
            background: none;
            border: none;
            color: var(--clr-green);
        }

        .toggle-password:focus {
            box-shadow: none;
        }

        .forgot-password {
            color: var(--clr-green);
            text-decoration: none;
            font-size: 1.125rem;
        }

        .forgot-password:hover {
            text-decoration: underline;
            cursor: pointer;
        }

        .btn-login {
            background-color: var(--clr-green);
            color: var(--clr-white);
            font-weight: 600;
            font-size: 1.125rem;
            border: none;
            min-width: 150px;
        }

        .btn-login:hover {
            background-color: var(--clr-green-dark);
            color: var(--clr-white);
        }

        /* Responsive adjustments */
        @media (max-width: 767.98px) {
            .login-container {
                height: auto;
            }

            .left-panel {
                border-top-right-radius: 10px;
                border-bottom-left-radius: 0;
                padding: 2rem !important;
            }

            .right-panel {
                border-top-right-radius: 0;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
                padding: 2rem !important;
            }
        }
    </style>