$('.tlt').textillate({
    in: {
        effect: 'fadeIn',delay: '150',
    },
    out:{
        effect: 'flipOutX',
        delay: '150',
        shuffle:'true'
    },
    loop:true
});

function changeLanguageToEn() {
    $('#th-his').fadeOut(0);
    $('#en-his').fadeIn();

}
function changeLanguageToTh(){
    $('#en-his').fadeOut(0);
    $('#th-his').fadeIn();
}