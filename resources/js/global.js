
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
        const numberFields = ["student_id", "batch_graduate","tor_number"];

        numberFields.forEach(id => {
            const input = document.getElementById(id);

            input.addEventListener("input", function () {
                this.value = this.value.replace(/\D/g, ""); 
            });
        });
    });

window.setYear = setYear;
window.setCourse = setCourse;