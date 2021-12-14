<?php

/**
 * Se encarga de gestionar las llamadas a las clases y métodos de todo el proyecto
 */

 class AlimentosController{
     private string $url;
     private string $action;

     public function __construct($url, $action)
     {
         $this->url = $url;
         $this->action = $action;   
     }

     public function renderViews($template, $view) 
     {
         $template = $this->captureTemplate($template);
         $view = $this->captureView($view);
         return str_replace('{{content}}', $view, $template);
     }

     protected function captureTemplate($template)
     {
         ob_start();
         include_once "../views/templates/$template.php"; //Calls the specified template
         return ob_get_clean();
     }

     protected function captureView($view)
     {
         ob_start();
         include_once "../views/$view.php"; //Calls the specified view to render
         return ob_get_clean();
     }

 }

?>