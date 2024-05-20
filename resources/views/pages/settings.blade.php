<x-layout>
    <div class="bg-gray-100 min-h-screen p-6">
        <div class="max-w-7xl mx-auto">
            <!-- Page Header -->
            <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                <h1 class="text-3xl font-semibold text-gray-800">Profile Settings</h1>
                <p class="text-gray-600">Manage your profile settings and keep your information up to date.</p>
            </div>

            <!-- Profile Settings Form -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <form method="post">
                    @csrf
                    <!-- Personal Information Section -->
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Personal Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="username" class="block text-gray-700">Username</label>
                                <input type="text" name="username" id="username" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{ old('username', auth()->user()->username) }}">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700">Email</label>
                                <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{ old('email', auth()->user()->email) }}" readonly>
                            </div>
                            <div>
                                <label for="phone" class="block text-gray-700">Phone Number</label>
                                <input type="text" name="phone" id="phone" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{ old('phone', auth()->user()->phone) }}">
                            </div>
                            <div>
                                <label for="address" class="block text-gray-700">Street Address</label>
                                <input type="text" name="address" id="address" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{ old('address', auth()->user()->address) }}">
                            </div>
                        </div>
                    </div>

                    <!-- Password Change Section -->
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Change Password</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="password" class="block text-gray-700">New Password</label>
                                <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded mt-1">
                            </div>
                            <div>
                                <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 border border-gray-300 rounded mt-1">
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
