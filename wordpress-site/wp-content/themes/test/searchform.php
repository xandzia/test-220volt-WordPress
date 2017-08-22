<form  class="search" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
    <span class="fa fa-search"></span>
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="поиск по сайту" />
	<input class="btn-search" type="submit" id="searchsubmit" value="ПОИСК" />
</form>