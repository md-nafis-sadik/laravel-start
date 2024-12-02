<x-app-layout>


<div class="container mx-auto py-8">
    <h1 class="text-2xl font-semibold text-gray-700 mb-6">Edit Employee</h1>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" name="name" id="name" value="{{ $employee->name }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
    </div>

    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" value="{{ $employee->email }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
    </div>

    <div class="mb-4">
        <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
        <input type="text" name="position" id="position" value="{{ $employee->position }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
    </div>

    <div class="mb-4">
        <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
        <input type="number" name="salary" id="salary" value="{{ $employee->salary }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
    </div>

    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Employee Image</label>
        <input type="file" name="image" id="image" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
    </div>

    @if($employee->image)
        <div class="mb-4">
            <img src="{{ Storage::url($employee->image) }}" alt="Employee Image" class="w-32 h-32 object-cover rounded-md">
        </div>
    @endif

    <div class="mb-4">
        <button type="submit"  style="background-color: blue; class="bg-blue-500 text-white p-2 rounded-md">Update Employee</button>
    </div>
</form>
</div>

</x-app-layout>
