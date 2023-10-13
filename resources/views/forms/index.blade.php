<!-- resources/views/forms/index.blade.php -->
<div id="form-builder">
    @if (count($formFields) > 0)
        @foreach ($formFields as $field)
            <div data-field-type="{{ $field->type }}" class="draggable-field" >{{ $field->label }}</div>
        @endforeach
    @else
        <p>No form fields available.</p>
    @endif
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
<script>
    new Sortable(document.getElementById('form-builder'), {
        animation: 360,
    });
</script>



