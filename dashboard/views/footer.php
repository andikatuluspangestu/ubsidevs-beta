<script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>

<!-- Initialize Quill editor -->
<script>
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
  } );
</script>
<script src="../assets/js/app.js"></script>
<script src="../assets/js/pages/dashboard.js"></script>
