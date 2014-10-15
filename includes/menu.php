<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <ul class="nav">
                <?php

                if(isset($_GET['p']))
                {
                    $pag = $_GET['p'];
                }
                else
                {
                    $pag = 'home';
                }


                $active_page = '';

                //Se a pagina nao existir, nao ativa o menu
                if(!file_exists('includes/'.$pag.'.php'))
                {
                    $active_page = -1;
                }

                if(!$active_page == -1)
                {
                    if(isset($_GET['a']))
                    {
                        $active_page = $_GET['a'];
                    }
                }

                $pages = array();
                $pages[0] = '<a href="?p=home&a=0">Home</a>';
                $pages[1] = '<a href="?p=empresa&a=1">Empresa</a>';
                $pages[2] = '<a href="?p=produtos&a=2">Produtos</a>';
                $pages[3] = '<a href="?p=servicos&a=3">Servicos</a>';
                $pages[4] = '<a href="?p=contatos&a=4">Contatos</a>';


                foreach($pages as $page=>$content){
                    $li_str = '<li>';
                    if($page == $active_page){
                        $li_str = '<li class="active">';
                    }
                    $li_str .= $content.'</li>';
                    echo $li_str;
                }
                ?>
            </ul>
        </div>
    </div>
</div>
