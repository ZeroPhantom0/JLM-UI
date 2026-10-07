<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Personal Information | JLM Cozy Cabin</title>

    <link rel="stylesheet" href="personal-information.css">

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- Inter Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

</head>

<body class="personal-page">

    <div class="personal-container">

        <!-- =========================
             LEFT SIDE
        ========================== -->

        <div class="personal-left">

            <div class="personal-brand">

                <div class="personal-logo">
                    <img src="images/JLM Cozy cabin.jpg" alt="JLM Cozy Cabin Logo">
                </div>

                <div>
                    <strong>JLM Cozy Cabin</strong>
                    <span>Complete Your Profile</span>
                </div>

            </div>


            <div class="personal-intro">

                <h1>Almost There!</h1>

                <p>
                    Complete your profile to access your tenant
                    portal and start managing your rental
                    experience.
                </p>


                <!-- STEP 1 -->

                <div class="personal-step active">

                    <div class="step-icon">
                        <i class="bi bi-person"></i>
                    </div>

                    <div class="step-content">
                        <strong>Step 1</strong>
                        <span>Personal Information</span>
                    </div>

                </div>


                <!-- STEP 2 -->

                <div class="personal-step">

                    <div class="step-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>

                    <div class="step-content">
                        <strong>Step 2</strong>
                        <span>Identity Verification</span>
                    </div>

                </div>

            </div>


            <div class="personal-help">

                <div class="help-line"></div>

                <p>
                    Need help? Contact us at
                    <strong>support@jlmcozycabin.ph</strong>
                </p>

            </div>

        </div>


        <!-- =========================
             RIGHT SIDE
        ========================== -->

        <div class="personal-right">

            <div class="personal-form-container">

                <h2>Personal Information</h2>

                <p class="personal-subtitle">
                    Tell us about yourself to get started
                </p>


                <!-- PROFILE PICTURE -->

                <div class="profile-picture-section">

                    <div class="profile-picture-wrapper">

                        <div class="profile-picture-placeholder">
                            <i class="bi bi-person"></i>
                        </div>

                        <label
                            for="profilePicture"
                            class="profile-camera-btn"
                            aria-label="Upload profile picture"
                        >
                            <i class="bi bi-camera"></i>
                        </label>

                        <input
                            type="file"
                            id="profilePicture"
                            name="profile_picture"
                            accept="image/*"
                            hidden
                        >

                    </div>


                    <div class="profile-picture-info">

                        <h3>Profile Picture</h3>

                        <p>
                            Upload a clear photo of yourself (optional)
                        </p>

                    </div>

                </div>


                <div class="personal-divider"></div>


                <!-- FULL NAME -->

                <div class="personal-form-group">

                    <label for="fullName">
                        Full Name *
                    </label>

                    <div class="personal-input-wrapper">

                        <span class="personal-input-icon">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            id="fullName"
                            name="fullname"
                            placeholder="Juan Dela Cruz"
                        >

                    </div>

                </div>


                <!-- EMAIL + CONTACT -->

                <div class="personal-form-row">

                    <div class="personal-form-group">

                        <label for="email">
                            Email Address *
                        </label>

                        <div class="personal-input-wrapper">

                            <span class="personal-input-icon">
                                <i class="bi bi-envelope"></i>
                            </span>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="juan@example.com"
                            >

                        </div>

                    </div>


                    <div class="personal-form-group">

                        <label for="contactNumber">
                            Contact Number *
                        </label>

                        <div class="personal-input-wrapper">

                            <span class="personal-input-icon">
                                <i class="bi bi-telephone"></i>
                            </span>

                            <input
                                type="tel"
                                id="contactNumber"
                                name="contact_number"
                                placeholder="+63 912 345 6789"
                            >

                        </div>

                    </div>

                </div>


                <!-- CURRENT ADDRESS -->

                <div class="personal-form-group">

                    <label for="currentAddress">
                        Current Address
                    </label>

                    <div class="personal-input-wrapper">

                        <span class="personal-input-icon">
                            <i class="bi bi-geo-alt"></i>
                        </span>

                        <textarea
                            id="currentAddress"
                            name="current_address"
                            placeholder="123 Street Name, Barangay, City, Province"
                        ></textarea>

                    </div>

                </div>


                <!-- EMERGENCY CONTACT -->

                <div class="emergency-contact-box">

                    <h3>
                        <i class="bi bi-exclamation-circle"></i>
                        Emergency Contact Information
                    </h3>


                    <div class="emergency-form-row">

                        <div class="personal-form-group">

                            <label for="emergencyName">
                                Contact Name *
                            </label>

                            <div class="personal-input-wrapper">

                                <input
                                    type="text"
                                    id="emergencyName"
                                    name="emergency_name"
                                    placeholder="Maria Dela Cruz"
                                >

                            </div>

                        </div>


                        <div class="personal-form-group">

                            <label for="emergencyNumber">
                                Contact Number *
                            </label>

                            <div class="personal-input-wrapper">

                                <input
                                    type="tel"
                                    id="emergencyNumber"
                                    name="emergency_number"
                                    placeholder="+63 998 765 4321"
                                >

                            </div>

                        </div>

                    </div>

                </div>


                <!-- BOTTOM ACTIONS -->

                <div class="personal-actions">

                    <a href="login.php" class="back-login-btn">
                        <i class="bi bi-chevron-left"></i>
                        Back to Login
                    </a>

                    <a
                        href="identity-verification.php"
                        class="next-step-btn"
                    >
                        Next Step
                        <i class="bi bi-chevron-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>