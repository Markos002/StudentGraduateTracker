function openRoleEditModal(id){
    if(id === null) return;
    
    const careerDataElement = document.getElementById('careerData');
    if (!careerDataElement) return;
    
    const career_data = JSON.parse(careerDataElement.dataset.careers);

    const modal = document.getElementById('editRole');
    if (modal) {
        modal.classList.remove("hidden");
        modal.classList.add("flex");
        document.body.classList.add("overflow-y-hidden");
    }
    
    const career = career_data.find(career_id => career_id.job_id === id);
    
    if (!career) return;
    
    // Update form action with the specific job_id
    const form = document.getElementById('editRoleForm');
    const baseUrl = form.action.replace(/\/\d+$/, ''); // Remove any existing ID
    form.action = `${baseUrl.replace('/0', '')}/${career.job_id}`;
    
    // Populate form fields
    document.getElementById('edit_id').value = career.job_id;
    document.getElementById('edit_occupation').value = career.occupation ?? '';
    document.getElementById('edit_position').value = career.position ?? '';
    document.getElementById('edit_occupation_status').value = career.occupation_status ?? '';
    document.getElementById('edit_course_alignment').value = career.course_alignment ?? '';
    document.getElementById('edit_start_date').value = career.start_date ?? '';
    document.getElementById('edit_description').value = career.description ?? '';
    document.getElementById('edit_salary').value = career.salary ?? '';
    
    // Handle end date and "Until now" checkbox
    const endDateField = document.getElementById('edit_end_date');
    const untilNowCheckbox = document.getElementById('edit_untilNow');
    const endField = document.getElementById('endField');
    
    if (career.end_date) {
        endDateField.value = career.end_date;
        untilNowCheckbox.checked = false;
        if (endField) endField.style.display = 'block';
    } else {
        endDateField.value = '';
        untilNowCheckbox.checked = true;
        if (endField) endField.style.display = 'none';
    }
    
    // Add event listener for "Until now" checkbox
    untilNowCheckbox.removeEventListener('change', handleUntilNowChange); // Remove old listener
    untilNowCheckbox.addEventListener('change', handleUntilNowChange);
}

function handleUntilNowChange() {
    const endDateField = document.getElementById('edit_end_date');
    const endField = document.getElementById('endField');
    
    if (this.checked) {
        if (endField) endField.style.display = 'none';
        endDateField.value = '';
    } else {
        if (endField) endField.style.display = 'block';
    }
}

window.openRoleEditModal = openRoleEditModal;