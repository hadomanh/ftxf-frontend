@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title">Partners</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Status</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($partners as $item)
              <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td><a href="{{ $item->url }}" target="_blank">{{ $item->name }}</a></td>

                    @if ($item->active)
                        <td class="text-success">Active</td>
                    @else
                        <td class="text-danger">Blocked</td>
                    @endif

                    <td>
                        <a href="{{ route('partner.edit', $item->id) }}" class="btn btn-outline-warning">
                            <i class="far fa-edit"></i> Edit
                        </a>
                        
                        @if ($item->active)
                            <a href="{{ route('partner.toggle', $item->id) }}" class="btn btn-outline-secondary">
                                <i class="far fa-eye-slash"></i> Hide
                            </a>
                        @else
                            <a href="{{ route('partner.toggle', $item->id) }}" class="btn btn-outline-primary">
                                <i class="far fa-eye"></i> Show
                            </a>
                        @endif


                        <form action="{{ route('partner.destroy', $item->id) }}" method="POST" class="d-inline">
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
