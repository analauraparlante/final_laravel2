<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    
    <!-- <link rel="stylesheet" href="<?php echo url('css/bootstrap.min.css');?>">-->
    
    <?= Html::style('css/bootstrap.min.css', ['media' => 'screen', 'type' => null]);?>
    @yield('styles')
	<style type="text/css">
  
   .costado{margin-left:950px;margin-top:-70px;}
</style>
	
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            
            <div class="navbar-header">
               <h1 id="logo">Libería speaker</h1>
				
            </div>

            
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
        
        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>