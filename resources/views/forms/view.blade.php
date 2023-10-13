
<div class="container">
    <h1>Form Builder</h1>
    <div class="row">
        <!-- Toolbox for available form fields -->
        <div class="col-md-3">
            <div class="toolbox">
                <h4>Form Fields</h4>
                <div class="field draggable" data-type="text">Text Input</div>
                <div class="field draggable" data-type="textarea">Text Area</div>
                <div class="field draggable" data-type="checkbox">Checkbox</div>
                <!-- Add more field options as needed -->
            </div>
        </div>
        <!-- Form preview area -->
        <div class="col-md-9">
            <div class="form-preview" id="form-preview">
                <!-- The form fields will be rendered here -->
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toolbox = document.querySelector('.toolbox');
        const formPreview = document.querySelector('#form-preview');

        let draggedElement = null;

        // Add a dragstart event listener to the toolbox items
        toolbox.querySelectorAll('.draggable').forEach(field => {
            field.addEventListener('dragstart', function (e) {
                draggedElement = e.target;
            });
        });

        // Add a dragover event listener to the form preview area
        formPreview.addEventListener('dragover', function (e) {
            e.preventDefault();
        });

        // Add a drop event listener to the form preview area
        formPreview.addEventListener('drop', function (e) {
            e.preventDefault();
            if (draggedElement) {
                const newField = document.createElement('div');
                newField.textContent = draggedElement.textContent;
                newField.setAttribute('data-type', draggedElement.getAttribute('data-type'));
                newField.classList.add('field', 'draggable');
                formPreview.appendChild(newField);
                draggedElement = null;
            }
        });
    });
</script>
