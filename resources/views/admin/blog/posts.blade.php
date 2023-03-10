@extends('admin.admin_master')
@section('dashboard-content')

<div class="card">
    <h5 class="card-header">Posts Created For Each User : </h5>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered first">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Post Title</th>
                        <th>Post Preview</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                @php $i=1; @endphp
                @foreach ($posts as $post)

                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$post->title}}</td>
                        <td>
                            <img src="{{ url('upload/Blog/'. $post->img_url)}}" alt="preview" style="width: 100px; height:80px;">

                        </td>
                        <td width="25%" style="text-align: center;">

                            <form method="POST" action="">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection