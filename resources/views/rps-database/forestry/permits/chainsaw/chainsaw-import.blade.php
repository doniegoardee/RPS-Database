@include('rps-database.contents.header')

<style>
    /* Existing Styles */
    .excel-table-container {
        margin-top: 20px;
    }

    .pagination-btn {
        cursor: pointer;
        margin: 0 5px;
        padding: 5px 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
    }

    .pagination-btn.active {
        background-color: #0056b3;
    }

    .editable-cell {
        cursor: pointer;
        padding: 5px;
    }

    .delete-btn {
        cursor: pointer;
        margin-left: 10px;
        color: red;
    }

    .selected {
        background-color: #ffeb3b;
    }

    #delete-buttons-container {
        display: none;
        margin-top: 10px;
        position: sticky;
        top: 0;
        background-color: #fff;
        padding: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 999;
    }

    #delete-row-btn,
    #delete-column-btn,
    #delete-sheet-btn {
        color: white;
    }

    #add-buttons-container {
        margin-top: 10px;
    }

    #add-row-top,
    #add-row-bottom,
    #add-column-left,
    #add-column-right {
        margin-right: 10px;
    }

    /* Move pagination to the bottom */
   /* Pagination container adjustments */
#pagination-container {
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: center;
}

/* Pagination button styling */
.pagination-btn {
    cursor: pointer;
    margin: 10px 5px 10px 5px; /* Added margin-top: 10px to create space above the button */
    padding: 5px 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
}

/* Active pagination button */
.pagination-btn.active {
    background-color: #0056b3;
}


    .column-header {
        cursor: pointer;
    }

    .selected-header {
        background-color: #ffd700;
    }

</style>

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">
    <div class="flex-grow-1 overflow-auto">
        <div class="d-sm-flex align-items-center mb-4">
            <a href="{{ route('permit.doc') }}" class="btn btn-sm btn-primary shadow-sm me-3">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back
            </a>
            <h1 class="h3 mb-0 text-gray-800">Import Client Info</h1>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="container mt-4">
            <h3>Import Excel and View Data</h3>

            <form id="upload-form" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="file">Choose Excel File</label>
                    <input type="file" name="file" id="file" class="form-control" accept=".xlsx, .xls, .csv" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Upload Excel File</button>
            </form>

            <div id="add-buttons-container">
                <button id="add-sheet-btn" class="btn btn-primary">Add Sheet</button>
                <button id="add-row-top" class="btn btn-success">Add Row (Top)</button>
                <button id="add-row-bottom" class="btn btn-success">Add Row (Bottom)</button>
                <button id="add-column-left" class="btn btn-success">Add Column (Left)</button>
                <button id="add-column-right" class="btn btn-success">Add Column (Right)</button>
                <button id="save-header-btn" class="btn btn-info">Save Selected Header</button>
            </div>

            <div id="delete-buttons-container">
                <button id="delete-row-btn" class="btn btn-danger delete-btn" disabled>Delete Row</button>
                <button id="delete-column-btn" class="btn btn-warning delete-btn" disabled>Delete Column</button>
                <button id="delete-sheet-btn" class="btn btn-danger delete-btn" disabled>Delete Sheet</button>
            </div>

            <div id="excel-data-container" class="mt-4" style="display: none;">
                <div id="excel-tables"></div>
            </div>
        </div>
    </div>

    <!-- Move pagination here -->
    <div id="pagination-container" class="mt-4"></div>

    <script src="https://cdn.jsdelivr.net/npm/xlsx/dist/xlsx.full.min.js"></script>
    <script>
        var selectedCell = null;
        var currentWorkbook = null;
        var selectedSheetIndex = 0;
        var selectedHeaderRow = null;
        var currentTables = [];
        var selectedHeaderIndex = null;

        document.getElementById('file').addEventListener('change', function (e) {
            var file = e.target.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    var data = new Uint8Array(event.target.result);
                    currentWorkbook = XLSX.read(data, { type: 'array' });

                    createPagination(currentWorkbook);
                    createTablesForSheets(currentWorkbook);

                    document.getElementById('delete-buttons-container').style.display = 'none';
                    document.getElementById('add-buttons-container').style.display = 'block';
                };
                reader.readAsArrayBuffer(file);
            }
        });

        function createPagination(workbook) {
            var paginationContainer = document.getElementById('pagination-container');
            paginationContainer.innerHTML = '';

            workbook.SheetNames.forEach(function(sheetName, index) {
                var button = document.createElement('button');
                button.classList.add('pagination-btn');
                button.innerText = sheetName;
                button.setAttribute('data-index', index);
                button.addEventListener('click', function() {
                    selectedSheetIndex = index;
                    showSheet(index);
                    highlightActiveButton(button);
                });
                paginationContainer.appendChild(button);
            });
        }

        function showSheet(index) {
            var tables = document.querySelectorAll('.excel-table-container');
            tables.forEach(function(table, i) {
                table.style.display = (i === index) ? 'block' : 'none';
            });

            document.getElementById('delete-sheet-btn').disabled = false;
            document.getElementById('delete-buttons-container').style.display = 'block';
        }

        function highlightActiveButton(button) {
            var buttons = document.querySelectorAll('.pagination-btn');
            buttons.forEach(function(btn) {
                btn.classList.remove('active');
            });
            button.classList.add('active');
        }

        function createTablesForSheets(workbook) {
    var excelTablesContainer = document.getElementById('excel-tables');
    excelTablesContainer.innerHTML = '';
    currentTables = [];

    workbook.SheetNames.forEach(function(sheetName, index) {
        var worksheet = workbook.Sheets[sheetName];
        var jsonData = XLSX.utils.sheet_to_json(worksheet, { header: 1 });

        // Find the longest row (maximum number of columns)
        var maxColumns = Math.max(...jsonData.map(function(row) { return row.length; }));

        // Ensure every row has the same number of columns (pad with empty strings)
        jsonData.forEach(function(row) {
            while (row.length < maxColumns) {
                row.push('');  // Add empty strings to make the row length equal to maxColumns
            }
        });

        var tableContainer = document.createElement('div');
        tableContainer.classList.add('excel-table-container');
        tableContainer.style.display = (index === 0) ? 'block' : 'none';

        var tableTitle = document.createElement('h4');
        tableTitle.innerText = 'Sheet: ' + sheetName;
        tableContainer.appendChild(tableTitle);

        var table = document.createElement('table');
        table.classList.add('table', 'table-bordered');
        table.setAttribute('id', 'excel-table-' + index);

        var thead = table.createTHead();
        var tbody = table.createTBody();

        // Create headers dynamically for columns
        var headerRow = thead.insertRow();
        for (var colIndex = 0; colIndex < maxColumns; colIndex++) {
            var th = document.createElement('th');
            th.innerText = 'Column ' + (colIndex + 1);
            th.classList.add('column-header');
            th.setAttribute('data-index', colIndex);
            th.addEventListener('click', function() {
                selectHeader(th);
            });
            headerRow.appendChild(th);
        }

        // Create rows dynamically from the data (starting from the first row onward)
        jsonData.forEach(function(row) {
            var tr = tbody.insertRow();  // Create a new row

            for (var colIndex = 0; colIndex < maxColumns; colIndex++) {
                var td = tr.insertCell();  // Create a new cell for this column

                var cellData = row[colIndex] !== undefined ? row[colIndex] : '';  // Get the data or empty string
                td.innerText = cellData;

                td.classList.add('editable-cell');
                td.setAttribute('contenteditable', 'true');
                td.addEventListener('click', function() {
                    selectCell(td);
                });
            }
        });

        tableContainer.appendChild(table);
        excelTablesContainer.appendChild(tableContainer);
        currentTables.push(table);
    });

    document.getElementById('excel-data-container').style.display = 'block';
}


        function selectCell(cell) {
            selectedCell = cell;
            enableDeleteButtons();
        }

        function selectHeader(header) {
            var colIndex = header.getAttribute('data-index');
            if (selectedHeaderIndex === colIndex) {
                header.classList.remove('selected-header');
                selectedHeaderIndex = null;
            } else {
                var allHeaders = document.querySelectorAll('.column-header');
                allHeaders.forEach(function(h) {
                    h.classList.remove('selected-header');
                });
                header.classList.add('selected-header');
                selectedHeaderIndex = colIndex;
            }
        }

        function enableDeleteButtons() {
            document.getElementById('delete-buttons-container').style.display = 'block';
            document.getElementById('delete-row-btn').disabled = false;
            document.getElementById('delete-column-btn').disabled = false;
            document.getElementById('delete-sheet-btn').disabled = false;
        }

        // Add Row / Column functions
        document.getElementById('add-row-top').addEventListener('click', function() {
            addRow('top');
        });

        document.getElementById('add-row-bottom').addEventListener('click', function() {
            addRow('bottom');
        });

        document.getElementById('add-column-left').addEventListener('click', function() {
            addColumn('left');
        });

        document.getElementById('add-column-right').addEventListener('click', function() {
            addColumn('right');
        });

        document.getElementById('save-header-btn').addEventListener('click', function() {
            if (selectedHeaderIndex !== null) {
                alert("Header Saved");
            }
        });

        function addRow(position) {
            if (selectedCell) {
                var rowIndex = selectedCell.parentNode.rowIndex;
                var table = selectedCell.closest('table');
                var rowCount = table.rows.length;
                var newRow;

                if (position === 'top') {
                    newRow = table.insertRow(rowIndex);
                } else if (position === 'bottom') {
                    newRow = table.insertRow(rowCount);
                }

                for (var i = 0; i < table.rows[0].cells.length; i++) {
                    newRow.insertCell(i);
                }
            }
        }

        function addColumn(position) {
            if (selectedCell) {
                var colIndex = selectedCell.cellIndex;
                var table = selectedCell.closest('table');
                var rowCount = table.rows.length;

                for (var i = 0; i < rowCount; i++) {
                    var newCell = (position === 'left') ? table.rows[i].insertCell(colIndex) : table.rows[i].insertCell(colIndex + 1);
                }
            }
        }

        // Delete Row, Column, and Sheet
        document.getElementById('delete-row-btn').addEventListener('click', function() {
            if (selectedCell) {
                var row = selectedCell.parentNode;
                var table = selectedCell.closest('table');
                table.deleteRow(row.rowIndex);
            }
        });

        document.getElementById('delete-column-btn').addEventListener('click', function() {
            if (selectedCell) {
                var colIndex = selectedCell.cellIndex;
                var table = selectedCell.closest('table');
                Array.from(table.rows).forEach(function(row) {
                    row.deleteCell(colIndex);
                });
            }
        });

        document.getElementById('delete-sheet-btn').addEventListener('click', function() {
            currentWorkbook.SheetNames.splice(selectedSheetIndex, 1);
            createPagination(currentWorkbook);
            createTablesForSheets(currentWorkbook);
        });

    </script>
</div>
