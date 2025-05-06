    <div class="container mt-4">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-success">Account Security</h5>
                        <hr>

                        <div class="mb-4">
                            <h6>Account</h6>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="username">
                            </div>

                            <div class="mb-3">
                                <label for="oldPassword" class="form-label">Input Old Password:</label>
                                <input type="password" class="form-control" id="oldPassword">
                            </div>

                            <div class="mb-3">
                                <label for="newPassword" class="form-label">Input New Password:</label>
                                <input type="password" class="form-control" id="newPassword">
                            </div>

                            <button class="btn green-btn">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-4">
                <!-- Menu Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <a href="/admin/account" class="sidebar-link">Create New Account</a>
                        <a href="/admin/account/information" class="sidebar-link">Professor Information</a>
                        <a href="/admin/account/licenses" class="sidebar-link">Professional Licenses</a>
                        <a href="/admin/account/research" class="sidebar-link">Research and Publications</a>
                        <a href="/admin/account/security" class="sidebar-link active">Account Security</a>
                    </div>
                </div>

                <!-- Profiles Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="profile-card d-flex align-items-center">
                            <div class="user-img me-3"></div>
                            <div>
                                <strong>Anna Charisma De Chavez</strong><br>
                                <small>Associate Professor</small>
                            </div>
                        </div>

                        <div class="profile-card d-flex align-items-center">
                            <div class="user-img me-3"></div>
                            <div>
                                <strong>Edgardo Cruz</strong><br>
                                <small>Pending Position</small>
                            </div>
                        </div>

                        <div class="profile-card d-flex align-items-center">
                            <div class="user-img me-3"></div>
                            <div>
                                <strong>Anna Charisma De Chavez</strong><br>
                                <small>Associate Professor</small>
                            </div>
                        </div>

                        <div class="profile-card d-flex align-items-center">
                            <div class="user-img me-3"></div>
                            <div>
                                <strong>Edgardo Cruz</strong><br>
                                <small>Pending Position</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        nav {
            background-color: var(--clr-Green) !important;
        }

        .green-btn {
            background-color: #0D6832;
            color: white;
        }

        .profile-card {
            background-color: #f0f8ff;
            border-radius: 10px;
            margin-bottom: 10px;
            padding: 10px;

            color: var(--clr-Green);
            font-family: var(--ff-Proxima);
            font-size: 1.125rem;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }

        small {
            font-weight: 400;
        }

        .container {
            padding-top: 8%;
        }

        .user-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ddd;
        }

        .sidebar-link {
            color: #0D6832;
            text-decoration: none;
            display: block;
            padding: 8px 0;
        }

        .sidebar-link:hover {
            text-decoration: underline;
        }

        .sidebar-link.active {
            font-weight: bold;
        }

        .university-logo {
            height: 40px;
            margin-right: 10px;
        }
    </style>