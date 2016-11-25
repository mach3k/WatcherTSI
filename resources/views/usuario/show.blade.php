@extends('app')

@section('title')
{{$title}}
@endsection

@section('content')
<section class="content-header">
   <h1>
      Detalhes
      <small>do usuário</small>
   </h1>
</section>
<section class="content">
   <div class="row">
      <div class="col-xs-12">
         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Registro</h3>
            </div>
            <!-- /.box-header -->

            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                 <dt>Nome</dt>
                 <dd>{{ $registro->name }}</dd>
                 <dt>Pontuação</dt>
                 <dd>{{ $registro->pontuacao }}</dd>
              </dl>
            </div>
            <!-- /.box-body -->
         </div>
      </div>
      <!-- /.box -->
   </div>
   
   
   <div class="row">
      <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Títulos</h3>
            </div>
            <!-- /.box-header -->
                 @if (count($registro->titulos) > 0)
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                 
                <div class="panel box box-primary">
                     <div class="box-body table-responsive no-padding">
                       <table class="table table-hover">
                           <thead>
                              <tr>
         <!--                  <th>Id</th>-->
                                 <th>Nome</th>
                                 <th>Peso</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($registro->titulos as $titulo)
                              <tr>
         <!--                      <td>{{$registro->id}}</td>-->
                                 <td>{{$titulo->nome}}</td>
                                 <td>{{$titulo->peso}}</td>
                                 <td>
                                    <form class="" action="#" method="post">
                                    <input type="hidden" name="_method" value="delete">

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a href="#" class="btn btn-success btn-sm">Detalhe</a>

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a href="#" class="btn btn-primary btn-sm">Editar</a>

                                    <input type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Você tem certeza que deseja excluir este registro?');" name="name" value="Excluir">
                                 </td>
                              </tr>
                              @endforeach

                           </tbody>
                           <tfoot>
                              
                           </tfoot>
                        </table>
                     </div>
                </div>
                 @else
                 <span>Este usuário não possui títulos</span>
                 @endif
             
               <a href="{{route('usuario.index')}}" class="btn btn-primary">Voltar para lista</a>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
   </div>
   <!-- /.col -->
</section>
<!-- /.content -->
@endsection