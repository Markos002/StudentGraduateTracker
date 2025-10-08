function openEditCert(id){
        if(id === null) return;
        const cert_data = JSON.parse(document.getElementById('certData').dataset.careers);

        const modal = document.getElementById('editCert');
        if (modal) {
            modal.classList.remove("hidden");
            modal.classList.add("flex");
            document.body.classList.add("overflow-y-hidden");
        }
        const cert = cert_data.find(cert_id => cert_id.achievement_id  === id);
        
        document.getElementById('edit_achievement_id').value = cert.achievement_id;
        document.getElementById('edit_cert_name').value = cert.cert_name ?? '';
        document.getElementById('edit_year').value = cert.year ?? '';
        document.getElementById('edit_term').value = cert.term ?? '';
        
}

window.openEditCert = openEditCert;