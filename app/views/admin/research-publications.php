    <div class="container">
        <div class="row">
            <!-- Left Column - Research Publications Form -->
            <div class="col-lg-8">
                <div class="card p-4">
                    <h4 class="page-title">Research and Publications</h4>

                    <div class="research-form">
                        <h5 style="color: #0f703d; margin-bottom: 20px;">Research and Publications</h5>

                        <div class="publication-entry">
                            <div class="mb-3">
                                <label for="title1" class="form-label">Title of Article/Paper:</label>
                                <input type="text" class="form-control" id="title1"
                                    value="Predicting Teaching Effectiveness of University Faculty using Multiple Linear Regression">
                            </div>

                            <div class="mb-3">
                                <label for="journal1" class="form-label">Name of Journal/Publisher:</label>
                                <input type="text" class="form-control" id="journal1"
                                    value="15th International Conference on Humanoid, Nanotechnology, Information Technology, Communication and Control, Environment, and Management (HNICEM 2023) I">
                            </div>

                            <div class="mb-3">
                                <label for="date1" class="form-label">Date of Publication:</label>
                                <input type="text" class="form-control" id="date1" value="November 20, 2011">
                            </div>
                        </div>

                        <div class="publication-entry">
                            <div class="mb-3">
                                <label for="title2" class="form-label">Title of Article/Paper:</label>
                                <input type="text" class="form-control" id="title2"
                                    value="Evaluating the Effectiveness of University and Local Government Unit Collaboration in Community-based Development Programs">
                            </div>

                            <div class="mb-3">
                                <label for="journal2" class="form-label">Name of Journal/Publisher:</label>
                                <input type="text" class="form-control" id="journal2"
                                    value="15th International Conference on Humanoid, Nanotechnology, Information Technology, Communication and Control, Environment, and Management (HNICEM 2023) I">
                            </div>

                            <div class="mb-3">
                                <label for="date2" class="form-label">Date of Publication:</label>
                                <input type="text" class="form-control" id="date2" value="November 20, 2011">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Navigation Menu and Profiles -->
            <div class="col-lg-4">
                <!-- Navigation Menu -->
                <div class="card p-4 mb-4">
                    <div class="nav-menu">
                        <a href="/admin/account">Create New Account</a>
                        <a href="/admin/account/information">Professor Information</a>
                        <a href="/admin/account/licenses">Professional Licenses</a>
                        <a href="/admin/account/research" id="active-sidebar">Research and Publications</a>
                        <a href="/admin/account/security">Account Security</a>
                    </div>
                </div>

                <!-- Profile Cards -->
                <div class="card p-4">
                    <div class="profiles-container">
                        <div class="profile-card">
                            <div class="profile-image">
                                <img src="../../../assets/images/profile-placeholder.jfif" alt="Profile">
                            </div>
                            <div class="profile-info">
                                <p class="name">Anna Charisma De Chavez</p>
                                <p class="position">Associate Professor</p>
                            </div>
                        </div>

                        <div class="profile-card">
                            <div class="profile-image">
                                <img src="../../../assets/images/profile-placeholder.jfif" alt="Profile">
                            </div>
                            <div class="profile-info">
                                <p class="name">Edgardo Cruz</p>
                                <p class="position">Pending Position</p>
                            </div>
                        </div>

                        <div class="profile-card">
                            <div class="profile-image">
                                <img src="../../../assets/images/profile-placeholder.jfif" alt="Profile">
                            </div>
                            <div class="profile-info">
                                <p class="name">Anna Charisma De Chavez</p>
                                <p class="position">Associate Professor</p>
                            </div>
                        </div>

                        <div class="profile-card">
                            <div class="profile-image">
                                <img src="../../../assets/images/profile-placeholder.jfif" alt="Profile">
                            </div>
                            <div class="profile-info">
                                <p class="name">Edgardo Cruz</p>
                                <p class="position">Pending Position</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        nav {
            background-color: var(--clr-Green);
        }

        .container {
            margin-top: 10%;
        }

        .nav-menu {
            display: flex;
            flex-direction: column;

            gap: 1rem;

        }

        .nav-menu a {
            color: var(--clr-Green);
            font-family: var(--ff-Metropolis);
            font-size: 1.125rem;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            text-decoration: none;
        }

        .card {
            border: 1px solid #008040;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            background-color: white;
        }

        .page-title {
            color: #0f703d;
            font-weight: bold;
            border-bottom: 1px solid #0f703d;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .form-label {
            color: #0f703d;
            font-weight: 500;
            display: block;
            margin-bottom: 5px;
        }

        .form-control {
            border: 1px solid #0f703d;
            border-radius: 4px;
            margin-bottom: 15px;
            width: 100%;
            padding: 8px;
        }

        .publication-entry {
            margin-bottom: 25px;
        }

        .profiles-container {
            max-height: 350px;
            overflow-y: auto;
        }

        .profile-card {
            background-color: #e9f2fa;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .profile-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 15px;
            overflow: hidden;
            background-color: #ccc;
        }

        .profile-info .name {
            color: #0f703d;
            font-weight: 500;
            margin-bottom: 0;
        }

        .profile-info .position {
            font-size: 14px;
            color: #495057;
            margin-bottom: 0;
        }
    </style>