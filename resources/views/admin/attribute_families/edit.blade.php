@extends('adminlte::page')

@section('title', '属性管理')

@section('content_header')
<h1>编辑属性</h1>
@stop

@section('content')



<div class="cards">

  <div class="card">
 
    <div class="card-body">
      <div class="form-group">
        <label for="code">属性组</label>
        <input type="text" class="col-sm-6 form-control" id="code" name="code" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="name">属性组名称</label>
        <input type="text" class="col-sm-6 form-control" id="name" name="name">
      </div>
    </div>
  </div>

  <!-- <nav class="" aria-label="breadcrumb">
      <ol class="breadcrumb">
          <li class="active breadcrumb-item" aria-current="page">
              组
          </li>
      </ol>
  </nav>
  <div class="card">
    <div class="card-body">
      
      @foreach($attributeFamily->attributeGroups as $group)
      <nav class="" aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="active breadcrumb-item" aria-current="page">
              {{ $group->name }}
              </li>
          </ol>
      </nav>
      
      <table class="table table-sm py-2">
        <thead class="thead-light">
          <tr>
            <th class="py-1" scope="col" width="30%">Code</th>
            <th class="py-1" scope="col" width="30%">名称</th>
            <th class="py-1" scope="col" width="30%">类型</th>
          </tr>
        </thead>
        <tbody>
          @foreach($group->attributes as $attribute)
          <tr>
            <td>{{ $attribute->code }}</td>
            <td>{{ $attribute->name }}</td>
            <td>{{ $attribute->type }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endforeach
    </div>
  </div> -->
</div>

<button type="button" class="btn btn-primary mb-2">添加组</button>
<div id="accordion">
  @foreach($attributeFamily->attributeGroups as $group)
  <div class="card">
    <div class="card-header" id="heading{{ $group->id }}">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $group->id }}" aria-expanded="true" aria-controls="collapse{{ $group->id }}">
        {{ $group->name }}
        </button>
      </h5>
    </div>

    <div id="collapse{{ $group->id }}" class="collapse show" aria-labelledby="heading{{ $group->id }}" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  @endforeach

  <!-- <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div> -->
</div>
@stop

@section('css')

@stop

@section('js')
<script>
	console.log('Hi!');
</script>
@stop