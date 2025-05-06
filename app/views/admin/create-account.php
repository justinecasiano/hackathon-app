  <!-- Main Content -->
  <div class="containers">
      <!-- Registration Form Card -->
      <div class="card">
          <h2 class="card-title">New Account</h2>

          <form id="registerForm">
              <div class="form-grid">
                  <div class="form-group">
                      <label for="first-name">First Name:</label>
                      <input type="text" class="form-control" id="first-name" name="first_name" required>
                  </div>

                  <div class="form-group">
                      <label for="last-name">Last Name:</label>
                      <input type="text" class="form-control" id="last-name" name="last_name" required>
                  </div>

                  <div class="form-group">
                      <label for="assigned-position">Assigned Position:</label>
                      <input type="text" class="form-control" id="assigned-position" name="assigned_position" required>
                  </div>

                  <div class="form-group">
                      <label for="department">Department:</label>
                      <input type="text" class="form-control" id="department" name="department" required>
                  </div>

                  <div class="form-group">
                      <label for="username">Username:</label>
                      <input type="text" class="form-control" id="username" name="username" required>
                  </div>

                  <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" required>
                  </div>
              </div>

              <div class="btn-container">
                  <button class="btn btn-primary" id="save-account" type="submit">Save Account</button>
              </div>
          </form>
      </div>

      <!-- Sidebar Card -->
      <div class="sidecard">
          <div class="sidebar-menu">
              <a id="active-sidebar" href="/admin/account">Create New Account</a>
              <a href="/admin/account/information">Professional Information</a>
              <a href="/admin/account/licenses">Professional Licenses</a>
              <a href="/admin/account/research">Research and Publications</a>
              <a href="/admin/account/security">Account Security</a>
          </div>

          <div class="registered-users">
              <div class="registered-usertable">

                  <?php foreach ($recentRegisters as $user) { ?>
                      <div class="user-card">
                          <div class="user-avatar">
                              <img src="../../../assets/images/profile-placeholder.jfif" alt="User Avatar">
                          </div>
                          <div class="user-info">
                              <h4><?= htmlspecialchars($user['first_name']) . ' ' . htmlspecialchars($user['last_name']) ?></h4>
                              <p><?= htmlspecialchars($user['assigned_position']) ?></p>
                          </div>
                      </div>
                  <?php } ?>
              </div>
          </div>
      </div>
  </div>

  <script>
      document.getElementById('registerForm').addEventListener('submit', function(e) {
          e.preventDefault();
          const button = document.getElementById('save-account');
          button.disabled = true;

          const elements = ['first-name', 'last-name', 'assigned-position', 'department', 'username', 'password'];
          fetchModal('/api/register-account', this, button, () => clearAllFields(elements));
      });
  </script>
  <style>
      nav {
          background-color: var(--clr-Green);
      }

      body {
          background-color: #FCFCFC;
      }

      .containers {
          padding-inline: 6%;
          padding-top: 6%;
          display: grid;
          grid-template-columns: 2fr 1fr;
          gap: 20px;

          width: 100%;
      }

      .card {
          padding: 3%;
      }

      .card,
      .sidecard {
          display: flex;
          flex-direction: column;
          height: 100%;
          width: 100%;
          background-color: transparent;
          border-radius: 5px;

          gap: 1rem;

          border: 2px solid var(--clr-Green);
      }

      .sidecard {
          border: none;
      }

      label {
          color: var(--clr-Green);
          font-family: var(--ff-Proxima);
          font-size: 1.125rem;
          font-style: normal;
          font-weight: 400;
          line-height: normal;
      }

      .card-title {
          color: var(--clr-Green);
          padding-bottom: 2%;
          margin-bottom: 2%;
          border-bottom: 1px solid var(--clr-Green);
      }

      .form-grid {
          display: flex;
          flex-direction: column;
      }

      .form-group {
          margin-bottom: 15px;
      }

      .form-control {
          width: 100%;
          padding: 8px 12px;
          border: 1px solid var(--clr-Green);
          font-size: 16px;
          flex: 1;
      }

      .form-control:focus {
          outline: none;
          border-color: var(--primary-color);
          box-shadow: 0 0 0 2px rgba(10, 93, 51, 0.2);
      }

      .btn-container {
          display: flex;
          width: 100%;
      }

      .form-group {
          display: flex;
          flex-direction: column;
      }

      .btn {
          padding: 8px 15px;
          border: 1px solid var(--clr-Green);
          background-color: transparent;
          cursor: pointer;
          font-weight: 500;
          transition: all 0.2s;

          color: var(--clr-Green);
          font-family: var(--ff-Metropolis);
          font-size: 1.125rem;
          font-style: normal;
          font-weight: 400;
          line-height: normal;
      }

      .btn:hover {
          background-color: var(--clr-White);
      }

      .registered-usertable {
          padding: 3%;
          max-height: 360px;
          overflow-y: auto;
      }

      .sidebar-menu {
          display: flex;
          flex-direction: column;

          padding: 6%;

          border-radius: 0.625rem;
          border: 2px solid var(--clr-Green);
      }

      .sidebar-menu a {
          padding: 10px 15px;
          color: var(--clr-Green);
          font-family: var(--ff-Metropolis);
          font-size: 1rem;
          font-weight: 400;
          text-decoration: none;
      }

      .sidebar-menu a:hover {
          text-decoration: underline;
      }

      .registered-users {
          border-radius: 0.625rem;
          width: 100%;
          height: 100%;
          border: 2px solid var(--clr-Green);
      }

      .user-card {
          display: flex;
          align-items: center;
          margin: 2%;
          padding: 2%;

          background-color: #E0EBF3;
          border-radius: 5px;
      }

      .user-avatar {
          width: 50px;
          height: 50px;
          border-radius: 50%;
          background-color: #e9e9e9;
          margin-right: 15px;
          overflow: hidden;
      }

      .user-avatar img {
          width: 100%;
          height: 100%;
          object-fit: cover;
      }

      .user-info h4,
      .user-info p {
          color: var(--clr-Green);
          font-family: var(--ff-Proxima);
          font-size: 1.125rem;
          font-weight: 600;
      }

      .user-info p {
          font-weight: 400;
      }

      @media (max-width: 768px) {
          .container {
              grid-template-columns: 1fr;
          }
      }
  </style>