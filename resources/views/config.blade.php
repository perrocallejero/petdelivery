@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <div class="panel col-sm-12">

                    <div class="panel-heading">Categorias</div>

                    <a href="{{ url('/config/articles/1')}}" class="btn btn-default {{$category==1?'btn-success':''}}">Perros</a> 
                    <a href="{{ url('/config/articles/2')}}" class="btn btn-default {{$category==2?'btn-success':''}}">Gatos</a> 
                    <a href="{{ url('/config/articles/3')}}" class="btn btn-default {{$category==3?'btn-success':''}}">Accesorios</a> 

                   </div>
                    <div class="panel col-sm-12">
                        <div class="panel-heading">Articulos</div>
                        <div class="panel-body">
                            @foreach ($articulos as $articulo)
                                <div class="title col-sm-4 {{ $articulo->destacado?'bg-success':''}}">
                                <a href="{{url('config/article/remove/'.$articulo->id)}}" class="button-close btn-sm  btn btn-danger btn-small"> x </a>
                               <span class="titulo">{{$articulo->title}}
                                 </span> 
                                 <div class="text-center media"><img src="/uploads/{{ $articulo->image}}" alt="{{ $articulo->image}}" width="70px"></div>
                                </div> 
                             @endforeach
                        </div>
                        <div class="panel-footer">Nuevo Articulo<div>

                            <form class="form-horizontal"  action="./article/new" method="post"  enctype="multipart/form-data">
                                <fieldset>

                                <!-- Text input-->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="Titulo">Titulo</label>  
                                  <div class="col-md-5">
                                  <input id="Titulo" name="title" type="text" placeholder="Titulo" class="form-control input-md" required="">
                                  <span class="help-block">Titulo corto</span>  
                                  </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="Descripcion">Descripcion</label>
                                  <div class="col-md-4">                     
                                    <textarea class="form-control" id="Descripcion" name="description"></textarea>
                                  </div>
                                </div>

                                <!-- Multiple Radios (inline) -->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="destacado">Destacado</label>
                                  <div class="col-md-4"> 
                                    <label class="radio-inline" for="destacado-0">
                                      <input type="radio" name="destacado" id="destacado-0" value="1" checked="checked">
                                      si
                                    </label> 
                                    <label class="radio-inline" for="destacado-1">
                                      <input type="radio" name="destacado" id="destacado-1" value="0">
                                      no
                                    </label>
                                  </div>
                                </div>
                                    <!-- Text input-->
                                  <div class="form-group">
                                  <label class="col-md-4 control-label" for="Precio">Precio</label>  
                                  <div class="col-md-5">
                                  <input id="Precio" name="precio" type="number" placeholder="$" class="form-control input-md" required="">
                                 {{ csrf_field() }}
                                  <span class="help-block">Precio total</span>  
                                  </div>

                                   <div class=" form-group secure">Imagen</div>
                                     <label class="col-md-4 control-label" for="file">Select Image to Upload:</label>
                                     <input type="file" name="file" id="file">
                                  </div>
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="Categoria">Categoria</label>
                                  <div class="col-md-4">
                                    <select id="Categoria" name="category" class="form-control" multiple="multiple">
                                      <option value="1">Perros</option>
                                      <option value="2" selected="selected">Gatos</option>
                                      <option value="3">Accesorios</option>
                                    </select>
                                  </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="Crear"></label>
                                  <div class="col-md-4">
                                    <button id="Crear" name="Crear" class="btn btn-success">Guardar</button>
                                  </div>
                                </div>

                                </div>
                                <!-- Select Multiple -->
                               

                                </fieldset>
                                </form>
                            </div>
                        </div>

                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
