require('./bootstrap');
import 'bootstrap';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import './common/list';

ClassicEditor
    .create( document.querySelector( '.editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );

