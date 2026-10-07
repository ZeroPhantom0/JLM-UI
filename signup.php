<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign Up | JLM Cozy Cabin</title>

    <link rel="stylesheet" href="signup.css">
    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >
    <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
>
</head>

<body class="signup-page">

    <!-- =========================
         SIGN UP PAGE
    ========================= -->

    <div class="signup-container">

        <!-- =========================
             LEFT SIDE
        ========================= -->

        <div class="signup-left">

            <div class="signup-brand">
                <div class="signup-logo">
                    <img src="images/JLM Cozy cabin.jpg" alt="JLM Cozy Cabin Logo">
                </div>
                <span>JLM Cozy Cabin</span>
            </div>


            <div class="signup-intro">

                <h1>
                    Your Comfortable
                    <br>
                    Living <span>Space Awaits</span>
                </h1>

                <p>
                    Manage your rental experience with our
                    comprehensive tenant portal
                </p>


                <div class="signup-benefits">

                    <div class="signup-benefit">
                        <span>
                            <i class="bi bi-check"></i>
                        </span>

                        <p>
                            Submit maintenance requests instantly
                        </p>
                    </div>


                    <div class="signup-benefit">
                        <span>
                            <i class="bi bi-check"></i>
                        </span>

                        <p>
                            Track payments and billing history
                        </p>
                    </div>


                    <div class="signup-benefit">
                        <span>
                            <i class="bi bi-check"></i>
                        </span>

                        <p>
                            Browse available rooms virtually
                        </p>
                    </div>


                    <div class="signup-benefit">
                        <span>
                            <i class="bi bi-check"></i>
                        </span>

                        <p>
                            Stay updated with announcements
                        </p>
                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             RIGHT SIDE
        ========================= -->

        <div class="signup-right">

            <div class="signup-form-container">

                <h2>
                    Hello, There!
                </h2>

                <p class="signup-subtitle">
                    Sign up to reserve a unit and access tenant services
                </p>


                <!-- FULL NAME -->

                <div class="signup-form-group">

                    <label for="signupFullName">
                        Full Name *
                    </label>

                    <div class="signup-input-wrapper">

                        <span class="signup-input-icon">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            id="signupFullName"
                            name="fullname"
                            placeholder="Juan Dela Cruz"
                        >

                    </div>

                </div>


                <!-- EMAIL + PHONE -->

                <div class="signup-form-row">

                    <div class="signup-form-group">

                        <label for="signupEmail">
                            Email Address *
                        </label>

                        <div class="signup-input-wrapper">

                            <span class="signup-input-icon">
                                <i class="bi bi-envelope"></i>
                            </span>

                            <input
                                type="email"
                                id="signupEmail"
                                name="email"
                                placeholder="name@example.com"
                            >

                        </div>

                    </div>


                    <div class="signup-form-group">

                        <label for="signupPhone">
                            Phone Number *
                        </label>

                        <div class="signup-input-wrapper">

                            <span class="signup-input-icon">
                                <i class="bi bi-telephone"></i>
                            </span>

                            <input
                                type="tel"
                                id="signupPhone"
                                name="phone"
                                placeholder="+63 912 345 6789"
                            >

                        </div>

                    </div>

                </div>


                <!-- PASSWORD + CONFIRM PASSWORD -->

                <div class="signup-form-row">

                    <div class="signup-form-group">

                        <label for="signupPassword">
                            Password *
                        </label>

                        <div class="signup-input-wrapper">

                            <span class="signup-input-icon">
                                <i class="bi bi-lock"></i>
                            </span>

                            <input
                                type="password"
                                id="signupPassword"
                                name="password"
                                placeholder="Create password"
                            >

                            <button
                                type="button"
                                class="signup-password-toggle"
                                onclick="toggleSignupPassword('signupPassword', this)"
                                aria-label="Show password"
                            >
                                <i class="bi bi-eye"></i>
                            </button>

                        </div>

                    </div>


                    <div class="signup-form-group">

                        <label for="signupConfirmPassword">
                            Confirm Password *
                        </label>

                        <div class="signup-input-wrapper">

                            <span class="signup-input-icon">
                                <i class="bi bi-lock"></i>
                            </span>

                            <input
                                type="password"
                                id="signupConfirmPassword"
                                name="confirm_password"
                                placeholder="Confirm password"
                            >

                            <button
                                type="button"
                                class="signup-password-toggle"
                                onclick="toggleSignupPassword('signupConfirmPassword', this)"
                                aria-label="Show password"
                            >
                                <i class="bi bi-eye"></i>
                            </button>

                        </div>

                    </div>

                </div>


                <!-- TERMS -->

                <label class="signup-terms">

                    <input
                        type="checkbox"
                        name="terms"
                    >

                    <span>
                        I agree to the
                        <a href="#">Terms and Conditions</a>
                        and
                        <a href="#">Privacy Policy</a>
                    </span>

                </label>


                <!-- SIGN UP BUTTON -->

                <button
                    type="button"
                    class="signup-btn"
                    onclick="goToPersonalInformation()"
                >
                    Sign Up
                </button>

                <!-- LOGIN LINK -->

                <p class="login-link-text">
                    Already have an account?
                    <a href="login.php">Log in</a>
                </p>

            </div>

        </div>

    </div>

        <script>
        function goToPersonalInformation() {
            window.location.href = "personal-information.php";
        }
        </script>

    <!-- =========================
         SIGN UP JAVASCRIPT
    ========================= -->

    <script>

        function toggleSignupPassword(inputId, button) {

            const password = document.getElementById(inputId);
            const icon = button.querySelector("i");

            if (password.type === "password") {

                password.type = "text";

                icon.className = "bi bi-eye-slash";

                button.setAttribute(
                    "aria-label",
                    "Hide password"
                );

            } else {

                password.type = "password";

                icon.className = "bi bi-eye";

                button.setAttribute(
                    "aria-label",
                    "Show password"
                );

            }
        }

    </script>

</body>
</html>