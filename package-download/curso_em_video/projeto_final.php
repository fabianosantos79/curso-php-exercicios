<pre>
    <?php

       require_once 'autoload.php';

       // require_once 'video.php';
       // require_once 'gafanhoto.php';
       // require_once 'visualizacao.php';

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML 5");

        $g[0] = new Gafanhoto("Fabiano", 40, "M", "1234");
        $g[1] = new Gafanhoto("Viviane", 41, "F", "abcdef");

        $vis[0] = new Visualizacao($g[0], $v[1]);
        $vis[1] = new Visualizacao($g[0], $v[0]);
        
        //$vis[0]->avaliar();
        //$vis[0]->avaliarPorc(85);

        //print_r($v);
        //print_r($g);
        print_r($vis);

        


    ?>
</pre>