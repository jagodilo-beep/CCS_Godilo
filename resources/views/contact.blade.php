@extends('layouts.app')

@section('title', 'Contact Us - CCS')

@section('content')
    <div>
        <h1 class="text-3xl font-bold text-blue-700 mb-4">Get in Touch with CCS</h1>
        <p class="text-gray-700 mb-6">
            We'd love to hear from you! Whether you’re a prospective student, a parent, or an industry partner, don’t hesitate to reach out to us.
        </p>

        <div class="space-y-4">
            <div>
                <h2 class="text-xl font-semibold text-gray-800">📍 Address:</h2>
                <p class="text-gray-600">CCS Building,CSPC, CS, PH 1234</p>
            </div>

            <div>
                <h2 class="text-xl font-semibold text-gray-800">📞 Phone:</h2>
                <p class="text-gray-600">+63 900 123 4567</p>
            </div>

            <div>
                <h2 class="text-xl font-semibold text-gray-800">✉️ Email:</h2>
                <p class="text-gray-600">cspc@cspc.edu.ph</p>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Or send us a message directly:</h2>
            <form action="#" method="POST" class="space-y-4">
                <input type="text" placeholder="Your Name" class="w-full border rounded px-4 py-2" required>
                <input type="email" placeholder="Your Email" class="w-full border rounded px-4 py-2" required>
                <textarea placeholder="Your Message" rows="4" class="w-full border rounded px-4 py-2" required></textarea>
                <button class="inline-block px-6 py-3 rounded-lg text-lg text-white transition" style="background: linear-gradient(90deg, #8c52ff, #ff5ca4);">Send Message</button>
            </form>
        </div>
    </div>
@endsection
