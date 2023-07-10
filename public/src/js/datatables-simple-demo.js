window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('penduduk_table');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});

window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple = document.getElementById('table');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});
window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple = document.getElementById('table2');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});
window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple = document.getElementById('table3');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});
