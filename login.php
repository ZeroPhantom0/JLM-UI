<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | JLM Cozy Cabin</title>

    <link rel="stylesheet" href="style.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>

</head>

<body class="login-page">

    <!-- =========================
         LOGIN PAGE
    ========================= -->

    <div class="login-container">


        <!-- =========================
             LEFT SIDE
        ========================= -->

        <div class="login-left">

            <div class="login-brand">
                <div class="login-logo">
                    <img src="images/JLM Cozy cabin.jpg" alt="JLM Cozy Cabin Logo">
                </div>
                <span>JLM Cozy Cabin</span>
            </div>


            <div class="login-intro">

                <h1>
                    Your Comfortable
                    <br>
                    Living <span>Space Awaits</span>
                </h1>

                <p>
                    Manage your rental experience with our
                    comprehensive tenant portal
                </p>


                <div class="login-benefits">

                    <div class="login-benefit">
                        <span>
                            <i class="bi bi-check"></i>
                        </span>
                        <p>Submit maintenance requests instantly</p>
                    </div>

                    <div class="login-benefit">
                        <span>
                            <i class="bi bi-check"></i>
                        </span>
                        <p>Track payments and billing history</p>
                    </div>

                    <div class="login-benefit">
                        <span>
                            <i class="bi bi-check"></i>
                        </span>
                        <p>Browse available rooms virtually</p>
                    </div>

                    <div class="login-benefit">
                        <span>
                            <i class="bi bi-check"></i>
                        </span>
                        <p>Stay updated with announcements</p>
                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             RIGHT SIDE
        ========================= -->

        <div class="login-right">

            <div class="login-form-container">

             <a href="index.php" class="back-home-link">
                <i class="bi bi-arrow-left"></i>
                Back to Home
            </a>

                <h2>Welcome Back!</h2>

                <p class="login-subtitle">
                    Sign in to access your tenant portal
                </p>


                <!-- EMAIL -->

                <div class="login-form-group">

                    <label for="loginEmail">
                        Email Address
                    </label>

                    <div class="login-input-wrapper">

                        <span class="login-input-icon">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input
                            type="email"
                            id="loginEmail"
                            name="email"
                            placeholder="name@example.com"
                        >

                    </div>

                </div>


                <!-- PASSWORD -->

                <div class="login-form-group">

                    <label for="loginPassword">
                        Password
                    </label>

                    <div class="login-input-wrapper">

                        <span class="login-input-icon">
                            <i class="bi bi-lock"></i>
                        </span>

                        <input
                            type="password"
                            id="loginPassword"
                            name="password"
                            placeholder="Enter your password"
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword()"
                            aria-label="Show password"
                        >
                            <i class="bi bi-eye"></i>
                        </button>

                    </div>

                </div>


                <!-- REMEMBER / FORGOT -->

                <div class="login-options">

                    <label class="remember-me">

                        <input
                            type="checkbox"
                            name="remember"
                        >

                        <span>Remember me</span>

                    </label>

                    <a href="#">
                        Forgot password?
                    </a>

                </div>


                <!-- LOGIN BUTTON -->

                <button
                    type="button"
                    class="login-btn"
                    id="btnLoginSubmit"
                >
                    Log In
                </button>


                <!-- OR -->

                <div class="login-divider">

                    <span></span>

                    <p>OR</p>

                    <span></span>

                </div>


                <!-- GOOGLE -->

                <button
                    type="button"
                    class="google-login-btn"
                    onclick="goToPersonalInformation()"
                >

                    <strong>G</strong>

                    Continue with Google

                </button>


                <!-- SIGN UP -->

                <p class="signup-text">

                    Don’t have an account?

                    <a href="signup.php">
                        Sign up
                    </a>

                </p>

            </div>

        </div>

    </div>


    <!-- =========================
         PASSWORD TOGGLE
    ========================= -->

    <script>

            function togglePassword() {

            const password =
                document.getElementById("loginPassword");

            const icon =
                document.querySelector(".password-toggle i");

            const button =
                document.querySelector(".password-toggle");

            if (password.type === "password") {

                password.type = "text";
                icon.className = "bi bi-eye-slash";
                button.setAttribute("aria-label", "Hide password");

            } else {

                password.type = "password";
                icon.className = "bi bi-eye";
                button.setAttribute("aria-label", "Show password");

            }

        }

        const btnLoginSubmit = document.getElementById("btnLoginSubmit");

        btnLoginSubmit.addEventListener("click", () => {
        window.location.href = "tenants/dashboard.html";
      });

        function goToPersonalInformation() {
            window.location.href = "personal-information.php";
        }

    </script>

</body>

</html>