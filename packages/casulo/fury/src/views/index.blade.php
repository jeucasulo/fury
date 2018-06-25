@extends('fury.master')

@section('title', 'Fury')
@section('jsFile', asset("").'js/index.js')
@section('cssFile', asset("").'css/index.css')


@section('content')
    @parent
    



    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col-md-8 offset-md-2">

        <div class="row text-center">
          <div class="col-sm">
            
            <div class="card">
              <div class="card-header">
                Tabelas
              </div>
              <div class="card-body">
                <h5 class="card-title">Criar e editar tabelas</h5>
                <p class="card-text">Aqui você terá um panorama completo de sua coleção de tabelas.</p>
                <a href="{{route('fury.tables')}}" class="btn btn-primary btn-block">Tabelas</a>
              </div>
            </div>
          </div>


          <div class="col-sm">
            <div class="card">
              <div class="card-header">
                Personalize
              </div>
              <div class="card-body">
                <h5 class="card-title">Colunas das tabelas</h5>
                <p class="card-text">Edite suas tabelas de acordo com suas colunas e especificidades.</p>
                <a href="{{route('fury.generate')}}" class="btn btn-primary btn-block">Tabelas</a>
              </div>
            </div>
          </div>


          <div class="col-sm">
            <div class="card">
              <div class="card-header">
                Configuração
              </div>
              <div class="card-body">
                <h5 class="card-title">Edite suas configurações</h5>
                <p class="card-text">Padrão de diretórios, cabeçalhos de página, rodapés, imports etc.</p>
                <a href="{{route('fury.config')}}" class="btn btn-primary btn-block">Configuração</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>


@endsection

