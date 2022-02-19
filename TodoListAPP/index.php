<!DOCTYPE html>
<html lang='en'>

<head>
    <link rel='stylesheet' href="Style/index.css" />
    <link rel='stylesheet' href='./static/Style_depend/bootstrap.min.css' />
    <link rel='stylesheet' href='./static/Style_depend/fontawesone.css' />
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />

    <title>Welcome ! </title>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <i class="fas fa-tasks col-2 px-2 "><b> My</b> Todo's </i>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> article</a>
                </li>

                <li class="nav-item mt-2 ml-3" id="toggleMode">
                    <b class="toggleText"> dark Mode </b> <i class="fas fa-toggle-off  ml-1 col-1" onclick="toggleModeOn()"></i>

                </li>
            </ul> <a href="authentication.php" class="mr-3"> <button type="button" id='create' class="px-3 btn btn-outline-dark">
                    Create Account</button>
            </a>
            <a href="authentication.php" class="mr-3"> <button type="button" class="px-3 btn btn-dark">
                    login</button>
            </a>
        </div>
    </nav>





    <div class="container1 ">

        <div class="containerMainText mt-3 ml-4">
            <i class="fas fa-quote-left"></i>
            <p class="display-4"> let's Re<i class="text-danger">O</i>rganize ourselves!
            </p>
            <i class="fas fa-quote-right"></i>
        </div>
        <div class=" imgContainer ">
            <picture>
                <source media="(max-width:799px )" srcset="media/mobile3.PNG">

                <img src="media/mainWebsite.PNG" alt="not showing" srcset="">
            </picture>
        </div>

    </div>
    <div class="container2 text-center">
        <div>
            <h4 class="text-dark display-4">
                <p> Through <code>#3</code> Simple acts:</p>

                <p class="h3">Add <i class="fas fa-plus "></i> </p>
                <p class="h2">check <i class="fas fa-check "></i></p>
                <p class="h1">Repeat <i class="fas fa-redo"></i></p>
            </h4>

            <div class="containerImgProductivity">
                <h5 class="mt-5"> <br> Maximize your <b class='text-success'> Efficiency </b> !</h5>
                <svg id="svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 496 496" width="80%" height="240px" style="enable-background:new 0 0 496 496;" xml:space="preserve">
                    <g>
                        <g>
                            <g>
                                <path d="M480,296v-8h-40c-9.04,0-17.296,3.128-24,8.208V240h24c22.056,0,40-17.944,40-40v-8h-40c-9.04,0-17.296,3.128-24,8.208
				V144h24c22.056,0,40-17.944,40-40v-8h-40c-9.04,0-17.296,3.128-24,8.208V60.28l11.16-7.44c8.04-5.36,12.84-14.336,12.84-24
				C440,12.936,427.064,0,411.16,0h-6.312C388.936,0,376,12.936,376,28.84c0,9.664,4.8,18.632,12.84,24L400,60.28v43.928
				C393.296,99.128,385.04,96,376,96h-40v8c0,22.056,17.944,40,40,40h24v56.208c-6.704-5.08-14.96-8.208-24-8.208h-40v8
				c0,22.056,17.944,40,40,40h24v56.208c-6.704-5.08-14.96-8.208-24-8.208h-40v8c0,22.056,17.944,40,40,40h24v144H256v-96h24
				c22.056,0,40-17.944,40-40v-8h-40c-9.04,0-17.296,3.128-24,8.208V288h24c22.056,0,40-17.944,40-40v-8h-40
				c-9.04,0-17.296,3.128-24,8.208V192h24c22.056,0,40-17.944,40-40v-8h-40c-13.128,0-24.704,6.448-32,16.248
				c-7.296-9.8-18.872-16.248-32-16.248h-40v8c0,22.056,17.944,40,40,40h24v56.208c-6.704-5.08-14.96-8.208-24-8.208h-40v8
				c0,22.056,17.944,40,40,40h24v56.208c-6.704-5.08-14.96-8.208-24-8.208h-40v8c0,22.056,17.944,40,40,40h24v96H96v-48h24
				c22.056,0,40-17.944,40-40v-8h-40c-9.04,0-17.296,3.128-24,8.208V336h24c22.056,0,40-17.944,40-40v-8h-40
				c-13.128,0-24.704,6.448-32,16.248C80.704,294.448,69.128,288,56,288H16v8c0,22.056,17.944,40,40,40h24v56.208
				C73.296,387.128,65.04,384,56,384H16v8c0,22.056,17.944,40,40,40h24v48H0v16h464v-16h-48V336h24C462.056,336,480,318.056,480,296
				z M440,208h22.632c-3.304,9.312-12.2,16-22.632,16h-22.632C420.672,214.688,429.568,208,440,208z M440,112h22.632
				c-3.304,9.312-12.2,16-22.632,16h-22.632C420.672,118.688,429.568,112,440,112z M376,128c-10.432,0-19.328-6.688-22.632-16H376
				c10.432,0,19.328,6.688,22.632,16H376z M376,224c-10.432,0-19.328-6.688-22.632-16H376c10.432,0,19.328,6.688,22.632,16H376z
				 M376,320c-10.432,0-19.328-6.688-22.632-16H376c10.432,0,19.328,6.688,22.632,16H376z M280,352h22.632
				c-3.304,9.312-12.2,16-22.632,16h-22.632C260.672,358.688,269.568,352,280,352z M280,256h22.632c-3.304,9.312-12.2,16-22.632,16
				h-22.632C260.672,262.688,269.568,256,280,256z M280,160h22.632c-3.304,9.312-12.2,16-22.632,16h-22.632
				C260.672,166.688,269.568,160,280,160z M216,176c-10.432,0-19.328-6.688-22.632-16H216c10.432,0,19.328,6.688,22.632,16H216z
				 M216,272c-10.432,0-19.328-6.688-22.632-16H216c10.432,0,19.328,6.688,22.632,16H216z M216,368
				c-10.432,0-19.328-6.688-22.632-16H216c10.432,0,19.328,6.688,22.632,16H216z M120,400h22.632c-3.304,9.312-12.2,16-22.632,16
				H97.368C100.672,406.688,109.568,400,120,400z M120,304h22.632c-3.304,9.312-12.2,16-22.632,16H97.368
				C100.672,310.688,109.568,304,120,304z M56,320c-10.432,0-19.328-6.688-22.632-16H56c10.432,0,19.328,6.688,22.632,16H56z
				 M56,416c-10.432,0-19.328-6.688-22.632-16H56c10.432,0,19.328,6.688,22.632,16H56z M408,46.384l-10.28-6.856
				c-3.584-2.384-5.72-6.376-5.72-10.688c0-7.08,5.76-12.84,12.84-12.84h6.312C418.24,16,424,21.76,424,28.84
				c0,4.304-2.136,8.304-5.72,10.688L408,46.384z M440,320h-22.632c3.304-9.312,12.2-16,22.632-16h22.632
				C459.328,313.312,450.432,320,440,320z" />
                                <rect x="480" y="480" width="16" height="16" />
                                <rect x="48" y="448" width="16" height="16" />
                                <rect x="112" y="448" width="16" height="16" />
                                <rect x="208" y="448" width="16" height="16" />
                                <rect x="272" y="448" width="16" height="16" />
                                <rect x="368" y="448" width="16" height="16" />
                                <rect x="432" y="448" width="16" height="16" />
                            </g>
                        </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                </svg>

            </div>
        </div>
    </div>



    <div class="container3">
        <div class="container">
            <p class="display-3"> Hold On!</p>
            <p>do you have an account? Create one Now!</p>
            <a href="authentication.php" class="mr-3"> <button type="button" id="create" class="px-3 btn btn-outline-dark">
                    Create Account</button>
            </a>
            <a href="authentication.php" class="mr-3"> <button type="button" class="px-3 btn btn-dark">
                    login</button>
            </a>

        </div>
    </div>








    <footer>
        <div class="containerFooter ">

            <div class="socialMedia mt-5">
                <div class="container">
                    Join me!
                    <a href="https://github.com/oncelearner" target="_blank"><i class="fab fa-github text-light mt-4 ml-4"></i></a>
                    <a href="https://twitter.com/redaamir972" target="_blank"><i class="fab fa-twitter text-light ml-2"></i></a>
                </div>

            </div>
            <span class="copy">
                <span class="copyright">©</span>
                Elissati © 2020
            </span>


        </div>
    </footer>

















    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'>
    </script>
    <script src='./signup.js'> </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'>
    </script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'>
    </script>

    <script>
        const toggleModeOn = () => {
            $("#toggleMode").html(
                " <b class='toggleText'> dark Mode </b> <i class='fas fa-toggle-on ml-1 col-2 ' onclick='toggleModeOff()'><i/>"
            );
            $(document.body).css('background-color', '#343a40')
            $(document.body).css('color', 'white');
            $("h4").attr('class', 'display-4');
            $("h4").css('color', 'white');
            $(".containerFooter").css('background-color', 'rgb(123, 140, 245)')
            $("#toggleMode").css('color', 'white')
            $('nav').attr('class', "navbar navbar-expand-lg navbar-light bg-dark")
            $('button').css('color', 'white')



        }
        const toggleModeOff = () => {
            $("#toggleMode").html(
                " <b class='toggleText'> dark Mode </b> <i class='fas fa-toggle-off ml-1 col-2 ' onclick='toggleModeOn()'><i/>"
            );
            $(document.body).css('background-color', 'white')
            $(document.body).css('color', '#343a40 ');
            $("#toggleMode").css('color', '#343a40')
            $("h4").attr('class', 'display-4 ');
            $("h4").css('color', '#343a40');
            $(".containerFooter").css('background-color', '343a40')
            $('nav').attr('class', "navbar navbar-expand-lg navbar-light bg-light")
            $('#create').css('color', 'initial')
            $('#create').attr('class', 'px-3 btn btn-outline-dark')


        }
    </script>




</body>

</html>