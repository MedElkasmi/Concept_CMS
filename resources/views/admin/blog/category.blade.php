@extends('admin.admin_master')
@section('dashboard-content')
<div class="card">
   <h5 class="card-header">Create New Category</h5>
   <div class="card-body">
      <form method="post" action="{{route('category.store')}}">
         @csrf
         @method('post')
         <div class="row">
            <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-3 col-md-12 col-sm-12 col-12 p-4">
               @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif
               <div class="form-group">
                  <label>New Category</label>
                  <input type="text" class="form-control form-control-lg" name="blog_category">
                  <br>
                  <button type="submit" class="btn btn-primary float-right">Save</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>


<div class="card">
    <h5 class="card-header">Basic Table</h5>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered first">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->blog_category }}</td>
                        <td width="25%" style="text-align: center;">
                            <a href="#" class="btn btn-success">Success</a>
                            <a href="#" class="btn btn-danger">Danger</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection