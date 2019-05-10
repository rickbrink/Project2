$('.login-slide').on('click', function () {
  $('.login-nav').slideToggle();
  $('.sign-nav').fadeOut(200);
});

$('.sign-slide').on('click', function () {
  $('.sign-nav').slideToggle();
  $('.login-nav').fadeOut(200);
});

$("#sidebar").mCustomScrollbar({
  theme: "minimal"
});

$('#sidebarCollapse').on('click', function () {
  $('#sidebar, #content').toggleClass('active');
  $('.collapse.in').toggleClass('in');
  $('a[aria-expanded=true]').attr('aria-expanded', 'false');
});

// Form

$(document).ready(function(){

  $('#btn_login_details').click(function(){

    var error_voornaam = '';
    var error_achternaam = '';
    var error_adres = '';
    var error_postcode = '';
    var error_woonplaats = '';
    var error_email = '';
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if($.trim($('#voornaam').val()).length == 0)
    {
      error_voornaam = 'voornaam is required';
      $('#error_voornaam').text(error_voornaam);
      $('#voornaam').addClass('has-error');
    }
    else
    {
      error_voornaam = '';
      $('#error_voornaam').text(error_voornaam);
      $('#voornaam').removeClass('has-error');
    }

    if($.trim($('#achternaam').val()).length == 0)
    {
      error_achternaam = 'achternaam is required';
      $('#error_achternaam').text(error_achternaam);
      $('#achternaam').addClass('has-error');
    }
    else
    {
      error_achternaam = '';
      $('#error_achternaam').text(error_achternaam);
      $('#achternaam').removeClass('has-error');
    }

    if($.trim($('#adres').val()).length == 0)
    {
      error_adres = 'adres is required';
      $('#error_adres').text(error_adres);
      $('#adres').addClass('has-error');
    }
    else
    {
      error_adres = '';
      $('#error_adres').text(error_adres);
      $('#adres').removeClass('has-error');
    }

    if($.trim($('#postcode').val()).length == 0)
    {
      error_postcode = 'postcode is required';
      $('#error_postcode').text(error_postcode);
      $('#postcode').addClass('has-error');
    }
    else
    {
      error_postcode = '';
      $('#error_postcode').text(error_postcode);
      $('#postcode').removeClass('has-error');
    }

    if($.trim($('#woonplaats').val()).length == 0)
    {
      error_woonplaats = 'woonplaats is required';
      $('#error_woonplaats').text(error_woonplaats);
      $('#woonplaats').addClass('has-error');
    }
    else
    {
      error_woonplaats = '';
      $('#error_woonplaats').text(error_woonplaats);
      $('#woonplaats').removeClass('has-error');
    }

    if($.trim($('#email').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email').text(error_email);
    $('#email').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    $('#email').removeClass('has-error');
   }
  }

  if(error_voornaam != '' || error_achternaam != '' || error_adres != '' || error_postcode != '' || error_woonplaats != '' || error_email != '')
  {
   return false;
  }
  else
  {
   $('#list_login_details').removeClass('active active_tab1');
   $('#list_login_details').removeAttr('href data-toggle');
   $('#login_details').removeClass('active');
   $('#list_login_details').addClass('inactive_tab1');
   $('#list_personal_details').removeClass('inactive_tab1');
   $('#list_personal_details').addClass('active_tab1 active');
   $('#list_personal_details').attr('href', '#personal_details');
   $('#list_personal_details').attr('data-toggle', 'tab');
   $('#personal_details').addClass('active in');
  }
});

$('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_login_details').removeClass('inactive_tab1');
  $('#list_login_details').addClass('active_tab1 active');
  $('#list_login_details').attr('href', '#login_details');
  $('#list_login_details').attr('data-toggle', 'tab');
  $('#login_details').addClass('active in');
});

$('#btn_personal_details').click(function(){
  var error_select_cat = '';

  if(error_select_cat != '')
  {
    return false;
  }
  else
  {
    $('#list_personal_details').removeClass('active active_tab1');
    $('#list_personal_details').removeAttr('href data-toggle');
    $('#personal_details').removeClass('active');
    $('#list_personal_details').addClass('inactive_tab1');
    $('#list_contact_details').removeClass('inactive_tab1');
    $('#list_contact_details').addClass('active_tab1 active');
    $('#list_contact_details').attr('href', '#select_spel');
    $('#list_contact_details').attr('data-toggle', 'tab');
    $('#select_spel').addClass('active in');
  }
});

$('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
});

$('#btn_select_spel').click(function(){
  var error_select_spel = '';

  if(error_select_spel != '')
  {
    return false;
  }
  else
  {
    $('#list_contact_details').removeClass('active active_tab1');
    $('#list_contact_details').removeAttr('href data-toggle');
    $('#select_spel').removeClass('active');
    $('#list_contact_details').addClass('inactive_tab1');
    $('#list_cat_spel').removeClass('inactive_tab1');
    $('#list_cat_spel').addClass('active_tab1 active');
    $('#list_cat_spel').attr('href', '#contact_categorie_spel');
    $('#list_cat_spel').attr('data-toggle', 'tab');
    $('#contact_categorie_spel').addClass('active in');
  }

});

$('#previous_btn_select_spel').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#select_spel').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
});

$('#btn_cat_spel').click(function(){
  var error_address = '';

  if(error_address != '')
  {
    return false;
  }
  else
  {
    $('#btn_contact_details').attr("disabled", "disabled");
    $(document).css('cursor', 'prgress');
    $("#register_form").submit();
  }

});

$("#select_spel_soort").change(function() {
    var first = $(this);
    var second = $(this);
    $("#select_cat_bordspel").prop("disabled", function() {
        return first.val() === "computer";
    });
    $("#select_cat_game").prop("disabled", function() {
        return second.val() === "bord";
    });
});

$('#previous_btn_categorie_spel_details').click(function(){
  $('#list_cat_spel').removeClass('active active_tab1');
  $('#list_cat_spel').removeAttr('href data-toggle');
  $('#contact_categorie_spel').removeClass('active in');
  $('#list_cat_spel').addClass('inactive_tab1');
  $('#list_contact_details').removeClass('inactive_tab1');
  $('#list_contact_details').addClass('active_tab1 active');
  $('#list_contact_details').attr('href', '#select_spel');
  $('#list_contact_details').attr('data-toggle', 'tab');
  $('#select_spel').addClass('active in');
});

});
