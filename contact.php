<?php
session_start(); 
require('connection.php');
extract($_POST);
	if(isset($submit))
		{
			//check user alereay exists or not
			$sql=mysqli_query($conn,"select * from contact_u where Email='$e'");
			$r=mysqli_num_rows($sql);
		if($r==true)
			{
				$err= "<font color='red'>This user already exists</font>";
			}
		else
			{
				//first_name
				$Name=$n;

				
				//confirm your password
				$Message=$mes;
				
				//$teacherid='';

				$query="insert into contact_u values('','$n','$e','$mes')";
					
				mysqli_query($conn,$query);	
				 
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    </head>
    <body background="">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <header class="text-gray-700 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <img src="logo.jpeg"  height="60" width="70"> <br><p>NPSS Software & Tech</p>
              </a>
              <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                <a href="index.html" class="mr-5 hover:text-gray-900">Home</a>
                <a href="services.html" class="mr-5 hover:text-gray-900">Services</a>
                <a href="about.html" class="mr-5 hover:text-gray-900">About Us</a>
                <a href="contact.html" class="mr-5 hover:text-gray-900">Contact Us</a>
              </nav>
              
            </div>
          </header>
          <hr>

          <section class="text-gray-700 body-font relative">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Feel Free To Write Us!.</p>
              </div>
              <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                  <div class="p-2 w-1/2">
				  <form action="" method="post">
			
                    <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" type="text" name="n" id="name" tabindex="1" class="form-control"  onkeyup = "Validate(this)" placeholder="Name" value="">
                  </div>
                  <div class="p-2 w-1/2">
                    <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" type="email" name="e" id="email" tabindex="2" class="form-control" placeholder="Email " value="">
                  </div>
                  <div class="p-2 w-full">
                    <textarea class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block" type="text" name="mes" id="message" tabindex="1" class="form-control"  onkeyup = "Validate(this)" placeholder="Message" value=""></textarea>
                  </div>
                  <div class="p-2 w-full">
                    <button  class="btn btn-success btn-sm"  name="submit" type="submit" value="submit" onclick="myFunction()">
                                Submit</button>
								
					<script>
						function myFunction() {
						alert("Thank you for Your Feedback, We will get back to you shortly!");
						}
						</script>

                  </div>
                  
                </div>
              </div>
            </div>
          </section>  

          <hr>
          <footer class="text-gray-700 body-font">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-wrap md:text-left text-center order-first">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                  <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Quick Links</h2>
                  <nav class="list-none mb-10">
                    <li>
                      <a href="index.html"text-gray-600 hover:text-gray-800">Home</a>
                    </li>
                    <li>
                      <a href="services.html"text-gray-600 hover:text-gray-800">Services</a>
                    </li>
                    <li>
                      <a href="#"class="text-gray-600 hover:text-gray-800">About Us</a>
                    </li>
                    <li>
                      <a href="contact.php"text-gray-600 hover:text-gray-800">Contact Us</a>
                    </li>
                  </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Contact with Us!</h2>
                    <nav class="list-none mb-10">
                    <li>
                      <text-gray-600 hover:text-gray-800">NPSS Software & Tech
                    </li>
                    <li>
                      <text-gray-600 hover:text-gray-800">Email : npsssoftwareandtech@gmail.com
                    </li>
                    <li>
                      <class="text-gray-600 hover:text-gray-800">Mobile : +91 95451 77414
                    </li>
                    <li>
                      <text-gray-600 hover:text-gray-800">WhatsApp : +91 95451 77414
                    </li>
                  </nav>
                </div>
              </div>
            </div>
            <div class="bg-gray-200">
              <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                  <span class="ml-3 text-xl">
                      <img src="logo.jpeg"  height="60" width="70"> <br><p></p>
                  </span>
                </a>
                <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2020 NPSS —
                  <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@NPSS Software & Tech</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                  <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                      <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                      <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                  </a>
                </span>
              </div>
            </div>
          </footer>