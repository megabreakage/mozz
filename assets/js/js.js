$(document).ready(function(){

  $('h6').addClass('animated fadeIn');

  $('#selectProduct').change(function(){
    $('#packages').hide();
    $('#specs').removeClass('offset-md-2');
    productVal = $("#selectProduct").val();
    productName = $("#selectProduct option:selected").text()
    if (productVal == 1 ) {
      $("#packages").show('slow');
    }else if (productVal == 2) {
      alert(productVal);
    }else if (productVal == 3) {
      alert(productVal);
    }else if (productVal == 4) {
      alert(productVal);
    }else{
      alert('No Product Selected');
    }

  });

  $('#curtainBox').click(function(){
    $('#hooks').show('slow');
  });
    $('#bigHook').click(function(){
      alert('Big');
      bigHook = true;
      rod = false;
      smallHook = false;
    });
    $('#smallHook').click(function(){
      smallHook = true;
      bigHook = false;
      rod = false;
      alert(smallHook);
    });

  $('#rod').click(function(){
    $('#hooks').hide('slow');
    bigHook = false;
    smallHook = false;
    rod = true;
  });

  var labor = 200;
  var array_products = [];

  $('#platinum').click(function(){
    $('#cartEmpty').hide();
    $('#cart').show('slow');
    var length =  $('input#materialSize').val();
    var folds = parseFloat($('#selectFold').val());
    var totalLength = folds * length;
    var costPerMtr = 2500;
    var totalCost = (totalLength * costPerMtr) + labor;

    $('#cartList').append('<p>'+productName+' x'+folds+' <small><i>(Platinum)</i></small></p>');

    if (bigHook == true) {
      $('#cartList').append('<p> Big Hooks </p>');
    }
    if (smallHook ==true) {
      $('#cartList').append('<p>Small Hooks</p>');
    }
    $('#length').append('<p>'+totalLength+'</p>');
    $('#cartPrices').append('<p>'+totalCost+'</p>');
  });

  $('#gold').click(function(){
    var length =  $('input#materialSize').val();
    var folds = parseFloat($('#selectFold').val());
    var totalLength = folds * length;
    var costPerMtr = 1100;
    var totalCost = (totalLength * costPerMtr) + labor;

    $('#cartList').append('<p>'+productName+' x'+folds+' <small><i>(Gold)</i></small></p>');
    if (bigHook == true) {
      $('#cartList').append('<p> Big Hooks </p>');
    }
    if (smallHook ==true) {
      $('#cartList').append('<p>Small Hooks</p>');
    }
    $('#length').append('<p>'+totalLength+'</p>');
    $('#cartPrices').append('<p>'+totalCost+'</p>');

    var obj = {};
    obj['productName'] = productName;
    obj['folds'] = folds;
    obj['totalLength'] = totalLength;
    obj['totalCost'] = totalCost;

    console.log(obj);
  });


});
