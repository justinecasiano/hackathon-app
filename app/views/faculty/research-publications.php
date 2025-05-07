    <div class="container">
        <div class="main-content">
            <h2 class="title">Research and Publications</h2>
            <div class="divider"></div>

            <h3 class="title">Research and Publications</h3>

            <div class="form-group">
                <label for="article1">Title of Article/Paper:</label>
                <input type="text" id="article1" value="Predicting Teaching Effectiveness of University Faculty using Multiple Linear Regression">
            </div>

            <div class="form-group">
                <label for="journal1">Name of Journal/Publisher:</label>
                <input type="text" id="journal1" value="15th International Conference on Humanoid, Nanotechnology, Information Technology, Communication and Control, Environment, and Management (HNICEM 2023)">
            </div>

            <div class="form-group">
                <label for="date1">Date of Publication:</label>
                <input type="text" id="date1" value="November 20, 2011">
            </div>

            <button class="save-btn">Save</button>

            <div class="form-group">
                <label for="article2">Title of Article/Paper:</label>
                <input type="text" id="article2" value="Evaluating the Effectiveness of University and Local Government Unit Collaboration in Community-based Development Programs">
            </div>

            <div class="form-group">
                <label for="journal2">Name of Journal/Publisher:</label>
                <input type="text" id="journal2" value="15th International Conference on Humanoid, Nanotechnology, Information Technology, Communication and Control, Environment, and Management (HNICEM 2023)">
            </div>

            <div class="form-group">
                <label for="date2">Date of Publication:</label>
                <input type="text" id="date2" value="November 20, 2011">
            </div>

            <button class="save-btn">Save</button>

            <button class="add-more-btn">+ Add More</button>
        </div>

        <div class="sidebar">
            <div class="form-group">
                <a href="/profile">Professor Information</a>
            </div>
            <div class="form-group">
                <a href="/profile/licenses">Professional Licenses</a>
            </div>
            <div class="form-group">
                <a href="/profile/research" class="active">Research and Publications</a>
            </div>
            <div class="form-group">
                <a href="/profile/security">Account Security</a>
            </div>
        </div>
    </div>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        nav {
            background-color: var(--clr-Green);
        }

        .container {
            max-width: 1200px;
            margin-top: 8%;
            padding: 0 20px;
            display: flex;
            gap: 20px;
        }

        .main-content {
            flex: 3;
            background: white;
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 20px;
        }

        .sidebar {
            flex: 1;
            background: white;
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 20px;
        }

        .title {
            color: #0b702c;
            margin-bottom: 15px;
        }

        .divider {
            border-top: 1px solid #ddd;
            margin: 15px 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group a {
            color: var(--clr-Green);
        }

        .form-group a:hover {
            text-decoration: underline;
        }

        .form-group label {
            display: block;
            color: #0b702c;
            margin-bottom: 5px;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 3px;
            font-size: 14px;
        }

        .save-btn {
            background-color: #0b702c;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 3px;
            cursor: pointer;
            margin-bottom: 30px;
        }

        .add-more-btn {
            background-color: white;
            color: #333;
            border: 1px solid #ddd;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
        }

        .sidebar-menu li {
            margin-bottom: 10px;
        }

        .sidebar-menu a {
            color: #0b702c;
            text-decoration: none;
        }

        .active {
            font-weight: bold;
        }
    </style>