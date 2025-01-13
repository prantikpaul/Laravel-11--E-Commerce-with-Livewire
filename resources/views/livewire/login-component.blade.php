<div>
    <main class="main">

        <style>
            .alert {
                padding: 15px;
                border-radius: 5px;
                margin: 10px 0;
                font-size: 16px;
                font-weight: bold;
                position: relative;
                animation: fade-in 0.5s ease-in-out;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            }

            .alert-success {
                background-color: #d4edda;
                color: #155724;
                border: 1px solid #c3e6cb;
            }

            .alert-error {
                background-color: #f8d7da;
                color: #721c24;
                border: 1px solid #f5c6cb;
            }

            /* Ensure smooth transition for fade-out */
            .alert {
                transition: opacity 0.5s ease-in-out;
            }


        </style>
        <script>
            // Automatically hide the alerts after 5 seconds (5000ms)
            document.addEventListener('DOMContentLoaded', function () {
                setTimeout(() => {
                    const successAlert = document.getElementById('success-alert');
                    const errorAlert = document.getElementById('error-alert');
                    if (successAlert) {
                        successAlert.style.transition = 'opacity 0.5s ease-in-out';
                        successAlert.style.opacity = '0';
                        setTimeout(() => successAlert.remove(), 500); // Remove after fade out
                    }
                    if (errorAlert) {
                        errorAlert.style.transition = 'opacity 0.5s ease-in-out';
                        errorAlert.style.opacity = '0';
                        setTimeout(() => errorAlert.remove(), 500); // Remove after fade out
                    }
                }, 5000); // 5 seconds
            });
        </script>

        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Login
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-5">
                                @if (session()->has('success'))
                                    <div id="success-alert" class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if (session()->has('error'))
                                    <div id="error-alert" class="alert alert-error">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                    <br>
                                    <br>



                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Login</h3>
                                        </div>
                                        <!-- Display success or error message -->
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">{{ session('message') }}</div>
                                        @endif

                                        @if (session()->has('error'))
                                            <div class="alert alert-danger">{{ session('error') }}</div>
                                        @endif
                                        <form wire:submit.prevent="submitLogin">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" wire:model="email" required placeholder="Your Email">
                                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" wire:model="password" required placeholder="Password">
                                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" wire:model="remember_me" type="checkbox" id="exampleCheckbox1" value="1">
                                                        <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                                    </div>
                                                </div>
                                                <a class="text-muted" href="#">Forgot password?</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up">Log in</button>
                                            </div>
                                        </form>



                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-6">
                                <img src="assets/imgs/login.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
