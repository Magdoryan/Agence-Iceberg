/**
 * Boolean pour la vérification du formulaire de contact
 */
let bool_verif_name=false;
let bool_verif_email=false;
let bool_verif_objet=false;
let bool_verif_message=false;

/**
 * Gestion de l'evenement une fois que la page a charger
 */

$(window).on('load',function(){
  AOS.init();
  $(".loader").remove()
  $('.arrowCenter').removeClass('pcHide')
  // Mobile
  if($(document).width() <= 1000) {
    $('#mainTitle').removeClass('mainTitle');
  }

  menu_burger()
  carousel_evenement()
//Gestion des évenements pour le formulaire
  if($('#Contact')){
    $('#name').blur(valider_nom)
    $('#email').blur(valider_email)
    $('#objet').blur(valider_objet)
    $('#message').blur(valider_message)
    $('#form').submit(valider)
  }
});
/**
 * Fonction qui permet de gerer les evenements d'ouverture ou de fermeture du menu burger
 */
function menu_burger(){
  //ouverture
  $('#burger').click(function (){
    $('#menuSection').removeClass('displayBurger')
    $('#menuSection').addClass('burgerTop')
  })
  //fermeture
  $('#close, #Acc, #Pre, #Equ, #Pro, #Con').click(function (){
    $('#menuSection').addClass('displayBurger');
    $('#menuSection').removeClass('burgerTop');
  })
}

function carousel_evenement(){
  // Carousel du changement de d'image sous forme mobile
  $('#rightButton').click(function(){carousel(1)})
  $('#leftButton').click(function(){carousel(-1)})
}

function carousel(inc){
  idActuel=parseInt($('.carousel').attr('id'))
  $('#'+idActuel).removeClass('carousel')
  $('#'+idActuel).addClass('mobileHide')
  idDestination=idActuel+inc
  if(idDestination>4){
    idDestination=1
  }
  if(idDestination<1){
    idDestination=4
  }
  $('#'+idDestination).addClass('carousel')
  $('#'+idDestination).removeClass('mobileHide')
  $('#headName').text($('#'+idDestination).attr('alt'))
  $('#headRole').text($('#'+idDestination).attr('data-info'))
}

/**
 * Fonction de test de l'envoie du formulaire
 */
function valider() {
  return bool_verif_name && bool_verif_email && bool_verif_objet && bool_verif_message
}

/**
 * Fonction de test de la validation du nom
 */
function valider_nom(){
  regex=/^[a-zA-Zñéèïîêôöëüà]+(([',. - ][a-zA-Zñéèïëêöîôüà])?[a-zA-Zñéèêïîëöôüà]*)*$/
  if(!regex.test($('#name').val())){
    $('#name').addClass('error')
    bool_verif_name=false;
  }else{
    $('#name').removeClass('error')
    bool_verif_name=true;
  }
}

/**
 * Fonction de test de la validation de l'email
 */
function valider_email(){
  const re = /\S+@\S+\.\S+/;
  const mail = $('#email').val();
  if (re.test(mail) === false) {
    $('#email').addClass('error')
    bool_verif_email=false
  }else{
    $('#email').removeClass('error')
    bool_verif_email=true
  }
}

/**
 * Fonction de test de la validation du champ objet
 */
function valider_objet(){
  if($('#objet').attr('value')=="" && $('#objet').hasClass("required")){
    $('#objet').addClass('error')
    bool_verif_objet=false;
  }else{
    $('#objet').removeClass('error')
    bool_verif_objet=true;
  }
}

/**
 * Fonction de test de la validation du message
 */
function valider_message(){
  if($(this).attr('value')=="" && $(this).hasClass("required")){
    $('#message').addClass('error')
    bool_verif_message=false;
  }else{
    $('#message').removeClass('error')
    bool_verif_message=true;
    }
}
