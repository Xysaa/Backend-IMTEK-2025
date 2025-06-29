<button id="deleteButton">Delete</button>

<div id="deleteModal" style="display:none; border: 1px solid #ccc; padding: 20px; background-color: #f9f9f9; margin-top: 20px;">
    <form method="post" action="{{route('matkul.destroy', $matkul->kode_matkul)}}">
        @csrf
        @method('DELETE')
        <button type="submit" id="confirmDelete">Ya, Yakin</button>
        <button type="button" id="cancelDelete">Batal</button>
    </form>
</div>

<script>
    const deleteButton = document.getElementById('deleteButton');
    const deleteModal = document.getElementById('deleteModal');
    const cancelButton = document.getElementById('cancelDelete'); // Renamed to avoid confusion with form's submit button

    // Show the modal when the delete button is clicked
    deleteButton.addEventListener('click', function() {
        deleteModal.style.display = 'block';
    });

    // Handle "Batal" (Cancel) button click
    cancelButton.addEventListener('click', function() {
        deleteModal.style.display = 'none';
    });

</script>
