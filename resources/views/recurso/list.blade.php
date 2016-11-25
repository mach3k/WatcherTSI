@extends('app')

@section('title')
{{$title}}
@endsection

@section('content')
<section class="content-header">
   <h1>
      Recursos
      <small>disponíveis</small>
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
                        <th>Nome</th>
                        <th>Pontuação Mínima</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($registros as $registro)
                     <tr>
                        <td>{{$registro->nome}}</td>
                        <td>{{$registro->pontuacaoMin}}</td>
                        <td>
                           <form class="" action="{{route('recurso.destroy',$registro->id)}}" method="post">
                              <input type="hidden" name="_method" value="delete">
                              
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <a href="{{route('recurso.show', $registro->id)}}" class="btn btn-success btn-sm">Detalhe</a>
                              
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <a href="{{route('recurso.edit',$registro->id)}}" class="btn btn-primary btn-sm">Editar</a>
                              
                              <input type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Você tem certeza que deseja excluir este registro?');" name="name" value="Excluir">
                           </form>
                        </td>
                     </tr>
                     @endforeach
                  
                  </tbody>
                  <tfoot>
                     
                  </tfoot>
               </table>
               <a href="#" class="btn btn-primary">Novo recurso</a>
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