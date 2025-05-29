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
            <div class="card-blog">
                <p>Imagen actual</p>
                <img src="{{ asset('uploads/blog/' . $blog->id . '/' . $blog->card_image) }}" class="img-blog img-fluid" alt="Img del blog">

            </div>
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
                content_css: "{{ asset('css/editor-content.css') }}",
                width: '1200',
                height: 500,
                max_width: 1200,
                resize: 'both',
                plugins: [
                    'advlist', 'image code', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                    'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
                    'media', 'table', 'emoticons', 'help'
                ],
                toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | image code ' +
                    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                    'forecolor backcolor emoticons | help',
                formats: {
                    alignleft: {
                        selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div',
                        classes: 'align-left'
                    },
                    aligncenter: {
                        selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div',
                        classes: 'align-center'
                    },
                    alignright: {
                        selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div',
                        classes: 'align-right'
                    },
                    alignjustify: {
                        selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div',
                        classes: 'align-justify'
                    }
                },
                menu: {
                    favs: {
                        title: 'My Favorites',
                        items: 'code visualaid | searchreplace | emoticons'
                    }
                },
                menubar: 'favs file edit view insert format tools table help',
                automatic_uploads: false,
                images_upload_handler: null,
                images_upload_handler: image_upload_handler
            });
        </script>

        <div class="col-md-6 container_textarea">
            <div class="form-group">
                <label class="form-label">Contenido</label>
                {!! Form::textarea('body_blog', $blog->body_blog , ['class' => 'form-control', 'id' => 'myTextarea']) !!}
            </div>
        </div>

    </div>


</div>

<button type="submit" class="btn btn-primary">Guardar</button>