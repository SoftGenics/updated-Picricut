@extends ('layouts.app')
@section('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap');

.fo
{
    font-family: 'Signika Negative', sans-serif;

}
.blog-listing {
    padding-top: 30px;
    padding-bottom: 30px;
}

.blog-grid {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  overflow: hidden;
  background: #ffffff;
  margin-top: 15px;
  margin-bottom: 15px;
}
.blog-grid .blog-img {
  position: relative;
}
.blog-grid .blog-img .date {
  position: absolute;
  background: #198754;
  color: #ffffff;
  padding: 8px 15px;
  left: 10px;
  top: 10px;
  border-radius: 4px;
}
.blog-grid .blog-img .date span {
  font-size: 22px;
  display: block;
  line-height: 22px;
  font-weight: 700;
}
.blog-grid .blog-img .date label {
  font-size: 14px;
  margin: 0;
}
.blog-grid .blog-info {
  padding: 20px;
}
.blog-grid .blog-info h5 {
  font-size: 22px;
  font-weight: 700;
  margin: 0 0 10px;
}
.blog-grid .blog-info h5 a {
  color: #20247b;
}
.blog-grid .blog-info p {
  margin: 0;
}
.blog-grid .blog-info .btn-bar {
  margin-top: 20px;
}


/* Blog Sidebar
-------------------*/
.blog-aside .widget {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  overflow: hidden;
  background: #ffffff;
  margin-top: 15px;
  margin-bottom: 15px;
  width: 100%;
  display: inline-block;
  vertical-align: top;
}
.blog-aside .widget-body {
  padding: 15px;
}
.blog-aside .widget-title {
  padding: 15px;
  border-bottom: 1px solid #eee;
}
.blog-aside .widget-title h3 {
  font-size: 20px;
  font-weight: 700;
  color:#198754;
  margin: 0;
}
.blog-aside .widget-author .media {
  margin-bottom: 15px;
}
.blog-aside .widget-author p {
  font-size: 16px;
  margin: 0;
}
.blog-aside .widget-author .avatar {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  overflow: hidden;
}
.blog-aside .widget-author h6 {
  font-weight: 600;
  color: #20247b;
  font-size: 22px;
  margin: 0;
  padding-left: 20px;
}
.blog-aside .post-aside {
  margin-bottom: 15px;
}
.blog-aside .post-aside .post-aside-title h5 {
  margin: 0;
}
.blog-aside .post-aside .post-aside-title a {
  font-size: 18px;
  color: #20247b;
  font-weight: 600;
}
.blog-aside .post-aside .post-aside-meta {
  padding-bottom: 10px;
}
.blog-aside .post-aside .post-aside-meta a {
  color: #6F8BA4;
  font-size: 12px;
  text-transform: uppercase;
  display: inline-block;
  margin-right: 10px;
}
.blog-aside .latest-post-aside + .latest-post-aside {
  border-top: 1px solid #eee;
  padding-top: 15px;
  margin-top: 15px;
}
.blog-aside .latest-post-aside .lpa-right {
  width: 90px;
}
.blog-aside .latest-post-aside .lpa-right img {
  border-radius: 3px;
}
.blog-aside .latest-post-aside .lpa-left {
  padding-right: 15px;
}
.blog-aside .latest-post-aside .lpa-title h5 {
  margin: 0;
  font-size: 15px;
}
.blog-aside .latest-post-aside .lpa-title a {
  color: #20247b;
  font-weight: 600;
}
.blog-aside .latest-post-aside .lpa-meta a {
  color: #6F8BA4;
  font-size: 12px;
  text-transform: uppercase;
  display: inline-block;
  margin-right: 10px;
}

.tag-cloud a {
  padding: 4px 15px;
  font-size: 13px;
  color: #ffffff;
  background: #20247b;
  border-radius: 3px;
  margin-right: 4px;
  margin-bottom: 4px;
}
.tag-cloud a:hover {
  background: #198754;
}

.blog-single {
  padding-top: 30px;
  padding-bottom: 30px;
}

.article {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  overflow: hidden;
  background: #ffffff;
  padding: 15px;
  margin: 15px 0 30px;
}
.article .article-title {
  padding: 15px 0 20px;
}
.article .article-title h6 {
  font-size: 14px;
  font-weight: 700;
  margin-bottom: 20px;
}
.article .article-title h6 a {
  text-transform: uppercase;
  color:#198754;
  border-bottom: 1px solid #198754;
}
.article .article-title h2 {
  color: #20247b;
  font-weight: 600;
}
.article .article-title .media {
  padding-top: 15px;
  border-bottom: 1px dashed #ddd;
  padding-bottom: 20px;
}
.article .article-title .media .avatar {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  overflow: hidden;
}
.article .article-title .media .media-body {
  padding-left: 8px;
}
.article .article-title .media .media-body label {
  font-weight: 600;
  color:#198754;
  margin: 0;
}
.article .article-title .media .media-body span {
  display: block;
  font-size: 12px;
}
.article .article-content h1,
.article .article-content h2,
.article .article-content h3,
.article .article-content h4,
.article .article-content h5,
.article .article-content h6 {
  color: #20247b;
  font-weight: 600;
  margin-bottom: 15px;
}
.article .article-content blockquote {
  max-width: 600px;
  padding: 15px 0 30px 0;
  margin: 0;
}
.article .article-content blockquote p {
  font-size: 20px;
  font-weight: 500;
  color:#198754;
  margin: 0;
}
.article .article-content blockquote .blockquote-footer {
  color: #20247b;
  font-size: 16px;
}
.article .article-content blockquote .blockquote-footer cite {
  font-weight: 600;
}
.article .tag-cloud {
  padding-top: 10px;
}

.article-comment {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  overflow: hidden;
  background: #ffffff;
  padding: 20px;
}
.article-comment h4 {
  color: #20247b;
  font-weight: 700;
  margin-bottom: 25px;
  font-size: 22px;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
</style>
<header class="py-5 bg-light border-bottom mb-4 fo" style="margin-top: 123px;">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">Pircuit blogs</p>
                    @if(Session::has('users'))  
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                        Write blog now
                      </button>
                      @endif
                </div>
            </div>
        </header>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
        <section >
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <div class="row">
                              @foreach(\App\Models\Blog::all() as $blog)
                               
                              @if($blog['status']=="1")
                              @php
                              $dateValue = strtotime($blog['created_at']);
                              $mon = date("m", $dateValue);
                              //$dateObj   = DateTime::createFromFormat('!m', $mon);
                                 $month =  date("M", mktime(0, 0, 0, $mon, 10));
                              $datei = date("d", $dateValue); 
                              @endphp
                                <div class="col-sm-6">
                                    <div class="blog-grid">
                                        <div class="blog-img">
                                            <div class="date">
                                                <span>{{$datei}}</span>
                                                <label>{{$month}}</label>
                                            </div>
                                            <a href="{{url("blog/single/".$blog['id'])}}">
                                                <img src="{{$blog['mediafile']}}" title="" alt="" style="height:180px;width:360px;">
                                            </a>
                                        </div>
                                        <div class="blog-info">
                                            <h5><a href="{{url("blog/single/".$blog['id'])}}">{{$blog['title']}}</a></h5>
                                            <h6><p>{!!strip_tags(html_entity_decode(substr($blog['body'], 0,60) . '...'))!!}</p><h6>
                                            <div class="btn-bar">
                                                <a href="{{url("blog/single/".$blog['id'])}}" class="px-btn-arrow">
                                                    <span>Read More</span>
                                                    <i class="arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                <div class="col-sm-6">
                                    <div class="blog-grid">
                                        <div class="blog-img">
                                            <div class="date">
                                                <span>04</span>
                                                <label>FEB</label>
                                            </div>
                                            <a href="#">
                                                <img src="https://www.bootdey.com/image/400x200/D3D3D3/000000" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-info">
                                            <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="btn-bar">
                                                <a href="#" class="px-btn-arrow">
                                                    <span>Read More</span>
                                                    <i class="arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="blog-grid">
                                        <div class="blog-img">
                                            <div class="date">
                                                <span>04</span>
                                                <label>FEB</label>
                                            </div>
                                            <a href="#">
                                                <img src="https://www.bootdey.com/image/400x200/87CEFA/000000" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-info">
                                            <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="btn-bar">
                                                <a href="#" class="px-btn-arrow">
                                                    <span>Read More</span>
                                                    <i class="arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="blog-grid">
                                        <div class="blog-img">
                                            <div class="date">
                                                <span>04</span>
                                                <label>FEB</label>
                                            </div>
                                            <a href="#">
                                                <img src="https://www.bootdey.com/image/400x200/D3D3D3/000000" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-info">
                                            <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="btn-bar">
                                                <a href="#" class="px-btn-arrow">
                                                    <span>Read More</span>
                                                    <i class="arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="blog-grid">
                                        <div class="blog-img">
                                            <div class="date">
                                                <span>04</span>
                                                <label>FEB</label>
                                            </div>
                                            <a href="#">
                                                <img src="https://www.bootdey.com/image/400x200/E0FFFF/000000" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-info">
                                            <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="btn-bar">
                                                <a href="#" class="px-btn-arrow">
                                                    <span>Read More</span>
                                                    <i class="arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="blog-grid">
                                        <div class="blog-img">
                                            <div class="date">
                                                <span>04</span>
                                                <label>FEB</label>
                                            </div>
                                            <a href="#">
                                                <img src="https://www.bootdey.com/image/400x200/FFF0F5/000000" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-info">
                                            <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="btn-bar">
                                                <a href="#" class="px-btn-arrow">
                                                    <span>Read More</span>
                                                    <i class="arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-lg-4 m-15px-tb blog-aside">
                            <!-- Author -->
                            
                            <!-- End Author -->
        
                            <!-- Trending Post -->
                            
                        
                            <!-- End Trending Post -->
        
                            <!-- Latest Post -->
                            <div class="widget widget-latest-post">
                                <div class="widget-title">
                                    <h3>Trending Now</h3>
                                </div>
                                <div class="widget-body">
                                  @php
                                  $k=1;
                                  @endphp
                                  @foreach(\App\Models\Blog::all()->sortByDesc("rating") as $tp)
                                     
                                        @if($tp['status']=="1" && $k<=3)
                                        @php
                                        $dateValue = strtotime($tp['created_at']);
                                        $mon = date("m", $dateValue);
                                        $year = date("y", $dateValue);
                                           $month =  date("M", mktime(0, 0, 0, $mon, 10))." ";
                                        $datei = date("d", $dateValue)." "; 
                                        $k++;
                                        @endphp
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{url("blog/single/".$tp['id'])}}">{{$tp['title']}}</a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                
                                                <a class="date" href="#">
                                                  {{$datei . $month .$year}}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="blog/single/{{$tp['id']}}">
                                                <img src="{{url($tp['mediafile'])}}" title="" alt="" style="height:45px;width:90px;">
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    
        
                                   
        
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel" style="font-weight:bold" >Write your blog</h5>
                      
                    
                      </button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Title</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Blog Title" maxlength="70">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Upload blog image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/*">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlbody1">Blog body</label>
                            <textarea class="form-control" id="summernote" placeholder="Balabala" autofocus rows="3"></textarea>
                          </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="blogupload">Upload</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
              </div>
            </div>
            @php
            $users=session()->get('users');
            $user_id=$users['id'];
            @endphp
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            
            <script>
                $(document).ready(() => {
                    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           
           
                    let profile;
        const user_id = "{{ $user_id }}";
                    $("#blogupload").click(function () {
                        const file = $('#exampleFormControlFile1')[0].files[0]
                        let markupStr = $('#summernote').summernote('code');
                        console.log(markupStr);
                        let btitle=$("#exampleFormControlInput1").val();
                        profile = file;
            var formData = new FormData();
            formData.append('profile', profile);
            formData.append('user_id', user_id);
            formData.append('btitle', btitle);
            formData.append('bbody', markupStr);
            $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                type: 'post',
                data: formData,
                url: "{{ route('update-blog') }}",
                success: function (response) {
                    if (response.success) {
                        Swal.fire(
  'Good job!',
  'Blog uploaded successfully!',
  'success'
)
                    } else {
                        Swal.fire(
  'Sorry!',
  'some error occured',
  'error'
)
                    console.log("test");
                    }
                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                },
                error: function(data){
                
                var errors = data.responseJSON;
                console.log(errors);
                }
            });
                    });
                });
            </script>
@stop