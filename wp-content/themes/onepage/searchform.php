<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <label class="label-search">

        <input type="text" class="search-field" placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
    </label>
    <label class="label-category">
        <div class="select-container">
            <select name="category" id="category">
                <option value="">Selecione uma Categoria</option>
                <?php
                $categories = get_categories();
                foreach ($categories as $category) {
                    echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';
                }
                ?>
            </select>
            <span class="arrow-down">&#x25BC;</span>
        </div>
    </label>
    <button type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button') ?>">Pesquisar</button>
</form>