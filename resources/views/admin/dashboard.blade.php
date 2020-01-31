@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  
      <div class="cards">
        <nav class="" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="active breadcrumb-item" aria-current="page">
                    基础
                </li>
            </ol>
        </nav>
        <div class="card">
       
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>

        <nav class="" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="active breadcrumb-item" aria-current="page">
                    介绍
                </li>
            </ol>
        </nav>
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <nav class="" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="active breadcrumb-item" aria-current="page">
                    附加
                </li>
            </ol>
        </nav>
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
@stop

@section('css')
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop