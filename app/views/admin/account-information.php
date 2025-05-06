  <!-- Main Content -->
  <main>
      <!-- Fixed sidebar that stays visible throughout all sections -->
      <div class="sidebar-container">
          <div class="sidecard">
              <div class="sidebar-menu">
                  <a href="/admin/account">Create New Account</a>
                  <a id="active-sidebar" href="/admin/account/information">Professional Information</a>
                  <a href="/admin/account/licenses">Professional Licenses</a>
                  <a href="/admin/account/research">Research and Publications</a>
                  <a href="/admin/account/security">Account Security</a>
              </div>

              <div class="registered-users">
                  <div class="registered-usertable">

                      <div class="user-card">
                          <div class="user-avatar">
                              <img src="../../../assets/images/profile-placeholder.jfif" alt="User Avatar">
                          </div>
                          <div class="user-info">
                              <h4>Anna Charisma De Chavez</h4>
                              <p>Associate Professor</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="containers">
          <div class="content-wrapper">
              <!-- Registration Form Card -->
              <div class="card">
                  <h2 class="card-title">Personal Information</h2>

                  <div class="profile-section">
                      <div class="profile-image">
                          <img src="../../../assets/images/roel-profile.png" alt="Profile Pic">
                      </div>

                      <div class="circle-container">
                          <div class="completeness-container">
                              <svg width="80" height="80" viewBox="0 0 80 80">
                                  <circle class="circle-bg" cx="40" cy="40" r="36"></circle>
                                  <circle class="circle-progress" cx="40" cy="40" r="36"
                                      stroke-dasharray="226.19" stroke-dashoffset="226.19"></circle>
                                  <text class="circle-text" x="40" y="45" text-anchor="middle">0%</text>
                              </svg>
                          </div>

                          <div class="completeness-label">Profile Completeness</div>
                      </div>

                      <div class="form-container">
                          <div class="form-group">
                              <label for="assigned-position">Assigned Position:</label>
                              <input type="text" class="form-control" id="assigned-position" value="Associate Professor" readonly>
                          </div>

                          <div class="form-group">
                              <label for="department">Department:</label>
                              <input type="text" class="form-control" id="department" value="IT Department" readonly>
                          </div>
                      </div>
                  </div>

                  <div class="form-grid">
                      <div class="form-row">
                          <div class="form-group firstlayer">
                              <label for="first-name">First Name:</label>
                              <input type="text" class="form-control" id="first-name" value="Roel" readonly>
                          </div>

                          <div class="form-group firstlayer">
                              <label for="last-name">Last Name:</label>
                              <input type="text" class="form-control" id="last-name" value="Traballo" readonly>
                          </div>

                          <div class="form-group firstlayer">
                              <label for="contact">Contact:</label>
                              <input type="text" class="form-control" id="contact" value="09123456789" readonly>
                          </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group secondlayer">
                              <label for="sex">Sex:</label>
                              <input type="text" class="form-control" id="sex" value="Male" readonly>
                          </div>

                          <div class="form-group secondlayer">
                              <label for="age">Age:</label>
                              <input type="number" class="form-control" id="age" value="18" readonly>
                          </div>

                          <div class="form-group secondlayer">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" value="rtraballo.k121512345@umak.edu.ph" readonly>
                          </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group thirdlayer">
                              <label for="civil-status">Civil Status:</label>
                              <input type="text" class="form-control" id="civil-status" value="Married" readonly>
                          </div>

                          <div class="form-group thirdlayer">
                              <label for="address">Address:</label>
                              <input type="text" class="form-control" id="address" value="Blk. 123 Lot 45 Agoncillo Street East Rembo" readonly>
                          </div>
                      </div>
                  </div>

                  <div class="btn-container">
                      <button class="btn btn-outline" id="edit-personal-info">Edit Personal Info </button>
                  </div>
              </div>

              <!-- Empty div to maintain grid layout -->
              <div style="width: 100%;"></div>
          </div>
      </div>

      <div class="section2">
          <div class="section2-container">
              <div class="section-header">
                  <div class="section-title">Academic Information</div>
                  <div class="completeness">Completeness: <span class="completeness-value">100%</span></div>
              </div>

              <div class="education-level">Tertiary Level</div>

              <div class="degree-label">Degree Earned:</div>
              <input type="text" class="degree-input" value="MASTER OF SCIENCE IN INFORMATION TECHNOLOGY (MSIT)" readonly>

              <div class="status-label">Status:</div>
              <button class="status-button">Pending Approval</button>

              <div class="degree-label">Degree Earned:</div>
              <input type="text" class="degree-input" value="MASTER OF SCIENCE IN INFORMATION TECHNOLOGY (MSIT)" readonly>

              <div class="status-label">Status:</div>
              <button class="status-button">Pending Approval</button>

              <div class="education-level">Secondary Level</div>

              <div class="university-label">Name of University or University:</div>
              <input type="text" class="university-input" value="POLYTECHNIC UNIVERSITY OF THE PHILIPPINES - STA. MESA" readonly>
          </div>
      </div>

      <!-- Work Experience Section -->
      <div class="section3">
          <div class="section3-container">
              <div class="section-header">
                  <div class="section-title">Work Experience</div>
                  <div class="completeness">Completeness: <span class="completeness-value">100%</span></div>
              </div>

              <div class="school-title">School Experience</div>

              <div class="experience-row">
                  <div class="label-column">Position:</div>
                  <div class="data-column">
                      <div class="data-field full-width">Associate Professor II</div>
                  </div>
              </div>

              <div class="experience-row">
                  <div class="label-column"></div>
                  <div class="data-column">
                      <div class="date-field">Date Started:</div>
                      <div class="date-field">Date Finished:</div>
                  </div>
              </div>

              <div class="experience-row">
                  <div class="label-column"></div>
                  <div class="data-column">
                      <div class="date-field data-field">06/2/2008</div>
                      <div class="date-field data-field">06/2/2008</div>
                  </div>
              </div>

              <div class="experience-row">
                  <div class="label-column">Name of University:</div>
                  <div class="data-column">
                      <div class="data-field full-width">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES - STA. MESA</div>
                  </div>
              </div>

              <div class="status-container">
                  <div class="label-column">Status:</div>
                  <div class="status-button">Pending Approval</div>
              </div>

              <!-- Second entry -->
              <div class="experience-row">
                  <div class="label-column">Position:</div>
                  <div class="data-column">
                      <div class="data-field full-width">Associate Professor II</div>
                  </div>
              </div>

              <div class="experience-row">
                  <div class="label-column"></div>
                  <div class="data-column">
                      <div class="date-field">Date Started:</div>
                      <div class="date-field">Date Finished:</div>
                  </div>
              </div>

              <div class="experience-row">
                  <div class="label-column"></div>
                  <div class="data-column">
                      <div class="date-field data-field">06/2/2008</div>
                      <div class="date-field data-field">06/2/2008</div>
                  </div>
              </div>

              <div class="experience-row">
                  <div class="label-column">Name of University:</div>
                  <div class="data-column">
                      <div class="data-field full-width">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES - STA. MESA</div>
                  </div>
              </div>

              <div class="status-container">
                  <div class="label-column">Status:</div>
                  <div class="status-button">Pending Approval</div>
              </div>
          </div>
      </div>

      <div class="section4">
          <div class="section3-container">
              <div class="section-header">
                  <div class="section-title">Awards, Fellowships and Scholarships</div>
                  <div class="completeness">Completeness: <span class="completeness-value">100%</span></div>
              </div>

              <!-- Awards Section -->
              <div class="school-title">Awards</div>

              <div class="experience-row">
                  <div class="label-column">Award:</div>
                  <div class="data-column">
                      <div class="data-field full-width">Most Outstanding Computing Technology Educator for A.Y. 2022-2023</div>
                  </div>
              </div>

              <div class="status-container">
                  <div class="label-column">Status:</div>
                  <div class="status-button" style="background-color: transparent; color: #137333; border-color: #137333;">Approved</div>
              </div>

              <div class="experience-row">
                  <div class="label-column">Award:</div>
                  <div class="data-column">
                      <div class="data-field full-width">Most Outstanding Computing Technology Educator for A.Y. 2022-2023</div>
                  </div>
              </div>

              <div class="status-container">
                  <div class="label-column">Status:</div>
                  <div class="status-button">Pending Approval</div>
              </div>

              <!-- Fellowships and Scholarships Section -->
              <div class="school-title">Fellowships and Scholarships</div>

              <div class="experience-row">
                  <div class="label-column">Title:</div>
                  <div class="data-column">
                      <div class="data-field full-width">UMak Fellow</div>
                  </div>
              </div>

              <div class="status-container">
                  <div class="label-column">Status:</div>
                  <div class="status-button" style="background-color: transparent; color: #137333; border-color: #137333;">Approved</div>
              </div>

              <div class="experience-row">
                  <div class="label-column">Title:</div>
                  <div class="data-column">
                      <div class="data-field full-width">UMak Fellow</div>
                  </div>
              </div>

              <div class="status-container">
                  <div class="label-column">Status:</div>
                  <div class="status-button" style="background-color: transparent; color: #137333; border-color: #137333;">Approved</div>
              </div>
          </div>
      </div>

      <!-- Section 5: Professional Memberships -->
      <div class="section5">
          <div class="section3-container">
              <div class="section-header">
                  <div class="section-title">Professional Memberships</div>
                  <div class="completeness">Completeness: <span class="completeness-value">100%</span></div>
              </div>

              <!-- First Membership -->
              <div class="experience-row">
                  <div class="label-column">Position:</div>
                  <div class="data-column">
                      <div class="data-field full-width">Active Member</div>
                  </div>
              </div>

              <div class="experience-row">
                  <div class="label-column"></div>
                  <div class="data-column">
                      <div class="date-field">Date Joined:</div>
                      <div class="date-field">Until:</div>
                  </div>
              </div>

              <div class="experience-row">
                  <div class="label-column"></div>
                  <div class="data-column">
                      <div class="date-field data-field">06/2/2008</div>
                      <div class="date-field data-field">06/2/2009</div>
                  </div>
              </div>

              <div class="experience-row">
                  <div class="label-column">Name of Association/Organization:</div>
                  <div class="data-column">
                      <div class="data-field full-width">Philippine Society of Information Technology Educators (PSITE)</div>
                  </div>
              </div>

              <!-- Second Membership -->
              <div class="experience-row" style="margin-top: 30px;">
                  <div class="label-column">Position:</div>
                  <div class="data-column">
                      <div class="data-field full-width">Active Member</div>
                  </div>
              </div>

              <div class="experience-row">
                  <div class="label-column"></div>
                  <div class="data-column">
                      <div class="date-field">Date Joined:</div>
                      <div class="date-field">Until:</div>
                  </div>
              </div>

              <div class="experience-row">
                  <div class="label-column"></div>
                  <div class="data-column">
                      <div class="date-field data-field">06/2/2008</div>
                      <div class="date-field data-field">06/2/2009</div>
                  </div>
              </div>

              <div class="experience-row">
                  <div class="label-column">Name of Association/Organization:</div>
                  <div class="data-column">
                      <div class="data-field full-width">Philippine Society of Information Technology Educators (PSITE)</div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Section 6: Seminars and Trainings -->
      <div class="section6">
          <div class="section3-container">
              <div class="section-header">
                  <div class="section-title">Seminars and Trainings</div>
                  <div class="completeness">Completeness: <span class="completeness-value">100%</span></div>
              </div>

              <div class="school-title">Seminars</div>

              <!-- First Training -->
              <div class="experience-row">
                  <div class="label-column">Title:</div>
                  <div class="data-column">
                      <div class="data-field full-width">Database Online Training</div>
                  </div>
              </div>

              <div class="status-container">
                  <div class="label-column">Status:</div>
                  <div class="status-button">Pending Approval</div>
              </div>

              <!-- Second Training -->
              <div class="experience-row">
                  <div class="label-column">Title:</div>
                  <div class="data-column">
                      <div class="data-field full-width">MS ITS - Network Security Online Training</div>
                  </div>
              </div>

              <div class="status-container">
                  <div class="label-column">Status:</div>
                  <div class="status-button" style="background-color: transparent; color: #137333; border-color: #137333;">Approved</div>
              </div>
          </div>
      </div>
  </main>

  <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Form fields
          const formFields = [
              'assigned-position', 'department', 'first-name', 'last-name',
              'contact', 'sex', 'age', 'email', 'civil-status', 'address'
          ];

          // Track form completeness
          const totalFields = formFields.length;
          let completedFields = 0;

          // Progress circle elements
          const progressCircle = document.querySelector('.circle-progress');
          const progressText = document.querySelector('.circle-text');
          const circumference = 2 * Math.PI * 36; // 2πr where r=36

          // Update progress function
          function updateProgress() {
              completedFields = formFields.filter(id =>
                  document.getElementById(id).value.trim() !== ''
              ).length;

              const percentage = Math.round((completedFields / totalFields) * 100);
              const offset = circumference - (percentage / 100 * circumference);

              progressCircle.style.strokeDasharray = circumference;
              progressCircle.style.strokeDashoffset = offset;
              progressText.textContent = `${percentage}%`;

              // Change color based on completion
              if (percentage < 30) {
                  progressCircle.style.stroke = '#dc3545'; // Red
              } else if (percentage < 70) {
                  progressCircle.style.stroke = '#ffc107'; // Yellow
              } else {
                  progressCircle.style.stroke = '#28a745'; // Green
              }
          }

          // Add input event listeners to all form fields
          formFields.forEach(id => {
              const field = document.getElementById(id);
              field.addEventListener('input', updateProgress);
          });

          // Button functionality
          const saveButton = document.getElementById('save-account');
          if (saveButton) {
              saveButton.addEventListener('click', function() {
                  // Validate required fields
                  let isValid = true;
                  const requiredFields = ['first-name', 'last-name', 'email', 'sex', 'age', 'contact', 'assigned-position', 'department', 'civil-status', 'address'];

                  requiredFields.forEach(id => {
                      const field = document.getElementById(id);
                      if (field.value.trim() === '') {
                          field.style.borderColor = '#dc3545';
                          isValid = false;
                      } else {
                          field.style.borderColor = '#ced4da';
                      }
                  });

                  if (isValid) {
                      alert('Account saved successfully!');
                      updateUsersList();
                  } else {
                      alert('Please fill in all required fields.');
                  }
              });
          }

          const deleteButton = document.getElementById('delete-account');
          if (deleteButton) {
              deleteButton.addEventListener('click', function() {
                  if (confirm('Are you sure you want to delete this account?')) {
                      // Clear all form fields
                      formFields.forEach(id => {
                          document.getElementById(id).value = '';
                      });
                      updateProgress();
                      alert('Account deleted successfully!');
                  }
              });
          }

          const newAccountButton = document.getElementById('new-account');
          if (newAccountButton) {
              newAccountButton.addEventListener('click', function() {
                  // Clear all form fields
                  formFields.forEach(id => {
                      document.getElementById(id).value = '';
                      document.getElementById(id).style.borderColor = '#ced4da';
                  });
                  updateProgress();
              });
          }

          const editPersonalInfoButton = document.getElementById('edit-personal-info');
          if (editPersonalInfoButton) {
              editPersonalInfoButton.addEventListener('click', function() {
                  // Remove readonly attribute to make fields editable
                  formFields.forEach(id => {
                      const field = document.getElementById(id);
                      if (field) {
                          field.removeAttribute('readonly');
                      }
                  });
                  alert('You can now edit your personal information.');
              });
          }

          // Function to add a new user to the list
          function updateUsersList() {
              const firstName = document.getElementById('first-name').value;
              const lastName = document.getElementById('last-name').value;
              const position = document.getElementById('assigned-position').value || 'Pending Position';

              if (firstName && lastName) {
                  const fullName = `${firstName} ${lastName}`;

                  const userCard = document.createElement('div');
                  userCard.className = 'user-card';
                  userCard.innerHTML = `
            <div class="user-avatar">
              <img src="/api/placeholder/50/50" alt="User Avatar">
            </div>
            <div class="user-info">
              <h4>${fullName}</h4>
              <p>${position}</p>
            </div>
          `;

                  const registeredUsers = document.querySelector('.registered-usertable');
                  registeredUsers.prepend(userCard);
              }
          }

          // Initialize progress bar
          updateProgress();
      });
  </script>
  <style>
      nav {
          background-color: var(--clr-Green);
          top: 0;
          z-index: 1000;
      }

      body {
          background-color: #FCFCFC;
          margin: 0;
          padding: 0;
      }

      .section2,
      .section3,
      .section4,
      .section5 {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          min-height: 100vh;
          width: 100%;
          padding: 20px 0;
      }

      .containers {
          padding-inline: 5%;
          padding-top: 7%;
          width: 100%;
          position: relative;
      }

      .content-wrapper {
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
          background-color: transparent;
          border-radius: 5px;
          gap: 1rem;
      }

      .card {
          border: 2px solid var(--clr-Green);
          height: 100%;
          width: 100%;
      }

      /* Fixed sidebar styling */
      .sidebar-container {
          position: fixed;
          top: 100px;
          /* Adjust based on your navbar height */
          right: 5%;
          width: calc(25% - 20px);
          /* Adjust width to match layout */
          z-index: 900;
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

      .profile-section {
          display: flex;
          align-items: center;
          margin-bottom: 20px;

          gap: 1rem;

      }

      .profile-image {
          display: flex;
          justify-content: center;
          align-items: center;
      }

      .secondlayer:last-child,
      .thirdlayer:last-child {
          flex: 1;
      }

      .profile-image img {
          width: 70%;
          height: auto;

          border-radius: 50%;
      }

      .form-grid {
          display: flex;
          flex-direction: column;
      }

      .completeness-container {
          position: relative;
          width: 80px;
          height: 80px;
      }

      .circle-bg {
          fill: none;
          stroke: #e9e9e9;
          stroke-width: 8;
      }

      .circle-progress {
          fill: none;
          stroke: var(--highlight-color);
          stroke-width: 8;
          stroke-linecap: round;
          transform: rotate(-90deg);
          transform-origin: 50% 50%;
          transition: stroke-dashoffset 0.5s;
      }

      .circle-text {
          font-size: 16px;
          font-weight: bold;
          fill: var(--highlight-color);
      }

      .completeness-label {
          text-align: center;
          color: var(--primary-color);
          font-weight: 600;
          margin-top: 10px;
      }

      .form-group {
          display: flex;
          flex-direction: column;

          margin-bottom: 15px;
      }

      .form-container {
          display: flex;
          flex-direction: column;

          flex: 1;
          width: 33%;
      }

      .form-control {
          width: 100%;
          padding-block: 8px;
          border: none;
          border-bottom: 2px solid var(--clr-Green);
          /* underline */
          outline: none;
          font-size: 16px;

          color: var(--clr-Green);
          font-family: "Proxima Nova";
          font-size: 1.125rem;
          font-style: normal;
          font-weight: 600;
          line-height: normal;

          background-color: transparent;

          flex: 1;
      }

      .form-control:focus {
          outline: none;
          border-color: var(--clr-Green);
      }

      .btn-container {
          display: flex;
          width: 100%;
          height: 100%;
          gap: 1.5rem;
      }

      .form-row #email {
          flex: 1;
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
          padding: 4%;
          max-height: 330px;
          /* or whatever height you prefer */
          overflow-y: auto;
      }


      .sidebar-menu {
          display: flex;
          flex-direction: column;

          padding: 5%;

          border-radius: 5px;
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
          height: 350px;
          /* Increased fixed height */
          border: 2px solid var(--clr-Green);
          margin-top: 20px;
      }

      .user-card {
          display: flex;
          align-items: center;
          margin: 2%;
          padding: 2%;
          margin-bottom: 5%;

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

      .circle-container {
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;

          width: 20%;
      }

      .form-row {
          display: flex;
          gap: 1rem;

          width: 100%;
      }

      .firstlayer {
          flex: 1;
      }

      /* Added for sticky behavior */
      main {
          min-height: 100vh;
          position: relative;
      }

      .section2,
      .section3 {
          display: flex;
          align-items: flex-start;
          justify-content: flex-start;
          padding-inline: 5%;
          padding-top: 7%;
          border-radius: 8px;
          padding: 20px;
          width: 100%;
      }

      .section2-container,
      .section3-container {
          display: flex;
          flex-direction: column;
          justify-content: center;
          border: 2px solid var(--clr-Green);
          border-radius: 5px;
          margin-left: 3.8%;
          padding: 3%;
          width: 60.8%;
      }

      .section-header {
          display: flex;
          justify-content: space-between;
          align-items: center;
          margin-bottom: 15px;
          padding-bottom: 10px;
          border-bottom: 1px solid var(--clr-Green);
      }

      .section-title {
          color: var(--clr-Green);
          font-family: var(--ff-Proxima);
          font-size: 1.5rem;
          font-style: normal;
          font-weight: 600;
          line-height: normal;
      }

      .completeness {
          color: var(--clr-Green);
          font-family: var(--ff-Proxima);
          font-size: 1.125rem;
          font-style: normal;
          font-weight: 600;
          line-height: normal;
      }

      .completeness-value {
          color: #2e7d32;
          font-weight: bold;
      }

      .education-level,
      .school-title {
          margin-top: 20px;
          margin-bottom: 15px;
          color: var(--clr-Green);
          font-family: var(--ff-Metropolis);
          font-size: 1.25rem;
          font-style: normal;
          font-weight: 600;
          line-height: normal;
      }

      .degree-label,
      .status-label,
      .university-label,
      .position-label {
          color: var(--clr-Green);
          font-family: var(--ff-Metropolis);
          font-size: 1.125rem;
          font-style: normal;
          font-weight: 500;
          line-height: normal;
          margin-bottom: 5px;
      }

      .degree-input,
      .university-input {
          border: none;
          border-bottom: 2px solid var(--clr-Green);
          width: 100%;
          padding: 8px;
          color: var(--clr-Green);
          font-family: var(--ff-Metropolis);
          font-size: 1.125rem;
          font-style: normal;
          font-weight: 500;
          line-height: normal;
          text-transform: uppercase;
      }

      .status-label {
          margin-top: 15px;
      }

      .status-button {
          display: inline-block;
          color: #A90505;
          font-family: var(--ff-Metropolis);
          font-size: 1.125rem;
          font-style: normal;
          font-weight: 400;
          line-height: normal;
          background-color: transparent;
          border: 1px solid var(--clr-Green);
          padding: 6px 12px;
          margin-bottom: 15px;
          cursor: pointer;
          width: 25%;
      }

      /* Work Experience Section Styles */
      .experience-row {
          display: flex;
          margin-bottom: 20px;
      }

      .label-column {
          width: 30%;
          color: var(--clr-Green);
          font-weight: normal;
          font-family: var(--ff-Metropolis);
          font-size: 1.125rem;
      }

      .data-column {
          width: 70%;
          display: flex;
      }

      .data-field {
          border-bottom: 1px solid var(--clr-Green);
          padding-bottom: 3px;
          font-weight: normal;
          color: var(--clr-Green);
          font-family: var(--ff-Metropolis);
          font-size: 1.125rem;
      }

      .full-width {
          width: 100%;
      }

      .date-field {
          width: 50%;
      }

      .status-container {
          margin-top: 10px;
          margin-bottom: 30px;
          display: flex;
      }

      .pending-approval {
          display: inline-block;
          border: 1px solid var(--clr-Green);
          color: #a82828;
          padding: 5px 12px;
          border-radius: 4px;
          font-size: 14px;
          font-family: var(--ff-Metropolis);
      }

      .section4,
      .section5,
      .section6 {
          display: flex;
          align-items: flex-start;
          justify-content: flex-start;
          padding-inline: 5%;
          padding-top: 7%;
          border-radius: 8px;
          padding: 20px;
          width: 100%;
      }

      /* Style for approved status */
      .status-button[style*="background-color: #e6f4ea"] {
          background-color: #e6f4ea !important;
          color: #137333 !important;
          border-color: #137333 !important;
      }

      /* Consistent margin between sections */
      .section4,
      .section5,
      .section6 {
          margin-bottom: 20px;
      }

      @media (max-width: 768px) {
          .content-wrapper {
              grid-template-columns: 1fr;
          }

          .sidebar-container {
              position: static;
              width: 100%;
              margin-top: 20px;
              margin-bottom: 20px;
              right: 0;
          }

          .container {
              padding-top: 20px;
          }
      }
  </style>