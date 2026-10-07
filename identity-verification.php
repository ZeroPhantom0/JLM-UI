<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Identity Verification | JLM Cozy Cabin</title>

    <link rel="stylesheet" href="identity-verification.css">

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

<body class="identity-page">

    <div class="identity-container">


        <!-- =========================
             LEFT SIDE
        ========================== -->

        <div class="identity-left">

            <!-- BRAND -->

            <div class="identity-brand">

                <div class="identity-logo">
                    <img src="images/JLM Cozy cabin.jpg" alt="JLM Cozy Cabin Logo">
                </div>

                <div>
                    <strong>JLM Cozy Cabin</strong>
                    <span>Complete Your Profile</span>
                </div>

            </div>


            <!-- INTRO -->

            <div class="identity-intro">

                <h1>Almost There!</h1>

                <p>
                    Complete your profile to access your tenant
                    portal and start managing your rental
                    experience.
                </p>


                <!-- STEP 1 -->

                <div class="identity-step completed">

                    <div class="step-icon">
                        <i class="bi bi-check"></i>
                    </div>

                    <div class="step-content">

                        <strong>Step 1</strong>

                        <span>
                            Personal Information
                        </span>

                    </div>

                </div>


                <!-- STEP 2 -->

                <div class="identity-step active">

                    <div class="step-icon">

                        <i class="bi bi-file-earmark-text"></i>

                    </div>

                    <div class="step-content">

                        <strong>Step 2</strong>

                        <span>
                            Identity Verification
                        </span>

                    </div>

                </div>

            </div>


            <!-- HELP -->

            <div class="identity-help">

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

        <div class="identity-right">

            <div class="identity-form-container">


                <!-- HEADER -->

                <h2>Identity Verification</h2>

                <p class="identity-subtitle">
                    Upload a valid government-issued ID for verification
                </p>


                <!-- ID TYPE -->

                <div class="identity-form-group">

                    <label for="idType">
                        Valid ID Type *
                    </label>

                    <div class="identity-select-wrapper">

                        <select id="idType" name="id_type">

                            <option value="">
                                Choose ID Type
                            </option>

                            <option value="passport">
                                Passport
                            </option>

                            <option value="drivers-license">
                                Driver's License
                            </option>

                            <option value="national-id">
                                National ID
                            </option>

                            <option value="sss">
                                SSS ID
                            </option>

                            <option value="philhealth">
                                PhilHealth ID
                            </option>

                            <option value="umid">
                                UMID
                            </option>

                            <option value="postal-id">
                                Postal ID
                            </option>

                            <option value="other">
                                Other Government-Issued ID
                            </option>

                        </select>

                        <i class="bi bi-chevron-down"></i>

                    </div>

                </div>


                <!-- ID FRONT -->

                <div class="identity-form-group">

                    <label>
                        Upload Valid ID (Front) *
                    </label>

                    <label
                        for="idFront"
                        class="upload-box"
                    >

                        <i class="bi bi-cloud-arrow-up"></i>

                        <strong>
                            Click to upload ID front
                        </strong>

                        <span>
                            PNG, JPG, JPEG up to 10MB
                        </span>

                    </label>

                    <input
                        type="file"
                        id="idFront"
                        name="id_front"
                        accept=".png,.jpg,.jpeg"
                        hidden
                    >

                </div>


                <!-- ID BACK / SELFIE -->

                <div class="identity-form-group">

                    <label>
                        Upload Valid ID (Back) or Selfie with ID
                    </label>

                    <label
                        for="idBack"
                        class="upload-box"
                    >

                        <i class="bi bi-cloud-arrow-up"></i>

                        <strong>
                            Click to upload ID back or selfie
                        </strong>

                        <span>
                            PNG, JPG, JPEG up to 10MB (Optional)
                        </span>

                    </label>

                    <input
                        type="file"
                        id="idBack"
                        name="id_back"
                        accept=".png,.jpg,.jpeg"
                        hidden
                    >

                </div>


                <!-- SECURITY NOTICE -->

                <div class="security-notice">

                    <i class="bi bi-exclamation-circle"></i>

                    <p>
                        Your documents are encrypted and securely stored.
                        We only use them for identity verification and
                        never share your information with third parties.
                    </p>

                </div>


                <!-- AGREEMENT -->

                <label class="verification-agreement">

                    <input
                        type="checkbox"
                        name="verification_agreement"
                    >

                    <span>

                        I agree to the
                        <a href="#">
                            Terms and Conditions
                        </a>

                        and

                        <a href="#">
                            Privacy Policy
                        </a>.

                        I understand that my information will be used
                        for verification purposes only.

                    </span>

                </label>


                <!-- ACTIONS -->

                <div class="identity-actions">

                    <a
                        href="personal-information.php"
                        class="previous-step-btn"
                    >
                        <i class="bi bi-chevron-left"></i>
                        Previous Step
                    </a>


                  <button
                    type="button"
                    class="submit-finish-btn"
                     id="btnSubmitAndFinish"
                >
                    Submit &amp; Finish
                    <i class="bi bi-check"></i>
                </button>

                </div>


            </div>

        </div>

    </div>

    <script>

        const btnSubmitAndFinish = document.getElementById("btnSubmitAndFinish");

        btnSubmitAndFinish.addEventListener("click", () => {
        window.location.href = "tenants/dashboard.html";
      });


    </script>

</body>

</html>