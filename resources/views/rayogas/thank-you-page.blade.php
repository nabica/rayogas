@extends('rayogas.layouts.secondary')
@section('content')
<section class="thanks">
    <img src="{{ asset('images\web\thanks\thankyou_img_ppl.png') }}" alt="thank you" class="w-100">
    <div class="thanks__content container">
        <div class="thanks__content-text">
            <h1>¡Gracias por registrarte!</h1>
            <p>Hemos enviado tu requerimiento a un asesor para que se comunique contigo.</p>
            <a class='btn btn-primary--dark' href="{{ route('rayogas.home') }}">Volver al sitio</a href="">
            <button disabled class='btn btn-primary--dark'>fsdfsdfsdfs</button>
        </div>

    </div>
</section>
@endsection