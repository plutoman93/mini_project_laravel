<div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>
        <div>
            <br>
            <a class="btn btn-primary" href="{{route('project-add')}}">
              <i class="fas fa-folder">
                </i>
                Create
            </a>
        </div>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Full Name
                      </th>
                      <th style="width: 30%">
                          Photo
                      </th>
                      <th style="width: 8%" class="text-center">
                          Email
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                <tr>
                      <td>
                          {{$item->id}}
                      </td>
                      <td>
                          <a>
                              {{$item->name}}
                          </a>
                          <br/>
                          <small>
                              {{$item->last_name}}
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="{{asset('storage')}}/{{$item->profile_photo_path}}">
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                        {{$item->email}}
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{route('project-view',['id' =>$item->id])}}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{route('project-edit',['id' =>$item->id])}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" wire:click="delete({{$item->id}})" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
        {{$data->links()}}
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
