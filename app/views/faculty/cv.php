    <div class="container mt-5">
        <div class="row">
            <!-- Left Column - Professional Licenses -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-success">Professional Licenses</h4>
                        <hr class="text-success">

                        <div class="mb-4">
                            <h5>Examinations</h5>
                            <div class="mb-3">
                                <label class="text-success">Name of Exam/Certifications:</label>
                                <input type="text" class="certification-input" id="certificationInput" value="TESDA - CERTIFIED COMPUTER PROGRAMMER NATIONAL CERTIFICATE II" readonly>
                                <div class="d-flex align-items-center mt-1">
                                    <label class="text-success me-2">Status:</label>
                                    <span class="badge pending-badge px-3 py-2" role="button" data-bs-toggle="modal" data-bs-target="#pendingApprovalsModal" style="cursor: pointer;">Pending Approval</span>
                                    <span class="badge pending-badge px-3 py-2" role="button" style="cursor: pointer; background-color: var(--clr-Green); border: 2px solid var(--clr-White); color: var(--clr-White); ">Edit</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="text-success">Name of Exam/Certifications:</label>
                                <input type="text" class="certification-input" value="TESDA - CERTIFIED COMPUTER HARDWARE SERVICING - NATIONAL CERTIFICATE II" readonly>
                                <div class="d-flex align-items-center mt-1">
                                    <label class="text-success me-2">Status:</label>
                                    <span class="badge approved-badge px-3 py-2">Approved</span>
                                    <span class="badge pending-badge px-3 py-2" role="button" style="cursor: pointer; background-color: var(--clr-Green); border: 2px solid var(--clr-White); color: var(--clr-White); ">Edit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Navigation and Profiles -->
            <div class="col-md-4">
                <!-- Navigation Menu -->
                <div class="card mb-4">
                    <div class="card-body sidebar-nav">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a href="/profile">Professional Information</a></li>
                            <li class="nav-item"><a href="/profile/licenses" class="fw-bold">Professional Licenses</a></li>
                            <li class="nav-item"><a href="/profile/research">Research and Publications</a></li>
                            <li class="nav-item"><a href="/profile/security">Account Security</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Profile Cards -->
                <div class="card profile-cards-card">
                    <div class="card-body">
                        <h5 class="card-title text-success mb-3">Profiles</h5>
                        <!-- Added a container for scrollable profiles -->
                        <div class="profiles-container">
                            <div class="profile-card d-flex align-items-center mb-3" id="firstProfileCard">
                                <div class="profile-image me-3">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div>
                                    <div class="fw-bold text-success">Anna Charisma De Chavez</div>
                                    <div class="small">Associate Professor</div>
                                </div>
                            </div>

                            <div class="profile-card d-flex align-items-center mb-3">
                                <div class="profile-image me-3">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div>
                                    <div class="fw-bold text-success">Edgardo Cruz</div>
                                    <div class="small">Pending Position</div>
                                </div>
                            </div>

                            <div class="profile-card d-flex align-items-center mb-3">
                                <div class="profile-image me-3">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div>
                                    <div class="fw-bold text-success">Anna Charisma De Chavez</div>
                                    <div class="small">Associate Professor</div>
                                </div>
                            </div>

                            <div class="profile-card d-flex align-items-center">
                                <div class="profile-image me-3">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div>
                                    <div class="fw-bold text-success">Edgardo Cruz</div>
                                    <div class="small">Pending Position</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Approvals Modal -->
    <div class="modal fade" id="pendingApprovalsModal" tabindex="-1" aria-labelledby="pendingApprovalsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pendingApprovalsModalLabel">Pending Approval</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h4 class="mb-4">Awards</h4>

                        <div class="row field-row">
                            <div class="col-md-3 modal-field-label">Degree Earned:</div>
                            <div class="col-md-9 modal-field-value" id="modalDegreeValue">TESDA - CERTIFIED COMPUTER PROGRAMMER NATIONAL CERTIFICATE II</div>
                        </div>

                        <div class="row field-row">
                            <div class="col-md-3 modal-field-label">Rating/Reason for Conferment:</div>
                            <div class="col-md-9 modal-field-value">Passed the actual Examinations</div>
                        </div>

                        <div class="row field-row">
                            <div class="col-md-4">
                                <div class="modal-field-label">Date of Exam:</div>
                                <div class="modal-field-value">06/12/2005</div>
                            </div>
                            <div class="col-md-4">
                                <div class="modal-field-label">Valid Until:</div>
                                <div class="modal-field-value">06/12/2005</div>
                            </div>
                        </div>

                        <div class="row field-row">
                            <div class="col-md-4">
                                <div class="modal-field-label">Document:</div>
                                <button class="btn btn-outline-success btn-sm mt-2">View File</button>
                            </div>
                            <div class="col-md-4">
                                <div class="modal-field-label">Document Validity:</div>
                                <div class="modal-field-value">02/30/2005</div>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label for="returnReason" class="modal-field-label">Reason for Return (Optional):</label>
                            <textarea class="form-control mt-2" id="returnReason" rows="4" placeholder="Write a reason for return"></textarea>
                        </div>

                        <div class="approval-actions">
                            <button type="button" class="btn btn-primary">Approve</button>
                            <button type="button" class="btn btn-secondary">Return</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit License Modal -->
    <div class="modal fade" id="editLicenseModal" tabindex="-1" aria-labelledby="editLicenseModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLicenseModalLabel">Edit Professional License</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h4 class="mb-4">Awards</h4>

                        <div class="row field-row">
                            <div class="col-md-3 modal-field-label">Degree Earned:</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="editDegreeValue">
                            </div>
                        </div>

                        <div class="row field-row mt-3">
                            <div class="col-md-3 modal-field-label">Rating/Reason for Conferment:</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="editRatingValue">
                            </div>
                        </div>

                        <div class="row field-row mt-3">
                            <div class="col-md-4">
                                <div class="modal-field-label">Date of Exam:</div>
                                <input type="date" class="form-control" id="editExamDate">
                            </div>
                            <div class="col-md-4">
                                <div class="modal-field-label">Valid Until:</div>
                                <input type="date" class="form-control" id="editValidUntil">
                            </div>
                        </div>

                        <div class="row field-row mt-3">
                            <div class="col-md-4">
                                <div class="modal-field-label">Document:</div>
                                <div class="d-flex align-items-center mt-2">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" id="editNoDocument">
                                        <label class="form-check-label" for="editNoDocument">No Document</label>
                                    </div>
                                    <button class="btn btn-outline-success btn-sm">Upload File</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="modal-field-label">Document Validity:</div>
                                <div class="d-flex align-items-center mt-2">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" id="editNoExpiry">
                                        <label class="form-check-label" for="editNoExpiry">No Expiry</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="editDeactivated">
                                        <label class="form-check-label" for="editDeactivated">Deactivated</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="approval-actions mt-4">
                            <button type="button" class="btn btn-primary" id="saveEditBtn">Save Changes</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add tooltip to pending badge
            const pendingBadges = document.querySelectorAll('.pending-badge');
            pendingBadges.forEach(badge => {
                badge.setAttribute('title', 'Click to review this pending approval');
                new bootstrap.Tooltip(badge);
            });

            // Get all profile cards and certification inputs
            const profileCards = document.querySelectorAll('.profile-card');
            const certificationInputs = document.querySelectorAll('.certification-input');
            const modalDegreeValue = document.getElementById('modalDegreeValue');

            // Add click event listener to all profile cards
            profileCards.forEach(card => {
                card.addEventListener('click', function() {
                    // Update all certification input values
                    certificationInputs.forEach(input => {
                        // Store original value to restore later if needed
                        const originalValue = input.value;

                        // Update the certification input value
                        input.value = "TESDA - NETWORKING";

                        // Add highlight animation
                        input.classList.add('highlight-animation');

                        // Remove animation class after it completes
                        setTimeout(() => {
                            input.classList.remove('highlight-animation');
                        }, 1000);
                    });

                    // Also update the modal value
                    if (modalDegreeValue) {
                        modalDegreeValue.textContent = "TESDA - NETWORKING";
                    }

                    // Optional: Show tooltip or notification
                    const tooltip = new bootstrap.Tooltip(card, {
                        title: 'Certifications updated',
                        trigger: 'manual'
                    });
                    tooltip.show();
                    setTimeout(() => tooltip.hide(), 2000);
                });

                // Add tooltips to profile cards
                card.setAttribute('title', 'Click to load this profile\'s certification');
                new bootstrap.Tooltip(card);
            });

            // Handle approve/return actions for the modal
            const modal = document.getElementById('pendingApprovalsModal');
            if (modal) {
                const approveBtn = modal.querySelector('.btn-primary');
                const returnBtn = modal.querySelector('.btn-secondary');

                if (approveBtn) {
                    approveBtn.addEventListener('click', function() {
                        // Handle approval action
                        alert('Certification approved!');
                        bootstrap.Modal.getInstance(modal).hide();
                    });
                }

                if (returnBtn) {
                    returnBtn.addEventListener('click', function() {
                        // Handle return action
                        const reason = document.getElementById('returnReason').value;
                        if (!reason.trim()) {
                            alert('Please provide a reason for return.');
                            return;
                        }
                        alert('Certification returned with reason: ' + reason);
                        bootstrap.Modal.getInstance(modal).hide();
                    });
                }
            }

            // Select all Edit buttons (they have the same class as pending-badge but green background)
            const editButtons = document.querySelectorAll('.pending-badge[style*="background-color: var(--clr-Green)"]');

            editButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Find the parent container to get the license information
                    const licenseContainer = this.closest('.mb-3');

                    if (licenseContainer) {
                        // Get the certification input value
                        const certificationValue = licenseContainer.querySelector('.certification-input').value;

                        // Get the status (pending or approved)
                        const statusBadge = licenseContainer.querySelector('.badge:not([style*="background-color"])');
                        const status = statusBadge ? statusBadge.textContent : '';

                        // Set values in the edit modal
                        document.getElementById('editDegreeValue').value = certificationValue;

                        // For the example, we'll assume some values - in real application, these would come from your data
                        document.getElementById('editRatingValue').value = "Passed the actual Examinations";

                        // Format date for input (YYYY-MM-DD)
                        const dateStr = "2005-06-12"; // From 06/12/2005
                        document.getElementById('editExamDate').value = dateStr;
                        document.getElementById('editValidUntil').value = dateStr;

                        // Show the modal
                        const editModal = new bootstrap.Modal(document.getElementById('editLicenseModal'));
                        editModal.show();
                    }
                });

                // Add tooltip to edit button
                button.setAttribute('title', 'Edit this license');
                new bootstrap.Tooltip(button);
            });

            // Handle save changes button
            const saveEditBtn = document.getElementById('saveEditBtn');
            if (saveEditBtn) {
                saveEditBtn.addEventListener('click', function() {
                    // Get the updated values
                    const updatedDegree = document.getElementById('editDegreeValue').value;

                    // Update all visible certification inputs for demo purposes
                    // In a real application, you would only update the specific one
                    document.querySelectorAll('.certification-input').forEach(input => {
                        if (input === document.activeElement || input.closest('.mb-3').contains(document.activeElement)) {
                            input.value = updatedDegree;

                            // Add highlight animation
                            input.classList.add('highlight-animation');

                            // Remove animation class after it completes
                            setTimeout(() => {
                                input.classList.remove('highlight-animation');
                            }, 1000);
                        }
                    });

                    // Close the modal
                    bootstrap.Modal.getInstance(document.getElementById('editLicenseModal')).hide();

                    // Optional: Show success message
                    alert('License information updated successfully!');
                });
            }
        });
    </script>
    <style>
        :root {
            --clr-Green: #116A3A;
            --ff-Metropolis: 'Metropolis', sans-serif;
        }

        .profile-cards-card {
            display: none;
        }

        /* Make pending badge interactive */
        .pending-badge {
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .pending-badge:hover {
            background-color: #fff8f8;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Make profile cards interactive */
        .profile-card {
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .profile-card:hover {
            background-color: #d1e0ec;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav {
            background-color: var(--clr-Green);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-right {
            margin-bottom: 0;
        }

        .container {
            padding-top: 8%;
        }

        .sidebar-nav {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            gap: 1rem;
        }

        .sidebar-nav a {
            color: #198754;
            text-decoration: none;
        }

        .profile-card {
            background-color: #E0EBF3;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .card {
            border: 2px solid var(--clr-Green);
        }

        /* Profile cards container card needs specific height */
        .profile-cards-card {
            height: 300px;
        }

        .col-md-4 {
            height: 20%;
        }

        .profile-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Status badges - no rounded corners */
        .pending-badge {
            background-color: #fff;
            border: 1px solid #dc3545;
            color: #A90505;
            font-family: var(--ff-Metropolis);
            font-size: 1.125rem;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            border-radius: 0;
        }

        .approved-badge {
            background-color: #fff;
            border: 1px solid #198754;
            color: var(--clr-Green);
            font-family: var(--ff-Metropolis);
            font-size: 1.125rem;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            border-radius: 0;
        }

        /* Input with bottom border only for certifications */
        .certification-input {
            width: 100%;
            border: none;
            color: var(--clr-Green);
            font-family: var(--ff-Metropolis);
            font-size: 1.125rem;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            border-bottom: 1px solid #198754;
            background-color: transparent;
            padding: 5px 0;
            margin-bottom: 10px;
        }

        .certification-input:focus {
            outline: none;
            border-bottom: 2px solid #198754;
        }

        .nav-item a {
            color: var(--clr-Green);
            font-family: var(--ff-Metropolis);
            font-size: 1.125rem;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .nav-item a:hover {
            text-decoration: underline;
        }

        /* Scrollable profile cards */
        .profiles-container {
            max-height: 240px;
            overflow-y: auto;
            padding-right: 5px;
        }

        /* Styling the scrollbar */
        .profiles-container::-webkit-scrollbar {
            width: 5px;
        }

        .profiles-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .profiles-container::-webkit-scrollbar-thumb {
            background: #198754;
            border-radius: 10px;
        }

        .profiles-container::-webkit-scrollbar-thumb:hover {
            background: #146c43;
        }

        /* Modal specific styles */
        .modal-header {
            background-color: var(--clr-Green);
            color: white;
        }

        .modal-content {
            border: 2px solid var(--clr-Green);
        }

        .btn-primary {
            background-color: var(--clr-Green);
            border-color: var(--clr-Green);
        }

        .btn-primary:hover {
            background-color: #0d5a31;
            border-color: #0d5a31;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .approval-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .field-row {
            margin-bottom: 15px;
        }

        .modal-field-label {
            color: var(--clr-Green);
            font-weight: 500;
        }

        .modal-field-value {
            padding: 5px 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            background-color: #f8f9fa;
        }

        /* Animation for input change */
        @keyframes highlight {
            0% {
                background-color: rgba(25, 135, 84, 0);
            }

            50% {
                background-color: rgba(25, 135, 84, 0.1);
            }

            100% {
                background-color: rgba(25, 135, 84, 0);
            }
        }

        .highlight-animation {
            animation: highlight 1s ease;
        }
    </style>