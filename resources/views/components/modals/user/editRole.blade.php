<div id="editRole" class="modal-overlay hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-5 z-50">
    <div class=" bg-white rounded-lg w-full max-w-lg h-full overflow-y-auto max-h-[20rem] lg:h-full lg:max-h-[40rem] p-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-black">Edit Role</h2>
            <button onclick="closeModal('editRole')" class="text-gray-600 hover:text-gray-900">
                <svg class="w-full h-full max-h-4 max-w-4" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 12.7357L2.6749 20.5608C2.38213 20.8536 2.00951 21 1.55703 21C1.10456 21 0.731938 20.8536 0.439163 20.5608C0.146387 20.2681 0 19.8954 0 19.443C0 18.9905 0.146387 18.6179 0.439163 18.3251L8.26426 10.5L0.439163 2.6749C0.146387 2.38213 0 2.00951 0 1.55703C0 1.10456 0.146387 0.731938 0.439163 0.439163C0.731938 0.146387 1.10456 0 1.55703 0C2.00951 0 2.38213 0.146387 2.6749 0.439163L10.5 8.26426L18.3251 0.439163C18.6179 0.146387 18.9905 0 19.443 0C19.8954 0 20.2681 0.146387 20.5608 0.439163C20.8536 0.731938 21 1.10456 21 1.55703C21 2.00951 20.8536 2.38213 20.5608 2.6749L12.7357 10.5L20.5608 18.3251C20.8536 18.6179 21 18.9905 21 19.443C21 19.8954 20.8536 20.2681 20.5608 20.5608C20.2681 20.8536 19.8954 21 19.443 21C18.9905 21 18.6179 20.8536 18.3251 20.5608L10.5 12.7357Z" fill="black" fill-opacity="0.55"/></svg>
            </button>
        </div>

        <form id="editRoleForm" action="{{ route('student.update.careerHistory', 0) }}" method="POST"  class="gap-2 text-black text-sm">
            @csrf
            @method('PUT')

            <input type="hidden" id="edit_id" name="job_id">
            <!-- Job Title -->
            <x-inputs.modal-input
                type="text"
                id="edit_occupation"
                name="occupation"
                label="Job Title"
                placeholder="Enter Job Title"
            />

            <!-- Position Name -->
            <x-inputs.modal-input 
                type="text"
                id="edit_position"
                name="position"
                label="Position"
                placeholder="Enter Position"
            />
            <!-- Occupation Status -->
            <x-inputs.select-input 
                id="edit_occupation_status" 
                name="occupation_status" 
                label="Occupation Status" 
                :options="['','Employed','Unemployed']" 
                selected=""
            />

            <!-- Course Alingment -->
            <x-inputs.select-input 
                id="edit_course_alignment" 
                name="course_alignment" 
                label="Course Alignment" 
                :options="['','Aligned','Not Aligned']" 
                selected=""
            />

            <!-- Started -->
            <div class="space-y-3">
                <label class="block text-sm font-medium text-gray-700 mb-1">Started</label>
                <input 
                    type="date" 
                    name="start_date" 
                    id="edit_start_date"
                    class="w-full px-3 py-2 border border-black rounded-md focus:outline-none focus:ring-0 focus:border-black"
                >
            </div>

            <!-- Ended -->
            <div class="space-y-3" id="endField">
                <label class="block text-sm font-medium text-gray-700 my-2">Ended</label>
                <input 
                    type="date" 
                    name="end_date" 
                    id="edit_end_date"
                    class="w-full px-3 py-2 border border-black rounded-md focus:outline-none focus:ring-0 focus:border-black"
                >
            </div>

            <!-- Until Now Checkbox -->
            <div class="flex items-center gap-2 mt-2 ">
                <input 
                    type="checkbox" 
                    id="edit_untilNow" 
                    class="w-4 h-4 text-orange-500 focus:ring-orange-500 border-black rounded" 
                >
                <label for="untilNow" class="text-sm text-gray-700">Until now</label>
            </div>
            
            <!-- Description -->
            <div class="text-black space-y-4 mt-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea
                    id="edit_description"
                    name="description" 
                    rows="3"
                    placeholder="Write your experience here..." 
                    class="w-full px-3 py-2 border border-black rounded-md focus:outline-none focus:ring-1 focus:ring-gray-700 focus:border-transparent resize-none"
                ></textarea>
                <p class="text-xs text-gray-500 mt-1">Write your summary here. Use at most 10,000 characters.</p>
            </div>

            <!-- Buttons -->
            <div class="flex gap-2 mt-6">
                <x-buttons.primary-button type="submit">Submit</x-buttons.primary-button>
                <button type="button" onclick="closeModal('editRole')" class="px-4 py-2 text-black">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>
