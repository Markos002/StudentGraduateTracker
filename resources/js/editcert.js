function openEditCert(id){
    if(id === null) return;
    
    const certDataElement = document.getElementById('certData');
    if (!certDataElement) {
        console.error('Certification data element not found');
        return;
    }
    
    const cert_data = JSON.parse(certDataElement.dataset.certifications);

    const modal = document.getElementById('editCert');
    if (modal) {
        modal.classList.remove("hidden");
        modal.classList.add("flex");
        document.body.classList.add("overflow-y-hidden");
    }
    
    const cert = cert_data.find(cert_id => cert_id.achievement_id === id);
    
    if (!cert) {
        console.error('Certification not found with achievement_id:', id);
        return;
    }
    
    // Update form action with the specific achievement_id
    const form = document.getElementById('editCertificationForm');
    if (form) {
        // Split the URL and replace the last segment (0) with actual ID
        const urlParts = form.action.split('/');
        urlParts[urlParts.length - 1] = cert.achievement_id;
        form.action = urlParts.join('/');
        
        console.log('Updated form action:', form.action); // For debugging
    }
    
    // Populate form fields
    document.getElementById('edit_achievement_id').value = cert.achievement_id;
    document.getElementById('edit_cert_name').value = cert.cert_name ?? '';
    document.getElementById('edit_year').value = cert.year ?? '';
    document.getElementById('edit_term').value = cert.term ?? '';
}

window.openEditCert = openEditCert;