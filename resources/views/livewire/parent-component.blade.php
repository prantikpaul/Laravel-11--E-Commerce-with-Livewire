<div>
    <div>
        <!-- Header with navigation -->
        <header>
            <nav>
                <button wire:click="setPage('home')">Home</button>
                <button wire:click="setPage('shop')">Shop</button>
                <button wire:click="setPage('my-account')">My Account</button>
                <button wire:click="setPage('contact-us')">Contact Us</button>
                <button wire:click="setPage('profile')">My Profile</button>
            </nav>
        </header>

        <!-- Dynamic Content -->
        <main>
            @if ($currentPage === 'home')
                @livewire('home2-component')
            @elseif ($currentPage === 'shop')
                @livewire('shop2-component')
{{--            @elseif ($currentPage === 'my-account')--}}
{{--                @livewire('my-account-component')--}}
{{--            @elseif ($currentPage === 'contact-us')--}}
{{--                @livewire('contact-us-component')--}}
{{--            @elseif ($currentPage === 'profile')--}}
{{--                @livewire('profile-component')--}}
{{--            @elseif ($currentPage === 'login')--}}
{{--                @livewire('login-component')--}}
{{--            @elseif ($currentPage === 'register')--}}
{{--                @livewire('register-component')--}}
            @endif
        </main>

        <!-- Footer -->
        <footer>
            <p>&copy; 2025 E-commerce Application</p>
        </footer>
    </div>

</div>
