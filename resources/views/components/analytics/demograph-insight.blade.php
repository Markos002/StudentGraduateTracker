@props(['studentOverViewCourse','selectedCourse','courses'])

<div class="container mx-auto p-8 bg-white rounded-md mt-5 overflow-x-auto">
    <div class="flex justify-between">
        <p class="text-xl font-bold pb-6">Demographic Overview</p>
    </div>
    <div class="grid grid-cols-1 gap-3 text-center align-content-center">
        <div class="p-4 flex  rounded-lg  justify-between">
            <p class="text-xl font-bold">Total Graduates</p>
            <p class="text-3xl font-bold ">
                {{ $studentOverViewCourse['total_graduates'] ?? 0 }}
            </p>
        </div>

        <div class="p-4 flex  rounded-lg  justify-between">
            <p class="text-xl font-bold">Total Registered</p>
            <p class="text-3xl font-bold ">
                {{ $studentOverViewCourse['total_registered'] ?? 0 }}
            </p>
        </div>

        <div class="p-4 flex rounded-lg justify-between">
            <p class="text-xl font-bold">Total Employed</p>
            <p class="text-3xl font-bold ">
                {{ $studentOverViewCourse['total_employed'] ?? 0 }}
            </p>
        </div>

        <div class="p-4 flex  rounded-lg justify-between">
            <p class="text-xl font-bold">Total Unemployed</p>
            <p class="text-3xl font-bold ">
                {{ $studentOverViewCourse['total_unemployed'] ?? 0 }}
            </p>
        </div>
    </div>
</div>


