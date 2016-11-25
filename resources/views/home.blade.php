@extends('app')

@section('title')
{{$title}}
@endsection

@section('content')
<section class="content-header">
   <h1>
      Watcher
      <small>TSI</small>
   </h1>
</section>
<section class="content">
   <div class="row">
      <div class="col-lg-3 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
               <h3>{{$qtdUsers}}</h3>

               <p>Usuário(s) Cadastrado(s)</p>
            </div>
            <div class="icon">
               <i class="ion ion-ios-people"></i>
            </div>
            <a href="{{route('usuario.index')}}" class="small-box-footer">Ver usuários <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div>
      
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$qtdRecursos}}</h3>

              <p>Recurso(s) disponíveis</p>
            </div>
            <div class="icon">
              <i class="ion ion-pricetags"></i>
            </div>
            <a href="{{route('recurso.index')}}" class="small-box-footer">Mais detalhes <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>   
   </div>
   
   <div class="row">
      <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
               <h3 class="box-title">Teste de requisição</h3>
            </div>
            <form role="form" action="{{route('avaliaRequisicao')}}" method="post">
               <div class="box-body">
                  {{csrf_field()}}
                  
                  <div class="form-group col-sm-4">
                     <label for="usuario">Usuáriolabel</label>
                     <select class="form-control" name="usuario" required>
                        @foreach($usuarios as $usuario)
                        <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                        @endforeach
                     </select>
                  </div>
                  
                  <div class="form-group col-sm-4">
                     <label for="recurso">Recurso</label>
                     <select class="form-control" name="recurso" required>
                        @foreach($recursos as $recurso)
                        <option value="{{$recurso->id}}">{{$recurso->nome}}</option>
                        @endforeach
                     </select>
                  </div>
            </div>
                     
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </form>
         </div>
        <!-- /.col -->
      </div>
   </div>
   
</section>
@endsection