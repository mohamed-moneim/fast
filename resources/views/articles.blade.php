@extends("layouts.app2")
@section('content')

<nav class="navbar navbar-default navbar-color navbar-fixed-top nopaddpmargin">
        <div class="container nopaddpmargin">
            <div class="clogo">
<img class="logo" src="public/dist/img/fastfixlogo.png" />
</div><div class="navbar-header page-scroll">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="nav navbar-nav">
                    <li class="page-scroll">
                        <a href="/#page-top">الرئيسية</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/#about">من نحن</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/#portfolio">خدماتنا</a>
                    </li>
                    <li class="page-scroll">
                        <a href="images">الصور</a>
                    </li>
                    <li class="page-scroll">
                        <a href="videos">الفيديوهات</a>
                    </li>
                            <li class="page-scroll">
                        <a href="/#contact">اتصل بنا</a>
                    </li>
                            <li class="page-scroll">
                        <a href="blog">المدونة</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        <!-- /.container-fluid -->
    </nav>

       
    <section>
        <div class="container">
            <div class="row owl-carousel">
               @foreach($img as $i)
            <div class="col-lg-12 text-center">
            <a class="text-center art" href="single-article/{{$i->id}}">

            <img  src="public/img/{{$i->img}}" /> 
{{$i->title}}
</a>
                        </div>
                @endforeach


    </div>

</div>
</section>

<footer style="margin:50px 0px;" class="text-center">
        <div class="footer-above">
        <h2>بيانات الإتصال </h2>

            <div class="container">
                <div class="row">
                    <div class="footer-col col-lg-4">
                        <img class="col-lg-12" src="public/dist/img/fastfixlogo.png"
                        />
                        <p>
                        نحن افضل شركة تصليح غسالات في الكويت نقوم بصيانة جميع أنواع الأعطال في الغسالات الأوتوماتيكية والنشافات و العادية بجودة وخبرة عالية وتأكد انك ستكون راضِ جداً عن الخدمة التي سنقدمها لك، فريقنا يعمل في جميع الأنحاء طوال أيام الإسبوع لـ تصليح غسالات الكويت


                        </p>
                    </div>
                    
                    <div class="footer-col col-lg-4">
                        <ul class="list-inline">
                        <p>يسعدنا تواصلكم معنا عبر جميع قنوات الإتصال </p>

                            <li>
                            
                                <a href="tel://+96560981569" class="btn-social btn-outline" alt="My Phone number" 
                                title="+96560981569">
                                    <i class="fa fa-fw fa-phone" aria-hidden="true"></i>
                                    <span class="sr-only"> رقم الجوال اتصل بنا الآن </span>
                                </a>
                            </li>
                            <li>
                                <a href="fastfixco2022@gmail.com" class="btn-social btn-outline" alt="My E-mail ID" 
                                title="My E-mail ID">
                                    <i class="fa fa-fw fa-envelope" aria-hidden="true"></i>
                                    <span class="sr-only">البريد الإلكتروني</span>
                                </a>
                            </li>
                    
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100083000423314" target="_blank" class="btn-social btn-outline" alt="Behance" title="Behance">
                                <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=96560981569?&text=%D8%A7%D9%84%D8%B3%D9%84%D8%A7%D9%85%20%D8%B9%D9%84%D9%8A%D9%83%D9%85%20%D8%A7%D8%AD%D8%AA%D8%A7%D8%AC%20%D8%A7%D9%84%D9%8A%20%D9%81%D9%86%D9%8A%20%D8%B5%D9%8A%D8%A7%D9%86%D8%A9" target="_blank" class="btn-social btn-outline" alt="Codepen" title="Codepen">
                                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                                    <span class="sr-only">Whatsapp</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/washer_dryer_tecnation_q8/" target="_blank" class="btn-social btn-outline" 
                                alt="instagram" title="instagram">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                            </li>
                        </ul>
                </div>
                <div class="footer-col col-lg-4">
                    <ul class="list-inline">
                            <li>
                            <a class="fanchor" href="#myLike">الرئيسية</a>

                            </li>
                            <li>
                            <a class="fanchor" href="#myLikes">عن فاست فيكس</a>

                            </li>
                            <li>
                            <a class="fanchor" href="#myLikes">اتصل بنا </a>

                            </li>
                            <li>
                            <a class="fanchor" href="#myLikes">الصور </a>

                            </li>
                            <li>
                            <a class="fanchor" href="#myLikes">الفيديوهات </a>

                            </li>
                                      <li>
                            <a class="fanchor" href="#myLikes">المدونة </a>

                            </li>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    تمت البرمجة بواسطة  <a href="https://www.mmoneim.com" target="_blank">mmoneim.com</a>
                        <br>
                        حقوق النشر محفوظة &copy; Fast-fiix.com 2023
                    </div>
                </div>
            </div>
        </div>
    </footer>
