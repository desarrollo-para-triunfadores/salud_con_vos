@extends('admin.partes.index')

@section('title')
Configuracion de Empresa
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Configuraciones
        </h1>
        <ol class="breadcrumb">
            <li class="active"><a onclick="$('#color').val('');" href="#"><i class="fa fa-gear"></i> Configuración</a></li>                 
        </ol>
    </section>
    <section class="content">
        <div class="row">          
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-body">  
                            <div class="post" >
                                <div class="user-block">

                                    <div class="box-body" style="width:auto;height:450px;">                            
                                        <ul class="list-unstyled clearfix">
                                            <li style="float:left; width: 33.33333%; padding: 5px;">
                                                <a onclick="$('#color').val('skin-blue');" href="javascript:void(0);" data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 27px; background: #367fa9;"></span>
                                                        <span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 27px;"></span>
                                                    </div>
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 50px; background: #222d32;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 50px; background: #f4f5f7;"></span>
                                                    </div>
                                                </a>
                                                <p class="text-center no-margin">Azul</p>
                                            </li>
                                            <li style="float:left; width: 33.33333%; padding: 5px;">
                                                <a onclick="$('#color').val('skin-black');" href="javascript:void(0);" data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix">
                                                        <span style="display:block; width: 20%; float: left; height: 27px; background: #fefefe;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 27px; background: #fefefe;"></span>
                                                    </div>
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 50px; background: #222;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 50px; background: #f4f5f7;"></span>
                                                    </div>
                                                </a>
                                                <p class="text-center no-margin">Blanco</p>
                                            </li>
                                            <li style="float:left; width: 33.33333%; padding: 5px;">
                                                <a onclick="$('#color').val('skin-purple');" href="javascript:void(0);" data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 27px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 27px;"></span>
                                                    </div>
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 50px; background: #222d32;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 50px; background: #f4f5f7;"></span>
                                                    </div>
                                                </a>
                                                <p class="text-center no-margin">Púrpura</p>
                                            </li>
                                            <li style="float:left; width: 33.33333%; padding: 5px;">
                                                <a onclick="$('#color').val('skin-green');" href="javascript:void(0);" data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 27px;" class="bg-green-active"></span>
                                                        <span class="bg-green" style="display:block; width: 80%; float: left; height: 27px;"></span>
                                                    </div>
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 50px; background: #222d32;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 50px; background: #f4f5f7;"></span>
                                                    </div>
                                                </a>
                                                <p class="text-center no-margin">Verde</p>
                                            </li>
                                            <li style="float:left; width: 33.33333%; padding: 5px;">
                                                <a onclick="$('#color').val('skin-red');" href="javascript:void(0);" data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 27px;" class="bg-red-active"></span>
                                                        <span class="bg-red" style="display:block; width: 80%; float: left; height: 27px;"></span>
                                                    </div>
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 50px; background: #222d32;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 50px; background: #f4f5f7;"></span>
                                                    </div>
                                                </a>
                                                <p class="text-center no-margin">Rojo</p>
                                            </li>
                                            <li style="float:left; width: 33.33333%; padding: 5px;">
                                                <a onclick="$('#color').val('skin-yellow');" href="javascript:void(0);" data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 27px;" class="bg-yellow-active"></span>
                                                        <span class="bg-yellow" style="display:block; width: 80%; float: left; height: 27px;"></span>
                                                    </div>
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 50px; background: #222d32;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 50px; background: #f4f5f7;"></span>
                                                    </div>
                                                </a>
                                                <p class="text-center no-margin">Amarillo</p></li>
                                            <li style="float:left; width: 33.33333%; padding: 5px;">
                                                <a onclick="$('#color').val('skin-blue-light');" href="javascript:void(0);" data-skin="skin-blue-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 27px; background: #367fa9;"></span>
                                                        <span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 27px;"></span>
                                                    </div>
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 50px; background: #f9fafc;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 50px; background: #f4f5f7;"></span>
                                                    </div>
                                                </a>
                                                <p class="text-center no-margin" style="font-size: 12px">Azul Light</p>
                                            </li>
                                            <li style="float:left; width: 33.33333%; padding: 5px;">
                                                <a onclick="$('#color').val('skin-black-light');" href="javascript:void(0);" data-skin="skin-black-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix">
                                                        <span style="display:block; width: 20%; float: left; height: 27px; background: #fefefe;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 27px; background: #fefefe;"></span>
                                                    </div>
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 50px; background: #f9fafc;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 50px; background: #f4f5f7;"></span>
                                                    </div>
                                                </a>
                                                <p class="text-center no-margin" style="font-size: 12px">Blanco Light</p>
                                            </li>
                                            <li style="float:left; width: 33.33333%; padding: 5px;">
                                                <a onclick="$('#color').val('skin-purple-light');" href="javascript:void(0);" data-skin="skin-purple-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 27px;" class="bg-purple-active"></span>
                                                        <span class="bg-purple" style="display:block; width: 80%; float: left; height: 27px;"></span>
                                                    </div>
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 50px; background: #f9fafc;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 50px; background: #f4f5f7;"></span>
                                                    </div>
                                                </a>
                                                <p class="text-center no-margin" style="font-size: 12px">Púrpura Light</p>
                                            </li>
                                            <li style="float:left; width: 33.33333%; padding: 5px;">
                                                <a onclick="$('#color').val('skin-green-light');" href="javascript:void(0);" data-skin="skin-green-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 27px;" class="bg-green-active"></span>
                                                        <span class="bg-green" style="display:block; width: 80%; float: left; height: 27px;"></span>
                                                    </div>
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 50px; background: #f9fafc;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 50px; background: #f4f5f7;"></span>
                                                    </div>
                                                </a>
                                                <p class="text-center no-margin" style="font-size: 12px">Verde Light</p>
                                            </li>
                                            <li style="float:left; width: 33.33333%; padding: 5px;">
                                                <a onclick="$('#color').val('skin-red-light');" href="javascript:void(0);" data-skin="skin-red-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div>
                                                        <span style="display:block; width: 20%; float: left; height: 27px;" class="bg-red-active"></span>
                                                        <span class="bg-red" style="display:block; width: 80%; float: left; height: 27px;"></span>
                                                    </div>
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 50px; background: #f9fafc;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 50px; background: #f4f5f7;"></span>
                                                    </div>
                                                </a>
                                                <p class="text-center no-margin" style="font-size: 12px">Rojo Light</p>
                                            </li>
                                            <li style="float:left; width: 33.33333%; padding: 5px;">
                                                <a onclick="$('#color').val('skin-yellow-light');" href="javascript:void(0);" data-skin="skin-yellow-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 27px;" class="bg-yellow-active"></span>
                                                        <span class="bg-yellow" style="display:block; width: 80%; float: left; height: 27px;"></span>
                                                    </div>
                                                    <div>
                                                        <span style="display:block; width: 20%; float: left; height: 50px; background: #f9fafc;"></span>
                                                        <span style="display:block; width: 80%; float: left; height: 50px; background: #f4f5f7;"></span>
                                                    </div>
                                                </a>
                                                <p class="text-center no-margin" style="font-size: 12px;">Amarillo Light</p>
                                            </li>
                                        </ul>  
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

@endsection

@section('script')
<script src="{{ asset('js/configuracion.js') }}"></script>

@endsection
