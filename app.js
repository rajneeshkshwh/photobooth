'use strict';

        const video = document.getElementById("video");
        const canvas = document.getElementById("canvas");
        const canvass = document.getElementById("canvass");
        const snap = document.getElementById("snap");
        const snaps = document.getElementById("snaps");
        const imagepath = document.getElementById("imagepath");
        const snapss = document.getElementById("snapss");
        const fg = document.getElementById("fg");
        const email = document.getElementById("email");
        const emailbutton = document.getElementById("emailbutton");
        const downimage = document.getElementById("downimage");
        const downloadimage = document.getElementById("downloadimage");
        const design1 = document.getElementById("design1");
        const design2 = document.getElementById("design2");
        const design3 = document.getElementById("design3");
        const getErrormsgElement = document.getElementById("get#ErrorMsg");
        const width = screen.width;
        const height = screen.height;
        const loader = document.getElementById("loader");
        var widt;

        if(width<=600){
            widt = 300;
        }
        else if (width>600 & width < 768) {
            widt = 400;
        }
        else {
            widt = 600;
        }

        const constraints = {
            video: {
                width: widt,
                height: widt,
            }
        };

        async function init() {
            try {
                
                const stream = await navigator.mediaDevices.getUserMedia(constraints);
                setfg();
                handleSuccess(stream);
            }
            catch (e) {
                errorMsgElement.innerHTML = `navigator.getUserMedia.error:${e.toString()}`;
            }
        }

        function setfg(){
            // fg.setAttribute("width", video.width);
        }

        function handleSuccess(stream) {
            window.stream = stream;
            video.srcObject = stream;
        }
        init();

        var path; 
        var context = canvas.getContext('2d');
        var contextt = canvass.getContext('2d');
        snap.addEventListener('click', function () {
            context.translate(canvas.width, 0); 
            context.scale(-1,1);
            context.drawImage(video, 0, 0, 640, 480);
            context.translate(canvas.width, 0); 
            context.scale(-1,1);
            context.drawImage(fg, 0, 0, 640, 480);
            contextt.drawImage(canvas, 0, 0, 600, 600);
            path = canvass.toDataURL('image/png');
            video.style.display = "none";
            canvas.style.display = "block"
        });

        $(".design").on("click", function(){
            $("#fg").attr("src", $(this).attr("src")).data("design", $(this).data("design"));
            $(".design.active").removeClass("active");
            $(this).addClass("active");
        });

        $("#snap").on("click", function(){
            snap.style.display = "none";
            snaps.style.display = "block";
            snapss.style.display = "block"
            design1.style.display = "none";
            design2.style.display = "none";
            design3.style.display = "none";
        });

        $("#snaps").on("click", function(){
            location.reload();
        });

        $("#snapss").on("click", function(){
            snaps.style.display = "none";
            snapss.style.display = "none";
               
        });

        var imagelocation;
        $("#snapss").on("click", function(){
            loader.style.display="block";
            $.ajax({
                url:'upload.php',
                data: {
                    'path':path
                },
                type:'post',
                success: function(response){
                    loader.style.display="none";
                    email.style.display = "block";
                    emailbutton.style.display = "block";
                    console.log('success');
                    console.log(response);
                    imagelocation = response; 
                    downimage.href = imagelocation;
                },
                error: function(){
                }
            })
        });

        $("#emailbutton").on("click", function(){
            email.style.display = "none";
            emailbutton.style.display = "none";
            loader.style.display="block";
            console.log(imagelocation);
            $.ajax({
                url:'mail.php',
                data: {
                    'email':$('#email').val(),
                    'image':imagelocation
                },
                type:'post',
                success: function(response){
                    loader.style.display="none";
                    console.log('success');
                    downimage.style.display = "block";
                    downloadimage.style.display= "block";
                    
                },
                error: function(){
                }
            })
        });



