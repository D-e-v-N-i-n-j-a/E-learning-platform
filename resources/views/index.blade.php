<x-layout>
    <div class="bg-gray-100 min-h-screen p-6">
        <div class="max-w-7xl mx-auto">
            <!-- Welcome Banner -->
            <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-semibold text-gray-800">Welcome 😎, {{ Auth::user()->username }}!</h1>
                <p class="text-gray-600">Here is your overview for today.</p>
            </div>

            <!-- Dashboard Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Recent Courses -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Courses</h2>
                    <ul class="space-y-2">
                        <li class="bg-gray-100 p-4 rounded-lg">Course 1</li>
                        <li class="bg-gray-100 p-4 rounded-lg">Course 2</li>
                        <li class="bg-gray-100 p-4 rounded-lg">Course 3</li>
                    </ul>
                    <a href="#" class="text-blue-600 mt-4 block">View all courses</a>
                </div>

                <!-- Upcoming Assignments -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Upcoming Assignments</h2>
                    <ul class="space-y-2">
                        <li class="bg-gray-100 p-4 rounded-lg">Assignment 1 - Due: 2024-05-25</li>
                        <li class="bg-gray-100 p-4 rounded-lg">Assignment 2 - Due: 2024-05-30</li>
                        <li class="bg-gray-100 p-4 rounded-lg">Assignment 3 - Due: 2024-06-05</li>
                    </ul>
                    <a href="#" class="text-blue-600 mt-4 block">View all assignments</a>
                </div>

                <!-- Recent Grades -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Grades</h2>
                    <ul class="space-y-2">
                        <li class="bg-gray-100 p-4 rounded-lg">Course 1 - Grade: A</li>
                        <li class="bg-gray-100 p-4 rounded-lg">Course 2 - Grade: B+</li>
                        <li class="bg-gray-100 p-4 rounded-lg">Course 3 - Grade: A-</li>
                    </ul>
                    <a href="#" class="text-blue-600 mt-4 block">View all grades</a>
                </div>
            </div>

            <!-- Announcements -->
            <div class="bg-white shadow-md rounded-lg p-6 mt-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Announcements</h2>
                <ul class="space-y-2">
                    <li class="bg-gray-100 p-4 rounded-lg">Announcement 1 - Details...</li>
                    <li class="bg-gray-100 p-4 rounded-lg">Announcement 2 - Details...</li>
                    <li class="bg-gray-100 p-4 rounded-lg">Announcement 3 - Details...</li>
                </ul>
                <a href="#" class="text-blue-600 mt-4 block">View all announcements</a>
            </div>
        </div>
    </div>
</x-layout>
