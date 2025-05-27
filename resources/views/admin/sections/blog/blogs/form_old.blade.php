<script>
    tinymce.init({
    selector: '#content',
    plugins: 'image code',
    toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code | image',
    images_upload_url: '/upload-image.php', // tu endpoint PHP
    automatic_uploads: true,
    images_upload_handler: function (blobInfo, success, failure) {
        // Delega al backend por defecto
        var xhr, formData;

        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', '/upload-image.php');

        xhr.onload = function() {
            var json;

            if (xhr.status != 200) {
                failure('Error: ' + xhr.status);
                return;
            }

            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
                failure('Respuesta inválida');
                return;
            }

            success(json.location);
        };

        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
    }
});
</script>