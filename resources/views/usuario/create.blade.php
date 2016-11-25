@extends('app')

@section('title')
{{$title}}
@endsection

@section('content')
<section class="content-header">
   <h1>
      Novo
      <small>usuário</small>
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
            
            <!-- form start -->
            <form role="form" action="{{route('projeto.store')}}" method="post">
               <div class="box-body">
                  {{csrf_field()}}
                  
                  <div class="form-group col-sm-8">
                     <label for="nome">Nome</label>
                     <input type="text" class="form-control" name="nome" placeholder="Informe o nome do projeto" required>
                  </div>
                  <div class="form-group col-sm-4">
                     <label for="situacao">Situação</label>
                     <select class="form-control" name="situacao" required>
                        <option value="1">Negociando</option>
                        <option value="2">Contratado</option>
                        <option value="3">Em produção</option>
                        <option value="4">Entregue</option>
                        <option value="5">Cancelado</option>
                     </select>
                  </div>
                  <div class="form-group col-sm-12">
                     <label for="descricao">Descrição</label>
                     <textarea class="form-control" rows="5" name="descricao" placeholder="Informe a descrição do projeto" required></textarea>
                  </div>
                  <div class="form-group col-sm-4">
                     <label for="categoria">Cliente</label>
                     <select class="form-control" name="cliente" required>
                        @foreach($clientes as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->nomeFantasia}}</option>
                        @endforeach
                     </select>
                  </div>
                  <div class="form-group col-sm-4">
                     <label for="dataContratacao">Data da contratação</label>
                     <div class="input-group date">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" name="dataContratacao" id="datepicker1">
                     </div>
                 </div>
                  <div class="form-group col-sm-4">
                     <label for="prazoEntrega">Prazo de entrega</label>
                     <div class="input-group date">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" name="prazoEntrega" id="datepicker2">
                     </div>
                 </div>
                   <!-- /.input group -->
               </div>
               <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
                 <a href="{{route('projeto.index')}}" class="btn btn-default pull-right">Cancelar</a>
              </div>
            </form>
          </div>
      
      </div>
      <!-- /.box -->
   </div>
   <!-- /.col -->
</section>
<!-- /.content -->
@endsection