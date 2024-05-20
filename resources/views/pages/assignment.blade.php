<x-layout>
    <div class="bg-gray-100 min-h-screen p-6">
        <div class="max-w-7xl mx-auto">
            <!-- Page Header -->
            <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                <h1 class="text-3xl font-semibold text-gray-800">Assignments</h1>
                <p class="text-gray-600">Keep track of your assignments and submit them on time.</p>
            </div>

            <!-- Assignments List -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Assignment Card -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">Assignment Title 1</h2>
                        <p class="text-gray-600 mb-4">Brief description of the assignment goes here.</p>
                        <p class="text-gray-600 mb-2"><strong>Due Date:</strong> June 10, 2024</p>
                        <p class="text-gray-600 mb-4"><strong>Status:</strong> Pending</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 hover:underline">View Details</a>
                            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Submit</button>
                        </div>
                    </div>
                </div>

                <!-- Repeat Assignment Card for other assignments -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">Assignment Title 2</h2>
                        <p class="text-gray-600 mb-4">Brief description of the assignment goes here.</p>
                        <p class="text-gray-600 mb-2"><strong>Due Date:</strong> June 15, 2024</p>
                        <p class="text-gray-600 mb-4"><strong>Status:</strong> Completed</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 hover:underline">View Details</a>
                            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Submit</button>
                        </div>
                    </div>
                </div>

                <!-- Add more assignment cards as needed -->
            </div>
        </div>
    </div>
</x-layout>
