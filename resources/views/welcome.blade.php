@extends('layouts.app')
<style>
.search-sec{
    background: #1A4668;padding: 2rem;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(4rem + 8px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
     height: calc(4rem + 8px) !important;
     border-radius:0;
}

</style>
@section('content')


<div id="apus-main-content">
    <section id="main-container" class="wrapper-main-page container inner">
        <div class="row">
            <div id="main-content" class="main-page col-xs-12 clearfix">
                <div id="main" class="site-main clearfix" role="main">

                    <div data-elementor-type="post" data-elementor-id="23" class="elementor elementor-23" data-elementor-settings="[]">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">
                                <section class="elementor-element elementor-element-0861952 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="0861952" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-b9d4d76 elementor-column elementor-col-100 elementor-top-column" data-id="b9d4d76" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-2095eb3 elementor-widget elementor-widget-spacer" data-id="2095eb3" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ec1d59a elementor-widget elementor-widget-heading" data-id="ec1d59a" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default"> <p class="title-mdpwork text-center">¡Encontrá el profesional que buscas ya!</p></h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-36d5f15 elementor-hidden-phone elementor-widget elementor-widget-text-editor" data-id="36d5f15" data-element_type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-text-editor elementor-clearfix">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2187766 elementor-widget elementor-widget-careerup_job_board_search_form" data-id="2187766" data-element_type="widget" data-widget_type="careerup_job_board_search_form.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="widget-job-search-form ">
                                                                    <form action="https://apusthemes.com/wp-demo/careerup/jobs/" class="form-search layout1" method="GET">
                                                                        <div class="flex-middle-sm search-form-inner">
                                                                            <div class="form-group form-group-title  ">
                                                                                <div class="form-group-inner inner">
                                                                                    <i><img src="icons/job.png"></i>
                                                                                    <input type="text" name="filter-title" class="form-control" value="" id="jUZtX_title" placeholder="Escriba el profesional que necesita ...">
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.form-group -->
                                                                            <div class="form-group form-group-center-location  ">
                                                                                <div class="form-group-inner inner">
                                                                                    <i class=""><img src="icons/location.png"></i>
                                                                                    <div class="action-location">
                                                                                        <input type="text" name="filter-center-location" class="form-control" value="" id="jUZtX_center-location" placeholder="Indique su ubicación">
                                                                                        <span class="clear-location hidden"><i>X</i></span>
                                                                                    </div>
                                                                                    <input type="hidden" name="filter-center-latitude" value="">
                                                                                    <input type="hidden" name="filter-center-longitude" value="">

                                                                                </div>
                                                                            </div>
                                                                            <!-- /.form-group -->
                                                                            <div class="form-group form-group-search">
                                                                                <button class="btn-submit btn btn-block btn-theme bg-primary mt-0" type="submit">Buscar</button>
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="container steps">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="row">
                                                                        <div class="col-md-6 text-center">
                                                                            <img class="steps-img" src="icons/www.png"/>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <p class="font-weight-bold" style="color:white;">1. Buscar</p>
                                                                            <p style="color: #b9b9b9;font-style: italic">Más de 1000 profesionales esperan tu solicitud.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                        <div class="row">
                                                                            <div class="col-md-6 text-center">
                                                                                <img class="steps-img" src="icons/card.png"/>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <p class="font-weight-bold" style="color:white;">2. Contactar</p>
                                                                                <p style="color: #b9b9b9;font-style: italic">Ponete en contacto de manera rápida y efectiva.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                            <div class="row">
                                                                                <div class="col-md-6 text-center">
                                                                                    <img class="steps-img" src="icons/receipt.png"/>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <p class="font-weight-bold" style="color:white;">1. Presupuesto</p>
                                                                                    <p style="color: #b9b9b9;font-style: italic">Obtené tu presupuesto de forma inmediata</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<section id="header-mdp" style="height: 100vh">

</section>
@endsection
