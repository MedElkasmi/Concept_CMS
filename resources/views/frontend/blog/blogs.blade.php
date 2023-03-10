@extends('frontend.master')
@section('content')
<main id="main">
   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
         <div class="container">
            <div class="breadcrumb-hero">
               <h2>Blog</h2>
            </div>
         </div>
      </div>
      <div class="container">
         <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
         </ol>
      </div>
   </section>
   <!-- End Breadcrumbs -->
   <!-- ======= Blog Section ======= -->
   <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
         <div class="row">
            @foreach ($posts as $post)
            <div class="col-lg-8 entries">
               <article class="entry">
                  <div class="entry-img">
                     <img src="{{ url('upload/Blog/'. $post->img_url )}}" alt="" class="img-fluid">
                  </div>
                  <h2 class="entry-title">
                     <a href="blog-single.html">{{$post->title}}</a>
                  </h2>
                  <div class="entry-meta">
                     <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">John Doe</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html">{{$post->created_at}}</a></li>
                     </ul>
                  </div>
                  <div class="entry-content">
                     {{$post->content}}
                     <div class="read-more">
                        <a href="{{route('single.blog',['id' => $post->id])}}">Read More</a>
                     </div>
                  </div>
               </article>
               <!-- End blog entry -->
            </div>
            <!-- End blog entries list -->
            @endforeach
            <div class="col-lg-4">
               <div class="sidebar">
                  <h3 class="sidebar-title">Search</h3>
                  <div class="sidebar-item search-form">
                     <form action="">
                        <input type="text">
                        <button type="submit"><i class="bi bi-search"></i></button>
                     </form>
                  </div>
                  <!-- End sidebar search formn-->
                  <h3 class="sidebar-title">Categories</h3>
                  <div class="sidebar-item categories">
                     <ul>
                        <li><a href="#">General <span>(25)</span></a></li>
                     </ul>
                  </div>
                  <!-- End sidebar categories-->
                  <h3 class="sidebar-title">Recent Posts</h3>
                  <div class="sidebar-item recent-posts">
                     <div class="post-item clearfix">
                        <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                        <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                        <time datetime="2020-01-01">Jan 1, 2020</time>
                     </div>
                  </div>
                  <!-- End sidebar recent posts-->
                  <h3 class="sidebar-title">Tags</h3>
                  <div class="sidebar-item tags">
                     <ul>
                        <li><a href="#">App</a></li>
                     </ul>
                  </div>
                  <!-- End sidebar tags-->
               </div>
               <!-- End sidebar -->
            </div>
            <!-- End blog sidebar -->
            <div class="blog-pagination">
               <ul class="justify-content-center">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <!-- End Blog Section -->
</main>
<!-- End #main -->
@endsection
