/**
 * Sorts a HTML table.
 * Cambiando el orden de la tabla de posiciones de estadio por puntos
 * @param {HTMLTableElement} table The table to sort
 * @param {number} column The index of the column to sort
 * @param {boolean} asc Determines if the sorting will be in ascending
 */
function sortTableByColumn(table, column, asc = true) {
    const dirModifier = asc ? 1 : -1;
    console.log(table);
    const tBody = table.tBodies[0];
    const rows = Array.from(tBody.querySelectorAll("tr"));

    // Sort each row
    const sortedRows = rows.sort((a, b) => {
        const aColText = parseInt(a.querySelector(`td:nth-child(${column + 1})`).textContent.trim());
        const bColText = parseInt(b.querySelector(`td:nth-child(${column + 1})`).textContent.trim());
        return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
    });

    // Remove all existing TRs from the table
    while (tBody.firstChild) {
        tBody.removeChild(tBody.firstChild);
    }

    // Re-add the newly sorted rows
    tBody.append(...sortedRows);

    // Remember how the column is currently sorted
    table.querySelectorAll("th").forEach(th => th.classList.remove("th-sort-asc", "th-sort-desc"));
    let counter = 0;
    tBody.querySelectorAll("tr").forEach(th => {
        counter += 1;
        th.querySelector(`td:nth-child(${0 + 1})`).innerHTML = counter;
    });
    table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-sort-asc", asc);
    table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-sort-desc", !asc);
}

var tablePosiciones = document.querySelector(".tabla-posiciones-1 table");
var tablePosiciones2 = document.querySelector(".tabla-posiciones-2 table");
window.addEventListener("load", function () {
    sortTableByColumn(tablePosiciones, 9, false);
    sortTableByColumn(tablePosiciones, 10, false);

    sortTableByColumn(tablePosiciones2, 9, false);
    sortTableByColumn(tablePosiciones2, 10, false);
});