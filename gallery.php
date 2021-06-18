<?php include_once "header.php"; ?>
        <section class="py-9 overflow-hidden text-center">
            <div class="background-holder overlay overlay-1 parallax"
                style="background-image:url(assets/images/projects_header.jpg);"></div>
            <!--/.background-holder-->
            <div class="container">
                <div class="row" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="col">
                        <div class="overflow-hidden">
                            <h1 class="fs-5 fs-sm-6 color-white mb-3" data-zanim='{"delay":0}'>Proyectos</h1>
                        </div>
                        <div class="overflow-hidden">
                            <p class="fs-2 fw-300 ls color-8 text-uppercase" data-zanim='{"delay":0.1}'>DecHogar Elegancia en tu Hogar</p>
                        </div>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </section>
        
        <section class="py-4 fs-1 text-center background-9">
            <div class="container">
                <div class="row">
                <div id="fotos2" class="fotos2">
                <script>
                    let n = 37; //numero de imagenes
                    let gallery = document.getElementById('fotos2') ;
                    for (let i = 1; i<= n; i++){
                    gallery.innerHTML+='<div class="card fotos" style="width: 18rem; margin-bottom:30px">     <img class="card-img-top" src="./gallery/'+ i +'.jpg" alt="Card image cap" width="350" height="280">      <div class="card-body">  <h5 class="card-title">Dec Hogar</h5>   </div>     </div>';
                    }
                </script>  </div>
                            <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
                            <script>
                                lazyload();
                            </script>
                            <style>
                                .fotos2{
                                    display: flex;
                                    flex-wrap: wrap;
                                    flex-direction: row;
                                    align-content: stretch;
                                    justify-content: space-evenly;
                                    align-items: flex-start;
                                    margin-top: 20px;
                                    margin-bottom: 20px;
                                }
                                .fotos{
                                    min-width: 350px;
                                    min-height: 280px;
                                }
                                .lazy{width:230px;height:180px;margin:6px;}
                                @media screen and (min-width:300px) and (max-width:860px) {
                                .lazy{width:47%;height:200px;margin:6px;}
                                }
                                @media screen and (max-width:479px) {
                                .lazy{width:98%;height:100%;margin:6px;}
                                }
                            </style>
                        </div>
                    </div>
                    
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </section>
        <script src="./js/main.js"></script>
<?php include_once "footer.php"; ?>
