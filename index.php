<?php
include_once "header.php";
include_once "func/fetchdata.php";
include_once "res/query.php";

if(!getUsername($_POST['username'])){
    header('Location: http://customers.mvc-technology.com/404.php');
}
?>



    
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Frontend Panel</h1>
                    <div class="row-container">
                        

                    <iframe class="ilframe" src="http://127.0.0.1/mvcstreetfe/" title="Street Control"></iframe>
                    
                    </div>


                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
