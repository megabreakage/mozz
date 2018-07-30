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
  var array_sizes = [];
  var array_folds = [];
  var array_totalLength = [];
  var array_totalCost = [];

  $('#platinum').click(function(){
    $('#cartEmpty').hide();
    $('#cart').show('slow');
    var length =  parseFloat($('input#materialSize').val());
    var folds = parseFloat($('#selectFold').val());
    var totalLength = folds * length;
    var costPerMtr = 2500;
    var totalCost = (totalLength * costPerMtr) + labor;

    array_products.push('Platinum');
    array_sizes.push(length);
    array_folds.push(folds);
    array_totalLength.push(totalLength);
    array_totalCost.push(totalCost);

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
    var length =  parseFloat($('input#materialSize').val());
    var folds = parseFloat($('#selectFold').val());
    var totalLength = folds * length;
    var costPerMtr = 1100;
    var totalCost = (totalLength * costPerMtr) + labor;

    array_products.push('Gold');
    array_sizes.push(length);
    array_folds.push(folds);
    array_totalLength.push(totalLength);
    array_totalCost.push(totalCost);

    $('#cartList').append('<p>'+productName+' x'+folds+' <small><i>(Gold)</i></small></p>');
    if (bigHook == true) {
      $('#cartList').append('<p> Big Hooks </p>');
    }
    if (smallHook ==true) {
      $('#cartList').append('<p>Small Hooks</p>');
    }
    $('#length').append('<p>'+totalLength+'</p>');
    $('#cartPrices').append('<p>'+totalCost+'</p>');

    // var obj = {};
    // obj['productName'] = productName;
    // obj['package'] = 'Gold';
    // obj['folds'] = folds;
    // obj['totalLength'] = totalLength;
    // obj['totalCost'] = totalCost;
    //
    // var json_obj = JSON.stringify(obj);
    // console.log(json_obj);
  });

  $('#checkout').click(function(){

    var total = 0;

    console.log(array_products);
    console.log(array_sizes);
    console.log(array_folds);
    console.log(array_totalLength);
    console.log(array_totalCost);

    button = '<div class="dropdown"><button class="actionButton dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><small>Action</small></button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><small><a class="dropdown-item" href="#" data-toggle="modal" <small><a class="dropdown-item" href="#" data-toggle="modal" data-target="#removeProduct">Remove</a></small></div></div>'

    cartdata = '<table class="table table-sm table-hover"><thead><tr><th></th><th>Product</th><th>Size</th><th>Folds</th><th>Total Length</th><th>Totals</th><th>Options</th></tr></thead><tbody><tr>'
    for (var i = 0; i < array_products.length; i++) {
      total += array_totalCost[i];
      cartdata += '<tr><td></td><td>'+array_products[i]+'</td><td>'+array_sizes[i]+'</td><td>'+array_folds[i]+'</td><td>'+array_totalLength[i]+'</td><td>'+array_totalCost[i]+'</td><td>'+button+'</td></tr>'
    };
    cartdata += '<tr> <td></td> <td></td> <td></td> <td></td> <td></td> <td>'+total+'</td> </tr></thead>';

    $('#output').html(cartdata);
  });

});
