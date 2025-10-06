
    // Year filter
    function setYear (year) {
        document.getElementById('yearInput').value = year;
        document.getElementById('studentFilterForm').submit();
    }

    // Course filter
    function setCourse (course) {
        document.getElementById('courseInput').value = course;
        document.getElementById('studentFilterForm').submit();
    }

    // Search filter
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('keyup', function () {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll("table tbody tr");

            rows.forEach(row => {
                let text = row.textContent.toLowerCase();
                row.style.display = text.includes(filter) ? "" : "none";
            });
        });
    }

    document.addEventListener("DOMContentLoaded", () => {
    const numberFields = ["student_id", "batch_graduate", "tor_number"];

    numberFields.forEach(id => {
        const input = document.getElementById(id);

            if (input) { // ✅ only add event if the element exists
                input.addEventListener("input", function () {
                    this.value = this.value.replace(/\D/g, ""); 
                });
            }
        });
    });

document.addEventListener('change', function(e) {
    if (e.target && e.target.id === 'expiry') {
        certification();
    }
    if (e.target && e.target.id === 'untilNow') {
        role();
    }
});

    function certification() {
    const checkbox = document.getElementById('expiry');
    const endedField = document.getElementById('expEndfield');
    const endDateInput = document.getElementById('expiry_date');

    if (checkbox.checked) {
        endedField.classList.add('hidden');
        endDateInput.value = '';
    } else {
        endedField.classList.remove('hidden');
    }
}

    function role() {
        const checkbox = document.getElementById('untilNow');
        const endedField = document.getElementById('endField');
        const endDateInput = document.getElementById('end_date');

        if (checkbox.checked) {
            endedField.classList.add('hidden');
            endDateInput.value = ''; 
        } else {
            endedField.classList.remove('hidden');
        }
    }

window.setYear = setYear;
window.setCourse = setCourse;