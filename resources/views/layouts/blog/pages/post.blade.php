@extends('blog')
@section('content')

<body>
  
  
       <!--  ************************* Page Title Starts Here ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    <h2>Bootstrap HTML Form Design</h2>
                    <ul>
                        <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i> HTML Form Design</li>
                    </ul>
                </div>
            </div>
        </div>


      <!--####################### Video Blog Starts Here ###################-->
      <div class="container-fluid video-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row no-margin video-cover">
                            <iframe  height="415" src="https://www.youtube.com/embed/bveuj63Su4E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>In this video, you will learn how to create a stylish appointment form from scratch using HTML, CSS, and Bootstrap Download the Project HTML, CSS, and Bootstrap Download the Project File from https://www.smarteyeapps.com/free-hos...
                            </p>

                            <div class="row no-margin video-title" bis_skin_checked="1">
                                <h6><i class="fas fa-book"></i> 3 Comments</h6>
                            </div>

                            <div class="comment-container">
                                <div class="comment-box row">
                                    <div class="col-2 mghji">
                                        <img src="{{asset('frontend/')}}/images/testimonial/member-01.jpg" alt="">
                                    </div>
                                    <div class="col-10 detaila">
                                        <h6>Mr. Mical James</h6>
                                        <small>Published on 19-06-2019</small>
                                        <p>In this video, you will learn how to create a stylish appointment
                                             form from scratch using HTML, CSS, and Bootstrap Download the Project</p>
                                    </div>
                                </div>
                                <div class="comment-box row">
                                        <div class="col-2 mghji">
                                            <img src="{{asset('frontend/')}}/images/testimonial/member-01.jpg" alt="">
                                        </div>
                                        <div class="col-10 detaila">
                                            <h6>Mr. Mical James</h6>
                                            <small>Published on 19-06-2019</small>
                                            <p>In this video, you will learn how to create a stylish appointment
                                                 form from scratch using HTML, CSS, and Bootstrap Download the Project</p>
                                        </div>
                                    </div>
                                    <div class="comment-box row">
                                            <div class="col-2 mghji">
                                                <img src="{{asset('frontend/')}}/images/testimonial/member-01.jpg" alt="">
                                            </div>
                                            <div class="col-10 detaila">
                                                <h6>Mr. Mical James</h6>
                                                <small>Published on 19-06-2019</small>
                                                <p>In this video, you will learn how to create a stylish appointment
                                                     form from scratch using HTML, CSS, and Bootstrap Download the Project</p>
                                            </div>
                                        </div>
                            </div>

                            
                            <div class="row no-margin video-title" bis_skin_checked="1">
                                    <h6><i class="fas fa-book"></i> Post Your Comment</h6>
                                </div>

                            <div class="comment-text ">
                                <div class="form-row  row">
                                    <input type="text" placeholder=" Enter Name" class="form-control form-control-sm">
                                </div>
                                <div class="form-row row">
                                        <input type="text" placeholder="Enter Mobile number" class="form-control form-control-sm">
                                </div>
                                <div class="form-row row">
                                        <input type="text" placeholder="Enter Email Address" class="form-control form-control-sm">
                                </div>
                                <div class="form-row row">
                                        <textarea placeholder="Enter Comment"   rows="5" class="form-control form-control-sm"></textarea>
                                 </div>
                                 <div class="form-row row">
                                       <button class="btn btn-danger">Post Comment</button>
                                 </div>
                            </div>
                        </div>
                        
                        
                        
                            
                                  
                    </div>
                    <div class="col-md-4">
                        <div class="row no-margin video-title">
                            <h6><i class="fas fa-book"></i> Related Videos</h6>
                        </div>
                        <div class="contri-bghy">
                            <div class="image">
                                <img src="{{asset('frontend/')}}/images/video/b1.jpg" alt="">
                            </div>
                            <div class="detail">
                                <h6>Pictures, abstract symbols the ingredients with</h6>
                               
                                <span>Posted on: 2018</span>
                            </div>
                        </div>

                        <div class="contri-bghy">
                                <div class="image">
                                    <img src="{{asset('frontend/')}}/images/video/b2.jpg" alt="">
                                </div>
                                <div class="detail">
                                    <h6>Pictures, abstract symbols the ingredients with</h6>
                                   
                                    <span>Posted on: 2018</span>
                                </div>
                            </div>

                            <div class="contri-bghy">
                                    <div class="image">
                                        <img src="{{asset('frontend/')}}/images/video/b3.jpg" alt="">
                                    </div>
                                    <div class="detail">
                                        <h6>Pictures, abstract symbols the ingredients with</h6>
                                       
                                        <span>Posted on: 2018</span>
                                    </div>
                                </div>

                                <div class="contri-bghy">
                                        <div class="image">
                                            <img src="{{asset('frontend/')}}/images/video/b4.jpg" alt="">
                                        </div>
                                        <div class="detail">
                                            <h6>Pictures, abstract symbols the ingredients with</h6>
                                           
                                            <span>Posted on: 2018</span>
                                        </div>
                                    </div>

                                    <div class="contri-bghy">
                                            <div class="image">
                                                <img src="{{asset('frontend/')}}/images/video/b5.jpg" alt="">
                                            </div>
                                            <div class="detail">
                                                <h6>Pictures, abstract symbols the ingredients with</h6>
                                               
                                                <span>Posted on: 2018</span>
                                            </div>
                                        </div>
                                       
                                                <div class="row no-margin video-title" bis_skin_checked="1">
                                                    <h6><i class="fas fa-book"></i> Top Contributers</h6>
                                                </div>
                                                <div class="contri-row" bis_skin_checked="1">
                                                    <div class="image" bis_skin_checked="1">
                                                        <img src="{{asset('frontend/')}}/images/testimonial/member-01.jpg" alt="">
                                                    </div>
                                                    <div class="detail" bis_skin_checked="1">
                                                        <h6>David Smith</h6>
                                                        <p>78 Videos</p>
                                                        <span>Joned 2018</span>
                                                    </div>
                                                </div>
                                                <div class="contri-row" bis_skin_checked="1">
                                                    <div class="image" bis_skin_checked="1">
                                                        <img src="{{asset('frontend/')}}/images/testimonial/member-02.jpg" alt="">
                                                    </div>
                                                    <div class="detail" bis_skin_checked="1">
                                                        <h6>David Smith</h6>
                                                        <p>78 Videos</p>
                                                        <span>Joned 2018</span>
                                                    </div>
                                                </div>
                                                <div class="contri-row" bis_skin_checked="1">
                                                    <div class="image" bis_skin_checked="1">
                                                        <img src="{{asset('frontend/')}}/images/testimonial/member-03.jpg" alt="">
                                                    </div>
                                                    <div class="detail" bis_skin_checked="1">
                                                        <h6>David Smith</h6>
                                                        <p>78 Videos</p>
                                                        <span>Joned 2018</span>
                                                    </div>
                                                </div>
                                                <div class="contri-row" bis_skin_checked="1">
                                                    <div class="image" bis_skin_checked="1">
                                                        <img src="{{asset('frontend/')}}/images/testimonial/member-04.jpg" alt="">
                                                    </div>
                                                    <div class="detail" bis_skin_checked="1">
                                                        <h6>David Smith</h6>
                                                        <p>78 Videos</p>
                                                        <span>Joned 2018</span>
                                                    </div>
                                                </div>
                                                <div class="contri-row" bis_skin_checked="1">
                                                    <div class="image" bis_skin_checked="1">
                                                        <img src="{{asset('frontend/')}}/images/testimonial/member-01.jpg" alt="">
                                                    </div>
                                                    <div class="detail" bis_skin_checked="1">
                                                        <h6>David Smith</h6>
                                                        <p>78 Videos</p>
                                                        <span>Joned 2018</span>
                                                    </div>
                                                </div>
                                                    
                       
                    </div>
                </div>
            </div>
        </div>   


  
   
    
</body>


@endsection