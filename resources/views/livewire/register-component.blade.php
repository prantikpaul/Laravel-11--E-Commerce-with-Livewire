<div>
    <style>.error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }</style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" rel="nofollow">Home</a>
                    <span></span> Register
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Create an Account</h3>
                                        </div>
                                        <form wire:submit.prevent="register">
                                            @csrf

                                            <div class="form-group">
                                                <input type="text" wire:model="name" placeholder="Name">
                                                @error('name')
                                                <div class="error-message">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="text" wire:model="email" placeholder="Email">
                                                @error('email')
                                                <div class="error-message">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="text" wire:model="phone" placeholder="Phone Number">
                                                @error('phone')
                                                <div class="error-message">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="text" wire:model="address" placeholder="Address">
                                                @error('address')
                                                <div class="error-message">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="password" wire:model="password" placeholder="Password">
                                                @error('password')
                                                <div class="error-message">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="password" wire:model="password_confirmation" placeholder="Confirm Password">
                                                @error('password_confirmation')
                                                <div class="error-message">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <button type="submit">Register</button>
                                            </div>
                                        </form>


                                        <div class="text-muted text-center">Already have an account? <a href="{{ route('login') }}">Sign in now</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="assets/imgs/login.png" alt="Login">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
