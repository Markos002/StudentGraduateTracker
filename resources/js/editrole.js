    function openRoleEditModal(id){
        if(id === null) return;
        const career_data = JSON.parse(document.getElementById('careerData').dataset.careers);

        const modal = document.getElementById('editRole');
        if (modal) {
            modal.classList.remove("hidden");
            modal.classList.add("flex");
            document.body.classList.add("overflow-y-hidden");
        }
        const career = career_data.find(career_id => career_id.job_id  === id);
        
        document.getElementById('edit_id').value = career.job_id;
        document.getElementById('edit_occupation').value = career.occupation ?? '';
        document.getElementById('edit_position').value = career.position ?? '';
        document.getElementById('edit_occupation_status').value = career.occupation_status ?? '';
        document.getElementById('edit_course_alignment').value = career.course_alignment ?? '';
        document.getElementById('edit_start_date').value = career.start_date ?? '';
        document.getElementById('edit_end_date').value = career.end_date ?? '';
        document.getElementById('edit_untilNow').value = career.untilNow ?? '';
        document.getElementById('edit_description').value = career.description ?? '';
        
        document.getElementById('edit_untilNow').addEventListener('change', function() {
        const endDateField = document.getElementById('edit_end_date');
            if (this.checked) {
                endDateField.classList.add('hidden');
                endDateField.value = '';
            } else {
                endDateField.classList.remove('hidden');
            }
        });

}

window.openRoleEditModal = openRoleEditModal;