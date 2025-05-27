<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Titulo</label>
            {!! Form::text('title', $blog->title , ['class' => 'form-control', 'maxlength' => '191']) !!}
        </div>
    </div>


</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Imagen para tarjeta del blog</label><br>
            {!! Form::file('card_image') !!}
            @if($blog->card_image)
            <a href="{{ $blog->image_url }}" target="_blank"><br>Ver imagen actual</a>
            @endif
        </div>
    </div>
    <div>
        <script
            type="text/javascript"
            src='https://cdn.tiny.cloud/1/9mq9xnwdrg0l3mjg73aqswt09gc7sgy3yo3p1rktmaqtllhg/tinymce/7/tinymce.min.js'
            referrerpolicy="origin">
        </script>
        <script type="text/javascript">
            const image_upload_handler = (blobInfo, progress) => new Promise((resolve, reject) => {
                const formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());
                fetch('/upload-image.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(async response => {
                        console.info('Image upload response:', response);
                        if (!response.ok) {
                            console.error('Image upload failed with status:', response.status);
                        }
                        if (response.status === 403) {
                            reject({
                                message: 'HTTP Error: ' + response.status,
                                remove: true
                            });
                            return;
                        }

                        if (response.status < 200 || response.status >= 300) {
                            reject('HTTP Error: ' + response.status);
                            return;
                        }
                        const json = await response.json();
                        console.info('Image upload JSON response:', json);
                        if (!json || typeof json.location != 'string') {
                            console.error('Invalid JSON response:', json);
                            reject('Invalid JSON: ' + JSON.stringify(json));
                            return;
                        }
                        resolve(json.location);
                    })
                    .catch(error => {
                        console.error('Image upload failed:', error);
                        reject('Image upload failed. Error: ' + error.message);
                    });
            });
            tinymce.init({
                selector: '#myTextarea',
                width: 600,
                height: 300,
                plugins: [
                    'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                    'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
                    'media', 'table', 'emoticons', 'help'
                ],
                toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                    'forecolor backcolor emoticons | help',
                menu: {
                    favs: {
                        title: 'My Favorites',
                        items: 'code visualaid | searchreplace | emoticons'
                    }
                },
                menubar: 'favs file edit view insert format tools table help',
                automatic_uploads: true,
                images_upload_handler: image_upload_handler
            });
        </script>


        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Contenido</label>
                {!! Form::textarea('body_blog', $blog->body_blog , ['class' => 'form-control', 'id' => 'myTextarea']) !!}
            </div>
        </div>

    </div>


</div>

<button type="submit" class="btn btn-primary">Guardar</button>