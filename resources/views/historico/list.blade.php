@extends('app')

@section('title')
{{$title}}
@endsection

@section('content')
<section class="content-header">
   <h1>
      Histórico
      <small>de utilização de recursos</small>
   </h1>
</section>
<section class="content">
   <div class="row">
      <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
               <h3 class="box-title">Registros</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                  <thead>
                     <tr>
                        <th>Data</th>
                        <th>Usuário</th>
                        <th>Pontos</th>
                        <th>Recurso</th>
                        <th>Resumo</th>
                        <th>Pontos Somados</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($registros as $registro)
                     <tr>
                        <td>{{ Carbon\Carbon::parse($registro->dataAcesso)->format('d-m-Y') }}</td>
                        <td>{{$registro->user->name}}</td>
                        <td>{{$registro->pontosAtuais}}</td>
                        <td>{{$registro->recurso->nome}}</td>
                        <td>{{$registro->resumo}}</td>
                        <td>{{$registro->pontosSomados}}</td>
                     </tr>
                     @endforeach
                  
                  </tbody>
                  <tfoot>
                     
                  </tfoot>
               </table>
            </div>
          <!-- /.box -->
         </div>
        <!-- /.col -->
      </div>
   </div>
   <!-- /.row -->
</section>
<!-- /.content -->
@endsection