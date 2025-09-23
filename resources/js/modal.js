// OPEN MODAL
function openModal(id) {
    const modal = document.getElementById(id);
    if (modal) {
        modal.classList.remove("hidden");
        modal.classList.add("flex");
        document.body.classList.add("overflow-y-hidden");
    }
}
// CLOSE MODAL 
function closeModal(id) {
    const modal = document.getElementById(id);
    if (modal) {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
        document.body.classList.remove("overflow-y-hidden");
    }
}
// CLOSE MODAL IF ESC IN KEYBOARD IS PRESSED
document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
        document.querySelectorAll(".fixed.inset-0").forEach(m => {
            m.classList.add("hidden");
            m.classList.remove("flex");
        });
        document.body.classList.remove("overflow-y-hidden");
    }
});
// AUTO CLOSE MODAL IF CLICKED OUTSIDE THE MODAL CONTENT
document.body.addEventListener("click", function (e) {
    if (e.target.classList.contains("modal-overlay")) {
        e.target.classList.add("hidden");
        e.target.classList.remove("flex");
        document.body.classList.remove("overflow-y-hidden");
    }  
});

window.openModal = openModal;
window.closeModal = closeModal;