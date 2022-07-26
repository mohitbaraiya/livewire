@extends('layouts.app')

@section('content')


    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
       
            <form class="mt-8 space-y-8 w-96" method="POST" action="{{ route('login') }}">
                @csrf
                <input type="hidden" name="remember" value="true">
                    <div class="rounded-md shadow-sm -space-y-px">

                        <div class="mb-5">
                            <label for="email-address" class="sr-only">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class=" appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email addressform-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback text-red-500" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div >
                            <label for="password" class="sr-only">{{ __('Password') }}</label>
                            <input id="password" type="password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Enter password @error('password') is-invalid @enderror" form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback text-red-500" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                    </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                       <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                       <label for="remember-me" class="ml-2 block text-sm text-gray-900"> Remember me </label>
                    </div>

                    <div class="text-sm">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link font-medium text-indigo-600 hover:text-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                    <div class="text-sm">
                        @if (Route::has('register'))
                                    
                            <a class="btn btn-link font-medium text-indigo-600 hover:text-indigo-500" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    
                        @endif
                    </div>
               

                <div >
                    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <!-- Heroicon name: solid/lock-closed -->
                        <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                        </span>
                        Sign in
                    </button>

                </div>
            </form>
    </div>

@endsection
