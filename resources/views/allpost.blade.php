@extends('templates.main')

@section('content')
<div class="header-wrapper white">
   <div class="ct-wrapper">
      <div class="header section" id="header">
         <div id="header-inner">
            <div class="titlewrapper">
               <h1 class="title">
                  <a href="">Klarity</a>
               </h1>
            </div>
            <div class="descriptionwrapper">
               <p class="description"><span>Fashion Book</span></p>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clr"></div>


<!-- Main Menu -->
<div class="nav-menu white">
   <div class="ct-wrapper">
      <ul>
         <li><a href=""><i class="fa fa-home"></i> Home</a></li>
         <li><a href=""><i class="fa fa-pencil"></i> Blog</a></li>
         <li><a href=""><i class="fa fa-briefcase"></i></span> Portfolio</a></li>
         <li><a href=""><i class="fa fa-bolt"></i></span> Pages</a></li>
         <li><a href=""><i class="fa fa-user"></i></span> About</a></li>
      </ul>
   </div>
   <div class="clr"></div>
</div>


<!-- Main section -->
<div class="ct-wrapper page-wrapper">
   <div class="outer-wrapper">
      <div class="main-wrapper">

         <div class="content section" id="content">

            <div class="blog-posts hfeed">

               <!-- Individual post -->
               @foreach($posts as $post)

               <div class="post hentry">
                  <div class="post-wrapper left col1">
                     <div class="post-info">
                        <div class="date">
                           <span class="month">{{$post->created_at->format('M')}}</span>
                           <span class="day">{{$post->created_at->day}}</span>
                           <span class="year">{{$post->created_at->year}}</span>
                        </div>
                        <a class="comment-number" href="">
                        <span class="comment-num">1</span>
                        <span>Comments</span>
                        </a>
                     </div>
                  </div>
                  <div class="post-wrapper right col2">
                     <div class="post-body">
                        <div class="featimg left" style="position:relative;">
                           <div class="item-label">
                              <span><a href="label/Minimal" rel="tag">Minimal</a></span>
                           </div>
                           <div class="item-thumb entry-image" style="position:relative;">
                              <a href="">
                                 <img src="{{asset('images/'.$post->picture)}}" style="max-width:100%;" alt="Commodo omittam copiosae ">
                              </a>
                           </div>
                           <div class="entry-feat-overlay">
                           </div>
                        </div>
                        <div class="clr"></div>
                        <div class="post-meta">
                           <div class="small">Posted by <a href="" rel="author">{{$post->user->username}}</a> in
                              <span class="post-categories">
                              <a href="Minimal" rel="tag">Minimal</a>,
                              <a href="Photography" rel="tag">Photography</a>,
                              <a href="Taste" rel="tag">Taste</a>,
                              <a href="Web%20design" rel="tag">Web design</a>
                              </span>
                           </div>
                        </div>
                        <div class="post-title">
                           <h2><a href="{{url('posts/'.$post->id)}}">{{$post->title}}</a></h2>
                        </div>
                        <div class="item-content">
                           <p style="margin:0;">
                              {{$post->content}}
                           </p>
                        </div>
                     </div>
                  </div>
               </div>

               @endforeach

            </div>
            <div class="blog-pager" id="blog-pager">
               <span id="blog-pager-newer-link">
               <a class="blog-pager-newer-link" href="" id="Blog1_blog-pager-newer-link" title="Newer Post">? Prev</a>
               </span>
               <span id="blog-pager-older-link">
               <a class="blog-pager-older-link" href="" id="Blog1_blog-pager-older-link" title="Older Post">Next ?</a>
               </span>
            </div>
         </div>
      </div>

      <div class="sidebar-wrapper">
         <div class="sidebar section" id="sidebar">
            <div class="widget">
              <form class="pure-form search-form">

       <input type="text" placeholder="">
       <button class="pure-button pure-button-primary"><i class="fa fa-search"></i></button>

   </form>
           </div>                     <div class="widget PopularPosts popular-posts">
             <h2>Most Trending</h2>
             <ul class="widget-content">
                 <li>
                    <div class="item-content">
                       <div class="item-thumbnail">
                          <a href="" target="_blank">
                          <img alt="" border="0" src="images/trending01.jpg" width="120" height="120">
                          </a>
                       </div>
                       <div class="item-title"><a href="">Vibrant Combination of Colors and Nymh</a></div>
                    </div>
                    <div style="clear: both;"></div>
                 </li>
                 <li>
                    <div class="item-content">
                       <div class="item-thumbnail">
                          <a href="" target="_blank">
                          <img alt="" border="0" src="images/trending02.jpg" width="120" height="120">
                          </a>
                       </div>
                       <div class="item-title"><a href="">Play around</a></div>
                    </div>
                    <div style="clear: both;"></div>
                 </li>
                 <li>
                    <div class="item-content">
                       <div class="item-thumbnail">
                          <a href="" target="_blank">
                          <img alt="" border="0" src="images/trending03.jpeg" width="120" height="120">
                          </a>
                       </div>
                       <div class="item-title"><a href="">Make up before party</a></div>
                    </div>
                    <div style="clear: both;"></div>
                 </li>
             </ul>
           </div>                     <div class="widget Label">
               <h2>Labels</h2>

              <ul class="widget-content">
                 <li>
                    <a dir="ltr" href="">CV</a>
                 </li>
                 <li>
                    <a dir="ltr" href="">D.I.Y.</a>
                 </li>
                 <li>
                    <a dir="ltr" href="">Fashion</a>
                 </li>
                 <li>
                    <a dir="ltr" href="">Flat Design</a>
                 </li>
                 <li>
                    <a dir="ltr" href="">Flat Template</a>
                 </li>
                 <li>
                    <a dir="ltr" href="">Klarity</a>
                 </li>
                 <li>
                    <a dir="ltr" href="">Minimal</a>
                 </li>
                 <li>
                    <a dir="ltr" href="">Photography</a>
                 </li>
                 <li>
                    <a dir="ltr" href="">Taste</a>
                 </li>
                 <li>
                    <a dir="ltr" href="">Theme</a>
                 </li>
                 <li>
                    <a dir="ltr" href="">Vibrant</a>
                 </li>
                 <li>
                    <a dir="ltr" href="">Web design</a>
                 </li>
                 <li>
                    <a dir="ltr" href="">Work</a>
                 </li>
              </ul>
           </div>                  </div>
      </div>

      <div class="clr"></div>
   </div>
</div>


<!-- Footer section -->
<div id="footer">
   <div class="ct-wrapper">
      <div class="footer section" id="footer1">
      <div class="widget HTML">
           <h2 class="title">About</h2>
           <div class="widget-content">
               Lorem Ipsum Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
           </div>

       </div>               </div>
      <div class="footer section" id="footer2">
      <div class="widget HTML" >
           <h2 class="title">Portfolios</h2>
           <div class="widget-content">
               <div id="portfolios">
                   <a href=""><img src="images/item01.jpg" alt="Item 01"></a>
                   <a href=""><img src="images/item02.jpg" alt="Item 02"></a>
                   <a href=""><img src="images/item03.jpg" alt="Item 03"></a>
                   <a href=""><img src="images/item04.jpg" alt="Item 04"></a>
                   <a href=""><img src="images/item05.jpg" alt="Item 05"></a>
                   <a href=""><img src="images/item06.jpg" alt="Item 06"></a>
                   <a href=""><img src="images/item07.jpg" alt="Item 07"></a>
                   <a href=""><img src="images/item08.jpg" alt="Item 08"></a>
               </div>
           </div>

       </div>               </div>
      <div class="footer section" id="footer3">
      <div class="widget ContactForm">
            <h2 class="title">Contact Form</h2>
            <div class="contact-form-widget">
               <form class="pure-form pure-form-stacked">
       <fieldset>
           <label for="name">Name</label>
           <input id="name" class="pure-input-1" type="text" placeholder="name">

           <label for="email">Email</label>
           <input id="email" class="pure-input-1" type="email" placeholder="Email">

           <label for="message">Message</label>
           <textarea id="message" class="pure-input-1" type="message" placeholder=""></textarea>


           <button type="submit" class="pure-button pure-button-primary">Sign in</button>
       </fieldset>
   </form>
            </div>
       </div>               </div>
      <div class="clr"></div>
   </div>
</div>
@stop
