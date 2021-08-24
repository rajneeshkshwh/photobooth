<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photobooth</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="index.css" type="text/css">
</head>

<body>
    <div class="">
        <div class="row">
            <div class="col-lg-2 col-xl-2 col-md-2 col-sm-2 col-xs-0"></div>
            <div class="col-lg-8 col-xl-8 col-md-8 col-sm-8 col-xs-12 row">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="d-flex flex-row justify-content-around">
                        <div id="hit">
                            <video id="video" class="image1" playsinline autoplay></video>
                            <canvas id="canvas" class="image2" width="640" height="480"></canvas>
                             <img src="frames/frame-0.png" id="fg" /> 
                        </div>
                    </div>
                    
                </div>
                <div id="buttons" class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12 buttons d-flex flex-row justify-content-around">
                        
                        <button id="snap" class="align-middle capturebutton">Capture</button>
                        <button id="snaps" class="align-middle capturebutton">Retake</button>
                            <button id="snapss" class="align-middle capturebutton" type="submit">Next</button>
                        <input type="text" id="email" name="firstname" placeholder="Enter Your Mail" class="btn-block">
                        <button id="emailbutton" class="align-middle capturebutton">Send</button>
                        <div class="loader" id="loader" style="display: none"></div>      
                        <a id="downimage" download href="" style="display:none;"><button id="downloadimage" class="align-middle capturebutton">Download</button></a>
                    
                </div>
                <div id="designs" class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12 designs d-flex flex-row justify-content-center">
                    <img class="design active col-lg-4 col-xl-4 col-md-4 col-sm-4 col-xs-4" id="design1" src="frames/frame-0.png"/>
                    <img class="design col-lg-4 col-xl-4 col-md-4 col-sm-4 col-xs-4" id="design2" src="frames/frame-1.png"/>
                    <img class="design col-lg-4 col-xl-4 col-md-4 col-sm-4 col-xs-4" id="design3" src="frames/frame-2.png"/>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 col-md-2 col-sm-2 col-xs-0"></div>
        </div>
        <div id="imagepath" >
            <canvas id="canvass" width="600" height="600"></canvas>
        </div>

    </div>
    
    
    <script src="app.js"></script>
</body>

</html>