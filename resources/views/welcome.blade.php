<!DOCTYPE html>
<html>
  <head>
    <title>Foo Books Fall 2016</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="/../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/../css/style.css" rel="stylesheet" media="screen">
	<link href="/../color/default.css" rel="stylesheet" media="screen">
	<script src="/../js/modernizr.custom.js"></script>
      </head>
  <body>
	<div class="menu-area">
			<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">

                    <a class="btn btn-default btn-block" data-toggle="modal" data-target="#myBio">My Bio</a>
                    <a class="btn btn-default btn-block" data-toggle="modal" data-target="#myProjects">My Projects</a>
                    <a class="btn btn-default btn-block" data-toggle="modal" data-target="#screencast1">Screan cast 1</a>
                    <a class="btn btn-default btn-block" data-toggle="modal" data-target="#screencast2">Screan cast 2</a>
            </ul>

					</div><!-- /dl-menuwrapper -->
	</div>

	  <!-- intro area -->
	  <div id="intro">

			<div class="intro-text">
				<div class="container">
          <div class="row">
            <div class="brand">
                  <h1><a data-toggle="modal" href="#myProjects">Foo Books</a></h1>
                  <div class="site-slogan">Dynamic Web Applications Fall 2016 </div>

                  <div class="line-spacer"></div>
            </div>
        </div>
					<div class="row">
					       <div class="col-md-12">
                    <div id ="ggg" class = "img-responsive center-block"></div>
                  </div>
          </div>

					</div>
				</div>
		 	</div>

	 </div>

       <!-- Modal -->
       <div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
              <div class="modal-header" style="background:#529abb;">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
               <h4 class="modal-title" id="project-1-label">Project Title</h4>
             </div>
             <div class="modal-body">
               <h3>Project Description</h3>
               <div class="row">
                 <div class="col-md-6">
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                   <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                 </div>
                 <div class="col-md-6">
                   <img src="images/portfolio-1.jpg" alt="">
                 </div>
               </div>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
             </div>
           </div>
         </div>
       </div>
       <!-- Modal end -->
       <!-- Modal -->
       <div class="modal fade" id="myBio" tabindex="-1" role="dialog" aria-labelledby="myBio-label" aria-hidden="true">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <div class="modal-header" style="background:#529abb;">
               <button style="color:#ffffff;" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
               <h4 class="modal-title" id="myBio-label" style="color:#fff;">Bio</h4>
             </div>
             <div class="modal-body">
               <h3>Benjamin Jerome</h3>
               <div class="row">
                 <div class="col-md-6 text-left">

                   <ul>

                     <li>
                        <strong><p> What is your name as listed with HES and what you prefer to be called (if different than what is listed)?</p></strong>
                        <em>My name is Benjamin Jerome. Most people call me Ben.</em>
                        <hr>
                    </li>
                    <li>
                        <strong><p>What do you do?</p></strong>
                        <em>I am currently working at Santander Bank as an automation test engineer.</em>
                        <hr>
                   </li>
                  <li>
                    <strong><p>Why are you taking this course?</p></strong>
                    <em>I have always been fascinated by web technologies and the creativity in it. I finally decided to give it a try.</em>
                    <hr>
                 </li>
                 <li>
                      <strong><p>Why are you taking this course?</p></strong>
                      <em>I just want to learn more about the backend in web development.</em>
                      <hr>
                </li>
                   </ul>
                </div>
                <div class="row">
                 <div class="col-md-6">
                   <img src="{{URL::asset('img/me.jpg')}}" alt="" class ="img-responsive center-block">
                 </div>
               </div>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
             </div>
           </div>
         </div>
       </div>
       <!-- Modal end -->
     </div>
     <!-- Modal -->
     <div class="modal fade" id="screencast1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
       <div class="modal-dialog modal-lg">
         <div class="modal-content">
          <div class="modal-header" style="background:#529abb;">
             <button style="color:#ffffff;" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
             <h4 style="color:#ffffff;" class="modal-title" id="project-2-label">Screencast P1</h4>
           </div>
           <div class="row">
           <div class="modal-body align-modal-body-center">
               <div>
                 <iframe width="100%" height="550" src="https://www.youtube.com/embed/eOSxzM8-IpY" frameborder="0" allowfullscreen></iframe>
               </div>
          </div>
        </div>
         </div>
       </div>
     </div>
     <!-- Modal end -->
     <!-- Modal -->
     <div class="modal fade" id="screencast2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
       <div class="modal-dialog modal-lg">
         <div class="modal-content">
          <div class="modal-header" style="background:#529abb;">
             <button style="color:#ffffff;" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
             <h4 style="color:#ffffff;" class="modal-title" id="project-2-label">Screencast P2</h4>
           </div>
           <div class="row">
           <div class="modal-body align-modal-body-center">
               <div>
                 <iframe width="100%" height="550" src="https://www.youtube.com/embed/VU3s0dedXh8" frameborder="0" allowfullscreen></iframe>
               </div>
          </div>
        </div>
         </div>
       </div>
     </div>
     <!-- Modal end -->

       <!-- Modal -->
       <div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <div class="modal-header" style="background:#529abb;">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
               <h4 class="modal-title" id="project-2-label">Project Title</h4>
             </div>
             <div class="modal-body">
               <h3>Project Description</h3>
               <div class="row">
                 <div class="col-md-6">
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                   <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                 </div>
                 <div class="col-md-6">
                   <img src="images/portfolio-2.jpg" alt="">
                 </div>
               </div>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
             </div>
           </div>
         </div>
       </div>
       <!-- Modal end -->
     </div>

       <!-- Modal -->
       <div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
              <div class="modal-header" style="background:#529abb;">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
               <h4 class="modal-title" id="project-3-label">Project Title</h4>
             </div>
             <div class="modal-body">
               <h3>Project Description</h3>
               <div class="row">
                 <div class="col-md-6">
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                   <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                 </div>
                 <div class="col-md-6">
                   <img src="images/portfolio-3.jpg" alt="">
                 </div>
               </div>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
             </div>
           </div>
         </div>
       </div>
       <!-- Modal end -->

<div id="myProjects" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	      <div class="modal-header" style="background:#529abb;">
		       <button style="color:#ffffff;" type="button" class="close" data-dismiss="modal">×</button>
		         <h3 style="color:#ffffff;" class="modal-title">My Projects</h3>
        </div>

  <div class="modal-body container-fluid">

        <div class="image-box col-md-4">
          <div class="overlay-container">
            <img src="img/works/portfolio-4.jpg" alt="" class="img-responsive center-block">
            <a class="overlay" data-toggle="modal" data-target="#project-2"></a>
          </div>

          <a class="btn btn-default btn-block" href="http://p2.cs15class.online">xkcd style password</a>
            <a class="btn btn-primary btn-block" href="https://github.com/creolben/project-2">Git Hub</a>
        </div>

        <div class="image-box col-md-4">
          <div class="overlay-container">
            <img src="img/works/portfolio-2.jpg" alt="" class="img-responsive center-block">
            <a class="overlay" data-toggle="modal" data-target="#project-2"></a>
          </div>
          <a class="btn btn-default btn-block" data-toggle="modal" data-target="#">Laravel Basics</a>
          <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#">Git Hub</a>
        </div>
        <div class="image-box col-md-4">
          <div class="overlay-container">
            <img src="img/works/portfolio-3.jpg" alt="" class="img-responsive center-block">
            <a class="overlay" data-toggle="modal" data-target="#project-2"></a>
          </div>
          <a class="btn btn-default btn-block" data-toggle="modal" data-target="#">Project 4</a>
            <a class="btn btn-warning btn-block" data-toggle="modal" data-target="#">Git Hub</a>
        </div>

   </div>
  </div>
</div>
</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy;2014 Ben Jerome. All rights reserved.</p>
				</div>
                <!--
                    All links in the footer should remain intact.
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Mamba
                -->
			</div>
		</div>
	</footer>

	 <!-- js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>

</html>
