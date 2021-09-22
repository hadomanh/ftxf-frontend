@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title">News</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Status</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($news as $item)
              <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td><a href="{{ route('home.news.detail', $item->id) }}" target="_blank">{{ $item->title }}</a></td>

                    @if ($item->active)
                        <td class="text-success">Active</td>
                    @else
                        <td class="text-danger">Blocked</td>
                    @endif

                    <td>
                        <a href="{{ route('news.edit', $item->id) }}" class="btn btn-outline-warning">
                            <i class="far fa-edit"></i> Edit
                        </a>
                        
                        @if ($item->active)
                            <a href="{{ route('news.toggle', $item->id) }}" class="btn btn-outline-secondary">
                                <i class="far fa-eye-slash"></i> Hide
                            </a>
                        @else
                            <a href="{{ route('news.toggle', $item->id) }}" class="btn btn-outline-primary">
                                <i class="far fa-eye"></i> Show
                            </a>
                        @endif


                        <form action="{{ route('news.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="far fa-trash-alt"></i> Delete
                            </button>
                        </form>

                    </td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection
