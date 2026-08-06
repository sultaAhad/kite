<!-- App Include Here -->
<?php 
$headerClasslink = 'header-classlinkmenu';
$headerClass = 'header-absolute';
$logoImg = 'img/inner-logo.png'; // Yahan apna inner page wala logo ka path dalein
include 'inc/app.php'; 
?>

<!-- Body Content Start Here -->

<!-- banner Include Here  -->
<?php
$pageTitle = "OTP Verification";
include 'inc/sub-banner.php';
?>
<!-- banner Include End Here  -->

<style>
    .auth-section {
        background-color: #050b14;
        color: #fff;
        padding: 80px 0;
    }
    .auth-card {
        background-color: #0d1b2a;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        text-align: center;
    }
    .auth-title {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #fff;
    }
    .auth-desc {
        font-size: 14px;
        color: #a0abbb;
        margin-bottom: 30px;
    }
    .auth-desc span {
        color: #fff;
        font-weight: 600;
    }
    
    /* OTP Input Fields Styling */
    .otp-inputs {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 30px;
    }
    .otp-input {
        width: 55px;
        height: 55px;
        background-color: #050b14;
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 12px;
        font-size: 22px;
        font-weight: 700;
        color: #fff;
        text-align: center;
        outline: none;
        transition: border-color 0.3s;
    }
    .otp-input:focus {
        border-color: #ff4500;
    }

    .auth-btn {
        background: linear-gradient(90deg, #ff7a00 0%, #ff4500 100%);
        color: #fff;
        border: none;
        width: 100%;
        padding: 12px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
        transition: opacity 0.3s;
    }
    .auth-btn:hover {
        opacity: 0.9;
        color: #fff;
    }

    /* Resend Timer Styling */
    .resend-wrap {
        margin-top: 25px;
        font-size: 14px;
        color: #a0abbb;
    }
    .resend-wrap a {
        color: #ff4500;
        text-decoration: none;
        font-weight: 600;
        pointer-events: none;
        opacity: 0.5;
    }
    .resend-wrap a.active {
        pointer-events: auto;
        opacity: 1;
    }
</style>

<section class="auth-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="auth-card">
                    <h2 class="auth-title">Enter Verification Code</h2>
                    <p class="auth-desc">We have sent a 4-digit code to your email <span>johndoe@example.com</span></p>
                    
                    <form class="auth-form" action="change-password.php" method="POST">
                        <!-- 4 Digit OTP Inputs -->
                        <div class="otp-inputs">
                            <input type="text" class="otp-input" maxlength="1" pattern="[0-9]*" inputmode="numeric" required>
                            <input type="text" class="otp-input" maxlength="1" pattern="[0-9]*" inputmode="numeric" required>
                            <input type="text" class="otp-input" maxlength="1" pattern="[0-9]*" inputmode="numeric" required>
                            <input type="text" class="otp-input" maxlength="1" pattern="[0-9]*" inputmode="numeric" required>
                        </div>
                        
                        <button type="submit" class="auth-btn">Verify OTP</button>
                    </form>

                    <!-- Resend Counter Section -->
                    <div class="resend-wrap">
                        Didn't receive the code? <br>
                        <span id="timer-text">Resend code in <strong id="countdown" class="text-white">30</strong>s</span>
                        <a href="#" id="resend-btn">Resend OTP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advance OTP JS (Auto-focus navigation & Countdown Timer) -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // 1. Auto-focus next input box when typing
        const inputs = document.querySelectorAll('.otp-input');
        
        inputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                const value = e.target.value;
                if (value && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && !input.value && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });

        // 2. Resend Countdown Timer Logic (30 Seconds)
        let timeLeft = 30;
        const countdownEl = document.getElementById('countdown');
        const timerTextEl = document.getElementById('timer-text');
        const resendBtn = document.getElementById('resend-btn');

        function startTimer() {
            timeLeft = 30;
            resendBtn.classList.remove('active');
            timerTextEl.style.display = 'inline';

            let timer = setInterval(function () {
                if (timeLeft <= 0) {
                    clearInterval(timer);
                    timerTextEl.style.display = 'none';
                    resendBtn.classList.add('active');
                } else {
                    countdownEl.textContent = timeLeft;
                    timeLeft -= 1;
                }
            }, 1000);
        }

        startTimer();

        resendBtn.addEventListener('click', function (e) {
            e.preventDefault();
            if (resendBtn.classList.contains('active')) {
                alert("A new OTP has been sent to your email.");
                startTimer();
            }
        });
    });
</script>

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>