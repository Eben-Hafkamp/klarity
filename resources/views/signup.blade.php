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

                  <div class="content section form-page">

                     <div class="main-heading">
                        <h2>Sign Up</h2>
                     </div>

                      {!! Form::open(['url' => 'users']) !!}
                        {!! Form::label('username', 'Username') !!}
                        {!! Form::text('username') !!}
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email') !!}
                        {!! $errors->first('username', '<p class="error">:message</p>') !!}
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password') !!}
                        {!! $errors->first('password', '<p class="error">:message</p>') !!}
                        {!! Form::submit('Submit', ['class' => 'pure-button']) !!}
                      {!! Form::close() !!}

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
