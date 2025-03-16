@extends('layouts.guest')

@section('content')
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="/" class="navbar-brand navbar-brand-autodark">
                    <img src="{{ asset('logo.jpeg') }}" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                </a>
            </div>
            <form class="card card-md" action="{{ route('register') }}" method="POST" autocomplete="off">
                @csrf
                @method('POST')
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Create new account</h2>
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                            placeholder="Enter Firstname" name="firstname">
                        @error('firstname')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control @error('lastname') is-invalid @enderror"
                            placeholder="Enter LastName" name="lastname">
                        @error('lastname')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Enter your email" name="email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="input-group input-group-flat">
                            <input type="password"
                                class="form-control @error('password')
                is-invalid
              @enderror"
                                placeholder="Password" autocomplete="off" name="password" id="password">
                            {{-- <span class="input-group-text @error('password')
                is-invalid
              @enderror">
                <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                </a>
              </span> --}}
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" placeholder="Password" autocomplete="off"
                                name="password_confirmation">
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Show password"
                                    data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">I am a</label>
                        <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
                            <label class="form-selectgroup-item flex-fill">
                                <input type="radio" name="user_type_id" value="1"
                                    class="form-selectgroup-input @error('user_type_id') is-invalid @enderror"
                                    {{ old('user_type_id', '1') == '1' ? 'checked' : '' }}>
                                <div class="form-selectgroup-label d-flex align-items-center p-3">
                                    <div class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </div>
                                    <div>Renter looking to find a parking spot</div>
                                </div>
                            </label>

                            <label class="form-selectgroup-item flex-fill">
                                <input type="radio" name="user_type_id" value="2"
                                    class="form-selectgroup-input @error('user_type_id') is-invalid @enderror"
                                    {{ old('user_type_id') == '2' ? 'checked' : '' }}>
                                <div class="form-selectgroup-label d-flex align-items-center p-3">
                                    <div class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </div>
                                    <div>Tenant looking to rent my parking spot</div>
                                </div>
                            </label>
                        </div>

                        @error('user_type_id')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" />
                            <span class="form-check-label">Agree the <a href="{{ route('terms') }}" tabindex="-1">terms and
                                    policy</a>.</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Create new account</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-secondary mt-3">
                Already have account? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
            </div>
        </div>
    </div>
@endsection
