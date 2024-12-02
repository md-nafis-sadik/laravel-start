<x-app-layout>
<div class="container mx-auto p-8" >
    <h1 class="text-2xl font-semibold text-gray-700 mb-6">Add Employee</h1>
    <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
    </div>

    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
    </div>

    <div class="mb-4">
        <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
        <input type="text" name="position" id="position" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
    </div>

    <div class="mb-4">
        <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
        <input type="number" name="salary" id="salary" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
    </div>

    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Employee Image</label>
        <input type="file" name="image" id="image" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
    </div>

    <div class="mb-4">
        <button type="submit"  style="background-color: blue;" class="bg-blue-500 text-white p-2 rounded-md">Save Employee</button>
    </div>
</form>

</div>
</x-app-layout>
