
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-8 text-gray-800">Drawer Components Demo</h1>
        
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

            <button onclick="showDrawer('addCertification')" class="px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                Add Certification
            </button>
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