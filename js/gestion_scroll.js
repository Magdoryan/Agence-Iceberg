//Recuperation de l'ancre si elle existe
let current_ancre=window.location.hash.substr(1)

let current_section = 1
let max_section = 5
let min_section = 1
/**
 * Execution d'une fonction lorsque l'url change
 */
$( window ).on( 'hashchange', gestion_ancre)


/**
 * Gestion de l'evenement une fois que la page a charger
 */
$(window).on('load',function(){

    gestion_ancre()
    scroll_souris()

    $('#menu li a').on('click',  function (){
      if(window.location.hash.substr(1)===$(this).attr('href').split('#')[1]){
        $( window ).trigger( 'hashchange' )
      }
    })
    //Remise en place en cas de refresh

    $('body, html').stop().animate({
      scrollTop: $('[data-scroll="section' + current_section + '"]').offset().top
    }, 'slow');

    //Evenement sur les fleches
    $('#arrowUp').on('click', up)
    $('#dropDown').on('click', down)

    //Evenement hover lors du survol des têtes de Team
    let srcImage
    $(".teamList").hover(function(){
      srcImage= $(this).attr("src").split(".")[0]
      $(this).attr("src", srcImage+"02.png")
    },function(){
      $(this).attr("src", srcImage+".png")
    })

    //Evenement sur le bouton voir plus
    $('.button').on('click', function(){
      current_section = 2
      verif_section()
    })
})

/**
 * Verification de la section sur laquelle on ce trouve pour savoir si on doit faire disparaitre ou faire apparaitre la fleche de navigation
 */
function verif_section(){
  if(current_section==1){
    $('#arrowUp').hide()
  }else{
    $('#arrowUp').show()
  }
  if(current_section==5){
    $('#dropDown').hide()
  }else{
    $('#dropDown').show()
  }
}

/**
 * Fonction qui permet de gerer l'evenement du scroll de la souris pour le changement de section
 */
var animating = false;
function scroll_souris(){
  window.addEventListener("wheel", function (e) {
    if(animating){
      return false
    }
    if ( e.deltaY < 0 && current_section>min_section) {
      animating = true
      up()
    } else if ( e.deltaY > 0 && current_section<max_section) {
      animating = true
      down()
    }
    return false
  }, { capture: true, passive: true })
}

/**
 * Fonction qui permet de savoir si une ancre est present et d'agir en consequence
 */
function gestion_ancre(){
  current_ancre=window.location.hash.substr(1)
  switch(current_ancre){
    case 'Presentation':
      current_section=2
      break
    case 'Equipe' :
      current_section=3
      break
    case 'Projets' :
      current_section=4
      break
    case 'Contact':
      current_section=5
      break
    default:
      current_section=1
  }
  verif_section()
}

/**
 * Fonction permettant de monter a la section suivante
 */
function up(){
  current_section = current_section - 1
  $('body, html').stop().animate({
      scrollTop: $('[data-scroll="section' + current_section + '"]').offset().top
  }, 1000, function(){
    animating = false
});
  verif_section()
}

/**
 * Fonction permettant de descendre a la section suivante
 */
function down(){
  current_section = current_section + 1 //down
  $('body, html').stop().animate({
    scrollTop: $('[data-scroll="section' + current_section + '"]').offset().top
  }, 1000, function(){
    animating = false
});
  verif_section()
}