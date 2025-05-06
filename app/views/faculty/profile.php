    <style>
        body {
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .container {
            max-width: 1200px;
            padding-inline: 0;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.125);
        }

        .main-card {
            padding: 20px 30px;
        }

        .sidebar-card {
            padding: 20px;
        }

        .text-success {
            color: #0d6530 !important;
        }

        .profile-img-container {
            width: 210px;
            height: 210px;
            overflow: hidden;
            border-radius: 50%;
            border: 1px solid #e0e0e0;
        }

        .profile-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .form-control {
            border-radius: 4px;
            border: 1px solid #ced4da;
            padding: 6px 12px;
            height: 38px;
        }

        .form-label {
            margin-bottom: 0.25rem;
            font-weight: 500;
        }

        .btn-success {
            background-color: #0d6530;
            border-color: #0d6530;
        }

        .btn-outline-success {
            color: #0d6530;
            border-color: #0d6530;
        }

        .completion-text {
            font-weight: 500;
        }

        hr {
            margin: 10px 0;
            color: #dee2e6;
            opacity: 1;
        }

        .nav-link {
            color: #0d6530;
            padding: 8px 0;
        }

        .nav-link.active {
            font-weight: 600;
        }

        .profile-name {
            margin-top: 15px;
            margin-bottom: 0;
        }

        .profile-title {
            margin-top: 5px;
        }

        /* Adjustments to match the exact layout */
        .profile-section {
            text-align: center;
            margin-right: 20px;
        }

        .form-section {
            flex: 1;
        }

        .sidebar-menu {
            list-style: none;
            padding-left: 0;
        }

        .sidebar-menu li {
            padding: 8px 0;
        }

        .sidebar-menu a {
            text-decoration: none;
            color: #0d6530;
        }

        .sidebar-menu a.active {
            font-weight: 600;
        }

        .progress {
            height: 8px;
            width: 100px;
            margin-left: auto;
        }

        .progress-bar {
            background-color: #0d6530;
        }

        /* Button adjustments */
        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-buttons .btn {
            width: 100px;
            padding: 8px 0;
        }

        .container-margin {
            margin-top: 20vh;
        }

        .container {
            max-width: 1200px;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.125);
            padding: 20px 30px;
        }

        .text-success {
            color: #0d6530 !important;
        }

        .form-control {
            border-radius: 4px;
            border: 1px solid #ced4da;
            padding: 6px 12px;
            height: 38px;
        }

        .form-label {
            margin-bottom: 0.25rem;
            font-weight: 500;
            color: #0d6530;
        }

        .section-title {
            color: #0d6530;
            font-weight: 600;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .btn-success {
            background-color: #0d6530;
            border-color: #0d6530;
            color: white;
        }

        .btn-outline-success {
            color: #0d6530;
            border-color: #0d6530;
        }

        .completion-text {
            font-weight: 500;
        }

        hr {
            margin: 10px 0 20px 0;
            color: #dee2e6;
            opacity: 1;
        }

        .progress {
            height: 8px;
            width: 100px;
            margin-left: auto;
        }

        .progress-bar {
            background-color: #0d6530;
        }

        .status-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .status-input {
            width: 200px;
        }

        .edit-btn {
            width: 80px;
        }

        .add-more-btn {
            color: #0d6530;
            border-color: #0d6530;
            padding: 6px 12px;
            width: 120px;
            margin-bottom: 10px;
        }

        .margin-btm {
            margin-bottom: 5vh;
        }

        .text-success {
            color: #0d6530 !important;
        }

        .form-control {
            border-radius: 4px;
            border: 1px solid #ced4da;
            padding: 6px 12px;
            height: 38px;
        }

        .form-label {
            margin-bottom: 0.25rem;
            font-weight: 500;
            color: #0d6530;
        }

        .section-title {
            color: #0d6530;
            font-weight: 600;
            margin-top: 15px;
            margin-bottom: 20px;
        }

        .btn-success {
            background-color: #0d6530;
            border-color: #0d6530;
            color: white;
        }

        .btn-outline-success {
            color: #0d6530;
            border-color: #0d6530;
        }

        .completion-text {
            font-weight: 500;
        }

        hr {
            margin: 10px 0 20px 0;
            color: #dee2e6;
            opacity: 1;
        }

        .progress {
            height: 8px;
            width: 100px;
            margin-left: auto;
        }

        .progress-bar {
            background-color: #0d6530;
        }

        .edit-btn {
            width: 80px;
        }

        .add-more-btn {
            color: #0d6530;
            border-color: #0d6530;
            padding: 6px 12px;
            width: 120px;
        }

        .experience-block {
            margin-bottom: 20px;
        }

        .experience-row {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .experience-label {
            width: 200px;
            padding-top: 8px;
        }

        .experience-input {
            flex: 1;
        }

        .date-input {
            width: 200px;
        }

        .status-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .status-input {
            width: 150px;
        }

        .award-group {
            margin-bottom: 15px;
        }

        .award-label {
            margin-bottom: 3px;
        }

        .status-approved {
            background-color: white;
            color: #0d6530;
        }

        .status-returned {
            background-color: white;
            color: #dc3545;
        }

        .status-pending {
            background-color: white;
            color: #ffc107;
        }

        .status-missing {
            background-color: white;
            color: #dc3545;
        }

        .main-title {
            color: #0d6530;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .card {
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        .section-title {
            color: #0f6848;
            font-weight: 600;
        }

        .form-label {
            color: #0f6848;
            font-weight: 500;
        }

        .divider {
            border-bottom: 1px solid #0f6848;
            margin-bottom: 20px;
        }

        .btn-save {
            background-color: #0f6848;
            color: white;
        }

        .btn-add {
            color: #0f6848;
            border: 1px solid #0f6848;
        }

        .btn-add:hover {
            background-color: #e8f5e9;
        }

        .btn-remove {
            color: #dc3545;
            font-size: 20px;
            cursor: pointer;
        }
    </style>

    <div class="container container-margin">
        <div class="row g-4">
            <!-- Main Card -->
            <div class="col-lg-8 margin-btm">
                <div class="card main-card">
                    <!-- Header with completion -->
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="text-success m-0">Welcome to Account Settings</h2>
                        <div class="text-end">
                            <span class="completion-text text-success">Completion: 100%</span>
                            <div class="progress mt-2">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- Personal Information -->
                    <div class="row mt-3">
                        <!-- Profile Section -->
                        <div class="col-md-4 profile-section">
                            <div class="profile-img-container">
                                <img src="../../../assets/images/roel-profile.png" alt="Profile Photo">
                            </div>
                            <h4 class="profile-name text-success">Prof. Roel Richard Traballo</h4>
                            <p class="profile-title text-success">MIT, PhD</p>
                        </div>

                        <!-- Form Section -->
                        <div class="col-md-8 form-section">
                            <h3 class="text-success mb-3">Personal Information</h3>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label text-success">First Name:</label>
                                    <input type="text" class="form-control" id="firstName" value="Roel">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label text-success">Last Name:</label>
                                    <input type="text" class="form-control" id="lastName" value="Traballo">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="birthdate" class="form-label text-success">Birthdate:</label>
                                    <input type="text" class="form-control" id="birthdate" value="07/30/2005">
                                </div>
                                <div class="col-md-6">
                                    <label for="age" class="form-label text-success">Age:</label>
                                    <input type="text" class="form-control" id="age" value="33">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="civilStatus" class="form-label text-success">Civil Status:</label>
                                    <input type="text" class="form-control" id="civilStatus" value="Married">
                                </div>
                                <div class="col-md-6">
                                    <label for="gender" class="form-label text-success">Gender:</label>
                                    <input type="text" class="form-control" id="gender" value="Alien">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label text-success">Address:</label>
                                <input type="text" class="form-control" id="address" value="diyan lang sa gedli">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label text-success">Email:</label>
                                <input type="email" class="form-control" id="email" value="rtraballo.k12151234@umak.edu.ph">
                            </div>

                            <div class="action-buttons">
                                <button class="btn btn-success">Save</button>
                                <button class="btn btn-outline-success">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card sidebar-card">
                    <ul class="sidebar-menu">
                        <li><a href="#">Create New Account</a></li>
                        <li><a href="#" class="active">Professor Information</a></li>
                        <li><a href="#">Professional Licenses</a></li>
                        <li><a href="#">Research and Publications</a></li>
                        <li><a href="#">Account Security</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-8 margin-btm">
            <div class="card">
                <!-- Header with completion -->
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="text-success m-0">Academic Information</h2>
                    <div class="text-end">
                        <span class="completion-text text-success">Completion: 100%</span>
                        <div class="progress mt-2">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- Tertiary Level -->
                <h4 class="section-title">Tertiary Level</h4>

                <div class="mb-3">
                    <label class="form-label">Degree Earned:</label>
                    <input type="text" class="form-control" value="MASTER OF SCIENCE IN INFORMATION TECHNOLOGY (MSIT)">
                </div>

                <div class="status-container">
                    <label class="form-label me-2">Status:</label>
                    <input type="text" class="form-control status-input" value="Pending Approval">
                    <button class="btn btn-success edit-btn">Edit</button>
                </div>

                <div class="mb-3">
                    <label class="form-label">Degree Earned:</label>
                    <input type="text" class="form-control" value="MASTER OF SCIENCE IN INFORMATION TECHNOLOGY (MSIT)">
                </div>

                <div class="status-container">
                    <label class="form-label me-2">Status:</label>
                    <input type="text" class="form-control status-input" value="Pending Approval">
                    <button class="btn btn-success edit-btn">Edit</button>
                </div>

                <button class="btn btn-outline-success add-more-btn">+ Add More</button>

                <!-- Secondary Level -->
                <h4 class="section-title">Secondary Level</h4>

                <div class="mb-3">
                    <label class="form-label">Name of University or University:</label>
                    <input type="text" class="form-control" value="POLYTECHNIC UNIVERSITY OF THE PHILIPPINES - STA. MESA">
                </div>

                <!-- Primary Level -->
                <h4 class="section-title">Primary Level</h4>

                <div class="mb-4">
                    <label class="form-label">Name of University or University:</label>
                    <input type="text" class="form-control" value="POLYTECHNIC UNIVERSITY OF THE PHILIPPINES - STA. MESA">
                </div>

                <div>
                    <button class="btn btn-success edit-btn">Edit</button>
                </div>
            </div>
        </div>

        <div class="col-lg-8 margin-btm">
            <div class="card">
                <!-- Header with completion -->
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="text-success m-0">Work Experience</h2>
                    <div class="text-end">
                        <span class="completion-text text-success">Completion: 100%</span>
                        <div class="progress mt-2">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- School Experience -->
                <h4 class="section-title">School Experience</h4>

                <!-- First Experience Block -->
                <div class="experience-block">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Position:</label>
                            <input type="text" class="form-control" value="Associate Professor II">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date Started:</label>
                            <input type="text" class="form-control date-input" value="06/2/2008">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-9">
                            <label class="form-label">Name of University:</label>
                            <input type="text" class="form-control" value="POLYTECHNIC UNIVERSITY OF THE PHILIPPINES - STA. MESA">
                        </div>
                        <div class="col-md-3 d-flex align-items-end justify-content-end">
                            <button class="btn btn-success edit-btn">Edit</button>
                        </div>
                    </div>
                </div>

                <!-- Second Experience Block -->
                <div class="experience-block">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Position:</label>
                            <input type="text" class="form-control" value="Associate Professor II">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date Started:</label>
                            <input type="text" class="form-control date-input" value="06/2/2008">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-9">
                            <label class="form-label">Name of University:</label>
                            <input type="text" class="form-control" value="POLYTECHNIC UNIVERSITY OF THE PHILIPPINES - STA. MESA">
                        </div>
                        <div class="col-md-3 d-flex align-items-end justify-content-end">
                            <button class="btn btn-success edit-btn">Edit</button>
                        </div>
                    </div>
                </div>

                <!-- Add More Button -->
                <div>
                    <button class="btn btn-outline-success add-more-btn">+ Add More</button>
                </div>
            </div>
        </div>
        <div class="col-lg-8 margin-btm">
            <div class="card">
                <!-- Header -->
                <h2 class="main-title">Awards, Fellowships and Scholarships</h2>
                <hr>

                <!-- Awards Section -->
                <h4 class="section-title">Awards</h4>

                <!-- First Award -->
                <div class="award-group">
                    <label class="award-label form-label">Award:</label>
                    <input type="text" class="form-control mb-2" value="Most Outstanding Computing Technology Educator for A.Y. 2022- 2023">

                    <div class="status-container">
                        <label class="form-label me-2">Status:</label>
                        <input type="text" class="form-control status-input status-approved" value="Approved" readonly>
                        <button class="btn btn-success edit-btn">Edit</button>
                    </div>
                </div>

                <!-- Second Award -->
                <div class="award-group">
                    <label class="award-label form-label">Award:</label>
                    <input type="text" class="form-control mb-2" value="Most Outstanding Computing Technology Educator for A.Y. 2022- 2023">

                    <div class="status-container">
                        <label class="form-label me-2">Status:</label>
                        <input type="text" class="form-control status-input status-returned" value="Returned" readonly>
                        <button class="btn btn-success edit-btn">Edit</button>
                    </div>
                </div>

                <!-- Add More Button for Awards -->
                <button class="btn btn-outline-success add-more-btn">+ Add More</button>

                <!-- Fellowships and Scholarships Section -->
                <h4 class="section-title">Fellowships and Scholarships</h4>

                <!-- First Fellowship -->
                <div class="award-group">
                    <label class="award-label form-label">Title:</label>
                    <input type="text" class="form-control mb-2" value="UMak Fellow">

                    <div class="status-container">
                        <label class="form-label me-2">Status:</label>
                        <input type="text" class="form-control status-input status-pending" value="Pending Approval" readonly>
                        <button class="btn btn-success edit-btn">Edit</button>
                    </div>
                </div>

                <!-- Second Fellowship -->
                <div class="award-group">
                    <label class="award-label form-label">Title:</label>
                    <input type="text" class="form-control mb-2" value="UMak Fellow">

                    <div class="status-container">
                        <label class="form-label me-2">Status:</label>
                        <input type="text" class="form-control status-input status-missing" value="Missing Info" readonly>
                        <button class="btn btn-success edit-btn">Edit</button>
                    </div>
                </div>

                <!-- Add More Button for Fellowships -->
                <button class="btn btn-outline-success add-more-btn">+ Add More</button>
            </div>
        </div>
        <div class="col-lg-8 margin-btm">
            <div class="card p-4">
                <h2 class="section-title">Professional Memberships</h2>
                <div class="divider"></div>

                <h3 class="section-title mb-4">Professional Memberships</h3>

                <div id="memberships-container">
                    <!-- Membership Entry 1 -->
                    <div class="membership-entry mb-4 position-relative">
                        <div class="row mb-3">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Position:</label>
                                <input type="text" class="form-control" value="Active Member">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Date Joined:</label>
                                <input type="text" class="form-control" value="06/2/2008">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Until:</label>
                                <input type="text" class="form-control" value="06/2/2009">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label class="form-label">Name of Association/Organization:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="Philippine Society of Information Technology Educators (PSITE)">
                                    <button class="btn btn-save">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Membership Entry 2 -->
                    <div class="membership-entry mb-4 position-relative">
                        <span class="position-absolute top-0 end-0 btn-remove" onclick="this.parentElement.remove()">&times;</span>
                        <div class="row mb-3">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Position:</label>
                                <input type="text" class="form-control" value="Active Member">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Date Joined:</label>
                                <input type="text" class="form-control" value="06/2/2008">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Until:</label>
                                <input type="text" class="form-control" value="06/2/2009">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label class="form-label">Name of Association/Organization:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="Philippine Society of Information Technology Educators (PSITE)">
                                    <button class="btn btn-save">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-add align-self-start" onclick="addNewMembership()">
                    + Add More
                </button>
            </div>
        </div>

        <div class="col-lg-8 margin-btm">
            <div class="card">
                <!-- Header with completion -->
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="text-success m-0">Seminars and Trainings</h2>
                </div>

                <hr>

                <!-- Tertiary Level -->
                <h4 class="section-title">Seminars</h4>

                <div class="mb-3">
                    <label class="form-label">Title:</label>
                    <input type="text" class="form-control" value="DATABASE ONLINE TRAINING">
                </div>

                <div class="status-container">
                    <label class="form-label me-2">Status:</label>
                    <input type="text" class="form-control status-input" value="Approved">
                    <button class="btn btn-success edit-btn">Edit</button>
                </div>

                <div class="mb-3">
                    <label class="form-label">Title:</label>
                    <input type="text" class="form-control" value="MS ITS - Network Security Online Training">
                </div>

                <div class="status-container">
                    <label class="form-label me-2">Status:</label>
                    <input type="text" class="form-control status-input" value="Approved">
                    <button class="btn btn-success edit-btn">Edit</button>
                </div>

                <button class="btn btn-outline-success add-more-btn">+ Add More</button>

            </div>
        </div>

        <script>
            function addNewMembership() {
                const container = document.getElementById('memberships-container');
                const newEntry = document.createElement('div');
                newEntry.className = 'membership-entry mb-4 position-relative';
                newEntry.innerHTML = `
                <span class="position-absolute top-0 end-0 btn-remove" onclick="this.parentElement.remove()">&times;</span>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Position:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Date Joined:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Until:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-12">
                        <label class="form-label">Name of Association/Organization:</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <button class="btn btn-save">Save</button>
                        </div>
                    </div>
                </div>
            `;
                container.appendChild(newEntry);
            }
        </script>
    </div>