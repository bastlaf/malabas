<form class="formSearch" action="<?php echo home_url( '/' ); ?>" method="get">
    <label class="textSearch" for="search">Rechercher :</label>
    <input class="inputSearch" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input class="logoSearch" type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/img/search.svg" />
</form>