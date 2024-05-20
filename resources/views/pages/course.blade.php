<x-layout>
    <div class="bg-gray-100 min-h-screen p-6">
        <div class="max-w-7xl mx-auto">
            <!-- Page Header -->
            <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                <h1 class="text-3xl font-semibold text-gray-800">Available Courses</h1>
                <p class="text-gray-600">Explore the courses and enhance your skills.</p>
            </div>

            <!-- Courses List -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Course Card -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Course Image" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">Course Title 1</h2>
                        <p class="text-gray-600 mb-4">Brief description of the course goes here. This should be concise and informative.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 hover:underline">View Details</a>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Enroll</button>
                        </div>
                    </div>
                </div>

                <!-- Repeat Course Card for other courses -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Course Image" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">Course Title 2</h2>
                        <p class="text-gray-600 mb-4">Brief description of the course goes here. This should be concise and informative.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 hover:underline">View Details</a>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Enroll</button>
                        </div>
                    </div>
                </div>

                <!-- Add more course cards as needed -->
            </div>
        </div>
    </div>
</x-layout>
