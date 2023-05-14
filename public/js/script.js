function collapseMenu() {

    jQuery('.mob-menu').show()
    jQuery('html').css('overflow', 'hidden')
}

function closeMenu() {
    jQuery('.mob-menu').hide()
    jQuery('html').css('overflow', 'inherit')
    jQuery('html').css('overflow-x', 'hidden')
}

function mobFilterColapse() {

    jQuery('.mob-filter-title').parent().find('.mob-filter-body').slideToggle('fast')
}

jQuery('.cat-title').on('click', function () {
    if (jQuery(this).parent().find('ul').is(':visible')) {
        jQuery(this).find('img').addClass('closed-cat-list-icon')
    } else {
        jQuery(this).find('img').removeClass('closed-cat-list-icon')
    }
    jQuery(this).parent().find('ul').slideToggle()
})