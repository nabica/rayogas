@extends('rayogas.layouts.master')
@section('metatags_facebook')
<meta property="og:title" content="{{ config('app.name') }} | Qué es el GLP, usos, eficiencia y ¡más! ">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:description"
    content="El GLP es un combustible nacido de una mezcla de hidrocarburos. Un gas limpio ya que no deja residuos, ni olor, por estar libre de agentes contaminantes.">
<meta property="og:type" content="website">
<meta property="og:image" content="">
@endsection
@section('metatags_seo')
<meta name="title" content="{{ config('app.name') }} | Qué es el GLP, usos, eficiencia y ¡más! ">
<meta name="description"
    content="El GLP es un combustible nacido de una mezcla de hidrocarburos. Un gas limpio ya que no deja residuos, ni olor, por estar libre de agentes contaminantes.">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="Spanish">
<meta name="revisit-after" content="30 days">
<meta name="author" content="{{ config('app.name') }}">
@endsection
@section('title', config('app.name') . ' | Términos y Condiciones')
@section('content')

<section class="terms">
    <div class="container">
        @component('rayogas.components.heading-title')
        @slot('title')Términos y condiciones @endslot
        @endcomponent
        <div class="terms__content">
            <h3>Lorem ipsum dolor et</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse maximus, sem a sollicitudin
                pulvinar, urna tortor molestie tortor, non malesuada arcu nulla vitae orci. Phasellus tempor odio id
                neque faucibus finibus. Sed eu enim sit amet mi bibendum vestibulum ac eget mauris. Praesent tempus
                dolor ex, convallis sollicitudin mauris laoreet non. Suspendisse non ligula eget nisl volutpat finibus
                in sed tellus. Suspendisse quis felis pulvinar, molestie justo vitae, dictum lorem. Aenean cursus
                gravida vulputate. Nulla imperdiet elementum ligula ut porttitor. Pellentesque vitae porttitor metus,
                vulputate fringilla urna. Vivamus nec pharetra risus. Curabitur luctus posuere lectus at pulvinar.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse maximus, sem a sollicitudin
                pulvinar, urna tortor molestie tortor, non malesuada arcu nulla vitae orci. Phasellus tempor odio id
                neque faucibus finibus. Sed eu enim sit amet mi bibendum vestibulum ac eget mauris. Praesent tempus
                dolor ex, convallis sollicitudin mauris laoreet non. Suspendisse non ligula eget nisl volutpat finibus
                in sed tellus. Suspendisse quis felis pulvinar, molestie justo vitae, dictum lorem. Aenean cursus
                gravida vulputate. Nulla imperdiet elementum ligula ut porttitor. Pellentesque vitae porttitor metus,
                vulputate fringilla urna. Vivamus nec pharetra risus. Curabitur luctus posuere lectus at pulvinar.
            </p>
            <h3>Lorem ipsum dolor et</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse maximus, sem a sollicitudin
                pulvinar, urna tortor molestie tortor, non malesuada arcu nulla vitae orci. Phasellus tempor odio id
                neque faucibus finibus. Sed eu enim sit amet mi bibendum vestibulum ac eget mauris. Praesent tempus
                dolor ex, convallis sollicitudin mauris laoreet non. Suspendisse non ligula eget nisl volutpat finibus
                in sed tellus. Suspendisse quis felis pulvinar, molestie justo vitae, dictum lorem. Aenean cursus
                gravida vulputate. Nulla imperdiet elementum ligula ut porttitor. Pellentesque vitae porttitor metus,
                vulputate fringilla urna. Vivamus nec pharetra risus. Curabitur luctus posuere lectus at pulvinar.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse maximus, sem a sollicitudin
                pulvinar, urna tortor molestie tortor, non malesuada arcu nulla vitae orci. Phasellus tempor odio id
                neque faucibus finibus. Sed eu enim sit amet mi bibendum vestibulum ac eget mauris. Praesent tempus
                dolor ex, convallis sollicitudin mauris laoreet non. Suspendisse non ligula eget nisl volutpat finibus
                in sed tellus. Suspendisse quis felis pulvinar, molestie justo vitae, dictum lorem. Aenean cursus
                gravida vulputate. Nulla imperdiet elementum ligula ut porttitor. Pellentesque vitae porttitor metus,
                vulputate fringilla urna. Vivamus nec pharetra risus. Curabitur luctus posuere lectus at pulvinar.
            </p>
        </div>
    </div>
</section>
@endsection