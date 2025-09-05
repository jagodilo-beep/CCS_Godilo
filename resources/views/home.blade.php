@extends('layouts.app')

@section('title', 'Home - CCS')

@section('content')
    <div class="text-center">
        <h1 class="text-4xl font-bold" style="color: #8c52ff;">Welcome to the College of Computer Studies</h1>
        <p class="text-lg mb-6" style="color: #ff5ca4;">
            At CCS, we are committed to preparing the next generation of tech leaders and innovators. Whether you're passionate about software development, cybersecurity, or data science, you'll find a place here to grow and excel.
        </p>
        <a href="{{ url('/about') }}" class="inline-block px-6 py-3 rounded-lg text-lg text-white transition" style="background: linear-gradient(90deg, #8c52ff, #ff5ca4);">
            Learn More About Us
        </a>
    </div>
@endsection
