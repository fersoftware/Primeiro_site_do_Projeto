<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <ul class="nav">
                <?php

                //Aprendendo a usar array_walk

                $pages = ['Home','Empresa','Produtos','Servicos', 'Contatos'];

                array_walk($pages,function ($x) use($pagina){

                        $content = "<a href='".strtolower($x)."'>".$x."</a>";
                        $li_str = "<li>" . $content . "</li>";

                        if(strtolower($x) == $pagina)
                        {
                            $li_str = "<li class='active'>" . $content . "</li>";
                        }

                        echo $li_str;
                    }
                );

                ?>
            </ul>
        </div>
    </div>
</div>
