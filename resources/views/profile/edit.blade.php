<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/images/dna/dnalogo2.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/dna/dnalogo2.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/dna/dnalogo2.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/dna/dnalogo2.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/dna/dnalogo2.png') }}">
    <title>Delete Account || DNA || Learning Center</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}


<div class="py-12">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div id="delete-account" class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>


</body>
</html>
