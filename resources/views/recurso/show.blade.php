@extends('app')

@section('title')
{{$title}}
@endsection

@section('content')
<section class="content-header">
   <h1>
      Detalhes
      <small>do recurso</small>
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
                 <dd>{{ $registro->nome }}</dd>
                 <dt>Pontuação Mínima</dt>
                 <dd>{{ $registro->pontuacaoMin }}</dd>
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
              <h3 class="box-title">Restrições</h3>
            </div>
             
                <div class="panel box box-primary">
                     <div class="box-body table-responsive no-padding">
                       <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th>Atributo</th>
                                 <th>Tipo</th>
                                 <th>Operador</th>
                                 <th>Valor Textual</th>
                                 <th>Valor Numérico</th>
                                 <th>Modo</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($registro->restricoes as $restricao)
                              <tr>
                                 <td>{{$restricao->atributo}}</td>
                                 <td>
                                   @php
                                   switch ($restricao->tipo) {
                                       case 1:
                                          echo '<span class="label label-default">Textual</span>';
                                          break;
                                       case 2:
                                          echo '<span class="label label-primary">Numérico</span>';
                                          break;
                                       case 3:
                                          echo '<span class="label label-warning">Data</span>';
                                          break;
                                       case 4:
                                          echo '<span class="label label-success">Hora</span>';
                                          break;
                                       default:
                                          echo '<span class="label label-danger">Título</span>';
                                    }
                                    @endphp
                                 </td>
                                 <td>
                                   @php
                                   switch ($restricao->operador) {
                                       case 1:
                                          echo '<span class="label label-default">Menor</span>';
                                          break;
                                       case 2:
                                          echo '<span class="label label-primary">Igual</span>';
                                          break;
                                       default:
                                          echo '<span class="label label-danger">Maior</span>';
                                    }
                                    @endphp
                                 </td>
                                 <td>{{$restricao->valorTextual}}</td>
                                 <td>{{$restricao->valorNumerico}}</td>
                                 <td>
                                   @php
                                   switch ($restricao->impeditivo) {
                                       case 1:
                                          echo '<span class="label label-danger">Impeditivo</span>';
                                          break;
                                       default:
                                          echo '<span class="label label-primary">Não impeditivo</span>';
                                    }
                                    @endphp
                                 </td>
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
             
               <a href="{{route('recurso.index')}}" class="btn btn-primary">Voltar para lista</a>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
   </div>
   <!-- /.col -->
</section>
<!-- /.content -->
@endsection