document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('iqc-table-search');
    const tableRows = document.querySelectorAll('.iqc-data-row');
    const emptyMsg = document.getElementById('iqc-table-empty-msg');

    if (!searchInput) return;

    searchInput.addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase().trim();
        let hasVisibleRows = false;

        tableRows.forEach(row => {
            const rowText = row.textContent.toLowerCase();
            if (rowText.includes(searchTerm)) {
                row.style.display = '';
                hasVisibleRows = true;
            } else {
                row.style.display = 'none';
            }
        });

        if (emptyMsg) {
            emptyMsg.style.display = hasVisibleRows ? 'none' : 'block';
        }
    });
});
