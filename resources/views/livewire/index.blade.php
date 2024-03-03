<div>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="all-news-block">
                        <h3 class="news-title">
                            <span>Latest Articles</span>
                        </h3>
                        <div class="all-news">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="post-block-wrapper post-float-half clearfix">
                                        <div class="post-thumbnail">
                                            <a href="single-post.html">
                                                <img class="img-fluid" src="asset/frontend/images/news/news-01.jpg"
                                                    alt="post-thumbnail" />
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <a class="post-category" href="post-category-2.html">Google</a>
                                            <h2 class="post-title mt-3">
                                                <a href="single-post.html">Ex-Googler warns coding bootcamps are
                                                    lacking</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="posted-time">an hour ago</span>
                                                <span class="post-author">by
                                                    <a href="author.html">John Snow</a>
                                                </span>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eaque,
                                                aliquid accusamus
                                                soluta!...
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="post-block-wrapper post-float-half clearfix">
                                        <div class="post-thumbnail">
                                            <a href="single-post.html">
                                                <img class="img-fluid" src="asset/frontend/images/news/news-12.jpg"
                                                    alt="post-thumbnail" />
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <a class="post-category" href="post-category-2.html">Health</a>
                                            <h2 class="post-title mt-3">
                                                <a href="single-post.html">Today Is the Day Most People Quit Their New
                                                    Year's Party</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="posted-time">4 hours ago</span>
                                                <span class="post-author">by
                                                    <a href="author.html">Rimmon Ronnick</a>
                                                </span>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis
                                                blanditiis hic
                                                cumque excepturi...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="pagination-wrapper" class="pagination-wrapper">
                        <ul class="pagination justify-content-center">
                            <li class="page-item active">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-angle-double-left mr-2"></i></span>
                                    <span class="">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span class="">Next</span>
                                    <span aria-hidden="true"><i class="fa fa-angle-double-right ml-2"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="widget">
                            <h3 class="news-title">
                                <span>ผู้ใช้ในระบบ</span>
                            </h3>
                            <div class="post-list-block">
                                <div class=" review-post-list">
                                    @foreach ($data as $item)
                                        <div class="top-author">
                                            <img src="{{asset('storage')}}/{{$item->profile_photo_path}}" width="250" height="250" alt="author-thumb">
                                            <div class="info">
                                                <h4 class="name"><a href="author.html"> {{$item->name ?? "ไม่พบข้อมูล"}} {{$item->last_name}}</a></h4>
                                                <ul class="list-unstyled">
                                                    <li>{{$item->email}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
