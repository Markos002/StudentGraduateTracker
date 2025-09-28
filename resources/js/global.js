
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


window.setYear = setYear;
window.setCourse = setCourse;