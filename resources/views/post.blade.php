@extends('templates.main')

@section('content')
<!-- Header  -->
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

                  <div class="content section single-post-page" id="content">
                     <div class="post-outer">
                        <div class="post hentry uncustomized-post-template">
                           <h1 class="the-main-title single-post-title">{{$post->title}}</h1>
                           <div class="post-meta">
                              <div class="small">Posted by <a href="" rel="author" title="Posts bySora Templates">{{$post->user->username}}</a> in
                                 <span class="post-categories">
                                 <a href="" rel="tag">{{$post->label->label}}</a>,
                                 </span>
                              </div>
                           </div>
                           <div class="post-body">
                              <a href="images/main01.jpg" class="main-image"><img src="images/main01.jpg"></a>

                              <p>
                                 Id mea dolorum lobortis, vix eu quas officiis. Cu quod ludus disputando vix. Vero nihil ullamcorper in nec. Sed everti voluptatum ad, tantas audiam tractatos at duo. Mel inani option sadipscing ea, senserit ocurreret disputationi has ne.<br><br>Ad vel cetero iuvaret incorrupte, no alia fierent eam. Te altera deserunt oportere cum, facer movet quaestio eum ad. Commodo omittam copiosae id nec, odio iusto expetendis vim ea. Eu per nisl dicunt lobortis, eam ut suas noluisse. Agam ancillae ne has, ea quo dolorum fierent. Eu dolor ignota has, cu sed sint iuvaret qualisque. Ex qui tantas albucius, tation antiopam cum at.
                              </p>

                           </div>
                           <div id="related-posts">
                              <h5>Related Posts</h5>
                              <ul>
                                 <li>
                                    <a href="" title="Make your personal website" rel="nofollow"><img alt="Make your personal website" src="images/related01.jpg"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Make your personal website</a>
                                 </li>
                                 <li>
                                    <a href="" title="Commodo omittam copiosae " rel="nofollow"><img alt="Commodo omittam copiosae " src="images/related02.jpg"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Commodo omittam copiosae </a>
                                 </li>
                                 <li>
                                    <a href="" title="Mea labores feugait temporibus" rel="nofollow"><img alt="Mea labores feugait temporibus" src="images/related03.jpg"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Mea labores feugait temporibus</a>
                                 </li>
                              </ul>
                           </div>
                        </div>

                        <div class="comments" id="comments">
                           <h4>{{count($post->comment)}} comments:</h4>
                           <div class="comments-content">
                              <ol>

                                @foreach($post->comment as $comment)
                                 <li class="comment">
                                    <div class="avatar-image-container"><img src="images/avatar01.png"></div>
                                    <div  class="comment-block">
                                       <div class="comment-header">
                                          <cite class="user"><a  href="">{{$post->user->username}}</a></cite>
                                          <span class="icon user"></span>
                                          <span class="datetime secondary-text">
                                          <a rel="nofollow" href="">{{$post->created_at->format('Y-m-d')}}</a></span>
                                       </div>
                                       <p class="comment-content">{{$comment->content}}</p>
                                       <div class="comment-actions">
                                          <a class="pure-button pure-button-primary">Reply</a>
                                          <a class="pure-button pure-button-primary" href="">Delete</a>
                                       </div>
                                    </div>
                                 </li>
                                 @endforeach

                              </ol>
                              <h4><a href="">Add comment</a></h4>
                              <div class="comment-replybox-thread">
                                 <form class="pure-form pure-form-stacked">
                                    <fieldset>
                                      <label for="comment">Comment</label>
                                      <textarea id="comment" class="pure-input-1" placeholder=""></textarea>
                                      <button type="submit" class="pure-button pure-button-primary">Publish</button>
                                    </fieldset>
                              </form>
                              </div>

                           </div>
                        </div>
                        <div class="clr"></div>
                     </div>
                     <div class="blog-pager" id="blog-pager">
                        <span id="blog-pager-newer-link">
                        <a class="blog-pager-newer-link" href="" id="Blog1_blog-pager-newer-link" title="Newer Post">← Prev</a>
                        </span>
                        <span id="blog-pager-older-link">
                        <a class="blog-pager-older-link" href="" id="Blog1_blog-pager-older-link" title="Older Post">Next →</a>
                        </span>
                     </div>                  </div>
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


         <!-- page footer credits-->
         <div class="footer-credits">
            <div class="ct-wrapper">
               <p>
                  © Copyright 2015
                  <a href="images//Klarity.html">Klarity</a>
                  <br>
                  <span></span>
               </p>
               <div id="mycontent">Created By <a href="http://www.soratemplates.com/" rel="dofollow" target="_blank" title="Blogger Templates">Sora Templates</a> and <a href="http://mybloggerthemes.com/" rel="dofollow" target="_blank" title="Blogger Templates">My Blogger Themes</a></div>
               <p></p>
            </div>
         </div>
         <!-- end of page footer credits -->

@stop
