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


function showOverView() {
    jQuery('#pro_tab > div').hide()
    jQuery('.overview').show()
    jQuery('.tabs>span').removeClass('active')
    jQuery('.overview-head').addClass('active')
}

function showPromotion(){
    jQuery('#pro_tab > div').hide()
    jQuery('.promotion').show()
    jQuery('.tabs>span').removeClass('active')
    jQuery('.promotion-head').addClass('active')
}

function showUnit(){
    jQuery('#pro_tab > div').hide()
    jQuery('.unit').show()
    jQuery('.tabs>span').removeClass('active')
    jQuery('.unit-head').addClass('active')
}

function showFeature(){
    jQuery('#pro_tab > div').hide()
    jQuery('.feature').show()
    jQuery('.tabs>span').removeClass('active')
    jQuery('.feature-head').addClass('active')
}

function  showDepositStructure(){
    jQuery('#pro_tab > div').hide()
    jQuery('.deposit-structure').show()
    jQuery('.tabs>span').removeClass('active')
    jQuery('.deposit-structure-head').addClass('active')
}



function  showDeveloper(){
    jQuery('#pro_tab > div').hide()
    jQuery('.developer').show()
    jQuery('.tabs>span').removeClass('active')
    jQuery('.developer-head').addClass('active')
}


