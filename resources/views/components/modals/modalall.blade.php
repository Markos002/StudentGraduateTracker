
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-8 text-gray-800">Drawer Components Demo</h1>
        
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <button onclick="showDrawer('summary')" class="px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                Summary
            </button>
            <button onclick="showDrawer('addRole')" class="px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                Add Role
            </button>
            <button onclick="showDrawer('editRole')" class="px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                Edit Role
            </button>
            <button onclick="showDrawer('addCertification')" class="px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                Add Certification
            </button>
        </div>
    </div>
  
    <!-- Summary Drawer -->
    <div id="summary" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" onclick="if(event.target === this) hideDrawer('summary')">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md" onclick="event.stopPropagation()">
            <div class="flex items-center justify-between p-4 border-b">
                <h2 class="text-lg font-semibold "> Drawer - Summary</h2>
                <button type="button" onclick="hideDrawer('summary')" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <form class="p-4 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">HR Payment Summary</label>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Summary</label>
                    <textarea name="summary" 
                              rows="3"
                              placeholder="Write your supplier here..." 
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent resize-none"></textarea>
                    <p class="text-xs text-gray-500 mt-1">Write your summary here. Use at most 10 000 characters.</p>
                </div>
                
                <div class="flex gap-2">
                    <button type="submit" 
                            class="px-6 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                        Submit
                    </button>
                    <button type="button" 
                            onclick="hideDrawer('summary')"
                            class="px-6 py-2 text-gray-600 hover:text-gray-800">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Add Role Drawer -->
    <div id="addRole" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" onclick="if(event.target === this) hideDrawer('addRole')">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
            <div class="flex items-center justify-between p-4 border-b sticky top-0 bg-white">
                <h2 class="text-lg font-semibold ">Drawer - Add Role</h2>
                <button type="button" onclick="hideDrawer('addRole')" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <form class="p-4 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Add Role</label>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Job Title</label>
                    <input type="text" 
                           name="job_title" 
                           placeholder="Enter your full name" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Company Name</label>
                    <input type="text" 
                           name="company_name" 
                           placeholder="Enter your full name" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Started</label>
                    <div class="flex gap-2">
                        <select name="start_month" 
                                class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">Jan</option>
                        </select>
                        <select name="start_year" 
                                class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">2021</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Ended</label>
                    <div class="flex gap-2">
                        <select name="end_month" 
                                class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">Jan</option>
                        </select>
                        <select name="end_year" 
                                class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">2021</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea name="description" 
                              rows="3"
                              placeholder="Write your experience here..." 
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent resize-none"></textarea>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Notes (Optional)</label>
                    <textarea name="notes" 
                              rows="3"
                              placeholder="Enter your notes here..." 
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent resize-none"></textarea>
                </div>
                
                <div class="flex gap-2">
                    <button type="submit" 
                            class="px-6 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                        Submit
                    </button>
                    <button type="button" 
                            onclick="hideDrawer('addRole')"
                            class="px-6 py-2 text-gray-600 hover:text-gray-800">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Role Drawer -->
    <div id="editRole" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" onclick="if(event.target === this) hideDrawer('editRole')">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
            <div class="flex items-center justify-between p-4 border-b sticky top-0 bg-white">
                <h2 class="text-lg font-semibold "> Drawer - Edit Role</h2>
                <button type="button" onclick="hideDrawer('editRole')" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <form class="p-4 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Edit Role</label>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Job Title</label>
                    <input type="text" 
                           name="job_title" 
                           placeholder="Enter your title name" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Company Name</label>
                    <input type="text" 
                           name="company_name" 
                           placeholder="Enter your full name" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Started</label>
                    <div class="flex gap-2">
                        <select name="start_month" 
                                class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">Jan</option>
                        </select>
                        <select name="start_year" 
                                class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">2021</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Ended</label>
                    <div class="flex gap-2">
                        <select name="end_month" 
                                class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">Jan</option>
                        </select>
                        <select name="end_year" 
                                class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">2021</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea name="description" 
                              rows="3"
                              placeholder="Write your experience here..." 
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent resize-none"></textarea>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Notes (Optional)</label>
                    <textarea name="notes" 
                              rows="3"
                              placeholder="Enter your notes here..." 
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent resize-none"></textarea>
                </div>
                
                <div class="flex gap-2 justify-between">
                    <div class="flex gap-2">
                        <button type="submit" 
                                class="px-6 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                            Submit
                        </button>
                        <button type="button" 
                                onclick="hideDrawer('editRole')"
                                class="px-6 py-2 text-gray-600 hover:text-gray-800">
                            Cancel
                        </button>
                    </div>
                    <button type="button" 
                            class="text-red-500 hover:text-red-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Add Certification Drawer -->
    <div id="addCertification" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" onclick="if(event.target === this) hideDrawer('addCertification')">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md" onclick="event.stopPropagation()">
            <div class="flex items-center justify-between p-4 border-b">
                <h2 class="text-lg font-semibold "> Drawer - Add Certification</h2>
                <button type="button" onclick="hideDrawer('addCertification')" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <form class="p-4 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Add Certification</label>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Certification name</label>
                    <input type="text" 
                           name="certification_name" 
                           placeholder="Enter your top name" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Name or organization</label>
                    <input type="text" 
                           name="organization" 
                           placeholder="Enter your institution" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Doe it end</label>
                    <div class="flex gap-2">
                        <select name="end_month" 
                                class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">Jan</option>
                        </select>
                        <select name="end_year" 
                                class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">2021</option>
                        </select>
                        <label class="flex items-center gap-2 whitespace-nowrap">
                            <input type="checkbox" 
                                   name="no_expiry"
                                   class="rounded border-gray-300 text-orange-500 focus:ring-orange-500">
                            <span class="text-sm text-gray-700">No Expiry</span>
                        </label>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Your Link</label>
                    <div class="flex gap-2">
                        <select name="link_type" 
                                class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">http://</option>
                        </select>
                        <input type="text" 
                               name="link" 
                               placeholder="Link here" 
                               class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <label class="flex items-center gap-2 whitespace-nowrap">
                            <input type="checkbox" 
                                   name="no_link"
                                   class="rounded border-gray-300 text-orange-500 focus:ring-orange-500">
                            <span class="text-sm text-gray-700">No Link</span>
                        </label>
                    </div>
                </div>
                
                <div class="flex gap-2">
                    <button type="submit" 
                            class="px-6 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                        Submit
                    </button>
                    <button type="button" 
                            onclick="hideDrawer('addCertification')"
                            class="px-6 py-2 text-gray-600 hover:text-gray-800">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function showDrawer(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function hideDrawer(id) {
            document.getElementById(id).classList.add('hidden');
        }
    </script>