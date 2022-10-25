<section class="normativity">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 transparency__header ">
                <img src="{{ asset('images/web/transparency/icn_transparencia_normatividad.png') }}" alt="">
                <h2>Normatividad</h2>
            </div>
        </div>
    </div>
    <div class="download bg-section">
        <div class="container">
            @component('rayogas.components.heading-title')
            @slot('title')Leyes y Decretos @endslot
            @endcomponent
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <div class="download-card">
                        @component('rayogas.components.heading-title')
                        @slot('title')Ley 142 @endslot
                        @endcomponent
                        <ul class="download-card__list">
                            <li>
                                <a href="{{asset('/pdfs/LEY142DE1994.pdf')}}" target="_blank">
                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        LEY 142 DE 1994
                                    </p>
                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="download-card">
                        @component('rayogas.components.heading-title')
                        @slot('title')Subsidios @endslot
                        @endcomponent
                        <ul class="download-card__list">

                            <li>
                                <a href="{{asset('/pdfs/Resolucion_40873_2019.pdf')}}" target="_blank">
                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        Resolución No. 40873 del 2019
                                    </p>
                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('/pdfs/Resolucion_40079_2017.pdf')}}" target="_blank">
                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        Resolución No. 40079 de 2017
                                    </p>
                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('/pdfs/Resolucion_40720_2016.pdf')}}" target="_blank">
                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        Resolución No. 40720 de 2016
                                    </p>
                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('/pdfs/Resolucion_90502_2014.pdf')}}" target="_blank">

                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        Resolución No. 90502 de 2014
                                    </p>

                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('pdfs/Decreto_2195_2013.pdf')}}" target="_blank">

                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        DECRETO No. 2195 de 2013
                                    </p>

                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="download ">
        <div class="container">
            @component('rayogas.components.heading-title')
            @slot('title')Reglamentos técnicos @endslot
            @endcomponent
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <div class="download-card">
                        <ul class="download-card__list">
                            <li>
                                <a href="{{asset('/pdfs/Resolucion_40248_2016.pdf')}}" target="_blank">

                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        Resolución No. 40248 de 2016 Puntos de venta, depósitos y
                                        expendios
                                    </p>

                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('/pdfs/Resolucion_40245_2016.pdf')}}" target="_blank">

                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        Resolución No. 40245 de 2016 Tanques y cilindros
                                    </p>

                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('/pdfs/Resolucion_40246_2016.pdf')}}" target="_blank">

                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        Resolución No. 40246 de 2016 Almacenamiento y distribución
                                    </p>

                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6">
                    <div class="download-card">
                        <ul class="download-card__list">
                            <li>
                                <a href="" target="_blank">
                              
                                        <img src="{{ asset('images\web\common\icn_pdf_download.png') }}"
                alt="download">
                <p>
                    Resolución No. 90502 de 2014
                </p>

                <div>
                    <i class="icon-download"></i>
                </div>
                </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                        <p>
                            DECRETO No. 2195 de 2013
                        </p>
                        <div>
                            <i class="icon-download"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                        <p>
                            LEY 142 DE 1994
                        </p>
                        <div>
                            <i class="icon-download"></i>
                        </div>
                    </a>
                </li>

                </ul>
            </div>
        </div> --}}
    </div>
    </div>
    </div>
    <div class="download  bg-section">
        <div class="container">
            @component('rayogas.components.heading-title')
            @slot('title')Resoluciones CREG @endslot
            @endcomponent
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <div class="download-card">
                        <ul class="download-card__list">
                            <li>
                                <a href="{{asset('/pdfs/Creg080-2019.pdf')}}" target="_blank">

                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        Creg080 2019
                                    </p>

                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('/pdfs/Creg063-2016.pdf')}}" target="_blank">

                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        Creg063 2016
                                    </p>

                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('/pdfs/Creg053-2011.pdf')}}" target="_blank">

                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        Creg053 2011
                                    </p>

                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('/pdfs/Creg180-2009.pdf')}}" target="_blank">

                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        Creg180 2009
                                    </p>

                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('/pdfs/Creg023-2008.pdf')}}" target="_blank">

                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        Creg023 2008
                                    </p>

                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6">
                    <div class="download-card">
                        <ul class="download-card__list">
                            <li>
                                <a href="" target="_blank">
                          
                                        <img src="{{ asset('images\web\common\icn_pdf_download.png') }}"
                alt="download">
                <p>
                    Resolución No. 90502 de 2014
                </p>

                <div>
                    <i class="icon-download"></i>
                </div>
                </a>
                </li>
                <li>
                    <a href="" target="_blank">

                        <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                        <p>
                            DECRETO No. 2195 de 2013
                        </p>

                        <div>
                            <i class="icon-download"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">

                        <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                        <p>
                            LEY 142 DE 1994
                        </p>
                        <div>
                            <i class="icon-download"></i>
                        </div>
                    </a>
                </li>

                </ul>
            </div>
        </div> --}}
    </div>
    </div>
    </div>
</section>