    <div class="main-content">
        <div class="security-section">
            <h2 class="section-title">Account Security</h2>

            <form>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username">
                </div>

                <div class="form-group">
                    <label for="old-password">Old Password:</label>
                    <input type="password" id="old-password">
                </div>

                <div class="form-group">
                    <label for="new-password">New Password:</label>
                    <input type="password" id="new-password">
                </div>

                <button type="submit" class="save-button">Save</button>
            </form>
        </div>

        <div class="sidebar">
            <a href="/profile" class="menu-item">Professor Information</a>
            <a href="/profile/licenses" class="menu-item">Professional Licenses</a>
            <a href="/profile/research" class="menu-item">Research and Publications</a>
            <a href="/profile/security" class="menu-item active-menu-item">Account Security</a>
        </div>
    </div>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        nav {
            background-color: var(--clr-Green);
        }


        .sidebar a:hover {
            text-decoration: underline;
        }

        .nav-item {
            margin-left: 20px;
            color: white;
            text-decoration: none;
        }

        .main-content {
            padding-top: 8%;

            max-width: 1200px;
            margin: 30px auto;
            display: flex;
            gap: 20px;
        }

        .security-section {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            flex: 2;
            border: 1px solid #e0e0e0;
        }

        .sidebar {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            flex: 1;
            border: 1px solid #e0e0e0;
        }

        .section-title {
            color: #0d6b30;
            margin-top: 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #e0e0e0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .save-button {
            background-color: #0d6b30;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .menu-item {
            color: #0d6b30;
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
        }

        .active-menu-item {
            font-weight: bold;
        }
    </style>